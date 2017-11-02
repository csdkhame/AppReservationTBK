var click_save_place_txt;
var lang_to_map;
var lng_distance, lng_usetime;
var choose;
var success;
var error;
var map; //main map
var marker2; // current position
var markerPlaceOfften; // for pan to place offten
var markerCircle; // point cerrtent locatont
var startMarker, pin; // img marker
var pos; // current location (lat,lng)
var geocoder;
var endMarker; //result end place
var placeStart = [];
var placeEnd = [];
var infowindow = null;
var infowindowDetailTravel = null;
var lat_f, lng_f, lat_t, lng_t;
var check = 0;
var directionsDisplay, directionsService;
var start;
var end;
var geocoder;
var intervalTime; // animate
var options;
var markerTest;
var checkshow = false;
var datacaedervice,dataRel;

var curentFromTo = '';
if ($.cookie("lng") == 'cn') {
    please_login_txt = "请登录";
    click_save_place_txt = "没有记录 (按保存)";
    lang_to_map = 'zh-CN';
    lng_distance = '距离';
    lng_usetime = '使用时间';
    choose = '选择';
    $('.lng-home-locat').text('房子');
    $('.lng-office-locat').text('在工作中');
    $('.lng-setpin-locat').text('在地图上设置位置');
    $('.lng-nearby-locat').text('附近的地方');
    $('.lng-current-pos').text('当前位置');
    success = '成功';
    error = '错误';
    document.getElementById("current").value = "你的立場...";
} else if ($.cookie("lng") == 'th') {
    please_login_txt = "กรุณาเข้าสู่ระบบ";
    click_save_place_txt = "ไม่มีบันทึก (กดเพื่อบันทึก)";
    lang_to_map = 'th';
    lng_distance = 'ระยะทาง';
    lng_usetime = 'ใช้เวลา';
    choose = 'เลือก';
    $('.lng-home-locat').text('บ้าน');
    $('.lng-office-locat').text('ที่ทำงาน');
    $('.lng-setpin-locat').text('ตั้งตำแหน่งบนแผนที่');
    $('.lng-nearby-locat').text('สถานที่ใกล้เคียง');
    success = 'สำเร็จ';
    error = 'ผิดพลาด';
    document.getElementById("current").value = "ตำแหน่งของคุณ...";
    $('.lng-current-pos').text('ตำแหน่งปัจจุบัน');
} else if ($.cookie("lng") == 'en') {
    please_login_txt = "Please login";
    click_save_place_txt = "No record (Click to save)";
    lang_to_map = 'en';
    lng_distance = 'Distance';
    lng_usetime = 'Use time';
    choose = 'Choose';
    success = 'success';
    error = 'error';
    document.getElementById("current").value = "Your position...";
    $('.lng-current-pos').text('Current Position');
    /*$('.lng-home-locat').text('Home');
    $('.lng-office-locat').text('');
    $('.lng-setpin-locat').text('');
    $('.lng-nearby-locat').text('');*/
} else if ($.cookie("lng") == undefined) {
    please_login_txt = "Please login";
    click_save_place_txt = "No record (Click to save)";
    lang_to_map = 'en';
    lng_distance = 'Distance';
    lng_usetime = 'Use time';
    choose = 'Choose';
    success = 'success';
    error = 'error';
    $('.lng-current-pos').text('Current Position');
    document.getElementById("current").value = "Your position...";
}

if ($.cookie("login") == undefined) {
    $('#home-place-id').append('<span class="lng-save_home_place" style="font-weight: 600;">' + please_login_txt + '</span>');
    $('#office-place-id').append('<span class="lng-save_Office_place" style="font-weight: 600;">' + please_login_txt + '</span>');
} else {
    $('#home-place-id').append('<span class="lng-save_home_place" style="font-weight: 600;">' + click_save_place_txt + '</span>');
    $('#office-place-id').append('<span class="lng-save_Office_place" style="font-weight: 600;">' + click_save_place_txt + '</span>');
}


$('#open_map').on('click', initialize);
$('#open_map').click(function() {
    console.log('Now Open Map!');
});

function showHeader() {
    $('#btn-real-res').show(700);
    $('#sectionsNav').show();
    $('.box-menu-select').show();

    // $('#to-remove-class').addClass('col-md-12 ');
    $('#search-raeltime').css('margin-top', '70px');


}

function hideHeader() {
    $('#sectionsNav').hide();
    $('#btn-real-res').hide(700);
    $('.box-menu-select').hide();

    $('#to-remove-class').removeClass();
    // $('#search-raeltime').css('margin-top', '0px');
}

function outSearchRealtime() {

    $('#out-search').hide();
    // $('#to-remove-class').addClass('col-md-12');


    $("#search-raeltime").animate({
        marginTop: "70px"
            //	    ,	   	position : "absolute"
    }, 200);

    /*$('#search-raeltime').css('margin-top','70px');*/
    $('#search-raeltime').css('position', 'absolute');
    $('#search-raeltime').removeClass('box-shadow-customize');
    // $('#boxRealtime').css('margin-left', '0px');
    // $('#boxRealtime').css('padding', '0 8px');

    $("#boxForAutoCom").hide();



    setTimeout(function() {

        $('.box-menu-select').show();
        $('#sectionsNav').show();
    }, 200);
    $('#outNearby').click();
}

