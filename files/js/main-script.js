var rel = false;
var dataplacerel, pro_id, pro_id_to, datacaedervice;
var base_url = 'https://dotdotdottrip.com/';
//var base_url = 'https://www.welovetaxi.com/app/transfer/';
//var base_url = 'http://localhost/AppReservationTBK/';

$(document).ready(function() {
    console.log("readysss!");
    console.log($.cookie("login"))
    if ($.cookie("login")) {
        console.log($.cookie("login"))
            //        alert(base_url+'getuser_control/mainpage');
        $.ajax({
            type: 'POST',
            url: '../getuser_control/mainpage',
            data: { 'id': $.cookie("login") },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                console.log(data[0].s_image)
                $('.box-login').show();
                $('.box-login-non').hide();
                $('.box-desboard').show();


                if (data[0].s_image == '') {
                    $('#photo_profile').html('<img class="" src="' + base_url + 'pic/default-avatar.png">');
                    $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');


                } else {
                    $('#photo_profile').html('<img   src="' + base_url + 'pic/' + data[0].s_image + '">');
                    $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/' + data[0].s_image + '">');

                }
                $('#usernamess').html(data[0].s_username);
                $('#getname').html(data[0].s_name);

                //$('#textlogout').html("Logout")
                $('#btnlogin').css('display', 'none')
                $('#btnuser').css('display', 'block')
                $('.caret').css('display', 'inline-block')
            }
        });

    } else {
        $('#photo_non-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');
        $('.box-login').hide();
        $('.box-desboard').hide();

        $('.box-login-non').show();
        //$('#usernamess').html("Login")
        // $('#textlogout').html("Login/Register")
        $('#btnlogin').css('display', 'block')
        $('#btnuser').css('display', 'none')
        $('.caret').css('display', 'none')


        // $('.dropdown-menu').css('display','none')



    }

    // $.ajax({
    //           type: 'POST',
    //           url: 'https://dotdotdottrip.com/laglng_control/getlaglng',
    //           data: { 'id': 193 },
    //           //contentType: "application/json",
    //           dataType: 'json',
    //           success: function(data) {
    //               console.log(data)







    //           }
    //       });

    $.ajax({
        type: 'POST',
        url: base_url + 'getproduct_c/getproduct',
        //data: { 'id': $.cookie("login") },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            dataplacerel = data;
            console.log(data)

        }
    });
    $.ajax({
        type: 'POST',
        url: '../getprovince_control/process',
        data: { 'lng': $.cookie("lng") },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            if ($.cookie("lng") == 'en') {
                $.each(data, function(i, val) {
                    $('#province').append('<option value="' + data[i].id + '" label="' + data[i].name + '"></option>');
                    $('#provinceto').append('<option value="' + data[i].id + '" label="' + data[i].name + '"></option>');
                    //dataProvince.push(data[i])
                    //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


                });
            } else if ($.cookie("lng") == 'th') {
                $.each(data, function(i, val) {
                    $('#province').append('<option value="' + data[i].id + '" label="' + data[i].name_th + '"></option>');
                    $('#provinceto').append('<option value="' + data[i].id + '" label="' + data[i].name_th + '"></option>');
                    //dataProvince.push(data[i])
                    //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


                });
            } else if ($.cookie("lng") == 'cn') {
                $.each(data, function(i, val) {
                    $('#province').append('<option value="' + data[i].id + '" label="' + data[i].name_cn + '"></option>');
                    $('#provinceto').append('<option value="' + data[i].id + '" label="' + data[i].name_cn + '"></option>');
                    //dataProvince.push(data[i])
                    //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


                });
            } else {
                $.each(data, function(i, val) {
                    $('#province').append('<option value="' + data[i].id + '" label="' + data[i].name + '"></option>');
                    $('#provinceto').append('<option value="' + data[i].id + '" label="' + data[i].name + '"></option>');
                    //dataProvince.push(data[i])
                    //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


                });
            }
            //datacountry = data;
            // $('#codecountry').modal('show');
            // $.each(data, function(i, val) {
            //     $('#guestcountry').append('<option value="' + data[i].name_en + '" label="' + data[i].name_en + '" none=""></option>');
            //     //dataProvince.push(data[i])
            //     //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


            // });

        }
    });
    $('#province').on('change', function() {
        pro_id = this.value;
        console.log(pro_id)

    });
    $('#provinceto').on('change', function() {
        pro_id_to = this.value;

        var parampro = {
            "from": pro_id,
            "to": pro_id_to,
        };

        console.log(parampro)
        $('#loading').show()
        $.ajax({
            type: 'POST',
            url: base_url + 'service/carservice.php',
            data: parampro,
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('.a-link-item').remove();


                $('#loading').hide();
                datacaedervice = data[0];
                if (data[0].data1.length == 0) {
                    //$('#product_service').removeClass('.not-found');
                    $('#typecarservice').hide()
                    $('.not-found').show()
                } else {
                    $('#typecarservice').show(20)
                        //$('#product_service').removeClass('.not-found');
                    $('.not-found').hide()


                }


                if ($.cookie("lng") == 'cn') {
                    cartype = data[0].cartype[1];

                } else if ($.cookie("lng") == 'en') {

                    cartype = data[0].cartype[0];
                } else if ($.cookie("lng") == 'th') {
                    cartype = data[0].cartype[2];


                } else if ($.cookie("lng") == undefined) {
                    cartype = data[0].cartype[0];

                }
                console.log(data1)
                console.log(cartype)

                $.each(cartype, function(i, val) {
                    var index2 = parseInt(i) + 1;
                    $('#typecarservice').append('<option value="' + cartype[i] + '" label="' + cartype[i] + '" none=""></option>');
                    //dataProvince.push(data[i])
                    //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


                });
                $.each(data[0].data1, function(i, val) {
                    var indexs = parseInt(i) + 1;
                    var urlicon = '../files/images/carmodelicon/';
                    if ($.cookie("lng") == 'cn') {
                        car_topic = data[0].data1[i].topic_cn;
                        cartype = data[0].data1[i].car_topic_cn;
                        pax = data[0].data1[i].pax_cn;
                        lngbook = '預訂';
                        lngcapacityinfo = '容量信息';
                        lngfacilities = '设施';
                    } else if ($.cookie("lng") == 'en') {
                        car_topic = data[0].data1[i].topic_en;
                        cartype = data[0].data1[i].car_topic_en;
                        pax = data[0].data1[i].pax_en;
                        lngbook = 'Book';
                        lngcapacityinfo = 'Capacity info';
                        lngfacilities = 'Facilities';
                        // $('.lng-book').html('Facilities')
                        // $('.lng-capacity-info').html('Capacity info')
                        // $('.lng-facilities').html('Facilities')

                    } else if ($.cookie("lng") == 'th') {
                        car_topic = data[0].data1[i].topic_th;
                        cartype = data[0].data1[i].car_topic_th;
                        pax = data[0].data1[i].pax_th;
                        lngbook = 'จอง';
                        lngcapacityinfo = 'ข้อมูลความจุ';
                        lngfacilities = 'สิ่งอำนวยความสะดวก';
                        // $('.lng-book').html('จอง')
                        // $('.lng-capacity-info').html('ข้อมูลความจุ')
                        // $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')

                    } else if ($.cookie("lng") == undefined) {
                        car_topic = data[0].data1[i].topic_en;
                        cartype = data[0].data1[i].car_topic_en;
                        pax = data[0].data1[i].pax_en;
                        lngbook = 'Book';
                        lngcapacityinfo = 'Capacity info';
                        lngfacilities = 'Facilities';
                        // $('.lng-book').html('Book')
                        // $('.lng-capacity-info').html('Capacity info')
                        // $('.lng-facilities').html('Facilities')

                    }
                    $('#product_service').append('<div class="a-link-item col-lg-12" >' +
                        '<div class="item-thumbnail2" onclick="getimage(\'' + data[0].data1[i].car_model + '\')">' +
                        '<img src="' + urlicon + data[0].data1[i].transfer_icon + '.jpg">' +
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
                        '<span class="sala">' + data[0].data1[i].cost_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

                        '</div>' +
                        '<div class="views-item" >' +
                        '<a  href="book?data=' + data[0].data1[i].transfer_id + '&from=' + id_placefrom + '&to=' + id_placeto + '" > <span >' + lngbook + '</span></a>' +

                        '</div>' +
                        '</div>' +
                        '<div id="i-list"   onclick="getcondition(\'' + data[0].data1[i].car_model + '\')">' +
                        '<p id="capacity"><span ">' + lngcapacityinfo + '</span></p>' +
                        '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
                        '</div>' +
                        '</div>'

                    );


                });


            }
        });

    });
    $('#typecarservice').on('change', function() {

        $('#loading').css('display', 'block');
        $('.a-link-item').remove();
        //$('#typecarservice').remove();

        setTimeout(function() {

            $('#loading').css('display', 'none');

        }, 2000);

        dataService = [];
        ctypeservice = this.value;
        console.log(ctypeservice)

        console.log(datacaedervice)
        $.each(datacaedervice.data1, function(i, val) {
            if ($.cookie("lng") == 'cn') {
                if (datacaedervice.data1[i].car_topic_cn == ctypeservice) {
                    dataService.push(datacaedervice.data1[i])
                } else if (ctypeservice == 'All Type') {
                    dataService.push(datacaedervice.data1[i])
                }
            } else if ($.cookie("lng") == 'en') {
                if (datacaedervice.data1[i].car_topic_en == ctypeservice) {
                    dataService.push(datacaedervice.data1[i])
                } else if (ctypeservice == 'All Type') {
                    dataService.push(datacaedervice.data1[i])
                }

            } else if ($.cookie("lng") == 'th') {
                if (datacaedervice.data1[i].car_topic_th == ctypeservice) {
                    dataService.push(datacaedervice.data1[i])
                } else if (ctypeservice == 'All Type') {
                    dataService.push(datacaedervice.data1[i])
                }

            } else if ($.cookie("lng") == undefined) {
                if (datacaedervice.data1[i].car_topic_en == ctypeservice) {
                    dataService.push(datacaedervice.data1[i])
                } else if (ctypeservice == 'All Type') {
                    dataService.push(datacaedervice.data1[i])
                }

            }


        })

        console.log(dataService)



        var car_topic, cartype, pax;
        var urlicon = '../files/images/carmodelicon/';
        //if (data[0].data1.length != 0) {
        $.each(dataService, function(i, val) {
            var indexs = parseInt(i) + 1;
            if ($.cookie("lng") == 'cn') {
                car_topic = dataService[i].topic_cn;
                cartype = dataService[i].car_topic_cn;
                pax = dataService[i].pax_cn;
                lngbook = '預訂';
                lngcapacityinfo = '容量信息';
                lngfacilities = '设施';
            } else if ($.cookie("lng") == 'en') {
                car_topic = dataService[i].topic_en;
                cartype = dataService[i].car_topic_en;
                pax = dataService[i].pax_en;
                lngbook = 'Book';
                lngcapacityinfo = 'Capacity info';
                lngfacilities = 'Facilities';
                // $('.lng-book').html('Facilities')
                // $('.lng-capacity-info').html('Capacity info')
                // $('.lng-facilities').html('Facilities')

            } else if ($.cookie("lng") == 'th') {
                car_topic = dataService[i].topic_th;
                cartype = dataService[i].car_topic_th;
                pax = dataService[i].pax_th;
                lngbook = 'จอง';
                lngcapacityinfo = 'ข้อมูลความจุ';
                lngfacilities = 'สิ่งอำนวยความสะดวก';
                // $('.lng-book').html('จอง')
                // $('.lng-capacity-info').html('ข้อมูลความจุ')
                // $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')

            } else if ($.cookie("lng") == undefined) {
                car_topic = dataService[i].topic_en;
                cartype = dataService[i].car_topic_en;
                pax = dataService[i].pax_en;
                lngbook = 'Book';
                lngcapacityinfo = 'Capacity info';
                lngfacilities = 'Facilities';
                // $('.lng-book').html('Book')
                // $('.lng-capacity-info').html('Capacity info')
                // $('.lng-facilities').html('Facilities')

            }


            $('#product_service').append('<div class="a-link-item col-lg-12" >' +
                '<div class="item-thumbnail2" onclick="getimage(\'' + dataService[i].car_model + '\') ">' +
                '<img src="' + urlicon + dataService[i].transfer_icon + '.jpg">' +
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
                '<span class="sala">' + dataService[i].cost_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

                '</div>' +
                '<div class="views-item" >' +
                '<a  href="book?data=' + dataService[i].transfer_id + '&from=' + id_placefrom + '&to=' + id_placeto + '" > <span >' + lngbook + '</span></a>' +

                '</div>' +
                '</div>' +
                '<div id="i-list"   onclick="getcondition(\'' + dataService[i].car_model + '\')">' +
                '<p id="capacity"><span ">' + lngcapacityinfo + '</span></p>' +
                '<i class="fa fa-list-alt"   aria-hidden="true"></i>' +
                '</div>' +
                '</div>'

            );


        }); //end private

    });



    var data2;
    compae1private = [];
    compae1join = [];

    setTimeout(function() {
        $('#open_map').trigger('click');

    }, 3500);
    // $(".btn-reservation").click(function(){
    //            //alert("aaa")

    //    //$("#pro-search").fadeOut(4000);
    //    });
    $('.btn-close-img').click(function() {

        $('#img-car').hide(500)
    })
    $("#private-btn").click(function() {
        $(this).css({ "background-color": "#16b3b1", "color": " #fff " }

        );
        $("#join-btn").css({ "background-color": "#fff ", "color": "#16b3b1" });

    });
    $("#join-btn").click(function() {


        $(this).css({ "background-color": "#16b3b1", "color": "#fff" }

        );
        $("#private-btn").css({ "background-color": " #fff", "color": "#16b3b1 " }

        );

    });
    $("#show-hide-pro").click(function() {
        //alert("aaa")
        //$("#first").animate({'width': 0}, 'slow', function(){ 
        //$().hide(); 
        $(this).fadeOut(50);
        $("#show-hide-pro2").fadeIn(50);
        //$('#').show(); 
        $("#pro-search").animate({ 'margin-top': '100vh' });
        //});
        //$("#pro-search").fadeOut(4000);
    });
    $("#show-hide-pro2").click(function() {
        //alert("aaa")
        //$("#first").animate({'width': 0}, 'slow', function(){ 
        $(this).fadeOut(50);
        $("#show-hide-pro").fadeIn(50);

        //$('#').show(); 
        $("#pro-search").animate({ 'margin-top': '0vh' });
        //});
        //$("#pro-search").fadeOut(4000);
    });
    $("myDate").on("change", function() {
        this.setAttribute(
            "data-date",
            moment(this.value, "YYYY-MM-DD")
            .format(this.getAttribute("data-date-format"))
        )
    }).trigger("change")
    $('#loading').css('display', 'block');
    $('#content').css('display', 'none');
    setTimeout(function() {
        console.log("aaaaa")
        $('#loading').css('display', 'none');
        $('#content').css('display', 'block');
    }, 3000);


    $('#iconleft').click(function() {
        $("#iconhome").fadeIn(1000);
        $("#list_place").show(700);
        $("#iconleft2").fadeIn(1000);
        //$("").css('display','block');//.fadeIn(1000);

        $("#iconleft").css('display', 'none'); //.fadeIn(1000);
        //$(this).hide(); 
        //       $('#selectPlace').css('z-index','1');
        $("#search-show").hide();
        $("#search-raeltime").fadeIn(1000);
        //$(".btn-realtime").hide(); 
        $("#search-show").fadeOut(1000);
        //$("").show();
        //$("").show();
        $(".btn-realtime").fadeIn(1000);
        $(".btn-reservation").hide();
        //$(".btn-realtime").hide();




    });

    $('#iconleft2').click(function() {
        //$(this).css('display','none');
        $("#iconhome").fadeIn(1000);
        $("#iconleft").fadeIn(1000);
        $("#list_place").hide(700);


        //$("#iconleft").css('display','block');
        $("#iconleft2").css('display', 'none'); //.fadeIn(1000);


        //$('#selectPlace').css('z-index','-1');
        $("#search-show").fadeIn(1000);
        $("#search-raeltime").hide();
        //$(".btn-reservation").show();
        $("#pro-search").hide();
        $("#search-raeltime").fadeOut(1000);
        //$("").show();
        $(".btn-reservation").fadeIn(1000);
        $(".btn-realtime").hide();

    });
    $('#iconhome').click(function() {
        // $("#iconhome").fadeOut(1000);
        $('.a-link-item').remove();
        $("#list_place").hide(700);
        //$("#iconleft2").fadeOut(1000);
        //$("#iconleft").fadeOut(1000);
        //$("").css('display','block');//.fadeIn(1000);
        //          $('#selectPlace').css('z-index','2');
        //$("#iconleft").css('display','none');//.fadeIn(1000);
        //$(this).hide(); 
        $("#show-hide-pro2").hide();

        $("#search-show").hide();
        //$("#search-raeltime").fadeIn(500);
        //$(".btn-realtime").hide(); 
        $("#search-show").fadeOut(500);
        $("#search-raeltime").fadeOut(1000);
        //$("").show();
        //$("").show();
        $(".btn-realtime").fadeIn(1000);
        //$(".btn-reservation").fadeIn(1000);
        //$(".btn-realtime").hide();




    });
    $('#search-from').click(function() {
        $(this).val('');
    });
    $('#search-to').click(function() {
        $(this).val('');
    });
    $('.btn-management').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            $('.btn-management').css({ 'background': '#16B3B1' }, { 'color': '#ffffff' });
            $('.btn-car-service').css({ 'background': '#ffffff' }, { 'color': '#999999' });

            $('.btn-home').css({ 'background': '#ffffff' }, { 'color': '#999999' });
            $('.btn-reservation').css({ 'background': '#ffffff' }, { 'color': '#999999' });
            $('.btn-realtime').css({ 'background': '#ffffff' }, { 'color': '#999999' });
            $('#loading').css('display', 'none');
            window.location.href = base_url + "dashboard/view_user";
        }, 2000);


    });
    $('.btn-home').click(function() {
        $('#loading').css('display', 'block');

        setTimeout(function() {
            $('.btn-home').css('color', '#16B3B1');
            $('.btn-car-service').css('color', '#999999');

            $('.btn-reservation').css('color', '#999999');
            $('.btn-management').css('color', '#999999');
            $('.btn-realtime').css('color', '#999999');
            $('#loading').css('display', 'none');
        }, 2000);

    });
    $('.btn-reservation').click(function() {
        // alert("aaaa");
        $('#loading').css('display', 'block');

        //$('#content').css('display','none');
        setTimeout(function() {
            $('#box-car-service').hide();
            $('#map').show(500);
            // $(".btn-real-res").animate({'text-align':'center'}, 'slow', function(){ 
            //$(this).hide(); 
            //$("#iconhome").fadeIn(1000);
            // $("#iconleft").fadeIn(1000);
            // $("#iconleft2").hide();
            //  //$('#show-hide-pro2').show(); 
            // $(".btn-real-res").css({ 'text-align': 'center' });
            // $(".btn-realtime").hide();
            $('.btn-reservation').css({ 'background': '#16B3B1', 'color': '#ffffff' });


            $('.btn-home').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-management').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#999999' });

            $("#search-show").fadeIn(1000);

            //});
            $('#search-raeltime').css('display', 'none');
            // $('#map').css('display', 'none');
            $('#loading').css('display', 'none');
            //$('').css('display', 'block')
            //$('#content').css('display','block'); 
        }, 2000);


    });
    $('.btn-realtime').click(function() {




        //	  $('#selectPlace').show();
        $('#loading').css('display', 'block');
        //       $('#btn-real-res').css('display', 'none');
        $('#opennut').click();
        //$('#content').css('display','none');
        setTimeout(function() {
            $('#box-car-service').hide();
            $('#map').show(500);
            $('.btn-realtime').css({ 'background': '#16B3B1', 'color': '#ffffff' });


            $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-home').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-management').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#999999' });

            //$("#iconhome").fadeIn(1000);
            // $('#map').css('display', 'none');
            //$("#iconleft2").fadeIn(1000);
            //$("#iconleft").hide();
            $("#pro-search").hide();
            $("#search-raeltime").fadeIn(1000);

            $("#list_place").fadeIn(1000);
            //$(".btn-reservation").hide();
            //             $('#selectPlace').css('z-index','1');
            $('#loading').css('display', 'none');
            $('#search-show').css('display', 'none')
            $('#pac-input').css('display', '');
            //$('#search-raeltime').css('display', 'block');





            //$('#content').css('display','block'); 
        }, 2000);

        /*   $( "#maps" ).html( "1111" );*/

    });
    $('.btn-car-service').click(function() {
        //	  $('#selectPlace').show();
        $('#loading').css('display', 'block');
        //       $('#btn-real-res').css('display', 'none');
        $('#opennut').click();
        //$('#content').css('display','none');
        setTimeout(function() {
            $('#box-car-service').show(500);
            $('#map').hide();
            $('.btn-car-service').css({ 'background': '#16B3B1', 'color': '#ffffff' });

            // $('.btn-car-service').css('color', '#16B3B1');

            $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-home').css({ 'background': '#ffffff', 'color': '#999999' });
            $('.btn-management').css({ 'background': '#ffffff', 'color': '#999999' });
            //$("#iconhome").fadeIn(1000);
            // $('#map').css('display', 'none');
            //$("#iconleft2").fadeIn(1000);
            //$("#iconleft").hide();
            $("#show-hide-pro").hide();
            $("#show-hide-pro2").hide();
            $("#pro-search").hide();
            $("#search-raeltime").hide();

            $("#list_place").hide();
            //$(".btn-reservation").hide();
            //             $('#selectPlace').css('z-index','1');
            $('#loading').css('display', 'none');
            $('#search-show').css('display', 'none')
            $('#pac-input').css('display', '');
            //$('#search-raeltime').css('display', 'block');





            //$('#content').css('display','block'); 
        }, 2000);
    });
    $('#cartype').on('change', changeType);
    $('#cartype').on('change', function() {
        $('.a-link-item').remove();
        $('#box-prosearch').css('display', 'none');
        $('#product_a').css('display', 'none');
        $('#loading').css('display', 'block');

        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            $('#product_a').css('display', 'block');
            $('#box-prosearch').css('display', 'block');
        }, 2000);
        compae1private = [];
        compae1join = [];
        data2 = [];
        ctype = this.value;
        console.log(ctype)
        console.log(data1)
        $.each(data1, function(i, val) {
            if ($.cookie("lng") == 'cn') {
                if (data1[i].car_topic_cn == ctype) {
                    data2.push(data1[i])
                } else if (ctype == 'All Type') {
                    data2.push(data1[i])
                }
            } else if ($.cookie("lng") == 'en') {
                if (data1[i].car_topic_en == ctype) {
                    data2.push(data1[i])
                } else if (ctype == 'All Type') {
                    data2.push(data1[i])
                }

            } else if ($.cookie("lng") == 'th') {
                if (data1[i].car_topic_th == ctype) {
                    data2.push(data1[i])
                } else if (ctype == 'All Type') {
                    data2.push(data1[i])
                }

            } else if ($.cookie("lng") == undefined) {
                if (data1[i].car_topic_en == ctype) {
                    data2.push(data1[i])
                } else if (ctype == 'All Type') {
                    data2.push(data1[i])
                }

            }


        })
        console.log(data2)
        $.each(data2, function(i, val) {
            if (data2[i].type == 'Private') {
                compae1private.push(data2[i])
            }

            if (data2[i].type == 'Join') {
                compae1join.push(data2[i])
            }


        })
        console.log(compae1join);

        var car_topic, cartype, pax;
        var urlicon = '../files/images/carmodelicon/';
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

    });


    // $('body').addClass('loaded');
    //          $('#text-load').css('display','none') 
    var quotations = [];
    $('#btn-logout-user').on('click', function() {
        console.log('logout')
        $.removeCookie("login");
        window.location.href = base_url + "register";
    })
    $('.btn-show-select').click(function() {
        console.log('hide-show');
        $('.box-menu-select').css('bottom', '-200px')
            // $('.btn-show-select').hide(50)
        $('.btn-show-select').css('display', 'none');
        $('.btn-hide-select').css('display', 'block');
    });
    $('.btn-hide-select').click(function() {
        console.log('hide-show');
        $('.box-menu-select').css('bottom', '0')
            // $('.box-hide-select').hide(50)
        $('.btn-hide-select').css('display', 'none');
        $('.btn-show-select').css('display', 'block');
    });
    $('.box-login-non').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {

            window.location.href = base_url + "register";
        }, 2000);

    });
    // setTimeout(function(){

    //   }, 1000);

    //$('#updatelatlng').click(function() {

    //})

    // $('#btn-logout-user').click(function() {

    //     $.removeCookie("login");
    //     window.location.href = "https://dotdotdottrip.com/register";
    // });
    $('#join').click(function() {

    })


    var dataplace;
    //   $.ajax({
    //     type: 'POST',
    //     url: 'Getcountry_control/process',
    //     //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
    //     contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) { 
    //       console.log(data)


    //     }
    // });
    // $.ajax({
    //     type: 'POST',
    //     url: '../service/servicepro.php',
    //     //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data)
    //         console.log(data.length)
    //         dataplace = data
    //         console.log(data[0])
    //         var values = [];
    //         $.each(data , function(i, val) {

    // console.log(data[i].id)
    //      $.ajax({
    //             type: 'POST',
    //             url: 'https://dotdotdottrip.com/laglng_control/getlaglng',
    //             data: { 'id': data[i].id },
    //             //contentType: "application/json",
    //             dataType: 'json',
    //             success: function(data) {
    //                 console.log(data)







    //             }
    //         });

    //alert('aaa')
    // $('#latlng').append('<button type="button" class="btn btn-default"  onclick="updatelatlng(\''+data[i].id+'\')">'+data[i].topic+'</button>');

    //dataProvince.push(data[i])<li><h3 class="name"></h3><p class="born"></p></li>
    // $('#box-plancefrom').append('<li class="send-value" id="transferplace'+data[i].id+'" dataname ="'+data[i].topic+'" datapro="'+data[i].pro+'" dataaum="'+data[i].pro+'"onclick="sendValue(\''+data[i].id+'\');"><span class="name">'+data[i].topic+'</span></li>');


    // });
    // $.each(data , function(i, val) { 

    //       var values = data[i];


    //   quotations.push(data[i])

    //   });
    // for (var x= 0; x < quotations.length; x++) {
    //          values.push(quotations[x])
    //       }
    // console.log(quotations.length) 
    // console.log(quotations[0])

    // console.log(values)

    // $('body').addClass('loaded');
    // $('#text-load').css('display','none') 
    //        sendValuetojs(data);   
    //       $.each(data , function(i, val) { 

    //            //alert('aaa')
    //           $('#box-plancefrom').append('<li><span class="name">'+data[i].id+'</span></li>');

    //            //dataProvince.push(data[i])<li><h3 class="name"></h3><p class="born"></p></li>
    //          // $('#box-plancefrom').append('<li class="send-value" id="transferplace'+data[i].id+'" dataname ="'+data[i].topic+'" datapro="'+data[i].pro+'" dataaum="'+data[i].pro+'"onclick="sendValue(\''+data[i].id+'\');"><span class="name">'+data[i].topic+'</span></li>');


    //      });
    //              var options = {
    //               valueNames: [ 'name']
    //             };

    // var userList = new +('users', options);
    //  $('.box-plancefrom').css('display','block');
    // }

    // });

    $('#search-from').keyup(function() {
        dataplace = '';
        input = document.getElementById("search-from");
        //var 
        console.log(input.value)
        if (input.value.length >= 3) {

            $.ajax({
                type: 'POST',
                url: base_url + 'service/servicepro.php',
                data: { 'input': input.value.toLowerCase() },
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                        //$('#box-plancefrom').text('');
                    dataplace = data

                    var setvaluebox = '';
                    if (data.length > 0) {
                        console.log(data.length)
                        $('.box-plancefrom').css('display', 'block')
                        sendValuetojs(data);

                        $.each(dataplace, function(i, val) {

                            //alert('aaa')
                            //$('#box-plancefrom').append('<li><span class="name">'+data[i].id+'</span></li>');

                            //dataProvince.push(data[i])<li><h3 class="name"></h3><p class="born"></p></li>
                            setvaluebox += '<li class="send-value" id="transferplace' + data[i].id + '" dataname ="' + data[i].topic + '" lat_f="' + data[i].latitude + '" lng_f="' + data[i].longitude + '" datapro="' + data[i].pro + '" dataaum="' + data[i].pro + '"onclick="sendValue(\'' + data[i].id + '\');"><i class="material-icons " style="float: left; margin-right: 15px;">add_location</i><div style="margin-left: 40px;"><span class="name">' + data[i].topic + '</span><br><span style="text-align: left;font-size:13px">' + data[i].address + '</div></li>';


                        });

                        $('#box-plancefrom').html(setvaluebox)
                    } else if (data.length <= 0 || input.value == '') {
                        $('.box-plancefrom').css('display', 'none');
                    }






                }

            });
        } else {
            $('#box-plancefrom').html('');
            $('.box-plancefrom').css('display', 'none');
        }
        //  var filter;//console.log(dataProvince)
        // String(filter);
        // $('.box-plancefrom').css('display','block');
        // input = document.getElementById("search-from");
        // // = //.toLowerCase();
        //   //console.log(filter)
        //    var word = create_word(input.value.toLowerCase());
        //    var filter = word;
        // $('#box-plancefrom > li.send-value').each(function(){
        //     if (filter.length >= 3) {
        //         var currentLiText = $(this).text().toLowerCase(),
        //         showCurrentLi = currentLiText.indexOf(filter) !== -1;
        //         //console.log(currentLiText)

        //     $(this).toggle(showCurrentLi);
        //     if (filter == '' ) {
        //         $('.box-plancefrom').css('display','none');

        //     }  
        //   }

        // }); 
    });

    $('#search-to').keyup(function() {
        //console.log(dataProvince)

        //   $('.box-planceto').css('display','block');
        //   input = document.getElementById("search-to");
        //    var word = create_word(input.value.toLowerCase());
        //   filter = word;
        //     console.log(filter)
        //     $('#box-planceto > li.send-value').each(function(){

        //         var currentLiText = $(this).text().toLowerCase(),
        //             showCurrentLi = currentLiText.indexOf(filter) !== -1;
        //             //console.log(currentLiText)

        //         $(this).toggle(showCurrentLi);
        //         if (filter == '' ) {
        //             $('.box-planceto').css('display','none');

        //         }            
        //     });
        // });
        input = document.getElementById("search-to");
        console.log(input.value)
        console.log(input.value.toLowerCase())
        if (input.value.length >= 3) {
            $.ajax({
                type: 'POST',
                url: base_url + 'service/servicepro.php',
                data: { 'input': input.value.toLowerCase() },
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                        //$('#box-plancefrom').text('');
                    dataplace = data
                    var setvalueboxto = '';
                    if (data.length > 0) {

                        $('.box-planceto').css('display', 'block')
                            //sendValuetojs(data);

                        $.each(dataplace, function(i, val) {

                            //alert('aaa')
                            //$('#box-plancefrom').append('<li><span class="name">'+data[i].id+'</span></li>');

                            //dataProvince.push(data[i])<li><h3 class="name"></h3><p class="born"></p></li>
                            setvalueboxto += '<li class="send-value" id="transferplaceto' + data[i].id + '" dataname ="' + data[i].topic + '" datapro="' + data[i].pro + '" dataaum="' + data[i].pro + '" lat_t="' + data[i].latitude + '" lng_t="' + data[i].longitude + '"onclick="sendValueto(\'' + data[i].id + '\');"><i class="material-icons " style="float: left; margin-right: 15px;">add_location</i><div style="margin-left: 40px;"><span class="name">' + data[i].topic + '</span><br><span style="text-align: left;font-size:13px">' + data[i].address + '</div></li>';


                        });

                        $('#box-planceto').html(setvalueboxto)
                    } else if (data.length <= 0 || input.value == '') {
                        $('.box-planceto').css('display', 'none');
                    }






                }

            });
        } else {
            $('#box-planceto').html('');
            $('.box-planceto').css('display', 'none');
        }


    });
});

