<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/

$is_first_visit = empty($_SESSION['loading_shown']);
if ($is_first_visit) {
    $_SESSION['loading_shown'] = true;
}
?>

<?php get_template_part('template-parts/header'); ?>

<?php
if (!$is_first_visit) {
    get_template_part('template-parts/loading');
}
?>
<div class="mv-wrapper mt0">
    <div class="mv">
        <div class="mv__media">
            <video src="<?php echo get_template_directory_uri(); ?>/assets/video/drone.mov" autoplay muted playsinline loop></video>
        </div>
        <div class="mv__body">
            <div class="mv__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/mv_logo.webp" alt="omi printing">
            </div>
            <h1 class="mv__title">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sp/mv_title.png" alt="印刷会社だけど、印刷だけじゃない" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/mv_title.svg" alt="印刷会社だけど、印刷だけじゃない">
                </picture>
            </h1>
        </div>
    </div>
    <?php
    $args = array(
        'slider_array' => array(
            'img_01' => array(
                'img' => 'sample_slider_img01.webp',
                'link' => 'https://omito.biz/sukettosan/',
            ),
            'img_02' => array(
                'img' => 'sample_slider_img02.webp',
                'link' => 'https://omito.biz/',
            ),
            'img_03' => array(
                'img' => 'sample_slider_img03.webp',
                'link' => 'https://omito.biz/rikuel/',
            ),
            'img_04' => array(
                'img' => 'sample_slider_img04.webp',
                'link' => 'https://omito.biz/dooga/',
            ),
            'img_05' => array(
                'img' => 'slider-bnr-dtf.webp',
                'link' => home_url() . '/service/dtf/',
            ),
            'img_06' => array(
                'img' => 'slider-bnr-nicecrew.webp',
                'link' => home_url() . '/service/nicecrew/',
            ),
            'img_07' => array(
                'img' => 'lp-bunner.webp',
                'link' => home_url() . '/lp',
            ),
        ),
    );
    ?>
    <?php get_template_part('template-parts/components/top-slider', null, $args); ?>
