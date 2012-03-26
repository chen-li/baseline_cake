$(document).ready(function () {
	$('.tools .links li:has(a span.icon)').each(function() {
		linkify($(this), 'span.icon');
	});
	
	$('.projlist').fancybox({
		'hideOnOverlayClick': false,
		'hideOnContentClick': false,
		'scrolling' : 'no',
		'centerOnScroll':true
	});

	$("a.emailfriend").fancybox({
		'hideOnOverlayClick': false,
		'hideOnContentClick': false,
		'height': 370,
		'width': 405,
		'scrolling' : 'no',
		'centerOnScroll':true
	});
	$("a.emailcontract").fancybox({
		'hideOnOverlayClick': false,
		'hideOnContentClick': false,
		'height': 308,
		'width': 405,
		'scrolling' : 'no',
		'centerOnScroll':true
	});
	$("a.emailoffice").fancybox({
		'width' : 402,
		'height' : ($("a.emailoffice.multioffice").length>0)?390:360,
		'type' : 'iframe',
		'scrolling' : 'no',
		'centerOnScroll':true
	});
	$("a.emailagent").fancybox({
		'width' : 402,
		'height' : 365,
		'type' : 'iframe',
		'scrolling' : 'no',
		'centerOnScroll':true
	});
	$('a.directions').fancybox({
		'width':855,
		'height':550,
		'centerOnScroll': true,
		'scrolling':'no'
	});
	$("#overview a.youtube").click(function() {
		var href;
		if(this.href.search(/watch/) != -1) {
			href = this.href.replace(new RegExp("watch\\?v=", "i"), 'v/');
		}else if(this.href.search(/youtu\.be/) != -1) {
			href = this.href.replace(new RegExp("youtu\.be/", "i"), 'youtube.com/v/');
		}
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'width'			: 680,
			'height'		: 495,
			'href'			: href,
			'type'			: 'swf',
			'swf'			: {
				'wmode'		: 'transparent',
				'allowfullscreen'	: 'true'
			}
		});
		return false;
	});	
	if($.browser.mozilla) {
		$('a.floorplan').fancybox({
			'hideOnOverlayClick': false,
			'hideOnContentClick': false,
			'width': 950,
			'height': 700,
			'centerOnScroll':true
		});
	}
	$("a.bookmark").fancybox({'centerOnScroll':true});
	$("a.full-size").fancybox({'centerOnScroll':true});
	
	$("span.magnifier").live('click', function() {
		var index = $(this).siblings('img:visible').attr('index');
		$("a.full-size").filter(':eq('+index+')').click();
		return false;
	});

	showMap("google-canvas",PropLatlng, PropAddress);
});
$(window).load(function() {
    if ($('.ad-gallery').length > 0) {
        var galleries = $('.ad-gallery').adGallery({
            loader_image: SITE_PATH + 'img/loader.gif',
            thumb_opacity: 1,
            animate_first_image: true,
            width: 402,
            height: 268,
            animation_speed: 400,
            display_next_and_prev: display_next_and_prev,
            display_back_and_forward: display_back_and_forward,
            slideshow: {
                enable: true,
                autostart: autostart,
                speed: 5000,
                start_label: 'Start',
                stop_label: 'Stop',
                stop_on_scroll: false,
                countdown_prefix: '(',
                countdown_sufix: ')',
                onStart: function () {},
                onStop: function () {}
            },
            player_path: SITE_PATH + 'flash/',
            effect: 'fade',
            cycle: true
        });
    }
	
})