function create_word(input) {
    var word;
    var ascii;
    for (var i = 0; i < input.length; i++) {
        ascii = input.charCodeAt(i);
        if (i == 0)
            word = String.fromCharCode(ascii);
        else
            word += String.fromCharCode(ascii);
    }
    return word;
}

/**************************************************************************************/
/**********************************select place from***********************************/
/**************************************************************************************/
var dataplaceSend, id_placefrom, id_placeto, pro_from, pro_to, aum_from, aum_to, dataproduct, parame, compae1private = [],
    compae1join = [],
    compae2private = [],
    compae2join = [],
    lat_from, lng_from;
//var datato = [];
function sendValuetojs(data) {
    // console.log(data)
    dataplaceSend = data;
}

function sendValue(x) {
    id_placefrom = x;
    pro_from = $('#transferplace' + x).attr('datapro');
    var name = $('#transferplace' + x).attr('dataname');
    aum_from = $('#transferplace' + x).attr('dataaum');
    lat_from = $('#transferplace' + x).attr('lat_f');
    lng_from = $('#transferplace' + x).attr('lng_f');
    console.log(lat_from)
    console.log(lng_from)
    $('#search-from').val(name)
    console.log(name)
    console.log(id_placefrom)

    $('.box-plancefrom').css('display', 'none');
    //var sdata = {'id_from':id_placefrom,'pro_from' :pro_from,'aum_from':aum_from };
    //console.log(sdata)
    // $.each(dataplaceSend , function(i, val) { 
    //     if (dataplaceSend[i].pro == pro_from) {
    //      $('#box-planceto').append('<li class="send-value" id="transferplaceto'+dataplaceSend[i].id+'" dataname ="'+dataplaceSend[i].topic+'" onclick="sendValueto(\''+dataplaceSend[i].id+'\');">'+dataplaceSend[i].topic+'</li>');

    //     }
    // }); 
}
/**************************************************************************************/
/**********************************select place to***********************************/
/**************************************************************************************/

