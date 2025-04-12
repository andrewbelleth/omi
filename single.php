<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="page__head page__head--breadcrumb">
    <div class="page__head-inner">
        <div class="breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
</div>
<div class="page-single">
    <?php
    $categories = get_the_category();
    ?>
    <article class="article">
        <div class="article__meta">
            <p class="article__date"><?php echo get_the_date('Y/m/d'); ?></p>
            <p class="article__cat">
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </p>
        </div>
        <h1 class="article__title"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <figure class="article__thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </figure>
        <?php endif; ?>
        <div class="article__text">
            <?php the_content(); ?>
        </div>
        <a href="<?php echo home_url('/news'); ?>" class="btn btn--reverce">
            <span class="btn__icon">
                <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.60423 3.37382L10.0535 4.865L4.80201 10.1165L21.4553 10.1165L21.4553 12.179L4.80201 12.179L10.0535 17.4304L8.60423 18.9216L0.830323 11.1477L8.60423 3.37382Z"
                        fill="#0068B6" />
                </svg>
            </span>
            <span class="btn__text">一覧へ戻る</span>
        </a>
    </article>
</div>
<?php get_template_part('template-parts/footer'); ?>