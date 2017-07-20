	$('pac-input').css('display','none');

		$('#open_map').on('click',initialize);	
		$('#open_map').click(function(){
			console.log('Now Open Map!');
			 
	});

$('#btn-other').click(function(){
	
	$('#btn-other').css('background','#d2d2d2');
});

$('#showPlace').on('hidden.bs.modal', function () {
   $('.material-button-toggle').click();
   $('#chk_val_search').val(0);
   $('#btn-other').css('background','#2C98DE');
});
	
	$('#selectPlaceNearby').click(function(){
		$('#btn_hide-show').click();
	});
	
	
	function showHeader(){
		 $('#btn-real-res').show(700);
                $('.card-contentrealtime').show(700);
				$('.card-contentrealtime').removeClass('hidden5');
			   $('#search-raeltime').css('margin-top','112px');
	}
	function hideHeader(){
				$('#search-raeltime').css('margin-top','10px');
				$('#btn-real-res').hide(700);
				$('.card-contentrealtime').addClass('hidden5');
	}
	

    	$('#start_yes-change').click(function(){
			
 			var chk_val_boxsearch = $('#chk_val_boxsearch').val();
            if (chk_val_boxsearch == 1) {
                $('#chk_val_boxsearch').val(0);
                $('#open-search').hide(700);
                $('#start_yes-change span').text('Yes');
                $('#current').prop('disabled', false);
//                searchStartPlace();
            } else {
                $('#chk_val_boxsearch').val(1);
                $('#open-search').show(700);
                $('#start_yes-change span').text('Change');
                $('#current').prop('disabled', true);
            }
	   });
    
var map; //main map
var marker2; // current position
var markerPlaceOfften; // for pan to place offten
var markerCircle; // point cerrtent locatont
var current_marker,pin; // img marker
var pos; // current location (lat,lng)
var geocoder ;
var marker; //result end place
 $('.material-button-toggle').on("click", function () {
 	    var check =  $('#chk_val_search').val();
 	    if(check==0){
			
			 $('#chk_val_search').val(1);
//			 alert(check);
			 showHeader();
			 
//			 google.maps.event.clearListeners(map, 'center_changed');
		}else{
			
			 $('#chk_val_search').val(0);
//			 alert(check);
			 
		}
        $(this).toggleClass('open');
        $('.option').toggleClass('scale-on');
        $('.list-inline').toggleClass('fix');
        
    });

 
function initialize() {

       	var mapMinZoom = 14;
    	var mapMaxZoom = 18;
        var start;
        var end;
         map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 7.9038781, lng: 98.3033694},
          zoom: mapMinZoom,
          mapTypeControl: false,
          mapTypeId: 'roadmap',
//          gestureHandling: 'coopergreedyative'
          gestureHandling: 'greedy',
          streetViewControl: true,
          fullscreenControl: false

        });
         var list = document.getElementById('list_place');
         map.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(list); 
         
         var btnOp = document.getElementById('selectPlace');
         map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(btnOp);
         
        // StreetView //
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

        thePanorama.controls[ controlPosition ].push( closeButton );
        google.maps.event.addDomListener(closeButton, 'click', function(){
        	
		$('#close_streetview').css('display','none');
        thePanorama.setVisible(false);
    });
		// End StreetView //

        initAutocomplete(map,start,end);

      }

