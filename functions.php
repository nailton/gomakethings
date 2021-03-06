<?php

/**
 * functions.php
 * For modifying and expanding core WordPress functionality.
 */


	/**
	 * Load theme scripts in the footer
	 */
	function keel_load_theme_files() {
		$keel_theme = wp_get_theme();
		// If stylesheet is in browser cache, load it the traditional way
		// Otherwise, inline critical CSS and load full stylesheet asynchronously
		// See keel_initialize_theme_detects()
		if ( isset($_COOKIE['fullCSS']) && $_COOKIE['fullCSS'] === 'true' ) {
			wp_enqueue_style( 'keel-theme-styles', get_template_directory_uri() . '/dist/css/main.min.' . $keel_theme->get( 'Version' ) . '.css', null, null, 'all' );
		}
	}
	add_action('wp_enqueue_scripts', 'keel_load_theme_files');



	/**
	 * Include feature detect inits in the header
	 */
	function keel_initialize_theme_detects() {
		$keel_theme = wp_get_theme();

		// If stylesheet is in browser cache, load it the traditional way
		if ( isset($_COOKIE['fullCSS']) && $_COOKIE['fullCSS'] === 'true' ) {
		?>
			<script>
				<?php echo file_get_contents( get_template_directory_uri() . '/dist/js/detects.min.' . $keel_theme->get( 'Version' ) . '.js' ); ?>
			</script>
		<?php

		// Otherwise, inline critical CSS and load full stylesheet asynchronously
		} else {
		?>
			<script>
				<?php echo file_get_contents( get_template_directory_uri() . '/dist/js/detects.min.' . $keel_theme->get( 'Version' ) . '.js' ); ?>
				var keelCSS = loadCSS('<?php echo get_template_directory_uri() . "/dist/css/main.min." . $keel_theme->get( "Version" ) . ".css"; ?>');
				onloadCSS( keelCSS, function() {
					var expires = new Date(+new Date + (7 * 24 * 60 * 60 * 1000)).toUTCString();
					document.cookie = 'fullCSS=true; expires=' + expires;
				});
			</script>
			<style>
				<?php echo file_get_contents( get_template_directory_uri() . '/dist/css/critical.min.' . $keel_theme->get( 'Version' ) . '.css' ); ?>
			</style>
		<?php
		}
		?>
		<script>
			loadCSS('http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic');
			document.createElement( 'picture' );
		</script>
		<?php
	}
	add_action('wp_head', 'keel_initialize_theme_detects', 30);



	/**
	 * Include script inits in the footer
	 */
	function keel_initialize_theme_scripts() {
		$keel_theme = wp_get_theme();

		// If stylesheet is in browser cache, don't set noscript fallback
		if ( isset($_COOKIE['fullCSS']) && $_COOKIE['fullCSS'] === 'true' ) {
		?>
			<noscript>
				<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
			</noscript>
		<?php

		// Otherwise, set a noscript fallback
		} else {
		?>
			<noscript>
				<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
				<link href='<?php echo get_template_directory_uri() . "/dist/css/main.min." . $keel_theme->get( "Version" ) . ".css"; ?>' rel='stylesheet' type='text/css'>
			</noscript>
		<?php
		}

		// Asynchronously load JavaScript if browser passes mustard test
		?>
			<script>
				<?php echo file_get_contents( get_template_directory_uri() . '/dist/js/loadJS.min.' . $keel_theme->get( 'Version' ) . '.js' ); ?>
				if ( !!document.querySelector && !!window.addEventListener ) {
					loadJS('<?php echo get_template_directory_uri() . "/dist/js/main.min." . $keel_theme->get( "Version" ) . ".js"; ?>');
				}
			</script>
			<?php if ( is_page('newsletter') || is_page('free-updates') ) : ?>
				<script>var mc_custom_error_style = '#mc_embed_signup div.mce_inline_error { display: block; font-style: italic; margin-bottom: 1em; padding: 1.4%; } @media (min-width: 38em) { #mc_embed_signup div.mce_inline_error { margin-left: 33.33333%; } } input.mce_inline_error { margin-bottom: 0.5em; } #mce-responses { font-style: italic; }';</script>
				<script src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
				<script>
					(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);
				</script>
			<?php endif; ?>
		<?php
	}
	add_action('wp_footer', 'keel_initialize_theme_scripts', 30);



	/**
	 * Add a shortcode for the search form
	 * @return string Markup for search form
	 */
	function keel_wpsearch() {
		return get_search_form();
	}
	add_shortcode( 'searchform', 'keel_wpsearch' );



	/**
	 * Add a shortcode for the current theme directory
	 * @return string Current theme directory
	 */
	function keel_get_theme_directory_uri() {
		return get_template_directory_uri();
	}
	add_shortcode( 'themeuri', 'keel_get_theme_directory_uri' );



	/**
	 * Add a shortcode for the base URL
	 * @return string Site base URL
	 */
	function keel_get_site_url() {
		return site_url();
	}
	add_shortcode( 'siteurl', 'keel_get_site_url' );



	/**
	 * Replace RSS links with Feedburner url
	 * @link http://codex.wordpress.org/Using_FeedBurner
	 */
	function keel_custom_rss_feed( $output, $feed ) {
		if ( strpos( $output, 'comments' ) ) {
			return $output;
		}
		return esc_url( 'http://feeds.feedburner.com/GoMakeThings' );
	}
	add_action( 'feed_link', 'keel_custom_rss_feed', 10, 2 );



	/**
	 * Replace the default password-protected post messaging with custom language
	 * @return string Custom language
	 */
	function keel_post_password_form() {
		global $post;
		$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
		$form =
			'<form class="text-center" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p>' . __( 'This is a password protected post.', 'keel' ) . '</p><label class="screen-reader" for="' . $label . '">' . __( 'Password', 'keel' ) . '</label><input id="' . $label . '" name="post_password" type="password"><input type="submit" name="Submit" value="' . __( 'Submit', 'keel' ) . '"></form>';
		return $form;
	}
	add_filter( 'the_password_form', 'keel_post_password_form' );



	/**
	 * Customize the `wp_title` method
	 * @param  string $title The page title
	 * @param  string $sep   The separator between title and description
	 * @return string        The new page title
	 */
	function keel_pretty_wp_title( $title, $sep ) {

		global $paged, $page;

		if ( is_feed() )
			return $title;

		// Add the site name
		$title .= get_bloginfo( 'name' );

		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'keel' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'keel_pretty_wp_title', 10, 2 );



	/**
	 * Override default the_excerpt length
	 * @param  number $length Default length
	 * @return number         New length
	 */
	function keel_excerpt_length( $length ) {
		return 35;
	}
	add_filter( 'excerpt_length', 'keel_excerpt_length', 999 );



	/**
	 * Override default the_excerpt read more string
	 * @param  string $more Default read more string
	 * @return string       New read more string
	 */
	function keel_excerpt_more( $more ) {
		return '... <a href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'keel') . '</a>';
	}
	add_filter( 'excerpt_more', 'keel_excerpt_more' );



	/**
	 * Sets max allowed content width
	 * Deliberately large to prevent pixelation from content stretching
	 * @link http://codex.wordpress.org/Content_Width
	 */
	if ( !isset( $content_width ) ) {
		$content_width = 960;
	}



	/**
	 * Registers navigation menus for use with wp_nav_menu function
	 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
	 */
	function keel_register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				'footer-menu' => __( 'Footer Menu' )
			)
		);
	}
	add_action( 'init', 'keel_register_menus' );



	/**
	 * Adds support for featured post images
	 * @link http://codex.wordpress.org/Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );



	/**
	 * Adds support for custom header images
	 * @link http://codex.wordpress.org/Custom_Headers
	 */
	// add_theme_support( 'custom-header' );



	/**
	 * Custom comment callback for wp_list_comments used in comments.php
	 * @param  object $comment The comment
	 * @param  object $args Comment settings
	 * @param  integer $depth How deep to nest comments
	 * @return string Comment markup
	 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
	 */
	function keel_comment_layout($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' === $args['style'] ) {
			$tag = 'div';
		} else {
			$tag = 'li';
		}
	?>

		<<?php echo $tag ?> <?php if ( $depth > 1 ) { echo 'class="comment-nested"'; } ?> id="comment-<?php comment_ID() ?>">

			<hr class="line-secondary">

			<article>

				<?php if ($comment->comment_approved == '0') : // If the comment is held for moderation ?>
					<p><em><?php _e( 'Your comment is being held for moderation.', 'keel' ) ?></em></p>
				<?php endif; ?>

				<header class="margin-bottom-small clearfix">
					<figure>
						<?php if ( $args['avatar_size'] !== 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
					</figure>
					<h3 class="no-margin no-padding">
						<?php comment_author_link() ?>
					</h3>
					<aside class="text-muted">
						<time datetime="<?php comment_date( 'Y-m-d' ); ?>" pubdate><?php comment_date('F jS, Y') ?></time>
						<?php edit_comment_link('Edit', ' / ', ''); ?>
					</aside>
				</header>

				<?php comment_text(); ?>
				<?php
					/**
					 * Add inline reply link.
					 * Only displays if nested comments are enabled.
					 */
					comment_reply_link( array_merge(
						$args,
						array(
							'add_below' => 'comment',
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
							'before' => '<p>',
							'after' => '</p>'
						)
					) );
				?>

			</article>

	<?php
	}



	/**
	 * Custom implementation of comment_form
	 * @return string Markup for comment form
	 */
	function keel_comment_form() {

		$commenter = wp_get_current_commenter();
		global $user_identity;

		$must_log_in =
			'<p>' .
				sprintf(
					__( 'You must be <a href="%s">logged in</a> to post a comment.' ),
					wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
				) .
			'</p>';

		$logged_in_as =
			'<p>' .
				sprintf(
					__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s">Log out.</a>' ),
					admin_url( 'profile.php' ),
					$user_identity,
					wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
				) .
			'</p>';

		$notes_before = '';
		$notes_after = '';

		$field_author =
			'<div class="row">' .
				'<div class="grid-two-thirds">' .
					'<label for="author">' . __( 'Name' ) . '</label>' .
					'<input type="text" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" required>' .
				'</div>' .
			'</div>';

		$field_email =
			'<div class="row">' .
				'<div class="grid-two-thirds">' .
					'<label for="email">' . __( 'Email' ) . '</label>' .
					'<input type="email" name="email" id="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required>' .
				'</div>' .
			'</div>';

		$field_url =
			'<div class="row">' .
				'<div class="grid-two-thirds">' .
					'<label for="url">' . __( 'Website (optional)' ) . '</label>' .
					'<input type="url" name="url" id="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '">' .
				'</div>' .
			'</div>';

		$field_comment =
			'<div>' .
				'<textarea name="comment" id="comment" required></textarea>' .
				'<p>Share links, code and more with <a href="http://en.support.wordpress.com/markdown-quick-reference/">Markdown</a>.</p>' .
			'</div>';

		$args = array(
			'title_reply' => __( 'Leave a Comment' ),
			'title_reply_to' => __( 'Reply to %s' ),
			'cancel_reply_link' => __( '[Cancel]' ),
			'label_submit' => __( 'Submit Comment' ),
			'comment_field' => $field_comment,
			'must_log_in' => $must_log_in,
			'logged_in_as' => $logged_in_as,
			'comment_notes_before' => $notes_before,
			'comment_notes_after' => $notes_after,
			'fields' => apply_filters(
				'comment_form_default_fields',
				array(
					'author' => $field_author,
					'email' => $field_email,
					'url' => $field_url
				)
			),
		);

		return comment_form( $args );

	}



	/**
	 * Add script for threaded comments if enabled
	 */
	if ( is_single() && comments_open() && get_option('thread_comments') ) {
		wp_enqueue_script( 'comment-reply' );
	}



	/**
	 * Deregister JetPack's devicepx.js script
	 */
	function keel_dequeue_devicepx() {
		wp_dequeue_script( 'devicepx' );
	}
	add_action( 'wp_enqueue_scripts', 'keel_dequeue_devicepx', 20 );



	/**
	 * Remove Jetpack front-end styles
	 * @todo Remove once Jetpack glitch fixed
	 */
	add_filter( 'jetpack_implode_frontend_css', '__return_false' );



	/**
	 * Remove empty paragraphs created by wpautop()
	 * @author Ryan Hamilton
	 * @link https://gist.github.com/Fantikerz/5557617
	 */
	function keel_remove_empty_p( $content ) {
		$content = force_balance_tags( $content );
		$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
		$content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
		return $content;
	}
	add_filter('the_content', 'keel_remove_empty_p', 20, 1);



	/**
	 * Allow new content types in posts
	 */
	$allowedposttags['svg']['xmlns'] = true;
	$allowedposttags['svg']['class'] = true;
	$allowedposttags['svg']['id'] = true;
	$allowedposttags['svg']['viewbox'] = true;
	$allowedposttags['path']['d'] = true;



	/**
	 * Get number of comments (without trackbacks or pings)
	 * @return integer Number of comments
	 */
	function keel_just_comments_count() {
		global $post;
		return count( get_comments( array( 'type' => 'comment', 'post_id' => $post->ID ) ) );
	}



	/**
	 * Get number of trackbacks
	 * @return integer Number of trackbacks
	 */
	function keel_trackbacks_count() {
		global $post;
		return count( get_comments( array( 'type' => 'trackback', 'post_id' => $post->ID ) ) );
	}



	/**
	 * Get number of pings
	 * @return integer Number of pings
	 */
	function keel_pings_count() {
		global $post;
		return count( get_comments( array( 'type' => 'pingback', 'post_id' => $post->ID ) ) );
	}



	/**
	 * Check if more than one page of content exists
	 * @return boolean True if content is paginated
	 */
	function keel_is_paginated() {
		global $wp_query;

		if ( $wp_query->max_num_pages > 1 ) {
			return true;
		} else {
			return false;
		}
	}



	/**
	 * Check if post is the last in a set
	 * @param  object  $wp_query WPQuery object
	 * @return boolean           True if is last post
	 */
	function keel_is_last_post($wp_query) {
		$post_current = $wp_query->current_post + 1;
		$post_count = $wp_query->post_count;
		if ( $post_current == $post_count ) {
			return true;
		} else {
			return false;
		}
	}



	/**
	 * Print a pre formatted array to the browser - useful for debugging
	 * @param array $array Array to print
	 * @author 	Keir Whitaker
	 * @link https://github.com/viewportindustries/starkers/
	 */
	function keel_print_a( $a ) {
		print( '<pre>' );
		print_r( $a );
		print( '</pre>' );
	}



	/**
	 * Pass in a path and get back the page ID
	 * @param  string $path The URL of the page
	 * @return integer Page or post ID
	 * @author Keir Whitaker
	 * @link https://github.com/viewportindustries/starkers/
	 */
	function keel_get_page_id_from_path( $path ) {
		$page = get_page_by_path( $path );
		if( $page ) {
			return $page->ID;
		} else {
			return null;
		};
	}


	require_once( dirname( __FILE__) . '/includes/keel-theme-options.php' );
	require_once( dirname( __FILE__) . '/includes/keel-set-page-width.php' );
