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
                <p class="p-top-mv__text u-pc-only">交通の利便のよい大阪市内。<br>
                    地域で暮らすご家族が通いやすい立地で、外来診療のかかりつけとして72床の入院環境も含め、<br>
                    きめ細やかな医療とケアを提供しています。</p>
                <p class="p-top-mv__text u-sp-only">大阪市内の通いやすい立地で、<br>外来診療から入院まで、<br>きめ細やかな医療とケアをご提供します。</p>
                <div class="p-top-mv__buttons">
                    <a href="<?php echo esc_url(home_url('/access')); ?>"
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
                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="p-top-news__link">
                                    <time class="p-top-news__date"
                                        datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                                    <span class="p-top-news__item-title"><?php echo esc_html( get_the_title() ); ?></span>
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
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/feature_1.svg" alt="救急体制"
                            width="100" height="100">
                    </div>
                    <h3 class="p-top-features__item-title">時間外や夜間休日の<br>救急医療体制</h3>
                    <p class="p-top-features__item-text">急患対応は常時受付</p>
                </div>
                <div class="p-top-features__item">
                    <div class="p-top-features__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/feature_2.svg" alt="入院対応"
                            width="100" height="100">
                    </div>
                    <h3 class="p-top-features__item-title">かかりつけ医療から<br>入院対応まで</h3>
                    <p class="p-top-features__item-text">一般病床22床<br>医療療養病床50床</p>
                </div>
                <div class="p-top-features__item">
                    <div class="p-top-features__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/feature_3.svg" alt="院内設備"
                            width="100" height="100">
                    </div>
                    <h3 class="p-top-features__item-title">院内薬局完備</h3>
                    <p class="p-top-features__item-text">薬剤師がその場で調剤、<br>お求めやすい価格</p>
                </div>
            </div>
            <div class="p-top-features__more">
                <a href="<?php echo esc_url(home_url('/features')); ?>"
                    class="c-btn c-btn--features c-btn--arrow">もっと見る</a>
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
                    class="c-btn c-btn--departments c-btn--arrow">診療案内を見る</a>
            </div>
        </div>
    </section>

    <!-- Section: Hours -->
    <section class="p-top-hours">
        <div class="p-top-hours__inner">
            <h2 class="p-top-hours__title top-title">診療時間</h2>
            <div class="p-top-hours__table-wrap">
                <div class="p-top-hours__table-scroll">
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
                                <th class="p-top-hours__th p-top-hours__th--holiday">日/祝</th>
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
            </div>
            <div class="p-top-hours__notes">
                <p class="p-top-hours__note">※急患対応は常時行っています</p>
                <p class="p-top-hours__note">※受付は午前・午後とも15分前までにお願いします</p>
                <p class="p-top-hours__note">休診日：日曜日・祝日</p>
            </div>
        </div>
    </section>

    <!-- Section: Access -->
    <section class="p-top-access">
        <div class="p-top-access__inner">
            <h2 class="p-top-access__title top-title">アクセス</h2>
            <div class="p-top-access__content">
                <div class="p-top-access__info-box">
                    <div class="p-top-access__item">
                        <div class="p-top-access__head">
                            <span class="p-top-access__icon p-top-access__icon--address">📍</span>
                            <h3 class="p-top-access__sub-title">住所</h3>
                        </div>
                        <p class="p-top-access__text">
                            〒550-0025<br>
                            大阪府大阪市西区九条南3-29-14
                        </p>
                    </div>
                    <div class="p-top-access__item">
                        <div class="p-top-access__head">
                            <span class="p-top-access__icon p-top-access__icon--train">🕒</span>
                            <h3 class="p-top-access__sub-title">交通アクセス</h3>
                        </div>
                        <ul class="p-top-access__list">
                            <li>阪神なんば線、地下鉄中央線九条駅<br>徒歩6分</li>
                            <li>大阪環状線、地下鉄中央線弁天町<br>徒歩8分</li>
                            <li>大阪シティバス辰巳橋バス停<br>徒歩1分</li>
                        </ul>
                    </div>
                    <div class="p-top-access__item">
                        <div class="p-top-access__head">
                            <span class="p-top-access__icon p-top-access__icon--phone">📞</span>
                            <h3 class="p-top-access__sub-title">お電話でのお問い合わせ</h3>
                        </div>
                        <div class="p-top-access__text">
                            <p class="p-top-access__tel">TEL：06-6583-4114</p>
                            <p class="p-top-access__fax">FAX：06-6583-4126</p>
                        </div>
                    </div>
                </div>
                <div class="p-top-access__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.2737007231212!2d135.46616277605105!3d34.673041072929585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e64a0807f5ff%3A0xb9332bb72b6f147d!2z44CSNTUwLTAwMjUg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65Lmd5p2h5Y2X77yT5LiB55uu77yS77yZ4oiS77yR77yU!5e0!3m2!1sja!2sjp!4v1770592536694!5m2!1sja!2sjp"
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
            <p class="p-top-cta__text">診療のご予約やご相談など、お気軽にお問い合わせください</p>
            <div class="p-top-cta__buttons">
                <a href="tel:06-6583-4114" class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--tel">06-6583-4114</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"
                    class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--contact">お問い合わせフォーム</a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
