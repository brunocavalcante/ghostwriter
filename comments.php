<div id="comments">
<?php   if ( post_password_required() ) : ?>
    <p class="nopassword">
        <?php _e(
            'This post is password protected. Enter the password to view any comments.'
        ); ?>
    </p>
</div><!-- #comments -->
<?php       return; ?>
<?php   endif; ?>
<?php   if($comments): ?>       
            <h3><?php echo __('Comments'); ?> (<?php echo count($comments) ?>)</h3>
            <ul class="commentlist">
<?php           wp_list_comments('type=comment&callback=ghostwriter_comment&max_depth=3'); ?>
            </ul>
<?php		paginate_comments_links(); ?>
<?php   endif; ?>
        
<?php comment_form(array('comment_notes_after' => '')); ?>
</div>