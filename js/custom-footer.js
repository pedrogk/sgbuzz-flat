// JavaScript Document

$(document).ready(function(){$("a.nudge").hover(function(){$(this).animate({paddingLeft:"10px"},20)},function(){$(this).animate({paddingLeft:0},20)})});

/*$(document).ready(function(){
  $(".widget h2").wrapInner("<span></span>");
	$(".post-thumbnail a").wrapInner("<span></span>");
});*/


$(document).ready(function(){ $(window).scroll(function(){ if ($(this).scrollTop() > 100) { $('#scroll').fadeIn(); } else { $('#scroll').fadeOut(); } }); $('#scroll').click(function(){ $("html, body").animate({ scrollTop: 0 }, 600); return false; }); });

//<![CDATA[
// JQuery hover event with timeout by Taufik Nurrohman
// https://plus.google.com/108949996304093815163/about
(function(c){c.fn.hoverTimeout=function(d,e,f,g){return this.each(function(){var a=null,b=c(this);b.hover(function(){clearTimeout(a);a=setTimeout(function(){e.call(b)},d)},function(){clearTimeout(a);a=setTimeout(function(){g.call(b)},f)})})}})(jQuery);

// SelectNav.js (v. 0.1)
// Converts your <ul>/<ol> navigation into a dropdown list for small screens
// https://github.com/lukaszfiszer/selectnav.js
window.selectnav=function(){return function(s,t){var a,h=function(b){var c;b||(b=window.event);b.target?c=b.target:b.srcElement&&(c=b.srcElement);3===c.nodeType&&(c=c.parentNode);c.value&&(window.location.href=c.value)},m=function(b){b=b.nodeName.toLowerCase();return"ul"===b||"ol"===b},n=function(b){for(var c=1;document.getElementById("selectnav"+c);c++);return b?"selectnav"+c:"selectnav"+(c-1)},q=function(b){g++;var c=b.children.length,a="",d="",f=g-1;if(c){if(f){for(;f--;)d+=u;d+=" "}for(f=0;f<
c;f++){var e=b.children[f].children[0];if("undefined"!==typeof e){var h=e.innerText||e.textContent,k="";l&&(k=-1!==e.className.search(l)||-1!==e.parentElement.className.search(l)?p:"");v&&!k&&(k=e.href===document.URL?p:"");a+='<option value="'+e.href+'" '+k+">"+d+h+"</option>";w&&(e=b.children[f].children[1])&&m(e)&&(a+=q(e))}}1===g&&r&&(a='<option value="">'+r+"</option>"+a);1===g&&(a='<select class="selectnav" id="'+n(!0)+'">'+a+"</select>");g--;return a}};if((a=document.getElementById(s))&&m(a)){document.documentElement.className+=
" js";var d=t||{},l=d.activeclass||"active",v="boolean"===typeof d.autoselect?d.autoselect:!0,w="boolean"===typeof d.nested?d.nested:!0,u=d.indent||"\u2192",r=d.label||"- Navigation -",g=0,p=" selected ";a.insertAdjacentHTML("afterend",q(a));a=document.getElementById(n());a.addEventListener&&a.addEventListener("change",h);a.attachEvent&&a.attachEvent("onchange",h)}}}();
//]]>


//<![CDATA[
/*
  Vertical News Ticker 1.14
  Original by: Tadas Juozapaitis ( kasp3rito [eta] gmail (dot) com )
  http://www.jugbit.com/jquery-vticker-vertical-news-ticker/
  Modified by: Richard Hollis @richhollis - richhollis.co.uk
*/
(function(e){var t={speed:700,pause:3e3,showItems:1,mousePause:true,height:0,animate:true,margin:0,padding:0,startPaused:false};var n={moveUp:function(e,t){n.animate(e,t,"up")},moveDown:function(e,t){n.animate(e,t,"down")},animate:function(t,n,r){var i=t.itemHeight;var s=t.options;var o=t.element;var u=o.children("ul");var a=r==="up"?"li:first":"li:last";var f=u.children(a).clone(true);if(s.height>0)i=u.children("li:first").height();i+=s.margin+s.padding*2;if(r==="down")u.css("top","-"+i+"px").prepend(f);if(n&&n.animate){if(t.animating)return;t.animating=true;var l=r==="up"?{top:"-="+i+"px"}:{top:0};u.animate(l,s.speed,function(){e(u).children(a).remove();e(u).css("top","0px");t.animating=false})}else{u.children(a).remove();u.css("top","0px")}if(r==="up")f.appendTo(u)},nextUsePause:function(){var t=e(this).data("state");var n=t.options;if(t.isPaused||t.itemCount<2)return;r.next.call(this,{animate:n.animate})},startInterval:function(){var t=e(this).data("state");var r=t.options;var i=this;t.intervalId=setInterval(function(){n.nextUsePause.call(i)},r.pause)},stopInterval:function(){var t=e(this).data("state");if(!t)return;if(t.intervalId)clearInterval(t.intervalId);t.intervalId=undefined},restartInterval:function(){n.stopInterval.call(this);n.startInterval.call(this)}};var r={init:function(i){r.stop.call(this);var s=jQuery.extend({},t);var i=e.extend(s,i);var o=e(this);var u={itemCount:o.children("ul").children("li").length,itemHeight:0,itemMargin:0,element:o,animating:false,options:i,isPaused:i.startPaused?true:false,pausedByCode:false};e(this).data("state",u);o.css({overflow:"hidden",position:"relative"}).children("ul").css({position:"absolute",margin:0,padding:0}).children("li").css({margin:i.margin,padding:i.padding});if(isNaN(i.height)||i.height===0){o.children("ul").children("li").each(function(){var t=e(this);if(t.height()>u.itemHeight)u.itemHeight=t.height()});o.children("ul").children("li").each(function(){var t=e(this);t.height(u.itemHeight)});var a=i.margin+i.padding*2;o.height((u.itemHeight+a)*i.showItems+i.margin)}else{o.height(i.height)}var f=this;if(!i.startPaused){n.startInterval.call(f)}if(i.mousePause){o.bind("mouseenter",function(){if(u.isPaused===true)return;u.pausedByCode=true;n.stopInterval.call(f);r.pause.call(f,true)}).bind("mouseleave",function(){if(u.isPaused===true&&!u.pausedByCode)return;u.pausedByCode=false;r.pause.call(f,false);n.startInterval.call(f)})}},pause:function(t){var n=e(this).data("state");if(!n)return undefined;if(n.itemCount<2)return false;n.isPaused=t;if(t)e(this).addClass("paused");else e(this).removeClass("paused")},next:function(t){var r=e(this).data("state");if(!r)return undefined;if(r.animating||r.itemCount<2)return false;n.restartInterval.call(this);n.moveUp(r,t)},prev:function(t){var r=e(this).data("state");if(!r)return undefined;if(r.animating||r.itemCount<2)return false;n.restartInterval.call(this);n.moveDown(r,t)},stop:function(){var t=e(this).data("state");if(!t)return undefined;n.stopInterval.call(this)},remove:function(){var t=e(this).data("state");if(!t)return undefined;n.stopInterval.call(this);var r=t.element;r.unbind();r.remove()}};e.fn.vTicker=function(t){if(r[t]){return r[t].apply(this,Array.prototype.slice.call(arguments,1))}else if(typeof t==="object"||!t){return r.init.apply(this,arguments)}else{e.error("Method "+t+" does not exist on jQuery.vTicker")}}})(jQuery)
//]]>

if (window.jstiming) window.jstiming.load.tick('widgetJsBefore');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////