$('.box_option').click(function(){
    if(checkshow == false){
        $("#boxForAutoCom").show(500)
        checkshow = true;
    }
    else{
        $("#boxForAutoCom").hide(500)      
        checkshow = false;
    }

    
})
$('#search-raeltime input').focus(function() {
    //alert('aaaaaa')
    $('#boxForAutoCom').hide(500)
    checkshow = false;
    if (this.id == "current") {
        $('#for_check_currentInput').val(1);
        $('#for_check_endInput').val(0);
        //        $(this).val('');
    }

    if (this.id == "pac-input") {
        $('#for_check_endInput').val(1);
        $('#for_check_currentInput').val(0);
        $(this).val('');
    }

    $('.a-link-item').remove();
    $('.not-found').remove();
    $('.typerel').remove();

    $('#to-remove-class').removeClass();
    $('#sectionsNav').hide();

    // $("#search-raeltime").animate({
    //     marginTop: "0px"
    // }, 200);

    $('#search-raeltime').css('position', 'fixed');
    $('#search-raeltime').addClass('box-shadow-customize');
    // $('#boxRealtime').css('margin-left', '25px');
    // $('#boxRealtime').css('padding', '0 0px');
    $('#out-search').show(650);
    // $("#boxForAutoCom").show();///******************************************************************************* */
    $(".pac-container").each(function(index) {

        $(this).attr("id", "listPleacItem_" + index);
    });

    $('#listPleacItem_0').appendTo('#appendBox');
    $('#listPleacItem_1').appendTo('#appendBox');


    // $('.box-menu-select').hide();

    if (infowindow) {
        console.log(infowindow);
        infowindow.close();
        infowindow.setMap(null);
        infowindow = null;
    }
    if (infowindowDetailTravel) {
        console.log(infowindowDetailTravel);
        infowindowDetailTravel.close();
        infowindowDetailTravel.setMap(null);
        infowindowDetailTravel = null;
    }
    if (directionsDisplay) {
        directionsDisplay.setMap(null);
        directionsDisplay = null;
        directionsService = null;
    }

    markerPlaceOfften.setMap(null);
    endMarker.setVisible(false);
    startMarker.setVisible(false);
    google.maps.event.clearListeners(map, 'center_changed');
    google.maps.event.clearListeners(map, 'dragend');
    google.maps.event.clearListeners(map, 'bounds_changed');
    $('#clear-all').hide(500);
    $('#show-hide-pro2').hide(500);
    map.panTo(pos);

    start = pos;
    end = null;
    //    $('#btn_CurrentLocation').show(700);
});

$("#nearbyId").click(function() {
    $('#otherBox').hide();
    $('#showNearbyPlace').show(250);
});

$("#outNearby").click(function() {
    $('#showNearbyPlace').hide();
    $('#otherBox').show(250);

});

$("#currentPosId").click(function() {
    start = pos;
    checkshow = false;
    console.log(lat_f)
    console.log(lng_f)
    
    $('#boxForAutoCom').hide(500)
    
    if ($('#boxRealtimeto').css('display') == 'none') {
        
        curentFromTo = 'From';
    }
    else{
        curentFromTo = 'To';

    }
    console.log(curentFromTo)
    console.log(start.lat)
    console.log(start.lng)
    selectMyPlace('current', addr, start.lat, start.lng)
        //            $(this).val(addr);

    console.log(start);
});


function initialize() {

    var mapMinZoom = 13;
    var mapMaxZoom = 18;

    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 7.9038781, lng: 98.3033694 },
        zoom: 12,
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
                "featureType": "landscape",
                "elementType": "labels.text",
                "stylers": [{
                        "color": "#595959"
                    },
                    {
                        "weight": 3.5
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#ffffff"
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

    // var div = document.getElementById("marker"); // document.createElement('DIV');
    // div.innerHTML = '<div class="my-other-marker">I am flat marker!</div>';
    /* markerTest = new RichMarker({
         map: map,
         position: map.getCenter(),
         flat: true,
         anchor: RichMarkerPosition.MIDDLE,
         content: div
     });*/
    //       markerTest.setVisible(map.getCenter());    
    a(map);

}

function a(map) {
    createAllMarker();
    //    addYourLocationButton(map, marker2);
    google.maps.event.addListener(map, 'dragend', function() {
        $('#btn_CurrentLocation').show('500');
    });
    if (navigator.geolocation) {
        options = { enableHighAccuracy: true, timeout: 6000 };
        navigator.geolocation.getCurrentPosition(function(position, status) {

            pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            start = pos;
           
            console.log(start);
           
            markerCircle.setPosition(pos);
            //            markerTest.setPosition(pos);
            var curPosition = new google.maps.LatLng(pos);
            console.log(map.getCenter());

            /*  markerTest.setPosition(curPosition);*/

            map.setCenter(pos);
            $('#marker').show();
            geocoder = new google.maps.Geocoder;

            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            lat_f =position.coords.latitude;
            lng_f =position.coords.longitude;
            
            console.log(lat_f);
            console.log(lng_f);
            var latlng = { lat: parseFloat(latitude), lng: parseFloat(longitude) };

            geocoderRun(latlng);

            var id = 0,
                target;
            /*  intervalTime = setInterval(function() {
                  navigator.geolocation.getCurrentPosition(success, error, options);
                  id = id + 1;
                  //console.log("watchPosition : "+id); 
              }, 5000);*/

        });
    }

    function success(position) {
        // alert("aaaa")
        console.log(start);
        var current = {
            lat: parseFloat(position.coords.latitude),
            lng: parseFloat(position.coords.longitude)
        };

        var radlat1 = Math.PI * current.lat / 180
        var radlat2 = Math.PI * pos.lat / 180
        var theta = current.lng - pos.lng;
        var radtheta = Math.PI * theta / 180
        var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
        dist = Math.acos(dist)
        dist = dist * 180 / Math.PI
        dist = dist * 60 * 1.609344;
        var m = dist * 1000;
        console.log(m);
        //		if( JSON.stringify(current) != JSON.stringify(start) ){
        if (m > 50) {
            console.log(current);
            console.log(start);
            pos = current;
            start = pos;
            var curPosition = new google.maps.LatLng(pos);
            //            markerTest.setPosition(curPosition);
            markerCircle.setPosition(curPosition);
            // 			map.panTo(pos);
            geocoderRun(pos);
        }
    };

    function error(err) {
        console.warn('ERROR(' + err.code + '): ' + err.message);
    };

    var inputStart = document.getElementById("current");
    inputStart.addEventListener('click', function() {
        document.getElementById("current").value = "";
        //start = null;
        console.log(start);
    });


    /************************************************************************ */
    /***********************AUTO COMMPLETE SEARCH LOCATION******************* */
    /************************************************************************ */
    var autocompleteStart = new google.maps.places.Autocomplete(inputStart);
    autocompleteStart.bindTo('bounds', map);


    /*******AUTO FROM******** */
    autocompleteStart.addListener('place_changed', function(ev) {
        //alert('aaa')
        $('#boxRealtimeto').show(500)
        $('#boxRealtime').hide(500)
        placeStart = autocompleteStart.getPlace();
        map.panTo(placeStart.geometry.location);
        //        start = placeStart.geometry.location;
        var current = {
            lat: parseFloat(placeStart.geometry.location.lat()),
            lng: parseFloat(placeStart.geometry.location.lng())
        };
        start = current;
        startMarker.setVisible(true);
        startMarker.setPosition(start);
        lat_f = placeStart.geometry.location.lat();
        lng_f = placeStart.geometry.location.lng();
       
        console.log('*********************AUTO FROM************************')
        console.log(start);
        console.log(lat_f);
        console.log(lng_f);
        console.log(lat_t);
        console.log(lng_t);

        console.log('********************************************************')
        $('#clear-all').show(500);
    });

    var inputEnd = document.getElementById('pac-input');

    var autocomplete = new google.maps.places.Autocomplete(inputEnd);
    autocomplete.bindTo('bounds', map);


    /*******AUTO TO***** */
    autocomplete.addListener('place_changed', function() {
       
        //        marker.setVisible(false);
        var place = autocomplete.getPlace();
        placeEnd = place;
        if (place.geometry.viewport) {
            map.fitBounds(placeEnd.geometry.viewport);
            map.setZoom(16);
        } else {
            map.setCenter(placeEnd.geometry.location);
            map.setZoom(16); // Why 17? Because it looks good.
        }


        end = placeEnd.geometry.location;
        endMarker.setVisible(true);
        endMarker.setPosition(end);

        //      var origin = new google.maps.LatLng(start);
        console.log(start);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        console.log(request);
        directionsService = new google.maps.DirectionsService;
        directionsDisplay = new google.maps.DirectionsRenderer();
        directionsDisplay.setMap(map);
        /*lat_f = start.lat;
        lng_f = start.lng;*/
        
        directionsService.route(request, function(response, status) {
            console.log(response);
            console.log(status);
            if (status == 'ZERO_RESULTS') {
                alert('no Directions Display');
            } else {

                var distance = response.routes[0].legs[0].distance.text;
                var duration = response.routes[0].legs[0].duration.text;

                console.log(response.routes[0].legs[0].end_location.lat())
                console.log(response.routes[0].legs[0].end_location.lng())
                lat_t = response.routes[0].legs[0].end_location.lat();
                lng_t = response.routes[0].legs[0].end_location.lng();
                console.log('*********************AUTO FROM************************')

                console.log(start)
                console.log(end)
                console.log(lat_f);
                console.log(lng_f);
                console.log(lat_t);
                console.log(lng_t);
        
                console.log('********************************************************')
                var radlat1 = Math.PI * lat_f / 180
                var radlat2 = Math.PI * lat_t / 180
                var theta = lng_f - lng_t;
                var radtheta = Math.PI * theta / 180
                var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                dist = Math.acos(dist)
                dist = dist * 180 / Math.PI
                dist = dist * 60 * 1.609344;

                /* $('.a-link-item').remove();
                 $('.not-found').remove();*/
                //				 console.log(lat_f + "," + lng_f + " : " + lat_t + "," + lng_t);
                getProduct(lat_f, lng_f, dist, lat_t, lng_t);
                infowindowDetailTravel = new google.maps.InfoWindow({ maxWidth: 200 });
                infowindowDetailTravel.setContent('<div><p> ' + lng_distance + ' ' + distance + '</p><p>' + lng_usetime + ' ' + duration + '</p></div>');
                infowindowDetailTravel.open(map, endMarker);
                directionsDisplay.setDirections(response);
                directionsDisplay.setOptions({
                    suppressMarkers: true,
                    preserveViewport: true
                });
                //				console.log(directionsDisplay);
                if (response.routes[0].legs[0].distance.value >= 25000) {
                    map.setZoom(9);
                } else {
                    map.setZoom(12);
                }
                $('#clear-all').show(500);
                outSearchRealtime();

            }

        });

    });


}

function geocoderRun(latlng) {

    geocoder.geocode({ 'location': latlng }, function(results, status) {

        if (status === google.maps.GeocoderStatus.OK) {

            if (results[1]) {
                placeStart = results;
                console.log(placeStart)
                addr = placeStart[1].formatted_address;
                // document.getElementById("current").value = addr;
            }
        } else {

            if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                setTimeout(function() { console.log(status) }, 9000);
            }

        }
    });
    nearbyPlace(map, latlng, "");
    filterPlace(map, latlng);
}

