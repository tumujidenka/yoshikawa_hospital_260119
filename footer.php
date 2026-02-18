<footer class="site-footer-new">
    <div class="footer-inner-new">

        <!-- 左カラム：病院情報 -->
        <div class="footer-col-new footer-info">
            <h3 class="footer-hospital-name">吉川病院</h3>
            <div class="footer-contact-row">
                <i class="fa-solid fa-location-dot"></i>
                <p>〒550-0025<br>大阪府大阪市西区九条南3-29-14</p>
            </div>
            <div class="footer-contact-row">
                <i class="fa-solid fa-phone"></i>
                <p>06-6583-4114</p>
            </div>
        </div>

        <!-- 中央カラム：サイトマップ -->
        <div class="footer-col-new footer-sitemap">
            <h3 class="footer-heading">サイトマップ</h3>
            <ul class="sitemap-list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                <li><a href="<?php echo esc_url(home_url('/medical/')); ?>">診療科目・診療内容</a></li>
                <li><a href="<?php echo esc_url(home_url('/about/')); ?>">当院について</a></li>
                <li><a href="<?php echo esc_url(home_url('/guide/')); ?>">入院・受診案内</a></li>
                <li><a href="<?php echo esc_url(home_url('/access/')); ?>">アクセス・お問い合わせ</a></li>
            </ul>
        </div>

        <!-- 右カラム：診療時間 -->
        <div class="footer-col-new footer-hours">
            <h3 class="footer-heading">診療時間</h3>
            <table class="footer-hours-table">
                <tr>
                    <th>月〜金</th>
                    <td>：9:00-13:00 / 14:00-19:00</td>
                </tr>
                <tr>
                    <th>土</th>
                    <td>：9:00-13:00</td>
                </tr>
                <tr>
                    <th>休診日</th>
                    <td>：日曜日・祝日</td>
                </tr>
            </table>
            <p class="footer-emergency">※急患対応は常時行っております</p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>