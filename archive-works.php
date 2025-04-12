<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 実績一覧ページ
*/

// 検索結果
$get_works_cat = get_query_var('works-cat');

?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'WORKS',
    'title_jp' => '制作実績',
]); ?>
<div class="page-works section">
    <button class="page-works__popup-btn popup__open">
        <span class="page-works__popup-btn-text">カテゴリで絞り込む</span>
        <span class="page-works__popup-btn-icon">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.5222 19L10.8722 12.35C10.3444 12.7722 9.7375 13.1065 9.05139 13.3528C8.36528 13.5991 7.63519 13.7222 6.86111 13.7222C4.94352 13.7222 3.3206 13.0581 1.99236 11.7299C0.66412 10.4016 0 8.7787 0 6.86111C0 4.94352 0.66412 3.3206 1.99236 1.99236C3.3206 0.66412 4.94352 0 6.86111 0C8.7787 0 10.4016 0.66412 11.7299 1.99236C13.0581 3.3206 13.7222 4.94352 13.7222 6.86111C13.7222 7.63519 13.5991 8.36528 13.3528 9.05139C13.1065 9.7375 12.7722 10.3444 12.35 10.8722L19 17.5222L17.5222 19ZM6.86111 11.6111C8.18056 11.6111 9.30208 11.1493 10.2257 10.2257C11.1493 9.30208 11.6111 8.18056 11.6111 6.86111C11.6111 5.54167 11.1493 4.42014 10.2257 3.49653C9.30208 2.57292 8.18056 2.11111 6.86111 2.11111C5.54167 2.11111 4.42014 2.57292 3.49653 3.49653C2.57292 4.42014 2.11111 5.54167 2.11111 6.86111C2.11111 8.18056 2.57292 9.30208 3.49653 10.2257C4.42014 11.1493 5.54167 11.6111 6.86111 11.6111Z"
                    fill="#282828" />
            </svg>
        </span>
    </button>
    <ul class="page-works__list card__list card__list--works">
        <?php
        $paged = get_query_var('page') ? get_query_var('page') : 1;
        $args = array(
            'post_type' => 'works',
            'posts_per_page' => -1,
            'paged' => $paged,
        );

        if ($get_works_cat) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'works-cat',
                    'field' => 'slug',
                    'terms' => $get_works_cat,
                ),
            );
        }

        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post();
                $the_id = $query->post->ID;
                $categories = get_the_terms($the_id, 'works-cat');
                $tags = get_the_terms($the_id, 'works-tag');
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                        </div>
                        <p class="date"><?php echo get_the_date('Y'); ?></p>
                        <h3 class="title"><?php the_title(); ?></h3>
                        <p class="expert">
                            <?php the_excerpt(); ?>
                        </p>
                        <div class="meta">
                            <?php if ($categories) : ?>
                                <p class="cat">
                                    <?php foreach ($categories as $category) : ?>
                                        <span><?php echo $category->name; ?></span>
                                    <?php endforeach; ?>
                                </p>
                            <?php endif; ?>
                        </div>
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
    <div class="popup">
        <div class="popup__body">
            <button class="popup__close">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/close.png" alt="">
            </button>
            <form method="get" class="popup__content" action="<?php echo home_url('/works'); ?>">
                <div class="popup__head">
                    <h2 class="popup__title">CATEGORY</h2>
                    <p class="popup__subTitle">カテゴリーで絞り込む</p>
                </div>
                <!-- <div class="popup__tag-list-inner" data-simplebar data-simplebar-auto-hide="false"> -->
                <ul class="popup__tag-list">
                    <?php
                    $categories = get_terms('works-cat');
                    ?>
                    <?php foreach ($categories as $category) : ?>
                        <li>
                            <input type="checkbox" name="works-cat[]" id="<?php echo $category->slug; ?>" value="<?php echo $category->slug; ?>">
                            <label for="<?php echo $category->slug; ?>"><?php echo $category->name; ?></label>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!-- </div> -->
                <button class="btn popup__btn" type="submit">
                    <span class="btn__text popup__btn-text">絞り込む</span>
                    <span class="btn__icon popup__btn-icon">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5222 19L10.8722 12.35C10.3444 12.7722 9.7375 13.1065 9.05139 13.3528C8.36528 13.5991 7.63519 13.7222 6.86111 13.7222C4.94352 13.7222 3.3206 13.0581 1.99236 11.7299C0.66412 10.4016 0 8.7787 0 6.86111C0 4.94352 0.66412 3.3206 1.99236 1.99236C3.3206 0.66412 4.94352 0 6.86111 0C8.7787 0 10.4016 0.66412 11.7299 1.99236C13.0581 3.3206 13.7222 4.94352 13.7222 6.86111C13.7222 7.63519 13.5991 8.36528 13.3528 9.05139C13.1065 9.7375 12.7722 10.3444 12.35 10.8722L19 17.5222L17.5222 19ZM6.86111 11.6111C8.18056 11.6111 9.30208 11.1493 10.2257 10.2257C11.1493 9.30208 11.6111 8.18056 11.6111 6.86111C11.6111 5.54167 11.1493 4.42014 10.2257 3.49653C9.30208 2.57292 8.18056 2.11111 6.86111 2.11111C5.54167 2.11111 4.42014 2.57292 3.49653 3.49653C2.57292 4.42014 2.11111 5.54167 2.11111 6.86111C2.11111 8.18056 2.57292 9.30208 3.49653 10.2257C4.42014 11.1493 5.54167 11.6111 6.86111 11.6111Z"
                                fill="#0068B6" />
                        </svg>
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/footer'); ?>