jQuery(document).ready(function($) {

	//Main menu

	$('#nav #menuhlng1 li:first').addClass('mhome');

	$('#nav #menuhlng1 li.mhome a').text('');

	var n = $('#nav #menuhlng1 > li').length;

	for (var i = 1; i <= n; i++){

		var expanded = $('#menuhlng1 li:nth-child('+ i + ').expanded > a').text();

		if (expanded != '') $('#menuhlng1 li:nth-child('+ i + ').expanded > a').text(expanded+'  »');

	}

	//Search

	$('#search-block-form input[type=submit]').val('');
	if($('html').attr('id') == 'rtl-on'){
		$('.breadcrumb span.arrow').remove();
	}

	//Block content

	$('.tag-post1 ul li:not(:nth-child(1)) .inner-content p').remove();

	$('.tag-widget-2 ul li:not(:nth-child(1)) .inner-content p').remove();

	$('#tag-widget3 ul li:not(:nth-child(1)) .inner-content p').remove();

	$('#tag-widget7 ul li:not(:nth-child(1)) .inner-content p').remove();

	$('#contact-site-form div.form-item-subject').remove();

	//Breadcrumb

	$('.breadcrumb span a').addClass('crumb');

	//Block tab color

	var color = $('.block-quicktabs').attr('data-color');

	if (color !=''){

		$('#quicktabs-tab_sidebar_second ul.quicktabs-style-nostyle li.active a').css('background-color', color);



		$('#quicktabs-tab_sidebar_second ul.quicktabs-style-nostyle li a').click(function(event) {

			/* Act on the event */

			$('#quicktabs-tab_sidebar_second ul.quicktabs-style-nostyle li a').css('background-color', '#000');

			$(this).css('background-color', color);

		});

	}



});



function pbtpost(num, obj) {

	jQuery("."+obj).flexslider({

		animation: "slide",

		direction: "right",

		selector: ".scroll-item > li",

		animationLoop: true,

		itemWidth: 250,

		pauseOnHover: true,

		move: 1,

		itemMargin: 0,

		minItems: 1,

		mousewheel: true,

		maxItems: num

	})



}



//<![CDATA[

$("#nav li ul, #nav2 li ul").removeClass("hidden");$("#nav li, #nav2 li").hoverTimeout(100,function(){$("ul",this).filter(":not(:animated)").slideDown(400,"easeInOutBack")},500,function(){$("ul",this).slideUp(500,"swing")});

//]]>



$(function(){

	$("ul#ticker01").liScroll();

});



//<![CDATA[

$(function() {

  $('#hot-ticker').vTicker();

});

//]]>



// Mobile menu init



$(function () {

	$("#menuhlng2").tinyNav({

		header: 'Navigation', // String: Specify text for "header" and show header instead of the active item

	});

});



$(function () {

	$("#menuhlng1").tinyNav({

		header: 'Navigation', // String: Specify text for "header" and show header instead of the active item

	});

	if($('html').attr('id') == 'rtl-on'){
		$('#header-wrapper select').attr('dir', 'rtl');
	}

});



if ($('html').attr('id') =='rtl-on'){

	jQuery.fn.liScroll=function(e){e=jQuery.extend({travelocity:.04},e);return this.each(function(){function a(e,n){t.animate({right:"-="+e},n,"linear",function(){t.css("right",s);a(o,u)})}var t=jQuery(this);t.addClass("newsticker");var n=6e3;t.find("li").each(function(e){n+=jQuery(this,e).outerWidth(true)});var r=t.wrap("<div class='mask'></div>");var i=t.parent().wrap("<div class='tickercontainer'></div>");var s=t.parent().parent().width();t.width(n);var o=n+s;var u=o/e.travelocity;a(o,u);t.hover(function(){jQuery(this).stop()},function(){var t=jQuery(this).offset();var r=t.right+n;var i=r/e.travelocity;a(r,i)})})}

} else {

	jQuery.fn.liScroll=function(e){e=jQuery.extend({travelocity:.04},e);return this.each(function(){function a(e,n){t.animate({left:"-="+e},n,"linear",function(){t.css("left",s);a(o,u)})}var t=jQuery(this);t.addClass("newsticker");var n=6e3;t.find("li").each(function(e){n+=jQuery(this,e).outerWidth(true)});var r=t.wrap("<div class='mask'></div>");var i=t.parent().wrap("<div class='tickercontainer'></div>");var s=t.parent().parent().width();t.width(n);var o=n+s;var u=o/e.travelocity;a(o,u);t.hover(function(){jQuery(this).stop()},function(){var t=jQuery(this).offset();var r=t.left+n;var i=r/e.travelocity;a(r,i)})})}

}






pbtpost(1, "carvertical-slider");

pbtpost(6, "video-slider");



