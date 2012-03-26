var speed = 5000; 
var int;	
var image_width = 500;
var image_height = 333;

$(document).ready(function() {
	var images = $(".vert-gallery .vert-image-wrapper img");
	var thumbs = $(".vert-gallery .vert-thumbs li");
	var imgHeight = $(thumbs).outerHeight();
	var loading = $('<img class="vert-loader" src="/img/loader.gif" alt="loading" />');
	var magnifier = $('<span class="magnifier"></span>');
	var index = thumbs.length-1;
	
	for (i=thumbs.length-1; i>=0; i--) {
		$(".vert-gallery .vert-thumbs").append(thumbs[i]);
	}
	var thumbs = $(".vert-gallery .vert-thumbs li");
	
	if(thumbs.length>1 && thumbs.length<4) {
		for(i=0; i<thumbs.length; i++)  {
			$(thumbs[thumbs.length-(i+1)]).clone().addClass('clone').attr('id','clone-'+(thumbs.length-(i+1))).prependTo($(".vert-gallery .vert-thumbs"));
		}
	}else if(thumbs.length>=4) {
		var clone_thumbs = $(thumbs).slice(thumbs.length-3).clone();
		for(i=0;i<clone_thumbs.length;i++) {
			$(clone_thumbs[i]).attr('id', 'clone-'+((thumbs.length-3)+i));
		}
		$(".vert-gallery .vert-thumbs").prepend(clone_thumbs.addClass('clone'));
	}
	for (i=0; i<thumbs.length; i++) {
		$(thumbs[i]).addClass("thumb-"+i);
	}
	
	$(".vert-gallery .vert-thumbs li a").click(function() {
		var parent_li = $(this).parent('li');
		if(parent_li.hasClass('clone')) {
			index = parseInt(parent_li.attr('id').replace('clone-',''));
		}else {
			index = parseInt(parent_li.attr('class').replace('thumb-',''));
		}
		show (index);
		return false;
	});
	$(".vert-gallery .prev").click(prev);
	$(".vert-gallery .next").click(next);
	init();
	
	function prev() {
		if (index<(thumbs.length-1)){index+=1; }
		else {index=0}
		show (index);
	}
	function next() {
		if (index>0){index-=1; }
		else {index=thumbs.length-1}
		show (index);
	}
	function thumbScroll(num) {
		var scrollPos = (num)*imgHeight;
		$(".vert-gallery .vert-thumbs").stop().animate({scrollTop: scrollPos}, 400);
		//console.log(scrollPos, "img.image-"+num);
	}
	function loadImage(num) {
		$('.vert-gallery .vert-loader').show();
		var image = $(".thumb-"+num+" a").attr('href');
		var img = $('<img/>', {
			'src': image,
			'index': thumbs.length-(num+1),
			'class': 'image-'+num
		});
		img.hide();
		img.load(function() {
			$(this).css('margin', '0 auto');
			$('.vert-image-wrapper').append($(this).fadeIn(400));
			$('.vert-gallery .vert-loader').hide();
		}).error(function() {
			$('.vert-gallery .vert-loader').hide();
		});
	}
	function show(num) {
		if($(".image-"+num).length==0) {loadImage(num);}
		$(".vert-image-wrapper img").not('.vert-loader').fadeOut(400);
		$(".image-"+num).stop().fadeIn(400);
		thumbScroll(num);
	}
	function init() {
		$('.vert-image-wrapper img:first').hide();
		$('.vert-image-wrapper').prepend(loading, magnifier);
		if($('.vert-image-wrapper .vert-loader').length>0 && $('.vert-image-wrapper .magnifier').length>0) {
			//IE fix
			if($.browser.msie && $.browser.version<9) {
				$(".vert-gallery .vert-thumbs li:not(.clone)").each(function() {
					var ie_idx = $(".vert-gallery .vert-thumbs li:not(.clone)").index($(this));
					var ie_img = $('<img/>', {
						'src': $(this).children('a').attr('href'),
						'index': thumbs.length-(ie_idx+1),
						'height':image_height,
						'width': image_width,
						'class': 'image-'+ie_idx
					});
					$('.vert-image-wrapper').append(ie_img.hide());
				});
			}
			show(index);
			$('.vert-gallery .vert-loader').hide();
		}
		if(thumbs.length>1 && speed>0) {
			int = setInterval(next, speed);
		}
	}
	$('.vert-gallery .vert-thumbs, .vert-gallery .prev, .vert-gallery .next').hover(function() {
		clearInterval(int);
	},function() {
		if(thumbs.length>1 && speed>0) {
			int = setInterval(next, speed);
		}
	})
});