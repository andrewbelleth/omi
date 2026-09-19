<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: DTF印刷 LPページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<main class="lp">
    <!-- メインビジュアル -->
    <section class="mv-02">
        <div class="mv-02__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-mv-img.webp" alt="DTF印刷で作ったTシャツ・トートバッグ・パーカーなどのオリジナルグッズ" width="849"
                height="732" />
        </div>
        <div class="mv-02__inner">
            <ul class="mv-02__point">
                <li class="mv-02__point-item">
                    <span class="mv-02__point-text">早い！</span>
                </li>
                <li class="mv-02__point-cross">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-mv-cross.svg" alt="" width="20" height="20" />
                </li>
                <li class="mv-02__point-item">
                    <span class="mv-02__point-text">安い！</span>
                </li>
                <li class="mv-02__point-cross">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-mv-cross.svg" alt="" width="20" height="20" />
                </li>
                <li class="mv-02__point-item mv-02__point-item--order">
                    <span class="mv-02__point-text"><span class="mv-02__point-num">1</span>枚から<br />注文OK</span>
                </li>
            </ul>
            <p class="mv-02__lead">
                Tシャツ・トートバッグ・パーカー<span class="mv-02__lead-sm">など</span>
            </p>
            <h1 class="mv-02__ttl">
                <span><span class="colorBlue">オリジナルグッズ</span>・<br class="mobile" /><span
                        class="colorBlue">ウェア</span>が<br class="desktop" />簡単に作れる！</span>
            </h1>
            <div class="mv-02__btn">
                <a href="<?php echo esc_url(home_url('/service/contact')); ?>" class="btn-03">
                    <span class="btn-03__text">お問い合わせ<br class="mobile" />はこちら</span>
                    <span class="btn-03__icon">
                        <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z" />
                        </svg>
                    </span>
                </a>
                <!-- TODO: 公式LINEのURLが決まり次第差し替え -->
                <a href="#" class="btn-03 btn-03--line">
                    <span class="btn-03__text">公式LINEから<br class="mobile" />お気軽に！</span>
                    <span class="btn-03__icon">
                        <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z" />
                        </svg>
                    </span>
                </a>
            </div>
            <p class="mv-02__label">
                DTF<span class="mv-02__label-jp">印刷</span>
            </p>
        </div>
    </section>

    <div class="lp-lead">
        <!-- こんなときに -->
        <section class="lp-case">
            <div class="lp-case__inner lp-inner">
                <h2 class="lp-case__ttl">
                    そうだ！<br class="mobile" />オリジナルウェアを作ろう！
                </h2>
                <ul class="lp-case__list">
                    <li class="lp-case__item">
                        <div class="lp-case__item-img">
                            <!-- TODO: 写真素材が未購入のため差し替え予定 -->
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-case-img01.webp" alt="文化祭でおそろいのTシャツを着る学生たち" width="350"
                                height="200" loading="lazy" />
                        </div>
                        <p class="lp-case__item-text">
                            学校の文化祭や体育祭で、<br />クラス・チームの<br class="desktop" />おそろいTシャツを作りたい
                        </p>
                    </li>
                    <li class="lp-case__item">
                        <div class="lp-case__item-img">
                            <!-- TODO: 写真素材が未購入のため差し替え予定 -->
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-case-img02.webp" alt="イベント出店でおそろいのウェアを着たスタッフ" width="350"
                                height="200" loading="lazy" />
                        </div>
                        <p class="lp-case__item-text">
                            展示会やイベント出店で、<br />スタッフが<br class="desktop" />目立つオリジナルウェアがほしい
                        </p>
                    </li>
                    <li class="lp-case__item">
                        <div class="lp-case__item-img">
                            <!-- TODO: 写真素材が未購入のため差し替え予定 -->
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-case-img03.webp" alt="おそろいのユニフォームで円陣を組むスポーツチーム" width="350"
                                height="200" loading="lazy" />
                        </div>
                        <p class="lp-case__item-text">
                            職場やスポーツ団のユニフォームに、<br />ロゴやオリジナルデザインを<br class="desktop" />入れたい
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- できること -->
        <section class="lp-can">
            <div class="lp-can__inner lp-inner">
                <h2 class="lp-can__ttl">
                    近江印刷の<br class="mobile" />DTF印刷でできること
                </h2>
                <ul class="lp-can__list">
                    <li class="lp-can__item">
                        <div class="lp-can__item-img">
                            <!-- TODO: 実際のプリント写真に差し替え予定 -->
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-can-img01.webp" alt="高精細にプリントされたウェア" width="350"
                                height="200" loading="lazy" />
                        </div>
                        <h3 class="lp-can__item-ttl">
                            高精細のプリントで<br />細かいデザインもくっきり再現
                        </h3>
                        <p class="lp-can__item-text">
                            フィルム転写で細かい線やグラデーションもくっきり再現。洗濯を繰り返しても色あせにくく、伸縮性もあるため型崩れしにくい仕上がりです。
                        </p>
                    </li>
                    <li class="lp-can__item">
                        <div class="lp-can__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-can-img02.webp" alt="スマートフォンで相談する女性" width="350"
                                height="200" loading="lazy" />
                        </div>
                        <h3 class="lp-can__item-ttl">
                            LINEや実店舗（NICE CREW）で<br />気軽にプロに相談できる！
                        </h3>
                        <p class="lp-can__item-text">
                            ささいな疑問も、公式LINEやお電話で気軽にご相談可能。専門知識がなくても安心してご注文いただけます。
                        </p>
                    </li>
                    <li class="lp-can__item">
                        <div class="lp-can__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-can-img03.webp" alt="実店舗NICE CREWに並ぶオリジナルウェア" width="350"
                                height="200" loading="lazy" />
                        </div>
                        <h3 class="lp-can__item-ttl">
                            実店舗（NICE CREW）で<br />実物を見ることができる！
                        </h3>
                        <p class="lp-can__item-text">
                            彦根市役所近くの実店舗「NICE
                            CREW」で、DTF印刷のサンプルを実際に手に取って確認可能。質感を見て安心してご注文いただけます。
                        </p>
                    </li>
                </ul>
                <!-- NICE CREWボタン：中身は後から入れる -->
                <div class="lp-can__btn"></div>
            </div>
        </section>
    </div>

    <!-- QUALITY -->
    <section class="dtf-quality">
        <div class="dtf-quality__inner lp-inner">
            <h2 class="ttl-06">
                <span class="ttl-06__en">QUALITY</span>
                <span class="ttl-06__jp">当社の<br class="mobile" />プリントクオリティについて</span>
            </h2>
            <ul class="dtf-quality__list">
                <li class="dtf-quality__item">
                    <div class="dtf-quality__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-quality-img01.webp" alt="犬の写真を高精細にプリントしたトートバッグ" width="548"
                            height="332" loading="lazy" />
                    </div>
                    <div class="dtf-quality__item-body">
                        <h3 class="dtf-quality__item-ttl">
                            <span>細かいグラデーションや</span>
                            <span>複雑なデザインもきれいにプリント</span>
                        </h3>
                        <p class="dtf-quality__item-text">
                            当社が採用するDTFプリント方式は、インクジェットプリンターで出力したフィルムを、デザイン部分のみ熱で圧着させる印刷方法です。<br />専用フィルムに直接印刷するため、写真やイラストを使った複雑なデザイン、細かいグラデーションも色ムラなく高精細に再現できます。
                        </p>
                    </div>
                </li>
                <li class="dtf-quality__item">
                    <div class="dtf-quality__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-quality-img02.webp" alt="棚に並ぶ専用熱転写顔料インク" width="548"
                            height="332" loading="lazy" />
                    </div>
                    <div class="dtf-quality__item-body">
                        <h3 class="dtf-quality__item-ttl">
                            <span>洗濯を重ねても色落ちしにくい</span>
                            <span>専用インクにこだわっています</span>
                        </h3>
                        <p class="dtf-quality__item-text">
                            フルカラーを再現するCMYKに白を加えた5色構成の専用熱転写顔料インク「PHT50」を使用。<br />繊維の安全性に関する国際規格「OEKO-TEX®」の前提認証として認められている「ECO
                            PASSPORT」を取得しており、安全性に配慮したインクで洗濯を重ねても色落ちしにくいのが特長です。
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-02">
        <img class="cta-02__deco cta-02__deco--01" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo01.svg" alt="" width="835"
            height="366" />
        <img class="cta-02__deco cta-02__deco--02" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo02.svg" alt="" width="385"
            height="200" />
        <div class="cta-02__inner lp-inner">
            <h2 class="cta-02__ttl">
                お問い合わせ・<br class="mobile" />ご相談はこちら！
            </h2>
            <ul class="cta-02__list">
                <li class="cta-02__item">
                    <p class="cta-02__item-ttl">お問い合わせフォームから</p>
                    <div class="cta-02__item-btn">
                        <a href="<?php echo esc_url(home_url('/service/contact')); ?>" class="btn-03">
                            <span class="btn-03__text">お問い合わせはこちら</span>
                            <span class="btn-03__icon">
                                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="cta-02__item">
                    <p class="cta-02__item-ttl">公式LINEからお気軽に！</p>
                    <div class="cta-02__item-btn">
                        <!-- TODO: 公式LINEのURLが決まり次第差し替え -->
                        <a href="#" class="btn-03 btn-03--line">
                            <span class="btn-03__text">公式LINEはこちら</span>
                            <span class="btn-03__icon">
                                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section class="dtf-products">
        <div class="dtf-products__inner lp-inner">
            <h2 class="ttl-06">
                <span class="ttl-06__en">PRODUCTS</span>
                <span class="ttl-06__jp">商品一覧</span>
            </h2>
            <ul class="dtf-products__list">
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img01.webp" alt="5.6オンス ハイクオリティー Ｔシャツ〈アダルト〉"
                            width="258" height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        5.6オンス ハイクオリティー Ｔシャツ〈アダルト〉
                    </h3>
                    <p class="dtf-products__item-text">
                        着心地や素材感にこだわった上質なTシャツを探している人のための一枚。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img02.webp" alt="4.1オンス ドライアスレチック Ｔシャツ〈アダルト〉"
                            width="258" height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        4.1オンス ドライアスレチック Ｔシャツ〈アダルト〉
                    </h3>
                    <p class="dtf-products__item-text">
                        「誰からも愛されるドライTシャツ」を目指し、こだわり抜いた生地厚。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img03.webp" alt="4.4オンス ドライ ポロシャツ（ポケット付）" width="258"
                            height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        4.4オンス ドライ ポロシャツ（ポケット付）
                    </h3>
                    <p class="dtf-products__item-text">
                        ドライポロポケット付で利便性もUP！
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img04.webp" alt="4.7オンス スペシャル ドライカノコ ポロシャツ（ローブリード）"
                            width="258" height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        4.7オンス スペシャル ドライカノコ ポロシャツ（ローブリード）
                    </h3>
                    <p class="dtf-products__item-text">
                        鹿の子編みにしたポリエステル100％のこの生地は、シワがつきにくく乾きやすい、上品なポロシャツ。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img05.webp" alt="6.2オンス プレミアム ロングスリーブ Tシャツ（2.1インチリブ）"
                            width="258" height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        6.2オンス プレミアム ロングスリーブ Tシャツ（2.1インチリブ）
                    </h3>
                    <p class="dtf-products__item-text">
                        肌ざわりがよく高級感がありながらも、厚手でタフな生地のロンT。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img06.webp" alt="5.6オンス ラグラン ロングスリーブ Tシャツ（1.6インチリブ）"
                            width="258" height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        5.6オンス ラグラン ロングスリーブ Tシャツ（1.6インチリブ）
                    </h3>
                    <p class="dtf-products__item-text">
                        ユースカルチャーと相性抜群。オリジナリティあふれるラグランT。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img07.webp"
                            alt="8.8オンス オーセンティック パイル　クルーネック スウェット（裏パイル）" width="258" height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        8.8オンス オーセンティック パイル　クルーネック
                        スウェット（裏パイル）
                    </h3>
                    <p class="dtf-products__item-text">
                        シーン問わずに活躍する万能クルーネック。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img08.webp"
                            alt="8.8オンス オーセンティック パイル　スウェット フルジップ パーカ（裏パイル）" width="258" height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        8.8オンス オーセンティック パイル　スウェット フルジップ
                        パーカ（裏パイル）
                    </h3>
                    <p class="dtf-products__item-text">
                        しっかりとあたたかさをキープしながら、リラックスした雰囲気を演出する絶妙な厚みのパーカ。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img09.webp" alt="ベーシックベスト" width="258" height="176"
                            loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">ベーシックベスト</h3>
                    <p class="dtf-products__item-text">
                        着心地の良さにこだわったベーシックベスト。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img10.webp" alt="ベーシックハッピ" width="258" height="176"
                            loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">ベーシックハッピ</h3>
                    <p class="dtf-products__item-text">
                        イベントや催事で大活躍のハッピ。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img11.webp" alt="軍手" width="258" height="176"
                            loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">軍手</h3>
                    <p class="dtf-products__item-text">
                        ガーデニング・DIYに使用する軍手。農業系の企業におすすめ。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img12.webp" alt="デイリー フラット トートバッグ" width="258"
                            height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        デイリー フラット トートバッグ
                    </h3>
                    <p class="dtf-products__item-text">
                        長めのハンドル＆薄手でカジュアルな生地がこなれた印象の万能トートバッグ。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img13.webp" alt="レギュラー キャンバス トートバッグ" width="258"
                            height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        レギュラー キャンバス トートバッグ
                    </h3>
                    <p class="dtf-products__item-text">
                        便利な4サイズ展開のプチプラトートバッグ。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img14.webp" alt="ヘヴィー キャンバス ニュースペーパーバッグ" width="258"
                            height="176" loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">
                        ヘヴィー キャンバス ニュースペーパーバッグ
                    </h3>
                    <p class="dtf-products__item-text">
                        毎日使ってほしい丈夫な大容量ショルダーバッグ。
                    </p>
                </li>
                <li class="dtf-products__item">
                    <div class="dtf-products__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-products-img15.webp" alt="ランドリーバッグ" width="258" height="176"
                            loading="lazy" />
                    </div>
                    <h3 class="dtf-products__item-ttl">ランドリーバッグ</h3>
                    <p class="dtf-products__item-text">
                        背負って使える軽量ランドリーバッグ。
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-02">
        <img class="cta-02__deco cta-02__deco--01" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo01.svg" alt="" width="835"
            height="366" />
        <img class="cta-02__deco cta-02__deco--02" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo02.svg" alt="" width="385"
            height="200" />
        <div class="cta-02__inner lp-inner">
            <h2 class="cta-02__ttl">
                商品について<br class="mobile" />詳しく相談する！
            </h2>
            <ul class="cta-02__list">
                <li class="cta-02__item">
                    <p class="cta-02__item-ttl">お問い合わせフォームから</p>
                    <div class="cta-02__item-btn">
                        <a href="<?php echo esc_url(home_url('/service/contact')); ?>" class="btn-03">
                            <span class="btn-03__text">お問い合わせはこちら</span>
                            <span class="btn-03__icon">
                                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="cta-02__item">
                    <p class="cta-02__item-ttl">公式LINEからお気軽に！</p>
                    <div class="cta-02__item-btn">
                        <!-- TODO: 公式LINEのURLが決まり次第差し替え -->
                        <a href="#" class="btn-03 btn-03--line">
                            <span class="btn-03__text">公式LINEはこちら</span>
                            <span class="btn-03__icon">
                                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- FLOW -->
    <section class="dtf-flow">
        <div class="dtf-flow__inner lp-inner">
            <h2 class="ttl-06">
                <span class="ttl-06__en">FLOW</span>
                <span class="ttl-06__jp">オリジナルウェアができるまで</span>
            </h2>
            <ol class="dtf-flow__list">
                <li class="dtf-flow__item">
                    <div class="dtf-flow__item-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-icon01.svg" alt="" width="118" height="118"
                            loading="lazy" />
                    </div>
                    <div class="dtf-flow__item-body">
                        <div class="dtf-flow__item-head">
                            <span class="dtf-flow__item-num">01</span>
                            <h3 class="dtf-flow__item-ttl">お問い合わせ</h3>
                        </div>
                        <p class="dtf-flow__item-text">
                            作りたいオリジナルグッズ・ウェア、デザイン、枚数などを<a href="<?php echo esc_url(home_url('/service/contact')); ?>"><span
                                    class="dtf-flow__item-text-word">お問い合わせ</span><span
                                    class="dtf-flow__item-text-word">フォーム</span></a>または<a
                                href="#">公式LINE</a>からお気軽にご相談ください。
                        </p>
                    </div>
                </li>
                <li class="dtf-flow__item">
                    <div class="dtf-flow__item-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-icon02.svg" alt="" width="118" height="118"
                            loading="lazy" />
                    </div>
                    <div class="dtf-flow__item-body">
                        <div class="dtf-flow__item-head">
                            <span class="dtf-flow__item-num">02</span>
                            <h3 class="dtf-flow__item-ttl">ヒアリング・お見積もり</h3>
                        </div>
                        <p class="dtf-flow__item-text">
                            ご希望をお伺いし、内容に合わせてお見積もりをご案内します。
                        </p>
                    </div>
                </li>
                <li class="dtf-flow__item">
                    <div class="dtf-flow__item-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-icon03.svg" alt="" width="118" height="118"
                            loading="lazy" />
                    </div>
                    <div class="dtf-flow__item-body">
                        <div class="dtf-flow__item-head">
                            <span class="dtf-flow__item-num">03</span>
                            <h3 class="dtf-flow__item-ttl">デザイン・仕様確認</h3>
                        </div>
                        <p class="dtf-flow__item-text">
                            デザインやサイズ、カラーなどの詳細を確認します。
                        </p>
                        <div class="dtf-acc">
                            <div class="dtf-acc__item">
                                <h4 class="dtf-acc__heading">
                                    <button class="dtf-acc__head" type="button" aria-expanded="false"
                                        aria-controls="dtf-acc-body1">
                                        <span class="dtf-acc__head-ttl">デザインについて</span>
                                        <span class="dtf-acc__head-more">
                                            <span class="dtf-acc__head-more-text">詳しく見る</span>
                                            <span class="dtf-acc__head-icon"></span>
                                        </span>
                                    </button>
                                </h4>
                                <div class="dtf-acc__body" id="dtf-acc-body1">
                                    <div>
                                        <div class="dtf-acc__inner">
                                            <div class="dtf-acc__block">
                                                <h5 class="dtf-acc__block-ttl">
                                                    オリジナルデザインの場合
                                                </h5>
                                                <p class="dtf-acc__text">
                                                    ご使用になるロゴや、イラスト、写真などをご準備いただき、デザインを決定していただきます。<br />Illustrator・Photoshop・手書きでのデータ入稿が可能です。
                                                </p>
                                                <p class="dtf-acc__note">
                                                    <span
                                                        class="dtf-acc__note-ttl">【著作権・商標権についてのお願い】</span><br />皆様の素敵なデザインをお預かりするにあたり、著作権や商標権へのご配慮をお願いしております。<br />アニメ・漫画のキャラクター、芸能人の写真、既存のブランドロゴなどは、お客様自身に著作権・商標権がないため、そのままプリントすることができません。二次創作イラストや、パロディデザイン等もお断りさせていただく場合がございます。<br />ご入稿いただいたデータは、「権利元から許可を得ているもの」または「お客様ご自身のオリジナル作品」である前提で制作を進めさせていただきます。万が一、仕上がり後に権利関係のトラブルが発生した場合、当店では責任を負いかねますのであらかじめご了承ください。
                                                </p>
                                            </div>
                                            <div class="dtf-acc__block">
                                                <h5 class="dtf-acc__block-ttl">
                                                    書体を選んで調整する
                                                </h5>
                                                <p class="dtf-acc__text">
                                                    オリジナルのロゴやデザインがご用意できない場合は、書体リストからお好みの書体をご指定いただくことも可能です。
                                                </p>
                                                <div class="dtf-acc__img desktop">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-font-list.webp"
                                                        alt="和文書体8種と外国書体8種の書体見本" width="970" height="512"
                                                        loading="lazy" />
                                                </div>
                                                <div class="dtf-acc__img mobile">
                                                    <div class="dtf-acc__scroll dtf-acc__scroll--font">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-font-list-jp.webp"
                                                            alt="和文書体8種の書体見本" width="475" height="512" loading="lazy" />
                                                    </div>
                                                    <div class="dtf-acc__bar" aria-hidden="true">
                                                        <span class="dtf-acc__bar-thumb"></span>
                                                    </div>
                                                    <div class="dtf-acc__scroll dtf-acc__scroll--font">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-font-list-en.webp"
                                                            alt="外国書体8種の書体見本" width="475" height="512" loading="lazy" />
                                                    </div>
                                                    <div class="dtf-acc__bar" aria-hidden="true">
                                                        <span class="dtf-acc__bar-thumb"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dtf-acc__item">
                                <h4 class="dtf-acc__heading">
                                    <button class="dtf-acc__head" type="button" aria-expanded="false"
                                        aria-controls="dtf-acc-body2">
                                        <span class="dtf-acc__head-ttl">カラーについて</span>
                                        <span class="dtf-acc__head-more">
                                            <span class="dtf-acc__head-more-text">詳しく見る</span>
                                            <span class="dtf-acc__head-icon"></span>
                                        </span>
                                    </button>
                                </h4>
                                <div class="dtf-acc__body" id="dtf-acc-body2">
                                    <div>
                                        <div class="dtf-acc__inner">
                                            <div class="dtf-acc__block">
                                                <p class="dtf-acc__text">
                                                    単色のカラー見本54色をご準備しております。フルカラーや写真の場合は、色を指定せずにそのままご入稿いただけます。
                                                </p>
                                                <div class="dtf-acc__img">
                                                    <div class="dtf-acc__scroll dtf-acc__scroll--color">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-color-list.webp"
                                                            alt="単色カラー見本54色（NC01〜NC54）とカラーコード" width="970" height="398"
                                                            loading="lazy" />
                                                    </div>
                                                    <div class="dtf-acc__bar" aria-hidden="true">
                                                        <span class="dtf-acc__bar-thumb"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dtf-acc__item">
                                <h4 class="dtf-acc__heading">
                                    <button class="dtf-acc__head" type="button" aria-expanded="false"
                                        aria-controls="dtf-acc-body3">
                                        <span class="dtf-acc__head-ttl">プリント箇所とサイズについて</span>
                                        <span class="dtf-acc__head-more">
                                            <span class="dtf-acc__head-more-text">詳しく見る</span>
                                            <span class="dtf-acc__head-icon"></span>
                                        </span>
                                    </button>
                                </h4>
                                <div class="dtf-acc__body" id="dtf-acc-body3">
                                    <div>
                                        <div class="dtf-acc__inner">
                                            <div class="dtf-acc__block">
                                                <p class="dtf-acc__text">
                                                    どこの箇所に、どれくらいの大きさでプリントするのかを決めます。<br />【プリントサイズ】<br />①10cm×10cm
                                                    以内　②20cm×20cm 以内　③20cm×30cm
                                                    以内　④35cm×40cm 以内
                                                </p>
                                                <div class="dtf-acc__img dtf-acc__img--print-area">
                                                    <div class="dtf-acc__scroll dtf-acc__scroll--print-area">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-print-area.svg"
                                                            alt="Tシャツとパンツのプリント箇所を番号で示した図" width="524" height="294"
                                                            loading="lazy" />
                                                    </div>
                                                    <div class="dtf-acc__bar" aria-hidden="true">
                                                        <span class="dtf-acc__bar-thumb"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dtf-flow__item">
                    <div class="dtf-flow__item-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-icon04.svg" alt="" width="118" height="118"
                            loading="lazy" />
                    </div>
                    <div class="dtf-flow__item-body">
                        <div class="dtf-flow__item-head">
                            <span class="dtf-flow__item-num">04</span>
                            <h3 class="dtf-flow__item-ttl">ご注文確定</h3>
                        </div>
                        <p class="dtf-flow__item-text">
                            内容をご確認いただき、ご注文を確定します。
                        </p>
                    </div>
                </li>
                <li class="dtf-flow__item">
                    <div class="dtf-flow__item-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-icon05.svg" alt="" width="118" height="118"
                            loading="lazy" />
                    </div>
                    <div class="dtf-flow__item-body">
                        <div class="dtf-flow__item-head">
                            <span class="dtf-flow__item-num">05</span>
                            <h3 class="dtf-flow__item-ttl">製作・納品</h3>
                        </div>
                        <p class="dtf-flow__item-text">
                            完成したウェアを丁寧に製作し、お届けします。
                        </p>
                        <div class="dtf-flow__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/dtf-flow-img.webp" alt="完成したオリジナルウェアとトートバッグ" width="736"
                                height="230" loading="lazy" />
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <div class="component-box section">
        <div class="component-box-item">
            <div class="link-01-component">
                <div class="link-01-head">
                    <h3 class="link-01-title">PRINTING</h3>
                    <a href="<?php echo esc_url(home_url('/service')); ?>" class="link-01-link">
                        <?php get_template_part('template-parts/parts/link-01-link-icon'); ?>
                        <span class="link-01-link-text">サービストップへ戻る</span>
                    </a>
                </div>
                <div class="btn-list-01">
                    <a href="<?php echo esc_url(home_url('/service/printing')); ?>" class="btn-02">
                        <span class="btn__text">印刷</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/service/printing/products')); ?>" class="btn-02">
                        <span class="btn__text btn__text--newspaper">取扱品目</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/service/printing/processing')); ?>" class="btn-02">
                        <span class="btn__text">加工</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>