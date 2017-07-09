$('pac-input').css('display','none');
	$('#open_map').on('click',initialize);
	$('#open_map').click(function(){
		console.log('Now Open Map!');
		
	});

	$('#start_yes-change').click(function(){
			
 			var chk_val_search = $('#chk_val_search').val();
            if (chk_val_search == 1) {
                $('#chk_val_search').val(0);
                $('#open-search').hide(700);
                $('#start_yes-change span').text('Yes');
            } else {
                $('#chk_val_search').val(1);
                $('#open-search').show(700);
                $('#start_yes-change span').text('Change');
            }
	});
	
	$('#btn_hide-show').click(function(){
		var chk_val_search = $('#chk_val_search').val();
            if (chk_val_search == 1) {
                $('#chk_val_search').val(0);
                $('#change_icon').html('<i class="material-icons">keyboard_arrow_right</i>	');
              
            } else {
                $('#chk_val_search').val(1);
                $('#change_icon').html('<i class="material-icons">keyboard_arrow_left</i>');
               
            }
		 $("#card-style").animate({width: 'toggle'}, "slow");
		 
		 
	});
function initialize() {
	
       	var mapMinZoom = 14;
    	var mapMaxZoom = 18;
        var start;
        var end;
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 7.9038781, lng: 98.3033694},
          zoom: mapMinZoom,
          mapTypeControl: false,
          mapTypeId: 'roadmap',
//          gestureHandling: 'coopergreedyative'
          gestureHandling: 'greedy',
          streetViewControl: true,
         fullscreenControl: true

        });
        
		map.get('streetView').setOptions({
//              addressControl : true,
			  
              enableCloseButton : false,
              addressControlOptions: {
                position: google.maps.ControlPosition.BOTTOM_CENTER
              },
              linksControl: false,
              panControl: false,
              enableCloseButton: false
              
            });
            
        var thePanorama = map.getStreetView();
        google.maps.event.addListener(thePanorama, 'visible_changed', function() {
		    if (thePanorama.getVisible()) {
		    		$('#close_streetview').css('display','');
		    		
		    }});

        var closeButton = document.querySelector('#close_streetview');
        controlPosition = google.maps.ControlPosition.LEFT_CENTER;
        
      /*  var openPlace = document.getElementById('btn_hide-show');
        map.controls[ google.maps.ControlPosition.LEFT_BOTTOM ].push( openPlace );*/
        
        var list = document.getElementById('list_place');
         map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(list)
//        controlList = google.maps.ControlPosition.LEFT_CENTER;
           
        thePanorama.controls[ controlPosition ].push( closeButton );
        
        google.maps.event.addDomListener(closeButton, 'click', function(){
        	
		$('#close_streetview').css('display','none');
        thePanorama.setVisible(false);
    });
        initAutocomplete(map,start,end);
       
        // Create the search box and link it to the UI element.
        /*$('.gm-fullscreen-control').remove();*/
      }

      
function initAutocomplete(map,start,end){
	
		  var tst ;
           var current_marker = {
              url: 'https://dotdotdottrip.com/pic/icon_marker.png',
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(35, 35)
            };
         
         var marker2 = new google.maps.Marker({
//           icon : current_marker,
              draggable: false,
              animation: google.maps.Animation.DROP,
              map: map
             
            });
            
         addYourLocationButton(map, marker2);   
         google.maps.event.addListener(map, 'dragend', function() { marker2.setAnimation(null); } );
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
//            console.log("current : "+pos);
            start = pos;
            //marker2.setAnimation(google.maps.Animation.BOUNCE);
            marker2.setPosition(pos);
            map.setCenter(pos);
            
            var geocoder = new google.maps.Geocoder;
            
            latitude=position.coords.latitude;               
            longitude= position.coords.longitude;
            var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
			tst = latlng;
            geocoder.geocode({'location': latlng}, function(results, status){
            	document.getElementById("current").value = "Loading...";
            	console.log(status);
			    if (status === google.maps.GeocoderStatus.OK) {
			      if (results[1]) {

			        //getAddress(results[1].formatted_address);
			        addr = results[1].formatted_address;
			        console.log(addr);
			        addrcurent = results[0].formatted_address;
			        document.getElementById("current").value = addr;
			      } else {
			        window.alert('No results found');
			      }
			    } else {
			      window.alert('Geocoder failed due to: ' + status);
			    }
			  });
			console.log("currentLocation : "+pos);
			nearbyPlace(map,pos);
          }, function() {
//            handleLocationError(true, infoWindow, map.getCenter());
          });
        } 

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var input = document.getElementById('pac-input');
            
        var searchBox = new google.maps.places.SearchBox(input);
