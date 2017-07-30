/*$('#current').focus(function(){
	$('#startPut').addClass( "is-focused" );
});
$('#current').focusout(function() {
   $('#startPut').removeClass( "is-focused" );
  });
 
 $('#pac-input').focus(function(){
	$('#endPut').addClass( "is-focused" );
});
$('#pac-input').focusout(function() {
   $('#endPut').removeClass( "is-focused" );
  });
*/
$('#boxRealtime input').focus(function() {
    $('#chk_val_boxsearch').val(1);
    $('#chk_val_boxsearch').addClass(this.id);
});
$('#boxRealtime input').focusout(function() {
    $('#chk_val_boxsearch').removeClass(this.id);
    $('#chk_val_boxsearch').val(0);
});
//		$('#boxRealtime input').click()


$('#open_map').on('click', initialize);
$('#open_map').click(function() {
    console.log('Now Open Map!');

});

$('#btn-other').click(function() {

    $('#btn-other').addClass('blinks');


});

$('#showPlace').on('hidden.bs.modal', function() {
    $('.material-button-toggle').click();
    $('#chk_val_search').val(0);
    $('#btn-other').removeClass('blinks');
    $('.material-button').show(500);
});

$('#selectPlaceNearby').click(function() {
    $('#btn_hide-show').click();
});


function showHeader() {
    $('#btn-real-res').show(700);
    $('.card-contentrealtime').show(700);
    $('.card-contentrealtime').removeClass('hidden5');
    $('#search-raeltime').css('margin-top', '112px');
}

function hideHeader() {
    $('#search-raeltime').css('margin-top', '10px');
    $('#btn-real-res').hide(700);
    $('.card-contentrealtime').addClass('hidden5');
}


/*  	$('#start_yes-change').click(function(){
			
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
	   });*/

var map; //main map
var marker2; // current position
var markerPlaceOfften; // for pan to place offten
var markerCircle; // point cerrtent locatont
var current_marker, pin; // img marker
var pos; // current location (lat,lng)
var geocoder;
var marker; //result end place
var placeStart = [];
var placeEnd = [];
var infowindow;
var lat, lng;

/* $('.material-button').on("click", function () {

 	    var check =  $('#chk_val_search').val();
 	    if(check==0){
//			console.log('inclick '+check);
			 $('#chk_val_search').val(1);
//			 $(".thisclass:not(#thisid)").doAction();
//			 $( ".material-button:not(.blinks)" ).hide(500);
		}else{
//			 alert(1);
			 $('#chk_val_search').val(0);
			 resetMap();
		}

    });*/



function initialize() {

    var mapMinZoom = 14;
    var mapMaxZoom = 18;
    var start;
    var end;
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 7.9038781, lng: 98.3033694 },
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

        enableCloseButton: false,
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
            $('#close_streetview').css('display', '');

        }
    });

    var closeButton = document.querySelector('#close_streetview');
    controlPosition = google.maps.ControlPosition.LEFT_CENTER;

    thePanorama.controls[controlPosition].push(closeButton);
    google.maps.event.addDomListener(closeButton, 'click', function() {

        $('#close_streetview').css('display', 'none');
        thePanorama.setVisible(false);
    });
    // End StreetView //

    initAutocomplete(map, start, end);

}

