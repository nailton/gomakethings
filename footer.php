<?php

/**
 * footer.php
 * Template for footer content.
 */

?>

			</div><!-- /.container -->
		</main><!-- /#main -->

		<footer class="container container-large">

			<hr class="margin-bottom">

			<div class="row margin-bottom">
				<div class="grid-third">
					<h2 class="h3 no-padding-top">Contact Me</h2>
					<ul class="list-unstyled text-small">
						<li>
							<a class="icon-link-wrap" href="mailto:<?php echo antispambot('hello@gomakethings.com'); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M20.35 16.574L32 24.61V6.11zM0 6.112V24.61l11.65-8.037zm16 14.37l-2.78-2.498L0 26h32l-13.22-8.016zM31.04 6H.96L16 17.308z"/></svg><span class="icon-fallback-text">Email: </span><?php echo antispambot('hello@gomakethings.com'); ?>
							</a>
						</li>
						<li>
							<a href="tel:<?php echo antispambot('(774) 277-8216'); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M23 0H9C7.35 0 6 1.35 6 3v26c0 1.65 1.35 3 3 3h14c1.65 0 3-1.35 3-3V3c0-1.65-1.35-3-3-3zM12 1.5h8v1h-8v-1zM16 30c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm8-6H8V4h16v20z"/></svg><span class="icon-fallback-text">Phone: </span><?php echo antispambot('(774) 277-8216'); ?>
							</a>
						</li>
				</div>
				<div class="grid-two-thirds">
					<h2 class="h3 no-padding-top">More Awesomeness</h2>

					<div class="row">
						<div class="grid-half">
							<ul class="list-unstyled text-small no-margin-bottom">
								<li>
									<a href="<?php echo site_url(); ?>/newsletter/">
										<svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon margin-right" viewBox="0 0 32 32"><path d="M29 0h-26c-1.65 0-3 1.35-3 3v18c0 1.65 1.35 3 3 3h5v8l9.6-8h11.4c1.65 0 3-1.35 3-3v-18c0-1.65-1.35-3-3-3zM14 18.828l-6.414-7.414 1.828-1.828 4.586 3.586 8.586-7.586 1.829 1.828-10.414 11.414z"></path></svg>The Newsletter
									</a>
								</li>
								<li>
									<a href="<?php echo site_url(); ?>/wicked-fast-websites/">
										<svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon margin-right" viewBox="0 0 32 32"><path d="M28.074 2h-24.074v4h-2.926c-0.55 0-1.074 0.391-1.074 0.941v2c0 0.55 0.524 1.059 1.074 1.059h2.926v2h-2.926c-0.55 0-1.074 0.392-1.074 0.941v2c0 0.55 0.524 1.059 1.074 1.059h2.926v2h-2.926c-0.55 0-1.074 0.392-1.074 0.942v2c0 0.55 0.524 1.058 1.074 1.058h2.926v2h-2.926c-0.55 0-1.074 0.392-1.074 0.942v2c0 0.55 0.524 1.058 1.074 1.058h2.926v4h24.074c1.105 0 1.926-0.954 1.926-2.058v-26c0-1.105-0.822-1.942-1.926-1.942zM10 30h-4v-2h1.074c0.55 0 0.926-0.509 0.926-1.058v-2c0-0.55-0.376-0.942-0.926-0.942h-1.074v-2h1.074c0.55 0 0.926-0.509 0.926-1.058v-2c0-0.55-0.376-0.942-0.926-0.942h-1.074v-2h1.074c0.55 0 0.926-0.508 0.926-1.059v-2c0-0.55-0.376-0.941-0.926-0.941h-1.074v-2h1.074c0.55 0 0.926-0.508 0.926-1.059v-2c0-0.55-0.376-0.941-0.926-0.941h-1.074v-2h4v26z"></path></svg>The Book
									</a>
								</li>
								<!-- <li>
									<a href="#FIX-ME">
										<svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon margin-right" viewBox="0 0 32 32"><path d="M30.662 5.003c-4.488-0.645-9.448-1.003-14.662-1.003s-10.174 0.358-14.662 1.003c-0.86 3.366-1.338 7.086-1.338 10.997s0.477 7.63 1.338 10.997c4.489 0.645 9.448 1.003 14.662 1.003s10.174-0.358 14.662-1.003c0.86-3.366 1.338-7.086 1.338-10.997s-0.477-7.63-1.338-10.997zM12 22v-12l10 6-10 6z"></path></svg>The Podcast
									</a>
								</li> -->
							</ul>
						</div>
						<div class="grid-half">
							<ul class="list-unstyled text-small no-margin-bottom">
								<li>
									<a href="<?php echo site_url(); ?>/search/">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M31.008 27.23l-7.58-6.446c-.784-.705-1.622-1.03-2.3-.998C22.92 17.69 24 14.97 24 12 24 5.37 18.627 0 12 0S0 5.37 0 12c0 6.626 5.374 12 12 12 2.973 0 5.692-1.082 7.788-2.87-.03.676.293 1.514.998 2.298l6.447 7.58c1.105 1.226 2.908 1.33 4.008.23s.997-2.903-.23-4.007zM12 20c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8z"/></svg>Search
									</a>
								</li>
								<li>
									<a href="<?php echo site_url(); ?>/free-updates/">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon margin-right" viewBox="0 0 32 32"><path d="M4.26 23.467C1.91 23.467 0 25.384 0 27.72c0 2.348 1.91 4.243 4.26 4.243 2.357 0 4.264-1.895 4.264-4.244 0-2.337-1.907-4.253-4.265-4.253zM.004 10.873v6.133c3.993 0 7.75 1.562 10.577 4.39 2.825 2.823 4.384 6.596 4.384 10.604h6.16c0-11.65-9.478-21.127-21.12-21.127zM.012 0v6.136C14.255 6.136 25.848 17.74 25.848 32H32C32 14.36 17.648 0 .012 0z"/></svg>Free Updates
									</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<p>
				<span class="text-small">
					Made with &lt;3 by Chris Ferdinandi. Copyright <?php echo date( 'Y' ); ?> Go Make Things, LLC.<!-- <br> -->
					<!-- Training icon by <a href="https://thenounproject.com/term/projection-screen/1318/">Garrett Knoll</a>. -->
				</span>
			</p>

		</footer>


		<?php wp_footer(); ?>

	</body>
</html>