//        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var autocomplete = new google.maps.places.Autocomplete(input);
         autocomplete.bindTo('bounds', map);
         
        var marker = new google.maps.Marker({
          map: map,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });
        
        autocomplete.addListener('place_changed', function() {
          	
             marker.setVisible(false);
            var place = autocomplete.getPlace();
		
         if (place.geometry.viewport) {
              map.fitBounds(place.geometry.viewport);
              map.setZoom(16); 
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(16);  // Why 17? Because it looks good.
          }

           marker.setPosition(place.geometry.location);
           end = place.geometry.location;
          
           marker.setVisible(true);
           var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsDisplay.setMap(map);
            directionsService.route(request, function (response, status) {
                
                 directionsDisplay.setDirections(response);
                    directionsDisplay.setOptions({
                        suppressMarkers: true,
                        preserveViewport: true
                    });
            });
            
          getProduct(start,end);
			
        }); 

        
      }

function addYourLocationButton(map, marker) {
	var controlDiv = document.createElement('div');
	
	var firstChild = document.createElement('button');
	firstChild.style.backgroundColor = '#fff';
	firstChild.style.border = 'none';
	firstChild.style.outline = 'none';
	firstChild.style.width = '36px';
	firstChild.style.height = '36px';
	firstChild.style.borderRadius = '2px';
	firstChild.style.boxShadow = '0 1px 4px rgba(0,0,0,0.3)';
	firstChild.style.cursor = 'pointer';
	firstChild.style.marginRight = '10px';
	firstChild.style.padding = '0px';
	firstChild.title = 'Your Location';
	controlDiv.appendChild(firstChild);
	
	var secondChild = document.createElement('div');
	secondChild.style.margin = '4.5px';
	secondChild.style.width = '29px';
	secondChild.style.height = '29px';
	secondChild.style.backgroundImage = 'url(https://maps.gstatic.com/tactile/mylocation/mylocation-sprite-1x.png)';
	secondChild.style.backgroundSize = '248px 26px';
	secondChild.style.backgroundPosition = '1px 0px';
	secondChild.style.backgroundRepeat = 'no-repeat';
	secondChild.id = 'you_location_img';
	firstChild.appendChild(secondChild);
	
	google.maps.event.addListener(map, 'dragend', function() {
		$('#you_location_img').css('background-position', '1px 0px');
	});

	firstChild.addEventListener('click', function() {
		var imgX = '0';
		var animationInterval = setInterval(function(){
			if(imgX == '-24') imgX = '0';
			else imgX = '-24';
			$('#you_location_img').css('background-position', imgX+'px 0px');
		}, 500);
		if(navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
//				marker.setPosition(latlng);
//				map.setCenter(latlng);
				
				map.panTo(latlng);
				
//				map.setZoom(14);
			   
			setTimeout(function() {
			  
			  marker.setAnimation(google.maps.Animation.BOUNCE);
			  smoothZoom(map, 18, map.getZoom());
//	          map.setZoom(16);
	       }, 1000)
				
				clearInterval(animationInterval);
				$('#you_location_img').css('background-position', '-223px 0px');
			});
		}
		else{
			clearInterval(animationInterval);
			$('#you_location_img').css('background-position', '1px 0px');
		}
		
	});
	
	controlDiv.index = 1;
//	map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(controlDiv);
map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(controlDiv);
}

function getProduct(start,end){
/*	var json = {
		start : start,
		end : end
	}*/

$.ajax({
   type: "POST",
   data: {start:start,end:end.toJSON()},
   url: "http://localhost/AppReservationTBK/service/getProduct_realtime.php",
   success: function(msg){
    alert(msg);
   }
});
	


}

function smoothZoom (map, max, cnt) {
    if (cnt >= max) {
        return;
    }
    else {
        z = google.maps.event.addListener(map, 'zoom_changed', function(event){
            google.maps.event.removeListener(z);
            smoothZoom(map, max, cnt + 1);
        });
        setTimeout(function(){map.setZoom(cnt)}, 150); // 80ms is what I found to work well on my system -- it might not work well on all systems
    }
}  

function  nearbyPlace(map,location){
	var service = new google.maps.places.PlacesService(map);
	 service.nearbySearch({
          location: location,
          radius: 500,
          type: ['store']
        }, callback);
}

function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            appendPlace(results[i]);
            
          }
        }else{
			console.log(status);
		}
      }
      
function appendPlace(place) {
       /* var placeLoc = place.geometry.location;*/
        console.log(place.name);
        $('#list_place_push').append('<li class="list-group-item">'+place.name+'</li>');
      }      