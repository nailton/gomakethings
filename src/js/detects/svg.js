/**
 * Detect SVG support
 */
(function (root, factory) {
	if ( typeof define === 'function' && define.amd ) {
		define('detectSvg', factory(root));
	} else if ( typeof exports === 'object' ) {
		module.exports = factory(root);
	} else {
		root.detectSvg = factory(root);
	}
})(window || this, function (root) {

	'use strict';

	// Create exports variable
	var exports = {};

	// SVG feature detection
	exports.supports = !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;

	//
	// Public APIs
	//

	return exports;

});