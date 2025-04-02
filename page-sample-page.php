<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: サイトマップ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<main>
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