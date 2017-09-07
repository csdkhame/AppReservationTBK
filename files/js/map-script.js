var click_save_place_txt;
var lang_to_map;
var lng_distance, lng_usetime;
var choose;
var success;
var error;
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
    success = '成功';
    error = '错误';
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
} else if ($.cookie("lng") == 'en') {
    please_login_txt = "Please login";
    click_save_place_txt = "No record (Click to save)";
    lang_to_map = 'en';
    lng_distance = 'Distance';
    lng_usetime = 'Use time';
    choose = 'Choose';
    success = 'success';
    error = 'error';
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

    $('#to-remove-class').addClass('col-md-12 ');
    $('#search-raeltime').css('margin-top', '70px');


}

function hideHeader() {
    $('#sectionsNav').hide();
    $('#btn-real-res').hide(700);
    $('.box-menu-select').hide();

    $('#to-remove-class').removeClass();
    $('#search-raeltime').css('margin-top', '0px');
}

function outSearchRealtime() {
    $("#marginBox").animate({
        //	  marginTop : "0px"
    }, 600);
    $("#boxForAutoCom").animate({
        //	    top: "0px"
        bottom: "-800px"
    }, 650);
    $('#out-search').hide();
    $('#to-remove-class').addClass('col-md-12');


    $("#search-raeltime").animate({
        marginTop: "70px"
            //	    ,	   	position : "absolute"
    }, 600);

    /*$('#search-raeltime').css('margin-top','70px');*/
    $('#search-raeltime').css('position', 'absolute');
    $('#search-raeltime').removeClass('box-shadow-customize');
    $('#boxRealtime').css('margin-left', '0px');
    $('#boxRealtime').css('padding', '0 8px');




    setTimeout(function() {
        //	$('#map').css('display','block');
        $('#boxForAutoCom').css('display', 'none');
        $('.box-menu-select').show();
        $('#sectionsNav').show();
    }, 660);

}


$('#search-raeltime input').focus(function() {
    $('#boxForAutoCom').css('display', 'unset');
    if (this.id == "current") {
        $('#for_check_currentInput').val(1);
        $('#for_check_endInput').val(0);
    }

    if (this.id == "pac-input") {
        $('#for_check_endInput').val(1);
        $('#for_check_currentInput').val(0);
    }

    $('#to-remove-class').removeClass();
    $('#sectionsNav').hide();

    $("#search-raeltime").animate({
        marginTop: "0px"
            //	    ,	   	position : "fixed"
    }, 600);

    /*$('#search-raeltime').css('margin-top','0px');*/
    $('#search-raeltime').css('position', 'fixed');
    $('#search-raeltime').addClass('box-shadow-customize');
    $('#boxRealtime').css('margin-left', '25px');
    $('#boxRealtime').css('padding', '0 0px');
    $('#out-search').show(650);


    $("#boxForAutoCom").animate({
        //    top: "91px"
        bottom: "-90px"

    }, 650);

    $(".pac-container").each(function(index) {

        $(this).attr("id", "listPleacItem_" + index);
    });

    $('#listPleacItem_0').appendTo('#appendBox');
    $('#listPleacItem_1').appendTo('#appendBox');


    $('.box-menu-select').hide();

});

$("#nearbyId").click(function() {
    $('#otherBox').hide();
    $('#showNearbyPlace').show(500);
});

$("#outNearby").click(function() {
    $('#showNearbyPlace').hide(500);
    $('#otherBox').show(500);

});

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
var infowindow = null;
var infowindowDetailTravel = null;
var lat_f, lng_f, lat_t, lng_t;
var check = 0;
var directionsDisplay, directionsService;
var start;
var end;

function initialize() {

    var mapMinZoom = 13;
    var mapMaxZoom = 18;

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



    initAutocomplete(map);

}

