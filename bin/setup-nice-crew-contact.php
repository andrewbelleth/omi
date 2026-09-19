<?php
/**
 * NICE CREW お問い合わせ：CF7フォーム＋固定ページをセットアップ
 * 実行: wp eval-file wp-content/themes/theme-omi/bin/setup-nice-crew-contact.php
 */

if (! defined('ABSPATH')) {
  exit(1);
}

$form_markup = <<<'FORM'
<div class="contact__form">
  <p class="contact__form-item-title">NICE CREWお問合せフォーム</p>

  <div class="contact__form-section">
    <h3 class="contact__form-section-title">1. ご検討中の内容について</h3>

    <div class="contact__form-item">
      <p class="contact__form-item-label">商品カテゴリー<span class="hissu">必須</span></p>
      <div class="contact__form-item-input">
        [checkbox* product-category use_label_element "Tシャツ" "ポロシャツ" "パーカー、スウェット" "バッグ" "法被" "その他（備考欄にご記入ください）"]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">製作予定数量<span class="hissu">必須</span></p>
      <div class="contact__form-item-input contact__form-item-input--suffix">
        [number* product-quantity min:1 placeholder "例：100"]
        <span class="contact__form-suffix">枚</span>
      </div>
      <p class="contact__form-item-text">※大まかな数量で構いません</p>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">希望納期<span class="hissu">必須</span></p>
      <div class="contact__form-item-input">
        [date* desired-delivery]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">プリント箇所（任意・複数選択可）</p>
      <div class="contact__form-item-input">
        [checkbox print-position use_label_element "左胸" "右胸" "前面中央" "背中中央" "襟下（首の後ろ）" "左袖" "右袖" "その他（備考欄にご記入ください）"]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">プリントサイズ（任意）</p>
      <div class="contact__form-item-input">
        [radio print-size use_label_element "10×10cm以内（ワンポイント）" "20×20cm以内（標準サイズ）" "20×30cm以内（A4サイズ）" "35×40cm以内（A3サイズ）" "その他・分からないので相談したい"]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">デザインデータ（任意）</p>
      <div class="contact__form-item-input">
        [radio design-data use_label_element "あり（下記より添付してください）" "なし（NICE CREWにて制作・デザイン相談を希望）"]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">デザインファイルの添付（任意）</p>
      <div class="contact__form-item-input">
        [file design-file filetypes:jpg|jpeg|png|pdf|ai limit:10mb]
      </div>
      <p class="contact__form-item-text">対応形式: jpg, png, pdf, ai / 上限: 10MB（デザインデータありの場合）</p>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">ご予算（任意）</p>
      <div class="contact__form-item-input contact__form-item-input--suffix">
        [text your-budget placeholder "例：50000"]
        <span class="contact__form-suffix">円程度</span>
      </div>
    </div>
  </div>

  <div class="contact__form-section">
    <h3 class="contact__form-section-title">2. お客様情報</h3>

    <div class="contact__form-item">
      <p class="contact__form-item-label">お名前（漢字）<span class="hissu">必須</span></p>
      <div class="contact__form-item-input contact__form-item-input--name">
        <label class="contact__form-name">
          <span class="contact__form-name-label">姓</span>
          [text* your-name-sei autocomplete:family-name placeholder "山田"]
        </label>
        <label class="contact__form-name">
          <span class="contact__form-name-label">名</span>
          [text* your-name-mei autocomplete:given-name placeholder "太郎"]
        </label>
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">フリガナ<span class="hissu">必須</span></p>
      <div class="contact__form-item-input contact__form-item-input--name">
        <label class="contact__form-name">
          <span class="contact__form-name-label">セイ</span>
          [text* your-kana-sei placeholder "ヤマダ"]
        </label>
        <label class="contact__form-name">
          <span class="contact__form-name-label">メイ</span>
          [text* your-kana-mei placeholder "タロウ"]
        </label>
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">会社名・団体名（任意）</p>
      <div class="contact__form-item-input">
        [text your-company]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">メールアドレス<span class="hissu">必須</span></p>
      <div class="contact__form-item-input">
        [email* your-email autocomplete:email placeholder "example@domain.com"]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">メールアドレス（確認用）<span class="hissu">必須</span></p>
      <div class="contact__form-item-input">
        [email* your-email-confirm autocomplete:email placeholder "example@domain.com"]
      </div>
    </div>

    <div class="contact__form-item">
      <p class="contact__form-item-label">電話番号（任意）</p>
      <div class="contact__form-item-input">
        [tel your-tel autocomplete:tel placeholder "000-0000-0000"]
      </div>
    </div>
  </div>

  <div class="contact__form-section">
    <h3 class="contact__form-section-title">3. 備考・ご要望</h3>

    <div class="contact__form-item">
      <p class="contact__form-item-label">備考・その他ご質問（任意）</p>
      <div class="contact__form-item-input">
        [textarea your-message placeholder "※サイズの内訳や、プリント位置の詳細、ご不明点などがあればご記入ください。"]
      </div>
    </div>
  </div>

  <div class="active-policy">
    <div class="active-policy-check">
      [acceptance acceptance-privacy]個人情報の取り扱い（<a href="/privacypolicy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>）に同意する[/acceptance]
    </div>
  </div>

  <div class="contact__form-submit">
    <div class="contact__form-submit-btn btn">
      [submit class:js-activation-button "送信内容を確認する"]
      <span class="btn__icon" aria-hidden="true">
        <svg width="22" height="22" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z" fill="#0068B6" />
        </svg>
      </span>
    </div>
  </div>