function initAutocomplete(map,start,end){
		document.getElementById("current").value = "Loading...";
		 createAllMarker(); 
		
         addYourLocationButton(map, marker2);  
        google.maps.event.addListener(map, 'dragend', function() { 
         $('#btn_CurrentLocation').show('500');
         marker2.setAnimation(null); 
         
         } );
        
        var inputStart = document.getElementById("current");
        inputStart.addEventListener('click', function() {
        	document.getElementById("current").value = "";

       		 var autocompleteStart = new google.maps.places.Autocomplete(inputStart);
         	 autocompleteStart.bindTo('bounds', map);
         	  autocompleteStart.addListener('place_changed', function() {
         	  		 var placeStart = autocompleteStart.getPlace();
         	  		 console.log(placeStart);
         	  		 map.panTo(placeStart.geometry.location);
         	  		 marker2.setPosition(placeStart.geometry.location);
         	  		 start = placeStart.geometry.location;
         	  		 /*if (place.geometry.viewport) {
			              map.fitBounds(place.geometry.viewport);
			              map.setZoom(16); 
			          } 
					 else {
			            map.setCenter(place.geometry.location);
			            map.setZoom(16);  // Why 17? Because it looks good.
			          }*/
         	  });
        });
        
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
          pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            start = pos;
            
            marker2.setPosition(pos);
            map.setCenter(pos);
            markerCircle.setPosition(pos);
            
            geocoder = new google.maps.Geocoder;
            
            latitude=position.coords.latitude;               
            longitude= position.coords.longitude;
            var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
		
            geocoder.geocode({'location': latlng}, function(results, status){
            	
			    if (status === google.maps.GeocoderStatus.OK) {
			      if (results[1]) {
					console.log(results);
			        addr = results[1].formatted_address;
//			        console.log(addr);
			        addrcurent = results[0].formatted_address;
			        document.getElementById("current").value = addr;
			      }
			    } 
			  });
			
			nearbyPlace(map,pos,"");
			filterPlace(map,pos);
          }, function() {
//            handleLocationError(true, infoWindow, map.getCenter());
          });
        } 
		
        
		
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var input = document.getElementById('pac-input');
            
        var searchBox = new google.maps.places.SearchBox(input);
        var autocomplete = new google.maps.places.Autocomplete(input);
         autocomplete.bindTo('bounds', map);
    
        
        autocomplete.addListener('place_changed', function() {
          	
        marker.setVisible(false);
        var place = autocomplete.getPlace();
		
         if (place.geometry.viewport) {
              map.fitBounds(place.geometry.viewport);
              map.setZoom(16); 
          } 
		 else {
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
            
//          getProduct(start,end);
			
        }); 

        
      }
function searchStartPlace(start){

	/* var input2 = document.getElementById('current');
	 var searchBox = new google.maps.places.SearchBox(input2);
        var autocomplete = new google.maps.places.Autocomplete(input2);
         autocomplete.bindTo('bounds', map);
          autocomplete.addListener('place_changed', function() {

        var place = autocomplete.getPlace();
		 marker2.setPosition(place.geometry.location);
		 map.panTo(place.geometry.location);
         console.log(place);
         start = place.geometry.location;  
        }); */
}

