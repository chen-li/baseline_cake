$(document).ready(function(){	
	if($('#slideshow-box').length>0) {
		$('#slideshow-box li').each(function() {
			var order = $(this).index() + 1;
			var slide_img = $(this).find('img');
			if(slide_img.attr('src').search('1px')>0) {
				slide_img.attr('src', SITE_PATH+'img/slideshow/slide'+order+'.jpg').removeClass('loading');
			}
		})
		$('#slideshow-box ul').cycle({
			timeout:5000
		})
	}
	if($('#featured-box').length>0) {
		$('#featured-box ul').cycle({
			timeout:1000
		})
	}

	$('#appraisal, #testimonials').click(function() {
		var a_link = $(this).find('a');
		if(a_link.attr('target') == '_blank') {
			window.open(a_link.attr('href'));
		}else {
			location.href = a_link.attr('href');
		}
		return false;
	});
	
	//quick search form initialize 
	select_options = $('.option');
	$('.option').not('.'+$('.type input:radio:checked').attr('alt')).remove();
	if($('#rs-min-price').hasClass('styled')){sel_click($('#rs-min-price'));}
	if($('#rs-max-price').hasClass('styled')){sel_click($('#rs-max-price'));}
	if($('#rs-catg').hasClass('styled')){sel_click($('#rs-catg'));}
	if($('#rs-suburb').hasClass('styled')){sel_click($('#rs-suburb'));}
	//quick search form sale type select
	$('#quick_search_form input:radio').change(function() {
		var type = $(this).attr('alt');
		var min_price = select_options.filter('.'+type).filter('.min-price');
		var max_price = select_options.filter('.'+type).filter('.max-price');
		var suburbs = select_options.filter('.'+type).filter('.suburbs');
		var catg = select_options.filter('.'+type).filter('.catg');

		$('.option').remove();

		$('#rs-min-price').append(min_price);
		$('#rs-max-price').append(max_price);
		$('#rs-catg').append(catg);
		$('#rs-suburb').append(suburbs);
		if($('#rs-min-price').hasClass('styled')){sel_click($('#rs-min-price'));}
		if($('#rs-max-price').hasClass('styled')){sel_click($('#rs-max-price'));}
		if($('#rs-catg').hasClass('styled')){sel_click($('#rs-catg'));}
		if($('#rs-suburb').hasClass('styled')){sel_click($('#rs-suburb'));}
	});
	//quick search form submit
	$('#quick_search_form').submit(function() {
		$(this).attr('action', SITE_PATH+$('#quick-search input:radio:checked').val());
		return true;
	});

});