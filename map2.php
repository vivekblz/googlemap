
		



 
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
}

function clearOverlays() {
	if (plotted_coords) {
		for (i in plotted_coords) {
			plotted_coords[i].setMap(null);
		}
	}
}


$(document).ready(function(){	

	
	
			function initialize() 
			{
				geocoder = new google.maps.Geocoder();
				var latlng = new google.maps.LatLng(0, 0);
				var mapOptions = 
				{
				zoom: 4,
				center: latlng,
				//mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeId: google.maps.MapTypeId.SATELLITE,
				disableDefaultUI: true
				};
				map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
			}
			
			//$('h2').click(function() {
				//var replaceID = $(this).attr('id').replace('t_', 'b_');
				//$('#' + replaceID).slideToggle('medium');
			//});
	
			$(document).ready(function() {
				clearOverlays();

				
				var address = $('#address').val();
				geocoder.geocode( { 'address': address}, function(results, status)
				{
				if (status == google.maps.GeocoderStatus.OK)
				 {
					bounds  = new google.maps.LatLngBounds(); 
				 
				  map.setCenter(results[0].geometry.location);
				  var marker = new google.maps.Marker({
					  map: map,
					 position: results[0].geometry.location
				  });
				  
				  
				  loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
				var latlong_pos=[];
				for(var i=0;i < latlong_pos.length;i++)
				{
					bounds.extend(latlong_pos[i]);
				}
				
				//bounds.extend(loc);
				
				map.fitBounds(bounds);
				//mao.panToBounds(bounds);     
				//map.setZoom(6);
				map.panTo(marker.position);
				  
				  
				  
				 
				} 
				else
				 {
				  alert('Geocode was not successful for the following reason: ' + status);
				}
				});
		
				
				//Points connected with line
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
	//google.maps.event.addDomListener(window, 'load', initialize);
	initialize();

});

		google.maps.event.addDomListener(window, 'load', initialize);



</script>

<script type="text/javascript">
//$('#id').on('change', function() {
  //alert( this.value );
//})

//$(document).ready(function(){
  //$('button').trigger('click');
//});

</script>
	  	<div id='mappart'>
			<div id="map_canvas"></div>
		</div>
		
			<?php
			include('config.php');
			
			
			
			//$sql=mysql_query("Select latitude_longitude from map_detail where id='$drop'");
			/*$sql=mysql_query("Select * from map_detail");
			if(!$sql)
			{
				die('Invalid query: ' . mysql_error());
			}
			
			echo '<select name="id" >'; 
			while ($row = mysql_fetch_array($sql)) 
			{
				echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
			}
			echo '</select>';
			//if($_SERVER['REQUEST_METHOD'] =='POST')
			//{
			$drop=$_POST['id'];*/
			
			//$query=mysql_query("Select * from map_detail where id='$drop'");
			$query=mysql_query("Select country,region,latitude_longitude from map_detail where id='37'");
			while($row=mysql_fetch_array($query))
			{
				$country=$row['country'];
				$region=$row['region'];
				$data=$row['latitude_longitude'];
				$singledata=explode(" ",$data);
				echo $singledata[0];
				$data = str_replace(' ','
				',$data);
				
				
				
			
				//print_r($singledata);die();?>
				<input id="address" type="textbox" value="<?php echo $region.','.$country ?> " style="display:none;">
				<textarea id='lines2' style="display:none;"><?php echo $data; ?></textarea>
			
			<?php
			
			
			
		}
			
			?>
			
			
			
			<button style="display:none;">Update Map</button>
			<!--<textarea id='lines2' style="display:none;"><?php /*echo $result."\n".$firstdata;*/ //echo $holedata; ?></textarea>
	
			
</body>
</html>

