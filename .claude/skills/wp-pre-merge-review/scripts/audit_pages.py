#!/usr/bin/env python3
"""
吉川病院サイト(yoshikawa-hospital)のLocal環境・本番環境に対して、developをmainに
マージする前や本番デプロイ後に確認したい「コミット差分では検出できないサイト横断の項目」
の生データを取得して標準出力にまとめる。

対象:
- SEO: title/canonical/meta description/og:image/見出し順(h1〜h6)/imgのalt有無
- 内部リンク切れ: ページ内の<a href>のうち内部リンクのステータスコード
- 複数ページ横断のtitle/meta description重複

判定(良い/悪い)はここでは最小限に留め、事実の抽出を主目的にする。詳細な判断は
SKILL.mdの手順に沿って呼び出し側(Claude)が行う。

引数（順不同、複数指定可）:
- なし: Local環境の固定ページ全部 + 直近の投稿記事1件（リンク切れ・重複チェックも実行）
- "production" または "本番": 対象環境を本番(ENVIRONMENTS参照)に切り替える
- PAGES のキー、または "post": その1件だけを対象にする（重複チェックは対象外）
- "http"で始まる任意のURL: そのURL1件だけをアドホックにチェックする（重複チェックは対象外）

例:
  python3 audit_pages.py                      # Local、全ページ
  python3 audit_pages.py guide                # Local、guideページのみ
  python3 audit_pages.py production            # 本番、全ページ
  python3 audit_pages.py production medical    # 本番、medicalページのみ
"""

import json
import re
import ssl
import sys
import urllib.error
import urllib.request
from collections import defaultdict
from typing import Optional
from urllib.parse import urljoin

ENVIRONMENTS = {
    "local": "https://yoshikawa-hospital.local",
    "production": "https://yoshikawa-hospital.com",
    "本番": "https://yoshikawa-hospital.com",
}

BASE_URL = ENVIRONMENTS["local"]

PAGES = {
    "front": "/",
    "about": "/about/",
    "medical": "/medical/",
    "guide": "/guide/",
    "access": "/access/",
    "news": "/news/",
}

SKIP_HREF_PREFIXES = ("#", "mailto:", "tel:", "javascript:")

SSL_CTX = ssl._create_unverified_context()
UA = {"User-Agent": "wp-pre-merge-review-audit"}


def fetch(url: str, timeout: int = 10) -> str:
    req = urllib.request.Request(url, headers=UA)
    with urllib.request.urlopen(req, timeout=timeout, context=SSL_CTX) as res:
        return res.read().decode("utf-8", errors="replace")


def latest_post_url() -> Optional[str]:
    api = f"{BASE_URL}/wp-json/wp/v2/posts?per_page=1&orderby=date&order=desc&_fields=link"
    try:
        body = fetch(api)
        data = json.loads(body)
        if data:
            return data[0]["link"]
    except Exception:
        pass
    return None


def extract_internal_links(html: str, page_url: str) -> set:
    links = set()
    for href in re.findall(r'<a\b[^>]*href="([^"]+)"', html):
        href = href.strip()
        if not href or href.startswith(SKIP_HREF_PREFIXES):
            continue
        absolute = urljoin(page_url, href).split("#", 1)[0]
        if absolute.startswith(BASE_URL):
            links.add(absolute)
    return links


def check_status(url: str) -> Optional[int]:
    for method in ("HEAD", "GET"):
        req = urllib.request.Request(url, headers=UA, method=method)
        try:
            with urllib.request.urlopen(req, timeout=10, context=SSL_CTX) as res:
                return res.status
        except urllib.error.HTTPError as e:
            if e.code == 405 and method == "HEAD":
                continue  # HEADが許可されていないサーバーがあるのでGETで再試行
            return e.code
        except Exception:
            return None
    return None


def analyze(url: str) -> dict:
    html = fetch(url)

    title_m = re.search(r"<title>(.*?)</title>", html, re.S)
    title = title_m.group(1).strip() if title_m else None

    canonicals = re.findall(r'<link rel="canonical" href="([^"]*)"', html)

    desc_m = re.findall(r'<meta name="description" content="([^"]*)"', html)

    og_image = re.findall(r'<meta property="og:image" content="([^"]*)"', html)

    headings = re.findall(r"<h([1-6])[ >]", html)

    imgs = re.findall(r"<img\b[^>]*>", html)
    missing_alt = []
    empty_alt = []
    for tag in imgs:
        src_m = re.search(r'src="([^"]*)"', tag)
        src = src_m.group(1) if src_m else "(src不明)"
        alt_m = re.search(r'alt="([^"]*)"', tag)
        if alt_m is None:
            missing_alt.append(src)
        elif alt_m.group(1) == "":
            empty_alt.append(src)

    return {
        "url": url,
        "html": html,
        "title": title,
        "title_len": len(title) if title else 0,
        "canonicals": canonicals,
        "descriptions": desc_m,
        "og_images": og_image,
        "headings": headings,
        "h1_count": headings.count("1"),
        "img_total": len(imgs),
        "img_missing_alt": missing_alt,
        "img_empty_alt": empty_alt,
    }