/**********************************END***********************************/
var data1;

function sendValueto(x) {
    console.log(id_placefrom)
    var name = $('#transferplaceto' + x).attr('dataname');
    aum_to = $('#transferplaceto' + x).attr('dataaum');
    pro_to = $('#transferplace' + x).attr('datapro');
    lat_to = $('#transferplaceto' + x).attr('lat_t');
    lng_to = $('#transferplaceto' + x).attr('lng_t');

    console.log(lat_to)
    console.log(lng_to)
    console.log(lat_from)
    console.log(lng_from)
    $('#lat_to').val(lng_to);
    $('#lng_to').val(lng_to);
    $('#show-hide-pro2').hide();
    $('#pro-search').hide();



    id_placeto = x;

    $('#search-to').val(name)

    console.log(name)

    parame = { "place_default": id_placefrom, "stay": pro_from, "aum_from": aum_from, "place_default_to": id_placeto, "stay_to": pro_to, "aum_to": aum_to };
    //parame =  { "request":{ 'id_from':id_placefrom,'id_to':id_placeto,'pro_from':pro_from,'pro_to':pro_to,'aum_from':aum_from,'aum_to':aum_from},
    // "field": {"0":"id","1":"name","2":"name_th","3":"name_cn"},
    //"from": "web_transferproduct"
    //};
    console.log(parame)
    $('.box-planceto').css('display', 'none');
    $('#loading').css('display', 'block');
    console.log("relllllllllllllllllllllllllllllllllll" + '--' + rel)
    console.log(latitude)
    console.log(longitude)
    var lat_f = $('#lat_from').val();
    var lng_f = $('#lng_from').val();
    console.log(lat_f)
    console.log(lng_f)


    $('.a-link-item').remove();
    $('.not-found').remove();
    compae1private = [];
    compae1join = [];
    compae2private = [];
    compae2join = [];

    var lat_s = $('#lat_to').val();
    var lng_s = $('#lng_to').val();
    var dist = "";


    $.ajax({
        type: 'POST',
        url: '../service/service.php',
        data: parame,
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            console.log(data.length)
            console.log(data.status)
            console.log(data.size)

            if (data.status == '200. bad request') {
                $('#ul-header2').css('display', 'block');
                $('#container-product').css('display', 'block');
                // $('#pro-search').css('display', 'block');
                $('#loading').css('display', 'block');
                //$('#content').css('display','none');
                setTimeout(function() {
                    //$('#search-raeltime').css('display', 'none');
                    // $('#map').css('display', 'none');
                    $('#loading').css('display', 'none');
                    $('#show-hide-pro').css('display', 'block');

                    $("#pro-search").slideDown('4000'); //fadeIn(4000);
                    $('#product_a').append('<div class="not-found">Product not Found</div>');
                    $("#pro-search").animate({ 'margin-top': '0vh' });

                    // $('#search-show').css('display', 'block')
                    //$('#content').css('display','block'); 
                }, 2000);
            } else if (data.size == 0) {
                $('#product_a').append('<div class="not-found">Product not Found</div>');

            } else {
                $('#ul-header2').css('display', 'block');
                $('#container-product').css('display', 'block');
                // $('#pro-search').css('display', 'block');
                $('#loading').css('display', 'block');
                //$('#content').css('display','none');
                setTimeout(function() {
                    //$('#search-raeltime').css('display', 'none');
                    // $('#map').css('display', 'none');
                    $('#loading').css('display', 'none');
                    $('#show-hide-pro').css('display', 'block');

                    $("#pro-search").slideDown('4000'); //fadeIn(4000);
                    $("#pro-search").animate({ 'margin-top': '0vh' });
                    // $('#search-show').css('display', 'block')
                    //$('#content').css('display','block'); 
                }, 2000);

                data1 = data.data1;
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
                console.log(compae1join);
                console.log(data.length)
                if (compae1join.length == 0) {
                    $('#join-btn').hide();
                    $('#private-btn').css('width', '100%');

                }
                dataproduct = data;
                var urlicon = base_url + 'files/images/carmodelicon/';

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
                        '<div class="item-thumbnail2" onclick="getimage(\'' + compae1private[i].car_model + '\')">' +
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
                } else {
                    $('#product_c').append('<div class="not-found">Product not Found</div>');
                }



            }





        },
        error: function(err) {
            console.log(err)
        }
    });

    //}

}

