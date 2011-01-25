<?php
if ( ! isset( $content_width ) ) {
	$content_width = 630;
}

if ( function_exists('register_sidebar') )
    register_sidebar();

add_action( 'after_setup_theme', 'ghostwriter_setup' );
function ghostwriter_setup() {
    // Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
}

add_filter('avatar_defaults', 'ghostwriter_gravatar');
function ghostwriter_gravatar($avatar_defaults) {
    $myavatar = get_template_directory_uri() . '/images/avatar.gif';
    $avatar_defaults[$myavatar] = "Ghostwriter";
    return $avatar_defaults;
}

add_filter('gallery_style', create_function('$css', 'return preg_replace("#img {(.*?)}#s", "img {}", $css);'));

function ghostwriter_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div id="div-comment-<?php comment_ID(); ?>">
            <div class="commentleft">
                <?php echo get_avatar(get_comment_author_email(), '48'); ?>
            </div>

            <div class="commentright">
                <div class="commentmeta">
                    <span class="commentauthor"><?php comment_author_link() ?></span>
                    <small class="commentmetadata">
                        <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?>
                    </small>
                </div>
                
                <div class="commentcontent">
                    <?php if ($comment->comment_approved == '0') : ?>
                    <small><em>Your comment is awaiting moderation.</em></small><br />
                    <?php endif; ?>
    
                    <?php comment_text() ?>
    
                    <?php echo comment_reply_link(array('before' => '<div class="reply">', 'after' => '</div>', 'reply_text' => 'Reply to this comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ));  ?>
                </div>
            </div>
        </div>
<?php
}