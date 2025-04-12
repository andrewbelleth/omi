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
<div class="page-single single--works">
    <?php
    $categories = get_the_terms($post->ID, 'works-cat');
    $tags = get_the_terms($post->ID, 'works-tag');
    $external_link = get_field('works-link');
    ?>
    <article class="article article--works">
        <?php if (has_post_thumbnail()) : ?>
            <figure class="article__thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </figure>
        <?php endif; ?>
        <h1 class="article__title"><?php the_title(); ?></h1>
        <?php if ($tags) : ?>
            <ul class="article__tag-list">
                <?php foreach ($tags as $tag) : ?>
                    <li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="article__text">
            <?php the_content(); ?>
        </div>

        <?php if ($external_link) : ?>
            <a href="<?php echo $external_link; ?>" class="article__btn">
                <span class="article__btn-text">
                    外部ボタンリンク
                </span>
                <span class="article__btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                        <path
                            d="M11.6924 16.2182L10.4408 14.9303L14.9762 10.395H0.59375V8.61373H14.9762L10.4408 4.07837L11.6924 2.79053L18.4062 9.50436L11.6924 16.2182Z"
                            fill="#282828" />
                    </svg>
                </span>
            </a>
        <?php endif; ?>

        <a href="<?php echo home_url('/works'); ?>" class="btn btn--reverce">
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