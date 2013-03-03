/* Script credits: https://github.com/scottjehl/iOS-Orientationchange-Fix, https://github.com/toddmotto/fluidvids */
(function(w){var ua=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(ua)&&ua.indexOf("AppleWebKit")>-1)){return;}
var doc=w.document;if(!doc.querySelector){return;}
var meta=doc.querySelector("meta[name=viewport]"),initialContent=meta&&meta.getAttribute("content"),disabledZoom=initialContent+",maximum-scale=1",enabledZoom=initialContent+",maximum-scale=10",enabled=true,x,y,z,aig;if(!meta){return;}
function restoreZoom(){meta.setAttribute("content",enabledZoom);enabled=true;}
function disableZoom(){meta.setAttribute("content",disabledZoom);enabled=false;}
function checkTilt(e){aig=e.accelerationIncludingGravity;x=Math.abs(aig.x);y=Math.abs(aig.y);z=Math.abs(aig.z);if((!w.orientation||w.orientation===180)&&(x>7||((z>6&&y<8||z<8&&y>6)&&x>5))){if(enabled){disableZoom();}}
else if(!enabled){restoreZoom();}}
w.addEventListener("orientationchange",restoreZoom,false);w.addEventListener("devicemotion",checkTilt,false);})(this);(function(){var iframes=document.getElementsByTagName('iframe');for(var i=0;i<iframes.length;++i){var iframe=iframes[i];var players=/www.youtube.com|player.vimeo.com/;if(iframe.src.search(players)!==-1){var videoRatio=(iframe.height/iframe.width)*100;iframe.style.position='absolute';iframe.style.top='0';iframe.style.left='0';iframe.width='100%';iframe.height='100%';var div=document.createElement('div');div.className='video-wrap';div.style.width='100%';div.style.position='relative';div.style.paddingTop=videoRatio+'%';var parentNode=iframe.parentNode;parentNode.insertBefore(div,iframe);div.appendChild(iframe);}}})();