</div>
<div class="top-about section">
    <div class="top-about__head section__head inview">
        <h2 class="section__title">
            <span class="section__title--en">ABOUT US</span>
            <span class="section__title--jp">私たちについて</span>
        </h2>
    </div>
    <div class="top-about__img top-about__img--01 inview desktop">
        <div class="_image">
            <img class="_cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/about_img01.png" alt="">
        </div>
    </div>
    <div class="top-about__media">
        <div class="top-about__gallery">
            <div class="top-about__gallery-inner">
                <div class="top-about__img top-about__img--01 inview mobile">
                    <div class="_image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sp/about_img01-sp.png" media="(max-width: 768px)">
                            <img class="_cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/about_img01.png" alt="">
                        </picture>
                    </div>
                </div>
                <div class="top-about__img top-about__img--02 inview inview--delay0_25s">
                    <div class="_image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sp/about_img02-sp.png" media="(max-width: 768px)">
                            <img class="_cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/about_img02.png" alt="">
                        </picture>
                    </div>
                </div>
                <div class="top-about__img top-about__img--03 inview inview--delay0_5s">
                    <div class="_image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sp/about_img03-sp.png" media="(max-width: 768px)">
                            <img class="_cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/about_img03.png" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-about__body">
            <h3 class="top-about__title inview">
                私たちは、情報産業の担い手として、<br><span>お客様に信頼され、</span><span>評価される企業となり、</span><br>社会の発展と繁栄に貢献します。</h3>
            <div class="top-about__text inview">
                <p>『近江印刷株式会社』と社名にもあるように、<br>印刷物だけを取り扱う会社だとよく思われます。<br>でも、実際は印刷物を作るだけの会社ではありません。</p>
                <p>「伝えたい人」に「伝えたいこと」を「伝えたい時」に伝える。<br>伝え、伝わることにこだわり続けている近江印刷だからこそ、<br>さまざまなメディアを組み合わせ、<span class="dib">相乗効果を生み出すことができます。</span></p>
            </div>
            <a href="<?php echo home_url(); ?>/feature" class="btn inview">
                <span class="btn__text">近江印刷の特徴</span>
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
<?php
$args = array(
    'slider_array' => array(
        'img_01' => 'sample_gallery01.webp',
        'img_02' => 'sample_gallery02.webp',
        'img_03' => 'sample_gallery03.webp',
        'img_04' => 'sample_gallery04.webp',
        'img_05' => 'sample_gallery05.webp',
        'img_06' => 'sample_gallery06.webp',
    ),
);
?>
<?php get_template_part('template-parts/components/gallery', null, $args); ?>
<div class="top-strength">
    <div class="top-strength__head section">
        <h2 class="section__title inview">
            <span class="section__title--en">STRENGTH</span>
            <span class="section__title--jp">近江印刷の強み</span>
        </h2>
    </div>
    <div class="top-strength__list">
        <div class="top-strength__item inview">
            <div class="top-strength__item-inner inview">
                <div class="top-strength__item-body">
                    <div class="top-strength__item-num">
                        <span>STRENGTH</span>
                        <span>（01/03）</span>
                    </div>
                    <h3 class="top-strength__item-title">地元に愛され70年</h3>
                    <div class="top-strength__item-text">
                        <p>官公庁をはじめ、地元の民間企業、同業他社など取引先は2,000社を超え、<br>地元密着型の印刷会社として愛されてきました。</p>
                        <p>ひとつのミニコミ誌から始まった当社は、<br>70年以上をかけて自社設備の充実化と人財育成に加え、<br>多数の協力会社様との協力体制を構築し、<br>さまざまな商品・サービスを展開してまいりました。
                        </p>
                        <p>全国からもお問い合わせをいただき、<br>充実した印刷・製本設備と熟練のオペレーターの技術力で、<br>高品質な製品を短納期で納品しています。</p>
                    </div>
                    <a href="<?php echo home_url(); ?>/company" class="btn btn--white">
                        <span class="btn__text">会社概要</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="top-strength__item-slide _image">
                    <div class="top-strength__item-slide-inner _cover">
                        <div class="top-strength__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_strength-img01.webp" alt="" width="600" height="650">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-strength__item inview">
            <div class="top-strength__item-inner inview">
                <div class="top-strength__item-body">
                    <div class="top-strength__item-num">
                        <span>STRENGTH</span>
                        <span>（02/03）</span>
                    </div>
                    <h3 class="top-strength__item-title">ワンストップ<br>ソリューション</h3>
                    <div class="top-strength__item-text">
                        <p>印刷工場を本社内に併設しているため、<br>印刷から納品まで一貫して近江印刷で完結できます。</p>
                        <p>部署の垣根を超えたコミュニケーションが活発で、<br>迅速で丁寧な商品・サービスを提供します。</p>
                        <p>貴社専属のスタッフが付き、見積・スケジュール調整・あらゆるご相談・ご連絡に対しても真摯に対応いたします。</p>
                    </div>
                    <a href="<?php echo home_url(); ?>/features" class="btn btn--white">
                        <span class="btn__text">近江印刷の特徴</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="top-strength__item-slide _image">
                    <div class="top-strength__item-slide-inner _cover">
                        <div class="top-strength__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_strength-img02.webp" alt="" width="600" height="650">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-strength__item inview">
            <div class="top-strength__item-inner inview">
                <div class="top-strength__item-body">
                    <div class="top-strength__item-num">
                        <span>STRENGTH</span>
                        <span>（03/03）</span>
                    </div>
                    <h3 class="top-strength__item-title">デジタルの活用で同業他社との差別化を提供</h3>
                    <div class="top-strength__item-text">
                        <p>印刷用データを活用し、<br>デジタルコンテンツ（動画、WebBookなど）に展開することも可能です。</p>
                        <p>「DX（デジタルトランスフォーメーション）」が加速するなか、<br>デジタルコンテンツは、商品・サービスの販売促進ツールとして、<br>事業を発展させていくための重要な手段のひとつになっています。
                        </p>
                        <p>紙とデジタルの相乗効果によってさらなる訴求力の向上が期待できますので、<br>印刷物にもWebにも精通した私たちにぜひお任せください。<br>デジタルコンテンツに特化した事業も行っております。
                        </p>
                    </div>
                    <a href="<?php echo home_url(); ?>/service/degital" class="btn btn--white">
                        <span class="btn__text">デジタルコンテンツ</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="top-strength__item-slide _image">
                    <div class="top-strength__item-slide-inner _cover">
                        <div class="top-strength__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/sample_strength-img03.webp" alt="" width="600" height="650">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/top/service'); ?>

