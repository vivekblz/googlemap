var map;
var plotted_coords = [];
var infowindow = new google.maps.InfoWindow();

function addCoords(latitude, longitude) {
	var useIcon = 'icon0.png';
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(latitude,longitude),
		map: map,
		icon: useIcon
	});	
	plotted_coords.push(marker);
	google.maps.event.addListener(marker, 'click', function() { 
		infowindow.open(map, marker);
		infowindow.setContent('Latitude: ' + latitude + '<br />Longitude: ' + longitude);
	});
}


function addCircle(latitude, longitude, radius) {
	var marker = new google.maps.Circle({
		center: new google.maps.LatLng(latitude, longitude),
		radius: radius*1000,
		fillColor: 'red',
		fillOpacity: 0.25,
		strokeColor: 'white',
		strokeWeight: 0.5,
		map: map
	});
	plotted_coords.push(marker);
}

function addLine(coords, geo) {
	var color = geo ? '#0000FF' : '#ff0000';
	var marker = new google.maps.Polyline({
		path: coords,
		map: map,
		geodesic: geo,
		strokeColor: color,
		strokeOpacity: 1.0,
		strokeWeight: 2
	});
	plotted_coords.push(marker);
}

function clearOverlays() {
	if (plotted_coords) {
		for (i in plotted_coords) {
			plotted_coords[i].setMap(null);
		}
	}
}


$(document).ready(function(){	
	function initialize() {
		var mapOptions = {
			center: new google.maps.LatLng(35.029996, -92.900391),
			zoom: 5,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	}
	
	$('h2').click(function() {
		var replaceID = $(this).attr('id').replace('t_', 'b_');
		$('#' + replaceID).slideToggle('medium');
	});
	
	$('button').click(function() {
		clearOverlays();

		
		// Points connected with line
		var lines = $('#lines2').val().split('\n');
		var pt_lines = [];
		for (var i = 0; i < lines.length; i++) {
			var line = lines[i].split(',');
			if (line.length == 2) {
				var lat = parseFloat(line[0].replace(/^s+/g,'').replace(/s+$/g,''));
				var long = parseFloat(line[1].replace(/^s+/g,'').replace(/s+$/g,''));
				pt_lines.push(new google.maps.LatLng(lat, long));
			}
		}	
		addLine(pt_lines, true);
	});
	
	initialize();
});

