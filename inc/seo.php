<?php
/**
 * SEO関連の出力（title/meta description/OGP/構造化データ/サイトマップ連携）
 *
 * SEOプラグインは導入せず、固定ページ構成が少ないテーマ特性を活かして
 * ページごとのタイトル・説明文をここで直接管理する。
 */

// title-tagサポートを有効化（header.phpに<title>タグが無いため必須）
add_theme_support('title-tag');

/**
 * 現在表示中のページに応じたSEO用タイトル・説明文を返す
 */
function yoshikawa_get_seo_meta() {
    $site_name = '吉川病院';

    if (is_front_page()) {
        return [
            'title'       => "{$site_name}｜大阪市西区九条南の外科・内科・整形外科など地域医療",
            'description' => '大阪市西区九条南の吉川病院。外科・内科・整形外科・ペインクリニック内科外科・肛門外科・皮膚科・泌尿器科など幅広い診療科目に対応し、入院設備を備えた地域のかかりつけ医です。救急対応も行っています。',
        ];
    }

    // page-about.php等はページスラッグとファイル名が一致しているため、
    // WordPressのテンプレート階層により「テンプレート未指定のまま」自動適用されることがある。
    // is_page_template()だけでは検出できないケースがあるため、スラッグ判定も併用する。
    if (is_page_template('page-about.php') || is_page('about')) {
        return [
            'title'       => "医師紹介・病院紹介｜{$site_name}",
            'description' => '吉川病院の病院概要と医師紹介。院長・常勤医師・非常勤医師の専門分野や資格、病床数・指定医療機関の情報を掲載しています。',
        ];
    }

    if (is_page_template('page-medical.php') || is_page('medical')) {
        return [
            'title'       => "診療科目・診療内容｜{$site_name}",
            'description' => '吉川病院の診療科目一覧。外科・内科・整形外科・ペインクリニック内科外科・肛門外科・皮膚科・泌尿器科・リハビリテーション科・もの忘れ外来・精神科など幅広い症状に対応しています。',
        ];
    }

    if (is_page_template('page-guide.php') || is_page('guide')) {
        return [
            'title'       => "入院・受診案内｜{$site_name}",
            'description' => '吉川病院の受診の流れや入院に関するご案内。初めての方の持ち物・手続きや入院設備、よくある質問について紹介しています。',
        ];
    }

    if (is_page_template('page-access.php') || is_page('access')) {
        return [
            'title'       => "アクセス・お問い合わせ｜{$site_name}",
            'description' => '吉川病院（大阪府大阪市西区九条南3-29-14）へのアクセス方法、診療時間・休診日、お問い合わせ先をご案内します。',
        ];
    }

    if (is_page_template('news-archive.php') || is_page('news')) {
        return [
            'title'       => "お知らせ｜{$site_name}",
            'description' => '吉川病院からのお知らせ一覧。休診情報や診療内容の変更、院内でのお知らせなどを掲載しています。',
        ];
    }

    if (is_singular('post')) {
        $excerpt = has_excerpt()
            ? get_the_excerpt()
            : wp_trim_words(wp_strip_all_tags(get_the_content()), 60, '…');

        return [
            'title'       => get_the_title() . "｜{$site_name}",
            'description' => wp_strip_all_tags($excerpt),
        ];
    }

    // フォールバック（未分類のページ・投稿タイプ用）
    return [
        'title'       => $site_name,
        'description' => 'ご相談・ご予約は06-6583-4114まで。大阪市西区九条南の吉川病院です。',
    ];
}

/**
 * <title>タグを yoshikawa_get_seo_meta() の内容で完全に上書きする
 */
add_filter('document_title_parts', function ($title_parts) {
    $meta = yoshikawa_get_seo_meta();
    return ['title' => $meta['title']];
});

/**
 * meta descriptionを出力
 */
add_action('wp_head', function () {
    $meta = yoshikawa_get_seo_meta();
    printf('<meta name="description" content="%s">' . "\n", esc_attr($meta['description']));
}, 1);

/**
 * 現在ページのURLを返す（OGP用）
 */
function yoshikawa_seo_current_url() {
    return is_front_page() ? home_url('/') : get_permalink();
}

/**
 * 現在ページのOGP画像URLを返す
 */
function yoshikawa_seo_og_image() {
    if (is_singular('post') && has_post_thumbnail()) {
        return get_the_post_thumbnail_url(get_the_ID(), 'large');
    }
    return get_template_directory_uri() . '/assets/images/ogp.jpg';
}

/**
 * OGP / Twitter Card タグを出力
 */
add_action('wp_head', function () {
    $meta  = yoshikawa_get_seo_meta();
    $url   = yoshikawa_seo_current_url();
    $image = yoshikawa_seo_og_image();
    $type  = is_singular('post') ? 'article' : 'website';
    ?>
<meta property="og:type" content="<?php echo esc_attr($type); ?>">
<meta property="og:site_name" content="吉川病院">
<meta property="og:title" content="<?php echo esc_attr($meta['title']); ?>">
<meta property="og:description" content="<?php echo esc_attr($meta['description']); ?>">
<meta property="og:url" content="<?php echo esc_url($url); ?>">
<meta property="og:image" content="<?php echo esc_url($image); ?>">
<meta property="og:locale" content="ja_JP">
<meta name="twitter:card" content="summary_large_image">
<?php
}, 2);

