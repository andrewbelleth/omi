<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 製本ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="wrapper">
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'BOOKBINDING',
        'title_jp' => '製本',
    ]); ?>
    <div class="page-wrapper wrapper mt160--sp96">
        <div class=" section section__col">
            <div class="page-printing__side section__side">
                <ul>
                    <li><a data-slug="middle-stitching" href="<?php echo home_url('/service/printing/bookbinding/#middle-stitching'); ?>">中綴じ製本</a></li>
                    <li><a data-slug="scram" href="<?php echo home_url('/service/printing/bookbinding/#scram'); ?>">スクラム製本</a></li>
                    <li><a data-slug="wireless-stitching" href="<?php echo home_url('/service/printing/bookbinding/#wireless-stitching'); ?>">無線綴じ製本</a></li>
                    <li><a data-slug="aziro" href="<?php echo home_url('/service/printing/bookbinding/#aziro'); ?>">アジロ綴じ製本</a></li>
                    <li><a data-slug="thread-binding" href="<?php echo home_url('/service/printing/bookbinding/#thread-binding'); ?>">糸がかり製本</a></li>
                    <li><a data-slug="pur" href="<?php echo home_url('/service/printing/bookbinding/#pur'); ?>">PUR製本</a></li>
                    <li><a data-slug="upper-binding" href="<?php echo home_url('/service/printing/bookbinding/#upper-binding'); ?>">上製本</a></li>
                </ul>
            </div>
            <div class="section__main wrapper-136">
                <div class="txt">
                    <p>
                        中綴じ製本、スクラム製本、無線綴じ製本など、製品の用途やご希望に合わせて様々な製本方法に対応します。
                    </p>
                </div>

                <section class="component-box-item middle-stitching" id="middle-stitching">
                    <h2 class="ttl-01">中綴じ製本</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            背の中央に針金（ホッチキス）を通して綴じる綴じ方です。表紙が観音折りされている冊子や、製本後にトムソン抜きされた変形冊子も可能です。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img01.webp" alt="中綴じ製本のイメージ画像" width="368" height="220" loading="lazy">
                            <p>ホッチキス（外側）</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img02.webp" alt="中綴じ製本のイメージ画像" width="368" height="220" loading="lazy">
                            <p>ホッチキス（内側）</p>
                        </li>
                    </ul>
                </section>
                <section class="component-box-item scram" id="scram">
                    <h2 class="ttl-01">スクラム製本</h2>
                    <div class="txt mt32--sp20">
                        <p>
                        二つ折りにしたものを重ね合わせ、冊子のようにまとめる綴じ方です。針金（ホッチキス）なしの中綴じ製本といわれることもあります。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img03.webp" alt="スクラム製本のイメージ画像" width="368" height="220" loading="lazy">
                            <p>スクラム（外側）</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img04.webp" alt="スクラム製本のイメージ画像" width="368" height="220" loading="lazy">
                            <p>スクラム（内側）</p>
                        </li>
                    </ul>
                </section>
                <section class="component-box-item wireless-stitching" id="wireless-stitching">
                    <h2 class="ttl-01">無線綴じ製本</h2>
                    <div class="txt mt32--sp20">
                        <p>
                        背の部分を糊で接着し、表紙用の紙でくるんで固定する綴じ方です。<br>
                        本文に片袖折りや2つ折ページが含まれる冊子、ミシン入りページが含まれる冊子、封筒を貼りこんだ冊子なども対応可能です。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img05.webp" alt="無線綴じ製本のイメージ画像" width="368" height="220" loading="lazy">
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img06.webp" alt="無線綴じ製本のイメージ画像" width="368" height="220" loading="lazy">
                        </li>
                    </ul>
                </section>
                <section class="component-box-item aziro" id="aziro">
                    <h2 class="ttl-01">アジロ綴じ製本</h2>
                    <div class="txt mt32--sp20">
                        <p>
                        背の部分に切り込みをいれて糊で接着し、表紙用の紙でくるんで固定する綴じ方です。一般的に、無線綴じ製本よりも強度があります。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img07.webp" alt="アジロ綴じ製本のイメージ画像" width="368" height="220" loading="lazy">
                        </li>
                    </ul>
                </section>
                <section class="component-box-item thread-binding" id="thread-binding">
                    <h2 class="ttl-01">糸がかり製本</h2>
                    <div class="txt mt32--sp20">
                        <p>
                        背を糸で綴じて糊で接着し、表紙用の紙でくるんで固定する綴じ方です。大切な思い出や記録を長期保存する場合におすすめです。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img08.webp" alt="糸がかり製本のイメージ画像" width="368" height="220" loading="lazy">
                        </li>
                    </ul>
                </section>
                <section class="component-box-item pur" id="pur">
                    <h2 class="ttl-01">PUR製本</h2>
                    <div class="txt mt32--sp20">
                        <p>
                        背の部分を特殊な糊で接着し、表紙用の紙でくるんで固定する綴じ方です。一般的な無線綴じ製本よりもノド（根本）部分まで開きやすく、接着強度も高いのが特徴です。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img09.webp" alt="PUR製本のイメージ画像" width="368" height="220" loading="lazy">
                        </li>
                    </ul>
                </section>
                <section class="component-box-item upper-binding" id="upper-binding">
                    <h2 class="ttl-01">上製本</h2>
                    <div class="txt mt32--sp20">
                        <p>
                        表紙に頑丈なボール紙を使用し、その表面を印刷用紙や布クロス、レザークロスで覆う綴じ方です。ハードカバーともいわれます。<br>
                        クロスに箔押し加工や、化粧箱も承ります。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bookbinding/bookbinding-img10.webp" alt="上製本のイメージ画像" width="368" height="220" loading="lazy">
                        </li>
                    </ul>
                </section>

            </div><!-- / -->
        </div>

        <div class="component-box section">
            <div class="component-box-item">
                <div class="link-01-component">
                    <div class="link-01-head">
                        <h3 class="link-01-title">SERVICE</h3>
                        <a href="<?php echo esc_url(home_url('/service')); ?>" class="link-01-link">
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
                        <a href="<?php echo home_url('/service/printing'); ?>" class="btn-02">
                            <span class="btn__text">印刷</span>
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
                        <a href="<?php echo home_url('/service/printing/products'); ?>" class="btn-02">
                            <span class="btn__text btn__text--newspaper">取扱品目</span>
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
                        <a href="<?php echo home_url('/service/printing/processing'); ?>" class="btn-02">
                            <span class="btn__text">加工</span>
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
        </div>

    </div>
    <?php get_template_part('template-parts/footer'); ?>
</div>