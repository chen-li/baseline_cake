$(document).ready(function(){
	$("a.emailagent").fancybox({
		'width' : 402,
		'height' : 365,
		'type' : 'iframe',
		'scrolling' : 'no',
		'centerOnScroll':true
	});
	$("a.bookmark").fancybox({
		'scrolling':'no',
		'centerOnScroll':true
	});
	if(enable_abajax) {
		if($('.tabs').length>0) {
			var tab_content = $('.tabs').next('.tab-content');
			$('.tabs a').click(function() {
				$(this).parent().addClass('active').siblings().removeClass('active');
				var url = $(this).attr('href').split('?');
				var query = url[1];
				var mode = query.split('&');
				if(mode[0].substring(0,5) == 'mode=') {
					id = mode[0].replace('mode=', '');
					if(tab_content.attr('id') != id) {
						tab_content.attr('id', id);
						abajax('GET', '/system/abajax.php', query, tab_content);
					}
				}
				return false;
			});
		callback(tab_content);
		}
	}
});
function callback(tab_content) {
	if($('.page-numbers').length>0) {
		$('.page-numbers a').click(function() {
			var url = $(this).attr('href').split('?');
			var query = url[1];
			abajax('GET', '/system/abajax.php', query, tab_content);
			return false;
		})
	}
	$(".tab-content a.emailagent").fancybox({
		'width' : 402,
		'height' : 375,
		'type' : 'iframe',
		'scrolling' : 'no',
		'centerOnScroll':true
	});
}
