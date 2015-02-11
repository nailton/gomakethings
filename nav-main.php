<?php

/**
 * nav-main.php
 * Template for site navigation.
 * You may wish to use `wp_nav_menu()` here, or alternatively, hand-code your navigation.
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

?>

<header class="container container-large margin-bottom-large">
	<nav class="nav-wrap">
		<a class="logo" href="<?php echo site_url(); ?>/">
			<svg class="icon">
			    <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/icons.svg#icon-logo"></use>&nbsp;
			</svg>
			<?php _e( 'Go Make Things', 'keel' ); ?>
		</a>
		<ul class="nav">
			<li <?php if (is_home() || is_single()) { echo 'class="active"'; }?>>
				<a href="<?php echo site_url(); ?>/blog/"><?php _e( 'Blog', 'keel' ); ?></a>
			</li>
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
		</ul>
	</nav>
</header>