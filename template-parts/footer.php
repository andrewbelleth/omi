<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: フッター
*/
?>
<?php if (is_page('recruit')): ?>
  <div class="section__item pallax-fixed">
  <?php else: ?>
    <div class="section__item <?php if (is_page('contact')) {
                                echo 'mt0';
                              } ?>">
    <?php endif; ?>
    <?php
    if (!is_page('contact')) {
      get_template_part('template-parts/cta');
    }
    ?>
    <footer class="footer">
      <div class="footer__inner <?php if (is_page('contact')) {
                                  echo 'pt80--sp56';
                                } ?>">
        <div class="footer__logo">
          <div class="footer__logo-img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sp/footer-logo.png" media="(max-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/footer-logo.png" alt="omi printing">
            </picture>
          </div>
          <div class="footer__logo-text">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/logo-text.svg" alt="近江印刷株式会社">
          </div>
        </div>
        <div class="footer__main">
          <div class="footer__address">
            <dl>
              <dt>本社</dt>
              <dd>529-1302 滋賀県愛知郡愛荘町川原771-1<br>TEL:<a href="tel:0749428400">0749-42-8400</a>(代)&nbsp;&nbsp;&nbsp;FAX:0749-42-6700(代)</dd>
            </dl>
            <dl>
              <dt>彦根支店</dt>
              <dd>521-1113 滋賀県彦根市稲部町100-4</dd>
            </dl>
            <dl>
              <dt>甲賀支店</dt>
              <dd>520-3402 滋賀県甲賀市甲賀町小佐治2546</dd>
            </dl>
            <dl>
              <dt>東近江支店</dt>
              <dd>529-1422 滋賀県東近江市五個荘町小幡町698-2</dd>
            </dl>
            <dl>
              <dt>草津支店</dt>
              <dd>525-0037 滋賀県草津市西大路町11-18</dd>
            </dl>
            <dl>
              <dt>NICE CREW（彦根営業所）</dt>
              <dd>522-0075 滋賀県彦根市佐和町6-14 伊藤ビル1F（西）</dd>
            </dl>
          </div>
          <nav class="footer__nav">
            <div class="footer__nav-item">
              <h3><a href="<?php echo esc_url(home_url('/features')); ?>">近江印刷の特徴</a></h3>
              <h3><a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a></h3>
              <ul>
                <li>
                  <a href="<?php echo esc_url(home_url('/service/printing')); ?>">印刷</a>
                  <ul>
                    <li><a href="<?php echo esc_url(home_url('/service/printing/products')); ?>">取扱品目</a></li>
                    <li><a href="<?php echo esc_url(home_url('/service/printing/processing')); ?>">加工</a></li>
                    <li><a href="<?php echo esc_url(home_url('/service/printing/bookbinding')); ?>">製本</a></li>
                    <li><a href="#">DTF印刷</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo esc_url(home_url('/service/degital')); ?>">デジタル</a></li>
                <li><a href="<?php echo esc_url(home_url('/service/newspaper')); ?>">彦根経済新聞</a></li>
                <li><a href="<?php echo esc_url(home_url('/service/branding')); ?>">ブランディング</a></li>
                <li><a href="<?php echo esc_url(home_url('/service/promotion')); ?>">プロモーション</a></li>
                <li><a href="#">NICE CREW</a></li>
              </ul>
            </div>
            <div class="footer__nav-item">
              <h3><a href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a></h3>
              <h3><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></h3>
              <ul>
                <li><a href="<?php echo esc_url(home_url('/company/facility')); ?>">設備概要</a></li>
                <li><a href="<?php echo esc_url(home_url('/company/history')); ?>">会社沿革</a></li>
                <li><a href="<?php echo esc_url(home_url('/company/project')); ?>">私たちの取り組み</a></li>
                <li><a href="<?php echo esc_url(home_url('/company/ing')); ?>">社外報ing</a></li>
              </ul>
            </div>
            <div class="footer__nav-item">
              <h3><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></h3>
              <!-- <h3><a href="<?php echo esc_url(home_url('/column')); ?>">コラム</a></h3> -->
              <h3><a href="<?php echo esc_url(home_url('/recruit')); ?>">リクルート</a></h3>
              <h3><a href="<?php echo esc_url(home_url('/partner')); ?>">外部パートナー募集</a></h3>
              <h3><a href="<?php echo esc_url(home_url('/career')); ?>">キャリア採用</a></h3>
              <h3><a href="<?php echo esc_url(home_url('/guide')); ?>">入稿ガイド</a></h3>
              <h3><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></h3>
            </div>
          </nav>
        </div>
        <ul class="footer__sns sns">
          <li><a class="sns--x" href="https://twitter.com/omp63" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ico_x.svg" alt="x icon"></a></li>
          <li><a class="sns--youtube" href="https://www.youtube.com/channel/UCGkR-Vi1vzr6GQCxyscWJLg" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ico_youtube.svg" alt="youtbe icon"></a>
          </li>
          <li><a class="sns--facebook" href="https://www.facebook.com/omi.printing/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ico_facebook_color.svg"
                alt="facebook icon"></a></li>
          <li><a class="sns--instagram" href="https://www.instagram.com/omiprint/?hl=ja" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ico_instagram.svg" alt="instagram icon"></a>
          </li>
        </ul>
      </div>
      <div class="footer__copy">
        <div class="footer__copy-inner">
			<div class="footer__copy-link">
          <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">個人情報保護方針</a>
		<a href="<?php echo esc_url(home_url('/privacypolicy#opposition-forces')); ?>">反社会的勢力への対応</a>
			</div>
          <p>©omi-printing. All rights reserved.</p>
        </div>
      </div>
    </footer>
    <a href="#" class="page-top">
      <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
        <path
          d="M1.53048 5.01172L37.9471 5.01172L37.9471 9.39633L1.53048 9.39633L1.53048 5.01172ZM1.83526 31.6848L19.7388 15.1584L37.6424 31.6848L34.3055 34.765L19.7388 21.3188L5.17214 34.765L1.83526 31.6848Z"
          fill="#0068B6" />
      </svg>
    </a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
    integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.6/vivus.min.js"
    integrity="sha512-oUUeA7VTcWBqUJD/VYCBB4VeIE0g1pg5aRMiSUOMGnNNeCLRS39OlkcyyeJ0hYx2h3zxmIWhyKiUXKkfZ5Wryg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
  <script src="<?php echo esc_url(get_theme_file_uri('/assets/js/script.js')); ?>?v=<?php echo esc_attr(filemtime(get_theme_file_path('/assets/js/script.js'))); ?>"></script>


  <script>
    <?php if (is_front_page()) : ?>
      window.onload = function() {
        const spinner = document.getElementById('loading');
        setTimeout(function() {
          spinner.classList.add('loaded');
        }, 1440);
      }

      new Vivus(
        'svg-animation', {
          type: 'async',
          duration: 80,
          forceRender: false,
          animTimingFunction: Vivus.EASE
        },
        function(obj) {
          obj.el.classList.add("done");
        }
      )

      var beforePos = 0; //スクロールの値の比較用の設定
      var mv = $('.mv');
      var mvheight = mv.innerHeight();

      function ScrollAnime() {
        var scroll = $(window).scrollTop();
        //ヘッダーの出し入れをする
        if (mv) {
          if (scroll <= mvheight) {
            $('#header img').attr('src', '<?php echo get_template_directory_uri(); ?>/assets/images/pc/logo.webp');
          } else {
            $('#header img').attr('src', '<?php echo get_template_directory_uri(); ?>/assets/images/pc/logo-blue.webp');
          }
        }
        if (scroll <= 0) {
          $('#header').removeClass('UpMove'); //#headerにUpMoveというクラス名を除き
          $('#header').addClass('DownMove'); //#headerにDownMoveのクラス名を追加
        } else if (0 > scroll - beforePos) {
          //ヘッダーが上から出現する
          $('#header').removeClass('UpMove'); //#headerにUpMoveというクラス名を除き
          $('#header').addClass('DownMove'); //#headerにDownMoveのクラス名を追加
        } else {
          //ヘッダーが上に消える
          $('#header').removeClass('DownMove'); //#headerにDownMoveというクラス名を除き
          $('#header').addClass('UpMove'); //#headerにUpMoveのクラス名を追加
        }
        beforePos = scroll; //現在のスクロール値を比較用のbeforePosに格納
      }

      $(window).scroll(function() {
        ScrollAnime();
      });
    <?php else: ?>
      var beforePos = 0; //スクロールの値の比較用の設定

      function ScrollAnime() {
        var scroll = $(window).scrollTop();
        //ヘッダーの出し入れをする
        if (scroll <= 0) {
          $('#header').removeClass('UpMove'); //#headerにUpMoveというクラス名を除き
          $('#header').addClass('DownMove'); //#headerにDownMoveのクラス名を追加
        } else if (0 > scroll - beforePos) {
          //ヘッダーが上から出現する
          $('#header').removeClass('UpMove'); //#headerにUpMoveというクラス名を除き
          $('#header').addClass('DownMove'); //#headerにDownMoveのクラス名を追加
        } else {
          //ヘッダーが上に消える
          $('#header').removeClass('DownMove'); //#headerにDownMoveというクラス名を除き
          $('#header').addClass('UpMove'); //#headerにUpMoveのクラス名を追加
        }
        beforePos = scroll; //現在のスクロール値を比較用のbeforePosに格納
      }

      $(window).scroll(function() {
        ScrollAnime();
      });
    <?php endif; ?>

    <?php if (is_page(array('contact', 'partner'))): ?>
      document.addEventListener('DOMContentLoaded', function() {
        const activationButton = document.querySelector('.js-activation-button');
        const activationCheckBox = document.querySelector('.js-activation-check');
        activationButton.classList.add('disabled');

        activationCheckBox.addEventListener('change', function() {
          if (this.checked) {
            activationButton.classList.remove('disabled');
          } else {
            activationButton.classList.add('disabled');
          }
        });
      });
    <?php endif; ?>


    <?php if (is_post_type_archive('works') || is_tax('works-tag') || is_page('guide')): ?>
      var open = $('.popup__open'),
        close = $('.popup__close, .popup__btn-close'),
        container = $('.popup');

      open.on('click', function() {
        container.addClass('active');
        return false;
      });

      close.on('click', function() {
        container.removeClass('active');
        return false;
      });

      $(document).on('click', function(e) {
        // ダウンロードボタンをクリックした場合はポップアップを閉じない
        if ($(e.target).closest('[data-download-preset]').length) {
          return;
        }


        if (!$(e.target).closest('.popup__body').length && !$(e.target).attr('data-download-preset')) {
          container.removeClass('active');
        }
      });
    <?php endif; ?>
  </script>


  <?php wp_footer(); ?>
  </body>

  </html>