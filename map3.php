

		



 
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta charset="UTF-8" />
	<link rel='stylesheet' type='text/css' href='map2.css' />
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCbmes7v9ubaLVGwRFlgU3GyWRC0nUZ02Q&sensor=false"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry"></script>
	<script type='text/javascript' src='jquery.min.js'></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<!--<script type='text/javascript' src='map2.js'></script>-->
	<title>Google Maps</title>
</head>
<body> 

<script type="text/javascript">
var map;
var plotted_coords = [];
var infowindow = new google.maps.InfoWindow();
var geocoder;
var marker;

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
		strokeWeight: 2, 
		fillColor: "#3090C7",
        fillOpacity: 0.35
		
	});
	plotted_coords.push(marker);
	//alert("test");
}

function clearOverlays() {
	if (plotted_coords) {
		for (i in plotted_coords) {
			plotted_coords[i].setMap(null);
		}
	}
}

function initialize() 
			{
				geocoder = new google.maps.Geocoder();
				var latlng = new google.maps.LatLng(0, 0);
				var mapOptions = 
				{
				zoom: 4,
				center: latlng,
				//mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeId: google.maps.MapTypeId.HYBRID,
				disableDefaultUI: true
				};
				map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
			}
			

function codeLatLng() 
{
	//alert("codeLatLng");
		  var input = document.getElementById('latlng').value;
		  var latlngStr = input.split(',', 2);
		  var lat = parseFloat(latlngStr[0]);
		  var lng = parseFloat(latlngStr[1]);
		  var latlng = new google.maps.LatLng(lat, lng);
		  
		  geocoder.geocode({'latLng': latlng}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			  if (results[1]) {
				
				bounds  = new google.maps.LatLngBounds();
					//bounds =new GLatLngBounds( );	
				marker = new google.maps.Marker({
					position: latlng,
						//map: map
				});
				
				loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
				var latlong_pos=[];
				for(var i=0;i < latlong_pos.length;i++)
				{
					bounds.extend(latlong_pos[i]);
				}
					
				//map.fitBounds(results[0].geometry.viewport);			
				map.fitBounds(bounds);
				map.panTo(marker.position);
				
				//infowindow.setContent(results[1].formatted_address);
				//infowindow.open(map, marker);
			  } else {
				alert('No results found');
			  }
			} else {
			  alert('Geocoder failed due to: ' + status);
			}
		  });
		}


function centerAndZoomOnBounds(bounds) {
	var center = bounds.getCenter();
	var newZoom = map.getBoundsZoomLevel(bounds);
		if (map.getZoom() != newZoom) {
		map.setCenter(center, newZoom);
	} 	else {
		map.panTo(center);
	}
}



function polygon()
{
		initialize();
	codeLatLng() ;

	clearOverlays();
	
	//Points connected with line
	//alert("polygon");
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
}






		google.maps.event.addDomListener(window, 'load', initialize);



</script>


	  	<div id='mappart'>
			<div id="map_canvas"></div>
		</div>
		
			<?php
			include('config.php');
			
			
			
			$query=mysql_query("Select country,region,latitude_longitude from map_detail where id='60'");
			while($row=mysql_fetch_array($query))
			{
				$country=$row['country'];
				$region=$row['region'];
				$data=$row['latitude_longitude'];
				$singledata=explode(" ",$data);
				//echo $singledata[0];
				$data = str_replace(' ','
				',$data);
				
				
			
				//print_r($singledata);die();?>
				<input id="latlng" type="textbox" value="<?php echo $singledata[0]; ?> " style="display:none;">
				<textarea id='lines2' style="display:none;"><?php echo $data; ?></textarea>
			
			<?php
			
		}
			
			?>
			<!-- <input type="button" value="Reverse Geocode" onclick="codeLatLng()">-->
			  <input type="button" value="polygon" onclick="polygon()">
			<button style="display:none;">Update Map</button>
			<!--<textarea id='lines2' style="display:none;"><?php /*echo $result."\n".$firstdata;*/ //echo $holedata; ?></textarea>-->
	
		<script type="text/javascript">
		$(document).ready(function(){	
		
			
				
				
				polygon();
	
	//google.maps.event.addDomListener(window, 'load', initialize);
	

});
		
		</script>	
</body>
</html>

