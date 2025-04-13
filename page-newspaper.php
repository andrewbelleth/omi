<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 彦根経済新聞ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'NEWSPAPER',
    'title_jp' => '彦根経済新聞',
]); ?>
<div class="page-wrapper">
    <div class=" section section__col">
        <div class="page-printing__side section__side">
            <ul id="sidemenu">
                <li><a data-slug="minpr" href="<?php echo home_url('/service/newspaper/#minpr'); ?>">みん経に加盟</a></li>
                <li><a data-slug="interview" href="<?php echo home_url('/service/newspaper/#interview'); ?>">編集部・取材体制に<br class="mobile">つ<br class="desktop">いて</a></li>
                <li><a data-slug="newspaper" href="<?php echo home_url('/service/newspaper/#newspaper'); ?>">彦根経済新聞<br class="mobile">について</a></li>
                <li><a data-slug="access" href="<?php echo home_url('/service/newspaper/#access'); ?>">アクセス数</a></li>
                <li><a data-slug="pr" href="<?php echo home_url('/service/newspaper/#pr'); ?>">彦根経済新聞が<br class="mobile">取材・<br class="desktop">制作する記事広告</a></li>
                <li><a data-slug="support" href="<?php echo home_url('/service/newspaper/#support'); ?>">彦経応援サポーター<br class="mobile">の<br class="desktop">ご案内</a></li>
                <li><a data-slug="info" href="<?php echo home_url('/service/newspaper/#info'); ?>">編集部への情報提供</a></li>
            </ul>
        </div>
        <div class="section__main wrapper-136">
            <div class="component-box-item">
                <div class="txt">
                    <p>彦根経済新聞は2022年7月にサービスを開始した広域彦根圏(彦根市・犬上郡・愛知郡)のビジネス・イベント・カルチャーなどを配信するインターネット情報サービスです。</p>
                </div>
            </div>

            <section class="component-box-item" id="minpr">
                <h2 class="ttl-01">｢みんなの経済新聞ネットワーク<br class="mobile">(みん経)｣に加盟､<br class="desktop">国内外145地域と共に配信中</h2>
                <div class="txt mt32--sp20">
                    <p>2000年にスタートした「シブヤ経済新聞」を本部に、国内外145地域を超える編集部で構成される「みんなの経済新聞ネットワーク（みん経） 」。月に1600本以上のニュースを配信、月間で約2300万PVを誇ります。</p>
                </div>
                <div class="img-wrapper mt32--sp24">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-item01.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy">
                </div>

                <div class="info-list mt48--sp40">
                    <div class="info-item">
                        <h3 class="info-heading">媒体名</h3>
                        <p class="info-content">彦根経済新聞（ひこけい）</p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading">URL</h3>
                        <p class="info-content"><a href="https://hikone.keizai.biz/" target="_blank" rel="noopener noreferrer">https://hikone.keizai.biz/</a></p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading">編集部所在地</h3>
                        <p class="info-content">〒529-1302<br>滋賀県愛知郡愛荘町川原771-1<br>近江印刷株式会社 内<br>彦根経済新聞 編集部<br>TEL 0749-42-8400 / FAX 0749-42-6700<br><a href="mailto:info@hikone.keizai.biz">info@hikone.keizai.biz</a></p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading">開設</h3>
                        <p class="info-content">2022年7月</p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading">対象読者</h3>
                        <p class="info-content">広域彦根圏(彦根市・犬上郡・愛知郡)のビジネス・イベント・カルチャーに興味のある方</p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading">SNS</h3>
                        <p class="info-content"><a href="https://www.facebook.com/hikonekeizai/" target="_blank" rel="noopener noreferrer">Facebook</a>　<a href="https://www.instagram.com/hikone_keizai/" target="_blank" rel="noopener noreferrer">Instagram</a>　<a href="https://x.com/hikone_keizai" target="_blank" rel="noopener noreferrer">X</a></p>
                    </div>
                </div>
            </section>

            <section class="component-box-item" id="interview">
                <h2 class="ttl-01">編集部・取材体制について</h2>
                <div class="txt mt32--sp20">
                    <p>市内在住のライター3名、フォトグラファー1名を含む8名体制の編集部で、日々、彦根エリアの採れたてニュースを発信しています。</p>
                </div>
                <div class="img-wrapper mt32--sp20">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-item02.png" alt="編集部・取材体制について" width="368" height="220" loading="lazy">
                </div>
            </section>

            <section class="component-box-item" id="newspaper">
                <h2 class="ttl-01">彦根経済新聞について</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">｢まちの記録係｣として、彦根エリアの<br class="mobile">ハッピーニュースを<br class="desktop">週3本のペースで配信</h3>
                <div class="txt-01">
                    <p>私たちは「まちの記録係」として、ニュースの大小に関わらず、地域にとって有用な情報を取材し、ウェブを通じて「まちのニュース（＝速報） 」「まちの記録（＝アーカイブ） 」を1週間に3本、年間約150本以上の記事を配信しています。</p>
                </div>

                <div class="light-blue-box-wrap pt24 pl21--sp20">
                    <div class="light-blue-box js-count">
                        <div class="newspaper-box">
                            <h4 class="newspaper-box__title">彦根経済新聞<br>累計記事配信本数</h4>
                            <p class="newspaper-box__num">
                                <span class="newspaper-box__num-num js-count-num" data-num="379">0</span>
                                <span class="newspaper-box__num-unit">本</span>
                            </p>
                            <div class="txt">
                                <p>（2024年11月30日時点）</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">彦根経済新聞には、どんな記事が配信されているの？</h3>
                <div class="txt-01">
                    <p>広域彦根圏（彦根市・犬上郡・愛知郡）を中心に、イベントや展覧会、ライブなどのカルチャー情報のほか、ニューオープンのお店や、コロナ禍における地元企業・ソーシャルビジネスの新しい取り組み、ネットでバズっている彦根ネタ、さらに地元若者たちの間で今話題になっている流行・トレンドまで、私たちは「まちのハッピーニュース」に特化して情報発信しています。<br>事件・事故・政治は発信せず、「街ネタ」にこだわった独自の編集スタイルは、各地域の読者から大きな支持を得ています。</p>
                </div>

                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">マルチチャンネルでコンテンツ提供</h3>

                <div class="txt-01">
                    <p>配信された記事はすべて「Yahoo!ニュース」（月間150億PV)をはじめ、スマートニュース、dmenu、gooニュース、LINEニュースにも転載。<br>彦根の記事が、Yahoo!のトップを飾ることも。SNSによる記事拡散を含め、マルチチャンネルで地域情報コンテンツを提供・発信しています。</p>
                </div>
                <div class="img-wrapper pt24 pl21--sp20">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/multi-channel-sp.png" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/multi-channel-pc.png" alt="マルチチャンネルでコンテンツ提供" width="368" height="220" loading="lazy">
                    </picture>
                </div>

                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">彦根の話題がYahoo!にも掲載！</h3>
                <div class="img-wrapper pt16--sp12 pl21--sp20">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-item03.png" alt="彦根の話題がYahoo!にも掲載！" width="368" height="220" loading="lazy">
                </div>
            </section>

            <section class="component-box-item" id="access">
                <h2 class="ttl-01">彦根経済新聞のアクセス数は？</h2>

                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box pi32--sp24 pb14--sp16">
                        <div class="light-blue-box-flex newspaper-access-box-col">
                            <div class="light-blue-box-flex__item newspaper-access-box-col__item">
                                <div class="newspaper-access-box-col__item-title newspaper-access-box-col__item-title--bg-blue">月間PC（デスクトップ）ページビュー数</div>
                                <div class="newspaper-access-box-col__item-num pt16--sp12">
                                    <span class="newspaper-access-box-col__item-num-num w-224 js-count-num" data-num="13000">10000</span>
                                    <span class="newspaper-access-box-col__item-num-unit">PV/月</span>
                                </div>
                            </div>
                            <div class="light-blue-box-flex__item newspaper-access-box-col__item">
                                <div class="newspaper-access-box-col__item-title">月間PCユニークユーザー数</div>
                                <div class="newspaper-access-box-col__item-num pt16--sp12">
                                    <span class="newspaper-access-box-col__item-num-num w-194 js-count-num" data-num="3000">0</span>
                                    <span class="newspaper-access-box-col__item-num-unit">UU/月</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box pi32--sp24 pb14--sp16">
                        <div class="light-blue-box-flex newspaper-access-box-col">
                            <div class="light-blue-box-flex__item newspaper-access-box-col__item js-count">
                                <div class="newspaper-access-box-col__item-title newspaper-access-box-col__item-title--bg-blue">月間SP（スマホ）ページビュー数</div>
                                <div class="newspaper-access-box-col__item-num pt16--sp12">
                                    <span class="newspaper-access-box-col__item-num-num w-269 js-count-num" data-num="102000">0</span>
                                    <span class="newspaper-access-box-col__item-num-unit">PV/月</span>
                                </div>
                            </div>
                            <div class="light-blue-box-flex__item newspaper-access-box-col__item">
                                <div class="newspaper-access-box-col__item-title">月間スマホユニークユーザー数</div>
                                <div class="newspaper-access-box-col__item-num pt16--sp12">
                                    <span class="newspaper-access-box-col__item-num-num w-224 js-count-num" data-num="31000">0</span>
                                    <span class="newspaper-access-box-col__item-num-unit">UU/月</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">彦根経済新聞はどんな人が見ている？</h3>
                <div class="txt txt--small pt8--sp10 pl21--sp20">
                    <p>※2024年3月～2024年8月データ</p>
                </div>

                <div class="img-wrapper spmt32 sppl20">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-graph01-sp.png" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-graph01-pc.png" alt="マルチチャンネルでコンテンツ提供" width="368" height="220" loading="lazy">
                    </picture>
                </div>
                <div class="img-wrapper spmt48 sppl20">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-graph02-sp.png" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-graph02-pc.png" alt="マルチチャンネルでコンテンツ提供" width="368" height="220" loading="lazy">
                    </picture>
                </div>
            </section>

            <section class="component-box-item" id="pr">
                <h2 class="ttl-01">彦根経済新聞が取材・制作する記事広告</h2>
                <p class="img-wrapper w245--sp238 mt32">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/minpr.png" alt="みん経PRセンター" width="245" height="24" loading="lazy">
                </p>
                <div class="txt mt24--sp20">
                    <p>各地域に拠点がある編集部ならではのローカル目線の取材で、エリアの地域性に特化したトピックを織り込みながら制作されます。</p>
                </div>
                <div class="img-wrapper mt16">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-item04.png" alt="" width="760" height="350" loading="lazy">
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">各ページから記事広告に誘導</h3>
                <div class="txt-01">
                    <p>企画特集枠（右カラム上部）が固定掲載。<br>さらにニュース記事タイムライン中のいずれかに必ず掲載され、<br class="desktop">記事広告への誘導を図ります。スマホからも同様に誘導。</p>
                </div>
                <div class="img-wrapper mt16 pl21--sp20">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-item05-sp.png" media="(max-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-item05.png" alt="" width="739" height="340" loading="lazy">
                    </picture>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">ローカルトピックの合間に、自然と目に留まる掲載方式</h3>
                <div class="txt-01">
                    <p>ユーザーが日々チェックしているみん経媒体のタイムライン（スマートフォン）や企画特集枠（PC）から記事広告ページへと誘導されるので、違和感なく認知してもらう事ができます。</p>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">掲載記事広告はLP（ランディングページ）として内外のメディアで活用可能</h3>
                <div class="txt-01">
                    <p>FacebookなどSNSでの投稿シェアや、みんなの経済新聞ネットワーク、外部広告ネットワーク（有料）を活用する事で、掲載エリア以外のみん経ユーザーへも広くPRすることが可能です。</p>
                </div>
                <div class="info-list mt48--sp40">
                    <div class="info-item">
                        <h3 class="info-heading minw108--spauto">掲載期間</h3>
                        <p class="info-content">1ヶ月間（開始日は任意）<br><span class="info-content--small">※長期掲載の場合は2ヶ月まで</span></p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading minw108--spauto ltsp0--sp10">記事広告ページ</h3>
                        <div class="info-content">
                            <ul class="disc-list">
                                <li>構成 ： 1ページ</li>
                                <li>本文 ： 3000文字以内</li>
                                <li>画像 ： 10枚以内</li>
                            </ul>
                        </div>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading pt10--sp0 minw108--spauto">掲載料金</h3>
                        <p class="info-content">
                            <span class="fsz18 fw700 colorBlue">掲載料 <span class="fsz24">15</span>万円/月</span></span><br>
                            <span class="fsz13--sp12">※取材内容・デザイン等の条件により、別途料金が掛かる場合もあります。<br>※写真撮影は記者によるものとし、別途プロカメラマンの手配が必要な場合は別途費用が必要です。<br>※2ヶ月目以降は要相談。</span>
                        </p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading minw108--spauto">誘導枠</h3>
                        <p class="info-content">記事広告を掲載している経済新聞の全ページに設置（PC/スマートフォン）</p>
                    </div>
                    <div class="info-item">
                        <h3 class="info-heading minw108--spauto">申込締切</h3>
                        <p class="info-content">14営業日前</p>
                    </div>
                </div>


            </section>

            <section class="component-box-item" id="support">
                <h2 class="ttl-01">彦経応援サポーターのご案内</h2>
                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box js-count">
                        <div class="newspaper-support-box">
                            <h3 class="fsz18--sp16 fw700">地域のハッピーニュースをサポートする<br class="mobile">「地域応援企業」<br class="desktop">貴社のブランディング・ファンづくりに貢献いたします!</h3>
                            <p class="newspaper-support-box-num mt24--sp16">
                                <span class="newspaper-support-box-num-year">年間</span>
                                <span class="newspaper-support-box-num-num js-count-num" data-num="120000">0</span>
                                <span class="newspaper-support-box-num-unit">円（税込）</span>
                            </p>
                            <div class="newspaper-support-box-txt mt20--sp16">
                                <h3 class="ttl-02 ttl-02--triangle ttl-02--fsz16">サービス内容</h3>
                                <div class="newspaper-support-box-txt-col">
                                    <ul class="disc-list">
                                        <li class="fsz15--sp14">最大1/10ローテ</li>
                                        <li class="fsz15--sp14">バナー閲覧予測</li>
                                        <li class="fsz15--sp14">1月2万ビュー</li>
                                    </ul>
                                    <ul class="disc-list">
                                        <li class="fsz15--sp14">バナーサイズ300pixel × 100pixel</li>
                                        <li class="fsz15--sp14">サポーター一覧</li>
                                        <li class="fsz15--sp14">紹介文120文字</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="newspaper-support-box-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newspaper/newspaper-item06.png" alt="" width="246" height="307" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="txt mt32">
                    <ul class="disc-list">
                        <li>パートナー企業バナーを最大1/10ローテーションで表示、貴社の認知度を高めます。</li>
                        <li>彦根経済新聞サイト内に、パートナー企業様を紹介するページ（サポーター一覧）を設け、貴社の紹介（120字）と企業ロゴ、ホームページへのリンクを掲示します。</li>
                        <li>バナーデザインは、白背景にロゴマーク+ロゴタイプまでとします。</li>
                        <li>企画の性質上、同業種競合調整は行いません。</li>
                        <li>記事の掲載（記事広告を除く）で、パートナー企業様が優遇される事はございません。</li>
                    </ul>
                </div>
                <div class="component-box-btn mt32">
                    <a href="<?php echo esc_url(home_url('/service/printing/products')); ?>" class="btn inview">
                        <span class="btn__text">お申し込みはこちら</span>
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

            <section class="component-box-item" id="info">
                <h2 class="ttl-01">編集部への情報提供</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32">プレスリリースの送付をご希望の場合は、こちらからご連絡ください</h3>
                <div class="component-box-btn mt24 pl21--sp0">
                    <a href="<?php echo esc_url(home_url('/service/printing/products')); ?>" class="btn inview">
                        <span class="btn__text">情報・プレスリリース</span>
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
                <div class="txt mt32 pl21--sp20">
                    <p>彦根エリアの方からの情報提供も大歓迎です。<br>公式SNSでも情報提供を受け付けていますので、お気軽にご連絡ください。</p>
                </div>
                <div class="component-box-btn component-box-btn--col3 mt24 pl21--sp0">
                    <a href="<?php echo esc_url(home_url('/service/printing/products')); ?>" class="btn btn--onlyspanimation inview">
                        <span class="btn__text">公式Facebook</span>
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
                    <a href="<?php echo esc_url(home_url('/service/printing/products')); ?>" class="btn btn--onlyspanimation inview">
                        <span class="btn__text">公式Instagram</span>
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
                    <a href="<?php echo esc_url(home_url('/service/printing/products')); ?>" class="btn btn--onlyspanimation inview">
                        <span class="btn__text">公式X</span>
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
                <a href="<?php echo esc_url(home_url('/service/degital')); ?>" class="btn-02">
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
                <a href="<?php echo esc_url(home_url('/service/newspaper')); ?>" class="btn-02">
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
                <a href="<?php echo esc_url(home_url('/service/branding')); ?>" class="btn-02">
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
                <a href="<?php echo esc_url(home_url('/service/promotion')); ?>" class="btn-02">
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

<?php get_template_part('template-parts/footer'); ?>