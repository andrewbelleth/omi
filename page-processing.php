<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 加工ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'PROCESSING',
    'title_jp' => '加工',
]); ?>
<div class="page-wrapper mt160--sp96">
    <div class=" section section__col">
        <div class="page-printing__side section__side">
            <ul id="sidemenu">
                <li><a data-slug="occasionally" href="<?php echo home_url('/service/printing/processing/#occasionally'); ?>">折り加工</a></li>
                <li><a data-slug="sewing" href="<?php echo home_url('/service/printing/processing/#sewing'); ?>">ミシン加工</a></li>
                <li><a data-slug="punching" href="<?php echo home_url('/service/printing/processing/#punching'); ?>">穴あけ加工</a></li>
                <li><a data-slug="numbering" href="<?php echo home_url('/service/printing/processing/#numbering'); ?>">ナンバリング加工</a></li>
                <li><a data-slug="stitching" href="<?php echo home_url('/service/printing/processing/#stitching'); ?>">スジ入れ加工</a></li>
                <li><a data-slug="rounding" href="<?php echo home_url('/service/printing/processing/#rounding'); ?>">角丸加工</a></li>
                <li><a data-slug="surface" href="<?php echo home_url('/service/printing/processing/#surface'); ?>">表面加工</a></li>
                <li><a data-slug="thomson" href="<?php echo home_url('/service/printing/processing/#thomson'); ?>">トムソン抜き加工</a></li>
                <li><a data-slug="paper-file" href="<?php echo home_url('/service/printing/processing/#paper-file'); ?>">紙ファイル加工</a></li>
                <li><a data-slug="paper-making" href="<?php echo home_url('/service/printing/processing/#paper-making'); ?>">製紙加工</a></li>
            </ul>
        </div>
        <div class="section__main wrapper-136">
            <div class="">
                <div class="txt">
                    <p>
                        自社工場に取り揃えた設備と、信頼のおける協力会社との盤石な体制により、印刷物に付加価値を与えます。<br>
                        加工を要する印刷物をご発注の際は、加工位置、向きなどを示した仕上がり見本を必ずご用意いただきますようお願いいたします。
                    </p>
                </div>
            </div>

            <section class="component-box-item occasionally" id="occasionally">
                <h2 class="ttl-01">折り加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        <span class="marker">最大A1サイズ</span>の紙を折り加工することができます。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img01.webp" alt="折り加工の２つ折りについてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>２つ折り</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img02.webp" alt="折り加工の観音折りについてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>観音折り</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img03.webp" alt="折り加工の蛇腹折りについてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>蛇腹折り</p>
                    </li>
                </ul>
                <div class="light-blue-box mt40">
                    <h3>対応可能な表面加工</h3>
                    <ul class="light-blue-box-flex">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon01.webp" alt="折り加工の二つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>二つ折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon02.webp" alt="折り加工の片袖折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>片袖折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon03.webp" alt="折り加工の観音折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>観音折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon04.webp" alt="折り加工のDM折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>DM折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon05.webp" alt="折り加工の三つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>三つ折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon06.webp" alt="折り加工の四つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>四つ折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon07.webp" alt="折り加工の五つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>五つ折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon08.webp" alt="折り加工の六つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>六つ折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon09.webp" alt="折り加工の七つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>七つ折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon10.webp" alt="折り加工の蛇腹折り+二つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>蛇腹折り+<br class="sp-only">二つ折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon11.webp" alt="折り加工のクロス8頁折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>クロス8頁折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon12.webp" alt="折り加工の巻三つ折+クロス二つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>巻三つ折・<br>
                                クロス二つ折<br>
                                <span>（変形12頁）</span>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon13.webp" alt="折り加工の外三つ折+クロス二つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>外三つ折<br>
                                クロス二つ折<br>
                                <span>（変形12頁）</span>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon14.webp" alt="折り加工の巻四つ折+クロス二つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>巻四つ折･<br>
                                クロス二つ折<br>
                                <span>（変形16頁）</span>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon15.webp" alt="折り加工のクロス16頁折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>クロス16頁折</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon16.webp" alt="折り加工の巻巻四つ折+クロス二つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>巻巻四つ折･<br>
                                クロス二つ折<br>
                                <span>（変形16頁）</span>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon17.webp" alt="折り加工の外三つ折+クロス巻四つ折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>外三つ折･<br>
                                クロス巻四つ折<br>
                                <span>（24頁）</span>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-icon18.webp" alt="折り加工の巻巻四つ折+ダブルクロス折についてのイメージ画像" width="62" height="62" loading="lazy">
                            <p>巻巻四つ折･<br>
                                ダブルクロス折<br>
                                <span>（変形32頁）</span>
                            </p>
                        </li>

                    </ul>
                    <p class="mt16">
                        ※上記以外の折り方にも対応可能です。一度ご相談ください。
                    </p>
                </div>
                <h3 class="mt32--sp40 ttl-02 ttl-02--triangle">
                    折り加工による背割れについて
                </h3>
                <div class="txt-01">
                    <p class="mt8">
                        印刷物に折り加工を行う場合、折り目部分の用紙の表面に破れが発生し、用紙の白が見えてひび割れのようになってしまうことを「背割れ」といいます。<br>
                        背割れは、用紙が厚くなるほど発生しやすくなります。また、折り目部分に高濃度の色ベタなどがデザインされている場合、特に目立ちやすくなります。<br>
                        背割れは完全には防ぐことのできない現象のため、用紙の種類や厚み、デザインにより、背割れの程度に差が生じますので、あらかじめご注意ください。
                    </p>
                </div>

                <ul class="img-list img-list--3column-sp1 pt20pl20">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img04.webp" alt="折り加工の背割れについてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img05.webp" alt="折り加工の背割れについてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img06.webp" alt="折り加工の背割れについてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                </ul>

            </section>
            <section class="component-box-item sewing" id="sewing">
                <h2 class="ttl-01">ミシン加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        切り取りができるようにミシン目を入れる加工です。クーポン券付きチラシ、チケットなどにご活用いただけます。ミシン入りページを含む製本も可能です。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img07.webp" alt="ミシン加工の伝票についてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>伝票</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img08.webp" alt="ミシン加工のジャンプミシンについてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>ジャンプミシン</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img09.webp" alt="ミシン加工のマイクロミシンについてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>マイクロミシン</p>
                    </li>
                </ul>
                <h3 class="mt32--sp40 ttl-02 ttl-02--triangle">
                    ジャンプミシン
                </h3>
                <div class="txt-01">
                    <p class="mt8">
                        用紙の端から途中までミシン目を入れる加工です。
                    </p>
                </div>
                <h3 class="mt32--sp40 ttl-02 ttl-02--triangle">
                    マイクロミシン
                </h3>
                <div class="txt-01">
                    <p class="mt8">
                        通常のミシン加工より細かい刃で加工し、ミシン目が目立たず、美しく仕上がります。<br>
                        凹凸も少なく加工後にプリンターでの出力にも対応可能です。
                    </p>
                </div>
            </section>
            <section class="component-box-item punching" id="punching">
                <h2 class="ttl-01">穴あけ加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        ファイルに綴じるなどするための穴をあける加工です。穴の直径は6mmが標準となり、特に指定のない場合は標準で対応いたします。<br>
                        リングファイル用の連穴も可能です。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img10.webp" alt="穴あけ加工の2穴についてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>2穴</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img11.webp" alt="穴あけ加工の連穴についてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>連穴</p>
                    </li>
                </ul>
            </section>
            <section class="component-box-item numbering" id="numbering">
                <h2 class="ttl-01">ナンバリング加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        連番を印字する加工です。クラッシュナンバー加工（複写伝票の丁合時に加工し、1枚目に印字し、2枚目以降は転写されるナンバー）も可能です。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img12.webp" alt="ナンバリング加工のナンバリングについてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>ナンバリング</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img13.webp" alt="ナンバリング加工のクラッシュナンバーについてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>クラッシュナンバー</p>
                    </li>
                </ul>
            </section>
            <section class="component-box-item stitching" id="stitching">
                <h2 class="ttl-01">スジ入れ加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        折りやすくするために、スジ（折り目）を入れる加工です。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img14.webp" alt="スジ入れ加工のスジ入れについてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                </ul>
            </section>
            <section class="component-box-item rounding" id="rounding">
                <h2 class="ttl-01">角丸加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        角を丸く加工する加工です。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img15.webp" alt="角丸加工についてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                </ul>
            </section>

            <section class="component-box-item surface" id="surface">
                <h2 class="ttl-01">表面加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        印刷物の表面に施す加工です。下記以外にも様々な加工に対応可能です。一度ご相談ください。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img16.webp" alt="表面加工のPP貼加工（艶なし）についてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>PP貼加工（艶なし）</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img17.webp" alt="表面加工のPP貼加工（艶あり）についてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>PP貼加工（艶あり）</p>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img18.webp" alt="表面加工の箔押し加工についてのイメージ画像" width="238" height="142" loading="lazy">
                        <p>箔押し加工</p>
                    </li>
                </ul>
                <div class="light-blue-box mt40">
                    <h3>対応可能な表面加工</h3>
                    <div class="light-blue-box-inner">
                        <p>
                            ・PP貼加工（艶あり、艶なし）<br>
                            ・ニス加工<br>
                            ・抗菌ニス加工<br>
                            ・LCコート加工（艶あり、艶なし）
                        </p>
                        <p>
                            ・ホログラム加工<br>
                            ・箔押し加工（金箔、銀箔、白箔など）<br>
                            ・エンボス加工<br>
                            ・厚盛ニス加工
                        </p>
                    </div>
                </div>
            </section>
            <section class="component-box-item thomson" id="thomson">
                <h2 class="ttl-01">トムソン抜き加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        型に合わせて紙を打ち抜く型抜き加工です。一枚ものだけでなく、冊子に加工することも可能です。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img19.webp" alt="トムソン加工についてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                </ul>
            </section>
            <section class="component-box-item paper-file" id="paper-file">
                <h2 class="ttl-01">紙ファイル加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        トムソン抜き加工と貼り加工を組み合わせ、ファイルの形に仕上げる加工です。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img20.webp" alt="紙ファイル加工についてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                </ul>
            </section>
            <section class="component-box-item paper-making" id="paper-making">
                <h2 class="ttl-01">製紙加工</h2>
                <div class="txt mt32--sp20">
                    <p>
                        様々な袋の形に仕上げる加工です。既成の封筒サイズ以外のオリジナルサイズに仕上げることができます。
                    </p>
                </div>
                <ul class="img-list img-list--3column-sp1 mt20--sp24">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img21.webp" alt="製紙加工についてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processings/processings-img22.webp" alt="製紙加工についてのイメージ画像" width="238" height="142" loading="lazy">
                    </li>
                </ul>
            </section>

        </div><!-- / -->
    </div>
</div>
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
            <a href="<?php echo home_url('/service/printing/'); ?>" class="btn-02">
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
            <a href="<?php echo home_url('/service/processing/'); ?>" class="btn-02">
                <span class="btn__text">取扱品目</span>
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
            <a href="<?php echo esc_url(home_url('/service/printing/bookbinding')); ?>" class="btn-02">
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


<?php get_template_part('template-parts/footer'); ?>