def print_report(key: str, result: dict):
    print(f"## {key} ({result['url']})")
    if result.get("error"):
        print(f"- エラー: {result['error']}")
        print()
        return
    title = result["title"] or "(未設定)"
    print(f"- title: {title} ({result['title_len']}文字)")
    print(f"- canonical: {result['canonicals']} (件数: {len(result['canonicals'])})")
    descs = result["descriptions"]
    if descs:
        for d in descs:
            print(f"- meta description: {d} ({len(d)}文字)")
    else:
        print("- meta description: (未設定)")
    print(f"- og:image: {result['og_images'] or '(未設定)'}")
    print(f"- 見出し順: {'>'.join('h' + h for h in result['headings']) or '(見出しなし)'}")
    print(f"- h1件数: {result['h1_count']}")
    print(f"- img総数: {result['img_total']}")
    print(f"- alt未設定のimg: {result['img_missing_alt'] or 'なし'}")
    print(f"- alt=\"\"(空)のimg: {result['img_empty_alt'] or 'なし'}")
    print()


def print_broken_links(link_sources: dict):
    print("## 内部リンク切れチェック")
    broken = []
    for url in sorted(link_sources):
        status = check_status(url)
        if status is None or status >= 400:
            broken.append((url, status, sorted(link_sources[url])))
    if not broken:
        print(f"- 問題なし（チェック対象: {len(link_sources)}件）")
    else:
        for url, status, sources in broken:
            status_label = status if status is not None else "接続エラー"
            print(f"- [{status_label}] {url}  (リンク元: {', '.join(sources)})")
    print()


def print_duplicates(results: dict):
    print("## title / meta description 重複チェック（複数ページ間）")

    def find_dupes(getter):
        rev = defaultdict(list)
        for key, result in results.items():
            if result.get("error"):
                continue
            value = getter(result)
            if value:
                rev[value].append(key)
        return {v: ks for v, ks in rev.items() if len(ks) > 1}

    title_dupes = find_dupes(lambda r: r["title"])
    desc_dupes = find_dupes(lambda r: r["descriptions"][0] if r["descriptions"] else None)

    if not title_dupes and not desc_dupes:
        print("- 問題なし")
    else:
        for value, keys in title_dupes.items():
            print(f"- title重複: 「{value}」 ({', '.join(keys)})")
        for value, keys in desc_dupes.items():
            print(f"- meta description重複: 「{value}」 ({', '.join(keys)})")
    print()


def parse_args(argv):
    global BASE_URL

    page_arg = None
    custom_url = None

    for a in argv:
        key = a.lower()
        if key in ENVIRONMENTS or a in ENVIRONMENTS:
            BASE_URL = ENVIRONMENTS.get(key, ENVIRONMENTS.get(a))
        elif a.startswith("http"):
            custom_url = a.rstrip("/")
        elif a == "post" or a in PAGES:
            page_arg = a
        else:
            valid = ", ".join(list(ENVIRONMENTS.keys()) + list(PAGES.keys()) + ["post"])
            print(f"不明な引数です: {a}\n有効な値: {valid}")
            sys.exit(1)

    return page_arg, custom_url


def main():
    page_arg, custom_url = parse_args(sys.argv[1:])

    targets = {}
    if custom_url:
        targets["custom"] = custom_url
    elif page_arg is None:
        targets = dict(PAGES)
        post_url = latest_post_url()
        if post_url:
            targets["post"] = post_url
    elif page_arg == "post":
        post_url = latest_post_url()
        if post_url:
            targets["post"] = post_url
        else:
            print("投稿記事が見つかりませんでした（REST APIから取得できず）。")
            return
    else:
        targets[page_arg] = PAGES[page_arg]

    print(f"対象環境: {BASE_URL}\n")

    results = {}
    link_sources = defaultdict(set)

    for key, path in targets.items():
        url = path if path.startswith("http") else f"{BASE_URL}{path}"
        try:
            result = analyze(url)
        except Exception as e:
            result = {"url": url, "error": str(e)}
        results[key] = result
        print_report(key, result)

        if not result.get("error"):
            for link in extract_internal_links(result["html"], url):
                link_sources[link].add(key)

    print_broken_links(link_sources)

    if len(targets) > 1:
        print_duplicates(results)


if __name__ == "__main__":
    main()
