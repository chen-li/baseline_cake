var enable_abajax = true; //ajax loading option
var mouse_on_dropdown = false;
var IOS = (navigator.userAgent.match(/iPad|iPhone|iPod/i) != null)?true:false;
$(document).ready(function(){
	if($('#fast-search').length>0) {
		//fast search form submit
		var fsearch_str = $('#fsearch').val();	
		$('#fsearch').focus(function(){if($(this).val() == fsearch_str) $(this).val(''); }).blur(function(){ if($(this).val() == '') $(this).val(fsearch_str); });
		$('#fast-search form').submit(function() {
			$('#fast-search form').attr('action', SITE_PATH+$('#fast-search input:radio:checked').val());
			return true;
		});
		//fast search autocomplete
		options = { serviceUrl: SITE_PATH+'Listings/fastSearch',
				minChars:3,
				delimiter: /(,|;)\s*/, // regex or character
				maxHeight:200,
				width:224,
				zIndex: 100000,
				deferRequestBy: 0, //miliseconds
				noCache: true, //default is false, set to true to disable caching
				// callback function:
				onSelect: function(value, data){ $('#fsuburb_id').val(data); }
		};
		$('#fsearch').autocomplete(options);
	}
	
	$('#nav .menu>li>a').wrapInner('<span class="text-shadow"></span>');
	//nav menu highlight
	if($('#nav_active').val()) {
		$('ul.menu li.'+$('#nav_active').val()).addClass('active');
	}else {
		$('ul.menu li.home').addClass('active');
	}
		
	$('#fast-search form input[type="submit"]').click(function() {
		if($('#suburb_id').val() != "" && $('#fsearch').val() == "") {$('#suburb_id').val('');}
		$('#fast-search form').attr('action', SITE_PATH+$(this).attr('alt')).submit(); 
	});

	if(($.browser.msie && ((parseInt($.browser.version)>7))) || !$.browser.msie) {
		if($('select').length>0 && $('body.alert').length == 0) {
			$('select').each(function() {form_inp_sel($(this));});
			$('.sel-text').blur(function() {
				if(!mouse_on_dropdown) { $('ul.dropdown_ul:visible').slideUp(100);}
			});
		}
	}

	webkit_resize();
});

function webkit_resize() {
	if($.browser.safari) {
		if($('textarea').length>0) {
			$('textarea').each(function() {$(this).width($(this).width()-4);});
		}
		if(IOS) {
			$('input[type="text"]').not('input.IOS').each(function() {$(this).width($(this).width()-8);})
		}
	}
}

function form_inp_sel(sel_elem) {
	var width = sel_elem.width();
	var height = sel_elem.outerHeight();
	var margin_t = sel_elem.css('margin-top');
	var margin_b = sel_elem.css('margin-bottom');
	var margin_l = sel_elem.css('margin-left');
	var margin_r = sel_elem.css('margin-right');
	var background = sel_elem.css('background-color');
	var font_size = sel_elem.css('font-size');
	var sel_txt_mt = (height-18)/2-1;
	sel_elem.hide().wrap('<div class="sel-box curvy-all" />');//round corners optional
	var sel_box = sel_elem.parent();
	var sel_text = (sel_elem.hasClass('multi'))?sel_elem.children('option:eq(0)').text():sel_elem.find(':selected').text();
	//tab index
	var tab_index = '';
	if(sel_elem.attr('tabindex')) {tab_index = ' tabindex="'+sel_elem.attr('tabindex')+'"';}
	//IOS safari
	var sel_txt_wd_offset = (IOS)?37:29;
	var sel_txt_class = (IOS)?' IOS':'';
	width = (IOS)?width+12:width;
	sel_box.width(width).height(height).css('background-color', background).css('margin-top',margin_t).css('margin-bottom',margin_b).css('margin-left',margin_l).css('margin-right',margin_r).append('<a class="arr-box" style="height:'+height+'px;"></a><input type="text" readonly="readonly" class="sel-text'+sel_txt_class+'" style="border:none;margin-top:'+sel_txt_mt+'px;width:'+(width-sel_txt_wd_offset)+'px;font-size:'+font_size+';" value="'+sel_text+'" '+tab_index+' /><ul class="dropdown_ul curvy-bottom" style="margin:-2px 0 0 -1px;top:'+height+'px;left:0;padding-bottom:4px;"></ul>').children('ul').hide();
	sel_elem.siblings('.arr-box, .sel-text').click(function(){
		if($(this).hasClass('arr-box')) {$(this).siblings('.sel-text').focus();}else {$(this).focus();}
		$(this).siblings('ul.dropdown_ul').slideToggle(100);
	}).siblings('ul.dropdown_ul').hover(function() {
		mouse_on_dropdown = true;}, function() {
		mouse_on_dropdown = false;
	});
	
	sel_click(sel_elem);
	var txt_width = sel_box.children('ul.dropdown_ul').width();
	if(txt_width < width) {sel_box.children('ul.dropdown_ul').width(width)}
}

