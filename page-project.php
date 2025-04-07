<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: projectページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="wrapper">
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'PROJECT',
        'title_jp' => '私たちの取り組み',
    ]); ?>
    <div class="section wrapper-152">
        <section class="sdgs project">
            <div class="project__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-img01.webp" alt="SDGsの画像" width="960" height="489" loading="lazy">
            </div>
            <h2 class="sdgs__head mt56--sp40">
                近江印刷株式会社は<br class="sp-only">次世代に向けた<br>
                「持続可能な開発目標（SDGs）」に取り組んでいます
            </h2>
            <p class="sdgs__text">
                近江印刷は地域コミュニティ機関紙を発祥とし、70年以上にわたり印刷サービスを提供してきました。<br>
                その中で事業活動を通じて社会的課題と真摯に向き合い、印刷サービスで企業と人々の暮らしを支えるとともに、持続可能な社会の実現に向けて、取り組みを続けております。<br>
                SDGsでは企業の創造性とイノベーションが大きな推進力になると期待されています。<br>
                その源である一人ひとりの価値を尊重し、かけがえのない地球を守るとともに、現在、そして将来の社会的課題を解決し、より良い環境と社会を次世代へと引き継ぐためにたゆみない努力を続けてまいります。
            </p>
            <div class="component-box-btn mt48--sp40">
                <div class="btn-list">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                        <span class="btn__text">YouTubeで動画を見る</span>
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
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                        <span class="btn__text">WebBookで<br class="sp-only">パンフレットを見る</span>
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
        </section><!-- /.sdgs -->
        <section class="mlgs project">
            <div class="project__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-img02.webp" alt="マザーレイクゴールズについての説明画像" width="960" height="723" loading="lazy">
            </div>
            <h2 class="mlgs__head mt56--sp40">
                近江印刷株式会社は<br>
                「マザーレイクゴールズ（MLGs）」<br class="sp-only">に賛同しています
            </h2>
            <p class="mlgs__text">
                マザーレイクゴールズ（Mother Lake Goals, MLGs）とは、滋賀県が設定した、「琵琶湖」を切り口とした2030年の持続可能社会へ向けた目標です。滋賀県版のSDGsとして、2030年の環境と経済・社会活動をつなぐ健全な循環の構築に向けて、びわ湖を切り口として、独自に13のゴールを設定しています。<br>
                私たち近江印刷も、湖国滋賀に根差す企業としてこの考えに賛同し、びわ湖を取り巻く自然や環境への配慮を行うことにより、よりよい社会を次世代に引き継げるよう、取り組みを続けています。
            </p>
            <div class="component-box-btn mt48--sp40">
                <div class="btn-list">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                        <span class="btn__text">滋賀県<br class="sp-only">マザーレイクゴールズ</span>
                        <span class="btn__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <rect width="18" height="18" transform="translate(0.5)" fill="white" />
                                <path d="M2.80775 17.5C2.30258 17.5 1.875 17.325 1.525 16.975C1.175 16.625 1 16.1974 1 15.6923V2.30775C1 1.80258 1.175 1.375 1.525 1.025C1.875 0.675 2.30258 0.5 2.80775 0.5H9.11525V2H2.80775C2.73075 2 2.66025 2.03208 2.59625 2.09625C2.53208 2.16025 2.5 2.23075 2.5 2.30775V15.6923C2.5 15.7692 2.53208 15.8398 2.59625 15.9038C2.66025 15.9679 2.73075 16 2.80775 16H16.1923C16.2692 16 16.3398 15.9679 16.4038 15.9038C16.4679 15.8398 16.5 15.7692 16.5 15.6923V9.38475H18V15.6923C18 16.1974 17.825 16.625 17.475 16.975C17.125 17.325 16.6974 17.5 16.1923 17.5H2.80775ZM7.21925 12.3345L6.1655 11.2808L15.4462 2H11.5V0.5H18V7H16.5V3.05375L7.21925 12.3345Z" fill="#0068B6" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section><!-- /.sdgs -->
        <section class="smaile project">
            <div class="project__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-img03.webp" alt="すまいるあくしょんについての画像" width="960" height="763" loading="lazy">
            </div>
            <h2 class="smaile__head mt56--sp40">
                近江印刷株式会社は<br>
                滋賀県「すまいる・あくしょん」に<br class="sp-only">
                賛同し、活動を続けていきます
            </h2>
            <p class="smaile__text">
                3万人を超える子どもたちの声から生まれた子どもたちの笑顔を増やすための新しい行動様式「すまいる・あくしょん」。<br>
                今、一人ひとりが行動できることを考え子どもたちの笑顔を増やしていきましょう。
            </p>
            <p class="smaile__text">
                私たち近江印刷は滋賀県の企業として、地域の子どもたちを少しでも応援できればと、滋賀県「すまいる・あくしょん」に賛同し、地元の小学校等にオリジナルノートを寄贈するなどの活動をさせていただいています。<br>
                今後も社会的課題に真摯に向き合い、子どもたちの明るい未来のために「すまいる・あくしょん」の輪を広げる活動を続けてまいります。
            </p>
            <ul class="img-list img-list--4column mt32">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-img04.webp" alt="すまいるあくしょんの活動の様子" width="262" height="206" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-img05.webp" alt="すまいるあくしょんの活動の様子" width="262" height="206" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-img06.webp" alt="すまいるあくしょんの活動の様子" width="262" height="206" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/project-img07.webp" alt="すまいるあくしょんの活動の様子" width="262" height="206" loading="lazy"></li>
                </ul>
            <div class="component-box-btn mt48--sp40">
                <div class="btn-list">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                        <span class="btn__text">滋賀県<br class="sp-only"> すまいる・あくしょん</span>
                        <span class="btn__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <g clip-path="url(#clip0_832_11833)">
                                    <rect width="18" height="18" fill="white" />
                                    <path d="M2.30775 17.5C1.80258 17.5 1.375 17.325 1.025 16.975C0.675 16.625 0.5 16.1974 0.5 15.6923V2.30775C0.5 1.80258 0.675 1.375 1.025 1.025C1.375 0.675 1.80258 0.5 2.30775 0.5H8.61525V2H2.30775C2.23075 2 2.16025 2.03208 2.09625 2.09625C2.03208 2.16025 2 2.23075 2 2.30775V15.6923C2 15.7692 2.03208 15.8398 2.09625 15.9038C2.16025 15.9679 2.23075 16 2.30775 16H15.6923C15.7692 16 15.8398 15.9679 15.9038 15.9038C15.9679 15.8398 16 15.7692 16 15.6923V9.38475H17.5V15.6923C17.5 16.1974 17.325 16.625 16.975 16.975C16.625 17.325 16.1974 17.5 15.6923 17.5H2.30775ZM6.71925 12.3345L5.6655 11.2808L14.9462 2H11V0.5H17.5V7H16V3.05375L6.71925 12.3345Z" fill="#0068B6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_832_11833">
                                        <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section><!-- /.sdgs -->
    </div><!-- / -->
    <div class="component-box section">
        <div class="link-01-component">
            <div class="link-01-head">
                <h3 class="link-01-title">COMPANY</h3>
                <a href="<?php echo esc_url(home_url('/company')); ?>" class="link-01-link">
                    <span class="link-01-link-icon">
                        <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="14" cy="14" r="13.5" stroke="#0068B6" />
                            <path d="M15.9384 19.94L14.8317 18.8013L18.842 14.7911H6.12488V13.2161H18.842L14.8317 9.20586L15.9384 8.06714L21.8749 14.0036L15.9384 19.94Z" fill="#0068B6" />
                        </svg>
                    </span>
                    <span class="link-01-link-text">会社概要トップへ戻る</span>
                </a>
            </div>
            <div class="btn-list-01">
                <a href="<?php echo home_url('/company/facility/'); ?>" class="btn-02">
                    <span class="btn__text">設備概要</span>
                    <span class="btn__icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#0068B6" />
                            <g clip-path="url(#clip0_817_15493)">
                                <path d="M18.0934 22.6183L16.8418 21.3305L21.3772 16.7951H6.99475V15.0139H21.3772L16.8418 10.4785L18.0934 9.19067L24.8073 15.9045L18.0934 22.6183Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_817_15493-1">
                                    <rect width="19" height="19" fill="white" transform="translate(6.401 6.40002)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                </a>
                <a href="<?php echo home_url('/company/history/'); ?>" class="btn-02">
                    <span class="btn__text">会社沿革</span>
                    <span class="btn__icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#0068B6" />
                            <g clip-path="url(#clip0_817_15493)">
                                <path d="M18.0934 22.6183L16.8418 21.3305L21.3772 16.7951H6.99475V15.0139H21.3772L16.8418 10.4785L18.0934 9.19067L24.8073 15.9045L18.0934 22.6183Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_817_15493-2">
                                    <rect width="19" height="19" fill="white" transform="translate(6.401 6.40002)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                </a>
                <a href="<?php echo esc_url(home_url('/company/ing/')); ?>" class="btn-02">
                    <span class="btn__text btn__text--newspaper">社外報ing</span>
                    <span class="btn__icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="16" fill="#0068B6" />
                            <g clip-path="url(#clip0_817_15493)">
                                <path d="M18.0934 22.6183L16.8418 21.3305L21.3772 16.7951H6.99475V15.0139H21.3772L16.8418 10.4785L18.0934 9.19067L24.8073 15.9045L18.0934 22.6183Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_817_15493-3">
                                    <rect width="19" height="19" fill="white" transform="translate(6.401 6.40002)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/footer'); ?>
</div>