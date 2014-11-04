<?php

/**
 * nav-main.php
 * Template for site navigation.
 */

?>

<header class="container">
	<nav class="nav-wrap">
		<a class="logo" href="<?php echo site_url(); ?>/">
			<i class="icon icon-logo"></i>
			Go Make Things
		</a>
		<ul class="nav">
			<li <?php if (is_front_page() || is_single()) { echo 'class="active"'; }?>><a href="<?php echo site_url(); ?>/">Blog</a></li>
			<li <?php if (is_page('about')) { echo 'class="active"'; }?>><a href="<?php echo site_url(); ?>/about/">About</a></li>
			<li <?php if (is_page('projects') || ( isset( $post ) && $post->post_parent == '4493' ) ) { echo 'class="active"'; }?>><a href="<?php echo site_url(); ?>/projects/">Projects</a></li>
			<!-- <li <?php if (is_page('freebies')) { echo 'class="active"'; }?>><a href="<?php echo site_url(); ?>/freebies/">Freebies</a></li> -->
			<li <?php if (is_page('talks')) { echo 'class="active"'; }?>><a href="<?php echo site_url(); ?>/talks/">Talks</a></li>
			<!-- <li <?php if (is_page('search')) { echo 'class="active"'; }?>><a href="<?php echo site_url(); ?>/search/">Search</a></li>
			<li><a href="http://feeds.feedburner.com/GoMakeThings">RSS</a></li> -->
		</ul>
	</nav>
	<hr class="no-space-top">
</header>