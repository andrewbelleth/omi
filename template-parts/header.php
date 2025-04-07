<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="<?php
                global $post;
                $slug = $post->post_name;
                foreach (get_body_class() as $class) {
                    echo $class . " ";
                }
                echo "page-" . $slug;
                ?>">
    <header class="header" id="header">
        <div class="header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/logo.webp" alt="omi printing"></a></div>
        <nav class="header__nav" id="header__nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>/feature">近江印刷の特徴</a></li>
                <li><a href="<?php echo home_url(); ?>/service">サービス</a></li>
                <li><a href="<?php echo home_url(); ?>/works">制作実績</a></li>
                <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
                <li><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
                <li><a href="<?php echo home_url(); ?>/recruit">リクルート</a></li>
                <li><a href="<?php echo home_url(); ?>/partner">外部パートナー募集</a></li>
            </ul>
            <div class="header__cta"><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></div>
            <div class="header__menu-btn" id="header__menu-btn">
                <div class="header__menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
    <div class="sp-menu" id="sp-menu">
        <ul>
            <li><a href="<?php echo home_url(); ?>/feature">近江印刷の特徴</a></li>
            <li><a href="<?php echo home_url(); ?>/service">サービス</a></li>
            <li><a href="<?php echo home_url(); ?>/works">制作実績</a></li>
            <li><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
            <li><a href="<?php echo home_url(); ?>/news">お知らせ</a></li>
            <li><a href="<?php echo home_url(); ?>/recruit">リクルート</a></li>
            <li><a href="<?php echo home_url(); ?>/partner">外部パートナー募集</a></li>
        </ul>
        <a href="<?php echo home_url(); ?>/contact" class="btn btn--white">
            <span class="btn__text">お問い合わせ</span>
            <span class="btn__icon">
                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5386 18.7793L12.0893 17.2881L17.3408 12.0366H0.6875V9.9741H17.3408L12.0893 4.72263L13.5386 3.23145L21.3125 11.0054L13.5386 18.7793Z"
                        fill="white" />
                </svg>
            </span>
        </a>
    </div>
    <div class="wrapper">