function initAutocomplete(map, start, end) {
    document.getElementById("current").value = "Loading...";
    createAllMarker();

    addYourLocationButton(map, marker2);
    google.maps.event.addListener(map, 'dragend', function() {
        $('#btn_CurrentLocation').show('500');
        marker2.setAnimation(null);

    });

    var inputStart = document.getElementById("current");
    inputStart.addEventListener('click', function() {

        document.getElementById("current").value = "";

    });

    var autocompleteStart = new google.maps.places.Autocomplete(inputStart);
    autocompleteStart.bindTo('bounds', map);
    autocompleteStart.addListener('place_changed', function() {
        //         	 
        placeStart = autocompleteStart.getPlace();
        console.log(placeStart);
        map.panTo(placeStart.geometry.location);
        marker2.setPosition(placeStart.geometry.location);
        start = placeStart.geometry.location;
        lat = placeStart.geometry.viewport;
        lng = placeStart.geometry.viewport;
        var latlog = new google.maps.LatLng(start);
        console.log(placeStart);
        console.log(lat);
        console.log(lng);
        console.log(start)
        console.log(latlog)
        geocoder.geocode({ 'location': start }, function(results, status) {
            console.log(results)
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
            console.log(position.coords)
            console.log(position)
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;

            var latlng = { lat: parseFloat(latitude), lng: parseFloat(longitude) };

            geocoder.geocode({ 'location': latlng }, function(results, status) {
                var placeId = results[1].place_id;
                sendplaceid(placeId);
                console.log(results)
                console.log(results[0].place_id)
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        placeStart = results;
                        console.log(placeStart);
                        addr = placeStart[1].formatted_address;

                        //					$('#startPut').addClass('is-focused');
                        document.getElementById("current").value = addr;
                    }
                }
            });

            nearbyPlace(map, pos, "");
            filterPlace(map, pos);
        }, function() {
            //            handleLocationError(true, infoWindow, map.getCenter());
        });
    }

    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer();
    var inputEnd = document.getElementById('pac-input');

    //        var searchBox = new google.maps.places.SearchBox(input);
    var autocomplete = new google.maps.places.Autocomplete(inputEnd);
    autocomplete.bindTo('bounds', map);

    autocomplete.addListener('place_changed', function() {

        marker.setVisible(false);
        var place = autocomplete.getPlace();
        placeEnd = place;
        if (place.geometry.viewport) {
            map.fitBounds(placeEnd.geometry.viewport);
            map.setZoom(16);
        } else {
            map.setCenter(placeEnd.geometry.location);
            map.setZoom(16); // Why 17? Because it looks good.
        }

        marker.setPosition(placeEnd.geometry.location);
        end = placeEnd.geometry.location;

        marker.setVisible(true);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsDisplay.setMap(map);
        directionsService.route(request, function(response, status) {
            console.log(response.routes[0].legs);
            var distance = response.routes[0].legs[0].distance.text;
            var duration = response.routes[0].legs[0].duration.text;

            console.log(distance);
            $.ajax({
                type: 'POST',
                url: 'https://dotdotdottrip.com/laglng_control/getlaglng',
                data: { 'lat': latitude, 'lng': longitude, 'distance': distance },
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)

                }
            });
            var infowindowDetailTravel = new google.maps.InfoWindow({ maxWidth: 200 });
            infowindowDetailTravel.setContent('<div><p> Distance ' + distance + '</p><p>Use time ' + duration + '</p></div>');
            infowindowDetailTravel.open(map, marker);
            directionsDisplay.setDirections(response);
            directionsDisplay.setOptions({
                suppressMarkers: true,
                preserveViewport: true
            });
        });

        //          getProduct(start,end);

    });


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
        var animationInterval = setInterval(function() {
            if (imgX == '-24') imgX = '0';
            else imgX = '-24';
            $('#you_location_img').css('background-position', imgX + 'px 0px');
        }, 500);
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                //				marker.setPosition(latlng);
                //				map.setCenter(latlng);

                map.panTo(latlng);

                //				map.setZoom(14);

                setTimeout(function() {

                    document.getElementById("current").value = placeStart[1].formatted_address;
                    //			  $('#start_yes-change').click();
                    marker2.setPosition(latlng);
                    marker2.setAnimation(google.maps.Animation.BOUNCE);
                    smoothZoom(map, 17, map.getZoom());

                    //	          map.setZoom(16);
                    $('#btn_CurrentLocation').hide('500');
                }, 1000)

                clearInterval(animationInterval);
                $('#you_location_img').css('background-position', '-223px 0px');
            });
        } else {
            clearInterval(animationInterval);
            $('#you_location_img').css('background-position', '1px 0px');
        }

    });

    controlDiv.index = 1;
    //	map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(controlDiv);
    map.controls[google.maps.ControlPosition.RIGHT_CENTER].push(controlDiv);
    controlDiv.style.display = 'none';
}

function getProduct(start, end) {
    /*	var json = {
    		start : start,
    		end : end
    	}*/

    $.ajax({
        type: "POST",
        data: { start: start, end: end.toJSON() },
        url: "http://localhost/AppReservationTBK/service/getProduct_realtime.php",
        success: function(msg) {
            alert(msg);
        }
    });



}

function smoothZoom(map, max, cnt) {
    if (cnt >= max) {
        return;
    } else {
        z = google.maps.event.addListener(map, 'zoom_changed', function(event) {
            google.maps.event.removeListener(z);
            smoothZoom(map, max, cnt + 1);
        });
        setTimeout(function() { map.setZoom(cnt) }, 150); // 80ms is what I found to work well on my system -- it might not work well on all systems
    }
}

function nearbyPlace(map, location, value) {
    placeRecord();
    var service = new google.maps.places.PlacesService(map);
    if (value != "") {
        service.nearbySearch({
            location: location,
            radius: 1500,
            type: ['' + value + '']
        }, callback);
    } else {
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
    } else {
        console.log(status);
    }
}

function appendPlace(place) {
    /* var placeLoc = place.geometry.location;*/
    //console.log(place);
    var icon = '<img src="' + place.icon + '" width="30"/>';
    var lo = place.geometry.location.toJSON();
    var lat = lo.lat;
    var lng = lo.lng;
    var address = place.name + " " + place.vicinity;
    $('#list_place_push').append('<li class="list-group-item" id="' + place.id + '" onclick="eventPlace(' + lat + ',' + lng + ',\'' + address + '\');"><table width="100%"><tr><td>' + place.name + '</td><td align="right">' + icon + '</td></tr></table></li>');

}

function filterPlace(map, location) {
    var selectTypePlace = document.querySelector('#types_ofPlace');
    google.maps.event.addDomListener(selectTypePlace, 'change', function() {
        var value = $('#types_ofPlace').val();
        //  		alert(value);
        $('.list-group-item').remove();
        nearbyPlace(map, location, value)
    });
}