function search() {
    //alert("aaaaaa")

}

function getcondition(i) {
    $('.getcapa').remove();
    $('.getcapa2').remove();
    var lngplan, lngadult, lngchild, lngbagsmall, lngbagbig;
    if ($.cookie("lng") == 'cn') {

        lngplan = '计划';
        lngadult = '成人';
        lngchild = '儿童';
        lngbagsmall = '袋小';
        lngbagbig = '袋大';
    } else if ($.cookie("lng") == 'en') {
        lngplan = 'Plan';
        lngadult = 'Adult';
        lngchild = 'Child';
        lngbagsmall = 'Bag small';
        lngbagbig = 'Bag big';

    } else if ($.cookie("lng") == 'th') {
        lngplan = 'แผน';
        lngadult = 'ผู้ใหญ่';
        lngchild = 'เด็ก';
        lngbagsmall = 'กระเป๋าเล็ก';
        lngbagbig = 'กระเป๋าใหญ่';

    } else if ($.cookie("lng") == undefined) {
        lngplan = 'Plan';
        lngadult = 'Adult';
        lngchild = 'Child';
        lngbagsmall = 'Bag small';
        lngbagbig = 'Bag big';
    }
    console.log(i)
    var parame2 = {
        'field': { "0": "bag_big", "1": "bag_small", "2": "adult", "3": "child", "4": "plan", "5": "car_model" },
        "request": { "car_model": i },
        "from": "web_car_capacity"
    };
    $.ajax({
        type: 'POST',
        url: '../service/getCapacity.php',
        data: { 'car_model': i },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {


            console.log(data)


            //var ss = data[i].adult;
            $('#getcapa').append('<table class="table table-striped table-hover getcapa" width="100%" style="margin: 0;">' +
                '<tr class="head-table-dialog" align="center" >' +
                '<td align="center" width="20%">' +
                '<span class="">' + lngplan + '</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span class="">' + lngadult + '</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span class="">' + lngchild + '</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span class="">' + lngbagbig + '</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span class="">' + lngbagsmall + '</span>' +
                '</td>' +
                '</tr>' +
                // '<div id= "getcapa2">'+
                // '</div>'+

                '<table>');

            $.each(data, function(i, val) {
                //if (i == 1) {
                $('#getcapa2').append(
                    '<table class="table getcapa2" id="table' + data[i].plan + '" width="100%" style="margin: 0;">' +
                    '<tr id="dd' + data[i].plan + '">' +
                    '<td align="center" width="20%">' +
                    '<span>' + data[i].plan + '</span>' +
                    '</td>' +
                    '<td width="20%">' +
                    '<div id="adult' + data[i].plan + '">' +

                    '</div>' +
                    '</td >' +
                    '<td width="20%">' +
                    '<div id="child' + data[i].plan + '">' +
                    '</div>' +
                    '</td>' +
                    '<td width="20%">' +
                    '<div id="bag_big' + data[i].plan + '">' +
                    '</div>' +
                    '</td>' +
                    '<td width="20%">' +
                    '<div id="bag_small' + data[i].plan + '">' +
                    '</div>' +
                    '</td>' +
                    '</tr>' +
                    '</table>'

                );
                //}


                console.log(data[i].adult)

                if (data[i].adult == 0) {
                    $('#adult' + data[i].plan + '').append('<span>-</span>');
                } else {
                    for (var y = 0; y < data[i].adult; y++) {


                        $('#adult' + data[i].plan + '').append('<i class="fa fa-child " aria-hidden="true" ></i>');

                    }
                }



                if (data[i].child == 0) {
                    $('#child' + data[i].plan + '').append('<span>-</span>');
                } else {
                    for (var y = 0; y < data[i].child; y++) {


                        $('#child' + data[i].plan + '').append('<i class="fa fa-child " aria-hidden="true" ></i>');

                    }
                }

                if (data[i].bag_big == 0) {
                    $('#bag_big' + data[i].plan + '').append('<span>-</span>');
                } else {
                    for (var z = 0; z < data[i].bag_big; z++) {


                        $('#bag_big' + data[i].plan + '').append('<i class="fa fa-suitcase fa-2x" aria-hidden="true" ></i>');

                    }
                }

                if (data[i].bag_small == 0) {
                    $('#bag_small' + data[i].plan + '').append('<span>-</span>');
                } else {
                    for (var a = 0; a < data[i].bag_small; a++) {


                        $('#bag_small' + data[i].plan + '').append('<i class="fa fa-suitcase " aria-hidden="true" ></i>');

                    }
                }

            });
            $('#capacityss').modal('show')
        }

    });
    if ($.cookie("lng") == 'cn') {
        $('#terms-of-use').html('<span>' +
            '<B>一. </B> 请注意，黄色或者绿色车牌为合法运营车辆。如看到其他颜色牌照可拒绝上车，并请联系我们热线。<br /><br />' +
            '<B>二. </B> 上⻋车请系好安全带，不然如遇警察检查需自己付罚款，如有意外保险⽆无法赔偿。<br /><br />' +
            '<B>三. </B> 上下车请保管好自己的物品。如有遗失，概不负责。<br /><br />' +
            '<B>四. </B> 如发生司机由于不可抗力因素未接到，在约定时间后5-15分钟内，请客人及时联系我们的24小时中文热线，如等待超过30分钟，请客人需及时自行打车离开！<br /><br />' +
            '我们会退还订单费用，如客人有打车凭证提供，我们将补偿打车费用，但是其他费用一律不负责赔偿，请知晓！</span>');

    } else if ($.cookie("lng") == 'en') {
        $('#terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');

    } else if ($.cookie("lng") == 'th') {
        $('#terms-of-use').html('<span >' +
            '<B>1.</B> โปรดทราบว่ามีเพียงแผ่นป้ายทะเบียนรถสีเขียวหรือสีเหลืองเท่านั้นที่ใช้เป็นยานพาหนะขนส่งสาธารณะที่ถูกต้องตามกฎหมาย หากคุณเห็นป้ายทะเบียนรถเป็นสีอื่น คุณสามารถปฏิเสธการโดยสารได้ และโปรดติดต่อสายด่วนของเรา<br /><br />' +
            '<B >2.</B> กรุณาคาดเข็มขัดนิรภัย มิฉะนั้นในกรณีที่มีการเรียกตรวจสอบจากตำรวจ คุณต้องต้องจ่ายค่าปรับเอง และในกรณีที่เกิดอุบัติเหตุ คุณจะไม่สามารถได้รับค่าชดเชยจากบริษัทประกันภัย<br /><br />' +
            '<B>3.</B> โปรดตรวจสอบทรัพย์สินของคุณก่อนที่รถจะออกเดินทางหรือรถถึงที่หมาย เราจะไม่รับผิดชอบต่อความสูญเสียในกรณีใดๆ ทั้งสิ้น<br /><br />' +
            '<B>4.</B> ในกรณีที่มีเหตุสุดวิสัยคนขับไม่ได้รับรอเกิน 5-15 นาทีจากเวลาที่ตกลงกัน โปรดติดต่อศูนย์บริการตลอด 24 ชั่วโมงสายด่วนทันที ถ้ารอคอยมากกว่า 30 นาที กรุณาเรียกรถเอง! เราจะคืนเงินให้ท่าน100%ในการจอง และจะคืนเงินที่ท่านเรียกรถ (แต่ต้องมีหลักฐานใบเสร็จหรือรูปยืนยัน) แต่จะไม่รับผิดชอบค่าเสียหายอื่น  โปรดทราบ!</span> ');


    } else if ($.cookie("lng") == undefined) {
        $('#terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');

    }
}

