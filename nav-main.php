<?php

/**
 * nav-main.php
 * Template for site navigation.
 * You may wish to use `wp_nav_menu()` here, or alternatively, hand-code your navigation.
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

?>

<header class="container container-large <?php if ( is_front_page() ) { echo 'margin-bottom-small'; } else { echo 'margin-bottom-large'; } ?>">
	<nav class="nav-wrap">
		<a class="logo" href="<?php echo site_url(); ?>/">
			<svg class="icon"><use xlink:href="#icon-logo"></use></svg>
			<?php _e( 'Go Make Things', 'keel' ); ?>
		</a>
		<a class="nav-toggle" data-nav-toggle="#nav-menu" href="#">
			Menu <span class="nav-toggle-icon">+</span>
		</a>
		<div class="nav-menu" id="nav-menu">
			<!-- <ul class="nav">
				<li <?php if (is_page('about')) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/about/"><?php _e( 'About', 'keel' ); ?></a>
				</li>
				<li <?php if (is_page('projects') || ( isset( $post ) && $post->post_parent == '4493' ) ) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/projects/"><?php _e( 'Work', 'keel' ); ?></a>
				</li>
				<li <?php if (is_page('code')) { echo 'class="active"'; } ?>>
					<a href="<?php echo site_url(); ?>/code/"><?php _e( 'Code', 'keel' ); ?></a>
				</li>
				<li <?php if (is_page('talks')) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/talks/"><?php _e( 'Talks', 'keel' ); ?></a>
				</li>
				<li <?php if (is_home() || is_single()) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/blog/"><?php _e( 'Blog', 'keel' ); ?></a>
				</li>
				<li <?php if (is_page('contact')) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/contact/"><?php _e( 'Contact', 'keel' ); ?></a>
				</li>
			</ul> -->
			<ul class="nav">
				<li <?php if (is_page('consulting')) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/consulting/"><?php _e( 'Consulting', 'keel' ); ?></a>
				</li>
				<li <?php if (is_page('training')) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/training/"><?php _e( 'Training', 'keel' ); ?></a>
				</li>
				<li <?php if (is_page('about')) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/about/"><?php _e( 'About', 'keel' ); ?></a>
				</li>
				<!-- <li <?php if (is_page('projects') || ( isset( $post ) && $post->post_parent == '4493' ) ) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/projects/"><?php _e( 'Clients', 'keel' ); ?></a>
				</li> -->
				<li <?php if (is_page('code')) { echo 'class="active"'; } ?>>
					<a href="<?php echo site_url(); ?>/code/"><?php _e( 'Code', 'keel' ); ?></a>
				</li>
				<li <?php if (is_home() || is_single()) { echo 'class="active"'; }?>>
					<a href="<?php echo site_url(); ?>/blog/"><?php _e( 'Blog', 'keel' ); ?></a>
				</li>
			</ul>
		</div>
	</nav>
</header>