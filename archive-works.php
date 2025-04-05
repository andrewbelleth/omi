<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: トップページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="wrapper">
    <div class="popup">
        <div class="popup__body">
            <button class="popup__close">
                <img src="images/icon/close.png" alt="">
            </button>
            <form method="get" class="popup__content">
                <div class="popup__head">
                    <h2 class="popup__title">CATEGORY</h2>
                    <p class="popup__subTitle">カテゴリーで絞り込む</p>
                </div>
                <!-- <div class="popup__tag-list-inner" data-simplebar data-simplebar-auto-hide="false"> -->
                <ul class="popup__tag-list">
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category01">
                        <label for="category01">カテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category02">
                        <label for="category02">カテゴリカテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category03">
                        <label for="category03">カテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category04">
                        <label for="category04">カテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category05">
                        <label for="category05">カテゴリカテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category06">
                        <label for="category06">カテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category07">
                        <label for="category07">カテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category08">
                        <label for="category08">カテゴリカテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category09">
                        <label for="category09">カテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category05">
                        <label for="category05">カテゴリカテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category06">
                        <label for="category06">カテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category07">
                        <label for="category07">カテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category08">
                        <label for="category08">カテゴリカテゴリカテゴリ</label>
                    </li>
                    <li>
                        <input type="checkbox" name="works-cat[]" value="category" id="category09">
                        <label for="category09">カテゴリ</label>
                    </li>
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
            <li>
                <div class="img"></div>
                <p class="date">2024年</p>
                <h3 class="title">企業名や案件名が入ります</h3>
                <p class="expert">
                    ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                </p>
                <div class="meta">
                    <p class="cat">
                        <span>カテゴリ</span>
                    </p>
                </div>
            </li>
            <li>
                <div class="img"></div>
                <p class="date">2024年</p>
                <h3 class="title">企業名や案件名が入ります</h3>
                <p class="expert">
                    ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                </p>
                <div class="meta">
                    <p class="cat">
                        <span>カテゴリ</span>
                        <span>カテゴリ</span>
                    </p>
                </div>
            </li>
            <li>
                <div class="img"></div>
                <p class="date">2024年</p>
                <h3 class="title">企業名や案件名が入ります</h3>
                <p class="expert">
                    ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                </p>
                <div class="meta">
                    <p class="cat">
                        <span>カテゴリ</span>
                    </p>
                </div>
            </li>
            <li>
                <div class="img"></div>
                <p class="date">2024年</p>
                <h3 class="title">企業名や案件名が入ります</h3>
                <p class="expert">
                    ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                </p>
                <div class="meta">
                    <p class="cat">
                        <span>カテゴリ</span>
                    </p>
                </div>
            </li>
            <li>
                <div class="img"></div>
                <p class="date">2024年</p>
                <h3 class="title">企業名や案件名が入ります</h3>
                <p class="expert">
                    ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                </p>
                <div class="meta">
                    <p class="cat">
                        <span>カテゴリ</span>
                        <span>カテゴリ</span>
                    </p>
                </div>
            </li>
            <li>
                <div class="img"></div>
                <p class="date">2024年</p>
                <h3 class="title">企業名や案件名が入ります</h3>
                <p class="expert">
                    ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。ダミーテキストが入ります。
                </p>
                <div class="meta">
                    <p class="cat">
                        <span>カテゴリ</span>
                    </p>
                </div>
            </li>
        </ul>
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
    </div>

    <?php get_template_part('template-parts/footer'); ?>
</div>