$(document).ready(function(){
	if($('.error').length >0) {
		$('.error').next('dd').children('input[type="text"], input[type="password"], select, textarea, .select-box').css('border', '1px solid #c00');
	}
	$("a.emailoffice").fancybox({
		'width' : 402,
		'height' : ($("a.emailoffice.multioffice").length>0)?390:360,
		'type' : 'iframe',
		'scrolling' : 'no',
		'centerOnScroll':true
	});
});
