<?php

include('config.php');

?>
<html> 
<head> 
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
	<title>Google Map </title>
	<meta name="keywords" content="polygon,creator,google map,v3,draw,paint">
	<meta name="description" content="Google Map V3 Polygon Creator">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="polygon.min.js"></script>
	<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>-->
	
	
	<script type="text/javascript">
		var geocoder;
		var map;
	
	
	/*$(function(){
		  //create map
		 var singapoerCenter=new google.maps.LatLng(35.029996,-92.900391);
		 var myOptions = {
		  	zoom: 4,
		  	center: singapoerCenter,
		  	mapTypeId: google.maps.MapTypeId.ROADMAP,
		  	disableDefaultUI: true,
			zoomControl: true
		  	 
			}*/
			
			function initialize() 
			{ 	
				geocoder = new google.maps.Geocoder();
				var myOptions = {
                   zoom: 2,
                   center: new google.maps.LatLng(47.288828765662416, 7.945261001586914),
                   //mapTypeControl: true,
                  // mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                   navigationControl: true,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
                };
				map = new google.maps.Map(document.getElementById("main-map"), myOptions);
			
	
			
				 /*map = new google.maps.Map(document.getElementById('main-map'), myOptions);*/
				 var creator = new PolygonCreator(map);
						 
				 //reset
				 $('#reset').click(function(){ 
						creator.destroy();
						creator=null;
						
						creator=new PolygonCreator(map);
				 });		 
				 

				 //show paths
				 $('#showData').click(function()
				 { 
			
						$('#dataPanel').empty();
						if(null==creator.showData()){
							alert('Please first create a polygon');
							
						}else
						{
							
							var latlong = creator.showData();
							
							$('#dataPanel').val(latlong);
							//$("#google_map").submit();
							//return false;
							
							
							//alert(latlong);
							//$('#dataPanel').val(latlong);
						}
			
				 });

		}	
			/*function codeAddress() {
	  var address = document.getElementById('address').value;
	  geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		  map.setCenter(results[0].geometry.location);
		  var marker = new google.maps.Marker({
			  map: map,
			  position: results[0].geometry.location
		  });
		} else {
		  alert('Geocode was not successful for the following reason: ' + status);
		}
	  });
	}*/
	function findAddress(address) {
          var addressStr=document.getElementById("address").value;
          alert(addressStr);
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
					 map.fitBounds(results[0].geometry.viewport);
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
	
	
	
	
		google.maps.event.addDomListener(window, 'load', initialize);
	


	</script>
	<script language="javascript" type="text/javascript">

	
	function getRegion(country) {		
		
		
		
		var countryID=document.getElementById("countryId");
		var sel_country=countryID.options[countryID.selectedIndex].value;
		
		
		document.getElementById('address').value=country;
		
				
			
	}
	
	
	function getselregion(state){
		otherdata = document.getElementById('address').value;
		var regionID=document.getElementById("regionId");
		var sel_region=regionID.options[regionID.selectedIndex].value;
		document.getElementById('address').value=otherdata+', '+state;
		document.getElementById('address').value=state+', '+otherdata;
				
	}
	
</script>
	
</head>
<body>

	<div id="main-map">
	</div>
	<div id="side">
		
		 <form method="post" id="google_map" action="google_map.php">
			 <table>
				 <tr><td>
			 <select name="country" onChange="getRegion(this.value)"  id="countryId">
			<option value="">Select Country</option> 
			 
				 <option value="USA">USA</option>
				 <option value="England">England</option>
				  <option value="India">India</option>
				   <option value="France">France</option>
				    <option value="South Africa">South Africa</option>	
				    <option value="Argentina">Argentina</option>	
				    
			</select>
				 </td>
				 <td>
			
				<select name="region" id="regionId" onChange="getselregion(this.value)">
					<option value="">Select Region</option>
					 <option value="New York">New York</option>
					<option value="London">London</option>
					<option value="Napa">Napa</option>
					<option value="Chennai">Chennai</option>
				    <option value="Madurai">Madurai</option>	
				     <option value="Salta">Salta</option>
				      <option value="NA">NA</option>	
				</select>
	
			</td>
			<td>
			 <input type="button" value="Geocode" onclick="findAddress()">
			</td>	
			</tr>	 
			</table>
			 
			 
		<input id="reset" value="Reset" type="button" />
	
		<div   id="ddataPanel">
		
		<input type="hidden" id="dataPanel" name="latlon[]" />
		<input type="submit" id="showData"   value="Submit">
		
		<input id="address" type="textbox" value=" " >
		<!--<input type="button" value="Geocode" id="" onclick="codeAddress()">-->
	<!--<button id="showData" class="navi" type="button">View</button>
	
		
		<!--</form>-->
		</form>
		</div>
	</div>
</body>
</html>