$('#btn_CurrentLocation').click(function() {
    var i = 0;
    var animationInterval = setInterval(function() {
        if (i == 1) {
            i = 0;
            $('#btn_CurrentLocation').css("color", 'rgb(35,35,35)');
            console.log(1);
        } else {
            i = 1;
            $('#btn_CurrentLocation').css('color', 'rgb(170,170,170)');
            console.log(2);
        }

    }, 500);


    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
//            markerTest.setPosition(latlng);
            map.panTo(latlng);
            markerCircle.setPosition(latlng);
            setTimeout(function() {

                document.getElementById("current").value = placeStart[1].formatted_address;

                smoothZoom(map, 15, map.getZoom());

                //	          map.setZoom(16);
                $('#btn_CurrentLocation').hide('500');
                $('#btn_CurrentLocation').css('color', 'rgb(35,35,35)');
            }, 1000)

            clearInterval(animationInterval);
            $('#btn_CurrentLocation').css('color', 'rgb(0,132,212)');
        });
    } else {
        clearInterval(animationInterval);
        $('#btn_CurrentLocation').css('color', 'rgb(35,35,35)');
    }

});

/*$('#pac-input').click(function() {
    $('#pac-input').val('');
    $('.a-link-item').remove();
    $('.not-found').remove();
    $('.typerel').remove();
//    resetMap();
})*/
$('#clear-all').click(function() {
    $('#pac-input').val('');
    $('#current').val('');
    console.log(placeStart);
    $('.a-link-item').remove();
    $('.not-found').remove();
    $('.typerel').remove();
    $('#boxRealtimeto').hide(500)
    $('#boxRealtime').show(500)
    curentFromTo ='';
    // lat_t = '';
    // lng_t = '';
    // lat_f = '';
    // lng_f = '';

    //    $('#current').val(placeStart[1].formatted_address);
    resetMap();

});

/*$("#current").focusout(function() {
    $('#current').val(placeStart[1].formatted_address);
    start = pos;
    console.log(start);
});*/

