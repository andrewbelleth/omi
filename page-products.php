<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 取り扱い品目ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="wrapper">
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'PRODUCTS',
        'title_jp' => '取り扱い品目',
    ]); ?>
    <div class="page-wrapper wrapper mt160--sp96">
        <div class=" section section__col">
            <div class="page-printing__side section__side">
                <ul>
                    <li><a data-slug="magazine" href="<?php echo home_url('/service/printing/products/#magazine'); ?>">広報誌・定期刊行物</a></li>
                    <li><a data-slug="flyer" href="<?php echo home_url('/service/printing/products/#flyer'); ?>">チラシ・ポスター</a></li>
                    <li><a data-slug="catalog" href="<?php echo home_url('/service/printing/products/#catalog'); ?>">カタログ</a></li>
                    <li><a data-slug="booklet" href="<?php echo home_url('/service/printing/products/#booklet'); ?>">冊子</a></li>
                    <li><a data-slug="slip" href="<?php echo home_url('/service/printing/products/#slip'); ?>">伝票・帳票</a></li>
                    <li><a data-slug="envelope" href="<?php echo home_url('/service/printing/products/#envelope'); ?>">名刺・封筒・はがき・挨拶状</a></li>
                    <li><a data-slug="ricebag" href="<?php echo home_url('/service/printing/products/#ricebag'); ?>">米袋</a></li>
                    <li><a data-slug="promotion" href="<?php echo home_url('/service/printing/products/#promotion'); ?>">販促</a></li>
                </ul>
            </div>
            <div class="section__main wrapper-136">
                <div class="">
                    <div class="txt">
                        <p>
                            お客様の「伝えたい」を大切に。より効果的な「伝わる」表現へ。<br>
                            創業時より、ポスター、パンフレット、冊子など印刷に関わるグラフィックはもちろん、様々な媒体にデザインを施してまいりました。<br>
                            お客様の「伝えたい」想いにしっかり向き合い、効果的な表現で「伝わる」グラフィックデザインをご提供いたします。
                        </p>
                    </div>
                </div>

                <section class="component-box-item type-products" id="magazine">
                    <h2 class="ttl-01">広報誌・定期刊行物</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            広報誌・定期刊行物は当社がもっとも得意とする製品のひとつです。県内の市町村から直接、または他府県の同業様より下請けとして、多数の広報誌をお任せいただいています。高品質な印刷はもちろん、タイトなスケジュールや、付属印刷物の印刷・挟み込み作業、多数箇所区分け・発送など、様々なご要望にも柔軟に対応可能です。<br>
                            また、ホームページ掲載用データを、PDFよりも読みやすく多機能なWebBookにする事も併せてご提案させていただきます。<br>
                            お見積りはお気軽にお問い合わせください。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img01.webp" alt="広報誌・定期刊行物についてのイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img02.webp" alt="広報誌・定期刊行物についてのイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <a href="<?php echo esc_url(home_url('/products')); ?>" class="btn inview">
                            <span class="btn__text">WebBookについて</span>
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
                <section class="component-box-item type-products" id="flyer">
                    <h2 class="ttl-01">チラシ・ポスター</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            長年の経験で培った印刷物の企画・デザイン力を活かし、お客様の販売促進をサポートします。<br>
                            徹底したヒアリングを基に、お客様のコンセプトに沿った企画提案から、効果的なマーケティング戦略まで、トータルでお手伝いします。<br>
                            さらに、動画広告やWEBコンテンツとの連携により、紙媒体にとどまらない多角的なアプローチで、エンドユーザーに次のアクションを促し、効率的な販売促進をご提案いたします。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img03.webp" alt="印刷物の企画デザイン力を活かしたチラシポスター制作のイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img04.webp" alt="印刷物の企画デザイン力を活かしたチラシポスター制作のイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                            <span class="btn__text">プロモーションについて</span>
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
                <section class="component-box-item catalog" id="catalog">
                    <h2 class="ttl-01">カタログ</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            美しさだけでは伝わらない、戦略的視点で訴求力の高いデザインを提供します。企画者から制作者、カメラマンまで、お客様のコンセプトを深く理解し、結果を出せる商品に仕上げます。<br>
                            デジタルコンテンツを活用することで、ブランド力を強化し、内容を充実させた価値あるカタログを提案いたします。商品カタログから学校や塾、飲食店のブランドパンフレットまで、幅広い制作実績を誇っています。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img05.webp" alt="戦略的視点で訴求力の高いデザインのカタログ製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img06.webp" alt="戦略的視点で訴求力の高いデザインのカタログ製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <div class="btn-list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                                <span class="btn__text">デジタルについて</span>
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
                                <span class="btn__text">製本について</span>
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
                <section class="component-box-item booklet" id="booklet">
                    <h2 class="ttl-01">冊子</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            ガイドブック、ハンドブック、テキスト、報告書、年報、社史、郷土史、自分史等様々な仕様・用途の冊子の制作を承ります。折りページ、ミシン入りページなどを含む冊子や、ページ数・サイズ・加工など細やかな対応が可能です。<br>
                            また、冊子の種類によってはWebBookへの展開もご提案させていただいております。動画や画像スライドの配置、リンクの貼込など、紙面の表現をさらに広げたWebBookは、オフラインとオンラインの相互利用による訴求力のUPが期待できます。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img07.webp" alt="webbookを使用しオフラインオンライン相互利用で訴求力の高い冊子の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img08.webp" alt="webbookを使用しオフラインオンライン相互利用で訴求力の高い冊子の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <div class="btn-list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                                <span class="btn__text">加工について</span>
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
                                <span class="btn__text">製本について</span>
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
                <section class="component-box-item slip" id="slip">
                    <h2 class="ttl-01">伝票・帳票</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            請求書や納品書など様々な用途に使用される多種多様の伝票・帳票類の制作もお任せください。連続帳票、単票（カット紙）、OCR伝票、ラベル・タックフォーム、圧着はがきなど、数々の制作実績とノウハウがあります。裏カーボン加工や減感加工、ミシン折りやパンチ処理など、印刷と同時にオプション加工をほどこすことが可能です。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img09.webp" alt="多種多様の伝票・帳票の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img10.webp" alt="多種多様の伝票・帳票の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <div class="btn-list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                                <span class="btn__text">パンフレットの<br class="br-1050">ダウンロードはこちら</span>
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
                                <span class="btn__text">WebBookで<br class="br-1050">パンフレットを見る</span>
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
                <section class="component-box-item type-products" id="envelope">
                    <h2 class="ttl-01">名刺・封筒・はがき・挨拶状</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            名刺はデザインや紙質のご提案が可能です。デザイン統一、リニューアルなどでの複数名分一括発注もお任せください。封筒は、定型封筒から別注封筒までお取り扱いしております。各種はがき、挨拶状なども短納期で制作が可能。多数実績のある当社におまかせいただければ、文章校正も安心です。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img11.webp" alt="名刺・封筒・はがき・挨拶状の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img12.webp" alt="名刺・封筒・はがき・挨拶状の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <a href="<?php echo esc_url(home_url('/works')); ?>" class="btn inview">
                            <span class="btn__text">製作事例はこちら</span>
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
                <section class="component-box-item ricebag" id="ricebag">
                    <h2 class="ttl-01">米袋</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img13.webp" alt="米袋の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img14.webp" alt="米袋の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                            <span class="btn__text">こちら</span>
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
                <section class="component-box-item promotion" id="promotion">
                    <h2 class="ttl-01">販促</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                        </p>
                    </div>
                    <ul class="img-list img-list--2column-sp1 mt32--sp24">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img15.webp" alt="販促品の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products-img16.webp" alt="販促品の製作のイメージ画像" width="368" height="220" loading="lazy"></li>
                    </ul>
                    <div class="component-box-btn mt32--sp40">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                            <span class="btn__text">こちら</span>
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

            </div><!-- / -->
        </div>
        <?php get_template_part('template-parts/guide'); ?>

        <div class="component-box section">

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
                    <a href="<?php echo esc_url(home_url('/service/printing')); ?>" class="btn-02">
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
                    <a href="<?php echo esc_url(home_url('/service/printing/processing')); ?>" class="btn-02">
                        <span class="btn__text">加工</span>
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
                    <a href="<?php echo esc_url(home_url('/service/printing/booklet')); ?>" class="btn-02">
                        <span class="btn__text btn__text--newspaper">製本</span>
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
    <?php get_template_part('template-parts/footer'); ?>
</div>