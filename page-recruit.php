<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: リクルートページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="breadcrumb section">
    <?php
    if (function_exists('bcn_display')) {
        bcn_display();
    }
    ?>
</div>
<div class="page__head-inner">
    <h2 class="page__title">
        <span class="page__title--en">RECRUIT</span>
        <span class="page__title--jp">リクルート</span>
    </h2>
</div>
<div class="page-wrapper">
    <div class="js-pallax-target">
        <picture class="pallax-bg">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-mv.webp" media="(min-width: 768px)">
            <img class="js-pallax-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/sp-recruit-mv.webp" loading="eager" decoding="async" alt="近江印刷リクルートページのメインビジュアル" width="1439" height="640">
        </picture>
    </div><!-- / -->
    <div class="recruit pt160--sp96">
        <div class="recruit-inner section">
            <div class="txt">
                <p>
                    近江印刷株式会社では、一緒により良いクリエイティブを作ってくださる方を募集しております。<br>
                    ご興味のある方は、下記ボタンより詳しくご覧ください。
                </p>
            </div>
            <div class="component-box-btn recruit-btn">
                <div class="btn-list">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--recruit inview">
                        <span class="btn__text">近江印刷株式会社<br>リクルートサイト</span>
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
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--career inview">
                        <span class="btn__text">キャリア採用はこちら</span>
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
        </div><!-- / -->
    </div>
</div>
<?php get_template_part('template-parts/footer'); ?>