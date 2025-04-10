<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: ファシリティページ
*/
?>

<?php get_template_part('template-parts/header'); ?>

<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'FACILITY',
    'title_jp' => '設備概要',
]); ?>
<div class="page-wrapper mt160--sp96">
    <div class=" section section__col">
        <div class="section__side">
            <ul>
                <li><a data-slug="equipment-overview" href="<?php echo home_url('/company/facility/#equipment-overview'); ?>">設備の概要</a></li>
                <li><a data-slug="general-printing" href="<?php echo home_url('/company/facility/#general-printing'); ?>">一般印刷関連</a></li>
                <li><a data-slug="business-form-printing" href="<?php echo home_url('/company/facility/#business-form-printing'); ?>">ビジネスフォーム<br class="sp-only">印刷<br class="pc-only">関連</a></li>
                <li><a data-slug="cutting-binding" href="<?php echo home_url('/company/facility/#cutting-binding'); ?>">断裁・製本関連</a></li>
                <li><a data-slug="dtp-pre-press" href="<?php echo home_url('/company/facility/#dtp-pre-press'); ?>">DTP・製版関連</a></li>
                <li><a data-slug="transportation" href="<?php echo home_url('/company/facility/#transportation'); ?>">運搬関連</a></li>
            </ul>
        </div>
        <div class="section__main wrapper-94--64">
            <section class="component-box-item equipment-overview" id="equipment-overview">
                <h2 class="ttl-03">設備の概要</h2>
                <div class="txt">
                    <p>
                        工場敷地面積 ／ 11,500㎡<br>
                        工場紙倉庫延床面積 ／ 6,700㎡<br>
                        （2021年4月現在）
                    </p>
                </div>
            </section>
            <section class="component-box-item general-printing" id="general-printing">
                <h2 class="ttl-03">一般印刷関連</h2>
                <ul class="facility-list">
                    <li>
                            MEGA Jprint 4P 400+RF（インキパイピング方式）
                        <span></span>
                    </li>
                    <li>
                        菊全判（4C/4C）+ロールフィーダ【サイズ720×1030mm】〈アキヤマ〉
                        <span>2台</span>
                    </li>
                    <li>
                        スーパーリスロンS26菊2判（4C/0）【サイズ660×480mm】〈小森〉
                        <span>1台</span>
                    </li>
                    <li>
                        スピカ26P菊2判（2C/0・1C/1C）【サイズ660×483mm】〈小森〉
                        <span>1台</span>
                    </li>
                    <li>
                        Ｂ3判（ナンバーミシン追刷装置付）【サイズ520×370mm】〈桜井〉
                        <span>1台</span>
                    </li>
                </ul>
            </section>
            <section class="component-box-item business-form-printing" id="business-form-printing">
                <h2 class="ttl-03">ビジネスフォーム印刷関連</h2>
                <ul class="facility-list">
                    <li>
                        5色機（オフ5、凸1・5/5C）ロールtoロール※2〈浮田〉【16.5吋幅】
                        <span>1台</span>
                    </li>
                    <li>
                        4色機（オフ4、凸1）※2〈浮田〉【16.5吋幅】
                        <span>1台</span>
                    </li>
                    <li>
                        2色機＋裏カーボン刷付き（オフ2、凸1）※2〈浮田〉【16.5吋幅】
                        <span>1台</span>
                    </li>
                    <li>
                        シール加工、マグネットシリンダー、カス取り装置
                        <span></span>
                    </li>
                    <li>
                        4色機＋裏カーボン刷付き（オフ4、凸1）〈浮田〉【19.5吋幅】
                        <span>1台</span>
                    </li>
                </ul>
                <div class="txt">
                    <p class="mt16--sp12 tar">
                        ◎全機種UV照射装置装着<br>
                        ※2…パンチ穴・コーナーカット装置付
                    </p>
                </div>
                <ul class="facility-list mt40--sp24">
                    <li>
                        コレーター
                        <span>2台</span>
                    </li>
                    <li>
                        No.リング
                        <span>2列</span>
                    </li>
                    <li>
                        シートカット機 〈ベーベ〉
                        <span>1台</span>
                    </li>
                    <li>
                    メールシーラー圧着加工機 〈デュプロ〉
                        <span>1台</span>
                    </li>
                    <li>
                        ダイカッター（穴明け、多重ミシン、コーナーカット等）
                        <span>2台</span>
                    </li>
                    <li>
                        紙折機
                        <span>2台</span>
                    </li>
                    <li>
                        バースター
                        <span>1台</span>
                    </li>
                    <li>
                        真空パック装置
                        <span>1式</span>
                    </li>
                </ul>
                <div class="txt tar">
                    <p class="mt16--sp12">
                        交換胴は8.5吋〜18吋まで完備、14吋までは半吋きざみを取り揃えております。
                    </p>
                </div>
            </section>
            <section class="component-box-item cutting-binding" id="cutting-binding">
                <h2 class="ttl-03">断裁・製本関連</h2>
                <ul class="facility-list">
                    <li>
                        断裁機（4/6全判【1160mm】リフター、ジョガー、スタッカー、トータルシステム付） 〈勝田〉
                        <span>1台</span>
                    </li>
                    <li>
                        断裁機（B全判）【断裁機袖リフト･ジョガー付】 〈勝田〉
                        <span>1台</span>
                    </li>
                    <li>
                        断裁機（A全判）【断裁機袖リフト付】 〈勝田〉
                        <span>1台</span>
                    </li>
                    <li>
                        断裁機（A全判） 〈勝田〉
                        <span>2台</span>
                    </li>
                    <li>
                        高速無線綴ライン（PUR･ホットメルト対応、貼込丁合、16頁菊全折機（2台）、3方断裁機一式、その他関連設備一式） 〈ホリゾン〉
                        <span>1ライン</span>
                    </li>
                    <li>
                        無線綴機（ホットメルト）（バリアブル対応4クランプ） 〈ホリゾン〉
                        <span>1台</span>
                    </li>
                    <li>
                        中綴機（ステッチライナー6000）（最少B6判） 〈ホリゾン〉（ペラ3枚丁合・筋入れ折り装置・鞍掛け中綴・三方断裁）
                        <span>2台</span>
                    </li>
                    <li>
                        多機能中綴機（化粧断装置） 〈ホリゾン〉
                        <span>1台</span>
                    </li>
                    <li>
                        紙折機（菊全判・B2判・菊半裁判・A3判） 〈ホリゾン〉
                        <span>6台</span>
                    </li>
                    <li>
                        NC穿孔機
                        <span>1台</span>
                    </li>
                    <li>
                        穴あけ機（4連式×1台・2連式×1台） 〈ウチダ〉
                        <span>2台</span>
                    </li>
                    <li>
                        頁物丁合機（10段5列100頁×1台）（10段3列60頁×1台） 〈ホリゾン〉
                        <span>2台</span>
                    </li>
                    <li>
                        複写丁合機 〈ウチダ〉
                        <span>2台</span>
                    </li>
                    <li>
                        ペーパーカウンター 〈ウチダ〉
                        <span>2台</span>
                    </li>
                    <li>
                        マーブル貼機 〈ウチダ〉
                        <span>2台</span>
                    </li>
                    <li>
                        天糊製本機
                        <span>2台</span>
                    </li>
                    <li>
                        ラミネート加工機
                        <span>3台</span>
                    </li>
                    <li>
                        PP貼機（菊全判） 〈東京ラミネックス〉
                        <span>1台</span>
                    </li>
                    <li>
                        針金綴機
                        <span>3台</span>
                    </li>
                    <li>
                        動力角丸･コーナーカット機
                        <span>1台</span>
                    </li>
                    <li>
                        厚紙筋入れ機 〈ホリゾン〉
                        <span>1台</span>
                    </li>
                    <li>
                        ミシン入れ機 〈ホリゾン〉
                        <span>1台</span>
                    </li>
                    <li>
                        ミシン入れ機（ジャンプミシン）（菊4裁・菊半裁） 〈ホリゾン〉
                        <span>2台</span>
                    </li>
                    <li>
                        スリッター筋入れ機 〈ホリゾン〉
                        <span>2台</span>
                    </li>
                    <li>
                        帯掛機
                        <span>4台</span>
                    </li>
                    <li>
                        紙揃ジョガー（菊4裁・A3）
                        <span>2台</span>
                    </li>
                    <li>
                        結束機
                        <span>4台</span>
                    </li>
                    <li>
                        ゴミ圧縮機（BF1・一般1）
                        <span>2台</span>
                    </li>
                </ul>
            </section>
            <section class="component-box-item dtp-pre-press" id="dtp-pre-press">
                <h2 class="ttl-03">DTP・製版関連</h2>
                <h3 class="ttl-05">デジタル製版関連</h3>
                <ul class="facility-list mt12">
                    <li>
                        RevoriaPressPC1120S（Model-6C） 〈富士フィルム〉
                        <span>1台</span>
                    </li>
                    <li>
                        アキュリオプレス7120（モノクロ） 〈コニカミノルタ〉
                        <span>1台</span>
                    </li>
                    <li>
                        アキュリオプレスC4070（カラー） 〈コニカミノルタ〉
                        <span>1台</span>
                    </li>
                    <li>
                        アキュリオプレス4080（カラー） 〈コニカミノルタ〉
                        <span>1台</span>
                    </li>
                    <li>
                        C5000d 〈富士ゼロックス・グラフィックサポート〉
                        <span>1台</span>
                    </li>
                </ul>
                <ul class="facility-list mt64--sp48">
                    <li>
                        Mac（OS10.8〜OS X10.15catalina）
                        <span>28台</span>
                    </li>
                    <li>
                        Windows（XP・7・10）
                        <span>2台</span>
                    </li>
                    <li>
                        Adobe（CS4〜CC2020）・Office
                        <span>1式</span>
                    </li>
                    <li>
                        フォント（モリサワパスポート）
                        <span>1式</span>
                    </li>
                    <li>
                        CTP（サーマル方式・4/6全判） 〈コダック〉
                        <span>2台</span>
                    </li>
                    <li>
                        大判カラーインクジェットプリンタ（7色・巾1,000mm・長さ45m対応）
                        <span>1台</span>
                    </li>
                    <li>
                        きりっ子 MCX-AR 〈岩崎通信機（株）〉
                        <span>1台</span>
                    </li>
                    <li>
                        レーザー加工機 〈サクライ〉
                        <span>1台</span>
                    </li>
                    <li>
                        カッティングプロッタ 〈ミマキ〉
                        <span>1台</span>
                    </li>
                </ul>
            </section>
            <section class="component-box-item transportation" id="transportation">
                <h2 class="ttl-03">運搬関連</h2>
                <ul class="facility-list">
                    <li>
                        ガソリンリフト（ロールクランプ）
                        <span>1台</span>
                    </li>
                    <li>
                        バッテリーリフト（2t・1.5t･1ｔ）
                        <span>3台</span>
                    </li>
                    <li>
                        バッテリーリフト（ロールクランプ）
                        <span>1台</span>
                    </li>
                    <li>
                        ハンドリフト（2t/3台・1.5t/2台・1.2t/5台）
                        <span>10台</span>
                    </li>
                </ul>
            </section>
        </div><!-- / -->
    </div>
</div>
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
            <a href="<?php echo home_url('/company/history/'); ?>" class="btn-02">
                <span class="btn__text">会社沿革</span>
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
            <a href="<?php echo home_url('/company/project/'); ?>" class="btn-02">
                <span class="btn__text">私たちの<br class="sp-only">取り組み</span>
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