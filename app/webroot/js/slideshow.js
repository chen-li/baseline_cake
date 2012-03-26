var active_wd = 698;
var loop_time = 5000;
$(document).ready(function() {
	var selectMax = $('#accordion_box li').length;
	finishLoading = 0;
	currentSel = 1;
	$('#slide_'+currentSel).css('left', 0);
	
	$('#accordion_box ul li').not('.active').children('p').hide();
	$('#accordion_box ul li').each(function(index) {
		order = parseInt($(this).attr('id').replace("slide_", ""));
		$(this).children('img').attr('src', SITE_PATH+'img/'+order+'.jpg').removeClass('loading');
		finishLoading++;
	}).live('ON', function(event, current, next) {
		id = parseInt($(this).attr('id').replace("slide_", ""));
		if($(this).hasClass('active')) {
			$('#accordion_box li').css('z-index', 'auto');
			$('#slide_'+current).css('z-index', 1);
			$('#slide_'+id).css('left', -active_wd).css('z-index', 2).animate({'left':0}, 'normal', 'swing');
		}
		currentSel = parseInt($(this).attr('id').replace("slide_", ""));
	});
	
	if(finishLoading == selectMax) {
		var interval = setInterval(autoSlide, loop_time);
	}
	
	function autoSlide() {
		nextSel = currentSel + 1;
		if(nextSel > selectMax) {nextSel = 1;}
		$('#slide_'+currentSel).removeClass('active');
		$('#slide_'+nextSel).addClass('active').trigger('ON', [currentSel, nextSel]);	
		nextSel++;		
//		$('#number').val("MAX: "+selectMax);
//		$('#current').val("current: "+currentSel);
//		$('#next').val("next: "+nextSel);
//		$('#s1').val("s1: "+$('#slide_1').css('z-index'));
//		$('#s2').val("s2: "+$('#slide_2').css('z-index'));
//		$('#s3').val("s3: "+$('#slide_3').css('z-index'));
//		$('#s4').val("s4: "+$('#slide_4').css('z-index'));
	}
});