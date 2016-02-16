<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Zoom to State with Select List (Google Maps API)</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
</script>
    <script type="text/javascript">
    
// modified from http://www.weltmeer.ch/divelog/
    // globals
    var map=null;
    var geocoder = null;
    function initialize() {
       geocoder = new google.maps.Geocoder();
       var myOptions = {
                   zoom: 2,
                   center: new google.maps.LatLng(47.288828765662416, 7.945261001586914),
                   //mapTypeControl: true,
                  // mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                   navigationControl: true,
                   mapTypeId: google.maps.MapTypeId.HYBRID
                };
       map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        //findAddress("United States");
    }

  	function findAddress(address) {
          var addressStr=document.getElementById("stateselect").value;
          if (!address && (addressStr != '')) 
             address = "State of "+addressStr;
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

</script>
  </head>
  <body onload="initialize()" >
<h2>Zoom to State with Select List (Google Maps API)</h2>
<div id="TOPNAV">
<select id="stateselect" name="countryselect" class="textfeld"  onclick="findAddress();return false"  onchange="findAddress();return false" onfocus="">
              <option value=''>Select a State....</option>
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
</select> 
</div>
<div id="map_canvas" style="width: 800px; height: 500px"></div>

</script>

	</body>
</html>
