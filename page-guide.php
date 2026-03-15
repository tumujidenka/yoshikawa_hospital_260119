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
                <div class="p-guide-flow__card">
                    <div class="p-guide-flow__num">1</div>
                    <p class="p-guide-flow__title">来院・受付</p>
                    <p class="p-guide-flow__desc">保険証をご持参の上、<br>受付にお声がけください</p>
                </div>
                <div class="p-guide-flow__card">
                    <div class="p-guide-flow__num">2</div>
                    <p class="p-guide-flow__title">問診票記入</p>
                    <p class="p-guide-flow__desc">症状や既往歴などを<br>ご記入いただきます</p>
                </div>
                <div class="p-guide-flow__card">
                    <div class="p-guide-flow__num">3</div>
                    <p class="p-guide-flow__title">診察</p>
                    <p class="p-guide-flow__desc">医師による診察・検査を<br>行います</p>
                </div>
                <div class="p-guide-flow__card">
                    <div class="p-guide-flow__num">4</div>
                    <p class="p-guide-flow__title">お会計・お薬</p>
                    <p class="p-guide-flow__desc">受付でお会計を行い、<br>処方箋をお渡しします</p>
                </div>
            </div>

            <!-- 持ち物 -->
            <h3 class="p-guide-subheading">持ち物</h3>
            <div class="p-guide-checklist">
                <div class="p-guide-checklist__item">
                    <div class="p-guide-checklist__icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <span class="p-guide-checklist__name">健康保険証</span>
                    <span class="p-guide-checklist__badge p-guide-checklist__badge--required">必須</span>
                </div>
                <div class="p-guide-checklist__item">
                    <div class="p-guide-checklist__icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                        </svg>
                    </div>
                    <span class="p-guide-checklist__name">各種医療証</span>
                    <span class="p-guide-checklist__hint">お持ちの方</span>
                </div>
                <div class="p-guide-checklist__item">
                    <div class="p-guide-checklist__icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <span class="p-guide-checklist__name">お薬手帳</span>
                    <span class="p-guide-checklist__hint">お持ちの方</span>
                </div>
                <div class="p-guide-checklist__item">
                    <div class="p-guide-checklist__icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <span class="p-guide-checklist__name">紹介状</span>
                    <span class="p-guide-checklist__hint">お持ちの方</span>
                </div>
            </div>

            <!-- 受付時間 -->
            <h3 class="p-guide-subheading">受付時間</h3>
            <div class="p-guide-reception">
                <p class="p-guide-reception__message">
                    午前・午後ともに診療終了時刻の<span class="p-guide-reception__highlight">15分前</span>までにお願い致します。
                </p>
                <div class="p-guide-reception__card">
                    <h4 class="p-guide-reception__card-title">予約について</h4>
                    <p class="p-guide-reception__card-text">
                        診察の予約はお問い合わせフォームよりメッセージをお願いします。<br>
                        予約なしの当日受診も可能ですが、受診状況により待ち時間が発生することがあることをご理解ください。
                    </p>
                    <div class="p-guide-reception__card-link-wrap">
                        <a href="<?php echo esc_url(home_url('/access/')); ?>#contact"
                            class="p-guide-reception__card-link">
                            お問い合わせフォームへ →
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 入院のご案内セクション -->
    <section class="p-guide-inpatient">
        <div class="p-guide-inpatient__inner">
            <h2 class="p-guide-inpatient__title top-title">入院について</h2>

            <div class="p-guide-inpatient__features">
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title p-medical-item__title">長期入院対応</h3>
                    <p class="p-guide-inpatient__feature-text">医療療養病床を備え、急性期を終えても引き続き長期入院いただける体制を整えています</p>
                </div>
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title p-medical-item__title">医師常駐</h3>
                    <p class="p-guide-inpatient__feature-text">医師が常駐しておりますので、急変時の対応もスピーディーです</p>
                </div>
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title p-medical-item__title">院内調理</h3>
                    <p class="p-guide-inpatient__feature-text">管理栄養士がご要望に合わせて院内調理して提供しておりますので、お気軽にご相談ください</p>
                </div>
                <div class="p-guide-inpatient__feature">
                    <h3 class="p-guide-inpatient__feature-title p-medical-item__title">リハビリテーション</h3>
                    <p class="p-guide-inpatient__feature-text">
                        長期入院中のADL低下や廃用を予防するため、リハビリテーションに力を入れています。特に高齢患者様の運動機能維持・回復のための早期介入を得意としておりますので、お気軽にご相談ください</p>
                </div>
            </div>

            <!-- 病床数 -->
            <div class="p-guide-inpatient__beds">
                <h3 class="p-guide-heading">病床数</h3>
                <div class="p-guide-inpatient__beds-list">
                    <div class="p-guide-inpatient__beds-item">
                        <p class="p-guide-inpatient__beds-label">一般病床</p>
                        <span class="p-guide-inpatient__beds-number">22床</span>
                    </div>
                    <div class="p-guide-inpatient__beds-item">
                        <p class="p-guide-inpatient__beds-label">医療療養病床</p>
                        <span class="p-guide-inpatient__beds-number">50床</span>
                    </div>
                </div>
            </div>

            <!-- 入院時の持ち物 -->
            <div class="p-guide-inpatient__items">
                <h3 class="p-guide-heading">入院時の持ち物</h3>
                <p class="p-guide-inpatient__items-text">
                    入院時の持ち物については、事前にスタッフよりご説明させていただきます。ご不明な点がございましたら、お気軽にお問い合わせください。</p>
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