<?php
function mytheme_enqueue_styles()
{
  // wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css', array(), '1.0.0');
  wp_enqueue_style(
    'css',
    get_theme_file_uri('/assets/css/style.css'),array(),filemtime(get_theme_file_path('/assets/css/style.css')));

  if (!wp_script_is('jquery', 'enqueued')) {
    wp_enqueue_script('jquery');
  }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// スラッグの日本語禁止
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

//サムネイルサイズ
function setup_post_thumbnails()
{
  add_theme_support('post-thumbnails', ['post']);
  add_image_size('small', 320, 213, true);
  add_image_size('heightImg', 1080, 507, true);
  add_image_size('widthlg', 640, 427, true);
}
add_action('after_setup_theme', 'setup_post_thumbnails');

//the_content()の<p>タグ挿入禁止
function remove_wpautop_content_filter()
{
  remove_filter('the_content', 'wpautop');
}
add_action('init', 'remove_wpautop_content_filter');

//デフォルト投稿関係
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

remove_filter('the_excerpt', 'wpautop');

//JPG画像の品質を１００％でアップロード
function img_uncompressed()
{
  return 100;
}
add_filter('jpeg_quality', 'img_uncompressed');


// デフォルトの画像サイズを無効にする
function disable_default_image_sizes($sizes)
{
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  unset($sizes['medium_large']);
  unset($sizes['large']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'disable_default_image_sizes');

//日付変更
add_filter('wpcf7_support_html5_fallback', '__return_true');

// 投稿タイプ "post" に抜粋を有効化
add_post_type_support('post', 'excerpt');

//記事抜粋表示文字数
// function custom_excerpt_length($length)
// {
//   return 38; // 表示する単語数
// }
// add_filter('excerpt_length', 'custom_excerpt_length');

//表示件数の変更
function change_set_garden($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if (isset($query->query['is_custom_query']) && $query->query['is_custom_query']) {
    return;
  }

  // if (is_archive('news')) {
  //   $query->set('posts_per_page', -1);
  //   $query->set('orderby', 'date');
  //   $query->set('order', 'DESC');
  // }
}
add_action('pre_get_posts', 'change_set_garden');

//コンタクトフォーム７のPタグ禁止
add_filter('wpcf7_autop_or_not', '__return_false');


function custom_wpcf7_validation_error_message($result, $tag)
{
  if ('your-address' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「住所」は必須項目です');
    }
  }
  if ('your-name' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「お名前」は必須項目です');
    }
  }
  if ('your-email' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「メールアドレス」は必須項目です');
    }
  }
if ('your-tel' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「電話番号」は必須項目です');
    }
  }
  return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validation_error_message', 10, 2);


function custom_wpcf7_validation_error_email($result, $tag)
{
  if ('your-email' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「メールアドレス」は必須項目です');
    }
  }
  return $result;
}
add_filter('wpcf7_validate_email', 'custom_wpcf7_validation_error_email', 10, 2);

function custom_wpcf7_validation_error_tel($result, $tag)
{
  if ('your-tel' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「電話番号」は必須項目です');
    }
  }
  return $result;
}
add_filter('wpcf7_validate_tel', 'custom_wpcf7_validation_error_tel', 10, 2);

function custom_wpcf7_validation_error_select($result, $tag)
{
  if ('your-cue' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「当社を知ったきっかけ」は必須項目です');
    }
  }
  return $result;
}
add_filter('wpcf7_validate_select', 'custom_wpcf7_validation_error_select', 10, 2);

function custom_wpcf7_validation_error_textarea($result, $tag)
{
  if ('your-textarea' == $tag->name) {
    if (empty($_POST[$tag->name])) {
      $result->invalidate($tag, '※「お問い合わせ内容」は必須項目です');
    }
  }
  return $result;
}
add_filter('wpcf7_validate_textarea', 'custom_wpcf7_validation_error_textarea', 10, 2);

function bcn_add($bcnObj) {
	// デフォルト投稿のアーカイブかどうか
	if (is_post_type_archive('post')) {
        	// 新規のtrailオブジェクトを末尾に追加する
		$bcnObj->add(new bcn_breadcrumb('お知らせ', null, array('archive', 'post-clumn-archive', 'current-item')));
		// trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
		$bcnObj->trail[0] = $trail_tmp;
	}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');

/**
 * 矢印ボタン Gutenberg ブロック
 */
function omi_register_arrow_button_block()
{
  $editor_script_path = get_theme_file_path('/blocks/arrow-button/edit.js');
  $editor_style_path  = get_theme_file_path('/blocks/arrow-button/editor.css');
  $style_path         = get_theme_file_path('/blocks/arrow-button/style.css');

  wp_register_script(
    'omi-arrow-button-editor',
    get_theme_file_uri('/blocks/arrow-button/edit.js'),
    [
      'wp-blocks',
      'wp-element',
      'wp-block-editor',
      'wp-components',
    ],
    file_exists($editor_script_path) ? filemtime($editor_script_path) : false,
    true
  );

  wp_register_style(
    'omi-arrow-button-editor-style',
    get_theme_file_uri('/blocks/arrow-button/editor.css'),
    [],
    file_exists($editor_style_path) ? filemtime($editor_style_path) : false
  );

  wp_register_style(
    'omi-arrow-button-style',
    get_theme_file_uri('/blocks/arrow-button/style.css'),
    [],
    file_exists($style_path) ? filemtime($style_path) : false
  );

  register_block_type(get_theme_file_path('/blocks/arrow-button'));
}
add_action('init', 'omi_register_arrow_button_block');

/**
 * エディター iframe（キャンバス）内へボタン用スタイルを読み込む
 */
function omi_setup_block_editor_styles()
{
  add_theme_support('editor-styles');
  add_editor_style('blocks/arrow-button/editor.css');
}
add_action('after_setup_theme', 'omi_setup_block_editor_styles');
