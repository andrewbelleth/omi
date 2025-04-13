<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'CONTACT',
    'title_jp' => 'お問い合わせ',
]); ?>

<div class="contact-confirm mt80--sp64">
    <div class="contact-confirm__inner">
        <div class="txt">
            <p>以下のお問い合わせ内容に間違いがなければ、「送信する」を押してください。</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="1480e2d" title="お問い合わせ確認"]'); ?>
        <div class="info-list mt48--sp40">
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">お問い合わせ種別</h3>
                <p class="info-content">デジタルコンテンツに関するお問い合わせ・お見積もり</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">会社名・団体名</h3>
                <p class="info-content">近江印刷株式会社</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">部署</h3>
                <p class="info-content">営業部</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">お名前</h3>
                <p class="info-content">近江 太郎</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">住所</h3>
                <p class="info-content">滋賀県愛知郡愛荘町川原771-1</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">電話番号</h3>
                <p class="info-content">0749-42-8400</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">メールアドレス</h3>
                <p class="info-content">example@example.com</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">当社を知ったきっかけ</h3>
                <p class="info-content">1:当社営業</p>
            </div>
            <div class="info-item">
                <h3 class="info-heading minw146--spauto">お問い合わせ内容</h3>
                <p class="info-content">ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。</p>
            </div>
        </div>
        <div class="contact-confirm__btn-list mt72--sp64">
            <div class="contact__form-submit-back btn">
                <span class="btn__icon">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_788_9320)">
                            <rect width="22" height="22" transform="translate(0.140625 0.142578)" fill="white" />
                            <path d="M8.60203 3.37382L10.0513 4.865L4.79981 10.1165L21.4531 10.1165L21.4531 12.179L4.79981 12.179L10.0513 17.4304L8.60203 18.9216L0.828125 11.1477L8.60203 3.37382Z" fill="#A6A6A6" />
                        </g>
                        <defs>
                            <clipPath id="clip0_788_9320">
                                <rect width="22" height="22" fill="white" transform="translate(0.140625 0.142578)" />
                            </clipPath>
                        </defs>
                    </svg>

                </span>
                <span class="btn__text">
                    <input class="wpcf7-form-control wpcf7-previous" type="button" value="戻る">
                </span>
            </div>
            <div class="contact__form-submit-btn btn">
                <span class="btn__text">
                    <input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="確認する">
                </span>
                <span class="btn__icon">
                    <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_40_1378)">
                            <path
                                d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z"
                                fill="#0068B6" />
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('template-parts/footer'); ?>