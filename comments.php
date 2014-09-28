<?php

/**
 * comments.php
 * Template for post comments.
 */

?>

<?php
	// If post is password protected, don't display comments
	if ( post_password_required() ) {
		return;
	}
?>

<h2 id="comments">
	<?php
		$comment_count = keel_just_comments_count();
		if ( $comment_count === 0 ) {
			_e( 'Comment', 'keel' );
		} else if ( $comment_count === 1 ) {
			_e( '1 Comment', 'keel' );
		} else {
			echo $comment_count . ' ' . __( 'Comments', 'keel' );
		}
	?>
</h2>
<p><a href="#respond">Leave a comment</a> or contact me on Twitter at <a href="http://twitter.com/ChrisFerdinandi">@ChrisFerdinandi</a>.</p>

<?php if ( have_comments() ) : // If there are comments ?>

	<?php
		wp_list_comments( array(
			'style' => 'div',
			'avatar_size' => 120,
			'type' => 'comment',
			'callback' => 'keel_comment_layout' // Custom comment structure (in `functions.php`)
		) );
	?>

	<?php if ( !comments_open() ) : // if there are no comments ?>
		<p><?php _e( 'Comments are closed.', 'keel' ) ?></p>
	<?php endif; ?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // if paginated comments ?>
		<nav>
			<p>
				<?php previous_comments_link( __( '&larr; Older', 'keel' ) ); ?>
				<?php if ( get_previous_comments_link() && get_next_comments_link() ) { echo ' / '; } ?>
				<?php next_comments_link( __( 'Newer &rarr;', 'keel' ) ); ?>
			</p>
		</nav>
	<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : // If comments are allowed ?>
	<div class="text-center">
	<?php keel_comment_form(); // Custom comment form (in `functions.php`) ?>
	</div>
<?php endif; // end if comments are open ?>