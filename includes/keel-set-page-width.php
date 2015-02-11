<?php

	/**
	 * Set page to full-width
	 */

	// Create a metabox
	function keel_page_full_width_box() {
		add_meta_box( 'keel_page_full_width_checkbox', 'Set page to full width', 'keel_page_full_width_checkbox', 'page', 'side', 'default');
	}
	add_action('add_meta_boxes', 'keel_page_full_width_box');


	// Add checkbox to the metabox
	function keel_page_full_width_checkbox() {

		global $post;

		// Get checkedbox value
		$full_width = get_post_meta( $post->ID, 'keel_page_full_width_checkbox', true );

		?>

			<fieldset id="keel-page-full-width-box">
				<div>
					<p>
						<label>
							<input type="checkbox" name="keel-page-full-width-checkbox" value="page-full-width" <?php checked( $full_width, 'on' ); ?>>
							Set page to full width
						</label>
					</p>
				</div>
			</fieldset>

		<?php

		// Security field
		wp_nonce_field( 'keel-page-full-width-nonce', 'keel-page-full-width-process' );

	}

	// Save checkbox data
	function keel_save_page_full_width_checkbox( $post_id, $post ) {

		// Verify data came from edit screen
		if ( !wp_verify_nonce( $_POST['keel-page-full-width-process'], 'keel-page-full-width-nonce' ) ) {
			return $post->ID;
		}

		// Verify user has permission to edit post
		if ( !current_user_can( 'edit_post', $post->ID )) {
			return $post->ID;
		}

		// Retrieve checkbox state
		if ( isset( $_POST['keel-page-full-width-checkbox'] ) ) {
			$full_width = 'on';
		} else {
			$full_width = 'off';
		}

		// Update data in database
		update_post_meta( $post->ID, 'keel_page_full_width_checkbox', $full_width );

	}
	add_action('save_post', 'keel_save_page_full_width_checkbox', 1, 2);