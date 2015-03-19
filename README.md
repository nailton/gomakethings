# Go Make Things [![Build Status](https://travis-ci.org/cferdinandi/gomakethings.svg)](https://travis-ci.org/cferdinandi/gomakethings)
The personal website of Chris Ferdinandi. [http://gomakethings.com](http://gomakethings.com)

## Changelog

* v9.2.0 - TBD
	* Updated site navigation and footer.
	* Removed expand/collapse menu on smaller viewports.
	* Switch to Normalize.css.
	* @todo Added content for consulting and training services.
	* Added method to check for cached CSS and use instead of inlining critical CSS..
	* Added mustard test and asynchronous loading for main JavaScript.
* v9.1.0 - March 1, 2015
	* Switched to Feedburner for header feed discovery link.
	* Added search form with query to search results page.
	* Fixed bug preventing search term from displaying in search form.
	* Added hero background images directly to CSS and optimized for screen-sizes.
	* Inlined critical CSS for better performance.
	* Automated cache-busting on minified files.
* v9.0.2 - February 17, 2015
	* Updated page structure for better content wrapping.
* v9.0.1 - February 16, 2015
	* Added improved SVG detection (check against Opera Mini).
* v9.0.0 - February 16, 2015
	* Removed `.container` class on the `<main>` element for `page-plain.php` templates.
	* Removed `hr` from navigation in header.
	* Added generous bottom margin to navigation in header.
	* Added `.container-large` modifier class for wider layouts.
	* Updated navigation active class logic.
	* Update active class navigation styling.
	* Added custom metabox to control page width.
	* Moved `.container` class to `content.php`.
	* Added expand-and-collapse navigation on small viewports.
	* Added landing page hero options.
	* Added option to adjust page width on per-page basis.
	* Updated button styling.
	* Add custom header support to theme for hero image.
	* Combined `loadCSS()` into `detects.js`.
* v8.1.0 - January 4, 2015
	* Added italics to blockquotes.
	* Added method to stop `wpautop` from adding empty `<p>` tags.
	* Added block-level links.
* v8.0.5 - November 6, 2014
	* Added missing icons.
* v8.0.4 - November 5, 2014
	* Added new section for open source code.
	* Updated talks and client projects pages.
	* Removed unused SVGs and classes.
* v8.0.3 - November 5, 2014
	* Added fix for WordPress subscribe to comments form styling.
* v8.0.2 - November 4, 2014
	* Switched to external SVG file.
	* Added SVG4Everybody for IE support.
	* Reconfigured inline vs. externally loaded JS.
	* Added temp fix for `jetpack.css` bug.
	* Added shortcode for in-Editor access to current theme directory.
* v8.0.1 - November 4, 2014
	* Made several performance updates.
* v8.0.0 - November 4, 2014
	* Updated base theme to Keel.
	* Updated to Kraken 5.
	* Switched to left-aligned layout.
	* Changed default font to PT Serif.
	* Switched to navbar style navigation on bigger screens.
	* Converted icons to SVG.
	* Updated feature detection scripts for better extensibility.
	* Conditionally load main.js using loadJS after passing mustard test.
	* Conditionally load Google web fonts using loadCSS only if @font-face supported.
	* Added width-adjustment and animation to search field on larger screens.
	* Updated screenshot to HDPI.
* v7.3.0 - October 13, 2014
	* Updated Gulp tasks.
	* Fixed skip link for better accessibility.
	* Removed HTML5 shim.
	* Added `<main>` HTML5 semantic element.
* v7.2.0 - October 1, 2014
	* Increased font size on very large screens.
* v7.1.0 - September 26, 2014
	* Converted to Keel for base template.
	* Added comments back to site.
	* Made various Sass/Gulp improvements.
	* Added comment span honeypot.
	* Added `lazypipe` to `gulpfile.js`.
* v7.0.2 - August 8, 2014
	* Converted to CSSDoc.
* v7.0.1 - August 5, 2014
	* Fixed icon font detect.
* v7.0.0 - August 5, 2014
	* Reverted back to icon fonts for better mobile performance.
	* Updated icon styles to be more OOCSS and have greater flexibility.
	* Changed `.text-tall` and `.text-venti` to `.text-large` and `.text-xlarge`.
* v6.4.3 - August 2, 2014
	* After much testing, removing inline CSS.
* v6.4.2 - August 2, 2014
	8 Added inline CSS back in.
* v6.4.1 - August 2, 2014
	* Added SVG feature test for some specific styling.
	* Removed inline CSS. Was hurting time to first render.
* v6.4.0 - August 1, 2014
	* Converted to GulpJS.
	* Switched to three number versioning.
	* Inlined CSS for better performance.
	* Converted icon font to SVGs.
	* Deregister JetPack's devicepx script.
* v6.3 - March 16, 2014
	* Set `.text-tall` to same size on all screen sizes.
* v6.2 - March 15, 2014
	* Added skip link.
	* Improved `content.php` template.
* v6.1 - March 15, 2014
	* Updated icons for new projects page.
* v6.0 - March 12, 2013
	* Upgraded to Kraken 3 and Sass.
	* Updated typographic scale from 17px base to 16px base.
* v1-5
	* A bunch of stuff was changed but I never kept a proper changelog.