function initAutocomplete(map) {
    document.getElementById("current").value = "Loading...";
    createAllMarker();

    //    addYourLocationButton(map, marker2);
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

        map.panTo(placeStart.geometry.location);
        start = placeStart.geometry.location;
        lat_f = placeStart.geometry.location.lat();
        lng_f = placeStart.geometry.location.lng();


    });

    var options = {
        enableHighAccuracy: true,
        timeout: 500,
        maximumAge: 0
    };

    if (navigator.geolocation) {
        var id, target;
        id = navigator.geolocation.watchPosition(success, error, options);
        //        console.log("id : "+id); 
    }


    function success(position) {
        ///var crd = pos.coords;
        var current = {
            lat: parseFloat(position.coords.latitude),
            lng: parseFloat(position.coords.longitude)
        };

        console.log('success');
        pos = current;
        start = pos;
        markerCircle.setPosition(current);
        check = check + 1;
        if (check == 1) {

            map.panTo(current);
            lat_f = position.coords.latitude;
            lng_f = position.coords.longitude;
        }

        geocoder = new google.maps.Geocoder;
        geocoder.geocode({ 'location': pos }, function(results, status) {

            if (status === google.maps.GeocoderStatus.OK) {

                if (results[1]) {
                    placeStart = results;

                    addr = placeStart[1].formatted_address;
                    if (check == 1) {
                        document.getElementById("current").value = addr;

                    }
                }
            } else {
                //                	document.getElementById("current").value = "waiting...";
                if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                    setTimeout(function() { console.log(status) }, 9000);
                }

            }
        });

        nearbyPlace(map, pos, "");
        filterPlace(map, pos);
    };

    function error(err) {
        console.warn('ERROR(' + err.code + '): ' + err.message);
    };



    $('#current').focusout(function() {
        $(this).val(addr);
    });


    directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer();
    var inputEnd = document.getElementById('pac-input');

    var autocomplete = new google.maps.places.Autocomplete(inputEnd);
    autocomplete.bindTo('bounds', map);
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
        marker.setVisible(true);
        marker.setPosition(end);

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

            $('.a-link-item').remove();
            $('.not-found').remove();
            getProduct(lat_f, lng_f, dist, lat_t, lng_t);
            infowindowDetailTravel = new google.maps.InfoWindow({ maxWidth: 200 });
            infowindowDetailTravel.setContent('<div><p> ' + lng_distance + ' ' + distance + '</p><p>' + lng_usetime + ' ' + duration + '</p></div>');
            infowindowDetailTravel.open(map, marker);
            directionsDisplay.setDirections(response);
            directionsDisplay.setOptions({
                suppressMarkers: true,
                preserveViewport: true
            });

            map.setZoom(13);
            $('#clear-all').show(500);
            outSearchRealtime();



        });

    });


}

$('#btn_CurrentLocation').click(function() {
    var i = 0;
    var animationInterval = setInterval(function() {
        if (i == 1) {
            i = 0;
            $('#btn_CurrentLocation').css("color", 'rgb(85, 85, 85)');
            console.log(1);
        } else {
            i = 1;
            $('#btn_CurrentLocation').css('color', 'rgb(170,170,170)');
            console.log(2);
        }

    }, 500);

    //		document.getElementById("current").value = "Loading...";
    console.log(navigator.geolocation);
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.panTo(latlng);
            setTimeout(function() {

                document.getElementById("current").value = placeStart[1].formatted_address;
                //		
                // marker2.setPosition(latlng);
                // marker2.setAnimation(google.maps.Animation.BOUNCE);
                smoothZoom(map, 17, map.getZoom());

                //	          map.setZoom(16);
                $('#btn_CurrentLocation').hide('500');
                $('#btn_CurrentLocation').css('color', 'rgb(85, 85, 85)');
            }, 1000)

            clearInterval(animationInterval);
            $('#btn_CurrentLocation').css('color', 'rgb(0,132,212)');
        });
    } else {
        clearInterval(animationInterval);
        $('#btn_CurrentLocation').css('color', 'rgb(85, 85, 85)');
    }

});

$('#clear-all').click(function() {
    $('#pac-input').val('');
    $('#current').val(placeStart[1].formatted_address);
    resetMap();

});

