<?php
/**
 * Template Name: NICE CREW お問い合わせ
 * NICE CREW / DTF 向けお問い合わせ（URL: /service/contact/）
 */
if (! defined('ABSPATH')) {
  exit;
}

$omi_nice_crew_form_id = (int) get_option('omi_nice_crew_contact_form_id', 0);
$omi_nice_crew_shortcode = $omi_nice_crew_form_id > 0
  ? '[contact-form-7 id="' . $omi_nice_crew_form_id . '" title="NICE CREWお問い合わせ"]'
  : '';
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
  'title_en' => 'NICE CREW CONTACT',
  'title_jp' => 'NICE CREW お問い合わせ',
  'title_modifier' => 'nice-crew',
]); ?>

<div class="contact-top mt80--sp64">
  <div class="contact-top__inner">
    <div class="txt">
      <p>
        NICE CREW（DTF印刷）に関するご相談・ご依頼は、下記フォームよりお気軽にお問い合わせください。<br>
        担当者より3営業日以内にご連絡させていただきます。<br>
        万が一連絡が入らない場合は、お手数ですが<span class="dib">「<a href="tel:0749428400" class="colorBlue">0749-42-8400 近江印刷株式会社 営業部</a>」</span>まで<span class="dib">ご連絡をお願いいたします。</span>
      </p>
      <p class="mt16">（※ <span class="hissu-note">必須</span> は必須項目です）</p>
    </div>

    <div class="contact-top__tel mt64--sp40">
      <div class="contact-top__tel-inner">
        <div class="contact-top__tel-header">
          <h2 class="contact-top__tel-title">お電話での<br class="desktop">お問い合わせ先</h2>
          <p class="contact-top__tel-time desktop">（受付時間 当社営業日 9:00~17:00）</p>
        </div>
        <div class="contact-top__tel-body">
          <p class="contact-top__tel-text">お急ぎの場合は、下記までお電話ください。</p>
          <div class="contact-top__tel-number mt4">
            <span class="contact-top__tel-icon">
              <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M53.7192 44.0536L43.4726 39.6708C43.1981 39.5795 42.9237 39.4882 42.5577 39.4882C41.9173 39.4882 41.2769 39.8534 40.911 40.3099L36.3366 45.8798C29.2006 42.5013 23.5284 36.8402 20.1433 29.7181L25.7241 25.1527C26.1815 24.7875 26.5475 24.1483 26.5475 23.4178C26.5475 23.1439 26.456 22.87 26.3645 22.5961L21.9731 12.3695C21.6071 11.5477 20.7838 10.9999 19.8689 10.9999C19.7774 10.9999 19.5944 11.0912 19.4114 11.0912L9.89677 13.2826C8.89041 13.5565 8.25 14.3783 8.25 15.3827C8.25 38.849 27.1879 57.7499 50.7001 57.7499C51.7065 57.7499 52.5298 57.1107 52.8043 56.1063L55 46.6102C55 46.4276 55 46.245 55 46.1537C55 45.2406 54.4511 44.4188 53.7192 44.0536Z" fill="#0068B6" />
              </svg>
            </span>
            <a href="tel:0749428400" class="contact-top__tel-num">0749-42-8400</a>
          </div>
          <p class="contact-top__tel-time mobile">（受付時間 当社営業日 9:00~17:00）</p>
          <div class="contact-top__tel-departments">
            <ul class="disc-list">
              <li><b>NICE CREW / DTF印刷に関するお問い合わせ ：</b><br class="mobile-sp"> 営業部</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="contact-form contact-form--nice-crew mt80--sp64">
  <div class="contact-form__inner">
    <?php if ($omi_nice_crew_shortcode !== '') : ?>
      <?php echo do_shortcode($omi_nice_crew_shortcode); ?>
    <?php else : ?>
      <p class="txt">お問い合わせフォームの準備中です。しばらくしてから再度お試しください。</p>
    <?php endif; ?>
  </div>
</div>

<script>
  document.addEventListener('wpcf7mailsent', function (event) {
    var formId = <?php echo (int) $omi_nice_crew_form_id; ?>;
    if (formId && event.detail && Number(event.detail.contactFormId) === formId) {
      window.location.href = <?php echo wp_json_encode(esc_url(home_url('/service/contact/complete/'))); ?>;
    }
  }, false);

  document.querySelectorAll('select.wpcf7-select').forEach(function (select) {
    var syncSelectColor = function () {
      if (select.value === '') {
        select.style.color = '#A9A9A9';
        select.style.fontSize = '0.9375rem';
      } else {
        select.style.color = '';
        select.style.fontSize = '16px';
      }
    };
    select.addEventListener('change', syncSelectColor);
    syncSelectColor();
  });
</script>

<?php get_template_part('template-parts/footer'); ?>
