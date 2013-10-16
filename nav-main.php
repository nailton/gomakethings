<?php

/* ======================================================================
	nav-main.php
	Template for site navigation.
 * ====================================================================== */

?>

<header class="container">
	<!-- Old Browser Warning -->
	<!--[if lt IE 9]>
		<span class="text-muted text-small">Did you know that your web browser is a bit old? Some of the content on this site might not work right as a result. <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, better, and safer web experience.</span>
	<![endif]-->

	<nav class="text-center">
		<a class="logo" href="<?php echo get_option('home'); ?>/"><i class="icon-logo"></i> Go Make Things</a>
		<ul class="nav">
			<li <?php if (is_front_page() || is_single()) { echo 'class="active"'; }?>><a href="<?php echo get_option('home'); ?>/">Writing</a></li>
			<li <?php if (is_page('about')) { echo 'class="active"'; }?>><a href="<?php echo get_option('home'); ?>/about/">About</a></li>
			<li <?php if (is_page('projects') || ( isset( $post->$post_parent ) && $post->post_parent == '4493' ) ) { echo 'class="active"'; }?>><a href="<?php echo get_option('home'); ?>/projects/">Projects</a></li>
			<li <?php if (is_page('speaking')) { echo 'class="active"'; }?>><a href="<?php echo get_option('home'); ?>/speaking/">Speaking</a></li>
		</ul>
	</nav>

	<hr class="no-space-top">
</header>