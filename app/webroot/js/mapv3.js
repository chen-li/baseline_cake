var australiaCoor = new google.maps.LatLng(-29.509726, 135.625);
var geocoder;
var map;
var directionDisplay;
var directionsService;

var marker_icon = new google.maps.MarkerImage(SITE_PATH+'img/google_pin.png',
	new google.maps.Size(23, 30),
	new google.maps.Point(0,0),
	new google.maps.Point(0, 30));
var marker_shadow = new google.maps.MarkerImage(SITE_PATH+'img/icon_shadow.png',
	new google.maps.Size(39, 30),
	new google.maps.Point(0,0),
	new google.maps.Point(0, 30));
var marker_icon_ex = new google.maps.MarkerImage(SITE_PATH+'img/google_pin_ex.png',
	new google.maps.Size(23, 30),
	new google.maps.Point(0,0),
	new google.maps.Point(0, 30));
var marker_shadow_ex = new google.maps.MarkerImage(SITE_PATH+'img/icon_shadow_ex.png',
	new google.maps.Size(39, 30),
	new google.maps.Point(0,0),
	new google.maps.Point(0, 30));



function showMap(canvas) {
	if(typeof(PropLatlng) != "undefined") {
		if(parseInt(PropLatlng.lat()) == 0 || parseInt(PropLatlng.lng()) == 0 || parseInt(PropLatlng.lat()) == 1 || parseInt(PropLatlng.lng()) == 1) {
			codeAddress("google-canvas", PropAddress);
		}else {
			codeCoord(canvas, PropLatlng, PropAddress);
		}
	}else {
		codeAddress("google-canvas", PropAddress);
	}
}

function mapView(canvas, PropertyList) {
	markers = [];
	var bounds = new google.maps.LatLngBounds();
	var myOptions = {
		streetViewControl: true,
		scrollwheel: false,
		zoom: 5,
		maxZoom:20,
		center: australiaCoor,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById(canvas), myOptions);
	
	var infowindow = new google.maps.InfoWindow();
	var infowindow_size = new google.maps.Size(320,120);
	var marker, i;
	var message = new Array();
	for (var i in PropertyList['full_address']) {
		propCoor = null;
		if(parseFloat(PropertyList['lt_lat'][i]) === 0 || parseFloat(PropertyList['lt_log'][i]) === 0 || parseFloat(PropertyList['lt_lat'][i]) === 1 || parseFloat(PropertyList['lt_log'][i]) === 1) {
			continue;
		}else {
			if(PropertyList['no_record'][1]) {
				geocoder = new google.maps.Geocoder();
				message[i] = "<div id='property-baloon' style='width: 320px; height: 95px;'><h1>"+PropertyList['office_name'][1]+"</h1><h2>"+PropertyList['full_address'][1]+"</h2><p>No property can be shown on the map because property addresses are hidden.</p></div>";	
				propCoor = australiaCoor;
				geocoder.geocode( { 'address': PropertyList['full_address'][1]}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						propCoor = results[0].geometry.location;
						marker = new google.maps.Marker({
							icon: marker_icon,
							shadow: marker_shadow,
							position: propCoor,
							map: map
						});
						infowindow.setContent(message[i]);
						infowindow.setSize(infowindow_size);
						infowindow.open(map, marker);
						bounds.extend(marker.position);
						map.fitBounds(bounds);
					}
				});
			} else {
				bookmark = (typeof(PropertyList['pj_listings']) != 'undefined')?'':'<!--<li><a href="'+PropertyList['BookmarkLink'][i]+'" title="bookmark property" class="bookmark"><span class="icon bookmark"></span></a></li>-->';
				message[i] = '<div id="property-baloon" style="width:320px;height:115px;overflow:hidden;"><h1>'+PropertyList['address'][i]+', <span>'+PropertyList['suburb'][i]+'</span></h1><div class="photo"><a href="'+PropertyList['DetailsLink'][i]+'"><img src="'+PropertyList['photo'][i]+'" /></a></div><div class="info"><div class="basic"><h2>'+PropertyList['price'][i]+'</h2><!--<p>'+PropertyList['headline'][i]+'</p>--></div><div class="tools"><p class="bbc">'+PropertyList['bbc'][i]+'</p><ul>'+bookmark+'<li><a href="'+PropertyList['DetailsLink'][i]+'" title="view details"><!--<span class="icon view"></span>-->View Property &raquo;</a></li></ul></div></div><!--<script type="text/javascript">$("#property-baloon a.bookmark").fancybox({\'centerOnScroll\':true,\'titleShow\':false});</script>--><div style="clear:both"></div></div>';
				propCoor = new google.maps.LatLng(PropertyList['lt_lat'][i],PropertyList['lt_log'][i]);
				marker = new google.maps.Marker({
					icon: marker_icon,
					shadow: marker_shadow,
					position: propCoor,
					map: map
				});
				if(typeof(PropertyList['sale_type']) != 'undefined' && PropertyList['sale_type'][i] == 'rent') {
					marker.setIcon(marker_icon_ex);
				}
				bounds.extend(marker.position);
				map.fitBounds(bounds);
			}
			
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(message[i]);
					infowindow.setSize(infowindow_size);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}
	}
}