function getProduct(lat_f, lng_f, dist, lat_t, lng_t) {

    //console.log(lat_f+","+lng_f+" : "+lat_t+","+lng_t);
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
                    console.log(compae1join.length)

                    $('#product_a').append('<div class="a-link-item col-lg-12" >' +
                        '<div class="item-thumbnail2" >' +
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
                        '<a  href="book?data=' + compae1private[i].transfer_id + '&from=' + id_placefrom + '&to=' + id_placeto + '" > <span >' + lngbook + '</span></a>' +

                        '</div>' +
                        '</div>' +
                        '<div id="i-list"   onclick="getcondition(\'' + compae1private[i].car_model + '\')">' +
                        '<p id="capacity"><span >' + lngcapacityinfo + '</span></p>' +
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
    var icon = '<img src="' + place.icon + '" width="23"/>';
    var lo = place.geometry.location.toJSON();
    var lat = lo.lat;
    var lng = lo.lng;
    var address = place.name + " " + place.vicinity;

    $('#list_place_push').append('<div class="placeNeary-item pac-item" id="' + place.id + '" onclick="eventPlace(' + lat + ',' + lng + ',\'' + address + '\');"><table><tr><td><span class="">' + icon + '</span></td><td><span class="pac-item-query" style="padding: 7px;"><span class="pac-matched ">' + place.name + '</span></td></span></table></div>');

}

function filterPlace(map, location) {
    var selectTypePlace = document.querySelector('#types_ofPlace');
    google.maps.event.addDomListener(selectTypePlace, 'change', function() {
        var value = $('#types_ofPlace').val();
        //  		alert(value);
        $('.placeNeary-item').remove();
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
                console.log(obj);

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
    current_marker = {
        url: 'https://dotdotdottrip.com/pic/icon_marker.png',
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(35, 35)
    };

    markerCircle = new google.maps.Marker({
        position: map.getCenter(),
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 8,
            fillOpacity: 2,
            strokeWeight: 2,
            fillColor: '#4ba5fe',
            strokeColor: '#ffffff'
        },
        draggable: true,
        map: map
    });

    marker = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        anchorPoint: new google.maps.Point(0, -29),
        label: "B"
    });

}

function savePlaceOften(type_call, lat, lng, place_id, type_place) {
    if (type_call == 1) {
        var url_placeoften = base_url + 'my_place_often/save';
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
        var url_placeoften = base_url + 'my_place_often/update';
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

function selectMyPlace(type_place, txtAdd, lat, lng) {
    //    console.log($(this).is(':focus'));
    //    alert(txtAdd);
    if (type_place == 3) {
        if (infowindow) {
            console.log(infowindow);
            infowindow.close();
            infowindow.setMap(null);
            infowindow = null;
        }
        directionsDisplay.setMap(null);
        markerPlaceOfften.setMap(null);
        google.maps.event.clearListeners(map, 'center_changed');
        google.maps.event.clearListeners(map, 'dragend');
        showHeader();
        $('#search-raeltime').show(700);
        $('#clear-all').hide(500);
        $('#show-hide-pro2').hide(500);
        outSearchRealtime();
    }
    if ($('#for_check_currentInput').val() == 1) {
        $('#current').val(txtAdd);
        start = {
            lat: parseFloat(lat),
            lng: parseFloat(lng)
        }
        console.log(start);
    }
    if ($('#for_check_endInput').val() == 1) {
        $('#pac-input').val(txtAdd);
        end = {
            lat: parseFloat(lat),
            lng: parseFloat(lng)
        }
        console.log(end);
    }


    marker.setVisible(true);
    marker.setPosition(end);

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

        $('.a-link-item').remove();
        $('.not-found').remove();
        getProduct(lat_f, lng_f, dist, lat_t, lng_t);
        infowindowDetailTravel = new google.maps.InfoWindow({ maxWidth: 200 });
        infowindowDetailTravel.setContent('<div><p> ' + lng_distance + ' ' + distance + '</p><p>' + lng_usetime + ' ' + duration + '</p></div>');
        infowindowDetailTravel.open(map, marker);
        directionsDisplay.setDirections(response);
        directionsDisplay.setOptions({
            suppressMarkers: true,
            preserveViewport: true
        });

        map.setZoom(13);
        $('#clear-all').show(500);
        outSearchRealtime();



    });

}

function setPinLocation() {

    hideHeader();
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
            infowindow.close();
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
    directionsDisplay.setMap(null);
    markerPlaceOfften.setMap(null);
    //	marker.setMap(null);
    marker.setVisible(false);
    google.maps.event.clearListeners(map, 'center_changed');
    google.maps.event.clearListeners(map, 'dragend');
    showHeader();
    $('#search-raeltime').show(700);
    $('#clear-all').hide(500);
    $('#show-hide-pro2').hide(500);
    map.panTo(pos);

}