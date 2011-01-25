<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta charset="<?php bloginfo('charset'); ?>"/>
        <title><?php wp_title(' &mdash; ','true','right'); ?><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"/>
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>"/>
        <?php 
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
        wp_head(); 
        ?>
    </head>
	<body <?php body_class(); ?>>
		<header id="header" role="banner">
            <h1><a href="<?php echo home_url(); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php if (get_bloginfo( 'description', 'display' )): ?>
            <div id="site-description"><?php bloginfo( 'description' ); ?></div>
            <?php endif ?>
            <nav id="nav">
                <ul>
                    <li><a href="<?php echo home_url() ?>" rel="home"><?php echo __('Home') ?></a></li>
                    <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
                    <li class="rss"><a href="<?php bloginfo('rss_url') ?>" rel="alternate"><?php echo __('RSS') ?></a></li>
                </ul>
            </nav>
	    </header>
        <div id="content">
