$(document).ready(function(){
	$('.tab-container').each(function() {
		var tab_container = $(this);
		activate_tab(tab_container);
		if(tab_container.find('.inner-tab-container').length>0) {
			tab_container.find('.inner-tab-container').each(function() {
				var inner_tab_container = $(this);
				activate_inner_tab(inner_tab_container);
			});
		}
	});
	
});
function activate_tab(tab_container) {
	var idx = (typeof(start_idx) != 'undefined')?start_idx:0;
	if(tab_container.find('.tab-content .inner-tab-content>input:hidden.start_idx').length>0) {
		var tab_content = tab_container.find('.tab-content');
		idx = tab_content.index(tab_content.filter(':has(input:hidden.start_idx)'));
	}else if(tab_container.find('.tab-content>input:hidden.start_idx').length>0) {
		idx = tab_container.find('.tab-content input:hidden.start_idx').val();
	}
	idx = (typeof(idx) != 'undefined')?idx:0;
	if(tab_container.find('.tabs li a').length>0) {
		tab_container.find('.tabs li').removeClass('active');
		tab_container.find('.tabs li a:eq('+idx+')').parent('li').addClass('active');
		show_tab(idx, tab_container, '.tab-content', tab_container.find('.tabs li.active a'), 'rel');
		tab_container.find('.tabs>li a').click(function(){
			if(!$(this).parent('li').hasClass('active')) {
				var idx = tab_container.find('.tabs>li a').index(this);
				tab_container.find('.tabs>li').removeClass('active');
				$(this).parent('li').addClass('active');
				show_tab(idx, tab_container, '.tab-content', $(this), 'rel');
			}
			return false;
		});
	}else if(tab_container.find('.tabs select').length>0) {
		tab_container.find('.tabs select').val(tab_container.find('.tabs select option:eq('+idx+')').val());
		if(tab_container.find('.tabs select').is(':hidden')) {
			tab_container.find('.tabs select').siblings('.sel-text').val(tab_container.find('.tabs select option:selected').text());
		}
		$('#fsearch').val(idx)
		show_tab(idx, tab_container, '.tab-content', tab_container.find('.tabs select option:selected'), 'class');
		tab_container.find('.tabs select').change(function(){
			var idx = $(this).attr('selectedIndex');
			show_tab(idx, tab_container, '.tab-content', $(this).children('option:eq('+idx+')'), 'class');
		});
	}
}

function activate_inner_tab(inner_tab_container) {
	var idx = (typeof(start_idx) != 'undefined')?start_idx:0;
	if(inner_tab_container.find('.inner-tab-content input:hidden.start_idx').length>0) {
		idx = inner_tab_container.find('.inner-tab-content input:hidden.start_idx').val();
	}
	inner_tab_container.find('.inner-tabs li').removeClass('active');
	inner_tab_container.find('.inner-tabs li a:eq('+idx+')').parent('li').addClass('active');
	show_tab(idx, inner_tab_container, '.inner-tab-content', inner_tab_container.find('.inner-tabs>li.active a'), 'rel');
	inner_tab_container.find('.inner-tabs>li a').click(function(){
		if(!$(this).parent('li').hasClass('active')) {
			var idx = inner_tab_container.find('.inner-tabs>li a').index(this);
			inner_tab_container.find('.inner-tabs>li').removeClass('active');
			$(this).parent('li').addClass('active');
			show_tab(idx, inner_tab_container, '.inner-tab-content', $(this), 'rel');
		}
		return false;
	});
}

function show_tab(idx, tab_container, tab_content, elem, ex) {
	tab_container.find(tab_content+':eq('+idx+')').fadeIn();
	tab_container.find(tab_content).not(tab_content+':eq('+idx+')').css('display', 'none');
	tab_callback(elem, ex);
}

function tab_callback(elem, ex) {
	var type = elem.attr(ex);
	var name = (elem.is('option'))?elem.val():elem.attr('name');
	if($('#'+name+'-canvas').html() == '') {$('#'+name+'-canvas').html('');}
	switch(type){
		case 'google':
			showMap(name+'-canvas');
		break;
		case 'streetview':
			streetView(name+'-canvas', PropAddress);
		break;
		case 'walkscore':
			if(elem.is('option')) {
				var size = elem.attr('id').replace('size-', '').split('x');
			}else {
				var size = elem.attr('rev').split('x');
			}
			var wk_width = size[0];//elem.attr('width');
			var wk_height = size[1];//elem.attr('height');
			if($('#'+name+'-canvas').html() == '') {
				$('#'+name+'-canvas').html(call_walkscore(PropAddress, wk_width, wk_height));
			}
		break;
		case 'ad-gallery':
			if ($('.ad-gallery').length>0 && start_idx != 0) {
				start_idx = 0;
				adGallery($('.ad-gallery'));
			}
		break;
		default:
			if(typeof(type) != 'undefined') { //for ie7
				var Elements = type.split('|');
				if(Elements[0] == 'hide') {
					for(i=1;i<Elements.length;i++) {
						if($(Elements[i]).css('display') != 'none') {
							$(Elements[i]).hide();
						}
					}
					if(Elements[Elements.length-1] == 'mapView') {
						mapView(name+'-canvas', Listings);
					}
				}else if(Elements[0] == 'show') {
					for(i=1;i<Elements.length;i++) {
						if($(Elements[i]).css('display') == 'none') {
							$(Elements[i]).fadeIn();
						}
					}
				}
			}
		break;
	}
	return false;
}
