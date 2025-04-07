<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 印刷ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'DEGITAL',
    'title_jp' => 'デジタル',
]); ?>
<div class="page-wrapper">
    <div class=" section section__col">
        <div class="page-printing__side section__side">
            <ul id="sidemenu">
                <li><a data-slug="omito" href="<?php echo home_url('/service/degital/#omito'); ?>">OMITO</a></li>
                <li><a data-slug="movie" href="<?php echo home_url('/service/degital/#movie'); ?>">動画</a></li>
                <li><a data-slug="web-site" href="<?php echo home_url('/service/degital/#web-site'); ?>">Webサイト</a></li>
                <li><a data-slug="web-ad" href="<?php echo home_url('/service/degital/#web-ad'); ?>">Web広告</a></li>
                <li><a data-slug="web-book" href="<?php echo home_url('/service/degital/#web-book'); ?>">WebBook</a></li>
            </ul>
        </div>
        <div class="section__main wrapper-136">
            <div class="component-box-item" id="type-printing">
                <div class="txt">
                    <p>デジタル技術で現行のビジネスを変革していく「DX（デジタルトランスフォーメーション）」が加速するなか、デジタルコンテンツは、商品・サービスの販売促進ツールとして、事業を発展させていくための重要な手段のひとつになっています。<br>またそのなかで、よりインパクトのある情報発信や、複雑な情報をわかりやすく伝えるための方法として、従来の静止画コンテンツはもとより、動画コンテンツがますます注目を集めています。</p>
                </div>
            </div>

            <section class="component-box-item" id="omito">
                <h2 class="ttl-01 ">OMITO</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">印刷だけじゃない！をテーマに、<br class="mobile">デジタルコンテンツに特化した事業を立ち上げました</h3>
                <div class="omito-logo pt24pl21">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/omito-logo.png" alt="OMITO" width="199" height="54" loading="lazy">
                </div>
                <div class="txt-01">
                    <p>デジタル領域について、詳しく知りたい方はOMITOをチェック！</p>
                </div>
                <div class="component-box-btn pt24pl21">
                    <a href="<?php echo esc_url(home_url('/omito')); ?>" class="btn inview">
                        <span class="btn__text">OMITO</span>
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
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">OMITOの各サービス</h3>
                <div class="degital-btn-list">
                    <a href="#" class="btn-02 btn-02--rikueru">
                        <div class="btn__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/rikueru.png" alt="リクエル" width="113" height="113" loading="lazy">
                        </div>
                        <div class="btn__body">
                            <span class="btn__text">リクエル</span>
                            <span class="btn__description">求職者目線<br>採用特化サイトの制作</span>
                        </div>
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
                    <a href="#" class="btn-02 btn-02--douga">
                        <div class="btn__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/douga.png" alt="ドゥーガ" width="113" height="113" loading="lazy">
                        </div>
                        <div class="btn__body">
                            <span class="btn__text">ドゥーガ</span>
                            <span class="btn__description">動画広告制作<br>プロモーション動画</span>
                        </div>
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
                    <a href="#" class="btn-02 btn-02--sukketosan">
                        <div class="btn__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/sukketosan.png" alt="助っ人さん" width="113" height="113" loading="lazy">
                        </div>
                        <div class="btn__body">
                            <span class="btn__text">助っ人さん</span>
                            <span class="btn__description">貴社の即戦力になります！<br>Web戦略支援サービス</span>
                        </div>
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
            </section>

            <section class="component-box-item" id="movie">
                <h2 class="ttl-01">動画</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">動画の活用で、もっと伝わる</h3>
                <div class="txt-01">
                    <p>広告動画作成だけではなく、様々なプロモーションや企業活動の課題に対して、動画を軸としたソリューションを提案いたします。印刷会社だからこそできる紙×動画のクロスメディア戦略は新しい価値を創造します。</p>
                </div>
                <div class="txt-01">
                    <p>デジタルデバイスの普及やインターネット環境の整備、SNSや動画投稿サイトなどの利用拡大によって、動画コンテンツは私たちにとってより身近なものとなりました。<br>1分間の動画の情報量は、一般的なWebサイトにおける3600ページ分（約180万文字）といわれています。動画コンテンツを活用したプロモーション活動を行うことで、紙媒体では伝えきれなかった情報や商品・サービスの魅力を、ターゲットに届けることができます。</p>
                </div>
                <div class="light-blue-box-wrap pt24pl21">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">動画の活用シチュエーション</h4>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">社内向け動画</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>作業マニュアル動画 / 社員研修動画 / 営業プレゼン資料用動画</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">社外向け動画</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>会社案内・企業PR動画 / 施設・店舗案内動画 / 商品・サービス紹介動画 / 商品取扱説明動画 / リクルート用動画 / イベントティザー動画</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">その他</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>レシピ動画 / 会議・イベントのダイジェスト動画</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">動画を活用したクロスメディアプロモーションのご提案</h3>
                <div class="txt-01">
                    <p>印刷会社である当社が自信をもってお勧めする動画の活用方法が、紙媒体と動画のクロスメディアプロモーションです。従来の紙メディアは、文字と静止画による表現が主となり、伝えられる情報には限りがありました。<br>しかしそこにQRコードなどで動画を融合させることで、もっとたくさんの情報を読者に伝えることが可能になります。</p>
                </div>
                <div class="txt-01">
                    <p>広報誌、チラシ、カタログなどの紙メディアは保存性に優れ、デジタルコンテンツに比べてユーザーに「手元に置いてもらいやすい」「後から見返してもらいやすい」という特性があります。<br>この優れた保存性に、動画の圧倒的な情報量・表現力を掛け合わせることで、それぞれ単体での活用よりもさらに魅力的かつ効果的なプロモーションになるのです。</p>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">動画の制作実績</h3>

                <ul class="img-list img-list--2column-sp1 mt32--sp24">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/degital-01.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/degital-02.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                </ul>
                <div class="component-box-btn mt32--sp40">
                    <a href="<?php echo esc_url(home_url('/works')); ?>" class="btn inview">
                        <span class="btn__text">制作実績を見る</span>
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

            <section class="component-box-item" id="web-site">
                <h2 class="ttl-01">Webサイト</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">印刷会社だからできるクロスメディアプロモーションとWebサイト作成</h3>
                <div class="txt-01">
                    <p>クロスメディアプロモーションの核となるWeb戦略は、企業とお客様の接点をデザインする上で最も重要になり、紙媒体との連動性も求められます。印刷物と同時に作成することでコストダウンや打ち合わせの時間短縮が見込めます。</p>
                </div>
                <div class="txt-01">
                    <p>情報メディアの多様化により、消費行動におけるデジタルの割合は急上昇しているので、デジタルプロモーションに力を入れることはもちろん重要です。<br>しかし、アナログプロモーションも、ゼロにするにはもったいない高い効果が見込めます。このことから、当社はデジタルとアナログを融合させたクロスメディアプロモーションの戦略展開をご提案しております。</p>
                </div>
                <div class="txt-01">
                    <p>当社ではアナログプロモーションツールである印刷物と、デジタルプロモーションツールであるデジタルコンテンツを自社内で完結できます。<br>原稿や写真、デザインデータなどを共通で活用することで、様々なメリットをご提供することができるのです。</p>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">Webサイト作成のメリット</h3>
                <div class="txt-01">
                    <ul class="disc-list">
                        <li>制作会社一本化によるコスト・工数の削減</li>
                        <li>制作会社一本化によるご担当者さまのご負担削減</li>
                        <li>多種多様のツールのデザインの統一化</li>
                        <li>お客さまのクロスメディアプロモーションを総合的にサポート</li>
                    </ul>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">作って終わりはもったいない！Webサイトは育てるもの！</h3>
                <div class="txt-01">
                    <p>情報メディアの多様化により、デジタルでのプロモーション活動が重要度を増しています。<br>企業Webサイトは、デジタルプロモーション活動の核となる重要な宣伝媒体。常に分析・改善・更新し、最新・最善の状態を保つことが、ユーザーからの信頼度向上には不可欠です。</p>
                </div>
                <div class="txt-01">
                    <p>お客様にWebサイトに関するご提案をさせていただくと、大多数の方が、「ホームページはもう作ってあるから…」というご返答をされます。<br>しかし、Web上にページを持っているだけの状態だけでは不十分なのです。</p>
                </div>
                <div class="txt-01">
                    <p>当社は、Webサイトの新規制作だけでなく、現在お持ちのWebサイトの有効活用のご提案から、集客につながる効果的なサイト構築のご提案まで、Webサイトに関するあらゆる課題をサポートさせていただきます。</p>
                </div>


                <div class="light-blue-box-wrap pt24pl21">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">ご提供サービス</h4>
                        <div class="txt txt--blue txt--fw500 mt12">
                            <p>Webサイト製作 / CMS構築・カスタマイズ / アクセス解析 / 企画設計・マーケティング / サイト運営 / LP・バナー製作</p>
                        </div>
                    </div>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">Webサイトの制作実績</h3>

                <ul class="img-list img-list--2column-sp1 mt32--sp24">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/degital-03.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/degital-04.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                </ul>
                <div class="component-box-btn mt32--sp40">
                    <a href="<?php echo esc_url(home_url('/works')); ?>" class="btn inview">
                        <span class="btn__text">制作実績を見る</span>
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

            <section class="component-box-item" id="web-ad">
                <h2 class="ttl-01">Web広告</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">インターネットを通じて、効果的・効率的に情報を届ける</h3>
                <div class="txt-01">
                    <p>インターネットが普及した現代において、Web広告はビジネスの成長に欠かせないマーケティングツールとなっています。 <br>従来のテレビCMや新聞広告などの広告手法とは異なり、Web広告はインターネットを通じてより的確にターゲット層へアプローチすることが可能です。</p>
                </div>
                <div class="txt-01">
                    <p>「とりあえず広告を配信してみたけど、結果がわからない･･･」「広告媒体がありすぎて、何を選んだらいいかわからない･･･」といった、広告の運用についてお困りの方はもちろん、「ブランド認知度を向上させたい！」「お客様との接点をもっと増やしたい！」など、ビジネス目標に合わせて最適なWeb広告戦略をご提案し、ビジネス目標達成をサポートいたします。</p>
                </div>

                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">サービスの特徴</h3>
                <div class="txt-01">
                    <p>SNS広告、 ディスプレイ広告、検索連動型広告など、様々なWeb広告手法を駆使し、最適な戦略をご提案いたします。また、 それぞれの広告媒体の特徴やユーザー属性に合わせて、年齢、性別、興味関心、地域など詳細なターゲティングを設定し、お客様の商品・サービスに関心の高いユーザーへピンポイントに訴求します。</p>
                </div>
                <div class="txt-01">
                    <p>広告を配信して終了ではなく、広告の効果を分析し、配信した結果をレポート形式でご説明いたします。継続的な改善を行うことで、コストパフォーマンスを最大化することができます。<br>お客様のビジネスの成功を、Web広告で加速させませんか？</p>
                </div>

                <div class="light-blue-box-wrap pt24pl21">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">ご提供サービス</h4>
                        <div class="txt txt--blue txt--fw500 mt12">
                            <p>YouTube広告/LINE広告/Meta広告（Instagram・Facebook）/ディスプレイ広告（Google・Yahoo!）/検索連動型広告（Google・Yahoo!）</p>
                        </div>
                    </div>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">Web広告の制作実績</h3>

                <ul class="img-list img-list--2column-sp1 mt32--sp24">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/degital-05.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/degital/degital-06.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                </ul>
                <div class="component-box-btn mt32--sp40">
                    <a href="<?php echo esc_url(home_url('/works')); ?>" class="btn inview">
                        <span class="btn__text">制作実績を見る</span>
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

            <section class="component-box-item" id="web-book">
                <h2 class="ttl-01">WebBook</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">紙とデジタルの相乗効果で訴求力UP!!</h3>
                <div class="txt-01">
                    <p>動画、スライド画像、音声も再生可能。リンク機能で外部サイトへの動線を作ることで、閲覧者をECサイトや公式ホームページなどにスムーズに誘導することができ、商品の購入や問合せ率向上などのKPI達成を強力にサポートします。</p>
                </div>

                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">使い方・作り方を動画で見る</h3>
                <div class="img-list pt16--pt20 pl21--sp20">
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="http://omi.local/wp-content/themes/omi/assets/images/degital/degital-07.png" alt="画像の説明3">
                        </div>
                        <div class="txt mt10">
                            <p>基本機能の使い方と、オプション機能のご紹介</p>
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="http://omi.local/wp-content/themes/omi/assets/images/degital/degital-08.png" alt="画像の説明3">
                        </div>
                        <div class="txt mt10">
                            <p>WebBook用データの作り方などをご紹介</p>
                        </div>
                    </div>
                </div>

                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">WebBookの制作実績</h3>
                <div class="img-list pt16--pt20 pl21--sp20">
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="http://omi.local/wp-content/themes/omi/assets/images/degital/degital-09.png" alt="画像の説明3">
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="http://omi.local/wp-content/themes/omi/assets/images/degital/degital-10.png" alt="画像の説明3">
                        </div>
                    </div>
                </div>

                <div class="component-box-btn mt32--sp40 pl21--sp20">
                    <a href="<?php echo esc_url(home_url('/works')); ?>" class="btn inview">
                        <span class="btn__text">制作実績を見る</span>
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

<?php get_template_part('template-parts/footer'); ?>