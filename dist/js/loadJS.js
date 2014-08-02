/**
 * gomakethings v6.4.0
 * WordPress theme for GoMakeThings.com, by Chris Ferdinandi.
 * https://github.com/cferdinandi/gomakethings
 */

/*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
var loadJS = function ( src ){
	"use strict";
	var ref = window.document.getElementsByTagName( "script" )[ 0 ];
	var script = window.document.createElement( "script" );
	script.src = src;
	ref.parentNode.insertBefore( script, ref );
	return script;
};