function officeMapView(canvas, PropertyList) {
	markers = [];
	var bounds = new google.maps.LatLngBounds();
	var myOptions = {
		streetViewControl: true,
		scrollwheel: false,
		zoom: 5,
		maxZoom:20,
		center: australiaCoor,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById(canvas), myOptions);
	var infowindow = new google.maps.InfoWindow();
	var infowindow_size = new google.maps.Size(320,120);
	var marker, i;
	var message = new Array();
	geocoder = new google.maps.Geocoder();
	
	for (var i in PropertyList['office_address']) {
		propCoor = null;
		message[i] = '<div id="property-baloon" style="width: 320px; height: 100px;"><p>'+PropertyList['office_name'][i]+'</p><p>'+PropertyList['office_address'][i]+'</p></div>';	
		propCoor = new google.maps.LatLng(PropertyList['ofc_lat'][i],PropertyList['ofc_log'][i]);
		marker = new google.maps.Marker({
			icon: marker_icon,
			shadow: marker_shadow,
			position: propCoor,
			map: map
		});
		bounds.extend(marker.position);
		map.fitBounds(bounds);
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(message[i]);
				infowindow.setSize(infowindow_size);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}

function codeCoord(canvas, PropLatlng, PropAddress) {
	var contentString = '<br /><p>'+PropAddress+'</p>'
	var marker = displayPin(canvas, PropLatlng);
	bindInfo(marker, map, contentString, '');
}
 
function codeAddress(canvas, PropAddress) {
	geocoder = new google.maps.Geocoder();
	geocoder.geocode( { 'address': PropAddress}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if(typeof(hideAddress) == 'undefined') {
				var contentString = '<br /><p>'+PropAddress+'</p>';
				var marker = displayPin(canvas, results[0].geometry.location);
				bindInfo(marker, map, contentString, '');
			}
		} else {
			alert("Property map can not be retrieved by the following reason: " + status);
		}
	});
}

function displayPin(canvas, coord, target_map) {
	if(typeof(map) == 'undefined') {
		var myOptions = {
			streetViewControl: true,
			scrollwheel: false,
			zoom: 15,
			center: coord,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		map = new google.maps.Map(document.getElementById(canvas), myOptions);
	}else {
		map = target_map;
	}
	var marker = new google.maps.Marker({
		icon: marker_icon,
		shadow: marker_shadow,
		position:coord,
		map: map
	});
	
	return marker;
}

function bindInfo(marker, map, content, size, target_iw) {
	if(typeof(infoWindow) == 'undefined') {
		var infowindow = new google.maps.InfoWindow({
			content: content
		});
	}else {
		var infowindow = target_iw;
	}
	if(size != '') {infowindow.setSize(size);}
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
}

function streetView(canvas, PropAddress) {
	var panoramaOptions;
	geocoder = new google.maps.Geocoder();
	geocoder.geocode( { 'address': PropAddress}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			panoramaOptions = {
				addressControl: true,
				addressControlOptions: {
					style: {backgroundColor: 'lightgrey', color: 'black'}
				},
				position:results[0].geometry.location,
				pov: {
					heading: 165,
					pitch:0,
					zoom:0
				}
			};
		}else {
			//unfinished business
			panoramaOptions = {
				
			};
		}
		var myPano = new google.maps.StreetViewPanorama(document.getElementById(canvas), panoramaOptions);
	});
}

function showDirections(canvas, panel, ToAddress) {
	directionsService = new google.maps.DirectionsService();
	directionsDisplay = new google.maps.DirectionsRenderer();
	geocoder = new google.maps.Geocoder();
	var default_coor;
	geocoder.geocode({'address': ToAddress}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			default_coor = results[0].geometry.location;
			var myOptions = {
				zoom: 15,
				center: default_coor,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			map = new google.maps.Map(document.getElementById(canvas), myOptions);
			directionsDisplay.setMap(map);
			directionsDisplay.setPanel(document.getElementById(panel));
			if(!getDirection) {
				var marker = new google.maps.Marker({
					position:results[0].geometry.location,
					map: map
				});
			}
		}
	});
}

function calcRoute(start, end) {
	var request = {
		origin:start, 
		destination:end,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
		}
	});
}