function getProduct(lat_f, lng_f, dist, lat_t, lng_t) {
    var notfound;
    console.log('in case')
    compae1private = [];
    compae1join = [];

    if ($.cookie("lng") == 'cn') {
        notfound = '产品没有找到';

    } else if ($.cookie("lng") == 'en') {

        notfound = 'Product not Found';
    } else if ($.cookie("lng") == 'th') {
        notfound = 'ไม่พบผลิตภัณฑ์';


    } else if ($.cookie("lng") == undefined) {
        notfound = 'Product not Found';

    }

    var id_placefrom, id_placeto;
    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/getPlaceId.php',
        data: { 'lat_c': lat_f, 'lng_c': lng_f },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            id_placefrom = data.id;
        }
    });

    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/getPlaceId.php',
        data: { 'lat_c': lat_t, 'lng_c': lng_t },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            id_placeto = data.id;
        }
    });


    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/servicereltime.php',
        data: { 'lat_f': lat_f, 'lng_f': lng_f, 'distance': dist, 'lat_t': lat_t, 'lng_t': lng_t },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data);
            // console.log(data.status);
            // console.log(data.length)
            
            // console.log(data.size)
            parame = { "place_default": data[0].data1.from, "place_default_to":data[0].data1.to};
            console.log(parame)
            $.ajax({
                type: 'POST',
                url: 'https://www.welovetaxi.com/app/booking/service/service.php',
                data: parame,
                //contentType: "application/json",
                dataType: 'json',
                success: function(data2) {
                    console.log(data2)
                    dataRel = data2
                    console.log(data2.length)
                    console.log(data2.status)
                    console.log(data2.size)
            $('.a-link-item').remove();
            $('.not-found').remove();
            $('.typerel').remove();
            $('.typeservice').remove();
            //            console.log(data.detail);
            if (data2.status == '200. bad request') {
                $('#ul-header2').css('display', 'block');
                $('#container-product').css('display', 'block');
                $('#loading').css('display', 'block');
                setTimeout(function() {
                    $('#loading').css('display', 'none');
                    $('#show-hide-pro').css('display', 'block');
                    $("#pro-search").slideDown('4000');
                    $('#product_a').append('<div class="not-found">' + notfound + '</div>');
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
                data1 = data2.data1;
                cartype = data2.car_topic;
                console.log(data1)
                console.log(cartype)
                var datasort = new Array()
                $.each(cartype, function(i, val) {
                    datasort.push(cartype[i])
                });
                
                datasort.sort(function(a, b){return a.person-b.person});
                console.log(datasort)
                $('#box-pax-use').show(500)  

                  $.each(datasort, function(i, val) {
                    var index2 = parseInt(i) + 1;
                    var type,typeshow,pax;
                    type = datasort[i].pax_id;
                    if ($.cookie("lng") == 'cn') {
                        $('#select_pax_use').html( '所有類型')
                       // type = datasort[i].pax_id;
                        typeshow = datasort[i].car_topic_cn;
                        pax = datasort[i].pax_cn;

                } else if ($.cookie("lng") == 'en') {
                    $('#select_pax_use').html( 'All Type')
                   
                    typeshow = datasort[i].car_topic_en;
                    pax = datasort[i].pax_en;
                } else if ($.cookie("lng") == 'th') {
                   // type = vadatasortl[i].pax_id;
                   $('#select_pax_use').html( 'ทุกประเภท')
                    typeshow = datasort[i].car_topic_th;
                    pax = datasort[i].pax_th;


                } else if ($.cookie("lng") == undefined) {
                   // type = datasort[i].car_topic_en;
                   $('#select_pax_use').html( 'All Type')
                    typeshow = datasort[i].car_topic_en;
                    pax = datasort[i].pax_en;

                }
                console.log(type)
                console.log(datasort)
                 
                // label="' + type + '"
                $('#paxuse').append('<li class="typeservice" id="typeservice'+datasort[i].pax_id+'"  onclick="sendpaxrel(\'' + datasort[i].pax_id + '\') "><span>' + typeshow + '</span>&nbsp;<span class="pax-person" >' + pax + '</span></li>');
                // $('#paxuse').append('<li class="typerel" value="' + datasort[i].pax_id + '" ><span>' + typeshow + '</span>&nbsp;<span class="pax-person" >' + pax + '</span></li>');
                
                    //$('#typecarservice').append('<li class="typeservice'+datasort[i].transfer_id+'"  onclick="sendpax(\'' + cartype[i].pax_id + '\') "><span>' + typeshow + '</span>&nbsp;<span class="pax-person" >' + pax + '</span></li>');
                    //dataProvince.push(data[i])
                    //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');

                    // if(index2 == datalength-1){
                    //     alert('aaaaa')
                        
                    // }
                });
               
                // if ($.cookie("lng") == 'cn') {
                //     cartype = data.cartype[1];

                // } else if ($.cookie("lng") == 'en') {

                //     cartype = data.cartype[0];
                // } else if ($.cookie("lng") == 'th') {
                //     cartype = data.cartype[2];


                // } else if ($.cookie("lng") == undefined) {
                //     cartype = data.cartype[0];

                // }

                // $.each(cartype, function(i, val) {
                //     var index2 = parseInt(i) + 1;
                //     $('#cartype').append('<option class="typerel" value="' + cartype[i] + '" label="' + cartype[i] + '" none=""></option>');
                //     //dataProvince.push(data[i])
                //     //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


                // });
                $.each(data1, function(i, val) {
                    if (data1[i].type == 'Private') {
                        compae1private.push(data1[i])
                    }

                    if (data1[i].type == 'Join') {
                        compae1join.push(data1[i])
                    }

                })

                console.log(compae2private.length)

                if (compae1join.length == 0) {
                    $('#join-btn').hide();
                    $('#private-btn').css('width', '100%');

                }
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
                        lngbook = '預訂';
                        lngcapacityinfo = '容量信息';
                        lngfacilities = '设施';
                    } else if ($.cookie("lng") == 'en') {
                        car_topic = compae1private[i].topic_en;
                        cartype = compae1private[i].car_topic_en;
                        pax = compae1private[i].pax_en;
                        lngbook = 'Book';
                        lngcapacityinfo = 'Capacity info';
                        lngfacilities = 'Facilities';
                        // $('.lng-book').html('Facilities')
                        // $('.lng-capacity-info').html('Capacity info')
                        // $('.lng-facilities').html('Facilities')

                    } else if ($.cookie("lng") == 'th') {
                        car_topic = compae1private[i].topic_th;
                        cartype = compae1private[i].car_topic_th;
                        pax = compae1private[i].pax_th;
                        lngbook = 'จอง';
                        lngcapacityinfo = 'ข้อมูลความจุ';
                        lngfacilities = 'สิ่งอำนวยความสะดวก';
                        // $('.lng-book').html('จอง')
                        // $('.lng-capacity-info').html('ข้อมูลความจุ')
                        // $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')

                    } else if ($.cookie("lng") == undefined) {
                        car_topic = compae1private[i].topic_en;
                        cartype = compae1private[i].car_topic_en;
                        pax = compae1private[i].pax_en;
                        lngbook = 'Book';
                        lngcapacityinfo = 'Capacity info';
                        lngfacilities = 'Facilities';
                        // $('.lng-book').html('Book')
                        // $('.lng-capacity-info').html('Capacity info')
                        // $('.lng-facilities').html('Facilities')

                    }
                    //                    console.log(compae1join.length)

                    $('#product_a').append('<div class="a-link-item col-lg-12" >' +
                        '<div class="item-thumbnail2" onclick="getimage(\'' + compae1private[i].car_model + '\') " >' +
                        '<img src="' + urlicon + compae1private[i].transfer_icon + '.jpg">' +
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
                        '<span class="sala">' + compae1private[i].cost_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

                        '</div>' +
                        '<div class="views-item" >' +
                        '<a  href="book?data=' + compae1private[i].transfer_id + '&from=' + data[0].data1.from + '&to=' + data[0].data1.to + '" > <span >' + lngbook + '</span></a>' +

                        '</div>' +
                        '</div>' +
                        '<div id="i-list"   onclick="getcondition(\'' + compae1private[i].car_model + '\')">' +
                        '<p id="capacity"><span>' + lngcapacityinfo + '</span></p>' +
                        '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
                        '</div>' +
                        '</div>'

                    );


                });

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
                            '<div class="item-thumbnail2" onclick="getimage(\'' + compae1join[i].car_model + '\') " ' +
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
                            '<a  href="book?data=' + compae1join[i].transfer_id + '&from=' + data[0].data1.from + '&to=' + data[0].data1.to + '" > <span >' + lngbook + '</span></a>' +

                            '</div>' +
                            '</div>' +
                            '<div id="i-list"   onclick="getcondition(\'' + compae1join[i].car_model + '\')">' +
                            '<p id="capacity"><span >' + lngcapacityinfo + '</span></p>' +
                            '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
                            '</div>' +
                            '</div>'

                        );


                    });
                } else {
                    $('#product_c').append('<div class="not-found">' + notfound + '</div>');
                }



            }



        }
        // },
        // error: function(err) {
        //     console.log(err)
        // }
    
    });
}
});
    


}
function sendpaxrel(x) {
    $('#box-pax-use').hide();
    $('#loading').css('display', 'block');
    $('.a-link-item').remove();
    $('#box-prosearch').css('display', 'none');
    $('#product_a').css('display', 'none');
    // $('#loading').css('display', 'block');

    setTimeout(function() {
        console.log("aaaaa")
        $('#loading').css('display', 'none');
        $('#product_a').css('display', 'block');
        $('#box-prosearch').css('display', 'block');
    }, 500);
    comparedata = [];
    compae1private = [];
    compae1join = [];
    data2 = [];
    ctype = x;
    getdataservice = dataRel.car_topic
    console.log(ctype)
    console.log(getdataservice)
    console.log(dataRel)

    $.each(getdataservice, function(i, val) {
       
       
       if ($.cookie("lng") == 'cn') {
           if (getdataservice[i].pax_id == ctype) {
               
               $('#select_pax_use').html( getdataservice[i].car_topic_cn+' '+'<span style="    color: #f44336;">'+getdataservice[i].pax_cn+'</span>')
           } else if (ctype == '0') {
               // comparedata.push(datacaedervice.data1[i])
               $('#select_pax_use').html( '所有類型')
               
               
           }
       } else if ($.cookie("lng") == 'en') {
           if (getdataservice[i].pax_id == ctype) {
               // comparedata.push(datacaedervice.data1[i])
               $('#select_pax_use').html( getdataservice[i].car_topic_en+' '+'<span style="    color: #f44336;">'+getdataservice[i].pax_en+'</span>')
           } else if (ctype == '0') {
               // comparedata.push(datacaedervice.data1[i])
               $('#select_pax_use').html( 'All Type')
               
           }

       } else if ($.cookie("lng") == 'th') {
           if (getdataservice[i].pax_id == ctype) {
               // comparedata.push(datacaedervice.data1[i])
               $('#select_pax_use').html(getdataservice[i].car_topic_th+' '+'<span style="    color: #f44336;">'+getdataservice[i].pax_th+'</span>')
           } else if (ctype == '0') {
               // comparedata.push(datacaedervice.data1[i])
               $('#select_pax_use').html( 'ทุกประเภท')
               
           }

       } else if ($.cookie("lng") == undefined) {
           if (getdataservice[i].pax_id == ctype) {
               // comparedata.push(datacaedervice.data1[i])
               $('#select_pax_use').html( getdataservice[i].car_topic_en+' '+'<span style="    color: #f44336;">'+getdataservice[i].pax_en+'</span>')
           } else if (ctype == '0') {
               // comparedata.push(datacaedervice.data1[i])
               $('#select_pax_use').html( 'All Type')
               
           }

       }


   })
    $.each(dataRel.data1, function(i, val) {
        if ($.cookie("lng") == 'cn') {
            if (dataRel.data1[i].pax_id == ctype) {
                comparedata.push(dataRel.data1[i])
            } else if (ctype == 0) {
                 comparedata.push(dataRel.data1[i])
            }
        } else if ($.cookie("lng") == 'en') {
            if (dataRel.data1[i].pax_id == x) {
                comparedata.push(dataRel.data1[i])
            } else if (ctype == 0) {
                 comparedata.push(dataRel[0].data1[i])
            }

        } else if ($.cookie("lng") == 'th') {
            if (dataRel.data1[i].pax_id == ctype) {
                 comparedata.push(dataRel.data1[i])
            } else if (ctype == 0) {
                 comparedata.push(dataRel.data1[i])
            }

        } else if ($.cookie("lng") == undefined) {
            if (dataRel.data1[i].pax_id == ctype) {
                 comparedata.push(dataRel.data1[i])
            } else if (ctype == 0) {
                 comparedata.push(dataRel.data1[i])
            }

        }


    })
    console.log(comparedata)
    $.each(comparedata, function(i, val) {
        if (comparedata[i].type == 'Private') {
            compae1private.push(comparedata[i])
        }

        if (comparedata[i].type == 'Join') {
            compae1join.push(comparedata[i])
        }


    })
    console.log(compae1join);

    var car_topic, cartype, pax;
    var urlicon = base_url + 'files/images/carmodelicon/';
    //if (data[0].data1.length != 0) {
    $.each(compae1private, function(i, val) {
        var indexs = parseInt(i) + 1;
        if ($.cookie("lng") == 'cn') {
            car_topic = compae1private[i].topic_cn;
            cartype = compae1private[i].car_topic_cn;
            pax = compae1private[i].pax_cn;
            lngbook = '預訂';
            lngcapacityinfo = '容量信息';
            lngfacilities = '设施';
        } else if ($.cookie("lng") == 'en') {
            car_topic = compae1private[i].topic_en;
            cartype = compae1private[i].car_topic_en;
            pax = compae1private[i].pax_en;
            lngbook = 'Book';
            lngcapacityinfo = 'Capacity info';
            lngfacilities = 'Facilities';
            // $('.lng-book').html('Facilities')
            // $('.lng-capacity-info').html('Capacity info')
            // $('.lng-facilities').html('Facilities')

        } else if ($.cookie("lng") == 'th') {
            car_topic = compae1private[i].topic_th;
            cartype = compae1private[i].car_topic_th;
            pax = compae1private[i].pax_th;
            lngbook = 'จอง';
            lngcapacityinfo = 'ข้อมูลความจุ';
            lngfacilities = 'สิ่งอำนวยความสะดวก';
            // $('.lng-book').html('จอง')
            // $('.lng-capacity-info').html('ข้อมูลความจุ')
            // $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')

        } else if ($.cookie("lng") == undefined) {
            car_topic = compae1private[i].topic_en;
            cartype = compae1private[i].car_topic_en;
            pax = compae1private[i].pax_en;
            lngbook = 'Book';
            lngcapacityinfo = 'Capacity info';
            lngfacilities = 'Facilities';
            // $('.lng-book').html('Book')
            // $('.lng-capacity-info').html('Capacity info')
            // $('.lng-facilities').html('Facilities')

        }


        $('#product_a').append('<div class="a-link-item col-lg-12" >' +
            '<div class="item-thumbnail2" onclick="getimage(\'' + compae1private[i].car_model + '\') ">' +
            '<img src="' + urlicon + compae1private[i].transfer_icon + '.jpg">' +
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
            '<span class="sala">' + compae1private[i].cost_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

            '</div>' +
            '<div class="views-item" >' +
            '<a  href="book?data=' + compae1private[i].transfer_id + '&from=' + id_placefrom + '&to=' + id_placeto + '" > <span >' + lngbook + '</span></a>' +

            '</div>' +
            '</div>' +
            '<div id="i-list"   onclick="getcondition(\'' + compae1private[i].car_model + '\')">' +
            '<p id="capacity"><span>' + lngcapacityinfo + '</span></p>' +
            '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
            '</div>' +
            '</div>'

        );


    }); //end private



    $.each(compae1join, function(i, val) {
        var indexs = parseInt(i) + 1;
        if ($.cookie("lng") == 'cn') {
            car_topic = compae1join[i].topic_cn;
            cartype = compae1join[i].car_topic_cn;
            pax = compae1join[i].pax_cn;
            lngbook = '預訂';
            lngcapacityinfo = '容量信息';
            lngfacilities = '设施';
        } else if ($.cookie("lng") == 'en') {
            car_topic = compae1join[i].topic_en;
            cartype = compae1join[i].car_topic_en;
            pax = compae1join[i].pax_en;
            lngbook = 'Book';
            lngcapacityinfo = 'Capacity info';
            lngfacilities = 'Facilities';
            // $('.lng-book').html('Facilities')
            // $('.lng-capacity-info').html('Capacity info')
            // $('.lng-facilities').html('Facilities')

        } else if ($.cookie("lng") == 'th') {
            car_topic = compae1join[i].topic_th;
            cartype = compae1join[i].car_topic_th;
            pax = compae1join[i].pax_th;
            lngbook = 'จอง';
            lngcapacityinfo = 'ข้อมูลความจุ';
            lngfacilities = 'สิ่งอำนวยความสะดวก';
            // $('.lng-book').html('จอง')
            // $('.lng-capacity-info').html('ข้อมูลความจุ')
            // $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')

        } else if ($.cookie("lng") == undefined) {
            car_topic = compae1join[i].topic_en;
            cartype = compae1join[i].car_topic_en;
            pax = compae1join[i].pax_en;
            lngbook = 'Book';
            lngcapacityinfo = 'Capacity info';
            lngfacilities = 'Facilities';
            // $('.lng-book').html('Book')
            // $('.lng-capacity-info').html('Capacity info')
            // $('.lng-facilities').html('Facilities')

        }
        $('#product_c').append('<div class="a-link-item col-lg-12" >' +
            '<div class="item-thumbnail2" onclick="getimage(\'' + compae1join[i].car_model + '\')">' +
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
            '<a  href="book?data=' + compae1join[i].transfer_id + '&from=' + id_placefrom + '&to=' + id_placeto + '" > <span >' + lngbook + '</span></a>' +

            '</div>' +
            '</div>' +
            '<div id="i-list"   onclick="getcondition(\'' + compae1join[i].car_model + '\')">' +
            '<p id="capacity"><span >' + lngcapacityinfo + '</span></p>' +
            '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
            '</div>' +
            '</div>'

        );


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
    if (value == 0) {
        service.nearbySearch({
            location: location,
            radius: 10000,
            //            type: ['spa','airport','hospital','restaurant','department_store','lodging','point_of_interest']
            type: ['spa', 'airport', 'restaurant', 'department_store', 'lodging', 'point_of_interest']
        }, callback);

    } else {
        service.nearbySearch({
            location: location,
            radius: 10000,
            type: ['' + value + '']
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
    //    console.log(place);
    var icon = '<img src="' + place.icon + '" width="23"/>';
    var lo = place.geometry.location.toJSON();
    var lat = lo.lat;
    var lng = lo.lng;
    var address = place.name + " " + place.vicinity;
    // var btn = '<button class="btn btn-xs">' + place.photos[0].html_attributions + '</button>';
    $('#list_place_push').append('<div class="placeNeary-item pac-item" id="' + place.id + '" onclick="eventPlace(' + lat + ',' + lng + ',\'' + address + '\');"><table><tr><td><span class="">' + icon + '</span></td><td><span class="pac-item-query" style="padding: 7px;"><span class="pac-matched ">' + place.name + '</span></span><span class="lng-save_home_place" style="font-weight: 600;">' + place.vicinity + '</span></td></tr></table></div>');

}

function filterPlace(map, location) {
    var selectTypePlace = document.querySelector('#types_ofPlace');
    google.maps.event.addDomListener(selectTypePlace, 'change', function() {
        var value = $('#types_ofPlace').val();
        //  		alert(value);
        $('.placeNeary-item').remove();

        if (value == 0) {
            value = 0;
        } else if (value == 1) {
            value = "hospital";
        } else if (value == 2) {
            value = "airport";
        } else if (value == 3) {
            value = "spa";
        } else if (value == 4) {
            value = "restaurant";
        } else if (value == 5) {
            value = "department_store";
        } else if (value == 6) {
            value = "lodging";
        } else if (value == 7) {
            value = "point_of_interest";
        }
        nearbyPlace(map, location, value)
    });
}

function eventPlace(lat, lng, placeName) {


    selectMyPlace(3, placeName, lat, lng);

}

function placeRecord() {
    var id = $.cookie("login");

    $.post("my_place_often/place_often", { "id": id }, function(results) {

        if (results === 'false') {

        } else {
            if (results) {
                var obj = JSON.parse(results);
                //                console.log(obj);

                $.each(obj, function(key, data) {

                    var url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + data.i_lat + ',' + data.i_lng + '&sensor=true&language=' + lang_to_map;
                    $.post(url, function(data_place) {
                        console.log(data_place);

                        if (data.s_type == '1') {

                            $('#home-place-id').attr('onclick', 'selectMyPlace(1,"' + data_place.results[0].formatted_address + '",' + data.i_lat + ',' + data.i_lng + ')');

                            $('.lng-save_home_place').html('<span class="lng-save_home_place" style="font-weight: 600;">' + data_place.results[0].formatted_address + '</span>');
                            $('#edit-home_select').show();
                        }
                        if (data.s_type == '2') {

                            $('#office-place-id').attr('onclick', 'selectMyPlace(2,"' + data_place.results[0].formatted_address + '",' + data.i_lat + ',' + data.i_lng + ')');
                            //		                       
                            $('.lng-save_Office_place').html('<span class="lng-save_Office_place" style="font-weight: 600;">' + data_place.results[0].formatted_address + '</span>');
                            $('#edit-office_select').show();
                        }
                    });
                });

            }
        }

    });
}

function selectSavePlaceOfften(type_place, type_call) {

    if ($.cookie("login") == undefined) {

        return;
    } else {

        if (type_call == "save") {
            type_call = 1;
            var btn_color = "btn-danger";
            if ($.cookie("lng") == 'cn') {
                txt_save = "记录";
            } else if ($.cookie("lng") == 'th') {
                txt_save = "บันทึก";
            } else if ($.cookie("lng") == 'en') {
                txt_save = "Record";
            } else if ($.cookie("lng") == undefined) {
                txt_save = "Record";
            }
        } else if (type_call == "edit") {
            type_call = 2;
            var btn_color = "btn-warning";
            if ($.cookie("lng") == 'cn') {
                txt_save = "更新";
            } else if ($.cookie("lng") == 'th') {
                txt_save = "อัพเดท";
            } else if ($.cookie("lng") == 'en') {
                txt_save = "Update";
            } else if ($.cookie("lng") == undefined) {
                txt_save = "Update";
            }
        }
        hideHeader();
        $('#boxForAutoCom').hide();
        $('#clear-all').show(500);
        $('#map').show();
        infowindow = new google.maps.InfoWindow({ maxWidth: 200 });
        $('#search-raeltime').hide(700);
        $('#btn_CurrentLocation').show(500);
        markerPlaceOfften.setMap(map);
        //marker2.setVisible(false);

        markerPlaceOfften.setVisible(true);
        /*       markerPlaceOfften.setPosition(pos);
               console.log(pos);*/
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
            url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + Newlat + ',' + Newlng + '&sensor=true&language=' + lang_to_map;

            $.post(url, function(data) {
                console.log(data);
                infowindow.close();
                infowindow.setContent('<div>' + data.results[0].formatted_address + '</div><div class="btn btn-sm ' + btn_color + ' pull-right btn-part" onclick="savePlaceOften(' + type_call + ',' + Newlat + ',' + Newlng + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">' + txt_save + '</div>');
                infowindow.open(map, markerPlaceOfften);


            });

        });
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
        /*  icon: pin,*/
        map: null
    });
    markerPlaceOfften.setVisible(false);

    markerCircle = new google.maps.Marker({
        position: map.getCenter(),
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 6.5,
            fillOpacity: 1,
            strokeWeight: 1,
            fillColor: '#1b8cfe',
            strokeColor: '#ffffff'
        },
        draggable: true,
        map: map
    });

    var circle = new google.maps.Circle({
        strokeColor: '#2673f2',
        strokeOpacity: 0.2,
        strokeWeight: 1,
        fillColor: '#4285F4',
        fillOpacity: 0.25,
        map: map,
        radius: Math.sqrt(1) * 30
    });
    circle.bindTo('center', markerCircle, 'position');
    /*markerCircle .setVisible(false);
     circle.setVisible(false);*/
    endMarker = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        anchorPoint: new google.maps.Point(0, -29),
        label: "B"
    });
    startMarker = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        anchorPoint: new google.maps.Point(0, -29),
        label: "A"
    });

}

