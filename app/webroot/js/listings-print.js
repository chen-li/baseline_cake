$(document).ready(function(){
	if($('ul#listings').length>0 && $('ul#listings .control').length>0) {
		$('ul#listings').sortable({
			handle: '.photo',
			placeholder: 'placeholder',
			delay: 100,
			opacity: 0.8,
			forcePlaceholderSize: true
		});
		$('ul#listings .control').click(function(){
			if(confirm('Delete this property fron print list?')) {
			$(this).parents('ul#listings li').animate({opacity: 0},function () {$(this).wrap('<div/>').parent().slideUp(function () {$(this).remove();})});
			};
		});
	}
});