/**
 * 構造化データ（JSON-LD）を出力
 * 病院の基本情報はサイト全体で共通、医師情報は病院紹介ページのみ追加する。
 */
add_action('wp_head', function () {
    $data = [
        '@context'   => 'https://schema.org',
        '@type'      => 'MedicalClinic',
        'name'       => '吉川病院',
        'url'        => home_url('/'),
        'telephone'  => '+81-6-6583-4114',
        'image'      => get_template_directory_uri() . '/assets/images/ogp.jpg',
        'address'    => [
            '@type'           => 'PostalAddress',
            'postalCode'      => '550-0025',
            'addressRegion'   => '大阪府',
            'addressLocality' => '大阪市西区',
            'streetAddress'   => '九条南3-29-14',
            'addressCountry'  => 'JP',
        ],
        'geo'        => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => 34.673041072929585,
            'longitude' => 135.46616277605105,
        ],
        'openingHoursSpecification' => [
            [
                '@type'    => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens'    => '09:00',
                'closes'   => '13:00',
            ],
            [
                '@type'    => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens'    => '14:00',
                'closes'   => '19:00',
            ],
            [
                '@type'    => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Saturday'],
                'opens'    => '09:00',
                'closes'   => '13:00',
            ],
        ],
        // Schema.orgのMedicalSpecialty固定語彙に近いものへのベストエフォートなマッピング。
        // 完全に対応する語彙が無い診療科（ペインクリニック内科・外科 等）は含めていない。
        'medicalSpecialty' => [
            'Surgical',        // 外科・肛門外科
            'PrimaryCare',     // 内科
            'Musculoskeletal', // 整形外科
            'Dermatology',     // 皮膚科
            'Urologic',        // 泌尿器科
            'Physiotherapy',   // リハビリテーション科
            'Geriatric',       // もの忘れ外来
            'Psychiatric',     // 精神科
        ],
    ];

    if (is_page_template('page-about.php') || is_page('about')) {
        $data['employee'] = [
            [
                '@type'            => 'Physician',
                'name'             => '吉川 守',
                'jobTitle'         => '院長',
                'medicalSpecialty' => ['Surgical', 'PrimaryCare'],
            ],
            [
                '@type'            => 'Physician',
                'name'             => '吉川 博昭',
                'jobTitle'         => '常勤医師',
                'medicalSpecialty' => ['Emergency', 'Surgical', 'PrimaryCare'],
            ],
            [
                '@type'            => 'Physician',
                'name'             => '吉川 秀人',
                'jobTitle'         => '非常勤医師',
                'medicalSpecialty' => ['Cardiovascular'],
            ],
        ];
    }

    echo '<script type="application/ld+json">'
        . wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        . '</script>' . "\n";
}, 3);

/**
 * 構造化データ（JSON-LD、WebSite）を出力する。
 * Google検索結果のサイト名（ファビコン横に表示される名称）は、ドメイン名ではなく
 * WebSiteのnameプロパティを最優先のシグナルとして参照する仕様のため、
 * 「yoshikawa-hospital.com」ではなく「吉川病院」と表示させるために設定する。
 * https://developers.google.com/search/docs/appearance/site-names
 */
add_action('wp_head', function () {
    $data = [
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        'name'     => '吉川病院',
        'url'      => home_url('/'),
    ];

    echo '<script type="application/ld+json">'
        . wp_json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        . '</script>' . "\n";
}, 3);

// XMLサイトマップ（/wp-sitemap.xml）とrobots.txtへのその案内は、
// WordPressコア標準機能（5.5以降）がデフォルトで自動生成するため、ここでは何もしない。

/**
 * ユーザー（投稿者）サイトマップを除外する。
 * このサイトはコーポレートサイトで著者アーカイブを使わないため、
 * ユーザー名を外部に露出させる不要な導線になる。
 */
add_filter('wp_sitemaps_add_provider', function ($provider, $name) {
    return 'users' === $name ? false : $provider;
}, 10, 2);

/**
 * カテゴリー/タグ/日付/著者アーカイブ、検索結果ページをnoindexにする。
 * このテーマでは index.php が空のフォールバックテンプレートで、
 * これらのURLはナビゲーションからも一切リンクされていない
 * （お知らせ一覧は news-archive.php が専用に担当）。
 * 実装するまでは中身のないページが検索エンジンにインデックスされないようにする。
 */
add_filter('wp_robots', function ($robots) {
    if (is_category() || is_tag() || is_date() || is_author() || is_search()) {
        $robots['noindex'] = true;
    }
    return $robots;
});
