<?php get_header(); ?>
<div id="page">
    <h2 class="search-title"><?php echo __('Search Results') . ': ' . $s ?></h2>
    <?php get_template_part( 'loop', 'search' ); ?>
</div>
<?php get_sidebar() ?>
<?php get_footer(); ?>
