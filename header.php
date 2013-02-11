<!DOCTYPE html>
<html lang="en">

    <head>
	    <meta charset="<?php bloginfo('charset'); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
	    <?php if (is_home ()) : ?><meta name="description" content="<?php bloginfo('description'); ?>"><?php endif; ?>
	    <link rel="canonical" href="<?php the_permalink() ?>">

	    <!-- Mobile Screen Resizing -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Stylesheet -->
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">

        <!-- HTML5 Shim for IE 6-8 -->
	    <!--[if lt IE 9]>    
		    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->


	    <!-- Favicon -->
	    <link rel="shortcut icon" type="image/ico" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">

	    <!-- Apple Touch Icons -->
	    <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-114.png">
	    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/img/apple-touch-icon-144.png">

        <!-- MS Homescreen Icons -->
        <meta name="msapplication-TileColor" content="#3892d0">
        <meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/img/ms-touch-icon.png">

	    <!-- Feeds & Pings -->
	    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/GoMakeThings">
	    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	    <?php wp_head(); ?>

    </head>

    <body>
    
        <header class="container">
	        <!-- Old Browser Warning -->
	        <!-- If you're supporting IE 6-8, remove this -->
            <!--[if lt IE 9]>
                Did you know that your web browser (<em>the program you're using to access the internet</em>) is a bit old? Some of the content on this site might not work right as a result. <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, better, and safer web experience.
            <![endif]-->

            <nav class="text-center">
                <a class="logo" href="<?php echo get_option('home'); ?>/"><i class="icon-logo"></i> Go Make Things</a>
                <ul class="nav">
                    <li <?php if (is_front_page() || is_single()) { echo 'class="active"'; }?>><a href="<?php echo get_option('home'); ?>/">Writing</a></li>
                    <li <?php if (is_page('About Chris Ferdinandi')) { echo 'class="active"'; }?>><a href="<?php echo get_option('home'); ?>/about/">About</a></li>
                    <li <?php if (is_page('Search') || is_search() || is_archive()) { echo 'class="active"'; }?>><a href="<?php echo get_option('home'); ?>/search/">Search</a></li>
                    <li><a href="http://feeds.feedburner.com/GoMakeThings">RSS Feed</a></li>
                </ul>
            </nav>
        </header>

	    <section class="container">

            <hr class="no-space-top">
