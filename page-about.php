<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<main class="l-main">
    <!-- FV -->
    <div class="p-about-fv">
        <div class="p-about-fv__inner">
            <h1 class="p-about-fv__title">医師紹介・病院紹介</h1>
            <p class="p-about-fv__lead">地域に根ざした医療を提供し、<br>皆様の健康をサポートします。</p>
        </div>
        <div class="p-about-fv__wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path
                    d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="#FFF9F5" />
            </svg>
        </div>
    </div>

    <!-- 病院紹介セクション -->
    <section class="p-about-overview">
        <div class="p-about-overview__inner">
            <h2 class="p-about-heading top-title">病院紹介</h2>

            <div class="p-about-overview__info-table">
                <table class="p-about-table">
                    <tbody>
                        <tr>
                            <th>病院名称</th>
                            <td>吉川病院</td>
                        </tr>
                        <tr>
                            <th>診療科目</th>
                            <td>外科・内科・肛門外科・<br class="u-sp-only">整形外科・泌尿器科・<br class="u-sp-only">皮膚科・リハビリテーション科</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒550-0025 大阪府大阪市西区九条南3-29-14</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>06-6583-4114（代表）</td>
                        </tr>
                        <tr>
                            <th>FAX</th>
                            <td>06-6583-4126</td>
                        </tr>
                        <tr>
                            <th>病床数</th>
                            <td>72床（一般病床22床、医療療養病床50床）</td>
                        </tr>
                        <tr>
                            <th>指定等</th>
                            <td>労災指定医療機関・救急指定医療機関・<br class="u-sp-only">結核予防指定医療機関・船員保険医療機関・生活保護指定医療機関</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-about-overview__message">
                <p>吉川病院は、100年にわたり地域で皆さまに寄り添い、患者様が住み慣れた地域で安心して暮らし続けられるよう、外来診療のかかりつけとして、入院が必要なケースも含め、きめ細やかな医療とケアを提供しています。
                </p>
                <p>急な体調変化や怪我にも24時間体制で対応し、患者様はもちろんご家族も安心できる、そんな医療を目指しています。また、地域の医療機関との連携体制も整え、必要に応じて専門病院やより高次の医療機関をご紹介し、患者様にとって最善の医療につなげる入院対応も可能です。
                </p>
            </div>
        </div>
    </section>

    <!-- 医師紹介セクション -->
    <section class="p-about-doctor">
        <div class="p-about-doctor__inner">
            <h2 class="p-about-doctor__title top-title">医師紹介</h2>
            <div class="p-about-doctor__list">
                <!-- 院長 -->
                <div class="p-about-doctor__card">
                    <div class="p-about-doctor__icon-area">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="40"
                            height="40">
                            <path
                                d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                        </svg>
                    </div>
                    <div class="p-about-doctor__info">
                        <div class="p-about-doctor__header">
                            <h3 class="p-about-doctor__name">吉川 守</h3>
                            <span class="p-about-doctor__role">院長</span>
                        </div>
                        <p class="p-about-doctor__specialty">外科、内科、肛門外科、その他の疾患</p>
                        <div class="p-about-doctor__qualifications">
                            <span class="p-about-doctor__qualifications-label">資格</span>
                            <ul>
                                <li>医学博士</li>
                                <li>日本外科学会認定医</li>
                                <li>日本医師会認定産業医</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 非常勤医師1 -->
                <div class="p-about-doctor__card p-about-doctor__card--sub">
                    <div class="p-about-doctor__icon-area">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="40"
                            height="40">
                            <path
                                d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                        </svg>
                    </div>
                    <div class="p-about-doctor__info">
                        <div class="p-about-doctor__header">
                            <h3 class="p-about-doctor__name">吉川 博昭</h3>
                            <span class="p-about-doctor__role">非常勤医師</span>
                        </div>
                        <p class="p-about-doctor__specialty">救急診療（外科、内科）、ペインクリニック内科</p>
                        <div class="p-about-doctor__qualifications">
                            <span class="p-about-doctor__qualifications-label">資格</span>
                            <ul>
                                <li>医学博士</li>
                                <li>日本ペインクリニック学会認定専門医</li>
                                <li>日本医師会認定産業医</li>
                                <li>日本麻酔科学学会認定専門医</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 非常勤医師2 -->
                <div class="p-about-doctor__card p-about-doctor__card--sub">
                    <div class="p-about-doctor__icon-area">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="40"
                            height="40">
                            <path
                                d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                        </svg>
                    </div>
                    <div class="p-about-doctor__info">
                        <div class="p-about-doctor__header">
                            <h3 class="p-about-doctor__name">吉川 秀人</h3>
                            <span class="p-about-doctor__role">非常勤医師</span>
                        </div>
                        <p class="p-about-doctor__specialty">循環器内科</p>
                        <div class="p-about-doctor__qualifications">
                            <span class="p-about-doctor__qualifications-label">資格</span>
                            <ul>
                                <li>循環器学会認定専門医</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 院内風景セクション -->
    <section class="p-about-gallery">
        <div class="p-about-gallery__inner">
            <h2 class="p-about-heading top-title">院内風景</h2>
            <div class="p-about-gallery__list">
                <!-- 1列目、1〜2行目（2行分結合） -->
                <div class="p-about-gallery__item grid-item1">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room1.png'); ?>"
                        alt="院内風景1" loading="lazy">
                </div>
                <!-- 2列目、1行目 -->
                <div class="p-about-gallery__item grid-item2">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room2.png'); ?>"
                        alt="院内風景2" loading="lazy">
                </div>
                <!-- 2列目、2行目 -->
                <div class="p-about-gallery__item grid-item3">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room3.png'); ?>"
                        alt="院内風景3" loading="lazy">
                </div>
                <!-- 1列目、3行目 -->
                <div class="p-about-gallery__item grid-item4">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room4.png'); ?>"
                        alt="院内風景4" loading="lazy">
                </div>
                <!-- 1列目、4行目 -->
                <div class="p-about-gallery__item grid-item5">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room5.png'); ?>"
                        alt="院内風景5" loading="lazy">
                </div>
                <!-- 2列目、3〜4行目（2行分結合） -->
                <div class="p-about-gallery__item grid-item6">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room6.png'); ?>"
                        alt="院内風景6" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- 提携医療機関セクション -->
    <section class="p-about-partners">
        <div class="p-about-partners__inner">
            <h2 class="p-about-heading top-title">提携医療機関</h2>
            <div class="p-about-partners__list">
                <div class="p-about-partners__item">多根総合病院</div>
                <div class="p-about-partners__item">日本生命病院</div>
                <div class="p-about-partners__item">エキサイカイ病院</div>
                <div class="p-about-partners__item">富永病院</div>
            </div>
            <p class="p-about-partners__note">高度な検査や専門的な治療が必要な際は、提携医療機関へのご紹介も行っております。<br>連携によりスムーズな診療をサポートいたします。</p>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="p-top-cta">
        <div class="p-top-cta__inner">
            <h2 class="p-top-cta__title">ご予約・お問い合わせはこちら</h2>
            <p class="p-top-cta__text">診療のご予約やご相談など、<br class="u-sp-only">お気軽にお問い合わせください</p>
            <div class="p-top-cta__buttons">
                <a href="tel:06-6583-4114" class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--tel">06-6583-4114</a>
                <a href="<?php echo esc_url(home_url('/access/')); ?>"
                    class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--contact">お問い合わせフォーム</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>