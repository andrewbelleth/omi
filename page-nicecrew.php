<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: NICECREW LPページ
*/
?>

<?php get_template_part('template-parts/header'); ?>

<main class="lp">
    <!-- メインビジュアル -->
    <section class="mv-02 mv-02--nicecrew">
        <div class="mv-02__img">
            <picture>
                <source
                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-fv-img-main.webp"
                    media="(max-width: 768px)" />
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-fv-img-main.webp"
                    alt="オリジナルウェアやグッズが並ぶNICE CREWの店舗" width="1440" height="1152" />
            </picture>
        </div>
        <img class="mv-02__deco mv-02__deco--tshirts"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-fv-img-tshirts.webp"
            alt="" width="250" height="214" />
        <img class="mv-02__deco mv-02__deco--package"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-fv-img-paccage.webp"
            alt="" width="153" height="129" />
        <div class="mv-02__inner">
            <p class="mv-02__lead">
                <svg class="mv-02__lead-svg" role="img" aria-label="店舗で実際にさわって、相談して、確認できる！">
                    <!-- prettier-ignore -->
                    <text class="desktop" x="0" y="100%">店舗で実際にさわって、相談して、確認できる！</text>
                    <text class="mobile" x="0" y="35%">
                        <tspan x="0">店舗で実際にさわって、相談して、</tspan>
                        <tspan x="0" dy="1.7em">確認できる！</tspan>
                    </text>
                </svg>
            </p>
            <h1 class="mv-02__ttl">
                <span>素敵な仲間と</span><br />
                <span><span class="colorBlue">オリジナルグッズ</span>・<span class="colorBlue">ウェア</span><br
                        class="mobile" />づくりも<br class="desktop" />楽しみませんか?</span>
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
                <a href="https://lin.ee/8xNK86v" target="_blank" class="btn-03 btn-03--line">
                    <span class="btn-03__text">公式LINEから<br class="mobile" />お気軽に！</span>
                    <span class="btn-03__icon">
                        <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <!-- フチの角を丸くするため、SVGテキストで描く（-webkit-text-stroke では角が尖る） -->
        <p class="mv-02__label">
            <svg class="mv-02__label-svg" role="img" aria-label="NICE CREW">
                <!-- prettier-ignore -->
                <text x="100%" y="100%" text-anchor="end">NICE CREW</text>
            </svg>
        </p>
    </section>

    <div class="lp-lead">
        <!-- お悩み -->
        <section class="lp-case">
            <div class="lp-case__inner lp-inner">
                <h2 class="lp-case__ttl">こんなお悩みはありませんか?</h2>
                <ul class="lp-case__list">
                    <li class="lp-case__item">
                        <div class="lp-case__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-problem-img02.webp"
                                alt="オリジナルグッズについて悩む人" width="350" height="200" loading="lazy" />
                        </div>
                        <p class="lp-case__item-text">
                            オリジナルグッズを作りたいけど、<br />どうやって形にしたらいいか<br class="desktop" />わからない…
                        </p>
                    </li>
                    <li class="lp-case__item">
                        <div class="lp-case__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-problem-img01.webp"
                                alt="オリジナルウェアについて悩む人" width="350" height="200" loading="lazy" />
                        </div>
                        <p class="lp-case__item-text">
                            実際にサンプルを確認してから<br />オリジナルウェアを<br class="desktop" />作りたい…
                        </p>
                    </li>
                    <li class="lp-case__item">
                        <div class="lp-case__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-problem-img03.webp"
                                alt="グッズ制作の進め方について悩む人" width="350" height="200" loading="lazy" />
                        </div>
                        <p class="lp-case__item-text">
                            専門知識がなくて、<br />何から始めればいいのか<br class="desktop" />わからない…
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <!-- できること -->
        <section class="lp-can lp-can--nicecrew">
            <div class="lp-can__inner lp-inner">
                <h2 class="lp-can__ttl">
                    NICE CREWで<br class="mobile" />できること
                </h2>
                <ul class="lp-can__list">
                    <li class="lp-can__item">
                        <div class="lp-can__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-can-img01.webp"
                                alt="色見本を見ながらデザインを相談する様子" width="350" height="200" loading="lazy" />
                        </div>
                        <h3 class="lp-can__item-ttl">
                            その場でプロに相談・<wbr />注文できる！
                        </h3>
                        <p class="lp-can__item-text">
                            デザインが決まっていなくても、スタッフと相談しながらオリジナルグッズ制作を進められます。
                        </p>
                    </li>
                    <li class="lp-can__item">
                        <div class="lp-can__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-can-img02.webp"
                                alt="NICE CREWのロゴがプリントされた青と黒のTシャツ" width="350" height="200" loading="lazy" />
                        </div>
                        <h3 class="lp-can__item-ttl">実物を見て、さわって選べる！</h3>
                        <p class="lp-can__item-text">
                            DTF印刷やオリジナルグッズの仕上がりを、実際に手に取って質感を確認できます。
                        </p>
                    </li>
                    <li class="lp-can__item">
                        <div class="lp-can__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-can-img03.webp"
                                alt="店内に展示されたオリジナルデザインのトートバッグやグッズ" width="350" height="200" loading="lazy" />
                        </div>
                        <h3 class="lp-can__item-ttl">幅広いアイテムに対応！</h3>
                        <p class="lp-can__item-text">
                            Tシャツやパーカー、トートバッグなど、豊富なアイテムへのDTF転写プリントに対応。用途に合わせて選べます。
                        </p>
                    </li>
                </ul>

            </div>
        </section>
        <!-- NICE CREWの4つの機能 -->
        <section class="nicecrew-feature">
            <div class="nicecrew-feature__inner lp-inner">
                <h3 class="nicecrew-feature__ttl">
                    NICE CREWの<br class="mobile" />4つの機能
                </h3>
                <ol class="nicecrew-feature__list">
                    <li class="nicecrew-feature__item">
                        <h4 class="nicecrew-feature__item-ttl">
                            オリジナルウェア印刷
                        </h4>
                        <p class="nicecrew-feature__item-text">
                            オリジナルウェアへのDTF転写プリントのご相談・ご注文はNICE
                            CREWにおまかせください。<br />実物サンプルを見ながら、その場でご相談いただけます。
                        </p>
                        <div class="nicecrew-feature__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-feature-icon01.webp"
                                alt="" loading="lazy" />
                        </div>
                    </li>
                    <li class="nicecrew-feature__item">
                        <h4 class="nicecrew-feature__item-ttl">
                            お客さまのグッズ制作を<br />受注
                        </h4>
                        <p class="nicecrew-feature__item-text">
                            オーダーメイドのオリジナルグッズ制作を、企画からご相談いただけます。
                        </p>
                        <div class="nicecrew-feature__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-feature-icon02.webp"
                                alt="" loading="lazy" />
                        </div>
                    </li>
                    <li class="nicecrew-feature__item">
                        <h4 class="nicecrew-feature__item-ttl">
                            NICE CREW<br />オリジナル商品の販売
                        </h4>
                        <p class="nicecrew-feature__item-text">
                            NICE
                            CREWオリジナルの商品を、店頭でそのままお買い求めいただけます。
                        </p>
                        <div class="nicecrew-feature__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-feature-icon03.webp"
                                alt="" loading="lazy" />
                        </div>
                    </li>
                    <li class="nicecrew-feature__item">
                        <h4 class="nicecrew-feature__item-ttl">
                            彦根経済新聞サテライト・<br />地域の拠点
                        </h4>
                        <p class="nicecrew-feature__item-text">
                            取材・広報のご相談窓口を兼ね、地域の皆さまが集まり何かを生み出せる場所を目指しています。
                        </p>
                        <div class="nicecrew-feature__item-img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-feature-icon04.webp"
                                alt="" loading="lazy" />
                        </div>
                    </li>
                </ol>
            </div>
        </section>

    </div>

    <!-- CTA -->
    <section class="cta-02">
        <img class="cta-02__deco cta-02__deco--01"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo01.svg" alt=""
            width="835" height="366" />
        <img class="cta-02__deco cta-02__deco--02"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo02.svg" alt=""
            width="385" height="200" />
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
                        <a href="https://lin.ee/8xNK86v" target="_blank" class="btn-03 btn-03--line">
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

    <!-- MESSAGE -->
    <section class="nicecrew-message">
        <div class="nicecrew-message__inner lp-inner">
            <h2 class="ttl-06">
                <span class="ttl-06__en">MESSAGE</span>
                <span class="ttl-06__jp">NICE CREWへの想い</span>
            </h2>
            <img class="nicecrew-message__image"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-message-img-sp.png"
                alt="彦根駅から徒歩5分のNICE CREW周辺地図" width="750" height="800" />
            <p class="nicecrew-message__text">
                素敵な仲間が集う場所、一人ではできないことでも、<br class="pc-only" />みんなでなら想いをカタチにしていける、<br
                    class="pc-only" />それが店名の「NICECREW」への想いです。<br />
                学生の皆さまも、おしゃれを楽しむ大人の方々も年齢問わず、<br class="pc-only" />「こんなデザイン作れる?」というご相談はもちろん、<br
                    class="pc-only" />店舗ブランディングなどの目的に応じて、<br class="pc-only" />仲間の証にもなるオリジナルウェアを作成します。<br />
                皆さんの日常を少しだけおもしろくするお手伝いをさせてください。
            </p>
        </div>
    </section>

    <!-- PRINTING METHOD -->
    <section class="nicecrew-method dtf-quality">
        <div class="nicecrew-method__inner dtf-quality__inner lp-inner">
            <h2 class="ttl-06">
                <span class="ttl-06__en">PRINTING METHOD</span>
                <span class="ttl-06__jp">プリント方式について</span>
            </h2>
            <ul class="nicecrew-method__list dtf-quality__list">
                <li class="nicecrew-method__item dtf-quality__item">
                    <div class="nicecrew-method__img dtf-quality__item-img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-method-img01.webp"
                            alt="ハイビスカスを高精細にプリントした生地" width="1096" height="664" loading="lazy" />
                    </div>
                    <div class="nicecrew-method__body dtf-quality__item-body">
                        <h3 class="nicecrew-method__ttl dtf-quality__item-ttl">
                            <span>DTF転写プリントによる</span><br />
                            <span>高精細な仕上がり</span>
                        </h3>
                        <p class="nicecrew-method__text dtf-quality__item-text">
                            NICE
                            CREWでは、フィルムへの転写を経て高精細に仕上げる「DTF印刷」という方式を採用しています。<br />専用インクや加工の詳細は、DTF印刷ページでご確認いただけます。
                        </p>
                        <!-- NICE CREWボタン：中身は後から入れる -->
                        <div class="nicecrew-method__btn">
                            <a href="<?php echo esc_url(home_url('/service/printing/dtf')); ?>" class="btn btn--white">
                                <span class="btn__text">DTF印刷について<br class="mobile" />詳しく見る</span>
                                <span class="btn__icon">
                                    <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                                            fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section class="nicecrew-products">
        <div class="nicecrew-products__inner lp-inner">
            <h2 class="ttl-06">
                <span class="ttl-06__en">PRODUCTS</span>
                <span class="ttl-06__jp">取り扱い商品</span>
            </h2>
            <p class="nicecrew-products__text">
                NICE
                CREWオリジナルの紙雑貨・アパレルに加え、地域のクリエイターと共同制作した雑貨やZINEも取り扱っています。<br />「自分でも作ってみたい」という方のご相談・サポートも行っています。
            </p>
            <ul class="nicecrew-products__list">
                <li class="nicecrew-products__item">
                    <p class="nicecrew-products__item-name">
                        オリジナルノート・<br />カード類
                    </p>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-products-img02.webp"
                        alt="" loading="lazy" />
                </li>
                <li class="nicecrew-products__item">
                    <p class="nicecrew-products__item-name">
                        オリジナルTシャツ・<br />トートバッグ
                    </p>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-products-img02.webp"
                        alt="" loading="lazy" />
                </li>
                <li class="nicecrew-products__item">
                    <p class="nicecrew-products__item-name">
                        地域クリエイター<br class="mobile" />との<br class="desktop" />コラボ雑貨
                    </p>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-products-img02.webp"
                        alt="NICE CREWと書かれた白いTシャツと黒いTシャツ" loading="lazy" />
                </li>
                <li class="nicecrew-products__item">
                    <p class="nicecrew-products__item-name">
                        ZINE<br class="mobile" />
                        （自主制作物）
                    </p>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-products-img02.webp"
                        alt="" loading="lazy" />
                </li>
            </ul>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-02 cta-02--nicecrew">
        <div class="cta-02__main-img">
            <picture>
                <source
                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-cta-img01-sp.webp"
                    media="(max-width: 768px)" />
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-cta-img01.webp"
                    alt="NICE CREW店内に展示されたオリジナルウェアとグッズ" width="1440" height="748" loading="lazy" />
            </picture>
        </div>
        <img class="cta-02__deco cta-02__deco--01"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo01.svg" alt=""
            width="835" height="366" />
        <img class="cta-02__deco cta-02__deco--02"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dtf/cta-02-logo02.svg" alt=""
            width="385" height="200" />
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
                        <a href="https://lin.ee/8xNK86v" target="_blank" class="btn-03 btn-03--line">
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

    <!-- ACCESS -->
    <section class="nicecrew-access">
        <section class="nicecrew-access__shop">
            <div class="nicecrew-access__info-inner lp-inner">
                <h2 class="ttl-06">
                    <span class="ttl-06__en">ACCESS</span>
                    <span class="ttl-06__jp">アクセス</span>
                </h2>
                <div class="nicecrew-access__info">
                    <h3 class="nicecrew-access__name">NICE CREW（彦根営業所）</h3>
                    <p class="nicecrew-access__route">
                        JR・近江鉄道彦根駅西口から徒歩6分
                    </p>
                    <address class="nicecrew-access__address">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-access-icon.webp"
                            alt="" width="24" height="24" />
                        <span>〒522-0075 <br class="mobile" />
                            滋賀県彦根市佐和町6-14 伊藤ビル1F</span>
                    </address>
                    <figure class="nicecrew-access__landmark">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nicecrew/nicecrew-access-img01.webp"
                            alt="NICE CREW店舗の看板" width="698" height="452" loading="lazy" />
                        <figcaption class="nicecrew-access__landmark-caption">
                            ↑この看板が目印です。
                        </figcaption>
                    </figure>
                </div>
                <div class="nicecrew-access__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3257.3056847127027!2d136.25710887480145!3d35.27352535226437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003d4ce8b84a507%3A0x692550afc3eb1a7c!2z44CSNTIyLTAwNzUg5ruL6LOA55yM5b2m5qC55biC5L2Q5ZKM55S677yW4oiS77yR77yUIOS8iuiXpOODk-ODqyAxZg!5e0!3m2!1sja!2sjp!4v1790834886631!5m2!1sja!2sjp"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </section>

        <div class="lp-inner nicecrew-access__satellite-wrap">
            <section class="nicecrew-access__satellite">
                <div class="nicecrew-access__satellite-inner lp-inner">
                    <h3 class="nicecrew-access__satellite-ttl">
                        彦根経済新聞<br class="mobile" />
                        サテライト拠点
                    </h3>
                    <p class="nicecrew-access__satellite-text">
                        NICE
                        CREWは、地域密着型ニュースサイト「彦根経済新聞」のサテライト拠点も兼ねています。<br />取材依頼や広報・PRのご相談も店舗でお受けしています。
                    </p>
                    <!-- NICE CREWボタン：中身は後から入れる -->
                    <div class="nicecrew-access__btn">
                        <a href="<?php echo esc_url(home_url('/service/newspaper')); ?>" class="btn btn--white">
                            <span class="btn__text">彦根経済新聞について<br class="mobile" />詳しく見る</span>
                            <span class="btn__icon">
                                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                                        fill="white"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div class="component-box section">
        <div class="component-box-item">
            <div class="link-01-component">
                <div class="link-01-head">
                    <h3 class="link-01-title">SERVICE</h3>
                    <a href="<?php echo esc_url(home_url('/service')); ?>" class="link-01-link">
                        <?php get_template_part('template-parts/parts/link-01-link-icon'); ?>
                        <span class="link-01-link-text">サービストップへ戻る</span>
                    </a>
                </div>
                <div class="btn-list-01">
                    <a href="<?php echo esc_url(home_url('/service/printing')); ?>" class="btn-02">
                        <span class="btn__text btn__text--branding">印刷</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/service/degital')); ?>" class="btn-02">
                        <span class="btn__text">デジタル</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/service/newspaper')); ?>" class="btn-02">
                        <span class="btn__text">彦根経済新聞</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/service/branding')); ?>" class="btn-02">
                        <span class="btn__text btn__text--newspaper">ブランディング</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/promotion/')); ?>" class="btn-02">
                        <span class="btn__text">プロモーション</span>
                        <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_template_part('template-parts/footer'); ?>