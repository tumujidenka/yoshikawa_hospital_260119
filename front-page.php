<?php
get_header();
?>
<main class="l-main">
    <!-- Section: Main Visual -->
    <section class="p-top-mv">
        <div class="p-top-mv__inner">
            <div class="p-top-mv__content">
                <h1 class="p-top-mv__title">
                    <span class="p-top-mv__title-main">ご家族の近くで</span>
                    <span class="p-top-mv__title-main">安心の医療を</span>
                </h1>
                <p class="p-top-mv__text">交通の利便のよい大阪市内。<br>
                    地域で暮らすご家族が<br class="u-sp-only">通いやすい立地で、<br class="u-sp-only">外来診療のかかりつけとして<br
                        class="u-sp-only">72床の入院環境も含め、<br>
                    きめ細やかな医療とケアを<br class="u-sp-only">提供しています。</p>
                <div class="p-top-mv__buttons">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>"
                        class="c-btn c-btn--primary c-btn--lg">予約・お問い合わせ</a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>"
                        class="c-btn c-btn--outline c-btn--lg">診療案内を見る</a>
                </div>
            </div>
        </div>
        <div class="p-top-mv__wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path
                    d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="#FFF9F5" />
            </svg>
        </div>
    </section>

    <!-- Section: News -->
    <section class="p-top-news">
        <div class="p-top-news__inner">
            <div class="p-top-news__header">
                <h2 class="p-top-news__title top-title">お知らせ</h2>
            </div>
            <div class="p-top-news__box">
                <ul class="p-top-news__list">
                    <?php
                    $news_query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'post_status' => 'publish'
                    ));

                    if ($news_query->have_posts()):
                        while ($news_query->have_posts()):
                            $news_query->the_post();
                            ?>
                            <li class="p-top-news__item">
                                <a href="<?php the_permalink(); ?>" class="p-top-news__link">
                                    <time class="p-top-news__date"
                                        datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                                    <span class="p-top-news__item-title"><?php the_title(); ?></span>
                                </a>
                            </li>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        ?>
                        <li class="p-top-news__item">
                            <p class="p-top-news__no-posts">現在、お知らせはありません。</p>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="p-top-news__more">
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-btn c-btn--news c-btn--arrow">すべて見る</a>
            </div>
        </div>
    </section>

    <!-- Section: Features -->
    <section class="p-top-features">
        <div class="p-top-features__inner">
            <h2 class="p-top-features__title top-title">当院の特徴</h2>
            <div class="p-top-features__list">
                <div class="p-top-features__item">
                    <div class="p-top-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <h3 class="p-top-features__item-title">救急体制</h3>
                    <p class="p-top-features__item-text">24時間対応の救急体制で、急な症状にも迅速に対応いたします。</p>
                </div>
                <div class="p-top-features__item">
                    <div class="p-top-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z" />
                        </svg>
                    </div>
                    <h3 class="p-top-features__item-title">入院対応</h3>
                    <p class="p-top-features__item-text">入院設備を完備し、安心して療養いただける環境を整えています。</p>
                </div>
                <div class="p-top-features__item">
                    <div class="p-top-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-8-2h4v2h-4V4zM4 20V8h16v12H4zm8-10c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                        </svg>
                    </div>
                    <h3 class="p-top-features__item-title">院内設備</h3>
                    <p class="p-top-features__item-text">最新の医療機器を備え、質の高い医療サービスを提供します。</p>
                </div>
            </div>
            <div class="p-top-features__more">
                <a href="<?php echo esc_url(home_url('/features')); ?>"
                    class="c-btn c-btn--secondary c-btn--arrow">もっと見る</a>
            </div>
        </div>
    </section>

    <!-- Section: Departments -->
    <section class="p-top-departments">
        <div class="p-top-departments__inner">
            <h2 class="p-top-departments__title top-title">診療科目</h2>
            <ul class="p-top-departments__list">
                <li class="p-top-departments__item">
                    <a href="<?php echo esc_url(home_url('/departments/internal')); ?>"
                        class="p-top-departments__link">内科</a>
                </li>
                <li class="p-top-departments__item">
                    <a href="<?php echo esc_url(home_url('/departments/surgery')); ?>"
                        class="p-top-departments__link">外科</a>
                </li>
                <li class="p-top-departments__item">
                    <a href="<?php echo esc_url(home_url('/departments/proctology')); ?>"
                        class="p-top-departments__link">肛門外科</a>
                </li>
                <li class="p-top-departments__item">
                    <a href="<?php echo esc_url(home_url('/departments/orthopedics')); ?>"
                        class="p-top-departments__link">整形外科</a>
                </li>
                <li class="p-top-departments__item">
                    <a href="<?php echo esc_url(home_url('/departments/urology')); ?>"
                        class="p-top-departments__link">泌尿器科</a>
                </li>
                <li class="p-top-departments__item">
                    <a href="<?php echo esc_url(home_url('/departments/dermatology')); ?>"
                        class="p-top-departments__link">皮膚科</a>
                </li>
                <li class="p-top-departments__item">
                    <a href="<?php echo esc_url(home_url('/departments/rehabilitation')); ?>"
                        class="p-top-departments__link">リハビリテーション科</a>
                </li>
            </ul>
            <div class="p-top-departments__more">
                <a href="<?php echo esc_url(home_url('/departments')); ?>"
                    class="c-btn c-btn--secondary c-btn--arrow">診療案内を見る</a>
            </div>
        </div>
    </section>

    <!-- Section: Hours -->
    <section class="p-top-hours">
        <div class="p-top-hours__inner">
            <h2 class="p-top-hours__title top-title">診療時間</h2>
            <div class="p-top-hours__table-wrap">
                <table class="p-top-hours__table">
                    <thead>
                        <tr>
                            <th class="p-top-hours__th">診療時間</th>
                            <th class="p-top-hours__th">月</th>
                            <th class="p-top-hours__th">火</th>
                            <th class="p-top-hours__th">水</th>
                            <th class="p-top-hours__th">木</th>
                            <th class="p-top-hours__th">金</th>
                            <th class="p-top-hours__th">土</th>
                            <th class="p-top-hours__th p-top-hours__th--holiday">日・祝</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-top-hours__td p-top-hours__td--time">9:00-13:00</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td p-top-hours__td--closed">ー</td>
                        </tr>
                        <tr>
                            <td class="p-top-hours__td p-top-hours__td--time">14:00-19:00</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td">○</td>
                            <td class="p-top-hours__td p-top-hours__td--closed">ー</td>
                            <td class="p-top-hours__td p-top-hours__td--closed">ー</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="p-top-hours__note">※受付は診療終了の30分前までとなります。</p>
        </div>
    </section>

    <!-- Section: Access -->
    <section class="p-top-access">
        <div class="p-top-access__inner">
            <h2 class="p-top-access__title top-title">アクセス</h2>
            <div class="p-top-access__content">
                <div class="p-top-access__info">
                    <dl class="p-top-access__list">
                        <div class="p-top-access__item">
                            <dt class="p-top-access__dt">住所</dt>
                            <dd class="p-top-access__dd">〒000-0000<br>○○県○○市○○町1-2-3</dd>
                        </div>
                        <div class="p-top-access__item">
                            <dt class="p-top-access__dt">電話番号</dt>
                            <dd class="p-top-access__dd">
                                <a href="tel:0120-000-000" class="p-top-access__tel">0120-000-000</a>
                            </dd>
                        </div>
                        <div class="p-top-access__item">
                            <dt class="p-top-access__dt">交通アクセス</dt>
                            <dd class="p-top-access__dd">○○駅から徒歩5分<br>○○バス停から徒歩3分<br>駐車場20台完備</dd>
                        </div>
                    </dl>
                </div>
                <div class="p-top-access__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8280303808788!2d139.76493!3d35.6812362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQwJzUyLjQiTiAxMznCsDQ1JzUzLjgiRQ!5e0!3m2!1sja!2sjp!4v1234567890123"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: CTA -->
    <section class="p-top-cta">
        <div class="p-top-cta__inner">
            <h2 class="p-top-cta__title">ご予約・お問い合わせはこちら</h2>
            <p class="p-top-cta__text">お気軽にお電話ください。<br class="u-sp-only">スタッフが丁寧に対応いたします。</p>
            <div class="p-top-cta__buttons">
                <a href="tel:0120-000-000" class="c-btn c-btn--phone c-btn--lg">0120-000-000</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                    class="c-btn c-btn--secondary c-btn--lg">お問い合わせフォーム</a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
