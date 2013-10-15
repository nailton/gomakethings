<?php
	// If post is password protected, don't display comments
	if ( post_password_required() ) {
		return;
	}
?>

<?php if ( comments_open() || $comments ) : ?>
	<h2 id="comments"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></h2>
	<p><a href="#respond">Leave a comment</a> or contact me on Twitter at <a href="http://twitter.com/ChrisFerdinandi">@ChrisFerdinandi</a>.</p>
<?php endif; ?>

<?php if ( $comments ) : ?>

	<?php foreach ($comments as $comment) : ?>

		<article id="comment-<?php comment_ID() ?>">

			<hr class="no-space-bottom">

			<?php if ($comment->comment_approved == '0') : ?>
				<p class="space-top space-bottom-small"><em>Your comment is being held for moderation, either because it contained a link or WordPress thought it was spam. I'll approve it as soon as possible. -Chris</em></p>
			<?php endif; ?>

			<header class="group">
				<figure>
					<p><?php echo get_avatar( $comment, $size = '120' ); // $size at 2x for retina displays ?></p>
				</figure>
				<h3 class="text-left no-space"><?php comment_author_link() ?></h3>
				<aside>
					<p class="text-small text-muted"><?php comment_date('F jS, Y') ?><?php edit_comment_link('Edit', ' &bull; ', ''); ?></p>
				</aside>
			</header>

			<?php comment_text() ?>

		</article>

	<?php endforeach; // end for each comment ?>


<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<p><?php _e( 'Comments are closed.', 'kraken' ); ?></p>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

	<h2 id="respond">Leave a Reply</h2>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<!-- If user must be logged in to comment -->
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() . '#respond' ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
	<form class="text-center" id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

		<?php if ( $user_ID ) : ?>
			<p>Logged in as <?php echo $user_identity; ?>. <a href="<?php echo wp_logout_url( get_permalink() . '#respond' ); ?>">Logout</a></p>
		<?php else : ?>
			<div class="row">
					<div class="grid-4 offset-1">
					<label for="author" class="text-small">Your Name</label>
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" required>
					</div>
			</div>

			<div class="row">
					<div class="grid-4 offset-1">
					<label for="email" class="text-small">Your Email</label>
					<input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" required>
					</div>
			</div>

			<div class="row">
					<div class="grid-4 offset-1">
					<label for="url" class="text-small">Your Website (optional)</label>
					<input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" >
					</div>
			</div>
		<?php endif; ?>

			<textarea name="comment" id="comment" tabindex="4" required></textarea>

			<input name="submit" type="submit" class="input-inline btn" id="submit" tabindex="5" value="Submit Comment">
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

			<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>

<?php endif; // if comments are open ?>