<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<main>
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'COMPONENT',
        'title_jp' => 'コンポーネント一覧',
    ]); ?>
    <style>
        .component-box-wrapper {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding-block: 4rem;
        }

        .component-box {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding-block: 2rem;
            z-index: 1;

        }

        .component-box::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 105%;
            height: 100%;
            border: 1px solid #000;
            z-index: -1;
        }

        .component-box>p {
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.6;
            letter-spacing: .1em;
        }
    </style>
    <div class="page section">
        <div class="component-box-wrapper">
            <div class="component-box">
                <p>ttl-01</p>
                <div class="component-box-item">
                    <h2 class="ttl-01">見出しが入ります</h2>
                </div>
            </div>
            <div class="component-box">
                <p>ttl-02</p>
                <div class="component-box-item">
                    <h2 class="mt24 ttl-02 ttl-02--triangle">mt24の余白</h2>
                </div>
                <div class="component-box-item">
                    <h2 class="mt32 ttl-02 ttl-02--round">mt32の余白</h2>
                </div>
                <div class="component-box-item">
                    <h2 class="mt40 ttl-02 ttl-02--triangle">mt40の余白</h2>
                </div>
            </div>
            <div class="component-box">
                <p>txt-01</p>
                <div class="component-box-item">
                    <div class="txt-01">
                        <p>ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。</p>
                    </div>
                </div>
                <div class="component-box-item">
                    <div class="txt-01 txt-01--with-img">
                        <p>ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。</p>
                        <div class="txt-01-img"></div>
                    </div>
                </div>
            </div>
            <div class="component-box">
                <p>btn-02</p>
                <div class="component-box-item">
                    <a href="#" class="btn-02">
                        <span class="btn__text">見出しが入ります</span>
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
            <div class="component-box">
                <p>btn-list-01</p>
                <div class="component-box-item">
                    <div class="btn-list-01">
                        <a href="#" class="btn-02">
                            <span class="btn__text">印刷</span>
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
                        <a href="#" class="btn-02">
                            <span class="btn__text">デジタル</span>
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
                        <a href="#" class="btn-02">
                            <span class="btn__text btn__text--newspaper">彦根経済新聞</span>
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
                        <a href="#" class="btn-02">
                            <span class="btn__text btn__text--branding">ブランディング</span>
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
                        <a href="#" class="btn-02">
                            <span class="btn__text btn__text--promotion">プロモーション</span>
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
            <div class="component-box">
                <p>link-01-component</p>
                <div class="component-box-item">
                    <div class="link-01-component">
                        <div class="link-01-head">
                            <h3 class="link-01-title">SERVICE</h3>
                            <a href="#" class="link-01-link">
                                <span class="link-01-link-icon">
                                    <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="14" cy="14" r="13.5" stroke="#0068B6" />
                                        <path d="M15.9384 19.94L14.8317 18.8013L18.842 14.7911H6.12488V13.2161H18.842L14.8317 9.20586L15.9384 8.06714L21.8749 14.0036L15.9384 19.94Z" fill="#0068B6" />
                                    </svg>
                                </span>
                                <span class="link-01-link-text">サービストップへ戻る</span>
                            </a>
                        </div>
                        <div class="btn-list-01">
                            <a href="#" class="btn-02">
                                <span class="btn__text">印刷</span>
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
                            <a href="#" class="btn-02">
                                <span class="btn__text">デジタル</span>
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
                            <a href="#" class="btn-02">
                                <span class="btn__text btn__text--newspaper">彦根経済新聞</span>
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
                            <a href="#" class="btn-02">
                                <span class="btn__text btn__text--branding">ブランディング</span>
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
                            <a href="#" class="btn-02">
                                <span class="btn__text btn__text--promotion">プロモーション</span>
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
    </div>
</main>
<?php get_template_part('template-parts/footer'); ?>