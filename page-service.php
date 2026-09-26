<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>

<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'SERVICE',
    'title_jp' => 'サービス',
]); ?>
<div class="page-wrapper mt120--sp96">
    <div class="page__service-head">
        <div class="page__service-head-inner">
            <div class="page__service-head-image">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/service/service-graph-image-sp.webp" media="(max-width: 768px)">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/service/service-graph-image.webp"
                        alt="企画・制作・製造・物流のサイクルと、印刷・Web・プロモーション・デジタル・SNS・DX・業務改善で「伝える」を支える近江印刷のサービス図"
                        width="1440"
                        height="1424"
                        loading="eager"
                        decoding="sync">
                </picture>
            </div>
            <div class="page__service-head-text">
                <div class="page__service-head-text-body">
                    <div class="page__service-head-text-block">
                        <p>私たち近江印刷の起源は、創業者里西龍太郎が創刊したミニコミ誌近江タイムスで、<span class="page__service-head-mark">情報を人びとに「伝える」ために</span>生まれました。</p>
                        <p>それから70年以上、私たちは様々な情報を「伝える」ための印刷物を作り続けてきました。<br aria-hidden="true">現在、情報伝達の手段は、時代の変化とともに多種多様に広がり続けています。媒体も手法も様々です。</p>
                    </div>
                    <p>その変化に伴い、私たちのサービスも媒体の垣根を超えて広がり続けます。<br aria-hidden="true"><span class="page__service-head-mark">なぜなら、私たち近江印刷の使命は、創業当時からずっとかわらず、「伝える」を支えることだから。</span><br aria-hidden="true">近江印刷はこれからも、守るべきものは守り、変えるべきものは変えながら、進化しつづけます。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="component-box-item section">
        <div class="link-01-component">
            <div class="link-01-head">
                <h3 class="link-01-title">SERVICE</h3>
            </div>
            <div class="btn-list-01">
                <a href="<?php echo esc_url(home_url('/printing')); ?>" class="btn-02">
                    <span class="btn__text">印刷</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/degital')); ?>" class="btn-02">
                    <span class="btn__text">デジタル</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/newspaper')); ?>" class="btn-02">
                    <span class="btn__text btn__text--newspaper">彦根経済新聞</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/branding')); ?>" class="btn-02">
                    <span class="btn__text btn__text--branding">ブランディング</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/promotion')); ?>" class="btn-02">
                    <span class="btn__text btn__text--promotion">プロモーション</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/nice-crew')); ?>" class="btn-02">
                    <span class="btn__text">NICE CREW</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/footer'); ?>