function addYourLocationButton(map, marker2) {
	var controlDiv = document.createElement('div');
	controlDiv.setAttribute("id", "btn_CurrentLocation");
	
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
			  
			  marker2.setAnimation(google.maps.Animation.BOUNCE);
			  smoothZoom(map, 18, map.getZoom());
//	          map.setZoom(16);
			  $('#btn_CurrentLocation').hide('500');
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
controlDiv.style.display = 'none';
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

function nearbyPlace(map,location,value){
	placeRecord();
	var service = new google.maps.places.PlacesService(map);
	if(value!=""){
		service.nearbySearch({
          location: location,
          radius: 1500,
          type: [''+value+'']
        }, callback);
	}else{
		service.nearbySearch({
          location: location,
          radius: 1500
          /*,
          type: ['store','airport','cafe','hospital','bank']*/
        }, callback);
	}
	 
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
        //console.log(place);
        var icon = '<img src="'+place.icon+'" width="30"/>';
        var lo = place.geometry.location.toJSON();
		var lat = lo.lat;
		var lng = lo.lng;
		var address = place.name+" "+place.vicinity;
        $('#list_place_push').append('<li class="list-group-item" id="'+place.id+'" onclick="eventPlace('+lat+','+lng+',\'' + address + '\');"><table width="100%"><tr><td>'+place.name+'</td><td align="right">'+icon+'</td></tr></table></li>');

      }    
      
function filterPlace(map,location){
	   var selectTypePlace = document.querySelector('#types_ofPlace');
       google.maps.event.addDomListener(selectTypePlace, 'change', function(){
		var value = $('#types_ofPlace').val();
//  		alert(value);
		$('.list-group-item').remove();
        nearbyPlace(map,location,value)
    });
}        

function eventPlace(lat,lng,placeName){
	 
	 var latlng = new google.maps.LatLng(lat,lng);
	 map.panTo(latlng);
	 marker2.setPosition(latlng);
	 smoothZoom(map, 18, map.getZoom());
	 $('#pac-input').val(placeName);

	 $('#showPlace').modal('toggle');
	 $('#btn_CurrentLocation').show(500);

	  
	  
}

function placeRecord(){
//	var id = getCookie('login');
	var id = 2;

	$.post( "getuser_control/place_often",{"id":id},function( data ) {
		if(data==='false'){
//$('#selectHome').html('<span id="home_place" onclick="selectSavePlaceOfften(1); class="fa fa-home fa-2x" aria-hidden="true"></span>');
 $('#selectHome').html('<i class="fa fa-home fa-2x" aria-hidden="true" onclick="selectSavePlaceOfften(1);"></i>');

$('#selectOffice').html('<i class="fa fa-building-o fa-2x" aria-hidden="true" onclick="selectSavePlaceOfften(1);"></i>');

		}else{
				if(data){
				var obj = JSON.parse(data);
				$.each(obj, function (key, data) {

				});
			}
		}

    	});
}

function selectSavePlaceOfften(type_place){

	
 	$('#btn-home').css('background','#d2d2d2');
// markerPlaceOfften.setAnimation(google.maps.Animation.DROP); 
var infowindow = new google.maps.InfoWindow({maxWidth: 200});	 

    hideHeader();
    $('#search-raeltime').hide(700);
	$('#btn_CurrentLocation').show(500);
	 marker2.setVisible(false);
	markerPlaceOfften.setVisible(true);
    	var url;
    	var Newlat;
    	var Newlng;
    google.maps.event.addListener(map, 'center_changed', function() {    
        Newlat = map.getCenter().lat();
        Newlng = map.getCenter().lng();
        var newPos = {
              lat: Newlat,
              lng: Newlng
            };
            
		  markerPlaceOfften.setPosition(newPos);
 		  console.log(newPos);
 		  url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+Newlat+','+Newlng+'&sensor=true';
			
    });

	   google.maps.event.addListener(map, 'dragend', function() {    
		
          $.post( url, function( data ) {
					console.log(data.results[0].formatted_address);
					infowindow.setContent('<div>'+data.results[0].formatted_address+'</div><div class="btn btn-sm btn-danger pull-right btn-part" onclick="savePlaceOften(1,'+Newlat+','+Newlng+',\'' + data.results[0].place_id+ '\',\'' +type_place+'\')">Save</div>');
					infowindow.open(map, markerPlaceOfften);   
			});
          });
          
        $('.material-button-toggle').on("click", function () {
 	    var check =  $('#chk_val_search').val();
 	    if(check==0){
			
			 $('#chk_val_search').val(1);
			 
			 showHeader();
			  $('#search-raeltime').show(700);
			 google.maps.event.clearListeners(map, 'center_changed');
//			 markerPlaceOfften.setMap(null);
			markerPlaceOfften.setVisible(false);
			 marker2.setVisible(true);
			   infowindow.close();
			  map.panTo(pos);
			  $('#btn-home').css('background','#2C98DE');
			    google.maps.event.clearListeners(map, 'dragend');
		}else{
			
			 $('#chk_val_search').val(0);
			 
			 
		}
        
    });
}

function createAllMarker(){
	         pin = {
              url: 'https://dotdotdottrip.com/pic/marker_often.png',
                size: new google.maps.Size(71, 71),
			  origin: new google.maps.Point(0, 0),
			  anchor: new google.maps.Point(17, 34),
			  scaledSize: new google.maps.Size(45, 45)
            };
	 markerPlaceOfften = new google.maps.Marker({
              icon : pin,
              map: map     
            });
             
         current_marker = {
              url: 'https://dotdotdottrip.com/pic/icon_marker.png',
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(35, 35)
            };
        
         
         marker2 = new google.maps.Marker({
//           icon : current_marker,
              draggable: true,
              animation: google.maps.Animation.DROP,
              map: map             
            });
            
         markerCircle = new google.maps.Marker({
          position: map.getCenter(),
          icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 6,
            fillOpacity: 2,
            strokeWeight: 2,
            fillColor: '#01a6fe',
            strokeColor: '#01a6fe'
          },
          draggable: true,
          map: map
        });
        
          marker = new google.maps.Marker({
          map: map,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });
        
}

function savePlaceOften(type,lat,lng,place_id,type_place){
	if(type==1){
		var url_placeoften = 'my_place_often/save';
		$.post( url_placeoften,{lat:lat,lng:lng,place_id:place_id,type_place:type_place},function( data ) {
					alert(data);
			});
	}
}

function selectMyPlace(lat,lng){
	
}