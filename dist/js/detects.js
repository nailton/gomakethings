/**
 * gomakethings v8.0.0
 * WordPress theme for GoMakeThings.com, by Chris Ferdinandi.
 * https://github.com/cferdinandi/gomakethings
 * 
 * Free to use under the MIT License.
 * http://gomakethings.com/mit/
 */

/**
 * Detect @font-face support
 */
(function (root, factory) {
	if ( typeof define === 'function' && define.amd ) {
		define('detectFontFace', factory(root));
	} else if ( typeof exports === 'object' ) {
		module.exports = factory(root);
	} else {
		root.detectFontFace = factory(root);
	}
})(window || this, function (root) {

	'use strict';

	// Create exports variable
	var exports = {
		supports: {}
	}; // Object for public APIs


	//
	// Methods
	//

	/**
	 * Test for @font-face support
	 * @return {Boolean} Returns true if supported
	 */
	exports.supports.fontFace = function () {

		var doc = document,
			head = doc.head || doc.getElementsByTagName( "head" )[ 0 ] || doc.documentElement,
			style = doc.createElement( "style" ),
			rule = "@font-face { font-family: 'webfont'; src: 'https://'; }",
			supportFontFace = false,
			blacklist = (function() {
				var ua = root.navigator.userAgent.toLowerCase(),
					wkvers = ua.match( /applewebkit\/([0-9]+)/gi ) && parseFloat( RegExp.$1 ),
					webos = ua.match( /w(eb)?osbrowser/gi ),
					wppre8 = ua.indexOf( "windows phone" ) > -1 && root.navigator.userAgent.match( /IEMobile\/([0-9])+/ ) && parseFloat( RegExp.$1 ) >= 9,
					oldandroid = wkvers < 533 && ua.indexOf( "Android 2.1" ) > -1;

				return webos || oldandroid || wppre8;
			}()),
			sheet;

		style.type = "text/css";
		head.insertBefore( style, head.firstChild );
		sheet = style.sheet || style.styleSheet;

		if ( !!sheet && !blacklist ) {
			try {
				sheet.insertRule( rule, 0 );
				supportFontFace = sheet.cssRules[ 0 ].cssText && ( /webfont/i ).test( sheet.cssRules[ 0 ].cssText );
				sheet.deleteRule( sheet.cssRules.length - 1 );
			} catch( e ) { }
		}

		return supportFontFace;
	};

	/**
	 * Test for pseudo selector support
	 * @param  {String} selector Selector to test
	 * @return {Boolean} Returns true if supported
	 */
	exports.supports.selector = function (selector) {

		var support,
			sheet,
			doc = document,
			root = doc.documentElement,
			head = root.getElementsByTagName('head')[0],

			impl = doc.implementation || {
				hasFeature: function() {
					return false;
				}
			},

		link = doc.createElement("style");
		link.type = 'text/css';

		(head || root).insertBefore(link, (head || root).firstChild);

		sheet = link.sheet || link.styleSheet;

		if (!(sheet && selector)) return false;

		support = impl.hasFeature('CSS2', '') ?

		function(selector) {
			try {
				sheet.insertRule(selector + '{ }', 0);
				sheet.deleteRule(sheet.cssRules.length - 1);
			} catch (e) {
				return false;
			}
			return true;
		} : function(selector) {
			sheet.cssText = selector + ' { }';
			return sheet.cssText.length !== 0 && !(/unknown/i).test(sheet.cssText) && sheet.cssText.indexOf(selector) === 0;
		};

		return support(selector);

	};


	//
	// Public APIs
	//

	return exports;

});
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