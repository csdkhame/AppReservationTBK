<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

/*      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }*/

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }

	  .form-control {
	  	
    display: block;
    width: 100%; 
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.center {
    position: absolute;
    left: 0;
    top: 25%;
    width: 100%;
    text-align: center;
    font-size: 18px;
    
}

	  
    </style>
  
  </head>
  <body>
  
   	<div class="center">
    <input id="pac-input" class="form-control" type="text" placeholder="Search Box">
	</div>
    <div id="map"></div>
    
    <script>
 
      function initAutocomplete() {
      	var directionsService = new google.maps.DirectionsService;
      	var directionsDisplay = new google.maps.DirectionsRenderer();
      	var start;
      	var end;
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 7.9038781, lng: 98.3033694},
          zoom: 17,
          mapTypeControl: false,
          mapTypeId: 'roadmap'
        });
         var current_marker = {
              url: 'http://dotdotdottrip.com/pic/icon_marker.png',
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(35, 35)
            };
		 
		 var marker2 = new google.maps.Marker({
		 	 icon : current_marker,
	          draggable: false,
              animation: google.maps.Animation.DROP,
	          map: map
	         
	        });
	        
	        
		if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            start = pos;
			//marker2.setAnimation(google.maps.Animation.BOUNCE);
            marker2.setPosition(pos);
            map.setCenter(pos);
            
			var geocoder = new google.maps.Geocoder;
			//console.log(pos);
			latitude=position.coords.latitude;               
			longitude= position.coords.longitude;
			var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

			geocoder.geocode({'location': latlng}, function(results, status) 																																				{
	console.log('result : '+status);
    if (status === google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        console.log(results[1].place_id);
        console.log(results[1].formatted_address);
      } else {
        window.alert('No results found');
         console.log('No results found');
      }
    } else {
      window.alert('Geocoder failed due to: ' + status);
      console.log('Geocoder failed due to: ' + status);
    }
  });

        
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
          
        }

		var marker = new google.maps.Marker({
          map: map,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

         var autocomplete = new google.maps.places.Autocomplete(input);
         autocomplete.bindTo('bounds', map);
         
          autocomplete.addListener('place_changed', function() {
          	 marker.setVisible(false);
          	var place = autocomplete.getPlace();

         if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
              map.setZoom(13); 
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
           marker.setPosition(place.geometry.location);
           end = place.geometry.location;
		   marker.setVisible(true);
		   var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
            };
        	//console.log(request);
        	directionsDisplay.setMap(map);
        	directionsService.route(request, function (response, status) {
        		
        		 directionsDisplay.setDirections(response);
                    directionsDisplay.setOptions({
                        suppressMarkers: true,
                        preserveViewport: true
                    });
        	});
        });

		
        
		
      }

    </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&libraries=places&callback=initAutocomplete"
         async defer></script> 
         
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkWn5zxgLEYs7l32jfAIaYuMTPSghhWng&libraries=places&callback=initAutocomplete"
         async defer></script>-->
  </body>
</html>