<?php get_header(); ?>
<div id="page">
    <h2 class="category-title"><?php echo __('Category') . ': ' . single_cat_title( '', false ) ?></h2>
    <?php get_template_part( 'loop', 'category' ); ?>
</div>
<?php get_sidebar() ?>
<?php get_footer(); ?>
