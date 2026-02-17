<?php
/**
 * Template Name: Guide Page
 */

get_header(); ?>

<main class="l-main">
    <!-- FV -->
    <div class="p-guide-fv">
        <div class="p-guide-fv__inner">
            <h1 class="p-guide-fv__title">入院・受診案内</h1>
            <p class="p-guide-fv__lead">初めての方でも安心して受診いただけるよう、<br>手続きや流れをご案内します。</p>
        </div>
        <div class="p-guide-fv__wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path
                    d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="#FFF9F5" />
            </svg>
        </div>
    </div>

    <!-- 初めての方へセクション -->
    <section class="p-guide-outpatient">
        <div class="p-guide-outpatient__inner">
            <h2 class="p-guide-heading">初めての方へ</h2>

            <!-- 受付の流れ -->
            <h3 class="p-guide-subheading">受付の流れ</h3>
            <div class="p-guide-flow">
                <div class="p-guide-flow__step">
                    <div class="p-guide-flow__icon">1</div>
                    <p class="p-guide-flow__label">受付</p>
                </div>
                <div class="p-guide-flow__arrow">&rarr;</div>
                <div class="p-guide-flow__step">
                    <div class="p-guide-flow__icon">2</div>
                    <p class="p-guide-flow__label">問診</p>
                </div>
                <div class="p-guide-flow__arrow">&rarr;</div>
                <div class="p-guide-flow__step">
                    <div class="p-guide-flow__icon">3</div>
                    <p class="p-guide-flow__label">診察</p>
                </div>
                <div class="p-guide-flow__arrow">&rarr;</div>
                <div class="p-guide-flow__step">
                    <div class="p-guide-flow__icon">4</div>
                    <p class="p-guide-flow__label">お会計</p>
                </div>
            </div>

            <!-- 持ち物 -->
            <h3 class="p-guide-subheading">持ち物</h3>
            <div class="p-guide-checklist">
                <div class="p-guide-checklist__item">
                    <span class="p-guide-checklist__icon">&#9745;</span>
                    <span>健康保険証</span>
                </div>
                <div class="p-guide-checklist__item">
                    <span class="p-guide-checklist__icon">&#9745;</span>
                    <span>各種医療証（お持ちの方）</span>
                </div>
                <div class="p-guide-checklist__item">
                    <span class="p-guide-checklist__icon">&#9745;</span>
                    <span>お薬手帳（お持ちの方）</span>
                </div>
                <div class="p-guide-checklist__item">
                    <span class="p-guide-checklist__icon">&#9745;</span>
                    <span>紹介状（お持ちの方）</span>
                </div>
            </div>

            <!-- 診療時間 -->
            <h3 class="p-guide-subheading">診療時間</h3>
            <div class="p-guide-hours">
                <table class="p-guide-hours__table">
                    <thead>
                        <tr>
                            <th>診療時間</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                            <th>日/祝</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-guide-hours__time">9:00-13:00</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>ー</td>
                        </tr>
                        <tr>
                            <td class="p-guide-hours__time">14:00-19:00</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>○</td>
                            <td>ー</td>
                            <td>ー</td>
                        </tr>
                    </tbody>
                </table>
                <p class="p-guide-hours__note">午前・午後とも受付は診療時間の15分前までにお願いします。</p>
            </div>
        </div>
    </section>

    <!-- 入院のご案内セクション -->
    <section class="p-guide-inpatient">
        <div class="p-guide-inpatient__inner">
            <h2 class="p-guide-heading">入院のご案内</h2>

            <div class="p-guide-inpatient__features">
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title">急性入院対応</h3>
                    <p class="p-guide-inpatient__feature-text">急な体調変化や怪我など、緊急性の高い症状に対しても速やかに入院対応いたします。</p>
                </div>
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title">医療療養病棟</h3>
                    <p class="p-guide-inpatient__feature-text">長期的な療養が必要な方に、じっくりと向き合いながら治療・ケアを行います。</p>
                </div>
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title">院内調理</h3>
                    <p class="p-guide-inpatient__feature-text">管理栄養士による院内調理で、温かく栄養バランスの取れた食事をご提供いたします。</p>
                </div>
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title">リハビリテーション</h3>
                    <p class="p-guide-inpatient__feature-text">理学療法士・作業療法士が入院中のリハビリテーションをサポートいたします。</p>
                </div>
            </div>

            <!-- 病床数 -->
            <div class="p-guide-inpatient__beds">
                <h3 class="p-guide-subheading">病床数</h3>
                <div class="p-guide-inpatient__beds-list">
                    <div class="p-guide-inpatient__beds-item">
                        <span class="p-guide-inpatient__beds-number">22</span>
                        <span class="p-guide-inpatient__beds-unit">床</span>
                        <p class="p-guide-inpatient__beds-label">一般病床</p>
                    </div>
                    <div class="p-guide-inpatient__beds-item">
                        <span class="p-guide-inpatient__beds-number">50</span>
                        <span class="p-guide-inpatient__beds-unit">床</span>
                        <p class="p-guide-inpatient__beds-label">医療療養病床</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- よくある質問セクション -->
    <section class="p-guide-faq">
        <div class="p-guide-faq__inner">
            <h2 class="p-guide-heading">よくある質問</h2>
            <div class="p-guide-faq__list">
                <div class="p-guide-faq__item">
                    <h3 class="p-guide-faq__question">予約は必要ですか？</h3>
                    <p class="p-guide-faq__answer">予約なしでも受診いただけますが、お電話でのご予約をおすすめしております。</p>
                </div>
                <div class="p-guide-faq__item">
                    <h3 class="p-guide-faq__question">駐車場はありますか？</h3>
                    <p class="p-guide-faq__answer">駐車場の詳細についてはお電話にてお問い合わせください。</p>
                </div>
                <div class="p-guide-faq__item">
                    <h3 class="p-guide-faq__question">面会時間を教えてください。</h3>
                    <p class="p-guide-faq__answer">面会時間については、感染状況等により変更となる場合がございます。詳しくはお電話にてご確認ください。</p>
                </div>
                <div class="p-guide-faq__item">
                    <h3 class="p-guide-faq__question">入院時に必要なものは何ですか？</h3>
                    <p class="p-guide-faq__answer">健康保険証、各種医療証、お薬手帳、日用品などをご用意ください。詳しくは入院時にご案内いたします。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="p-top-cta">
        <div class="p-top-cta__inner">
            <h2 class="p-top-cta__title">ご予約・お問い合わせはこちら</h2>
            <p class="p-top-cta__text">診療のご予約やご相談など、お気軽にお問い合わせください</p>
            <div class="p-top-cta__buttons">
                <a href="tel:06-6583-4114" class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--tel">06-6583-4114</a>
                <a href="<?php echo esc_url(home_url('/access/')); ?>"
                    class="c-btn c-btn--lg p-top-cta__btn p-top-cta__btn--contact">お問い合わせフォーム</a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
