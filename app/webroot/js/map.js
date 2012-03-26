var bounds = new GLatLngBounds();
var geocoder = new GClientGeocoder();
var australiaCoor = new GLatLng(-29.509726, 135.625);


var GoogleMap = {
	initialize_map_search: function() {
		var map = new GMap2(document.getElementById("map_canvas"));
		map.addControl(new GSmallMapControl());
		map.setCenter(australiaCoor, 4);
		if(Listings) {
			this.showProperties(map);
			map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
		}

	},

	
	createMarker: function(map,point, number, message) {

		// Create our "tiny" marker icon
		var custIcon = new GIcon(G_DEFAULT_ICON);
		//custIcon.image = MarkerIcon;
		//custIcon.iconSize = new GSize(23, 30);
		custIcon.shadowSize =  new GSize(36, 30);
		custIcon.iconAnchor = new GPoint(12, 30);

		// Set up our GMarkerOptions object
		markerOptions = { icon:custIcon };
		var marker = new GMarker(point,markerOptions);
		marker.value = number;
		if(message!='') {
			GEvent.addListener(marker, "click", function() {
				map.openInfoWindowHtml(point, message);
			});
		}
		map.addOverlay(marker);
	},

	showProperties: function(map) {
		var point =  new GLatLng(0, 0);
		var message = '';
		for(var i in Listings['lt_lat']) {
			message = "<table><tbody><tr><td><a href='"+Listings['DetailsLink'][i]+"'>"+Listings['address'][i]+" "+Listings['suburb'][i]+"</a></td><td rowspan='3'><a href='"+Listings['DetailsLink'][i]+"'><img width='60' src='"+Listings['photo'][i]+"'></a></td></tr><tr><td>"+Listings['headline'][i]+"</td><td>&nbsp;</td></tr><tr><td>"+Listings['price'][i]+"</td><td>&nbsp;</td></tr></tbody></table>";

			//"<img src='"+Listings['photo'][i]+"' /> <div>"+Listings['full_address'][i]+"</div>";
			//message = 'aaa';
			if((parseFloat(Listings['lt_lat'][i])!==0 && parseFloat(Listings['lt_lat'][i])!==1) && (parseFloat(Listings['lt_log'][i])!==0 && parseFloat(Listings['lt_log'][i])!==1)) {
				//alert(Listings['lt_lat'][i]+ " "+Listings['lt_log'][i]);
				point = new GLatLng(Listings['lt_lat'][i], Listings['lt_log'][i]);
				bounds.extend(point);
				this.createMarker(map,point, i+1, message);
			} else if (Listings['lt_lat'][i]==0 || Listings['lt_log'][i]==0) {
				this.showAddress(map, Listings['full_address'][i], i, message);
			}
		}
	}, 

	showAddress: function(map, address, i, message) {
		geocoder.getLatLng(
			address,
			function(point) {
			  if (point) {
				//if(message == '') {
					bounds.extend(point);
					map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
				//} else {
				//}
				GoogleMap.createMarker(map, point, i+1, message);
			  }
			}
		  );
	},
	
	loadSmallMap: function(div, coor, address) {

		var map = new GMap2(document.getElementById(div));
		map.addControl(new GSmallMapControl());
		if(coor) {
			map.setCenter(coor, 17);
			this.createMarker(map, coor, 0, '');
		} else if (address) {
			this.showAddress(map, address, 0, '');
		}
	},

	loadStreetViewMap: function(div, coor, address) {
		if(coor) {
			var panoramaOptions = { latlng:coor };
			var myPano = new GStreetviewPanorama(document.getElementById(div), panoramaOptions);
		} else if (address)  {
			this.showAddressStreetView(address, div);
		}
	},

	showAddressStreetView: function(address,div) {
		geocoder.getLatLng(
			address,
			function(point) {
			  if (point) {
				panoramaOptions = { latlng:point };
				var myPano = new GStreetviewPanorama(document.getElementById(div), panoramaOptions);
			  }
			}
		  );
	}
	
};
