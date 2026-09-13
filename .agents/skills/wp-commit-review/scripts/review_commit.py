#!/usr/bin/env python3
"""
git commit 後（SourceTree経由も含む）に直近コミットを Claude CLI でヘッドレスレビューし、
.claude/review-reports/pending/ に構造化Markdownレポートとして保存する。

.git/hooks/post-commit からバックグラウンドで呼ばれる想定。
GUIアプリ(SourceTree)経由だとターミナルのPATHが引き継がれないことがあるため、
claude / git / osascript は全てフルパスで呼び出す。
"""

import subprocess
from datetime import datetime
from pathlib import Path

REPO = Path("/Users/ryoto/Local Sites/yoshikawa-hospital/app/public/wp-content/themes/yoshikawa-hospital")
CLAUDE_BIN = "/Users/ryoto/.local/bin/claude"
OSASCRIPT_BIN = "/usr/bin/osascript"
GIT_BIN = "/usr/bin/git"

REPORT_DIR = REPO / ".claude" / "review-reports" / "pending"

REVIEW_PROMPT_TEMPLATE = """あなたはWordPressテーマ開発の経験豊富なコードレビュアーです。
このリポジトリの直近のコミット(HEAD)だけをレビューしてください。
まず `git show HEAD` を実行して差分を確認してください。前後関係の確認が必要なら `git show HEAD -- <file>` や `git log -p -- <file>` も使ってよいです。
ファイルの編集やgitの状態を変えるコマンド(commit/push/reset/checkout等)は絶対に実行しないでください。読み取りだけしてください。

レビュー観点:
- PHP(WordPress): エスケープ処理(esc_html/esc_url/esc_attr等)、wp_enqueue_scriptsでの正しいエンキュー、テンプレートタグの使い方、不要なecho/print_rやデバッグコードの残存
- HTML: セマンティックなタグ、alt属性などアクセシビリティ、不要なインラインスタイル
- CSS/SCSS: 命名規則(BEM等)の統一、レスポンシブ対応、未使用・重複スタイル
- 全般: 不要コメント、ハードコードされたURLや文字列、セキュリティ・バグに直結する問題

出力は次のMarkdown形式のみを返してください。前置きや後書き、出力全体をコードブロックで囲むことはしないでください。

# コミットレビュー: {short_sha}
- 日時: {date}
- コミットメッセージ: {commit_msg}
- 対象ファイル: (変更されたファイルを列挙)

## 良い点
- (箇条書き。無ければ「特になし」)

## 修正提案
### 1. [優先度: 高|中|低] <ファイルパス>:<行番号>
**問題**: <説明>
**修正案**:
```diff
<修正前後がわかる範囲のdiff形式のコードスニペット>
```

(問題があるだけ番号を続けてください。修正提案が一つもなければ「## 修正提案」の下に「特になし」とだけ書いてください)
"""


def run(cmd, timeout=30):
    return subprocess.run(cmd, cwd=REPO, capture_output=True, text=True, timeout=timeout)


def count_issues(markdown: str) -> int:
    if "## 修正提案" not in markdown:
        return 0
    section = markdown.split("## 修正提案", 1)[1]
    if "\n## " in section:
        section = section.split("\n## ", 1)[0]
    if "特になし" in section:
        return 0
    return section.count("\n### ")


def notify(title: str, subtitle: str, message: str):
    def esc(s: str) -> str:
        return s.replace("\\", "\\\\").replace('"', '\\"')

    script = f'display notification "{esc(message)}" with title "{esc(title)}" subtitle "{esc(subtitle)}"'
    try:
        subprocess.run([OSASCRIPT_BIN, "-e", script], timeout=10)
    except Exception:
        pass


def main():
    short_sha = run([GIT_BIN, "rev-parse", "--short", "HEAD"]).stdout.strip()
    if not short_sha:
        return

    commit_msg = run([GIT_BIN, "log", "-1", "--pretty=%s"]).stdout.strip()
    date_str = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    prompt = REVIEW_PROMPT_TEMPLATE.format(
        short_sha=short_sha, date=date_str, commit_msg=commit_msg
    )

    REPORT_DIR.mkdir(parents=True, exist_ok=True)

    try:
        result = subprocess.run(
            [
                CLAUDE_BIN, "-p", prompt,
                "--allowedTools", "Read,Bash(git show*),Bash(git diff*),Bash(git log*)",
                "--disallowedTools",
                "Edit,Write,Bash(git commit*),Bash(git push*),Bash(git reset*),Bash(git checkout*),Bash(rm*)",
            ],
            cwd=REPO,
            capture_output=True,
            text=True,
            timeout=300,
        )
        output = result.stdout.strip()
        if not output:
            output = (
                f"# レビュー実行エラー\nclaude CLIが空の出力を返しました。\n\n"
                f"stderr:\n```\n{result.stderr}\n```"
            )
    except Exception as e:
        output = f"# レビュー実行エラー\n{e}"

    timestamp = datetime.now().strftime("%Y%m%d-%H%M%S")
    report_path = REPORT_DIR / f"{timestamp}_{short_sha}.md"
    report_path.write_text(output, encoding="utf-8")

    issue_count = count_issues(output)
    subtitle = commit_msg[:80]
    if issue_count > 0:
        message = f"要修正 {issue_count}件見つかりました ({short_sha})"
    else:
        message = f"問題は見つかりませんでした ({short_sha})"

    notify("コミットレビュー完了", subtitle, message)


if __name__ == "__main__":
    main()
