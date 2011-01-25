<?php get_header(); ?>
<div id="page">
    <h2 class="archive-title">
        <?php echo __('Archives') ?>: 
        <?php if ( is_day() ) : ?>
	        <?php echo get_the_date() ?>
        <?php elseif ( is_month() ) : ?>
			<?php echo get_the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
			<?php echo get_the_date('Y'); ?>
        <?php endif; ?>
    </h2>
    <?php get_template_part( 'loop', 'archive' ); ?>
</div>
<?php get_sidebar() ?>
<?php get_footer(); ?>