function savePlaceOften(type_call, lat, lng, place_id, type_place) {
    if (type_call == 1) {
        var url_placeoften = 'https://welovetaxi.com/app/booking/my_place_often/save';
        console.log(url_placeoften);
        $.post(url_placeoften, { lat: lat, lng: lng, place_id: place_id, type_place: type_place }, function(results) {
            var obj = JSON.parse(results);
            console.log(obj.status);
            if (obj.status == true) {

                swal('' + success + '', "", "success");
                resetMap();
                placeRecord();
            } else {
                swal('' + error + '', "", "success");
            }
        });
    } else if (type_call == 2) {
        var url_placeoften = 'https://welovetaxi.com/app/booking/my_place_often/update';
        console.log(url_placeoften);
        $.post(url_placeoften, { lat: lat, lng: lng, place_id: place_id, type_place: type_place }, function(results) {
            var obj = JSON.parse(results);
            console.log(results);
            if (obj.status == true) {
                swal('' + success + '', "", "success");
                resetMap();
                placeRecord();
            } else {
                swal('' + error + '', "", "success");
            }
        });
    }
}

function selectMyPlace(type_place, txtAdd, latti, lngti) {
    //    console.log($(this).is(':focus'));
    //    alert(txtAdd);
    if($('#boxRealtimeto').css('display') == 'none'){
        curentFromTo = 'From';
    }
    else{
        curentFromTo = 'To';
    }
    directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer();
    if (type_place == 3) {
        if (infowindow) {
            console.log(infowindow);
            infowindow.close();
            infowindow.setMap(null);
            infowindow = null;
        }
        directionsDisplay.setMap(null);
        markerPlaceOfften.setMap(null);
        google.maps.event.clearListeners(map, 'bounds_changed');
        google.maps.event.clearListeners(map, 'center_changed');
        //        google.maps.event.clearListeners(map, 'dragend');
        showHeader();
        $('#search-raeltime').show(700);
        $('#clear-all').hide(500);
        $('#show-hide-pro2').hide(500);
        outSearchRealtime();
    }
    // alert(curentFromTo)
    if (curentFromTo == 'From') {
        
        console.log('in case from')
        $('#current').val(txtAdd);
        start = {
            lat: parseFloat(latti),
            lng: parseFloat(lngti)
        }

        //console.log(start);
        startMarker.setVisible(true);
        startMarker.setPosition(start);
        lat_f = start.lat;
        lng_f = start.lng;

        if (end == undefined) {
            setTimeout(function() { $('#pac-input').focus(); }, 2000);
        }
        $('#boxRealtimeto').show(500);
        $('#boxRealtime').hide()



    }
    else if(curentFromTo == 'To'){
        console.log('in case to')

        $('#pac-input').val(txtAdd);
        end = {
            lat: parseFloat(latti),
            lng: parseFloat(lngti)
        }
       // console.log(end);
        endMarker.setVisible(true);
        endMarker.setPosition(end);
        lat_t = end.lat;
        lng_t = end.lng;
        if (start == undefined) {
            setTimeout(function() { $('#pac-input').focus(); }, 2000);
        }

    }
    // else{
    //     curentsame = {
    //         lat: parseFloat(latti),
    //         lng: parseFloat(lngti)
    //     }
    //     lat_t = curentsame.lat;
    //     lng_t = curentsame.lng;
    //     lat_f = curentsame.lat;
    //     lng_f = curentsame.lng;
    // }
    console.log(start)
    console.log(end)
    console.log(lat_t)
console.log(lng_t)
console.log(lat_f)
console.log(lng_f)
    if (start != undefined && end != undefined)  {

        var destination = new google.maps.LatLng(end);
        var origin = new google.maps.LatLng(start);
        var request = {
            origin: origin,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING
        };
        
        console.log(request);
        console.log('**********************************')
        console.log(lat_f);
        console.log(lng_f);
        console.log(lat_t);
        console.log(lng_t);
        console.log('**********************************')
        
        directionsDisplay.setMap(map);
        directionsService.route(request, function(response, status) {
            if (status == 'ZERO_RESULTS') {
                alert('no Directions Display');
            } else {
                console.log(response.routes[0].legs);
                var distance = response.routes[0].legs[0].distance.text;
                var duration = response.routes[0].legs[0].duration.text;

                console.log(response.routes[0].legs[0].end_location.lat())
                console.log(response.routes[0].legs[0].end_location.lng())
                lat_t = response.routes[0].legs[0].end_location.lat();
                lng_t = response.routes[0].legs[0].end_location.lng();


                var radlat1 = Math.PI * lat_f / 180
                var radlat2 = Math.PI * lat_t / 180
                var theta = lng_f - lng_t;
                var radtheta = Math.PI * theta / 180
                var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                dist = Math.acos(dist)
                dist = dist * 180 / Math.PI
                dist = dist * 60 * 1.609344;



                getProduct(lat_f, lng_f, dist, lat_t, lng_t);
                infowindowDetailTravel = new google.maps.InfoWindow({ maxWidth: 200 });
                infowindowDetailTravel.setContent('<div><p> ' + lng_distance + ' ' + distance + '</p><p>' + lng_usetime + ' ' + duration + '</p></div>');
                infowindowDetailTravel.open(map, endMarker);
                directionsDisplay.setDirections(response);
                directionsDisplay.setOptions({
                    suppressMarkers: true,
                    preserveViewport: true
                });

                if (response.routes[0].legs[0].distance.value >= 25000) {
                    map.setZoom(9);
                } else {
                    map.setZoom(12);
                }
                $('#clear-all').show(500);
                outSearchRealtime();
            }


        });
    }
}

