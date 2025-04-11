<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 印刷ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'PROMOTION',
    'title_jp' => 'プロモーション',
]); ?>
<div class="page-wrapper">
    <div class=" section section__col">
        <div class="page-printing__side section__side">
            <ul id="sidemenu">
                <li><a data-slug="shop" href="<?php echo home_url('/service/promotion/#shop'); ?>">店頭プロモーション</a></li>
                <li><a data-slug="recruit" href="<?php echo home_url('/service/promotion/#recruit'); ?>">採用プロモーション</a></li>
                <li><a data-slug="company" href="<?php echo home_url('/service/promotion/#company'); ?>">企業プロモーション</a></li>
                <li><a data-slug="city" href="<?php echo home_url('/service/promotion/#city'); ?>">シティプロモーション</a></li>
            </ul>
        </div>
        <div class="section__main wrapper-136">
            <div class="component-box-item" id="type-printing">
                <div class="txt">
                    <p>わたしたちは、印刷業で培ったノウハウと経験を活かし、お客様の販売促進活動を効果的にサポートします。<br>情報メディアの多様化により、消費者との接点がデジタル領域へと広がる中、アナログとデジタルの双方向からのプロモーション展開により、顧客獲得までの様々なアプローチをご提案いたします。<br>アナログプロモーションとデジタルプロモーションはそれぞれメリットとデメリットがあり、双方を組み合わせて展開することで相乗効果が見込めます。</p>
                </div>
                <div class="txt mt32--sp10">
                    <p>情報メディアの多様化により、消費行動におけるデジタルの割合は急上昇していますが、アナログがゼロになることはありません。なぜなら、生活者はアナログとデジタルを縦横無尽に行き来する存在だからです。<br>このことから、プロモーション活動の場を、アナログを切り捨ててデジタルのみに移行するのは得策ありません。アナログとデジタルの融合で、成果を最大限に発揮させるプロモーションをご提案させていただきます。</p>
                </div>
                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">当社がご提供するプロモーション</h4>
                        <div class="light-blue-box-flex mt20">
                            <div class="light-blue-box-flex__item">
                                <h5 class="light-blue-box-flex__item-title">アナログツール</h5>
                                <div class="light-blue-box-flex__item-body">
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>チラシ</p>
                                        </li>
                                        <li class="txt">
                                            <p>ポスター</p>
                                        </li>
                                        <li class="txt">
                                            <p>パンフレット</p>
                                        </li>
                                        <li class="txt">
                                            <p>カタログ</p>
                                        </li>
                                    </ul>
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>看板</p>
                                        </li>
                                        <li class="txt">
                                            <p>のぼり</p>
                                        </li>
                                        <li class="txt">
                                            <p>ノベルティ</p>
                                        </li>
                                        <li class="txt">
                                            <p>イベント など</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="light-blue-box-flex__item">
                                <h5 class="light-blue-box-flex__item-title">デジタルツール</h5>
                                <div class="light-blue-box-flex__item-body">
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>動画</p>
                                        </li>
                                        <li class="txt">
                                            <p>Webサイト</p>
                                        </li>
                                    </ul>
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>Web広告</p>
                                        </li>
                                        <li class="txt">
                                            <p>SNS など</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="component-box-item" id="shop">
                <h2 class="ttl-01">店頭プロモーション</h2>
                <div class="txt mt32--sp20">
                    <p>POP・ポスターなどの印刷物やのぼりなどはもちろん、デジタルサイネージによる動画広告まで、来店者の認知・関心を引き、購入への動機づけを果たす効果的なプロモーションをご提案します。</p>
                    <p class="mt16--sp10">スマートフォンやタブレットの普及により、商品がいつでも、どこでも、なんでも購入できる時代になりましたが、商品を実際に目で見て手に取れる実店舗での購入がなくなることはありません。<br>店頭プロモーションは、商品購入を検討する来店者に対し訴求を行うことが可能です。</p>
                </div>
                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">近江印刷がサポートできること</h4>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">店舗内印刷物</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>店頭POP / チラシ・フレイヤー / ポスター </p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">インストア動画</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>デジタルサイネージ / モニターPOP</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">PR・装飾ツール</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>のぼり / タペストリー / バナー / 横断幕 / パネル</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">キャンペーン・イベント</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>キャンペーン・イベント企画 / キャンペーン・イベントLP / SNS / オウンドメディア用画像・動画コンテンツ / 関連印刷物</p>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="img-list img-list--2column-sp1 mt32">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item01.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item02.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                </ul>
            </section>

            <section class="component-box-item" id="recruit">
                <h2 class="ttl-01">採用プロモーション</h2>
                <div class="txt mt32--sp20">
                    <p>就活サイトに掲載して終わりでは不十分。<br>いい人材の認知・関心を引き、応募への動機付けを果たす、「選ばれる」企業になるためのプロモーションをサポートします。</p>
                    <p class="mt16--sp10">採用活動は、選ぶ時代から選ばれる時代へと変化しています。求職者に正しく理解してもらい、選ばれる企業になるよう、企業は様々な情報を効果的に発信する必要があります。「何をしているのかわからない会社」では、せっかく採用をしてもミスマッチを生み出し、離職率の増加につながってしまうのです。<br>学生就活市場ではインターネット上でのコミュニケーションが主流となっていますが、紙のDMも根強い人気があり、効果も生んでいます。<br>多くの企業様の採用アイテムに携わってきた経験をもとに、効率よく成果に繋げる採用活動をお手伝いいたします。</p>
                </div>

                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">近江印刷がサポートできること</h4>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">リクルート用パンフレット</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>パンフレットカバー / 小冊子 / チラシ / 手提げ袋</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">リクルート用動画</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>先輩写真の声動画 / 企業PR動画 / 年間スライド動画 / 施設・工場見学動画</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">リクルートサイト</h5>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">採用SNS・オウンドメディアサポート</h5>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">合同展示会出展用ツール</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>タペストリー / ポスター / テーブルクロス / 椅子カバー / バナースタンド / のぼり / フロアマット / クリアファイル / ノベルティ</p>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="img-list img-list--2column-sp1 mt32">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item03.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item04.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                </ul>
            </section>

            <section class="component-box-item" id="company">
                <h2 class="ttl-01">企業プロモーション</h2>
                <div class="txt mt32--sp20">
                    <p>プロモーションツールの特性を理解し、目的に合わせて効率的かつ効果的にプロモーションをクロスメディアさせることで、印刷会社だからできる、いいとこどりの相乗効果で費用対効果の最大化が期待できます。</p>
                    <p class="mt16--sp10">「〇〇という商品なら、A社のものがいい」「●●を頼むならB社に依頼しよう」「◎◎を買うならC店だな」と、特定のカテゴリで第一想起を取りたいという想いは、どんな企業様・店舗様も持っているはずです。ユーザーから「選ばれる」存在になるためには、プロモーション活動は欠かせません。<br>企業プロモーションには様々な手法があり、トレンドは時代に合わせて次々と変化していきます。現在のトレンドはデジタル、特に動画プロモーションとオウンドメディアといえるでしょう。しかし、アナログ、つまり印刷物を使ったプロモーションはいつの時代も、根強く支持され、成果を上げています。<br>トレンドであるデジタルプロモーションとトラディショナルであるアナログプロモーションをクロスメディアさせ、効果的に成果につなげます。</p>
                </div>

                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">近江印刷がサポートできること</h4>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">営業用印刷物</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>会社案内パンフレット / ブランドブック / 商品案内リーフレット / カタログ</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">広報用印刷物</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>社外報 / 広報誌</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">ブランディング</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>企業ブランディング / ロゴマーク作成 / キャラクター作成 / ノベルティ・グッズ作成</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">Webサイト</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>コーポレートサイト / リクルートサイト / ランディングページ</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">動画</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>企業PR動画 / 商品紹介動画 / リクルート動画</p>
                            </div>
                        </div>
                        <div class="col col-gap4 mt12">
                            <h5 class="ttl-02 ttl-02--fsz16 ttl-02--triangle">広告</h5>
                            <div class="txt txt--fw500 txt--blue pl21--sp20">
                                <p>動画広告 / 検索広告</p>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="img-list img-list--2column-sp1 mt32">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item05.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item06.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                </ul>
            </section>

            <section class="component-box-item" id="city">
                <h2 class="ttl-01">シティープロモーション</h2>
                <div class="txt mt32--sp20">
                    <p>観光マップやカタログなどの実績とノウハウを活かして、動画や360°VRなどのデジタルコンテンツを融合させた革新的なシティプロモーションをご提案いたします。</p>
                    <p class="mt16--sp10">少子高齢化や地域関係の希薄化、人口減少や失業率の増加など、さまざまな社会的課題を解決するべく、近年注目を集めているのがシティプロモーションです。地域イメージの向上、移住者・定住者の増加、地域住民の愛着・帰属意識の形成などを目的として、各自治体は様々な戦略を講じ、施策を実施されています。<br>シティプロモーションを実施する上で、欠かすことができない重要な活動の一つが「情報発信」です。どのような戦略においても、自治体内外のターゲットに対し、効果的に魅力を伝えられるかどうかが、成果に大きく影響します。</p>
                </div>

                <div class="light-blue-box-wrap mt32">
                    <div class="light-blue-box">
                        <h4 class="ttl-04 ttl-04--fsz18">当社がご提供するプロモーション</h4>
                        <div class="light-blue-box-flex mt20">
                            <div class="light-blue-box-flex__item">
                                <h5 class="light-blue-box-flex__item-title">アナログツール</h5>
                                <div class="light-blue-box-flex__item-body">
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>パンフレット</p>
                                        </li>
                                        <li class="txt">
                                            <p>ポスター</p>
                                        </li>
                                        <li class="txt">
                                            <p>チラシ</p>
                                        </li>
                                        <li class="txt">
                                            <p>のぼり</p>
                                        </li>
                                    </ul>
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>観光MAP</p>
                                        </li>
                                        <li class="txt">
                                            <p>ノベルティ</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="light-blue-box-flex__item">
                                <h5 class="light-blue-box-flex__item-title">デジタルツール</h5>
                                <div class="light-blue-box-flex__item-body gap20--sp16">
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>Webサイト</p>
                                        </li>
                                        <li class="txt">
                                            <p>イベントサイト</p>
                                        </li>
                                        <li class="txt">
                                            <p>WebBook</p>
                                        </li>
                                        <li class="txt">
                                            <p>SNS</p>
                                        </li>
                                    </ul>
                                    <ul class="mt8 disc-list">
                                        <li class="txt">
                                            <p>プロモーション動画</p>
                                        </li>
                                        <li class="txt">
                                            <p>動画広告</p>
                                        </li>
                                        <li class="txt">
                                            <p>SNS広告</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="img-list img-list--2column-sp1 mt32">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item07.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/promotion/promotion-item08.png" alt="広報誌から事務用品印刷物まで幅広く対応" width="368" height="220" loading="lazy"></li>
                </ul>
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