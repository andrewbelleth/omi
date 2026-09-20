<?php
$title_en = $args['title_en'];
$title_jp = $args['title_jp'];
$title_modifier = isset($args['title_modifier']) ? (string) $args['title_modifier'] : '';
$title_class = 'page__title';
if ($title_modifier !== '') {
  $title_class .= ' page__title--' . sanitize_html_class($title_modifier);
}
?>

<div class="page__head">
    <div class="page__head-inner">
        <h2 class="<?php echo esc_attr($title_class); ?>">
            <span class="page__title--en"><?php echo $title_en; ?></span>
            <span class="page__title--jp"><?php echo $title_jp; ?></span>
        </h2>
        <div class="breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
</div>