</div>
FORM;

$mail_body = <<<'MAIL'
NICE CREWお問い合わせを受信しました。

【1. ご検討中の内容について】
商品カテゴリー: [product-category]
製作予定数量: [product-quantity] 枚
希望納期: [desired-delivery]
プリント箇所: [print-position]
プリントサイズ: [print-size]
デザインデータ: [design-data]
ご予算: [your-budget] 円程度

【2. お客様情報】
お名前: [your-name-sei] [your-name-mei]
フリガナ: [your-kana-sei] [your-kana-mei]
会社名・団体名: [your-company]
メールアドレス: [your-email]
電話番号: [your-tel]

【3. 備考・ご要望】
[your-message]

--
このメールはサイトのお問い合わせフォームから送信されました。
MAIL;

$mail_2_body = <<<'MAIL2'
[your-name-sei] [your-name-mei] 様

この度は NICE CREW へお問い合わせいただき、ありがとうございます。
内容を確認のうえ、担当者よりご連絡いたします。

お問い合わせ内容は下記のとおりです。

【1. ご検討中の内容について】
商品カテゴリー: [product-category]
製作予定数量: [product-quantity] 枚
希望納期: [desired-delivery]
プリント箇所: [print-position]
プリントサイズ: [print-size]
デザインデータ: [design-data]
ご予算: [your-budget] 円程度

【2. お客様情報】
お名前: [your-name-sei] [your-name-mei]
フリガナ: [your-kana-sei] [your-kana-mei]
会社名・団体名: [your-company]
メールアドレス: [your-email]
電話番号: [your-tel]

【3. 備考・ご要望】
[your-message]

────────────────────
近江印刷株式会社
TEL: 0749-42-8400
MAIL2;

$existing_form_id = (int) get_option('omi_nice_crew_contact_form_id', 0);
if ($existing_form_id > 0 && get_post_type($existing_form_id) === 'wpcf7_contact_form') {
  $form_id = $existing_form_id;
  wp_update_post([
    'ID'         => $form_id,
    'post_title' => 'NICE CREWお問い合わせ',
    'post_status' => 'publish',
  ]);
  WP_CLI::log("Updating existing CF7 form ID {$form_id}");
} else {
  $form_id = wp_insert_post([
    'post_type'   => 'wpcf7_contact_form',
    'post_status' => 'publish',
    'post_title'  => 'NICE CREWお問い合わせ',
    'post_name'   => 'nice-crew-contact',
  ], true);

  if (is_wp_error($form_id)) {
    WP_CLI::error($form_id->get_error_message());
  }
  WP_CLI::log("Created CF7 form ID {$form_id}");
}

