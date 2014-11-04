<?php

/**
 * 404.php
 * Template for 404 error pages.
 */

get_header(); ?>


<article>
	<header>
		<h1>Oh Snap!</h1>
	</header>

	<p>The page you're looking for was looted by pirates! (<em>Or more likely, I messed up and moved something on you&mdash;sorry!</em>) At this point, you have a few options:</p>

	<ol>
		<li>Try <a href="<?php echo site_url(); ?>/search/">searching</a> for it.</li>
		<li>Become a pirate hunter and embark on a quest to reclaim the lost page.</li>
		<li>Give up and go make something awesome instead.</li>
	</ol>

</article>


<?php get_footer(); ?>