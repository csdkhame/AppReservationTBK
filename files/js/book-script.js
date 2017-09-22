$(document).ready(function() {
    var base_url = 'https://www.welovetaxi.com/app/booking/';
    $('#loading').css('display', 'block');
    $('#content').css('display', 'none');
    setTimeout(function() {
        console.log("aaaaa")
        $('#loading').css('display', 'none');
        $('#content').css('display', 'block');
    }, 3000);
    $('#on_date').each(function() {
        var $date = $(this),
            date = $date.val().split('-'),
            format = ['year', 'month', 'day'];
        $.each(format, function(i, v) {
            $date.attr('data-' + v, +date[i]);
        });
    });
    var area, namecountry, datacountry, program_name, num_cars = 1,
        selectcar = 1,
        num_adult = 1,
        num_child = 0,
        ondate,
        ontime, time_h = '00',
        time_m = '00',
        name, phone, phonecode,
        other, total_adult = 0,
        total_child = 0,
        total_price = 0,
        person = 0,
        sum_adult_child = num_adult + num_child,
        checksumperson = 0,
        place_name, toplace_name, adress, adress_to, terminal, car_model,
        service, code, visa, guestcountry, datauser,
        code_r, code_ref, s_email,
        flight, cost_a_nett, lng_getcountry, adresss;

    if ($.cookie("lng") == 'cn') {
        lng_getcountry = '请选择国家';
        $('#terms-of-use').html('<span>' +
            '<B>一. </B> 请注意，黄色或者绿色车牌为合法运营车辆。如看到其他颜色牌照可拒绝上车，并请联系我们热线。<br /><br />' +
            '<B>二. </B> 上⻋车请系好安全带，不然如遇警察检查需自己付罚款，如有意外保险⽆无法赔偿。<br /><br />' +
            '<B>三. </B> 上下车请保管好自己的物品。如有遗失，概不负责。<br /><br />' +
            '<B>四. </B> 如发生司机由于不可抗力因素未接到，在约定时间后5-15分钟内，请客人及时联系我们的24小时中文热线，如等待超过30分钟，请客人需及时自行打车离开！<br /><br />' +
            '我们会退还订单费用，如客人有打车凭证提供，我们将补偿打车费用，但是其他费用一律不负责赔偿，请知晓！</span>');
    } else if ($.cookie("lng") == 'en') {
        lng_getcountry = 'Please select country';
        $('#terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');

    } else if ($.cookie("lng") == 'th') {
        lng_getcountry = 'โปรดเลือกประเทศ';
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
        lng_getcountry = 'Please select country';


    }

    $('#sumnum').html(parseInt(sum_adult_child));


    // if ($.cookie("login")) {
    //     console.log($.cookie("login"))
    //     $.ajax({
    //         type: 'POST',
    //         url: 'https://dotdotdottrip.com/getuser_control/mainpage',
    //         data: { 'id': $.cookie("login") },
    //         //contentType: "application/json",
    //         dataType: 'json',
    //         success: function(data) {
    //             console.log(data)
    //             datauser = data;
    //             $('#usernamess').html(data[0].s_username)
    //                 //$('#textlogout').html("Logout")
    //             $('#btnlogin').css('display', 'none')
    //             $('#btnuser').css('display', 'block')
    //             $('.caret').css('display', 'inline-block')
    //             $('#acceptancecheck').css('display', 'block')





    //         }
    //     });

    // } else {
    //     //$('#usernamess').html("Login")
    //     // $('#textlogout').html("Login/Register")
    //     $('#btnlogin').css('display', 'block')
    //     $('#btnuser').css('display', 'none')
    //     $('.caret').css('display', 'none')
    //     $('#acceptancecheck').css('display', 'none')



    //     // $('.dropdown-menu').css('display','none')



    // }
    if ($.cookie("login")) {
        console.log($.cookie("login"))
            //        alert(base_url+'getuser_control/mainpage');
        $.ajax({
            type: 'POST',
            url: 'https://www.welovetaxi.com/app/booking/getuser_control/mainpage',
            data: { 'id': $.cookie("login") },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                code_r = data[0].s_code;
                code_ref = data[0].s_code_ref;
                datauser = data;
                s_email = data[0].s_email
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
    $('.box-login-non').click(function() {
        window.location.href = base_url + "register";
    });
    $('#previous').on('click', function() {
        $('#addbook').css('display', 'none');
        $('#acceptance').prop('checked', false);
    })
    $('#acceptance').change(function() {
        if (this.checked) {
            $('#addbook').css('display', 'block');
        } else {
            $('#addbook').css('display', 'none');
            // the checkbox is now no longer checked
        }
    })

    $('#on_date').each(function() {
        // alert("qwqwqwq")
        var val = $(this).val();
        date = moment(val).toDate();
        // $('.picker__footer').html('<div class="box-cale">' +
        //     '<div class="btn-cale  lng-close">CLOSE</div>' +
        //     '</div>');



    });
    $('.btn-cale').click(function() {
        //alert('aaaa')
        var $input = $('#on_date').pickadate();
        var picker = $input.pickadate('picker');
        picker.close();


    });
    // $('#on_date').each(function() {
    // $('.picker__footer').html('<div class="box-cale">' +
    //     '<div class="btn-cale  lng-close">CLOSE</div>' +
    //     '</div>');
    // });
    $('#on_date').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
        closeOnSelect: true,
        closeOnClear: false,
        selectMonths: true,
        selectYears: true,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        }
    });
    $('#on_date2').each(function() {
        //alert("qwqwqwq")
        var val = $(this).val();
        date = moment(val).toDate();
    });
    $('#on_date2').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
        closeOnSelect: true,
        closeOnClear: false,
        selectMonths: true,
        selectYears: true,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        }
    });

    $('#acceptanceuser').change(function() {
        var urlimg = 'https://www.welovetaxi.com/app/booking/';
        if (this.checked) {
            console.log('in case user')
            console.log(datauser)
                // $('#numbercountry').append('<span id="select"><img id="imgcountry" src="' + urlimg + 'files/img/flag/icon/' + img + '.png' + '">' + '<span>(+' + x + ')' + ' ' + name + '</span></span>');
            console.log($('#email').val(datauser[0].s_email))
            $('#s_username').val(datauser[0].s_email);
            $('#email').val(datauser[0].s_username);
            $('#phone').val(+' ' + datauser[0].s_phone);
            $('#phonecode').html('+' + datauser[0].s_phone_code);
            $('#guestcountry').val(datauser[0].i_country);
            $('#name_lastname').val(datauser[0].s_first_name + ' ' + datauser[0].s_last_name);
            $('.label-floating').addClass('is-focused');
            $('#summaryphone').html('+' + datauser[0].s_phone_code + datauser[0].s_phone);
            $('#summaryemail').html(datauser[0].s_email);

        } else {
            $('#email').val('');
            $('#s_username').val('');
            $('#phone').val('');
            $('#phonecode').html('').ass;
            $('#guestcountry').val('');
            $('#name_lastname').val('');
            $('.label-floating').removeClass('is-focused');
        }
    })
    $('#btn-logout-user').click(function() {
        //alert("logout");
        $.removeCookie("login");
        window.location.reload(); //href = "https://dotdotdottrip.com/register";
    })
    $('.btn-realtime').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "?section=picuphere";
        }, 3000);


    })
    $('.btn-reservation').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "?section=search";
        }, 3000);
    })
    $('.btn-car-service').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "?section=service";
        }, 3000);
    })
    $('.btn-management').click(function() {
        $('#loading').css('display', 'block');
        setTimeout(function() {
            console.log("aaaaa")
            $('#loading').css('display', 'none');
            window.location.href = base_url + "dashboard/view_user";
        }, 3000);


    })

    console.log("readysss!");
    //console.log($.cookie("login"))
    $('#selectcar').html('1')
    var costproduct, costdotcars, type, costdotcars, pro_id, place, to_place;

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    console.log(getParameterByName('data'))
    console.log(getParameterByName('from'))
    console.log(getParameterByName('to'))
    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/getplace.php',
        data: { 'from': getParameterByName('from'), 'to': getParameterByName('to') },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data[0])
            console.log(data[1])
            $('#pickup_from').html(data[0].topic + '(' + data[0].name + ')');
            $('#pickup_to').html(data[1].topic + '(' + data[1].name + ')');
            place = data[0].id;
            to_place = data[1].id;
            place_name = data[0].topic;
            toplace_name = data[1].topic;
            adresss = data[0].address;
            adress_to = data[1].address;
            $('#placefrom').html(data[0].topic);
            $('#placeto').html(data[1].topic);
            $('#province').html(data[0].name);
            $('#province_to').html(data[1].name);



        }
    });
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://dotdotdottrip.com/getuser_control/process',
    //    // data: {'from': getParameterByName('from'),'to': getParameterByName('to')},
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) { 
    //       console.log(data)




    //     }
    // });
    $('.close').click(function() {
        $('#codecountry').hide();
    })
    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/getcountry_control/process',
        //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
                //datacountry = data;
                // $('#codecountry').modal('show');
            $.each(data, function(i, val) {
                $('#guestcountry').append('<option value="' + data[i].name_en + '" label="' + data[i].name_en + '" none=""></option>');
                //dataProvince.push(data[i])
                //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


            });

        }
    });
    $('#numbercountry').append('<span id="textcountry">' + lng_getcountry + '</span>');
    $('#code').append('<span id="textcode">code country</span>');

    // $('#datetimepicker11').datetimepicker({
    //     format: 'YYYY-MM-DD'

    //     // daysOfWeekDisabled: [0, 6]
    // });

    //$('#numbercountry').html('');

    //$('#code').html('code country')
    $('#select-country').click(function() {
        var url = 'https://www.welovetaxi.com/app/booking/';
        $('#codecountry').show(500);
        $('#select-name').html('')
        $.ajax({
            type: 'POST',
            url: url + 'getcountry_control/process',
            //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                datacountry = data;

                $.each(data, function(i, val) {

                    //alert('aaa')
                    //dataProvince.push(data[i])
                    $('#select-name').append('<li id="ct' + data[i].phonecode + '" value="' + data[i].phonecode + '" dataname ="' + data[i].name_en + '" img="' + data[i].country_code + '" onclick="sendCountry(' + data[i].phonecode + ');"><img id="imgcountry" src="' + url + 'files/img/flag/icon/' + data[i].country_code + '.png' + '">' + '<span id="span-phonecode">(' + '+' + data[i].phonecode + ')</span>' + data[i].name_en + '</li>');


                });

            }
        });
    });
    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/getDetail.php',
        data: { 'id': getParameterByName('data') },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            if (data[0].area == "Service") {
                $('.box-program').hide();
                $('.boxs-to').hide();
                $('.boxs-from').hide();
            }
            console.log(data[0].province_name_en)
            if ($.cookie("lng") == 'cn') {
                $('#cars_persion').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_cn)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'en') {
                $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_en)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'th') {
                $('#cars_persion').html(data[0].car_topic_th + data[0].pax_th)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_th)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_th + data[0].pax_th)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == undefined) {
                $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_en)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')

            }


            costproduct = data[0].cost_a;
            type = data[0].type;
            cost_a_nett = data[0].cost_a_nett;
            if (data[0].area == 'In' || data[0].area == 'Out') {
                $('.flight-box').show();

            } else {
                $('.flight-box').hide();

            }
            console.log(type)
            console.log($.cookie("lng"))
            if (data[0].type == 'Private' && data[0].area == 'In') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('到达日期:')
                    $('#texttime').html('到达时间:')
                    $('#date-final').html('到达日期:')
                    $('#time-final').html('到达时间:')
                } else if ($.cookie("lng") == 'en') {
                    $('#datetext').html('Arrival date:')
                    $('#texttime').html('Arrival time:')
                    $('#date-final').html('Arrival date:')
                    $('#time-final').html('Arrival time:')

                } else if ($.cookie("lng") == 'th') {
                    $('#datetext').html('วันที่มาถึง:')
                    $('#texttime').html('เวลาถึง:')
                    $('#date-final').html('วันที่มาถึง:')
                    $('#time-final').html('เวลาถึง:')
                } else if ($.cookie("lng") == undefined) {
                    $('#datetext').html('Arrival date:')
                    $('#texttime').html('Arrival time:')
                    $('#date-final').html('Arrival date:')
                    $('#time-final').html('Arrival time:')

                }


            }
            if (data[0].type == 'Join' && data[0].area == 'In') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html(' 到达日期:')
                    $('#texttime').html(' 到达时间:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html(' 到达日期:')
                    $('#time-final').html(' 到达时间:')

                } else if ($.cookie("lng") == 'en') {
                    $('#datetext').html('Arrival date:')
                    $('#texttime').html('Arrival time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Arrival date:')
                    $('#time-final').html('Arrival time:')


                } else if ($.cookie("lng") == 'th') {
                    $('#datetext').html('วันที่มาถึง:')
                    $('#texttime').html(' เวลาถึง:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('วันที่มาถึง:')
                    $('#time-final').html('เวลาถึง:')

                } else if ($.cookie("lng") == undefined) {
                    $('#datetext').html('Arrival date:')
                    $('#texttime').html('Arrival time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Arrival date:')
                    $('#time-final').html('Arrival time:')


                }


            }
            if (data[0].type == 'Join' && data[0].area == 'Out') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html(' 出发日期:')
                    $('#texttime').html(' 出发时间:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#box-terminal').css('display', 'block')
                    $('#date-final').html('出发日期:')
                    $('#time-final').html('出发时间:')
                } else if ($.cookie("lng") == 'en') {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#box-terminal').css('display', 'block')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')

                } else if ($.cookie("lng") == 'th') {
                    $('#datetext').html('วันเดินทาง:')
                    $('#texttime').html('เวลาออกเดินทาง:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#box-terminal').css('display', 'block')
                    $('#date-final').html('วันเดินทาง:')
                    $('#time-final').html('เวลาออกเดินทาง:')
                } else if ($.cookie("lng") == undefined) {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#box-terminal').css('display', 'block')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')

                }




            }
            if (data[0].type == 'Private' && data[0].area == 'Point') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('使用日期:')
                    $('#texttime').html('使用时间:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('使用日期:')
                    $('#time-final').html('使用时间:')

                } else if ($.cookie("lng") == 'en') {
                    $('#datetext').html('Use date:')
                    $('#texttime').html('Use time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Use date:')
                    $('#time-final').html('Use time:')


                } else if ($.cookie("lng") == 'th') {
                    $('#datetext').html('วันที่ใช้บริการ:')
                    $('#texttime').html('เวลาใช้บริการ:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('วันที่ใช้บริการ:')
                    $('#time-final').html('เวลาใช้บริการ:')

                } else if ($.cookie("lng") == undefined) {
                    $('#datetext').html('Use date:')
                    $('#texttime').html('Use time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Use date:')
                    $('#time-final').html('Use time:')


                }


            }
            if (data[0].type == 'Private' && data[0].area == 'Service') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('使用日期:')
                    $('#texttime').html('使用时间:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('使用日期:')
                    $('#time-final').html('使用时间:')

                } else if ($.cookie("lng") == 'en') {
                    $('#datetext').html('Use date:')
                    $('#texttime').html('Use time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Use date:')
                    $('#time-final').html('Use time:')


                } else if ($.cookie("lng") == 'th') {
                    $('#datetext').html('วันที่ใช้บริการ:')
                    $('#texttime').html('เวลาใช้บริการ:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('วันที่ใช้บริการ:')
                    $('#time-final').html('เวลาใช้บริการ:')

                } else if ($.cookie("lng") == undefined) {
                    $('#datetext').html('Use date:')
                    $('#texttime').html('Use time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Use date:')
                    $('#time-final').html('Use time:')


                }




            }
            if (data[0].type == 'Join' && data[0].area == 'Point') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('出发日期:')
                    $('#texttime').html('出发时间:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('出发日期:')
                    $('#time-final').html(' 出发时间:')
                } else if ($.cookie("lng") == 'en') {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')

                } else if ($.cookie("lng") == 'th') {
                    $('#datetext').html('วันเดินทาง:')
                    $('#texttime').html('เวลาออกเดินทาง:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('วันเดินทาง:')
                    $('#time-final').html('เวลาออกเดินทาง:')
                } else if ($.cookie("lng") == undefined) {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')

                }



            }
            if (data[0].type == 'Private' && data[0].area == 'Out') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('出发日期:')
                    $('#texttime').html('出发时间:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('出发日期:')
                    $('#time-final').html('出发时间:')
                    $('#box-terminal').css('display', 'block')
                } else if ($.cookie("lng") == 'en') {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')
                    $('#box-terminal').css('display', 'block')


                } else if ($.cookie("lng") == 'th') {
                    $('#datetext').html('วันเดินทาง:')
                    $('#texttime').html('เวลาออกเดินทาง:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('วันเดินทาง:')
                    $('#time-final').html('เวลาออกเดินทาง:')
                    $('#box-terminal').css('display', 'block')

                } else if ($.cookie("lng") == undefined) {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')
                    $('#box-terminal').css('display', 'block')


                }




            }

            pro_id = data[0].transfer_id;
            person = data[0].person;
            checksumperson = person;
            program_name = data[0].topic_en;
            area = data[0].area;
            car_model = data[0].car_model;
            code = data[0].code;
            console.log(code)
            $('#checksum').html(checksumperson)
            console.log(data[0].transfer_icon)
            $('#images-icon').append('<img src="http://t-booking.com/pic/carmodelicon/' + data[0].transfer_icon + '.jpg" id="box-image">');




        }
    });


    // $('#num_cars').on('click', function() {
    //     $('#num_cars').html('')
    for (var i = 1; i <= 5; i++) {
        console.log(i)
        $('#num_cars').append('<option value="' + i + '" label="' + i + '"></option>');
        //dataProvince.push(data[i])
        //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


    }
    // })
    $('#num_cars').on('change', function() {
        //$('#num_cars').html('');
        console.log('aaaaa')
            //var data = 5;
            //console.log(data)
            // for (var i = 1; i <= 5; i++) {
            //     $('#num_cars').append('<option value="' + i + '" label="' + i + '" none=""></option>');
            //     //dataProvince.push(data[i])
            //     //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


        // }
        // for (var i = 0; i <= 5; i++) {
        //     console.log(i)
        //     $('#num_cars').append('<option value=' + i + '>' + i + '</option>')
        // }

        num_cars = this.value;
        if (type != 'Join') {
            $('#numsumprice').html(parseInt(costproduct) * parseInt(num_cars) + ' ' + '฿')
        }




        $('#selectcar').html(this.value)
        selectcar = this.value;

        checksumperson = parseInt(person) * parseInt(selectcar)
        $('#checksum').html(checksumperson)
        console.log('sumperson-' + checksumperson)
        $('#carsummary').html(selectcar)
        $('#costproduct').html(costproduct + ' ' + '฿')
        if (type != 'Join') {
            costdotcars = parseInt(costproduct) * parseInt(selectcar);

            $('#totalprice').html(costdotcars + ' ' + '฿')

            $('#costsummary').html(costdotcars + ' ' + '฿')

        }



    });
    $('#visa').on('change', function() {
        visa = this.value;
        console.log(visa)
        if (type != 'Join') {
            //$('#numsumprice').html(parseInt(costproduct)*parseInt(num_cars)+' '+ '฿')
        }
    });
    $('#guestcountry').on('change', function() {
        namecountry = this.value;
        console.log(namecountry)

    });
    $('#num_adult').on('change', function() {
        num_adult = this.value;
        ondate = $('#on_date').val();
        $('#ondate_samary').html(ondate)
        $('#adultsummary').html(num_adult)
        $('#childsummary').html(num_child)
        total_adult = parseInt(costproduct) * parseInt(num_adult);
        total_price = parseInt(total_adult) + parseInt(total_child);
        sum_adult_child = parseInt(num_adult) + parseInt(num_child);
        console.log(sum_adult_child)
        console.log(checksumperson)
        console.log(sum_adult_child / parseInt(person));
        var s = sum_adult_child / parseInt(person);
        if (sum_adult_child <= parseInt(person)) {
            selectcar = 1;
        }
        if (sum_adult_child > parseInt(person) && (checksumperson != sum_adult_child)) {
            selectcar = parseInt(s) + 1;

        }
        if ((parseInt(s) * parseInt(person)) == sum_adult_child) {
            selectcar = parseInt(s);

        }
        // if(sum_adult_child  parseInt(person)){

        // }
        //if (checksumperson < sum_adult_child) {
        // var s = sum_adult_child / parseInt(person);
        //selectcar = parseInt(s) + 1;
        console.log(selectcar)
        checksumperson = parseInt(person) * parseInt(selectcar)
        console.log('sumperson-' + checksumperson)

        total_price = parseInt(costproduct) * parseInt(selectcar);

        //} 
        //else if (checksumperson >= sum_adult_child) {
        //     if (sum_adult_child == parseInt(person)) {
        //         selectcar = 1;
        //     } else {
        //         selectcar = parseInt(s);

        //     }
        //     checksumperson = parseInt(person) * parseInt(selectcar)
        //     console.log('sumperson2-' + checksumperson)

        //     total_price = parseInt(costproduct) * parseInt(selectcar);
        // }
        if (type == 'Join') {
            total_price = parseInt(costproduct) * parseInt(sum_adult_child);
            $('#numsumprice').html(total_price + ' ' + '฿')
            $('#totalprice').html(total_price + ' ' + '฿')
                //costdotcars = parseInt(costproduct)*(parseInt(sum_adult_child));

        } else {
            $('#sumnum').html(parseInt(sum_adult_child));
            $('#totalprice').html(total_price + ' ' + '฿')
            $('#selectcar').html(selectcar)
            $('#num_cars').html('')
            $('#num_cars').append('<option value="' + selectcar + '" label="' + selectcar + '" none=""></option>');
            for (var i = 1; i <= 5; i++) {
                console.log(i)
                $('#num_cars').append('<option value="' + i + '" label="' + i + '"></option>');
                //dataProvince.push(data[i])
                //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


            }
            $('#checksum').html(checksumperson)
            $('#numsumprice').html(total_price + ' ' + '฿')
        }
        //alert( this.value );
    })
    $('#num_child').on('change', function() {
        num_child = this.value;
        ondate = $('#on_date').val();

        $('#ondate_samary').html(ondate)
        $('#childsummary').html(num_child)
        total_child = parseInt(costproduct) * parseInt(num_child);
        total_price = parseInt(total_adult) + parseInt(total_child);
        sum_adult_child = parseInt(num_adult) + parseInt(num_child);
        console.log(sum_adult_child)
        console.log(checksumperson)
        console.log(sum_adult_child / parseInt(person));
        var s = sum_adult_child / parseInt(person);

        if (sum_adult_child <= parseInt(person)) {
            selectcar = 1;
        }
        if (sum_adult_child > parseInt(person) && (checksumperson != sum_adult_child)) {
            selectcar = parseInt(s) + 1;

        }
        if ((parseInt(s) * parseInt(person)) == sum_adult_child) {
            selectcar = parseInt(s);

        }

        // if (checksumperson < sum_adult_child) {
        //     selectcar = parseInt(s) + 1;
        //     console.log(selectcar)

        //     checksumperson = parseInt(person) * parseInt(selectcar)
        //     console.log('sumperson-' + checksumperson)

        //     total_price = parseInt(costproduct) * parseInt(selectcar);
        // }
        //if (checksumperson >= sum_adult_child) {
        // if (sum_adult_child == parseInt(person)) {
        //     selectcar = 1;
        // } else {
        //     selectcar = parseInt(s);

        // }
        checksumperson = parseInt(person) * parseInt(selectcar)
        console.log('sumperson2-' + checksumperson)

        total_price = parseInt(costproduct) * parseInt(selectcar);
        // }



        if (type == 'Join') {
            total_price = parseInt(costproduct) * parseInt(sum_adult_child);
            costdotcars = parseInt(costproduct) * (parseInt(num_adult) + parseInt(num_child));
            $('#totalprice').html(total_price + ' ' + '฿')
            $('#numsumprice').html(total_price + ' ' + '฿')


        } else {
            $('#sumnum').html(parseInt(sum_adult_child));
            $('#selectcar').html(selectcar)
            $('#checksum').html(checksumperson)
            $('#numsumprice').html(parseInt(costproduct) * parseInt(selectcar) + ' ' + '฿')

        }

    })
    $('#on_date').on('change', function() {


    })
    $('#time_h').on('change', function() {
        time_h = this.value;
        ontime = time_h + ':' + time_m
        $('#ontime_samary').html(ontime)



    })
    $('#time_m').on('change', function() {
        time_m = this.value;
        ontime = time_h + ':' + time_m
        $('#ontime_samary').html(ontime)

    })
    $('#name_lastname').on('change', function() {
            name = this.value;
            console.log(name)
                // alert(this.value)
            $('#summaryname').html(name)

        })
        // $('#lname').on('change', function() {
        //     lname = this.value ;
        //     console.log(lname)

    // })
    // $('#fname').on('change', function() {
    //     lname = this.value ;
    //     console.log(lname)


    // })
    $('#phone').on('change', function() {
        phone = this.value;
        phonecode = $.cookie("phonecode");
        console.log(phonecode)
        $('#summaryphone').html('+' + phonecode + phone);


    })
    $('#email').on('change', function() {
        email = this.value;
        console.log(email)
        $('#summaryemail').html(email)
        s_email = email;



    })
    $('#other').on('change', function() {
        other = this.value;
        console.log(other)
        $('#summaryother').html(other)



    })
    $('#flight').on('change', function() {
            flight = this.value;
            console.log(flight)
            $('#textflight').html(flight)



        })
        // $('#numbercountry').on('click', function() {
        //     //alert("aaaa");
        //     $('#codecountry').modal('show');
        // });
    $('.btn-close').on('click', function() {
        $('#waning-flight').hide(500);
    });
    $('#addbook').on('click', function() {
        $('.loader-wrapper').css('display', 'block')

        //$('#codecountry').modal('show');
        // $.each(datacountry , function(i, val) {
        //    if ($.cookie("phonecode") == datacountry[i].phonecode) {
        //       namecountry = datacountry[i].name_en;
        //    }
        //  });
        var data;
        console.log(code)
        console.log(namecountry)
        console.log(num_cars)
        console.log(selectcar)
        console.log(num_adult)
        console.log(num_child)
        console.log(ondate)
        console.log(ontime)
        console.log(time_h)
        console.log(time_m)
        console.log(name)
        console.log(phone)
        console.log($.cookie("phonecode"))
        console.log(other)
        console.log(email)
        console.log(place)
        console.log(to_place)
        console.log(costdotcars)
        console.log(code_r + 'code')
        console.log(code_ref + 'code_ref');
        console.log(area)
        console.log(cost_a_nett)
        var url2 = 'https://welovetaxi.com/app/booking/';

        console.log(flight)
        if ((area == 'In' || area == 'Out') && flight == undefined) {

            $('#waning-flight').fadeIn(500);
            //alert("aaaa");


        } else {
            $.ajax({
                type: 'POST',
                url: url + 'savebook_control/process',
                data: {
                    'from': getParameterByName('from'),
                    'to': getParameterByName('to'),
                    'numcar': num_cars,
                    'program': getParameterByName('data'),
                    'adult': num_adult,
                    'child': num_child,
                    'onndate': ondate,
                    'ontime': ontime,
                    'name': name,
                    'phone': phone,
                    'phonecode': $.cookie("phonecode"),
                    'email': email,
                    'cost': total_price,
                    'other': other,
                    'guest_other': namecountry,
                    'arrival_flight': flight,
                    'visa': visa,
                    'code': code_r,
                    'code_ref': code_ref,
                    'cost_a_nett': cost_a_nett

                },
                // contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $('.loader-wrapper').css('display', 'none')
                    if (type == 'Join') {
                        if (area == 'Point' || area == 'In') {
                            var param = {
                                "agent_ref": data,
                                "guest_english": name,
                                "guest_other": namecountry,
                                "phone": '+' + $.cookie("phonecode") + phone,
                                "email": email,
                                "social_wechat": "",
                                "social_qq": "",
                                "social_wangwang": "",
                                "social_line": "",
                                "social_skype": "",
                                "social_whatapp": "",
                                "social_facebook": "",
                                "product": code,
                                "arrival_date": ondate,
                                "arrival_time": ontime,
                                "arrival_flight": flight,
                                "arrival_visa": 0,
                                "total_pax": sum_adult_child,
                                "baggage": 0,
                                "to_place": toplace_name,
                                "to_place_address": adress_to,
                                "remark": other,
                                "type": type,
                                "area": area,
                                'code': code_r,
                                'code_ref': code_ref,
                                'cost_a_nett': cost_a_nett


                            };
                        }

                    }
                    if (type == 'Join') {
                        if (area == 'Out') {
                            var param = {
                                "agent_ref": data,
                                "guest_english": name,
                                "guest_other": namecountry,
                                "phone": '+' + $.cookie("phonecode") + phone,
                                "email": email,
                                "social_wechat": "",
                                "social_qq": "",
                                "social_wangwang": "",
                                "social_line": "",
                                "social_skype": "",
                                "social_whatapp": "",
                                "social_facebook": "",
                                "product": code,
                                "departure_date": ondate,
                                "departure_time": ontime,
                                "departure_flight": flight,
                                "departure_terminal": terminal,
                                "total_pax": sum_adult_child,
                                "baggage": "3",
                                "pickup_place": place_name,
                                "pickup_place_address": adresss,
                                "service_time": ontime,
                                "remark": other,
                                "type": type,
                                "area": area,
                                'code': code_r,
                                'code_ref': code_ref,
                                'cost_a_nett': cost_a_nett


                            };
                        }
                    }
                    if (type == 'Private') {
                        if (area == 'In') {
                            var param = {
                                "agent_ref": data,
                                "guest_english": name,
                                "guest_other": namecountry,
                                "phone": '+' + $.cookie("phonecode") + phone,
                                "email": email,
                                "social_wechat": "",
                                "social_qq": "",
                                "social_wangwang": "",
                                "social_line": "",
                                "social_skype": "",
                                "social_whatapp": "",
                                "social_facebook": "",
                                "product": code,
                                "arrival_date": ondate,
                                "arrival_time": ontime,
                                "arrival_flight": flight,
                                "total_pax": sum_adult_child,
                                "baggage": "",
                                "to_place": toplace_name,
                                "to_place_address": adress_to,
                                "number_car": num_cars,
                                "remark": other,
                                "type": type,
                                "area": area,
                                'visa': visa,
                                'code': code_r,
                                'code_ref': code_ref,
                                'cost_a_nett': cost_a_nett



                            };
                        }
                    }
                    if (type == 'Private') {
                        if (area == 'Out') {
                            var param = {
                                "agent_ref": data,
                                "guest_english": name,
                                "guest_other": namecountry,
                                "phone": '+' + $.cookie("phonecode") + phone,
                                "email": email,
                                "social_wechat": "",
                                "social_qq": "",
                                "social_wangwang": "",
                                "social_line": "",
                                "social_skype": "",
                                "social_whatapp": "",
                                "social_facebook": "",
                                "product": code,
                                "departure_date": ondate,
                                "departure_time": ontime,
                                "departure_flight": flight,
                                "departure_terminal": terminal,
                                "total_pax": sum_adult_child,
                                "baggage": "",
                                "pickup_place": place_name,
                                "pickup_place_address": adresss,
                                "service_time": service,
                                "number_car": num_cars,
                                "remark": other,
                                "type": type,
                                "area": area,
                                'code': code_r,
                                'code_ref': code_ref,
                                'cost_a_nett': cost_a_nett


                            };
                        }
                    }
                    if (type == 'Point To Point') {

                        var param = {
                            "agent_ref": data,
                            "guest_english": name,
                            "guest_other": namecountry,
                            "phone": '+' + $.cookie("phonecode") + phone,

                            "email": email,
                            "social_wechat": "",
                            "social_qq": "",
                            "social_wangwang": "",
                            "social_line": "",
                            "social_skype": "",
                            "social_whatapp": "",
                            "social_facebook": "",
                            "product": code,
                            "service_date": ondate,
                            "service_time": ontime,
                            "total_pax": sum_adult_child,
                            "number_car": num_cars,
                            "pickup_place": place_name,
                            "to_place": toplace_name,
                            "remark": other,
                            "type": type,
                            "area": area,
                            'code': code_r,
                            'code_ref': code_ref,
                            'cost_a_nett': cost_a_nett







                        };

                    }
                    if (type == 'Private' && area == 'Service') {

                        var param = {
                            "agent_ref": data,
                            "guest_english": name,
                            "guest_other": namecountry,
                            "phone": '+' + $.cookie("phonecode") + phone,
                            "email": email,
                            "social_wechat": "",
                            "social_qq": "",
                            "social_wangwang": "",
                            "social_line": "",
                            "social_skype": "",
                            "social_whatapp": "",
                            "social_facebook": "",
                            "product": code,
                            "service_date": ondate,
                            "service_time": ontime,
                            "total_pax": sum_adult_child,
                            "number_car": num_cars,
                            "pickup_place": place_name,
                            "pickup_place_address": adresss,
                            "to_place": toplace_name,
                            "to_place_address": adress_to,
                            "car_use_plan": "",
                            "remark": other,
                            "type": type,
                            "area": area,
                            'code': code_r,
                            'code_ref': code_ref,
                            'cost_a_nett': cost_a_nett







                        };

                    }
                    if (type == 'Private' && area == 'Point') {

                        var param = {
                            "agent_ref": data,
                            "guest_english": name,
                            "guest_other": namecountry,
                            "phone": '+' + $.cookie("phonecode") + phone,
                            "email": email,
                            "product": code,
                            "service_date": ondate,
                            "service_time": ontime,
                            "departure_terminal": terminal,
                            "total_pax": sum_adult_child,
                            "social_wechat": "",
                            "social_qq": "",
                            "social_wangwang": "",
                            "social_line": "",
                            "social_skype": "",
                            "social_whatapp": "",
                            "social_facebook": "",
                            "pickup_place": place_name,
                            "pickup_place_address": adresss,
                            "to_place": toplace_name,
                            "to_place_address": adress_to,
                            "number_car": num_cars,
                            "remark": other,
                            "type": type,
                            "area": area,
                            'code': code_r,
                            'code_ref': code_ref,
                            'cost_a_nett': cost_a_nett







                        };

                    }
                    console.log(param)
                    $.ajax({
                        type: 'POST',
                        url: base_url + 'savebook_control/saveapi',
                        data: param,
                        //contentType: "application/json",
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            console.log(s_email);
                            if (data.status == 202) {
                                $.ajax({
                                    type: 'POST',
                                    url: url + 'sendemail.php',
                                    data: { 'mail': s_email, 'voucher': data.invoice },
                                    //contentType: "application/json",
                                    dataType: 'json',
                                    success: function(data) {
                                        console.log(data);
                                        //console.log(s_email);



                                    }
                                });

                            } else {
                                alert("please input data ");
                            }
                            window.location.href = url + "dashboard/view_user";

                        }
                    });

                }
            });
        }




    });

    function phonecodesend(x) {
        phonecode = x;
        console.log(phonecode)
    }
});

function sendCountry(x) {
    var url = 'https://welovetaxi.com/app/booking/';
    console.log(x)
    if (x == undefined) {
        $.cookie("phonecode", '');
        x = '';
    } else {
        $.cookie("phonecode", x);
    }

    $('#codecountry').hide();
    var name = $('#ct' + x).attr('dataname');
    var img = $('#ct' + x).attr('img');
    //$('#code').html(x)
    console.log(name);
    //phonecodesend(x);
    $('#textcountry').remove();
    $('#textcode').remove();

    $('#select').remove();
    $('#codetext').remove();
    $('#numbercountry').append('<span id="select"><img id="imgcountry" src="' + url + 'files/img/flag/icon/' + img + '.png' + '">' + '<span>(+' + x + ')' + ' ' + name + '</span></span>');
    $('#phonecode').append('<span id="codetext">' + '+' + x + '</span>');
    //$('#numbercountry').val('(+'+x+')'+' '+name);
}

// function selectcars(x){
//     console.log(x)
//    }