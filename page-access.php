<?php
/*
Template Name: Access & Contact
*/
get_header();
?>

<!-- ヒーローエリア（ページタイトル） -->
<div class="hero-area">
    <div class="hero-content">
        <h1>アクセス・お問い合わせ</h1>
        <p>当院へのアクセス方法とお問い合わせ先をご案内いたします</p>
    </div>
    <div class="hero-circle"></div>
</div>

<main>

    <!-- (2) アクセスセクション（地図と住所） -->
    <section class="access-section">
        <div class="section-title-wrapper-new">
            <div class="title-circle"></div>
            <h2 class="section-title-new">アクセス</h2>
        </div>

        <div class="access-container-new">
            <!-- 左側：地図エリア -->
            <div class="map-area-new">
                <div class="map-placeholder">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.569429532655!2d135.47355537574287!3d34.66555597293219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e7a8a6423519%3A0xe53e97022066c8f2!2z44CSNTUwLTAwMjUg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65Lmd5p2h5Y2X77yT5LiB55uu77yS77yZ4oiS77yR77yU!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- 右側：住所などの情報カード -->
            <div class="access-info-card">

                <!-- 住所 -->
                <div class="info-row">
                    <div class="info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="info-content">
                        <h3>住所</h3>
                        <p>〒550-0025<br>大阪府大阪市西区九条南3-29-14</p>
                    </div>
                </div>

                <!-- 交通アクセス -->
                <div class="info-row">
                    <div class="info-icon">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h3>交通アクセス</h3>
                        <ul class="access-list">
                            <li>阪神なんば線、地下鉄中央線九条駅 徒歩6分</li>
                            <li>大阪環状線、地下鉄中央線弁天町 徒歩8分</li>
                            <li>大阪シティバス辰巳橋バス停 徒歩1分</li>
                        </ul>
                    </div>
                </div>

                <!-- 駐車場 -->
                <div class="info-row">
                    <div class="info-icon">
                        <i class="fa-solid fa-square-parking"></i>
                    </div>
                    <div class="info-content">
                        <h3>駐車場</h3>
                        <p>駐車場の詳細については、お電話でお問い合わせください</p>
                    </div>
                </div>

                <!-- お電話 -->
                <div class="info-row">
                    <div class="info-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h3>お電話</h3>
                        <p class="phone-text">06-6583-4114</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- (3) 診療時間セクション -->
    <section class="hours-section">
        <div class="section-title-wrapper-new">
            <div class="title-circle"></div>
            <h2 class="section-title-new">診療時間・休診日</h2>
        </div>

        <div class="hours-container-new">
            <table class="hours-table-new">
                <thead>
                    <tr>
                        <th class="label-cell">曜日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                        <th>日・祝</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="am-row">
                        <th class="label-cell">9:00-13:00</th>
                        <td>◯</td>
                        <td>◯</td>
                        <td>◯</td>
                        <td>◯</td>
                        <td>◯</td>
                        <td>◯</td>
                        <td></td>
                    </tr>
                    <tr class="pm-row">
                        <th class="label-cell">14:00-19:00</th>
                        <td>◯</td>
                        <td>◯</td>
                        <td>◯</td>
                        <td>◯</td>
                        <td>◯</td>
                        <td>－</td>
                        <td>－</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="hours-note-new">
            <p>※急患対応は常時行っております</p>
            <p>※受付は午前・午後とも15分前までにお願いします</p>
            <p>休診日：日曜日・祝日</p>
        </div>
    </section>


    <!-- (4) お問い合わせフォームセクション -->
    <section class="contact-section">
        <div class="section-title-wrapper-new">
            <div class="title-circle"></div>
            <h2 class="section-title-new">お問い合わせフォーム</h2>
        </div>

        <div class="form-container-new">
            <form action="#" method="post">

                <!-- お名前（姓・名） -->
                <div class="form-row">
                    <div class="form-col">
                        <label for="name-sei">お名前（姓） <span class="required-mark">*</span></label>
                        <input type="text" id="name-sei" name="name-sei" placeholder="山田" class="text-input-new">
                    </div>
                    <div class="form-col">
                        <label for="name-mei">お名前（名） <span class="required-mark">*</span></label>
                        <input type="text" id="name-mei" name="name-mei" placeholder="太郎" class="text-input-new">
                    </div>
                </div>

                <!-- ふりがな（姓・名） -->
                <div class="form-row">
                    <div class="form-col">
                        <label for="kana-sei">ふりがな（姓） <span class="required-mark">*</span></label>
                        <input type="text" id="kana-sei" name="kana-sei" placeholder="やまだ" class="text-input-new">
                    </div>
                    <div class="form-col">
                        <label for="kana-mei">ふりがな（名） <span class="required-mark">*</span></label>
                        <input type="text" id="kana-mei" name="kana-mei" placeholder="たろう" class="text-input-new">
                    </div>
                </div>

                <!-- 生年月日 -->
                <div class="form-item-new">
                    <label for="birthdate">生年月日 <span class="required-mark">*</span></label>
                    <input type="text" id="birthdate" name="birthdate" placeholder="1980/01/01" class="text-input-new">
                </div>

                <!-- メールアドレス -->
                <div class="form-item-new">
                    <label for="email">メールアドレス <span class="required-mark">*</span></label>
                    <input type="email" id="email" name="email" placeholder="example@email.com" class="text-input-new">
                </div>

                <!-- 電話番号 -->
                <div class="form-item-new">
                    <label for="phone">電話番号 <span class="required-mark">*</span></label>
                    <input type="tel" id="phone" name="phone" placeholder="090-1234-5678" class="text-input-new">
                </div>

                <!-- ご相談内容 -->
                <div class="form-item-new">
                    <label for="message">ご相談内容 <span class="required-mark">*</span></label>
                    <textarea id="message" name="message" rows="5" placeholder="ご相談内容をご記入ください" class="text-input-new"></textarea>
                </div>

                <div class="form-submit-new">
                    <button type="submit" class="submit-btn-new">送信する</button>
                </div>

            </form>
        </div>
    </section>


    <!-- (5) 採用情報セクション -->
    <section class="recruit-section">
        <div class="section-title-wrapper-new">
            <div class="title-circle"></div>
            <h2 class="section-title-new">採用情報</h2>
        </div>

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


    <!-- (6) CTA（行動喚起）セクション -->
    <div class="cta-section-new">
        <div class="cta-inner-new">
            <h2 class="cta-title-new">ご予約・お問い合わせはこちら</h2>
            <p class="cta-desc-new">診療のご予約やご相談など、お気軽にお問い合わせください</p>
            <div class="cta-buttons-new">
                <a href="tel:0665834114" class="cta-btn-new phone-btn-new">
                    <i class="fa-solid fa-phone"></i> 06-6583-4114
                </a>
                <a href="<?php echo esc_url(home_url('/access/')); ?>#contact" class="cta-btn-new web-btn-new">
                    お問い合わせフォーム
                </a>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
