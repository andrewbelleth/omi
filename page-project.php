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
    <div class="section">
        <ul class="img-list img-list--3column-sp1">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img01.webp" alt="2025年 Vol.15社外報の画像" width="347" height="245" loading="lazy">
                <p>2025年 Vol.15</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img02.webp" alt="2024年 Vol.14社外報の画像" width="347" height="245" loading="lazy">
                <p>2024年 Vol.14</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img03.webp" alt="2024年 Vol.13社外報の画像" width="347" height="245" loading="lazy">
                <p>2024年 Vol.13</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img04.webp" alt="2024年 Vol.12社外報の画像" width="347" height="245" loading="lazy">
                <p>2024年 Vol.12</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img05.webp" alt="2024年 Vol.11社外報の画像" width="347" height="245" loading="lazy">
                <p>2024年 Vol.11</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img06.webp" alt="2023年 Vol.10社外報の画像" width="347" height="245" loading="lazy">
                <p>2023年 Vol.10</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img07.webp" alt="2023年 Vol.9社外報の画像" width="347" height="245" loading="lazy">
                <p>2023年 Vol.9</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img08.webp" alt="2023年 Vol.8社外報の画像" width="347" height="245" loading="lazy">
                <p>2023年 Vol.8</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img09.webp" alt="2022年 Vol.7社外報の画像" width="347" height="245" loading="lazy">
                <p>2022年 Vol.7</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img10.webp" alt="2022年 Vol.6社外報の画像" width="347" height="245" loading="lazy">
                <p>2022年 Vol.6</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img11.webp" alt="2022年 Vol.5社外報の画像" width="347" height="245" loading="lazy">
                <p>2022年 Vol.5</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img12.webp" alt="2022年 Vol.4社外報の画像" width="347" height="245" loading="lazy">
                <p>2022年 Vol.4</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img13.webp" alt="2021年 Vol.3社外報の画像" width="347" height="245" loading="lazy">
                <p>2021年 Vol.3</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img14.webp" alt="2021年 Vol.2社外報の画像" width="347" height="245" loading="lazy">
                <p>2021年 Vol.2</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ing/ing-img15.webp" alt="2021年 創刊号社外報の画像" width="347" height="245" loading="lazy">
                <p>2021年 創刊号</p>
            </li>
        </ul>
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