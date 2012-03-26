$(document).ready(function(){
	$("a.emailagent").fancybox({
		'width' : 402,
		'height' : 375,
		'type' : 'iframe',
		'scrolling' : 'no',
		'centerOnScroll':true
	});
	$('#tools .print, .tools ul li:has(a span.icon)').each(function() {
		linkify($(this), 'span.icon');
	});
});
