<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'CONTACT',
    'title_jp' => 'お問い合わせ',
]); ?>

<!-- お問い合わせトップ -->
<div class="contact-top mt80--sp64">
    <div class="contact-top__inner">
        <div class="txt">
            <p>下記フォームからお気軽にお問い合わせください。担当者より3営業日以内にご連絡させていただきます。<br>万が一連絡が入らない場合は、お手数ですが<span class="dib">「<span class="colorBlue">0749-42-8400 近江印刷株式会社 営業部</span>」</span>まで<span class="dib">ご連絡をお願いいたします。</span></span><br><br>なお、こちらのお問い合わせフォームは、お客さま専用となりますので、営業メールは固くお断りしております。</p>
        </div>

        <div class="contact-top__tel mt64--sp40">
            <div class="contact-top__tel-inner">
                <div class="contact-top__tel-header">
                    <h2 class="contact-top__tel-title">お電話での<br class="desktop">お問い合わせ先</h2>
                    <p class="contact-top__tel-time desktop">（受付時間 当社営業日 9:00~17:00）</p>
                </div>
                <div class="contact-top__tel-body">
                    <p class="contact-top__tel-text">お急ぎの場合は、下記までお電話ください。</p>
                    <div class="contact-top__tel-number mt4">
                        <span class="contact-top__tel-icon">
                            <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M53.7192 44.0536L43.4726 39.6708C43.1981 39.5795 42.9237 39.4882 42.5577 39.4882C41.9173 39.4882 41.2769 39.8534 40.911 40.3099L36.3366 45.8798C29.2006 42.5013 23.5284 36.8402 20.1433 29.7181L25.7241 25.1527C26.1815 24.7875 26.5475 24.1483 26.5475 23.4178C26.5475 23.1439 26.456 22.87 26.3645 22.5961L21.9731 12.3695C21.6071 11.5477 20.7838 10.9999 19.8689 10.9999C19.7774 10.9999 19.5944 11.0912 19.4114 11.0912L9.89677 13.2826C8.89041 13.5565 8.25 14.3783 8.25 15.3827C8.25 38.849 27.1879 57.7499 50.7001 57.7499C51.7065 57.7499 52.5298 57.1107 52.8043 56.1063L55 46.6102C55 46.4276 55 46.245 55 46.1537C55 45.2406 54.4511 44.4188 53.7192 44.0536Z" fill="#0068B6" />
                            </svg>
                        </span>
                        <span class="contact-top__tel-num">0749-42-8400</span>
                    </div>
                    <p class="contact-top__tel-time mobile">（受付時間 当社営業日 9:00~17:00）</p>
                    <div class="contact-top__tel-departments">
                        <ul class="disc-list">
                            <li><b>デジタルコンテンツに関するお問い合わせ ：</b><br class="mobile-sp"> 営業部 カスタマーソリューション課</li>
                            <li><b>印刷物に関するお問い合わせ ：</b><br class="mobile-sp"> 業務部</li>
                            <li><b>データ入稿に関するお問い合わせ ：</b><br class="mobile-sp"> 制作部 杉本</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-form mt80--sp64">
    <div class="contact-form__inner">
        <div class="wpcf7 js" id="wpcf7-f7-o1" lang="ja" dir="ltr" data-wpcf7-id="7">
            <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="45a1726" title="お問い合せ"]'); ?>
        </div>
    </div>
</div>

<script>
    // セレクトボックスの色設定
    document.querySelectorAll('select.wpcf7-select').forEach(select => {
        select.addEventListener('change', function() {
            if (this.value === '') {
                this.style.color = '#A9A9A9';
                this.style.fontSize = '0.9375rem';
            } else {
                this.style.color = '';
                this.style.fontSize = '16px';
            }
        });

        // 初期表示時の色設定
        if (select.value === '') {
            select.style.color = '#A9A9A9';
            select.style.fontSize = '0.9375rem';
        }
    });
</script>


<?php get_template_part('template-parts/footer'); ?>