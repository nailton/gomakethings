<?php

	/**
	 * Theme options
	 */


	/**
	 * Register the form setting for our keel_options array.
	 *
	 * This function is attached to the admin_init action hook.
	 *
	 * This call to register_setting() registers a validation callback, keel_theme_options_validate(),
	 * which is used when the option is saved, to ensure that our option values are properly
	 * formatted, and safe.
	 */
	function keel_theme_options_init() {
		register_setting(
			'keel_options', // Options group, see settings_fields() call in keel_theme_options_render_page()
			'keel_theme_options', // Database option, see keel_get_theme_options()
			'keel_theme_options_validate' // The sanitization callback, see keel_theme_options_validate()
		);

		// Register our settings field group
		add_settings_section(
			'general', // Unique identifier for the settings section
			'', // Section title (we don't want one)
			'__return_false', // Section callback (we don't want anything)
			'theme_options' // Menu slug, used to uniquely identify the page; see keel_theme_options_add_page()
		);

		// Register our individual settings fields
		add_settings_field( 'landing_page_hero', __( 'Landing Page Hero', 'keel' ), 'keel_settings_field_landing_page_hero_text', 'theme_options', 'general' );
		add_settings_field( 'blog_posts_message', __( 'Blog Posts Message', 'keel' ), 'keel_settings_field_blog_posts_message', 'theme_options', 'general' );
	}
	add_action( 'admin_init', 'keel_theme_options_init' );

	/**
	 * Change the capability required to save the 'keel_options' options group.
	 *
	 * @see keel_theme_options_init() First parameter to register_setting() is the name of the options group.
	 * @see keel_theme_options_add_page() The edit_theme_options capability is used for viewing the page.
	 *
	 * @param string $capability The capability used for the page, which is manage_options by default.
	 * @return string The capability to actually use.
	 */
	function keel_option_page_capability( $capability ) {
		return 'edit_theme_options';
	}
	add_filter( 'option_page_capability_keel_options', 'keel_option_page_capability' );

	/**
	 * Add our theme options page to the admin menu.
	 * This function is attached to the admin_menu action hook.
	 */
	function keel_theme_options_add_page() {
		$theme_page = add_theme_page(
			__( 'Theme Options', 'keel' ),   // Name of page
			__( 'Theme Options', 'keel' ),   // Label in menu
			'edit_theme_options',          // Capability required
			'theme_options',               // Menu slug, used to uniquely identify the page
			'keel_theme_options_render_page' // Function that renders the options page
		);
	}
	add_action( 'admin_menu', 'keel_theme_options_add_page' );

	/**
	 * Returns the options array for _s.
	 *
	 * @since _s 1.0
	 */
	function keel_get_theme_options() {
		$saved = (array) get_option( 'keel_theme_options' );
		$defaults = array(
			'landing_hero_text' => '',
			'blog_posts_message' => '',
		);

		$defaults = apply_filters( 'keel_default_theme_options', $defaults );

		$options = wp_parse_args( $saved, $defaults );
		$options = array_intersect_key( $options, $defaults );

		return $options;
	}

	/**
	 * Renders the landing page hero textarea setting field.
	 */
	function keel_settings_field_landing_page_hero_text() {
		$options = keel_get_theme_options();
		?>
		<textarea class="large-text" type="text" name="keel_theme_options[landing_hero_text]" id="landing-hero-text" cols="50" rows="10" /><?php echo esc_textarea( $options['landing_hero_text'] ); ?></textarea>
		<label class="description" for="landing-hero-text"><?php _e( 'Add content for the landing page hero.', 'keel' ); ?></label>
		<?php
	}

	/**
	 * Renders the blog posts message textarea setting field.
	 */
	function keel_settings_field_blog_posts_message() {
		$options = keel_get_theme_options();
		?>
		<textarea class="large-text" type="text" name="keel_theme_options[blog_posts_message]" id="blog-posts-message" cols="50" rows="10" /><?php echo esc_textarea( $options['blog_posts_message'] ); ?></textarea>
		<label class="description" for="blog-posts-message"><?php _e( 'Message to be displayed at the end of each blog post.', 'keel' ); ?></label>
		<?php
	}

	/**
	 * Renders the Theme Options administration screen.
	 *
	 * @since _s 1.0
	 */
	function keel_theme_options_render_page() {
		?>
		<div class="wrap">
			<?php screen_icon(); ?>
			<?php $theme_name = function_exists( 'wp_get_theme' ) ? wp_get_theme() : get_current_theme(); ?>
			<h2><?php printf( __( '%s Theme Options', 'keel' ), $theme_name ); ?></h2>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'keel_options' );
					do_settings_sections( 'theme_options' );
					submit_button();
				?>
			</form>
		</div>
		<?php
	}

	/**
	 * Sanitize and validate form input. Accepts an array, return a sanitized array.
	 *
	 * @see keel_theme_options_init()
	 * @todo set up Reset Options action
	 *
	 * @param array $input Unknown values.
	 * @return array Sanitized theme options ready to be stored in the database.
	 */
	function keel_theme_options_validate( $input ) {
		$output = array();

		if ( isset( $input['landing_hero_text'] ) && ! empty( $input['landing_hero_text'] ) )
			$output['landing_hero_text'] = wp_filter_post_kses( $input['landing_hero_text'] );

		if ( isset( $input['blog_posts_message'] ) && ! empty( $input['blog_posts_message'] ) )
			$output['blog_posts_message'] = wp_filter_post_kses( $input['blog_posts_message'] );

		return apply_filters( 'keel_theme_options_validate', $output, $input );
	}

