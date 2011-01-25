<?php 
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Ghostwriter
 * @since Ghostwriter 1.0
 */
?>
<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
    <p>
        <?php if (is_search()): ?>
            <?php echo __('No results found.') ?>
        <?php endif ?>
    </p>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
        <header class="entry-header">
            <h2 class="entry-title"><a rel="archive" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if (!is_page()): ?>
            <time class="published" datetime="<?php the_date('c'); ?>" pubdate>
                <a href="<?php the_permalink() ?>"><?php the_time(get_option('date_format')) ?></a>
            </time>
            <?php endif ?>
        </header>
        <?php if ((!is_single() AND !is_page()) AND ($post->post_excerpt != "" )): ?>
        <div class="entry-summary">
            <?php the_excerpt() ?>
            <a href="<?php the_permalink() ?>"><?php echo __('Read More') ?></a>
        </div>
        <?php endif ?>
        <?php if (is_single() OR is_page() OR !($post->post_excerpt)): ?>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php if (is_single()): ?>
            <div class="postExtras">
                <b><?php echo __( 'Categories' ) ?></b>: <?php the_category(', ') ?>
                <?php if (has_tag()): ?>
                   <br/><b><?php echo __( 'Tags' ) ?></b>: <?php the_tags('', ', ') ?>
                <?php endif ?>
            </div>
            <?php wp_link_pages(array('before' => '<p><b>' . __('Pages:') . '</b>')); ?>
            <?php endif ?>
        </div>
            <?php if (is_single() OR is_page()): ?>
                <?php comments_template(); ?>
            <?php endif ?>
        <?php endif ?>
    </article>
<?php endwhile ?>

<?php if (is_home() OR is_category() OR is_search() OR is_archive() OR is_tag()): ?>
<nav id="pagination">
     <ul>
         <li class="next"><?php echo previous_posts_link(__('Next page') . ' &rarr;', '0'); ?></li>
         <li class="previous"><?php next_posts_link('&larr; '. __('Previous page'), '0'); ?></li>
     </ul>
</nav>
<?php endif ?>
