/*$('#boxRealtime input').focus(function() {
    $('#chk_val_boxsearch').val(1);
    $('#chk_val_boxsearch').addClass(this.id);
});
$('#boxRealtime input').focusout(function() {
    $('#chk_val_boxsearch').removeClass(this.id);
    $('#chk_val_boxsearch').val(0);
});*/
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

/*$('#selectPlaceNearby').click(function() {
    $('#btn_hide-show').click();
});*/


/*$('#pac-input').click(function() {
    $('#selectPlace').show(1000);
});*/

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

/*$('#search-raeltime input').click(function(){
	$('#search-raeltime div[class="col-md-12 "]').removeClass();
	$('#sectionsNav').hide();
//	$('#search-raeltime').css('margin-top','0px');
	$('.pac-container').show();
	$('.pac-container').css('top','87px !important');
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
var lat_f, lng_f, lat_t, lng_t;
var check = 0;

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
        streetViewControl: false,
        fullscreenControl: false,
        styles: [{
                "featureType": "administrative",
                "stylers": [{
                    "weight": 2
                }]
            },
            {
                "featureType": "landscape",
                "stylers": [{
                    "color": "#efefef"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#d3d3d3"
                }]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#c0c0c0"
                }]
            }
        ]

    });
    var list = document.getElementById('list_place');
    map.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(list);

    /*var btnOp = document.getElementById('selectPlace');
    map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(btnOp);*/

    // StreetView //
    /*map.get('streetView').setOptions({
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
    });*/
    // End StreetView //

    initAutocomplete(map, start, end);

}