function eventPlace(lat, lng, placeName) {

    var latlng = new google.maps.LatLng(lat, lng);
    map.panTo(latlng);
    marker2.setPosition(latlng);
    smoothZoom(map, 18, map.getZoom());
    $('#pac-input').val(placeName);

    $('#showPlace').modal('toggle');
    $('#btn_CurrentLocation').show(500);



}

function placeRecord() {
    //	var id = getCookie('login');
    var id = 2;

    $.post("my_place_often/place_often", { "id": id }, function(results) {
        console.log(results);
        if (results === 'false') {
            $('#selectHome').html('<i class="fa fa-home fa-2x" aria-hidden="true" onclick="selectSavePlaceOfften(1);"></i>');
            $('#selectOffice').html('<i class="fa fa-building-o fa-2x" aria-hidden="true" onclick="selectSavePlaceOfften(2);"></i>');

        } else {
            if (results) {
                var obj = JSON.parse(results);
                $.each(obj, function(key, data) {
                    console.log(data);
                    url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + data.i_lat + ',' + data.i_lng + '&sensor=true';
                    if (data.s_type == '1') {

                        $('#selectHome').html('<i class="fa fa-home fa-2x" aria-hidden="true" onclick="selectMyPlace(1,\'' + url + '\');"></i>');
                        $('#btn-home').css('background', '#f44336');
                    }
                    if (data.s_type == '2') {

                        $('#selectOffice').html('<i class="fa fa-building-o fa-2x" aria-hidden="true" onclick="selectMyPlace(2,\'' + url + '\');"></i>');
                        $('#btn-office').css('background', '#f44336');
                    }


                });

                //				$('#btn-office').css('','#2C98DE');

            }
        }

    });
}

function selectSavePlaceOfften(type_place) {
    var check = $('#chk_val_search').val();
    if (check == 0) {
        //			console.log('inclick '+check);
        $('#chk_val_search').val(1);
        //			 $(".thisclass:not(#thisid)").doAction();
        //			 $( ".material-button:not(.blinks)" ).hide(500);

        hideHeader();
        infowindow = new google.maps.InfoWindow({ maxWidth: 200 });
        $('#search-raeltime').hide(700);
        $('#btn_CurrentLocation').show(500);
        markerPlaceOfften.setMap(map);
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
            url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + Newlat + ',' + Newlng + '&sensor=true';

        });
        if (type_place == 1) {
            //		$('#btn-home').css('background','#d2d2d2');
            $('#btn-home').addClass('blinks');
        } else if (type_place == 2) {
            $('#btn-office').addClass('blinks');
            //		$('#btn-office').css('background','#d2d2d2');
        }

        google.maps.event.addListener(map, 'dragend', function() {

            $.post(url, function(data) {
                //					console.log(data.results[0].formatted_address);
                infowindow.setContent('<div>' + data.results[0].formatted_address + '</div><div class="btn btn-sm btn-danger pull-right btn-part" onclick="savePlaceOften(1,' + Newlat + ',' + Newlng + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">Save</div>');
                infowindow.open(map, markerPlaceOfften);

            });
        });


    } else {
        //			 alert(1);
        $('#chk_val_search').val(0);
        resetMap();
    }



}

function createAllMarker() {
    pin = {
        url: 'https://dotdotdottrip.com/pic/marker_often.png',
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(45, 45)
    };
    markerPlaceOfften = new google.maps.Marker({
        icon: pin,
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
            strokeColor: '#ffffff'
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

function savePlaceOften(type, lat, lng, place_id, type_place) {
    if (type == 1) {
        var url_placeoften = 'my_place_often/save';
        $.post(url_placeoften, { lat: lat, lng: lng, place_id: place_id, type_place: type_place }, function(results) {
            var obj = JSON.parse(results);
            console.log(obj.status);
            if (obj.status == 'true') {
                swal("Successfuly!", "", "success");
                resetMap();
                placeRecord();
            }
        });
    }
}

function selectMyPlace(type_place, url) {
    var chk_val_boxsearch = $('#chk_val_boxsearch').val();
    var nameInputFocus = $('#chk_val_boxsearch').attr('class');
    if (chk_val_boxsearch == 0) {
        alert('Pleace select search');
    } else {

        console.log(url);

        $.post(url, function(data) {
            console.log(data);
            var add = data.results[0].formatted_address;
            var location = data.results[0].geometry.location;
            map.panTo(location);
            marker2.setPosition(location);
            $('#btn_CurrentLocation').show('500');
        });

        $('#' + nameInputFocus).val(add);


    }
}

function resetMap() {
    //	console.log(placeStart);
    $('.material-button').css('background', '#2C98DE');
    //$('.material-button').show(500);
    $('.material-button').removeClass('blinks');
    showHeader();
    $('#search-raeltime').show(700);
    infowindow = new google.maps.InfoWindow();
    map.panTo(pos);
    marker2.setVisible(true);
    markerPlaceOfften.setMap(null);
    marker2.setAnimation(null);
    //markerPlaceOfften.setVisible(true);
    google.maps.event.clearListeners(map, 'center_changed');
    google.maps.event.clearListeners(map, 'dragend');
    //	map.fitBounds(placeStart.geometry.location);
    placeRecord();
}