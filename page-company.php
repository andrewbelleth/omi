<?php
if (! defined('ABSPATH')) exit;
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
        <span class="page__title--en">COMPANY</span>
        <span class="page__title--jp">会社概要</span>
    </h2>
</div>
<div class="page-wrapper">
    <div class="js-pallax-target">
        <picture class="pallax-bg">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-mv.webp" media="(min-width: 768px)">
            <img class="js-pallax-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/sp-recruit-mv.webp" loading="eager" decoding="async" alt="近江印刷リクルートページのメインビジュアル" width="1439" height="640">
        </picture>
    </div><!-- / -->
    <div class="company pt160--sp96">
        <div class="top-message section">
            <h2 class="top-message__title">
                <span class="top-message__title-en">TOP MESSAGE</span>
                <span class="top-message__title-jp">お客様と共に想いを成果につなげるため、<br>進化し続けてまいります</span>
            </h2>
            <div class="top-message__media">
                <div class="top-message__media-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/top-message.webp" alt="お客様と共に想いを成果につなげるため、進化し続けてまいります">
                </div>
                <div class="top-message__media-body">
                    <div class="top-message__media-text">
                        <p class="txt txt-regular">当社は創業66年以上になる印刷会社です。6,700㎡の工場社屋には、主力の広報やカラーパンフレット、チラシなどの一般印刷からフォーム印刷関連、ＰＯＤ、製本、加工までをワンストップで自社生産できる設備をトータルで取り揃えております。</p>
                        <p class="txt txt-regular">各機種に熟練のオペレーターが専属しており、高品質の製品を短納期で納品できる体制を整えています。<br>滋賀県下をはじめ、全国の同業界の皆様方から、便利で小回りの利く納期の安定した「御社の第二工場」として、多数のお取引をいただいております。</p>
                        <p class="txt txt-regular">昨今は印刷で培った技術・経験を生かし、電子書籍、動画制作などのデジタルコンテンツも多く手掛けており、人手不足問題もあって、リクルート支援関連商品やのぼり、パネル、シールなど、時流に合った商品を幅広く提供しています。<br>2013年春には、当社工場・紙倉庫の屋上に250kwの大規模ソーラー発電システムを導入し、環境面でも社会に貢献できるよう整えてまいりました。</p>
                        <p class="txt txt-regular">2020年からは、次世代に向けた『持続可能な開発目標（ＳＤＧｓ）』に取り組んでおります。<br>湖国滋賀の地で100年企業を目指して、お客様と共に想いを成果につなげるため、進化し続けてまいります。</p>
                    </div>
                    <div class="top-message__media-user">
                        <div class="top-message__media-user-role">代表取締役社長</div>
                        <div class="top-message__media-user-name">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/top-message-user.webp" alt="里西 龍太郎">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="mt160--sp120">
        <?php
        $args = array(
            'slider_array' => array(
                'img_01' => 'company-gallery01.webp',
                'img_02' => 'company-gallery02.webp',
                'img_03' => 'company-gallery03.webp',
                'img_04' => 'company-gallery04.webp',
                'img_05' => 'company-gallery05.webp',
                'img_06' => 'company-gallery06.webp',
                'img_07' => 'company-gallery07.webp',
                'img_08' => 'company-gallery08.webp',
            ),
        );
        ?>
        <?php get_template_part('template-parts/components/gallery', null, $args); ?>
        </div>
    
        <div class="company-about section mt160--sp120">
            <div class="company-about__head section__head">
                <h2 class="section__title">
                    <span class="section__title--en">ABOUT</span>
                    <span class="section__title--jp">会社概要</span>
                </h2>
            </div>
            <div class="info-list">
                <div class="info-item">
                    <h3 class="info-heading">社名</h3>
                    <p class="info-content">近江印刷株式会社</p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">代表者</h3>
                    <p class="info-content">代表取締役　里西 一郎</p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">本社</h3>
                    <p class="info-content">〒529-1302 滋賀県愛知郡愛荘町川原771-1<br>
                        <span class="mobile">TEL: 0749-42-8400（代）　　　FAX: 0749-42-6700（代）</span>
                        <span class="desktop">TEL: 0749-42-8400（代） FAX: 0749-42-6700（代）</span>
                    </p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">創業</h3>
                    <p class="info-content">昭和33年11月</p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">資本金</h3>
                    <p class="info-content">3,000万円</p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">社員数</h3>
                    <p class="info-content">62名（2024年9月現在）</p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">事業内容</h3>
                    <div class="info-content">
                        <ol>
                            <li>印刷事業（企画、デザイン、各種印刷、製本加工 等）</li>
                            <li>デジタル事業（Webサイト構築、バナー制作、動画撮影・制作、SNS運用 等）</li>
                            <li>彦根経済新聞の発行</li>
                            <li>ブランディング事業</li>
                            <li>プロモーション事業（販売促進支援 等）</li>
                        </ol>
                    </div>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">工場敷地</h3>
                    <p class="info-content">11,500㎡</p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">建物</h3>
                    <p class="info-content">6,700㎡</p>
                </div>
                <div class="info-item">
                    <h3 class="info-heading">取扱金融機関</h3>
                    <p class="info-content">関西みらい銀行　愛知川支店<br>京都銀行　彦根支店<br>滋賀銀行　愛知川支店</p>
                </div>
            </div>
        </div>
    
        <div class="mt160--sp120 mb160--sp120">
            <div class="component-box-item section">
                <div class="link-01-component">
                    <div class="link-01-head">
                    <h3 class="link-01-title">COMPANY</h3>
                </div>
                <div class="btn-list-01">
                    <a href="<?php echo esc_url(home_url('/company/facility')); ?>" class="btn-02">
                        <span class="btn__text">設備概要</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#0068B6" />
                                <g clip-path="url(#clip0_817_15493)">
                                    <path d="M18.0934 22.6183L16.8418 21.3305L21.3772 16.7951H6.99475V15.0139H21.3772L16.8418 10.4785L18.0934 9.19067L24.8073 15.9045L18.0934 22.6183Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_817_15493">
                                        <rect width="19" height="19" fill="white" transform="translate(6.401 6.40002)" />
                                    </clipPath>
                                </defs>
                            </svg>
    
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/company/history')); ?>" class="btn-02">
                        <span class="btn__text">会社沿革</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#0068B6" />
                                <g clip-path="url(#clip0_817_15493)">
                                    <path d="M18.0934 22.6183L16.8418 21.3305L21.3772 16.7951H6.99475V15.0139H21.3772L16.8418 10.4785L18.0934 9.19067L24.8073 15.9045L18.0934 22.6183Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_817_15493">
                                        <rect width="19" height="19" fill="white" transform="translate(6.401 6.40002)" />
                                    </clipPath>
                                </defs>
                            </svg>
    
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/company/project')); ?>" class="btn-02">
                        <span class="btn__text btn__text--newspaper">私たちの<br class="sp-only">取り組み</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#0068B6" />
                                <g clip-path="url(#clip0_817_15493)">
                                    <path d="M18.0934 22.6183L16.8418 21.3305L21.3772 16.7951H6.99475V15.0139H21.3772L16.8418 10.4785L18.0934 9.19067L24.8073 15.9045L18.0934 22.6183Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_817_15493">
                                        <rect width="19" height="19" fill="white" transform="translate(6.401 6.40002)" />
                                    </clipPath>
                                </defs>
                            </svg>
    
                        </span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/company/ing')); ?>" class="btn-02">
                        <span class="btn__text btn__text--branding">社外報ing</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#0068B6" />
                                <g clip-path="url(#clip0_817_15493)">
                                    <path d="M18.0934 22.6183L16.8418 21.3305L21.3772 16.7951H6.99475V15.0139H21.3772L16.8418 10.4785L18.0934 9.19067L24.8073 15.9045L18.0934 22.6183Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_817_15493">
                                        <rect width="19" height="19" fill="white" transform="translate(6.401 6.40002)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/footer'); ?>