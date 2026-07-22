<?php
/**
 * 矢印ボタンブロック（フロント出力）
 *
 * @var array    $attributes ブロック属性
 * @var string   $content    インナーブロック（未使用）
 * @var WP_Block $block      ブロックインスタンス
 */

if (! defined('ABSPATH')) {
  exit;
}

$text        = isset($attributes['text']) ? wp_strip_all_tags($attributes['text']) : '詳しく見る';
$url         = isset($attributes['url']) ? $attributes['url'] : '';
$link_target = isset($attributes['linkTarget']) ? $attributes['linkTarget'] : '';
$rel         = isset($attributes['rel']) ? $attributes['rel'] : '';

if ($text === '') {
  $text = '詳しく見る';
}

$wrapper_attributes = get_block_wrapper_attributes([
  'class' => 'wp-block-omi-arrow-button',
]);

$href = $url !== '' ? esc_url($url) : '#';
?>
<div <?php echo $wrapper_attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
  <a
    href="<?php echo $href; ?>"
    class="btn"
    <?php if ($link_target === '_blank') : ?>
      target="_blank"
      rel="<?php echo esc_attr($rel !== '' ? $rel : 'noopener noreferrer'); ?>"
    <?php elseif ($rel !== '') : ?>
      rel="<?php echo esc_attr($rel); ?>"
    <?php endif; ?>
  >
    <span class="btn__text"><?php echo esc_html($text); ?></span>
    <span class="btn__icon" aria-hidden="true">
      <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z"
          fill="#0068B6"
        />
      </svg>
    </span>
  </a>
</div>