function updatelatlng(id) {
    console.log(id)
    $.ajax({
        type: 'POST',
        url: '../laglng_control/getlaglng',
        data: { 'id': id },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)







        }
    });
}

function book(x) {
    window.location.href = '/test';
    alert(x);
}
window.fbAsyncInit = function() {
    FB.init({
        appId: '1865903040340223',
        cookie: true,
        xfbml: true,
        version: 'v2.8'
    });
    FB.AppEvents.logPageView();
};


(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function login() {

    FB.login(function(response) { statusChangeCallback(response); }, { scope: 'email,public_profile', return_scopes: true });
    // FB.getLoginStatus(function(response) 
    //     {statusChangeCallback(response)},{ scope: 'email,user_likes' 
    // });
    // function checkLoginState() {
    //   FB.getLoginStatus(function(response) {
    //     statusChangeCallback(response);
    //   });
    // }
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            checkLoginState();
        } else {
            // The person is not logged into your app or we are unable to tell.
            //   document.getElementById('status').innerHTML = 'Please log ' +
            //     'into this app.';
        }
    }

    function checkLoginState() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me?fields=name,email', function(response) {
            console.log(response)
                // $.cookie("idface", response.id);
            $.ajax({
                type: 'POST',
                url: '../login_control/processsocial',
                data: { 'username': response.email, 'name': response.name, 'password': response.id },
                //contentType: "application/json",
                dataType: 'json',
                success: function(res) {
                    console.log(res)
                    if (res.status == 0) {
                        $.cookie("login", res.username);
                        window.location.href = base_url;


                    } else {

                        $('#message').html('Login not complete').css('color', 'red');
                    }

                }
            });

            //console.log('Successful login for: ' + response.name);

        });
    }
}



