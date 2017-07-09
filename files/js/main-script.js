$(document).ready(function() {

    var data1,data2;
    compae1private = [];
    compae1join = [];

	 setTimeout(function() {
         $('#open_map').trigger('click');
         
        }, 3500);
	// $(".btn-reservation").click(function(){
 //            //alert("aaa")
        
 //    //$("#pro-search").fadeOut(4000);
 //    });
	$("#show-hide-pro").click(function(){
            //alert("aaa")
        //$("#first").animate({'width': 0}, 'slow', function(){ 
            //$().hide(); 
            $(this).fadeOut(2000);
            $("#show-hide-pro2").fadeIn(1000);
            //$('#').show(); 
            $("#pro-search").animate({'margin-top':'100vh'});
        //});
    //$("#pro-search").fadeOut(4000);
    });
    $("#show-hide-pro2").click(function(){
            //alert("aaa")
        //$("#first").animate({'width': 0}, 'slow', function(){ 
             $(this).fadeOut(2000);
            $("#show-hide-pro").fadeIn(1000);

            //$('#').show(); 
            $("#pro-search").animate({'margin-top': '0vh'});
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
		
         $("#iconleft").css('display','none');//.fadeIn(1000);
        //$(this).hide(); 
       
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
         $("#iconleft2").css('display','none');//.fadeIn(1000);
        
        
        
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
        $("#iconhome").fadeOut(1000);
		$("#list_place").hide(700); 
        $("#iconleft2").fadeOut(1000);
        $("#iconleft").fadeOut(1000);
        //$("").css('display','block');//.fadeIn(1000);

         //$("#iconleft").css('display','none');//.fadeIn(1000);
        //$(this).hide(); 
       
        $("#search-show").hide(); 
        $("#search-raeltime").fadeIn(500); 
        //$(".btn-realtime").hide(); 
        $("#search-show").fadeOut(500);
        $("#search-raeltime").fadeOut(1000); 
        //$("").show();
        //$("").show();
        $(".btn-realtime").fadeIn(1000);
        $(".btn-reservation").fadeIn(1000);
        //$(".btn-realtime").hide();



        
    });
    $('.btn-reservation').click(function() {
        // alert("aaaa");
        $('#loading').css('display', 'block');
        //$('#content').css('display','none');
        setTimeout(function() {
           // $(".btn-real-res").animate({'text-align':'center'}, 'slow', function(){ 
            //$(this).hide(); 
            $("#iconhome").fadeIn(1000);
            $("#iconleft").fadeIn(1000);
             $("#iconleft2").hide();  
            //$('#show-hide-pro2').show(); 
            $(".btn-real-res").css({'text-align':'center'});
             $(".btn-realtime").hide(); 
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
	  
       $('#loading').css('display', 'block');
//       $('#btn-real-res').css('display', 'none');
        
        //$('#content').css('display','none');
       setTimeout(function() {
        $("#iconhome").fadeIn(1000);
            // $('#map').css('display', 'none');
             $("#iconleft2").fadeIn(1000); 
             $("#iconleft").hide(); 
             $("#pro-search").hide(); 
              $("#search-raeltime").fadeIn(1000);
			
			$("#list_place").fadeIn(1000);
             $(".btn-reservation").hide(); 
            // $('#map2').css('display', 'block');
            $('#loading').css('display', 'none');
            $('#search-show').css('display', 'none')
            $('#pac-input').css('display', '');
            //$('#search-raeltime').css('display', 'block');
           
            
          
            
        
            //$('#content').css('display','block'); 
       }, 2000);

/*   $( "#maps" ).html( "1111" );*/

    });
    $('#cartype').on('change', function() {
        $('.a-link-item').remove();
        $('#box-prosearch').css('display','none');
        $('#product_a').css('display','none');
        $('#loading').css('display', 'block');
   
    setTimeout(function() {
        console.log("aaaaa")
        $('#loading').css('display', 'none');
        $('#product_a').css('display', 'block');
        $('#box-prosearch').css('display','block');
    }, 2000);
        compae1private = [];
    compae1join = [];
    data2 = [];
    ctype = this.value ;
    console.log(ctype)
    console.log(data1)
    $.each(data1, function(i, val) {
        if (data1[i].car_topic_en == ctype) {
                data2.push(data1[i])
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
    var car_topic,cartype,pax;
    var urlicon = 'https://t-booking.com/pic/carmodelicon/';
                //if (data[0].data1.length != 0) {
                    $.each(compae1private, function(i, val) {
                        var indexs = parseInt(i) + 1;
                        if ($.cookie("lng") == 'cn') {
                            car_topic = compae1private[i].topic_cn;
                            cartype = compae1private[i].car_topic_cn;
                            pax = compae1private[i].pax_cn;
                            $('.lng-book').html('預訂')
                            $('.lng-capacity-info').html('容量信息')
                            $('.lng-facilities').html('设施')
                        }
                        else if($.cookie("lng") == 'en'){
                            car_topic = compae1private[i].topic_en;
                            cartype = compae1private[i].car_topic_en;
                            pax = compae1private[i].pax_en;
                            $('.lng-book').html('Book')
                            $('.lng-capacity-info').html('Capacity info')
                            $('.lng-facilities').html('Facilities')

                        }
                        else if($.cookie("lng") == 'th'){
                            car_topic = compae1private[i].topic_th;
                            cartype = compae1private[i].car_topic_th;
                            pax = compae1private[i].pax_th;
                            $('.lng-book').html('จอง')
                            $('.lng-capacity-info').html('ข้อมูลความจุ')
                            $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')
                                        
                        }

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

                            '<p id="facilities">' +
                            '<span class="lng-facilities"></span>'  +
                            '<img src="https://dotdotdottrip.com/files/img/air.png" alt="Air Conditioner" >&nbsp;&nbsp;' +
                            '<i class="fa fa-music" aria-hidden="true" alt="Audio Player" ></i>' +
                            '</p>' +
                            '</div>' +
                            '<div id="box-cost-view">' +
                            '<div class="product_r">' +
                            '<span class="base_price"></span>' +
                            '<span class="sala">' + compae1private[i].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

                            '</div>' +
                            '<div class="views-item" >' +
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

                    

                    $.each(compae1join, function(i, val) {
                        var indexs = parseInt(i) + 1;
                        if ($.cookie("lng") == 'cn') {
                            car_topic = compae1join[i].topic_cn;
                            cartype = compae1join[i].car_topic_cn;
                            pax = compae1join[i].pax_cn;
                            $('.lng-book').html('預訂')
                            $('.lng-capacity-info').html('容量信息')
                            $('.lng-facilities').html('设施')
                        }
                        else if($.cookie("lng") == 'en'){
                            car_topic = compae1join[i].topic_en;
                            cartype = compae1join[i].car_topic_en;
                            pax = compae1join[i].pax_en;
                             $('.lng-book').html('Book')
                            $('.lng-capacity-info').html('Capacity info')
                            $('.lng-facilities').html('Facilities')

                        }
                        else if($.cookie("lng") == 'th'){
                            car_topic = compae1join[i].topic_th;
                            cartype = compae1join[i].car_topic_th;
                            pax = compae1join[i].pax_th;
                            $('.lng-book').html('จอง')
                            $('.lng-capacity-info').html('ข้อมูลความจุ')
                            $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')
                                        
                        }
                        $('#product_c').append('<div class="a-link-item col-lg-12" >' +
                            '<div class="item-thumbnail2" onclick="gotransfer(\'' + val + '\')">' +
                            '<img src="' + urlicon + compae1join[i].transfer_icon + '.jpg">' +
                            '</div>' +
                            '<h2 class="searchresult_name" title="product name">' +
                            '<span >' + car_topic + '</span>' +
                            '<span class="hotel_num">' + indexs + '</span>' +
                            '</h2>' +
                            '<div class="box-province">' +
                            '<p class="type-t">' +
                            '<span class="car-type" >' + cartype + pax  + '</span>' +
                            '</p>' +

                            '<p id="facilities">' +
                            '<span class="lng-facilities"></span>'  +
                            '<img src="https://dotdotdottrip.com/files/img/air.png" alt="Air Conditioner" >&nbsp;&nbsp;' +
                            '<i class="fa fa-music" aria-hidden="true" alt="Audio Player" ></i>' +
                            '</p>' +
                            '</div>' +
                            '<div id="box-cost-view">' +
                            '<div class="product_r">' +
                            '<span class="base_price"></span>' +
                            '<span class="sala">' + compae1join[i].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

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
    
    });
    

    // $('body').addClass('loaded');
    //          $('#text-load').css('display','none') 
    var quotations = [];
    $('#btn-logout-user').on('click', function() {
        console.log('logout')
            $.removeCookie("login");
            window.location.href = "https://dotdotdottrip.com/register";
        })
    $('.search-transfer-product').click(function() {
       
    $('.a-link-item').remove();

    // $('#product_b').remove();
    // $('#product_c').remove();
    // $('#product_d').remove();
    compae1private = [];
    compae1join = [];
    compae2private = [];
    compae2join = [];
    data1;
    $.ajax({
        type: 'POST',
        url: '../service/service.php',
        data: parame,
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            console.log(data.length)
            if (data != null) {
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

                    $("#pro-search").slideDown('4000');//fadeIn(4000);
                    // $('#search-show').css('display', 'block')
                    //$('#content').css('display','block'); 
                }, 2000);

               data1 = data.data1;
                var cartype = data.cartype;
                console.log(data1)
                console.log(cartype)

                $.each(cartype , function(i, val) { 
                var index2 = parseInt(i) + 1;               
                 $('#cartype').append('<option value="'+cartype[i]+'" label="'+cartype[i]+'" none=""></option>');
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
                var urlicon = 'https://t-booking.com/pic/carmodelicon/';
                //if (data[0].data1.length != 0) {
                    var car_topic,cartype,pax;
                    $.each(compae1private, function(i, val) {
                        var indexs = parseInt(i) + 1;
                        if ($.cookie("lng") == 'cn') {
                            car_topic = compae1private[i].topic_cn;
                            cartype = compae1private[i].car_topic_cn;
                            pax = compae1private[i].pax_cn;
                            $('.lng-book').html('預訂')
                            $('.lng-capacity-info').html('容量信息')
                            $('.lng-facilities').html('设施')
                        }
                        else if($.cookie("lng") == 'en'){
                            car_topic = compae1private[i].topic_en;
                            cartype = compae1private[i].car_topic_en;
                            pax = compae1private[i].pax_en;
                            $('.lng-book').html('Book')
                            $('.lng-capacity-info').html('Capacity info')
                            $('.lng-facilities').html('Facilities')

                        }
                        else if($.cookie("lng") == 'th'){
                            car_topic = compae1private[i].topic_th;
                            cartype = compae1private[i].car_topic_th;
                            pax = compae1private[i].pax_th;
                            $('.lng-book').html('จอง')
                            $('.lng-capacity-info').html('ข้อมูลความจุ')
                            $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')
                                        
                        }
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

                            '<p id="facilities">' +
                            '<span class="lng-facilities"></span>' +
                            '<img src="https://dotdotdottrip.com/files/img/air.png" alt="Air Conditioner" >&nbsp;&nbsp;' +
                            '<i class="fa fa-music" aria-hidden="true" alt="Audio Player" ></i>' +
                            '</p>' +
                            '</div>' +
                            '<div id="box-cost-view">' +
                            '<div class="product_r">' +
                            '<span class="base_price"></span>' +
                            '<span class="sala">' + compae1private[i].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

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

                    var car_topic,cartype,pax;

                    $.each(compae1join, function(i, val) {
                        var indexs = parseInt(i) + 1;
                        if ($.cookie("lng") == 'cn') {
                            car_topic = compae1join[i].topic_cn;
                            cartype = compae1join[i].car_topic_cn;
                            pax = compae1join[i].pax_cn;
                            $('.lng-book').html('預訂')
                            $('.lng-capacity-info').html('容量信息')
                            $('.lng-facilities').html('设施')
                        }
                        else if($.cookie("lng") == 'en'){
                            car_topic = compae1join[i].topic_en;
                            cartype = compae1join[i].car_topic_en;
                            pax = compae1join[i].pax_en;
                            $('.lng-book').html('Book')
                            $('.lng-capacity-info').html('Capacity info')
                            $('.lng-facilities').html('Facilities')

                        }
                        else if($.cookie("lng") == 'th'){
                            car_topic = compae1join[i].topic_th;
                            cartype = compae1join[i].car_topic_th;
                            pax = compae1join[i].pax_th;
                            $('.lng-book').html('จอง')
                            $('.lng-capacity-info').html('ข้อมูลความจุ')
                            $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')
                                        
                        }
                        $('#product_c').append('<div class="a-link-item col-lg-12" >' +
                            '<div class="item-thumbnail2" onclick="gotransfer(\'' + val + '\')">' +
                            '<img src="' + urlicon + compae1join[i].transfer_icon + '.jpg">' +
                            '</div>' +
                            '<h2 class="searchresult_name" title="product name">' +
                            '<span >' + car_topic + '</span>' +
                            '<span class="hotel_num">' + indexs + '</span>' +
                            '</h2>' +
                            '<div class="box-province">' +
                            '<p class="type-t">' +
                            '<span class="car-type" >' + cartype+ pax + '</span>' +
                            '</p>' +

                            '<p id="facilities">' +
                             '<span class="lng-facilities"></span>' +
                            '<img src="https://dotdotdottrip.com/files/img/air.png" alt="Air Conditioner" >&nbsp;&nbsp;' +
                            '<i class="fa fa-music" aria-hidden="true" alt="Audio Player" ></i>' +
                            '</p>' +
                            '</div>' +
                            '<div id="box-cost-view">' +
                            '<div class="product_r">' +
                            '<span class="base_price"></span>' +
                            '<span class="sala">' + compae1join[i].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + '฿' + '</span>' +

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

                
            }




        },
        error: function(err) {
            console.log(err)
        }
    });
    });
        // setTimeout(function(){

    //   }, 1000);
    console.log("readysss!");
    if ($.cookie("login")) {
        console.log($.cookie("login"))
        $.ajax({
            type: 'POST',
            url: 'https://dotdotdottrip.com/getuser_control/mainpage',
            data: { 'id': $.cookie("login") },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $('#usernamess').html(data[0].s_username)
                    //$('#textlogout').html("Logout")
                $('#btnlogin').css('display', 'none')
                $('#btnuser').css('display', 'block')
                $('.caret').css('display', 'inline-block')






            }
        });
    } else {
        //$('#usernamess').html("Login")
        // $('#textlogout').html("Login/Register")
        $('#btnlogin').css('display', 'block')
        $('#btnuser').css('display', 'none')
        $('.caret').css('display', 'none')


        // $('.dropdown-menu').css('display','none')



    }
    $('#btn-logout-user').click(function() {

        $.removeCookie("login");
        window.location.href = "https://dotdotdottrip.com/register";
    });
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
    $.ajax({
        type: 'POST',
        url: '../service/servicepro.php',
        //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            console.log(data.length)
            dataplace = data
            console.log(data[0])
            var values = [];
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
        }

    });

    $('#search-from').keyup(function() {
        dataplace = '';
        input = document.getElementById("search-from");
        //var 
        console.log(input.value)
        if (input.value.length >= 3) {

            $.ajax({
                type: 'POST',
                url: '../service/servicepro.php',
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
                            setvaluebox += '<li class="send-value" id="transferplace' + data[i].id + '" dataname ="' + data[i].topic + '" datapro="' + data[i].pro + '" dataaum="' + data[i].pro + '"onclick="sendValue(\'' + data[i].id + '\');"><i class="material-icons " style="float: left; margin-right: 15px;">add_location</i><div style="margin-left: 40px;"><span class="name">' + data[i].topic + '</span><br><span style="text-align: left;font-size:13px">'+data[i].address+'</div></li>';


                        });

                        $('#box-plancefrom').html(setvaluebox)
                    } else if (data.length <= 0 || input.value == '') {
                        $('.box-plancefrom').css('display', 'none');
                    }






                }

            });
        }
        else{
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
                url: '../service/servicepro.php',
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
                            setvalueboxto += '<li class="send-value" id="transferplaceto' + data[i].id + '" dataname ="' + data[i].topic + '" datapro="' + data[i].pro + '" dataaum="' + data[i].pro + '"onclick="sendValueto(\'' + data[i].id + '\');"><i class="material-icons " style="float: left; margin-right: 15px;">add_location</i><div style="margin-left: 40px;"><span class="name">' + data[i].topic + '</span><br><span style="text-align: left;font-size:13px">'+data[i].address+'</div></li>';


                        });

                        $('#box-planceto').html(setvalueboxto)
                    } else if (data.length <= 0 || input.value == '') {
                        $('.box-planceto').css('display', 'none');
                    }






                }

            });
        }
         else{
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
    compae2join = [];
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


function sendValueto(x) {
    console.log(id_placefrom)
    var name = $('#transferplaceto' + x).attr('dataname');
    aum_to = $('#transferplaceto' + x).attr('dataaum');
    pro_to = $('#transferplace' + x).attr('datapro');
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
}

function search() {
    //alert("aaaaaa")
    
}

function getcondition(i) {
    $('.getcapa').remove();
    $('.getcapa2').remove();
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
                '<span>Plan</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span >Adult</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span >Child</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span >Bag big</span>' +
                '</td>' +
                '<td align="center" width="20%">' +
                '<span >Bag small</span>' +
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
                url: 'https://dotdotdottrip.com/login_control/processsocial',
                data: { 'username': response.email, 'name': response.name, 'password': response.id },
                //contentType: "application/json",
                dataType: 'json',
                success: function(res) {
                    console.log(res)
                    if (res.status == 0) {
                        $.cookie("login", res.username);
                        window.location.href = "https://dotdotdottrip.com";


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
var addr,latitude,longitude,addrcurent;
$('#current-addr').on('click',getAddress);
 function getAddress(address){
    $('#search-from').val(addr)
    console.log(latitude)
    console.log(longitude)
    console.log(addrcurent)
    
 }
 
$('#show_pd').click(function(){
	
	 $('#show_pd_dialog').show(1000);
	
});



