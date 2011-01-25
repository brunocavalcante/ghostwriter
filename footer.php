		</div> <!-- end content -->
		<footer id="footer">
		    <div id="site-info">
                <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div><!-- #site-info -->
            
		    <div id="site-generator">
				<small>
                    Theme <a href="http://www.brunocavalcante.com.br/blog/2011/01/tema-wordpress-ghostwriter/">Ghostwriter</a> 
                    &mdash; Powered by <a href="http://www.wordpress.org" rel="generator">Wordpress</a>.
                </small>
            </div><!-- #site-generator -->
		</footer>
  	<?php wp_footer(); ?>
	</body>
</html>
