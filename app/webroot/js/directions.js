$(document).ready(function(){
	//codeAddress("map-canvas", AucAddress);
	showDirections("map-canvas", "directions-panel", AucAddress);
	var def_txt = $('#f_FromAddress').val();
	$('#f_FromAddress').focus(function() {
		$('#test').val(def_txt);
		if($(this).val() == def_txt) {$(this).removeClass('example').val('');}
	}).blur(function() {
		$('#test').val(def_txt);
		if(!$(this).val()) {$(this).addClass('example').val(def_txt);}
	});
	if(getDirection) {calcRoute(originAddress, AucAddress);}
});
