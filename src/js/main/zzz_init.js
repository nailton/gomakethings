/**
 * Script initializations
 */

fluidvids.init({
	selector: ['iframe', 'object'],
	players: ['www.youtube.com', 'player.vimeo.com', 'www.slideshare.net', 'www.hulu.com']
});

document.addEventListener('DOMContentLoaded', function() {
	FastClick.attach(document.body);
}, false);