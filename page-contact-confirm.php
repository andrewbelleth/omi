<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'CONTACT',
    'title_jp' => 'お問い合わせ',
]); ?>

<div class="contact-confirm mt80--sp64">
    <div class="contact-confirm__inner">
        <div class="txt">
            <p>以下のお問い合わせ内容に間違いがなければ、「送信する」を押してください。</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="1480e2d" title="お問い合わせ確認"]'); ?>
    </div>
</div>


<?php get_template_part('template-parts/footer'); ?>