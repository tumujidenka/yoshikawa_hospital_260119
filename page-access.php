<?php
/*
Template Name: Access & Contact
*/
get_header();
?>

<!-- ページFV -->
<div class="c-page-fv">
    <div class="c-page-fv__inner">
        <h1 class="c-page-fv__title">アクセス・お問い合わせ</h1>
        <p class="c-page-fv__lead">当院へのアクセス方法とお問い合わせ先を<br class="u-sp-only">ご案内いたします</p>
    </div>
    <div class="c-page-fv__wave">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path
                d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                fill="#FFF9F5" />
        </svg>
    </div>
</div>

<main class="l-main p-access-main">

    <!-- (2) アクセスセクション（地図と住所） -->
    <section class="access-section">
        <h2 class="p-top-news__title top-title">アクセス</h2>

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
                        <span class="p-top-access__icon p-top-access__icon--parking">🅿️</span>
                        <h3 class="p-top-access__sub-title">駐車場</h3>
                    </div>
                    <div class="p-top-access__text">
                        <p>駐車場の詳細については、<br>お電話でお問い合わせください</p>
                    </div>
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
    </section>


    <!-- (3) 診療時間セクション -->
    <section class="hours-section">
        <h2 class="p-top-news__title top-title">診療時間・休診日</h2>

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
    </section>


    <!-- (4) お問い合わせフォームセクション -->
    <section class="contact-section">
        <h2 class="p-top-news__title top-title">お問い合わせフォーム</h2>

        <div class="form-container-new">
            <?php echo do_shortcode('[contact-form-7 id="0d83ae3" title="お問い合わせ"]'); ?>
        </div>
    </section>


    <!-- (5) 採用情報セクション -->
    <section class="recruit-section">
        <h2 class="p-top-news__title top-title">採用情報</h2>

        <div class="recruit-container-new">

            <!-- 募集職種エリア -->
            <div class="recruit-jobs-area">
                <h3 class="recruit-sub-title">募集職種</h3>
                <div class="recruit-job-list">
                    <div class="recruit-job-card">
                        <h4 class="job-title"><i class="fa-solid fa-user-nurse"></i> 看護師</h4>
                        <p class="job-desc">正看護師・准看護師を募集しています</p>
                    </div>
                    <div class="recruit-job-card">
                        <h4 class="job-title"><i class="fa-solid fa-user-pen"></i> 医療事務スタッフ</h4>
                        <p class="job-desc">医療事務経験者を募集しています</p>
                    </div>
                </div>
            </div>

            <!-- 応募についてエリア -->
            <div class="recruit-application-area">
                <h3 class="recruit-sub-title">応募について</h3>
                <p class="application-text">
                    ご希望する条件に合わせて案内いたしますので、当院事務長まで問い合わせください。お電話でご連絡ください。
                </p>
                <a href="tel:0665834114" class="application-phone-btn">
                    <i class="fa-solid fa-phone"></i> お電話 06-6583-4114
                </a>
            </div>

        </div>
    </section>


    <!-- Section: CTA -->
    <section class="p-top-cta">
        <div class="p-top-cta__inner">
            <h2 class="p-top-cta__title">ご予約・お問い合わせはこちら</h2>
            <p class="p-top-cta__text">診療のご予約やご相談など、<br class="u-sp-only">お気軽にお問い合わせください</p>
            <div class="p-top-cta__buttons">
                <a href="tel:06-6583-4114" class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--tel">06-6583-4114</a>
                <a href="<?php echo esc_url(home_url('/access')); ?>"
                    class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--contact">お問い合わせフォーム</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
