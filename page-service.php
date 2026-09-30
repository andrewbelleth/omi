<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>

<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'SERVICE',
    'title_jp' => 'サービス',
]); ?>
<div class="page-wrapper mt120--sp96">
    <div class="page__service-head">
        <div class="page__service-head-inner">
            <div class="page__service-head-image">
                <picture>
                    <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/service/service-graph-image-sp.webp" media="(max-width: 768px)">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/service/service-graph-image.webp"
                        alt="企画・制作・製造・物流のサイクルと、印刷・Web・プロモーション・デジタル・SNS・DX・業務改善で「伝える」を支える近江印刷のサービス図"
                        width="1440"
                        height="1424"
                        loading="eager"
                        decoding="sync">
                </picture>
            </div>
            <div class="page__service-head-text">
                <div class="page__service-head-text-body">
                    <div class="page__service-head-text-block">
                        <p>私たち近江印刷の起源は、創業者里西龍太郎が創刊したミニコミ誌近江タイムスで、<span class="page__service-head-mark">情報を人びとに「伝える」ために</span>生まれました。</p>
                        <p>それから70年以上、私たちは様々な情報を「伝える」ための印刷物を作り続けてきました。<br aria-hidden="true">現在、情報伝達の手段は、時代の変化とともに多種多様に広がり続けています。媒体も手法も様々です。</p>
                    </div>
                    <p>その変化に伴い、私たちのサービスも媒体の垣根を超えて広がり続けます。<br aria-hidden="true"><span class="page__service-head-mark">なぜなら、私たち近江印刷の使命は、創業当時からずっとかわらず、「伝える」を支えることだから。</span><br aria-hidden="true">近江印刷はこれからも、守るべきものは守り、変えるべきものは変えながら、進化しつづけます。</p>
                </div>
            </div>
        </div>
    </div>
    <?php
    $omi_theme_uri = get_template_directory_uri();
    $omi_service_btn_icon = static function () {
        ?>
        <span class="btn__icon" aria-hidden="true">
            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" width="23" height="23">
                <path d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z" fill="#0068B6" />
            </svg>
        </span>
        <?php
    };
    $omi_service_items = [
        [
            'num' => '01',
            'title' => '印刷',
            'slug' => 'printing',
            'image' => 'service-item-image-01',
            'alt' => '印刷機で作業する様子',
            'texts' => [
                '制作から印刷・加工・製本・納品までを自社で一貫対応。商業印刷から特殊印刷まで幅広く手がけ、封入封緘や発送などの付属業務も代行します。',
                '入稿データのご不安な点も、専門スタッフが丁寧にサポートします。',
            ],
            'tags' => '広報誌 / 定期刊行物 / 冊子 / チラシ / ポスター / 伝票・帳票 / DMハガキ / 新聞 / 名刺 / 封筒 / ノベルティグッズ / 看板 / パッケージ / カード / メニュー表 / シール / オリジナルウェア / その他',
            'url' => home_url('/service/printing'),
            'links' => [
                [
                    'title' => '取扱品目',
                    'text' => 'お客さまの用途に適した印刷物を制作いたします。',
                    'url' => home_url('/service/printing/products'),
                ],
                [
                    'title' => '加工',
                    'text' => '印刷物に付加価値をプラスした高品質な製品をご提供します。',
                    'url' => home_url('/service/printing/processing'),
                ],
                [
                    'title' => '製本',
                    'text' => '製品の用途やご希望に合わせてさまざまな製本方法に対応します。',
                    'url' => home_url('/service/printing/bookbinding'),
                ],
                [
                    'title' => 'DTF印刷',
                    'text' => 'Tシャツやトートバッグ、パーカーなどのアイテムへの加工が可能です。',
                    'url' => home_url('/service/printing/dtf'),
                ],
            ],
        ],
        [
            'num' => '02',
            'title' => 'デジタル',
            'slug' => 'degital',
            'image' => 'service-item-image-02',
            'alt' => 'ノートPCと資料を使って作業する様子',
            'texts' => [
                'Webサイト制作やプロモーション動画、SNS運用など、デジタル分野に幅広く対応します。',
                '印刷業で培ったノウハウを活かし、紙とデジタルを組み合わせた情報発信をご提案します。',
            ],
            'tags' => 'Webサイト / プロモーション動画 / WebBook / Web広告 / SNS / 360°VR',
            'url' => home_url('/service/degital'),
        ],
        [
            'num' => '03',
            'title' => '彦根経済新聞',
            'slug' => 'newspaper',
            'image' => 'service-item-image-03',
            'alt' => '彦根経済新聞のロゴ',
            'texts' => [
                '2022年7月に公開をスタートした地地域密着型のニュースサイトです。',
                '「まちの記録係」として、彦根市・犬上郡・愛知郡のビジネス、イベント、カルチャーなどを取材しお届けしています。編集部は「地元が大好きな記者」で構成されています。',
            ],
            'tags' => '新店オープン / 新サービス / 周年記念 / イベント情報 / レポート記事 / 特集ページ / 広告記事 / バナー広告',
            'url' => home_url('/service/newspaper'),
        ],
        [
            'num' => '04',
            'title' => 'ブランディング',
            'slug' => 'branding',
            'image' => 'service-item-image-04',
            'alt' => 'カラーサンプルを見ながら打ち合わせする様子',
            'texts' => [
                'ブランドとは、選ばれ続けるための資産です。強みや個性を見極め、一貫したイメージを築くことで、消費者に選ばれる仕組みをつくります。',
                '経営戦略と連動したブランディングをご提案します。',
            ],
            'tags' => 'ファンを増やす / 惹き付ける仕組み / デザインの可視化 / コンセプトと計画 / 課題のシェア',
            'url' => home_url('/service/branding'),
        ],
        [
            'num' => '05',
            'title' => 'プロモーション',
            'slug' => 'promotion',
            'image' => 'service-item-image-05',
            'alt' => '資料を囲んで打ち合わせする様子',
            'texts' => [
                'お客様の目的に合わせて、販促・集客から採用・シティプロモーションまでトータルサポート。',
                'アナログとデジタル双方の強みを組み合わせたご提案が可能です。',
            ],
            'tags' => '店頭プロモーション / 採用プロモーション / 企業プロモーション / シティープロモーション',
            'url' => home_url('/service/promotion'),
        ],
        [
            'num' => '06',
            'title' => 'NICE CREW',
            'slug' => 'nice-crew',
            'image' => 'service-item-image-06',
            'alt' => 'NICE CREWのロゴ',
            'texts' => [
                '彦根市役所前の「NICE CREW」は、お客様と近い距離でつながる拠点です。',
                'DTF転写プリントによるオリジナルウェア・グッズの制作・販売、広報のご相談に対応。彦根経済新聞のサテライト拠点も兼ねています。',
            ],
            'tags' => 'オリジナルウェア・オリジナルグッズの制作 / オリジナルグッズ販売 / 広報・PR支援業務（相談） / 彦根経済新聞サテライトなど',
            'url' => home_url('/service/nice-crew'),
        ],
    ];
    ?>
    <div class="page__service-content">
        <div class="page__service-content-inner">
            <?php foreach ($omi_service_items as $item) : ?>
                <article class="page__service-item page__service-item--<?php echo esc_attr($item['slug']); ?>">
                    <div class="page__service-item-main">
                        <div class="page__service-item-image">
                            <picture>
                                <source srcset="<?php echo esc_url($omi_theme_uri); ?>/assets/images/service/<?php echo esc_attr($item['image']); ?>-sp.webp" media="(max-width: 768px)" width="750" height="366">
                                <img
                                    src="<?php echo esc_url($omi_theme_uri); ?>/assets/images/service/<?php echo esc_attr($item['image']); ?>.webp"
                                    alt="<?php echo esc_attr($item['alt']); ?>"
                                    width="1000"
                                    height="880"
                                    loading="lazy"
                                    decoding="async">
                            </picture>
                        </div>
                        <div class="page__service-item-body">
                            <div class="page__service-item-body-inner">
                                <div class="page__service-item-head">
                                    <span class="page__service-item-num"><?php echo esc_html($item['num']); ?></span>
                                    <h2 class="page__service-item-title"><?php echo esc_html($item['title']); ?></h2>
                                </div>
                                <div class="page__service-item-text">
                                    <?php foreach ($item['texts'] as $text) : ?>
                                        <p><?php echo esc_html($text); ?></p>
                                    <?php endforeach; ?>
                                </div>
                                <div class="page__service-item-tags">
                                    <p><?php echo esc_html($item['tags']); ?></p>
                                </div>
                            </div>
                            <a href="<?php echo esc_url($item['url']); ?>" class="btn">
                                <span class="btn__text">詳しく見る</span>
                                <?php $omi_service_btn_icon(); ?>
                            </a>
                        </div>
                    </div>
                    <?php if (! empty($item['links'])) : ?>
                        <ul class="page__service-item-links">
                            <?php foreach ($item['links'] as $link) : ?>
                                <li class="page__service-item-links-item">
                                    <a href="<?php echo esc_url($link['url']); ?>" class="page__service-item-link">
                                        <span class="page__service-item-link-body">
                                            <span class="page__service-item-link-title"><?php echo esc_html($link['title']); ?></span>
                                            <span class="page__service-item-link-text"><?php echo esc_html($link['text']); ?></span>
                                        </span>
                                        <span class="page__service-item-link-icon" aria-hidden="true">
                                            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                                <path d="M12.0928 16.6186L10.8412 15.3307L15.3765 10.7954H0.994141V9.01412H15.3765L10.8412 4.47876L12.0928 3.19092L18.8066 9.90475L12.0928 16.6186Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="component-box-item section">
        <div class="link-01-component">
            <div class="link-01-head">
                <h3 class="link-01-title">SERVICE</h3>
            </div>
            <div class="btn-list-01">
                <a href="<?php echo esc_url(home_url('/printing')); ?>" class="btn-02">
                    <span class="btn__text">印刷</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/degital')); ?>" class="btn-02">
                    <span class="btn__text">デジタル</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/newspaper')); ?>" class="btn-02">
                    <span class="btn__text btn__text--newspaper">彦根経済新聞</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/branding')); ?>" class="btn-02">
                    <span class="btn__text btn__text--branding">ブランディング</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/promotion')); ?>" class="btn-02">
                    <span class="btn__text btn__text--promotion">プロモーション</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/nice-crew')); ?>" class="btn-02">
                    <span class="btn__text">NICE CREW</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/footer'); ?>