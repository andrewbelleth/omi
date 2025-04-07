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
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    </div>
</div>