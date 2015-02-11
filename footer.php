<?php

/**
 * footer.php
 * Template for footer content.
 */

?>

		</main><!-- /#main -->

		<footer class="container container-large">

			<hr class="margin-bottom">

			<div class="row">
				<div class="grid-half grid-flip text-right-large">
					<ul class="list-inline text-small margin-bottom-small">
						<li>
							<a class="icon-link-wrap" href="<?php echo site_url(); ?>/search/">
								<svg class="icon">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/icons.svg#icon-search"></use>&nbsp;
								</svg>
								Search
							</a>
						</li>
						<li>
							<a class="icon-link-wrap" href="http://feeds.feedburner.com/GoMakeThings">
								<svg class="icon">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/icons.svg#icon-rss"></use>&nbsp;
								</svg>
								RSS Feed
							</a>
						</li>
					</ul>
				</div>
				<div class="grid-half">
					<p class="text-small margin-bottom-large">
						Made with &lt;3 by Chris Ferdinandi.<br>
						Copyright 2014 Go Make Things, LLC.
					</p>
				</div>
			</div>


		</footer>


		<?php wp_footer(); ?>

	</body>
</html>