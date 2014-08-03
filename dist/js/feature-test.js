/**
 * gomakethings v6.4.1
 * WordPress theme for GoMakeThings.com, by Chris Ferdinandi.
 * https://github.com/cferdinandi/gomakethings
 */

/**
 * Test for inline SVG support
 * @return {Boolean} True if supported
 */
var supportsSVG = function () {
  return !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;
};
if ( supportsSVG() ) { document.documentElement.className = ' svg'; }