function setPinLocation() {

    hideHeader();
    checkshow = false;
    $('#boxForAutoCom').hide();
    $('#clear-all').show(500);
    $('#map').show();
    infowindow = new google.maps.InfoWindow({ maxWidth: 200 });
    $('#search-raeltime').hide(700);
    $('#btn_CurrentLocation').show(500);
    markerPlaceOfften.setMap(map);
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
        url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + Newlat + ',' + Newlng + '&sensor=true&language=' + lang_to_map;

        $.post(url, function(data) {
            console.log(data);
            //            infowindow.close();
            var addr = data.results[0].formatted_address;
            infowindow.setContent('<div>' + addr + '</div><div class="btn btn-sm pull-right btn-part" style="background-color: rgb(22, 179, 177);" onclick="selectMyPlace(3,\'' + addr + '\',' + Newlat + ',' + Newlng + ');">' + choose + '</div>');
            infowindow.open(map, markerPlaceOfften);
        });
    });
}

function resetMap() {
    if (infowindow) {
        console.log(infowindow);
        infowindow.close();
        infowindow.setMap(null);
        infowindow = null;
    }
    if (infowindowDetailTravel) {
        console.log(infowindowDetailTravel);
        infowindowDetailTravel.close();
        infowindowDetailTravel.setMap(null);
        infowindowDetailTravel = null;
    }
    console.log('Reset Map');
    outSearchRealtime();
    if (directionsDisplay) {
        directionsDisplay.setMap(null);
        directionsDisplay = null;
        directionsService = null;
    }

    markerPlaceOfften.setMap(null);
    //	marker.setMap(null);
    endMarker.setVisible(false);
    startMarker.setVisible(false);
    google.maps.event.clearListeners(map, 'center_changed');
    //    google.maps.event.clearListeners(map, 'dragend');
    google.maps.event.clearListeners(map, 'bounds_changed');
    showHeader();
    if ($('#search-show').css('display') == 'block') {

    } else {
        $('#search-raeltime').show(700);
    }

    $('#clear-all').hide(500);
    $('#show-hide-pro2').hide(500);
    map.panTo(pos);

    start = pos;
    end = null;
    /* $('#btn_CurrentLocation').show(700);*/
    google.maps.event.addListener(map, 'dragend', function() {
        $('#btn_CurrentLocation').show('500');
    });
}