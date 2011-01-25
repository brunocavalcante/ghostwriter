<?php get_header(); ?>
<div id="page">
    <h2 class="tag-title"><?php echo __('Tag') . ': ' . single_tag_title( '', false ) ?></h2>
    <?php get_template_part( 'loop', 'tag' ); ?>
</div>
<?php get_sidebar() ?>
<?php get_footer(); ?>
