<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Zoom to State with Select List (Google Maps API)</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type='text/javascript' src='jquery.min.js'></script>
    <script type="text/javascript">
    
// modified from http://www.weltmeer.ch/divelog/
    // globals
    var map=null;
    var geocoder = null;
    
    
    
  
var plotted_coords = [];
var infowindow = new google.maps.InfoWindow();

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
    

    function initialize() {
       geocoder = new google.maps.Geocoder();
       var myOptions = {
                   zoom: 2,
                   center: new google.maps.LatLng(0, 0),
					//mapTypeControl: true,
					//mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                   //navigationControl: true,
					mapTypeId: google.maps.MapTypeId.HYBRID,
					disableDefaultUI: true
                };
       map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        
    }

  	function findAddress(address) {
		clearOverlays();
		
          var addressStr=document.getElementById("countryname").value;
          //alert(addressStr);
          if (!address && (addressStr != '')) 
          
             address = addressStr;
	  else 
             address = addressStr;
          if ((address != '') && geocoder) 
          {
			geocoder.geocode( { 'address': address}, function(results, status) 
			   {
			   if (status == google.maps.GeocoderStatus.OK) 
			   {
				 if (status != google.maps.GeocoderStatus.ZERO_RESULTS) 
				 {
				   if (results && results[0]&& results[0].geometry && results[0].geometry.viewport) 
				    // alert("zoom");
				     
							map.fitBounds(results[0].geometry.viewport);
																				
									var newZoom = map.getZoom() + 1; 
									map.setZoom(newZoom); 
					
				 } 
				 else 
				 {
				   alert("No results found");
				 }
			   } 
			   else 
			   {
				alert("Geocode was not successful for the following reason: " + status);
			   }
			   });
          
	  }
  	}

function polygon()
{
		//initialize();
		findAddress();
		
				var lines = $('#lines2').val().split('\n');
				var pt_lines = [];
				for (var i = 0; i < lines.length; i++) 
				{
					var line = lines[i].split(',');
					if (line.length == 2) 
					{
						var lat = parseFloat(line[0].replace(/^s+/g,'').replace(/s+$/g,''));
						var long = parseFloat(line[1].replace(/^s+/g,'').replace(/s+$/g,''));
						pt_lines.push(new google.maps.LatLng(lat, long));
					}
				}	
				addLine(pt_lines, true);
}

$(document).ready(function(){
	//alert("test");	
	

	 setTimeout(function() {
	$("#polygon").trigger('click');
	 },100);
	

});




google.maps.event.addDomListener(window, 'load', initialize);

</script>
  </head>
  <body >

<div id="TOPNAV">
	
	<?php
			include('config.php');
			
			
			
			$query=mysql_query("Select country,region,latitude_longitude from map_detail where id='66'");
			while($row=mysql_fetch_array($query))
			{
				$country=$row['country'];
				$region=$row['region'];
				$data=$row['latitude_longitude'];
				$singledata=explode(" ",$data);
				//echo $singledata[0];
				$data = str_replace(' ','
				',$data);
				
				//print_r($data);die();
			
				?>
				<!--<input id="latlng" type="textbox" value="<?php //echo $singledata[0]; ?> " style="display:none;">-->
				<input id="countryname" type="textbox" value="<?php echo $region.','.$country ?>" style="display:none;" >
				<textarea id='lines2' style="display:none;"><?php echo $data; ?></textarea>
				 <input type="button" id="polygon" value="polygon" onclick=" polygon();">
			<?php
			
		}
			
			?>
			<!-- <input type="button" value="Reverse Geocode" onclick="codeLatLng()">
			  <input type="button" value="polygon" onclick="polygon()">-->
			<button style="display:none;">Update Map</button>
			
	
	
	
	
	
	
</div>
<div id="map_canvas" style="width:272px; height:154px"></div>

</script>

	</body>
</html>
