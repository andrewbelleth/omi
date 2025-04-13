<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'NEWS',
    'title_jp' => 'お知らせ',
    'breadcrumb' => 'お知らせ',
]); ?>
<div class="page-news section section__col">
    <div class="page-news__side section__side section__side--news">
        <h3>カテゴリ</h3>
        <ul>
            <li><a href="<?php echo home_url(); ?>/news">全て</a></li>
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <ul class="page-news__list post__list section__main">
        <?php
        // メインループ
        if (have_posts()) : while (have_posts()) : the_post();
                $cat = get_the_category();
                $cat_name = $cat[0]->name;
        ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <p class="date"><?php echo get_the_date('Y/m/d'); ?></p>
                        <p class="cat"><?php echo $cat_name; ?></p>
                        <p class="title"><?php the_title(); ?><span class="icon"></span></p>
                    </a>
                </li>
        <?php endwhile;
        endif; ?>
    </ul>
</div>
<div class="pagenavi">
    <?php wp_pagenavi(); ?>
</div>
<?php get_template_part('template-parts/footer'); ?>