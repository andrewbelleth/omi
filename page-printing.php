<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 印刷ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="page-printing">
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'PRINTING',
        'title_jp' => '印刷',
        'breadcrumb' => '印刷',
    ]); ?>
    <div class="page-wrapper wrapper mt160--sp96">
        <div class=" section section__col">
            <div class="page-printing__side section__side">
                <ul>
                    <li><a data-slug="type-printing" href="<?php echo home_url('/printing/#type-printing'); ?>">印刷の種類</a></li>
                    <li><a data-slug="type-products" href="<?php echo home_url('/printing/#type-products'); ?>">取り扱い品目</a></li>
                    <li><a data-slug="processing" href="<?php echo home_url('/printing/#processing'); ?>">加工・製本</a></li>
                    <li><a data-slug="type-agency" href="<?php echo home_url('/printing/#type-agency'); ?>">業務代行</a></li>
                </ul>
            </div>
            <div class="section__main wrapper-136">
                <div class="component-box-item" id="type-printing">
                    <div class="txt">
                        <p>企画デザインから印刷、加工、製本、納品までを一貫して自社完結できるトータルシステムを完備し、高品質、短納期、低価格をモットーに事業展開しております。
                            ポスター、チラシ、パンフレット、広報誌などの商業印刷物から、帳票、封筒、名刺などの事務用印刷物、シール、看板、のぼり、各種ノベルティなどの特殊印刷まで、幅広く対応しています。
                            また、全国各地、複数箇所への配送も承っております。</p>
                    </div>
                    <ul class="img-list img-list--2column mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img01.webp" alt="商業印刷物制作の様子" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img02.webp" alt="商業印刷物制作の様子" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img03.webp" alt="商業印刷物制作の様子" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img04.webp" alt="商業印刷物制作の様子" width="368" height="220" loading="lazy"></li>
                    </ul>
                </div>
                <section class="component-box-item type-item" id="type-item">
                    <h2 class="ttl-01">印刷の種類</h2>
                    <div class="component-item-column-g10 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">オフセット印刷</h3>
                        <div class="txt-01">
                            <p>オフセット印刷とは、シアン・マゼンタ・イエロー・ブラック各色の版を出力し印刷を行う方式です。一枚の紙に4つの色を刷り重ねていくことで最終的な仕上がり色を再現します。大量に印刷することでコストを大幅に下げることが特徴です。<br>当社は高生産性・高品質を誇る印刷機MEGA Jprintを2台完備し、ロール紙を使用することにより、大量印刷、多頁物印刷も短納期・低コストでのご提供を可能としています。</p>
                        </div>
                    </div>
                    <div class="component-item-column-g10 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">オンデマンド印刷</h3>
                        <div class="txt-01">
                            <p>オンデマンド印刷は、データから直接印刷する高速デジタル印刷機による印刷方式です。従来のオフセット印刷のような版を必要としないため、作業工程が少なく、印刷に掛かる時間とコストを大幅に短縮することができ、小ロット・多品種に対応しています。<br>住所やバーコードなど、印刷内容の一部を変えるバリアブル印刷（可変印刷）にも対応できます。</p>
                        </div>
                    </div>
                    <div class="component-item-column-g10 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">伝票・ビジネスフォーム印刷</h3>
                        <div class="txt-01">
                            <p>ビジネスフォーム印刷機、伝票製本設備を各種完備。制作から納品までワンストップの社内生産体制により、短納期・低コストを実現しております。裏カーボン、増感・減感加工、ナンバリングやミシン、穴あけなどの加工も可能です。</p>
                        </div>
                    </div>
                    <div class="component-item-column-g10 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">シール印刷</h3>
                        <div class="txt-01">
                            <p>商品ラベル、製造内容シール、各種表示ステッカー、目隠しシール、訂正シールなど、用途や貼付場所などによって、様々な形、材質、加工のシールを制作させていただいております。</p>
                        </div>
                    </div>
                    <div class="component-item-column-g10 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">パッケージ印刷</h3>
                        <div class="txt-01">
                            <p>商品のパンフレット、チラシ、販促ツールと同時にパッケージの制作も承っております。形状や材質は様々。ヒアリングを基に、最も良いパッケージが仕上がるようデザインからご提案させていただきます。</p>
                        </div>
                    </div>
                </section>
                <section class="component-box-item type-products" id="type-products">
                    <h2 class="ttl-01">取扱品目</h2>
                    <div class="txt m32">
                        <p>
                            ポスター、チラシ、パンフレット、広報誌などの商業印刷物から、帳票、封筒、名刺などの事務用印刷物、シール、看板、のぼり、各種ノベルティなどの特殊印刷まで、幅広く対応しています。自社工場に取り揃えた豊富な設備により、様々な加工で印刷物に付加価値を与えることも可能です。お客さまの用途に適した印刷物を制作いたします。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img05.webp" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img06.webp" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <a href="<?php echo esc_url(home_url('/products')); ?>" class="btn inview">
                            <span class="btn__text">取扱品目を詳しく見る</span>
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
                </section>
                <section class="component-box-item type-processing" id="type-processing">
                    <h2 class="ttl-01">加工・製本</h2>
                    <div class="txt m32">
                        <p>
                            当社の自社工場設備と信頼ある協力会社との連携により、印刷物に付加価値をプラスした高品質な製品をご提供します。<br>
                            加工が必要な場合には、加工位置や向きを示す仕上がり見本をご準備ください。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img07.webp" alt="加工位置の変更で印刷物への付加価値を付けた製品" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img08.webp" alt="加工位置の変更で印刷物への付加価値を付けた製品" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <div class="btn-list">
                            <a href="<?php echo esc_url(home_url('/processing')); ?>" class="btn inview">
                                <span class="btn__text">加工について詳しく見る</span>
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
                            <a href="<?php echo esc_url(home_url('/bookbinding')); ?>" class="btn inview">
                                <span class="btn__text">製本について詳しく見る</span>
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
                </section>
                <section class="component-box-item type-agency" id="type-agency">
                    <h2 class="ttl-01">業務代行</h2>
                    <div class="txt mt32--sp24">
                        <p>
                            当社の自社工場設備と信頼ある協力会社との連携により、印刷物に付加価値をプラスした高品質な製品をご提供します。<br>
                            加工が必要な場合には、加工位置や向きを示す仕上がり見本をご準備ください。
                        </p>
                    </div>
                    <div class="component-item-column-g8 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">区分け業務</h3>
                        <div class="txt-01 txt-01--with-img">
                            <p>
                                数ヵ所から数百ヵ所の区分け作業も、熟練のスタッフが迅速かつ的確に作業します。<br>
                                広報誌の地区別区分け、タウンメールの郵便番号区分け、学生向け配布物の学校別区分けなども対応可能です。
                            </p>
                            <div class="txt-01-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img09.webp" alt="広報誌、タウンメールの区分け業務" width="220" height="138" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="component-item-column-g8 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">封入封緘業務</h3>
                        <div class="txt-01 txt-01--with-img">
                            <p>
                                複数の印刷物をひとつの封筒に入れ（封入）、フタを糊付けする（封緘）作業です。機械ではできない変則的な組み合わせの封入作業なども、熟練のスタッフが丁寧に正確に行います。封筒への宛名印字、宛名ラベル貼り作業も合わせて承ります。
                            </p>
                            <div class="txt-01-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img10.webp" alt="宛名印字、宛名ラベル貼り付け等封入封緘業務" width="220" height="138" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="component-item-column-g8 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">挟み込み業務</h3>
                        <div class="txt-01 txt-01--with-img">
                            <p>
                                冊子に、別口のチラシや封筒などの印刷物を挟み込む作業です。<br>
                                広報誌の区分けの内、一部の地区向けに特定のチラシを挟み込むなどの複雑なオーダーにも柔軟に対応できます。
                            </p>
                            <div class="txt-01-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img11.webp" alt="冊子、別口にチラシ挟み込み" width="220" height="138" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="component-item-column-g8 mt32--sp24">
                        <h3 class="ttl-02 ttl-02--triangle">業務代行</h3>
                        <div class="txt-01 txt-01--with-img">
                            <p>
                                一括、または複数ヵ所への発送作業も代行させていただきます。複数の配送業者と取引があるため、日にち指定、時間指定などお客様のニーズにお応えします。
                            </p>
                            <div class="txt-01-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/printing/printing-img12.webp" alt="複数の配送業者へ発送業務代行" width="220" height="138" loading="lazy">
                            </div>
                        </div>
                    </div>
                </section>
            </div><!-- / -->
        </div>
        <?php get_template_part('template-parts/guide'); ?>

        <div class="component-box wrapper-1120">
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
                            <span class="btn__text">彦根経済新聞</span>
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
                            <span class="btn__text btn__text--newspaper">ブランディング</span>
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
                            <span class="btn__text btn__text--branding">プロモーション</span>
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
</div>