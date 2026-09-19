<?php
/**
 * Template Name: NICE CREW お問い合わせ完了
 * URL: /service/contact/complete/
 */
if (! defined('ABSPATH')) {
  exit;
}
?>

<?php get_template_part('template-parts/header'); ?>
<div class="common-contant wrapper">
  <?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'CONTACT',
    'title_jp' => 'お問い合わせ',
  ]); ?>
  <div class="container page-thanks">
    <div class="page short-page">
      <div class="page__body u-column-center">
        <h2 class="page-thanks__title">送信完了しました</h2>
        <p class="page-thanks__text">
          NICE CREW へのお問い合わせ、ありがとうございます。<br>
          担当者より3営業日以内に<br class="sp-only">ご連絡させていただきます。<br>
          <br>
          万が一連絡が入らない場合は、お手数ですが<br class="sp-only">「<a href="tel:0749428400" class="page-thanks__text-blue">0749-42-8400 近江印刷株式会社 営業部</a>」まで<br class="u-tb-br">ご連絡をお願いいたします。
        </p>
        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="btn">
          <span class="btn__text">サービス一覧へ</span>
          <span class="btn__icon" aria-hidden="true">
            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_nice_crew_thanks)">
                <path
                  d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z"
                  fill="#0068B6" />
              </g>
              <defs>
                <clipPath id="clip0_nice_crew_thanks">
                  <rect width="23" height="23" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/footer'); ?>