// function initMap() {
//     var uluru = { lat: 7.9038781, lng: 98.3033694 };
//     var map = new google.maps.Map(document.getElementById('map'), {
//         zoom: 11,
//         center: uluru
//     });
//     var marker = new google.maps.Marker({
//         position: uluru,
//         map: map
//     });
// }
var addr, latitude, longitude, addrcurent, placeIdcurent
$('#current-addr').on('click', getAddress)


function sendplaceid(id) {
    console.log(id)
    placeIdcurent = id
    console.log(placeIdcurent)

}

function changeType() {
    console.log(data1)


}

function getimage(i) {
    console.log(i);
    $('#img-car').show(500)
    $('#idimage').val(i)

    jssor_1_slider_init();

}

function jssor_1_slider_init() {

    var jssor_1_options = {
        $AutoPlay: 0,
        $Idle: 2000,
        $SlideEasing: $Jease$.$InOutSine,
        $DragOrientation: 3,
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    //make sure to clear margin of the slider container element
    jssor_1_slider.$Elmt.style.margin = "";

    /*#region responsive code begin*/

    /*
                        parameters to scale jssor slider to fill parent container
    
                        MAX_WIDTH
                            prevent slider from scaling too wide
                        MAX_HEIGHT
                            prevent slider from scaling too high, default value is original height
                        MAX_BLEEDING
                            prevent slider from bleeding outside too much, default value is 1
                            0: contain mode, allow up to 0% to bleed outside, the slider will be all inside parent container
                            1: cover mode, allow up to 100% to bleed outside, the slider will cover full area of parent container
                            0.1: flex mode, allow up to 10% to bleed outside, this is better way to make full window slider, especially for mobile devices
                    */

    var MAX_WIDTH = 3000;
    var MAX_HEIGHT = 3000;
    var MAX_BLEEDING = 1;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {
            var originalWidth = jssor_1_slider.$OriginalWidth();
            var originalHeight = jssor_1_slider.$OriginalHeight();

            var containerHeight = containerElement.clientHeight || originalHeight;

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
            var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

            //scale the slider to expected size
            jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight, MAX_BLEEDING);

            //position slider at center in vertical orientation
            jssor_1_slider.$Elmt.style.top = ((containerHeight - expectedHeight) / 2) + "px";

            //position slider at center in horizontal orientation
            jssor_1_slider.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    /*ios disable scrolling and bounce effect*/
    $Jssor$.$AddEvent(document, "touchmove", function(event) { event.touches.length < 2 && $Jssor$.$CancelEvent(event); });

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};

function getAddress(address) {


    console.log(placeIdcurent)
    console.log(dataplacerel)
    $.ajax({
        type: 'POST',
        url: '../service/curentPlace.php',
        data: { 'lat_c': latitude, 'lng_c': longitude },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            //console.log(data[0])
            console.log(data)
            id_placefrom = data.id;
            aum_from = data.aum;
            console.log(id_placefrom)
            console.log(aum_from)

        }
    })
    for (var x = 0; x < dataplacerel.length; x++) {
        if (dataplacerel[x].place_id == placeIdcurent) {
            console.log(dataplacerel[i].place_id)

        } else {
            console.log('not same');
        }


    }

    rel = true;
    console.log(rel)
    $('#search-from').val(addr)
    console.log(latitude)
    console.log(longitude)
    $('#lat_from').val(latitude)
    $('#lng_from').val(longitude)
    console.log(addrcurent)
        // var x = Math.PI * (latitude / 180);
        // var y = Math.PI * (longitude / 180);
        // console.log('Math.PI' + '-' + Math.PI);
        // console.log(latitude / 180)
        // console.log(longitude / 180)

    // console.log('latitude' + x)
    // console.log('longitude' + y)
    // var s = 7.8926326;
    // var d = 98.3005206;
    // var r = 6371;
    // var d = 6371 * Math.PI;
    // console.log(d * d)
    // console.log(Math.cos(98.3005206))

}

$('#show_pd').click(function() {

    $('#show_pd_dialog').show(1000);

});