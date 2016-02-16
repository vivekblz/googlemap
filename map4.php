
		



 
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta charset="UTF-8" />
	<link rel='stylesheet' type='text/css' href='map2.css' />
	<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCbmes7v9ubaLVGwRFlgU3GyWRC0nUZ02Q&sensor=false"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry"></script>-->
	<script type='text/javascript' src='jquery.min.js'></script>
		 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<!--<script type='text/javascript' src='map2.js'></script>-->
	<title>Google Maps</title>
</head>
<body> 

<script type="text/javascript">
		var geocoder;
		var map;
		var infowindow = new google.maps.InfoWindow();
		var marker;
		
		function initialize() {
		  geocoder = new google.maps.Geocoder();
		  var latlng = new google.maps.LatLng(40.730885,-73.997383);
		  var mapOptions = {
			zoom: 4,
			center: latlng,
			mapTypeId: 'roadmap'
		  }
		  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		}

		function codeLatLng() {
		  var input = document.getElementById('latlng').value;
		  var latlngStr = input.split(',', 2);
		  var lat = parseFloat(latlngStr[0]);
		  var lng = parseFloat(latlngStr[1]);
		  var latlng = new google.maps.LatLng(lat, lng);
		  
		  geocoder.geocode({'latLng': latlng}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			  if (results[1]) {
				
				bounds  = new google.maps.LatLngBounds();
						
				marker = new google.maps.Marker({
					position: latlng,
						map: map
				});
				
				loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
				var latlong_pos=[];
				for(var i=0;i < latlong_pos.length;i++)
				{
					bounds.extend(latlong_pos[i]);
				}
								
				map.fitBounds(bounds);
				map.panTo(marker.position);
				
			infowindow.setContent(results[1].formatted_address);
				infowindow.open(map, marker);
			  } else {
				alert('No results found');
			  }
			} else {
			  alert('Geocoder failed due to: ' + status);
			}
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);



</script>
 <style>
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #latlng {
        width: 225px;
      }
    </style>

	  	
			<?php
			include('config.php');
				
			$query=mysql_query("Select country,region,latitude_longitude from map_detail where id='37'");
			while($row=mysql_fetch_array($query))
			{
				$country=$row['country'];
				$region=$row['region'];
				$data=$row['latitude_longitude'];
				$singledata=explode(" ",$data);
				//echo $singledata[0];
				$data = str_replace(' ','
				',$data);
								
				?>
				
				<!--<input id="address" type="textbox" value="<?php //echo $region.','.$country ?> " style="display:none;">-->
				<!--<input id="latlng" type="textbox" value="<?php //echo $singledata[0]; ?> " style="display:none;">-->
				
				<textarea id='lines2' style="display:none;"><?php echo $data; ?></textarea>
				<div id="panel">
						<input id="latlng" type="text" value="40.714224,-73.961452">
						<input type="button" value="Reverse Geocode" onclick="codeLatLng()">
				</div>
				
			<?php
			
			
			
		}
			
			?>
			
			
			
			<button style="display:none;">Update Map</button>
			<!--<textarea id='lines2' style="display:none;"><?php /*echo $result."\n".$firstdata;*/ //echo $holedata; ?></textarea>-->
			<div id="map-canvas"></div>
			
</body>
</html>

