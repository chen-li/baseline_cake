$(document).ready(function(){
	//login forgot password
	if($('#forgotPassword').length>0) {
		$('#forgotPassword a').fancybox({
			'height':95,
			'width':405,
			'scrolling':'no'
		});
	}
	//step 1 change new password
	if($('#new_passwd').length>0) {
		function new_passwd(target) {
			if(target.attr("checked")) {
				$('#new_passwd_div').show();
			}else {
				$('#new_passwd_div').hide();
			}	
		}
		new_passwd($('#new_passwd'));
		$('#new_passwd').change(function() {
			new_passwd($(this));
		});
	}
	//suburbs
	if($('#Suburb').length>0) {
		var option = {
			serviceUrl: SITE_PATH+'Suburbs/fastSearch',
			minChars:3, 
			maxHeight:200,
			width:250,
			deferRequestBy: 1, //miliseconds
			noCache: true, //default is false, set to true to disable caching
			// callback function:
			onSelect: function(value, data){ $('#suburb_id').val(data); }
		};
		$('#Suburb').autocomplete(option);
	}
	//step 2
	if($('#step2').length>0) {
		$('#Suburb').focus(function() {$(this).val('')});
		$('#Suburb').blur(function() {if(!$(this).val()) {$(this).val($(this).attr('title'));}});
		//display property types
		catg = $('.option');
		
		if($('#catg').val()) {
			var checked_catg = $('#catg').val();
			$(checked_catg).attr("checked", true);
		}
		$('#f_TradeType').change(function() {
			var catg_id = $(this).val();
			$('.option').remove();
			target_options = catg.filter('.catg'+catg_id);
			$('#f_TradeType').parents().find('.container:eq(0)').append(target_options);
			if(catg_id != 2){
				$('#build').hide();
				$('#bbc').show();
			}else{
				$('#build').show();
				$('#bbc').hide();
			}
		});
		$('#f_TradeType').change();
		
		$('#add-suburb').click(function() {
			if($('#f_SuburbId').val()) {
				var suburb_to_add = $('<p><label><input type="checkbox" /> </label></p>');
				suburb_to_add.children('label').append($('#Suburb').val());
				suburb_to_add.children('label').children('input:checkbox').attr('checked', true).attr('name', 'f_Suburbs[]').val($('#f_SuburbId').val());
				$(this).parents().find('.container:eq(1)').append(suburb_to_add);
			}
		});
		//display rent/buy prices
		price = $('.select');
		$('.tab-content input:radio').change(function() {
			var search_type = $(this).val();
			var target_select = price.filter('.'+search_type);
			$('.select').remove();
			$('#f_PriceFrom').append(target_select.filter('.PriceFrom'));
			$('#f_PriceTo').append(target_select.filter('.PriceTo'));
		});
		$('.tab-content input:radio').change();
	}
	//auto select trade type
	//$('#f_TradeType').val(0).change();
	//step a delete search
	$('a.delsaver').fancybox();
});
