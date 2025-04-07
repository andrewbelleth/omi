<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>
<div class="wrapper">
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => '404 NOT FOUND',
        'title_jp' => null,
    ]); ?>
    <div class="container page-404">
        <div class="page short-page">
            <div class="page__body u-column-center">
                <h2 class="page-404__title">ご指定のページは<br class="sp-only">見つかりません</h2>
                <p class="page-404__text">指定のURLが一時的にアクセスできないか、<br class="sp-only">削除された可能性があります。</p>
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

    <?php get_template_part('template-parts/footer'); ?>
</div>