function sel_click(elem) {
	elem.siblings('ul.dropdown_ul').html('');
	var sel_box = elem.parent();
	var opt = elem.children('option');
	opt.each(function(){
		if(elem.hasClass('multi')) {
			if(opt.index($(this))>0) {
				var checkAll = ($(this).val() == '' || $(this).val() == 'any')?' class="checkAll"':'';
				var checked = ($(this).hasClass('checked'))?'checked="checked"':'';
				sel_box.children('ul.dropdown_ul').append('<li class="dropdown_li" rel="'+opt.eq(opt.index(this)).val()+'"><label title="'+$(this).text()+'"><input '+checkAll+' type="checkbox" value="'+$(this).val()+'" name="'+elem.attr('name')+'[]" '+checked+' /> '+($(this).text())+'</label></li>');
			}
		}else {
			var selected = ($(this).text() == elem.find(':selected').text())?' selected':'';
			sel_box.children('ul.dropdown_ul').append('<li class="dropdown_li'+selected+'" rel="'+$(this).val()+'">'+($(this).text())+'</li>');
		}
	});
	if(elem.hasClass('multi')) {
		var checkboxes = elem.siblings('ul.dropdown_ul').find('input:checkbox');
		checkboxes.change(function() {
			elem.siblings('.sel-text').focus();
			
			if($(this).hasClass('checkAll')) {
				checkboxes.not('.checkAll').attr('checked', false);
			}else {
				checkboxes.filter('.checkAll').attr('checked', false);
			}
			if(checkboxes.filter(':checked').length==0) {
				checkboxes.filter('.checkAll').attr('checked', true);
			}
		});			
	}else {
		sel_box.find('ul.dropdown_ul li').click(function(){
			var idx = sel_box.find('ul.dropdown_ul li').index($(this));
			sel_box.find('ul.dropdown_ul li').removeClass('selected');
			$(this).addClass('selected');
			$(this).parents().siblings('input.sel-text').val($(this).text());
			elem.children('option:eq('+idx+')').attr('selected', true);
			elem.change();
			$('ul.dropdown_ul:visible').slideUp(100);
		});
	}	
}

function abajax(type, url, query, container) {
	if(enable_abajax) {
		var load_html = $('<p/>', {'class':'loading'}).append($('<img/>', {'src':'/img/loader.gif','alt':'loading...'}));
		container.html(load_html);
		$.ajax({
			type:type,
			url:url,
			data:query,
			success:function(html) {
				container.html(html);
				callback(container);
			}
		})
	}
}

function embed_yt_player(container, vid_url, width, height, autoplay) {
	if(typeof(width) == 'undifned') {width = 402;}
	if(typeof(height) == 'undifned') {height = 268;}
	var vid = '';
	if(vid_url.search(/v=/)>0) {
		var url = vid_url.split('?');
		var query = url[1].split('&');
		for(p in query) {
			if(query[p].substring(0,2) == 'v=') {
				vid = 'v/'+query[p].replace('v=', '')+'?';
			}
		}
	}else if(vid_url.search(/\.be/)>0) {
		var url = vid_url.split('?');
		var query = url[0].split('be/');
		vid = 'v/'+query[1]+'?';
	}else if(vid_url.search(/#/)>0) {

		var url = vid_url.split('#');
		var query = url[1].split('/');
		for(p in query) {
			if(query[p].length == 11) {
				vid = 'v/'+query[p]+'?';
			}
		}
	}else if(vid_url.search(/p=/)>0 || vid_url.search(/list=/)>0) {
		var url = vid_url.split('?');
		var query = (vid_url.search(/list=/)>0)?url[1].replace('list=', ''):url[1].replace('p=', '');
		vid = 'p/'+query+'?hl=en_US';
	}
	vid += (typeof(autoplay) != 'undefined' && autoplay == false)?'&amp;autoplay=0':'&amp;autoplay=1';
	
	container.html('<object type="application/x-shockwave-flash" style="width:'+width+'px; height:'+height+'px;" data="http://www.youtube.com/'+vid+'&amp;showsearch=0&amp;fs=1"><param name="movie" value="http://www.youtube.com/'+vid+'&amp;showsearch=0&amp;fs=1" /><param name="allowFullScreen" value="true" /><param name="wmode" value="transparent" /></object>');

}

function linkify(elem, item_to_link) {
	var items = elem.find(item_to_link).remove();
	var a_link = elem.find('a').remove();
	items.each(function() {
		var a = a_link.clone().html($(this));
		elem.append(a);
	});
	elem.append(a_link);
}