function initAutocomplete(map, start, end) {
    document.getElementById("current").value = "Loading...";
    createAllMarker();

    addYourLocationButton(map, marker2);
    google.maps.event.addListener(map, 'dragend', function() {
        $('#btn_CurrentLocation').show('500');
        // marker2.setAnimation(null);

    });

    var inputStart = document.getElementById("current");
    inputStart.addEventListener('click', function() {

        document.getElementById("current").value = "";

    });

    var autocompleteStart = new google.maps.places.Autocomplete(inputStart);
    autocompleteStart.bindTo('bounds', map);
    autocompleteStart.addListener('place_changed', function(ev) {
        //         	 
        placeStart = autocompleteStart.getPlace();
        console.log(placeStart);
        map.panTo(placeStart.geometry.location);
        //marker2.setPosition(placeStart.geometry.location);
        start = placeStart.geometry.location;
        lat_f = placeStart.geometry.location.lat();
        lng_f = placeStart.geometry.location.lng();
       /* console.log(lat_f + '==' + lng_f);
        console.log(placeStart);

        console.log(placeStart.geometry.location.lat())
        console.log(placeStart.geometry.location.lng())*/

    });

var	options = {
  enableHighAccuracy: true,
  timeout: 300,
  maximumAge: 0
};

	if (navigator.geolocation) {
		var id, target;   	
        id = navigator.geolocation.watchPosition(success, error, options);
        console.log("id : "+id); 
      }
      
function success(pos) {
  ///var crd = pos.coords;
  var current  = {
              lat: parseFloat(pos.coords.latitude),
              lng: parseFloat(pos.coords.longitude)
            };
console.log('success');
pos = current;
markerCircle.setPosition(current);
check = check+1;
       if(check==1){
	   	map.panTo(current);
	   }else{
	   	console.log(check+" ++++++++++++++");
	   }

	 console.log(pos);
	
	 geocoder = new google.maps.Geocoder;
	 geocoder.geocode({ 'location': pos }, function(results, status) {

                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        placeStart = results;
                        console.log(placeStart);
                        addr = placeStart[1].formatted_address;
                        if(check==1){
                        document.getElementById("current").value = addr;
//                       	$('#current').css('color', '#00bcd4');
						}
                    }
                }
            });
	
	nearbyPlace(map, pos, "");
    filterPlace(map, pos);
};

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
};



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
            //console.log(placeStart.geometry.location.lng())
            //console.log(response.routes[0].legs[0].end_location.lat())
            console.log(response.routes[0].legs[0].end_location.lat())
            console.log(response.routes[0].legs[0].end_location.lng())
            lat_t = response.routes[0].legs[0].end_location.lat();
            lng_t = response.routes[0].legs[0].end_location.lng();
            // console.log(response.request.lng())
            console.log(distance);
            var radlat1 = Math.PI * lat_f / 180
            var radlat2 = Math.PI * lat_t / 180
            var theta = lng_f - lng_t;
            var radtheta = Math.PI * theta / 180
            var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
            dist = Math.acos(dist)
            dist = dist * 180 / Math.PI
            dist = dist * 60 * 1.609344;
            console.log(dist)
                //if (unit=="K") { dist = dist * 1.609344 }
                //if (unit=="N") { dist = dist * 0.8684 }
                //return dist
            $('.a-link-item').remove();
            $('.not-found').remove();
            $.ajax({
                type: 'POST',
                url: '../service/servicereltime.php',
                data: { 'lat_f': lat_f, 'lng_f': lng_f, 'distance': dist, 'lat_t': lat_t, 'lng_t': lng_t },
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    console.log(data.status)
                    if (data.status == '200. bad request') {
                        $('#ul-header2').css('display', 'block');
                        $('#container-product').css('display', 'block');
                        $('#loading').css('display', 'block');
                        setTimeout(function() {
                            $('#loading').css('display', 'none');
                            $('#show-hide-pro').css('display', 'block');
                            $("#pro-search").slideDown('4000');
                            $('#product_a').append('<div class="not-found">Product not Found</div>');
                            $('#search-from').val('');
                            $('#search-to').val('');
                            $("#pro-search").animate({ 'margin-top': '0vh' });
                        }, 2000);
                    } else {
                        $('#ul-header2').css('display', 'block');
                        $('#container-product').css('display', 'block');
                        $('#loading').css('display', 'block');
                        setTimeout(function() {
                            $('#loading').css('display', 'none');
                            $('#show-hide-pro').css('display', 'block');

                            $("#pro-search").slideDown('4000');
                            $("#pro-search").animate({ 'margin-top': '0vh' });
                        }, 2000);
                        var cartype;
                        data1 = data.data1;
                        if ($.cookie("lng") == 'cn') {
                            cartype = data.cartype[1];

                        } else if ($.cookie("lng") == 'en') {

                            cartype = data.cartype[0];
                        } else if ($.cookie("lng") == 'th') {
                            cartype = data.cartype[2];


                        } else if ($.cookie("lng") == undefined) {
                            cartype = data.cartype[0];

                        }

                        console.log(data1)
                        console.log(cartype)

                        $.each(cartype, function(i, val) {
                            var index2 = parseInt(i) + 1;
                            $('#cartype').append('<option value="' + cartype[i] + '" label="' + cartype[i] + '" none=""></option>');
                            //dataProvince.push(data[i])
                            //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


                        });
                        $.each(data1, function(i, val) {
                                if (data1[i].type == 'Private') {
                                    compae1private.push(data1[i])
                                }

                                if (data1[i].type == 'Join') {
                                    compae1join.push(data1[i])
                                }

                            })
                            // $.each(data2, function(i, val) {
                            //     if (data2[i].type == 'Private') {
                            //         compae2private.push(data2[i])
                            //     }

                        //     if (data2[i].type == 'Join') {
                        //         compae2join.push(data2[i])
                        //     }

                        // })
                        console.log(compae2private.length)
                            //if (true) {}
                            // console.log(data2[0])
                            // console.log(data[1])
                            // console.log(data[2])
                            // console.log(data[3])
                            // console.log(data[4])
                            // $.each(data, function(i, item) {
                            //       console.log(data[2])
                            // });
                        console.log(data.length)
                        dataproduct = data;
                        var urlicon = 'https://dotdotdottrip.com/files/images/carmodelicon/';

                        //if (data[0].data1.length != 0) {
                        var car_topic, cartype, pax;
                        $.each(compae1private, function(i, val) {
                            var indexs = parseInt(i) + 1;
                            if ($.cookie("lng") == 'cn') {
                                car_topic = compae1private[i].topic_cn;
                                cartype = compae1private[i].car_topic_cn;
                                pax = compae1private[i].pax_cn;
                                $('.lng-book').html('預訂')
                                $('.lng-capacity-info').html('容量信息')
                                $('.lng-facilities').html('设施')
                            } else if ($.cookie("lng") == 'en') {
                                car_topic = compae1private[i].topic_en;
                                cartype = compae1private[i].car_topic_en;
                                pax = compae1private[i].pax_en;
                                $('.lng-book').html('Book')
                                $('.lng-capacity-info').html('Capacity info')
                                $('.lng-facilities').html('Facilities')

                            } else if ($.cookie("lng") == 'th') {
                                car_topic = compae1private[i].topic_th;
                                cartype = compae1private[i].car_topic_th;
                                pax = compae1private[i].pax_th;
                                $('.lng-book').html('จอง')
                                $('.lng-capacity-info').html('ข้อมูลความจุ')
                                $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')

                            } else if ($.cookie("lng") == undefined) {
                                car_topic = compae1private[i].topic_en;
                                cartype = compae1private[i].car_topic_en;
                                pax = compae1private[i].pax_en;
                                $('.lng-book').html('Book')
                                $('.lng-capacity-info').html('Capacity info')
                                $('.lng-facilities').html('Facilities')

                            }
                            console.log(compae1join.length)

                            $('#product_a').append('<div class="a-link-item col-lg-12" >' +
                                '<div class="item-thumbnail2" onclick="gotransfer(\'' + val + '\')">' +
                                '<img src="' + urlicon + compae1private[i].transfer_icon + '.jpg">' +
                                '</div>' +
                                '<h2 class="searchresult_name" title="product name">' +
                                '<span >' + car_topic + '</span>' +
                                '<span class="hotel_num">' + indexs + '</span>' +
                                '</h2>' +
                                '<div class="box-province">' +
                                '<p class="type-t">' +
                                '<span class="car-type" >' + cartype + pax + '</span>' +
                                '</p>' +

                                '</div>' +
                                '<div id="box-cost-view">' +
                                '<div class="product_r">' +
                                '<span class="base_price"></span>' +
                                '<span class="sala">' + compae1private[i].cost_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

                                '</div>' +
                                '<div class="views-item">' +
                                '<a  href="book?data=' + compae1private[i].transfer_id + '&from=' + id_placefrom + '&to=' + id_placeto + '" > <span class="lng-book"></span></a>' +

                                '</div>' +
                                '</div>' +
                                '<div id="i-list"   onclick="getcondition(\'' + compae1private[i].car_model + '\')">' +
                                '<p id="capacity"><span class="lng-capacity-info"></span></p>' +
                                '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
                                '</div>' +
                                '</div>'

                            );





                        }); //end private

                        var car_topic, cartype, pax;
                        if (compae1join.length != 0) {
                            $.each(compae1join, function(i, val) {
                                var indexs = parseInt(i) + 1;
                                if ($.cookie("lng") == 'cn') {
                                    car_topic = compae1join[i].topic_cn;
                                    cartype = compae1join[i].car_topic_cn;
                                    pax = compae1join[i].pax_cn;
                                    $('.lng-book').html('預訂')
                                    $('.lng-capacity-info').html('容量信息')
                                    $('.lng-facilities').html('设施')
                                } else if ($.cookie("lng") == 'en') {
                                    car_topic = compae1join[i].topic_en;
                                    cartype = compae1join[i].car_topic_en;
                                    pax = compae1join[i].pax_en;
                                    $('.lng-book').html('Book')
                                    $('.lng-capacity-info').html('Capacity info')
                                    $('.lng-facilities').html('Facilities')

                                } else if ($.cookie("lng") == 'th') {
                                    car_topic = compae1join[i].topic_th;
                                    cartype = compae1join[i].car_topic_th;
                                    pax = compae1join[i].pax_th;
                                    $('.lng-book').html('จอง')
                                    $('.lng-capacity-info').html('ข้อมูลความจุ')
                                    $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')

                                } else if ($.cookie("lng") == undefined) {
                                    car_topic = compae1join[i].topic_en;
                                    cartype = compae1join[i].car_topic_en;
                                    pax = compae1join[i].pax_en;
                                    $('.lng-book').html('Book')
                                    $('.lng-capacity-info').html('Capacity info')
                                    $('.lng-facilities').html('Facilities')
                                }
                                $('#product_c').append('<div class="a-link-item col-lg-12" >' +
                                    '<div class="item-thumbnail2">' +
                                    '<img src="' + urlicon + compae1join[i].transfer_icon + '.jpg">' +
                                    '</div>' +
                                    '<table width="100%">' +
                                    '<tr>' +
                                    '<td style="width: 30px;">' +
                                    '<span class="hotel_num">' + indexs + '</span>' +
                                    '</td>' +

                                    '<td>' +
                                    '<h2 class="searchresult_name"title="product name"><span>' + car_topic + '</span></h2>' +
                                    '</td>' +
                                    '</tr>' +
                                    '</table>' +
                                    '<div class="box-province">' +
                                    '<p class="type-t">' +
                                    '<span class="car-type" >' + cartype + pax + '</span>' +
                                    '</p>' +


                                    '</div>' +
                                    '<div id="box-cost-view">' +
                                    '<div class="product_r">' +
                                    '<span class="base_price"></span>' +
                                    '<span class="sala">' + compae1join[i].cost_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

                                    '</div>' +
                                    '<div class="views-item" >' +
                                    '<a  href="book?data=' + compae1join[i].transfer_id + '&from=' + id_placefrom + '&to=' + id_placeto + '" > <span class="lng-book"></span></a>' +

                                    '</div>' +
                                    '</div>' +
                                    '<div id="i-list"   onclick="getcondition(\'' + compae1join[i].car_model + '\')">' +
                                    '<p id="capacity"><span class="lng-capacity-info"></span></p>' +
                                    '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
                                    '</div>' +
                                    '</div>'

                                );


                            });
                        } else {
                            $('#product_c').append('<div class="not-found">Product not Found</div>');
                        }



                    }




                },
                error: function(err) {
                    console.log(err)
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
    firstChild.style.width = '34px';
    firstChild.style.height = '34px';
    firstChild.style.borderRadius = '2px';
    firstChild.style.boxShadow = '0 1px 4px rgba(0,0,0,0.3)';
    firstChild.style.cursor = 'pointer';
    firstChild.style.marginRight = '10px';
    firstChild.style.padding = '0px';
    firstChild.title = 'Your Location';
    controlDiv.appendChild(firstChild);

    var secondChild = document.createElement('div');
    secondChild.style.margin = '3.5px';
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
                    // marker2.setPosition(latlng);
                    // marker2.setAnimation(google.maps.Animation.BOUNCE);
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
    //marker2.setPosition(latlng);
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
        //marker2.setVisible(false);
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


    /*marker2 = new google.maps.Marker({
        //           icon : current_marker,
        draggable: true,
        animation: google.maps.Animation.DROP,
        map: map
    });*/

    markerCircle = new google.maps.Marker({
        position: map.getCenter(),
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 8,
            fillOpacity: 2,
            strokeWeight: 2,
            fillColor: '#007aff',
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
            // marker2.setPosition(location);
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
    // marker2.setVisible(true);
    markerPlaceOfften.setMap(null);
    // marker2.setAnimation(null);
    //markerPlaceOfften.setVisible(true);
    google.maps.event.clearListeners(map, 'center_changed');
    google.maps.event.clearListeners(map, 'dragend');
    //	map.fitBounds(placeStart.geometry.location);
    placeRecord();
}