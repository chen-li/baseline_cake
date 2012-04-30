$(document).ready(function(){
	/*$("a.emailagent").fancybox({
		'width': 550,
		'height': 375,
		'scrolling':'no',
		'centerOnScroll':true
	});*/
	$("a.bookmark").fancybox({
		'scrolling':'no',
		'centerOnScroll':true
	});
	if($('#refine-search').length>0 && $('.tab-container').length>0) {
		callback($('.tab-container:eq(0)'));
		if(enable_abajax) {
			$('#refine-search form').submit(function() {
				var query = $(this).serialize()+'&folder_name='+$('#folder_name').val()+'&request_uri='+$('#request_uri').val()+'&start_idx='+tab_index($('.tab-container:eq(0)'));
				abajax('POST', '/system/abajax.php', query, $('.tab-container:eq(0)'));
				return false;
			});
		}
		if(enable_abajax) {
			$('#refine-search select').change(function() {
				$('#refine-search form').submit();
			});
			if($('#refine-search input:checkbox').length>0) {
				$('#refine-search input:checkbox').change(function() {
					$('#refine-search form').submit();
				});
			}
		}
	}
	//mapView('mapview-canvas', Listings);
});

function callback(tab_container) {
	activate_tab(tab_container);
	if(enable_abajax) {
		if(tab_container.find('.order-by').length>0) {
			if(($.browser.msie && ((parseInt($.browser.version)>7))) || !$.browser.msie) {
				tab_container.find('select:visible').each(function() {form_inp_sel($(this));});
			}
				tab_container.find('.order-by select').attr('onchange', '').change(function() {
					var query = $(this).val().replace('/'+$('#folder_name').val()+'/'+$('#request_uri').val()+'?', '')+'&folder_name='+$('#folder_name').val()+'&request_uri='+$('#request_uri').val()+'&start_idx='+tab_index(tab_container);
					abajax('GET', '/system/abajax.php', query, tab_container);
				});
		}
		if(tab_container.find('.page-numbers').length>0) {
			tab_container.find('.page-numbers a').click(function() {
				var query = $(this).attr('href').replace('/'+$('#folder_name').val()+'/'+$('#request_uri').val()+'?', '')+'&folder_name='+$('#folder_name').val()+'&request_uri='+$('#request_uri').val()+'&start_idx='+tab_index(tab_container);
				abajax('GET', '/system/abajax.php', query, tab_container);
				if (typeof history.pushState != "undefined") {
					history.pushState({}, document.title, $(this).attr('href'));
				}
				return false;
			});
		}
	}
	if($('#print_prop_form').length>0 && $('.tab-container').length>0) {
		if($('#print_prop_form .print input').length>0) {
			$('#print_prop_form .print').each(function() {
				var text = $(this).children('input').hide().val();
				var input_link = $('<a/>', {'href':'javascript:;'}).click(function() {$('#print_prop_form').submit();});
				$(this).wrapInner(input_link).children('a').append(text);
			});
		}
		$('#print_prop_form').submit(function() {
			$('#print_prop_form .tab-content:hidden').each(function() {
				$(this).find('.print_prop input:checkbox').attr('checked', false);
			});
		});
	}
	$('#tools label:has(a span.icon), .tools ul li:has(a span.icon)').each(function() {
		linkify($(this), 'span.icon');
	});
	$('.photo a img:visible, .photo a img:not(:visible):gt(6)').lazyload({
		effect : "fadeIn",
		placeholder:"/img/grey.png"
	});
	$("a.bookmark").fancybox({
		'scrolling':'no',
		'centerOnScroll':true
	});
	$("a.savelist-login").fancybox({
		'height':50,
		'width': 335,
		'scrolling':'no',
		'centerOnScroll':true
	});	
	$("a.savelist").fancybox({
		'height':105,
		'width': 405,
		'type': 'iframe',
		'scrolling':'no',
		'centerOnScroll':true
	});
}

function tab_index(tab_container) {
	if(tab_container.find('.tabs li a').length>0) {
		var tab_idx = tab_container.find('.tabs li.active').index();
		if(tab_container.find('.tabs').length==0 && typeof(start_idx != 'undefined')) {tab_idx = start_idx;}
	}else if(tab_container.find('.tabs select').length>0) {
		var tab_idx = tab_container.find('.tabs select').attr('selectedIndex');
	}
	return tab_idx;
}