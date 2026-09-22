<?php
/**
 * Template Name: Column Archive
 *
 * このファイルは「コラム・おすすめ情報一覧ページ」を表示するためのカスタムページテンプレートです。
 * WordPressの管理画面で固定ページを作成し、テンプレートとして「Column Archive」を選択することで適用されます。
 * 「コラム」カテゴリー（スラッグ: column）が設定された投稿のみを一覧表示します。
 */

// get_header() は header.php を読み込みます。
get_header();
?>

<!-- メインコンテンツエリアの開始 -->
<main class="l-main">

    <!-- ページFV -->
    <div class="c-page-fv">
        <div class="c-page-fv__inner">
            <h1 class="c-page-fv__title">コラム・おすすめ情報</h1>
            <p class="c-page-fv__lead">病気やお身体のことについての解説、<br class="u-sp-only">おすすめの情報をご紹介します</p>
        </div>
        <div class="c-page-fv__wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path
                    d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="#FFF9F5" />
            </svg>
        </div>
    </div>

    <!-- コラム記事一覧セクション -->
    <section class="p-news-archive">
        <div class="p-news-archive__inner">

            <!-- サイドバーまたは見出しエリア（PC表示時は左側に配置） -->
            <div class="p-news-archive__content">
                <div class="p-news-archive__heading">
                    <h2 class="p-about-heading top-title">
                        コラム
                    </h2>
                </div>

                <!-- 記事リストエリア -->
                <div class="p-news-list">
                    <?php
                    // ページネーション（ページ送り）のために、現在のページ番号を取得します。
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // 記事取得の条件設定：「コラム」カテゴリー（スラッグ: column）の投稿のみ
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'posts_per_page' => 10,
                        'category_name' => 'column',
                    );

                    $the_query = new WP_Query($args);

                    // 記事がある場合の処理
                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()):
                            $the_query->the_post();
                            ?>

                            <!-- 記事ごとのHTML構造（1つの記事ブロック） -->
                            <article class="p-news-item">
                                <div class="p-news-item__header">
                                    <!-- 日付表示 -->
                                    <time class="p-news-item__date"
                                        datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>"><?php echo esc_html( get_the_date('Y.m.d') ); ?></time>

                                    <span class="c-label c-label--column">コラム</span>
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
                        <p class="p-top-news__no-posts">現在コラムはありません。</p>
                    <?php endif; ?>
                </div>

                <!-- ページネーション（ページ送りボタン） -->
                <?php
                if ($the_query->max_num_pages > 1) {
                    $current_page = max(1, get_query_var('paged'));
                    echo '<div class="p-pagination">';

                    if ($current_page > 1) {
                        echo '<a href="' . esc_url( get_pagenum_link($current_page - 1) ) . '" class="p-pagination__link p-pagination__link--prev">&lt; 前へ</a>';
                    }

                    for ($i = 1; $i <= $the_query->max_num_pages; $i++) {
                        if ($i == $current_page) {
                            echo '<span class="p-pagination__link p-pagination__link--current">' . $i . '</span>';
                        } else {
                            echo '<a href="' . esc_url( get_pagenum_link($i) ) . '" class="p-pagination__link">' . esc_html( $i ) . '</a>';
                        }
                    }

                    if ($current_page < $the_query->max_num_pages) {
                        echo '<a href="' . esc_url( get_pagenum_link($current_page + 1) ) . '" class="p-pagination__link p-pagination__link--next">次へ &gt;</a>';
                    }
                    echo '</div>';
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- お問い合わせ（CTA）セクション -->
    <section class="p-top-cta">
        <div class="p-top-cta__inner">
            <h2 class="p-top-cta__title">ご予約・お問い合わせはこちら</h2>
            <p class="p-top-cta__text">診療のご予約やご相談など、<br class="u-sp-only">お気軽にお問い合わせください</p>
            <div class="p-top-cta__buttons">
                <a href="tel:06-6583-4114" class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--tel">
                    06-6583-4114
                </a>
                <a href="<?php echo esc_url(home_url('/access/')); ?>"
                    class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--contact">お問い合わせフォーム</a>
            </div>
        </div>
    </section>

</main>
<!-- メインコンテンツエリア終了 -->

<?php
get_footer();
?>
