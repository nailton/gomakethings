/**
 * gomakethings v7.0.2
 * WordPress theme for GoMakeThings.com, by Chris Ferdinandi.
 * https://github.com/cferdinandi/gomakethings
 */

/**
 * Test for @font-face support
 * @param  {Node}  win Window
 * @param  {String} undefined Prevents undefined from being defined in ES3
 * @return {Boolean} Returns true if supported
 */
var isFontFaceSupported = function ( win, undefined ) {

	"use strict";

	var doc = document,
		head = doc.head || doc.getElementsByTagName( "head" )[ 0 ] || doc.documentElement,
		style = doc.createElement( "style" ),
		rule = "@font-face { font-family: 'webfont'; src: 'https://'; }",
		supportFontFace = false,
		blacklist = (function() {
			var ua = win.navigator.userAgent.toLowerCase(),
				wkvers = ua.match( /applewebkit\/([0-9]+)/gi ) && parseFloat( RegExp.$1 ),
				webos = ua.match( /w(eb)?osbrowser/gi ),
				wppre8 = ua.indexOf( "windows phone" ) > -1 && win.navigator.userAgent.match( /IEMobile\/([0-9])+/ ) && parseFloat( RegExp.$1 ) >= 9,
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
}( this );

/**
 * Test for pseudo selector support
 * @param  {String} selector Selector to test
 * @return {Boolean} Returns true if supported
 */
var selectorSupported = function (selector) {

	'use strict';

	var support, sheet, doc = document,
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

// If @font-face and pseudo selectors are supported, add '.font-face' class to <html> element
if (isFontFaceSupported && selectorSupported(':before')) {
	document.documentElement.className += (document.documentElement.className ? ' ' : '') + 'font-face';
}

// /*! fontfaceonload - v0.0.1 - 2014-08-04
//  * https://github.com/zachleat/fontfaceonload
//  * Copyright (c) 2014 Zach Leatherman (@zachleat)
//  * MIT License */

// ;(function( win, doc ) {
// 	"use strict";

// 	var DELAY = 100,
// 		TEST_STRING = 'AxmTYklsjo190QW',
// 		TOLERANCE = 2, // px

// 		SANS_SERIF_FONTS = 'sans-serif',
// 		SERIF_FONTS = 'serif',

// 		parent,
// 		html = '<div style="font-family:%s;position:absolute;top:0;left:-9999px;font-size:48px">' + TEST_STRING + '</div>',
// 		sansSerif,
// 		serif,
// 		dimensions,
// 		appended = false;

// 	function initialMeasurements( fontFamily ) {
// 		dimensions = {
// 			sansSerif: {
// 				width: sansSerif.offsetWidth,
// 				height: sansSerif.offsetHeight
// 			},
// 			serif: {
// 				width: serif.offsetWidth,
// 				height: serif.offsetHeight
// 			}
// 		};

// 		// Make sure we set the new font-family after we take our initial dimensions:
// 		// handles the case where FontFaceOnload is called after the font has already
// 		// loaded.
// 		sansSerif.style.fontFamily = fontFamily + ', ' + SANS_SERIF_FONTS;
// 		serif.style.fontFamily = fontFamily + ', ' + SERIF_FONTS;
// 	}

// 	function load( fontFamily, options ) {
// 		var startTime = new Date();

// 		if( !parent ) {
// 			parent = doc.createElement( 'div' );
// 		}

// 		parent.innerHTML = html.replace(/\%s/, SANS_SERIF_FONTS ) + html.replace(/\%s/, SERIF_FONTS );
// 		sansSerif = parent.firstChild;
// 		serif = sansSerif.nextSibling;

// 		if( options.glyphs ) {
// 			sansSerif.innerHTML += options.glyphs;
// 			serif.innerHTML += options.glyphs;
// 		}

// 		(function checkDimensions() {
// 			if( !appended && doc.body ) {
// 				appended = true;
// 				doc.body.appendChild( parent );

// 				initialMeasurements( fontFamily );
// 			}

// 			if( appended && dimensions &&
// 				( Math.abs( dimensions.sansSerif.width - sansSerif.offsetWidth ) > TOLERANCE ||
// 					Math.abs( dimensions.sansSerif.height - sansSerif.offsetHeight ) > TOLERANCE ||
// 					Math.abs( dimensions.serif.width - serif.offsetWidth ) > TOLERANCE ||
// 					Math.abs( dimensions.serif.height - serif.offsetHeight ) > TOLERANCE ) ) {
// 				options.success();
// 			} else if( ( new Date() ).getTime() - startTime.getTime() > options.timeout ) {
// 				options.error();
// 			} else {
// 				setTimeout(function() {
// 					checkDimensions();
// 				}, DELAY);
// 			}
// 		})();
// 	} // end load()

// 	var FontFaceOnload = function( fontFamily, options ) {
// 		var defaultOptions = {
// 				glyphs: '',
// 				success: function() {},
// 				error: function() {},
// 				timeout: 10000
// 			},
// 			timeout;

// 		if( !options ) {
// 			options = {};
// 		}

// 		for( var j in defaultOptions ) {
// 			if( !options.hasOwnProperty( j ) ) {
// 				options[ j ] = defaultOptions[ j ];
// 			}
// 		}

// 		if( "fonts" in doc ) {
// 			doc.fonts.load( "1em " + fontFamily ).then(function() {
// 				options.success();

// 				win.clearTimeout( timeout );
// 			});

// 			if( options.timeout ) {
// 				timeout = win.setTimeout(function() {
// 					options.error();
// 				}, options.timeout );
// 			}
// 		} else {
// 			load( fontFamily, options );
// 		}
// 	};

// 	// intentional global
// 	win.FontFaceOnload = FontFaceOnload;
// })( this, this.document );


// // Add '.font-face' class to <html> on load
// FontFaceOnload( 'icomoon', {
// 	success: function() {
// 		document.documentElement.className = ' font-face';
// 	},
// 	glyphs: '\uE600\uE601\uE602'
// });