<div class="top-works" id="works">
    <div class="top-works__inner">
        <div class="top-works__head section__head">
            <h2 class="section__title inview">
                <span class="section__title--en">WORKS</span>
                <span class="section__title--jp">制作実績</span>
            </h2>
            <a href="<?php echo home_url(); ?>/works" class="btn btn--white btn--right inview">
                <span class="btn__text">制作実績を全て見る</span>
                <span class="btn__icon">
                    <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                            fill="white" />
                    </svg>
                </span>
            </a>
        </div>
        <ul class="card__list card__list--works inview">
            <?php
            $args = array(
                'post_type' => 'works',
                'posts_per_page' => 6,
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>
                <?php
                while ($query->have_posts()) : $query->the_post();
                    $the_id = $post->ID;
                    $categories = get_the_terms($the_id, 'works-cat');
                ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'img__cover')); ?>
                                <?php endif; ?>
                            </div>
                            <div class="meta">
                                <?php if ($categories) : ?>
                                    <p class="cat">
                                        <?php foreach ($categories as $category) : ?>
                                            <span><?php echo esc_html($category->name); ?></span>
                                        <?php endforeach; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <h3 class="title"><?php the_title(); ?></h3>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
<div class="top-instagram section" id="instagram">
    <div class="top-instagram__head section__head">
        <h2 class="section__title inview">
            <span class="section__title--en">INSTAGRAM</span>
            <span class="section__title--jp">インスタグラム</span>
        </h2>
        <a href="https://www.instagram.com/omiprint/?hl=ja" target="_blank" class="btn btn--right inview">
            <span class="btn__text">近江印刷株式会社<br class="mobile"> Instagram</span>
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
    <div class="top-instagram__body inview">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
</div>

<div class="top-works" id="works">
    <div class="top-works__inner">
        <div class="top-works__head section__head">
            <h2 class="section__title inview">
                <span class="section__title--en">COLUMN</span>
                <span class="section__title--jp">コラム</span>
            </h2>
            <a href="<?php echo home_url(); ?>/column" class="btn btn--white btn--right inview">
                <span class="btn__text">コラムを全て見る</span>
                <span class="btn__icon">
                    <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                            fill="white" />
                    </svg>
                </span>
            </a>
        </div>
        <ul class="card__list card__list--works inview">
            <?php
            $args = array(
                'post_type' => 'column',
                'posts_per_page' => 6,
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>
                <?php
                while ($query->have_posts()) : $query->the_post();
                    $the_id = $post->ID;
                    $categories = get_the_terms($the_id, 'column-cat');
                ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'img__cover')); ?>
                                <?php endif; ?>
                            </div>
                            <div class="meta">
                                <?php if ($categories) : ?>
                                    <p class="cat">
                                        <?php foreach ($categories as $category) : ?>
                                            <span><?php echo esc_html($category->name); ?></span>
                                        <?php endforeach; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <h3 class="title"><?php the_title(); ?></h3>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</div>

<div class="top-news section">
    <div class="top-news__head section__head">
        <h2 class="section__title inview">
            <span class="section__title--en">NEWS</span>
            <span class="section__title--jp">お知らせ</span>
        </h2>
        <a href="<?php echo home_url(); ?>/news" class="btn inview">
            <span class="btn__text">お知らせ一覧</span>
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
    <ul class="top-news__list post__list inview">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <p class="date"><?php echo get_the_date('Y/m/d'); ?></p>
                        <p class="cat"><?php echo get_the_category()[0]->name; ?></p>
                        <p class="title"><?php the_title(); ?><span class="icon"></span></p>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
</div>

<?php get_template_part('template-parts/guide'); ?>
<?php get_template_part('template-parts/footer'); ?>