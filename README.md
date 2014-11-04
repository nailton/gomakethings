# Go Make Things [![Build Status](https://travis-ci.org/cferdinandi/gomakethings.svg)](https://travis-ci.org/cferdinandi/gomakethings)
The personal website of Chris Ferdinandi. [http://gomakethings.com](http://gomakethings.com)

## Changelog

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