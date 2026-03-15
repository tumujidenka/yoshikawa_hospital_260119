<?php
/**
 * Template Name: Knowledge / News Archive
 * 
 * このファイルは「お知らせ一覧ページ」を表示するためのカスタムページテンプレートです。
 * WordPressの管理画面で固定ページを作成し、テンプレートとして「Knowledge / News Archive」を選択することで適用されます。
 */

// get_header() は header.php を読み込みます。
// <!DOCTYPE html> から <header> 終了タグまでの共通パーツが含まれます。
get_header();
?>

<!-- メインコンテンツエリアの開始 -->
<main class="l-main">

    <!-- ページFV -->
    <div class="c-page-fv">
        <div class="c-page-fv__inner">
            <h1 class="c-page-fv__title">お知らせ</h1>
            <p class="c-page-fv__lead">院内からの最新情報やお知らせをご確認いただけます</p>
        </div>
        <div class="c-page-fv__wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path
                    d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="#FFF9F5" />
            </svg>
        </div>
    </div>

    <!-- ニュース記事一覧セクション -->
    <section class="p-news-archive">
        <div class="p-news-archive__inner">

            <!-- サイドバーまたは見出しエリア（PC表示時は左側に配置） -->
            <div class="p-news-archive__content">
                <div class="p-news-archive__heading">
                    <h2 class="p-about-heading top-title">
                        お知らせ
                    </h2>
                </div>

                <!-- 記事リストエリア -->
                <div class="p-news-list">
                    <?php
                    // ページネーション（ページ送り）のために、現在のページ番号を取得します。
                    // 取得できない場合は1ページ目とします。
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // 記事取得の条件設定
                    $args = array(
                        'post_type' => 'post', // 投稿タイプ：通常の投稿
                        'paged' => $paged,     // 現在のページ番号
                        'posts_per_page' => 10, // 1ページに表示する件数
                    );

                    // WP_Queryクラスを使って、条件に合う記事データを取得します
                    $the_query = new WP_Query($args);

                    // 記事がある場合の処理
                    if ($the_query->have_posts()):
                        // 記事がある間、繰り返し処理を行います（ループ）
                        while ($the_query->have_posts()):
                            $the_query->the_post(); // 1記事分のデータをセット
                    
                            // カテゴリー情報の取得
                            // 記事に設定されているカテゴリーを取得し、ラベルの色などを判定します
                            $categories = get_the_category();
                            $cat_class = ''; // カテゴリーごとのクラス名（色分け用）
                            $cat_name = '';  // カテゴリー名
                    
                            if (!empty($categories)) {
                                $cat_slug = $categories[0]->slug; // スラッグ（URLに使われる名前）
                                $cat_name = $categories[0]->name; // カテゴリー名（表示用）
                    
                                // スラッグに応じてCSSクラスを切り替えます
                                if ($cat_slug === 'urgent') {
                                    $cat_class = 'c-label--urgent'; // 緊急など
                                } elseif ($cat_slug === 'change') {
                                    $cat_class = 'c-label--change'; // 変更など
                                } elseif ($cat_slug === 'event') {
                                    $cat_class = 'c-label--event';  // イベントなど
                                } else {
                                    $cat_class = 'c-label--info';   // 通常のお知らせ
                                }
                            }
                            ?>

                            <!-- 記事ごとのHTML構造（1つの記事ブロック） -->
                            <article class="p-news-item">
                                <div class="p-news-item__header">
                                    <!-- 日付表示 -->
                                    <time class="p-news-item__date"
                                        datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>"><?php echo esc_html( get_the_date('Y.m.d') ); ?></time>

                                    <!-- カテゴリーラベル表示（カテゴリーがある場合のみ） -->
                                    <?php if ($cat_name): ?>
                                        <span class="c-label <?php echo esc_attr($cat_class); ?>">
                                            <?php echo esc_html($cat_name); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="p-news-item__body">
                                    <!-- 記事タイトルとリンク -->
                                    <h3 class="p-news-item__title">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="p-news-item__link">
                                            <?php echo esc_html( get_the_title() ); ?>
                                        </a>
                                    </h3>
                                    <!-- 記事の抜粋文（本文の出だし） -->
                                    <div class="p-news-item__text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </article>

                        <?php endwhile; // ループ終了 ?>

                    <?php else: // 記事が1件もない場合の表示 ?>
                        <p class="p-top-news__no-posts">現在お知らせはありません。</p>
                    <?php endif; ?>
                </div>

                <!-- ページネーション（ページ送りボタン） -->
                <?php
                // ページ数が1ページより多い場合のみ表示します
                if ($the_query->max_num_pages > 1) {
                    $current_page = max(1, get_query_var('paged')); // 現在のページ番号
                    echo '<div class="p-pagination">';

                    // 「前へ」リンク（2ページ目以降に表示）
                    if ($current_page > 1) {
                        echo '<a href="' . esc_url( get_pagenum_link($current_page - 1) ) . '" class="p-pagination__link p-pagination__link--prev">&lt; 前へ</a>';
                    }

                    // ページ番号リンクの生成（1, 2, 3...）
                    for ($i = 1; $i <= $the_query->max_num_pages; $i++) {
                        if ($i == $current_page) {
                            // 現在のページはリンクではなくspanタグ（クリック不可）で表示
                            echo '<span class="p-pagination__link p-pagination__link--current">' . $i . '</span>';
                        } else {
                            // 他のページへのリンク
                            echo '<a href="' . esc_url( get_pagenum_link($i) ) . '" class="p-pagination__link">' . esc_html( $i ) . '</a>';
                        }
                    }

                    // 「次へ」リンク（最終ページでなければ表示）
                    if ($current_page < $the_query->max_num_pages) {
                        echo '<a href="' . esc_url( get_pagenum_link($current_page + 1) ) . '" class="p-pagination__link p-pagination__link--next">次へ &gt;</a>';
                    }
                    echo '</div>';
                }

                // メインクエリのリセット（他の箇所への影響を防ぐため必須）
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- お問い合わせ（CTA）セクション -->
    <!-- 全ページ共通のお問い合わせ誘導エリア -->
    <section class="p-top-cta">
        <div class="p-top-cta__inner">
            <h2 class="p-top-cta__title">ご予約・お問い合わせはこちら</h2>
            <p class="p-top-cta__text">診療のご予約やご相談など、お気軽にお問い合わせください</p>
            <div class="p-top-cta__buttons">
                <!-- 電話番号ボタン -->
                <a href="tel:06-6583-4114" class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--tel">
                    06-6583-4114
                </a>
                <!-- お問い合わせフォームへのリンクボタン -->
                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--contact">お問い合わせフォーム</a>
            </div>
        </div>
    </section>

</main>
<!-- メインコンテンツエリア終了 -->

<?php
// get_footer() は footer.php を読み込みます。
// <footer> タグやスクリプト読み込み、</body> 終了タグなどが含まれます。
get_footer();
?>