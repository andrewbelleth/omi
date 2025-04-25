<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: サイトマップ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<main>
    <div class="top-service" id="service">
        <div class="top-service__head section__head">
            <h2 class="section__title inview">
                <span class="section__title--en">SERVICE</span>
                <span class="section__title--jp">サービス</span>
            </h2>
        </div>
        <div class="top-service__img-sticky-wrap js-sticky">
            <div class="top-service__img-sticky">
                <div class="swiper-container vertical-slider">
                    <div class="swiper-wrapper vertical-slider__wrapper">
                        <div class="swiper-slide vertical-slider__slide top-service__item-slide js-sticky-img">
                            <div class="top-service__item-slide-inner _cover">
                                <div class="top-service__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_service-img01.webp" alt="" width="529" height="573">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide vertical-slider__slide top-service__item-slide js-sticky-img">
                            <div class="top-service__item-slide-inner _cover">
                                <div class="top-service__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_service-img02.webp" alt="" width="529" height="573">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide vertical-slider__slide top-service__item-slide js-sticky-img">
                            <div class="top-service__item-slide-inner _cover">
                                <div class="top-service__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_service-img03.webp" alt="" width="529" height="573">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide vertical-slider__slide top-service__item-slide js-sticky-img">
                            <div class="top-service__item-slide-inner _cover">
                                <div class="top-service__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_service-img04.webp" alt="" width="529" height="573">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide vertical-slider__slide top-service__item-slide js-sticky-img">
                            <div class="top-service__item-slide-inner _cover">
                                <div class="top-service__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_service-img05.webp" alt="" width="529" height="573">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-service__list">
                <div class="top-service__item inview">
                    <div class="top-service__item-slide _image mobile">
                        <div class="top-service__item-slide-inner _cover">
                            <div class="top-service__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sp/sample_service-img01.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="top-service__item-body js-sticky-text">
                        <div class="top-service__item-content">
                            <h3 class="top-service__item-title inview"><span class="top-service__item-num">01</span><span class="top-service__item-title-text">印刷</span></h3>
                            <div class="top-service__item-text inview">
                                <p>制作から印刷・製本・加工・納品までを自社完結し、商業印刷から事務印刷、特殊印刷まで幅広く対応しているため、お客さまの用途に適した印刷物を制作することができます。</p>
                                <p>自社工場に取り揃えた豊富な設備により、さまざまな加工で印刷物に付加価値を与えることも可能です。区分け・封入封緘や発送等の付属業務も代行いたします。</p>
                                <p>入稿時のデータに関することや、色チェックなど、不安な点も専門スタッフが丁寧にご説明しますので、ご安心ください。</p>
                            </div>
                            <div class="top-service__item-tag inview">
                                <p>広報誌 / 定期刊行物 / 冊子 / チラシ / ポスター / 伝票・帳票 / DMハガキ / 新聞 / 名刺 / 封筒 / ノベルティグッズ / 看板 / パッケージ
                                    / カード / メニュー表 / シール / その他</p>
                            </div>
                            <a href="<?php echo home_url(); ?>/service/printing" class="btn inview">
                                <span class="btn__text">詳しく見る</span>
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
                </div>
                <div class="top-service__item inview">
                    <div class="top-service__item-slide _image mobile">
                        <div class="top-service__item-slide-inner _cover">
                            <div class="top-service__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sp/sample_service-img02.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="top-service__item-body js-sticky-text">
                        <div class="top-service__item-content">
                            <h3 class="top-service__item-title inview"><span class="top-service__item-num">02</span><span class="top-service__item-title-text">デジタル</span></h3>
                            <div class="top-service__item-text inview">
                                <p>印刷業で培ったノウハウと経験を活かし、お客様の販売促進活動を効果的にサポートします。</p>
                                <p>情報メディアの多様化により、消費者との接点がデジタル領域へと広がる中、アナログとデジタルの双方向からのプロモーション展開により、顧客獲得までのさまざまなアプローチをご提案いたします。
                                </p>
                                <p>アナログプロモーションとデジタルプロモーションはそれぞれメリットとデメリットがあり、双方を組み合わせて展開することで相乗効果が見込めます。</p>
                            </div>
                            <div class="top-service__item-tag inview">
                                <p>Webサイト / プロモーション動画 / WebBook / Web広告 / SNS / 360°VR</p>
                            </div>
                            <a href="<?php echo home_url(); ?>/service/degital/" class="btn inview">
                                <span class="btn__text">詳しく見る</span>
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
                </div>
                <div class="top-service__item inview">
                    <div class="top-service__item-slide _image mobile">
                        <div class="top-service__item-slide-inner _cover">
                            <div class="top-service__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sp/sample_service-img03.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="top-service__item-body js-sticky-text">
                        <div class="top-service__item-content">
                            <h3 class="top-service__item-title inview"><span class="top-service__item-num">03</span><span class="top-service__item-title-text">彦根経済新聞</span></h3>
                            <div class="top-service__item-text inview">
                                <p>2022年7月に公開をスタートした地地域密着型のニュースサイトです。</p>
                                <p>「まちの記録係」として、彦根市・犬上郡・愛知郡のビジネス、イベント、カルチャーなどを取材しお届けしています。</p>
                                <p>編集部は「地元が大好きな記者」で構成されています。</p>
                            </div>
                            <div class="top-service__item-tag inview">
                                <p>新店オープン / 新サービス / 周年記念 / イベント情報 / レポート記事 / 特集ページ / 広告記事 / バナー広告</p>
                            </div>
                            <a href="<?php echo home_url(); ?>/service/newspaper" class="btn inview">
                                <span class="btn__text">詳しく見る</span>
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
                </div>
                <div class="top-service__item inview">
                    <div class="top-service__item-slide _image mobile">
                        <div class="top-service__item-slide-inner _cover">
                            <div class="top-service__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sp/sample_service-img04.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="top-service__item-body js-sticky-text">
                        <div class="top-service__item-content">
                            <h3 class="top-service__item-title inview"><span class="top-service__item-num">04</span><span class="top-service__item-title-text">ブランディング</span></h3>
                            <div class="top-service__item-text inview">
                                <p>“ブランドとは資産である”</p>
                                <p>ブランドとは、有名、無名、規模の大小に関わらず、消費者が特定の会社や商品、サービスとして識別する、そのイメージのことを指します。</p>
                                <p>ブランディングとは、ブランドの「らしさ」「持ち味」「魅力」を突き詰めてイメージを定め、その価値をターゲットである消費者に感じてもらい、ファンをふやすための活動のことです。</p>
                                <p>つまりそれは、売れ続ける仕組みづくり。マーケティング戦略とともに、経営戦略から一貫して計画、実行していくことで、会社や商品、サービスが、多くの中から選ばれる存在になるのです。</p>
                            </div>
                            <div class="top-service__item-tag inview">
                                <p>ファンを増やす / 惹き付ける仕組み / デザインの可視化 / コンセプトと計画 / 課題のシェア</p>
                            </div>
                            <a href="<?php echo home_url(); ?>/service/branding" class="btn inview">
                                <span class="btn__text">詳しく見る</span>
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

                </div>
                <div class="top-service__item inview">
                    <div class="top-service__item-slide _image mobile">
                        <div class="top-service__item-slide-inner _cover">
                            <div class="top-service__item-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sp/sample_service-img05.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="top-service__item-body js-sticky-text">
                        <div class="top-service__item-content">
                            <h3 class="top-service__item-title inview"><span class="top-service__item-num">05</span><span class="top-service__item-title-text">プロモーション</span></h3>
                            <div class="top-service__item-text inview">
                                <p>お客様のニーズを捉えた成果につながるプロモーションをトータルサポート。</p>
                                <p>私たちは、印刷業で培ったノウハウと経験を活かし、お客様の販売促進活動を効果的にサポートいたします。</p>
                                <p>情報メディアの多様化により、消費者との接点がデジタル領域へと広がる中、アナログとデジタルの双方向からのプロモーション展開により、顧客獲得までの様々なアプローチが可能です。</p>
                                <p>アナログプロモーションとデジタルプロモーションはそれぞれメリットとデメリットがあり、双方を組み合わせて展開することで相乗効果が見込めます。</p>
                            </div>
                            <div class="top-service__item-tag inview">
                                <p>店頭プロモーション / 採用プロモーション / 企業プロモーション / シティープロモーション</p>
                            </div>
                            <a href="<?php echo home_url(); ?>/service/promotion" class="btn inview">
                                <span class="btn__text">詳しく見る</span>
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

                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'SITEMAP',
        'title_jp' => 'サイトマップ',
    ]); ?>
    <style>
        .sitemap-wrapper {
            padding-block: 4rem;
        }

        .sitemap-section {
            margin-bottom: 3rem;
        }

        .sitemap-section__title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #000;
        }

        .sitemap-list {
            padding-left: 1.5rem;
        }

        .sitemap-list__item {
            margin-bottom: 1rem;
        }

        .sitemap-list__item a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .sitemap-list__item a:hover {
            color: #0066cc;
        }

        .sitemap-list__child {
            padding-left: 2rem;
            margin-top: 0.5rem;
        }
    </style>

    <div class="page section">
        <div class="sitemap-wrapper">
            <?php
            // 固定ページの取得
            $pages = get_pages(array(
                'sort_column' => 'menu_order',
                'sort_order' => 'ASC'
            ));

            // 親ページごとにグループ化
            $page_tree = array();
            foreach ($pages as $page) {
                if ($page->post_parent == 0) {
                    // 親ページの場合
                    $page_tree[] = array(
                        'page' => $page,
                        'children' => array()
                    );
                } else {
                    // 子ページの場合
                    foreach ($page_tree as &$parent_item) {
                        if ($parent_item['page']->ID == $page->post_parent) {
                            $parent_item['children'][] = $page;
                            break;
                        }
                    }
                }
            }

            // ツリー構造で表示
            foreach ($page_tree as $item): ?>
                <div class="sitemap-section">
                    <h2 class="ttl-01">
                        <?php echo esc_html($item['page']->post_title); ?>
                    </h2>
                    <ul class="sitemap-list">
                        <li class="sitemap-list__item">
                            <a class="ttl-02 ttl-02--triangle mt24" href="<?php echo esc_url(get_permalink($item['page']->ID)); ?>">
                                <?php echo esc_html($item['page']->post_title); ?>
                            </a>
                            <?php if (!empty($item['children'])): ?>
                                <ul class="sitemap-list__child">
                                    <?php foreach ($item['children'] as $child): ?>
                                        <li class="sitemap-list__item">
                                            <a class="ttl-02 ttl-02--round mt24" href="<?php echo esc_url(get_permalink($child->ID)); ?>">
                                                <?php echo esc_html($child->post_title); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
            <h2>
                <a class="ttl-01" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
            </h2>
            <h2>
                <a class="ttl-01" href="<?php echo esc_url(home_url('/works')); ?>">実績</a>
                </h3>
        </div>
    </div>
</main>
<?php get_template_part('template-parts/footer'); ?>