<?php
/**
 * single.php
 * ニュース（投稿）詳細ページのテンプレートファイル
 */

get_header();
?>

<main class="l-main">

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <!-- 記事詳細セクション -->
        <section class="p-news-single">
            <div class="p-news-single__inner">

                <?php
                // カテゴリー情報の取得
                $categories = get_the_category();
                $cat_class = '';
                $cat_name  = '';

                if (!empty($categories)) {
                    $cat_slug = $categories[0]->slug;
                    $cat_name = $categories[0]->name;

                    if ($cat_slug === 'urgent') {
                        $cat_class = 'c-label--urgent';
                    } elseif ($cat_slug === 'change') {
                        $cat_class = 'c-label--change';
                    } elseif ($cat_slug === 'event') {
                        $cat_class = 'c-label--event';
                    } else {
                        $cat_class = 'c-label--info';
                    }
                }
                ?>

                <!-- メタ情報（日付・カテゴリ） -->
                <div class="p-news-single__meta">
                    <time class="p-news-item__date" datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>">
                        <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                    </time>
                    <?php if ($cat_name): ?>
                        <span class="c-label <?php echo esc_attr($cat_class); ?>">
                            <?php echo esc_html($cat_name); ?>
                        </span>
                    <?php endif; ?>
                </div>

                <!-- 記事タイトル -->
                <h1 class="p-news-single__title"><?php echo esc_html( get_the_title() ); ?></h1>

                <!-- 記事本文 -->
                <div class="p-news-single__body">
                    <?php the_content(); ?>
                </div>

                <!-- 一覧に戻るボタン -->
                <div class="p-news-single__back">
                    <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p-news-single__back-btn">
                        お知らせ一覧に戻る
                    </a>
                </div>

            </div>
        </section>

    <?php endwhile; endif; ?>

    <!-- CTA セクション -->
    <section class="p-top-cta">
        <div class="p-top-cta__inner">
            <h2 class="p-top-cta__title">ご予約・お問い合わせはこちら</h2>
            <p class="p-top-cta__text">診療のご予約やご相談など、<br class="u-sp-only">お気軽にお問い合わせください</p>
            <div class="p-top-cta__buttons">
                <a href="tel:06-6583-4114" class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--tel">
                    06-6583-4114
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                    class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--contact">お問い合わせフォーム</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
