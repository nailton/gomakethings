<?php

/* ======================================================================
	footer.php
	Template for footer content.
 * ====================================================================== */

?>

		</section>

		<footer class="container text-center">

			<hr>

			<p class="text-small space-bottom-small">
				<a href="<?php echo site_url(); ?>/search/">
					<svg class="icon icon-link" role="presentation"><use xlink:href="#icon-search"></use></svg>
					Search
				</a>
				&nbsp;&nbsp;/&nbsp;&nbsp;
				<a href="http://feeds.feedburner.com/GoMakeThings">
					<svg class="icon icon-link" role="presentation"><use xlink:href="#icon-rss"></use></svg>
					RSS Feed
				</a>
			</p>
			<p class="text-small space-bottom">
				Made with <svg class="icon icon-heart" role="img" title="love"><use xlink:href="#icon-heart">love</use></svg> by Chris Ferdinandi.<br>
				Copyright 2014 Go Make Things, LLC.
			</p>

		</footer>

		<?php wp_footer(); ?>

	</body>
</html>