update_post_meta($form_id, '_form', $form_markup);

$mail = [
  'active'             => true,
  'subject'            => '【NICE CREW】お問い合わせ / [your-name-sei] [your-name-mei] 様',
  'sender'             => '[your-name-sei] [your-name-mei] <[your-email]>',
  'recipient'          => get_option('admin_email'),
  'body'               => $mail_body,
  'additional_headers' => "Reply-To: [your-email]\n",
  'attachments'        => "[design-file]\n",
  'use_html'           => 0,
  'exclude_blank'      => 1,
];
update_post_meta($form_id, '_mail', $mail);

$mail_2 = [
  'active'             => true,
  'subject'            => '【NICE CREW】お問い合わせありがとうございます',
  'sender'             => wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES) . ' <' . get_option('admin_email') . '>',
  'recipient'          => '[your-email]',
  'body'               => $mail_2_body,
  'additional_headers' => '',
  'attachments'        => '',
  'use_html'           => 0,
  'exclude_blank'      => 1,
];
update_post_meta($form_id, '_mail_2', $mail_2);
update_post_meta($form_id, '_messages', wpcf7_messages());
update_post_meta($form_id, '_additional_settings', "");
update_post_meta($form_id, '_locale', 'ja');
update_option('omi_nice_crew_contact_form_id', (int) $form_id);

// Pages: /service/ → /service/contact/ → /service/contact/complete/
$service_page = get_page_by_path('service');
if ($service_page) {
  $service_id = (int) $service_page->ID;
} else {
  $service_id = wp_insert_post([
    'post_type'    => 'page',
    'post_status'  => 'publish',
    'post_title'   => 'サービス',
    'post_name'    => 'service',
    'post_content' => '',
  ], true);
  if (is_wp_error($service_id)) {
    WP_CLI::error($service_id->get_error_message());
  }
}

$contact_page = get_page_by_path('service/contact');
if ($contact_page) {
  $contact_id = (int) $contact_page->ID;
  wp_update_post([
    'ID'          => $contact_id,
    'post_title'  => 'NICE CREWお問い合わせ',
    'post_parent' => $service_id,
    'post_name'   => 'contact',
    'post_status' => 'publish',
  ]);
} else {
  $contact_id = wp_insert_post([
    'post_type'    => 'page',
    'post_status'  => 'publish',
    'post_title'   => 'NICE CREWお問い合わせ',
    'post_name'    => 'contact',
    'post_parent'  => $service_id,
    'post_content' => '',
  ], true);
  if (is_wp_error($contact_id)) {
    WP_CLI::error($contact_id->get_error_message());
  }
}
update_post_meta($contact_id, '_wp_page_template', 'page-service-contact.php');

$complete_page = get_page_by_path('service/contact/complete');
if ($complete_page) {
  $complete_id = (int) $complete_page->ID;
  wp_update_post([
    'ID'          => $complete_id,
    'post_title'  => 'お問い合わせ完了',
    'post_parent' => $contact_id,
    'post_name'   => 'complete',
    'post_status' => 'publish',
  ]);
} else {
  $complete_id = wp_insert_post([
    'post_type'    => 'page',
    'post_status'  => 'publish',
    'post_title'   => 'お問い合わせ完了',
    'post_name'    => 'complete',
    'post_parent'  => $contact_id,
    'post_content' => '',
  ], true);
  if (is_wp_error($complete_id)) {
    WP_CLI::error($complete_id->get_error_message());
  }
}
update_post_meta($complete_id, '_wp_page_template', 'page-service-contact-complete.php');

// Assign page-service.php to service page if template exists
$service_template = get_stylesheet_directory() . '/page-service.php';
if (file_exists($service_template)) {
  // page-service.php is slug-based; no meta needed when slug is service
}

WP_CLI::success(sprintf(
  'NICE CREW contact ready. form_id=%d contact=%s complete=%s',
  $form_id,
  get_permalink($contact_id),
  get_permalink($complete_id)
));
