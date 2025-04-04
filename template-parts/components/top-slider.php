
<div class="top-slider inview" id="top-slider">
    <?php foreach ($args['slider_array'] as $key => $value) : ?>
    <div class="top-slider__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pc/<?php echo $value; ?>" alt="">
    </div>
    <?php endforeach; ?>
</div>