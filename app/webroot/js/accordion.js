var active_wd = 602;
var handle_wd = 32;
$(document).ready(function() {
	$('#accordion_box ul li').not('.active').children('p').hide();
	$('#accordion_box ul li.active').width(active_wd);
	$('#accordion_box ul li').each(function(index) {
		order = parseInt($(this).attr('id').replace("slide_", ""));
		var slide_img = '<img src="'+SITE_PATH+'img/'+order+'" width="602" height="324" alt="accordion" />';
		$(this).children('img').removeClass('loading').attr('src', SITE_PATH+'img/'+order+'.jpg');
	}).live("click",function() {
		var activate  = false;
		var active_item = $('#accordion_box ul li.active');
		if(!$(this).hasClass('active') && $('#accordion_box ul li.active').length == 1) {
			$('#accordion_box ul li.active').animate({width:handle_wd}, 270);
			$('#accordion_box ul li.active').removeClass('active').children('p').hide();
			$(this).addClass('active');
			$(this).animate({width:active_wd},{duration:300, complete:function() {
				$(this).children('p').fadeIn('fast');
				$(this).width(active_wd);		
				$('#accordion_box ul li').not('.active').width(handle_wd).children('p').hide();		
			}});
		}
	});
});