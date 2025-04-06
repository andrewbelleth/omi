<?php
$title_en = $args['title_en'];
$title_jp = $args['title_jp'];
?>

<div class="page__head">
    <div class="page__head-inner">
        <h2 class="page__title">
            <span class="page__title--en"><?php echo $title_en; ?></span>
            <span class="page__title--jp"><?php echo $title_jp; ?></span>
        </h2>
        <div class="breadcrumb">
            <ul>
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <?php if(is_page('printing', 'product','processing','agency')): ?>
                    <li><a href="<?php echo home_url('/service'); ?>">サービス</a></li>
                <?php endif; ?>
                <li><span><?php echo $breadcrumb; ?></span></li>
            </ul>
            <?php
            if(function_exists('bcn_display'))
            {
              bcn_display();
            }
            ?>
        </div>
    </div>
</div>