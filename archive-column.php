<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: コラム一覧ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'COLUMN',
    'title_jp' => 'コラム',
]); ?>
<div class="page-works-archive section">
    <ul class="page-works__list card__list card__list--works">
        <?php
        $paged = get_query_var('page') ? get_query_var('page') : 1;
        $args = array(
            'post_type' => 'column',
            'posts_per_page' => -1,
            'paged' => $paged,
        );

        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post();
                $the_id = $query->post->ID;
                $categories = get_the_terms($the_id, 'column-cat');
                $tags = get_the_terms($the_id, 'column-tag');
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                        </div>
                        <div class="meta">
                            <?php if ($categories) : ?>
                                <p class="cat">
                                    <?php foreach ($categories as $category) : ?>
                                        <span><?php echo $category->name; ?></span>
                                    <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                            <p class="date"><?php echo get_the_date('Y年'); ?></p>
                        </div>
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p class="expert">
                            <?php the_excerpt(); ?>
                        </p>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    <div class="pagenavi">
        <?php wp_pagenavi([
            'query' => $query,
        ]);
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_template_part('template-parts/footer'); ?>