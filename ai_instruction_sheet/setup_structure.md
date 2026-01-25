# 実装計画書: WordPressテーマディレクトリ構成作成

## 概要
Wordpressのテーマ開発における初期セットアップを行うための実行計画です。
Sassを使用した開発を想定したフォルダ構成を作成します。
**要望により、CSS, SCSS, JS, 画像リソースは全て `assets` フォルダ内で管理します。**

## 対象ディレクトリ
`/Users/ryoto/Local Sites/yoshikawa-hospital/app/public/wp-content/themes/yoshikawa-hospital`

## 作成ファイルおよびディレクトリ一覧

### 1. WordPress基本ファイル (ルートディレクトリ)
- [ ] `style.css`: テーマ定義ファイル（WordPress認識用）
  - 必須項目: Theme Name (yoshikawa-hospital)
- [ ] `index.php`: メインテンプレートファイル
- [ ] `functions.php`: テーマ関数ファイル
- [ ] `header.php`: ヘッダーテンプレート
- [ ] `footer.php`: フッターテンプレート
- [ ] `front-page.php`: トップページ用テンプレート

### 2. アセット関連ディレクトリ (`/assets`)
CSS(Sass), JS, 画像などの静的ファイルは全てここに集約します。

#### CSS / Sass
- [ ] `assets/css/` (コンパイル後のCSS出力先)
- [ ] `assets/scss/` (Sassソースファイル)
  - [ ] `style.scss`: エントリーポイント
  - [ ] `foundation/`: ベーススタイル
    - `_base.scss`
    - `_reset.scss`
    - `_variables.scss`
    - `_mixin.scss`
  - [ ] `layout/`: レイアウト共通
    - `_header.scss`
    - `_footer.scss`
    - `_main.scss`
  - [ ] `object/`: オブジェクト（FLOCSSベース）
    - `component/`
      - `_button.scss`
    - `project/`
      - `_top.scss`
    - `utility/`
      - `_utility.scss`

#### JavaScript
- [ ] `assets/js/`
  - [ ] `main.js`

#### Images
- [ ] `assets/images/`

## 実行手順
1. 上記のフォルダ構造をディレクトリ作成コマンドで作成する。
2. それぞれのファイルを新規作成（空ファイル、または最小限のボイラープレート記述）する。
   - `style.css`には必ずテーマヘッダーを含めること。
   - `assets/scss`配下のファイル構成を整える。

## 補足
- `.gitignore`は編集しないこと。
- 文字コードはUTF-8を使用すること。
