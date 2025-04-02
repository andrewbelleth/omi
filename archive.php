<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<main>
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'NEWS',
        'title_jp' => 'お知らせ',
    ]); ?>
    <div class="page-news section">
        <div class="page-news__side">
            <h3>カテゴリ</h3>
            <ul>
                <li><a href="">全て</a></li>
                <li><a href="">お知らせ</a></li>
                <li><a href="">求人</a></li>
                <li><a href="">制作実績更新</a></li>
                <li><a href="">リリース情報</a></li>
                <li><a href="">コラム</a></li>
            </ul>
        </div>
        <ul class="page-news__list post__list">
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
            <?php endwhile; endif; ?>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">お知らせ</p>
                    <p class="title">
                        ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。<span
                            class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">求人</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">お知らせ</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span>
                    </p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">コラム</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">お知らせ</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">リリース情報</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">お知らせ</p>
                    <p class="title">
                        ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。<span
                            class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">求人</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">お知らせ</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span>
                    </p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">コラム</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span></p>
                </a>
            </li>
            <li>
                <a href="">
                    <p class="date">0000/00/00</p>
                    <p class="cat">お知らせ</p>
                    <p class="title">ダミーテキストが入ります。ダミーテキストが入ります。<span class="icon"></span></p>
                </a>
            </li>
        </ul>
    </div>
    <div class="pagenavi">
        <div class="wp-pagenavi">
            <a class="previouspostslink" rel="prev" href="#"></a>
            <span class="current">1</span>
            <a class="page smaller" title="Page 3" href="#">2</a>
            <a class="page smaller" title="Page 3" href="#">3</a>
            <span class="extend">...</span>
            <a class="page larger" title="Page 5" href="#">00</a>
            <a class="nextpostslink" rel="next" href="#"></a>
        </div>
    </div>
</main>
<?php get_template_part('template-parts/cta'); ?>

<?php get_template_part('template-parts/footer'); ?>