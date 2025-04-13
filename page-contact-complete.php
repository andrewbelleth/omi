<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>
<div class="common-contant wrapper">
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'CONTACT',
        'title_jp' => 'お問い合わせ',
    ]); ?>
    <div class="container page-thanks">
        <div class="page short-page">
            <div class="page__body u-column-center">
                <h2 class="page-thanks__title">送信完了しました</h2>
                <p class="page-thanks__text">お問い合わせいただき、ありがとうございます。<br>
                    担当者より3営業日以内に<br class="sp-only">ご連絡させていただきます。<br>
                    <br>
                    万が一連絡が入らない場合は、お手数ですが<br class="sp-only">「<span class="page-thanks__text-blue">0749-42-8400 近江印刷株式会社 営業部</span>」まで<br class="u-tb-br">ご連絡をお願いいたします。
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">
                    <span class="btn__text">TOPに戻る</span>
                    <span class="btn__icon">
                        <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_40_1378)">
                                <path
                                    d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z"
                                    fill="#0068B6" />
                            </g>
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </div>
</div>

<?php get_template_part('template-parts/footer'); ?>
