<?php

/**
 * footer.php
 * Template for footer content.
 */

?>

		</main><!-- /#main -->

		<footer class="container text-center">

			<hr>

			<p class="text-small margin-bottom-small">
				<a class="icon-link-wrap" href="<?php echo site_url(); ?>/search/">
					<svg class="icon">
						<use xlink:href="#icon-search"></use>&nbsp;
					</svg>
					Search
				</a>
				&nbsp;&nbsp;/&nbsp;&nbsp;
				<a class="icon-link-wrap" href="http://feeds.feedburner.com/GoMakeThings">
					<svg class="icon">
						<use xlink:href="#icon-rss"></use>&nbsp;
					</svg>
					RSS Feed
				</a>
			</p>
			<p class="text-small margin-bottom-large">
				Made with &lt;3 by Chris Ferdinandi.<br>
				Copyright 2014 Go Make Things, LLC.
			</p>

		</footer>


		<?php wp_footer(); ?>

	</body>
</html>