var area, namecountry, datacountry, program_name, num_cars = 1,
selectcar = 1,
num_adult = 1,
num_child = 0,
ondate,
ontime, time_h = '00',
time_m = '00',
name, phone, phonecode,
other = '', total_adult = 0,
total_child = 0,
total_price = 0,
person = 0,
sum_adult_child = num_adult + num_child,
checksumperson = 0,
place_name, toplace_name, adress, adress_to, terminal, car_model,
service, code, visa = 0, guestcountry, datauser,
code_r, code_ref, s_email,
flight, cost_a_nett, lng_getcountry = '', adresss,newDate = '',getcosereltime = 0;
var data, from, to;
var Checkacceptance = false;
var ckgetuser = false;
var base_url = 'https://www.welovetaxi.com/app/booking/';
var getemail,getphone ,b_from,b_to,b_lat_f,b_lng_f,b_lat_t,b_lng_t,b_fashion,b_data,costdotcars  ;
var costproduct, costdotcars, type, costdotcars, pro_id, place, to_place,lang_to_map,getnewdate;

$(document).ready(function() {
   
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
    
    

    if ($.cookie("lng") == 'cn') {
        lng_getcountry = '请选择国家';
        $('.terms-of-use').html('<span>' +
            '<B>一. </B> 请注意，黄色或者绿色车牌为合法运营车辆。如看到其他颜色牌照可拒绝上车，并请联系我们热线。<br /><br />' +
            '<B>二. </B> 上⻋车请系好安全带，不然如遇警察检查需自己付罚款，如有意外保险⽆无法赔偿。<br /><br />' +
            '<B>三. </B> 上下车请保管好自己的物品。如有遗失，概不负责。<br /><br />' +
            '<B>四. </B> 如发生司机由于不可抗力因素未接到，在约定时间后5-15分钟内，请客人及时联系我们的24小时中文热线，如等待超过30分钟，请客人需及时自行打车离开！<br /><br />' +
            '我们会退还订单费用，如客人有打车凭证提供，我们将补偿打车费用，但是其他费用一律不负责赔偿，请知晓！</span>');
    } else if ($.cookie("lng") == 'en') {
        lng_getcountry = 'Please select country';
        $('.terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');

    } else if ($.cookie("lng") == 'th') {
        lng_getcountry = 'โปรดเลือกประเทศ';
        $('.terms-of-use').html('<span >' +
            '<B>1.</B> โปรดทราบว่ามีเพียงแผ่นป้ายทะเบียนรถสีเขียวหรือสีเหลืองเท่านั้นที่ใช้เป็นยานพาหนะขนส่งสาธารณะที่ถูกต้องตามกฎหมาย หากคุณเห็นป้ายทะเบียนรถเป็นสีอื่น คุณสามารถปฏิเสธการโดยสารได้ และโปรดติดต่อสายด่วนของเรา<br /><br />' +
            '<B >2.</B> กรุณาคาดเข็มขัดนิรภัย มิฉะนั้นในกรณีที่มีการเรียกตรวจสอบจากตำรวจ คุณต้องต้องจ่ายค่าปรับเอง และในกรณีที่เกิดอุบัติเหตุ คุณจะไม่สามารถได้รับค่าชดเชยจากบริษัทประกันภัย<br /><br />' +
            '<B>3.</B> โปรดตรวจสอบทรัพย์สินของคุณก่อนที่รถจะออกเดินทางหรือรถถึงที่หมาย เราจะไม่รับผิดชอบต่อความสูญเสียในกรณีใดๆ ทั้งสิ้น<br /><br />' +
            '<B>4.</B> ในกรณีที่มีเหตุสุดวิสัยคนขับไม่ได้รับรอเกิน 5-15 นาทีจากเวลาที่ตกลงกัน โปรดติดต่อศูนย์บริการตลอด 24 ชั่วโมงสายด่วนทันที ถ้ารอคอยมากกว่า 30 นาที กรุณาเรียกรถเอง! เราจะคืนเงินให้ท่าน100%ในการจอง และจะคืนเงินที่ท่านเรียกรถ (แต่ต้องมีหลักฐานใบเสร็จหรือรูปยืนยัน) แต่จะไม่รับผิดชอบค่าเสียหายอื่น  โปรดทราบ!</span> ');

    } else if ($.cookie("lng") == undefined) {
        $('.terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');
        lng_getcountry = 'Please select country';


    }

    $('#sumnum').html(parseInt(sum_adult_child));
    getnewdate = new Date();
    console.log(getnewdate.getDate())
    console.log(getnewdate.getMonth())
    console.log(getnewdate.getFullYear())
    console.log(getnewdate.getMonth()+1)
    newmonth = getnewdate.getMonth()+1;
    newDate = getnewdate.getFullYear()+'-'+newmonth +'-'+getnewdate.getDate();
    console.log(newDate)
    $('#Rondatetext').html(newDate)

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
        
        $('#acceptancecheck').hide();
        
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

    $('#previous').on('click', function() {
        $('#addbook').css('display', 'none');
        $('#acceptance').prop('checked', false);
    })
    $('#acceptance').change(function() {
        if (this.checked) {
            Checkacceptance = true;
            // $('#addbook').css('display', 'block');
        } else {
            Checkacceptance = false;
            
            // $('#addbook').css('display', 'none');
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
   
    var getemail, getphone;
    $('#acceptanceuser').change(function() {
        if ($.cookie("login") != undefined) {

            $('#name_lastname').css('border','1px solid #dfdfdf')
            $('#phone').css('border','1px solid #dfdfdf')
            $('#email').css('border','1px solid #dfdfdf')
            ckgetuser = true;
            var urlimg = 'https://www.welovetaxi.com/app/booking/';
            if (this.checked) {
                console.log('in case user')
                console.log(datauser)
                $.ajax({
                    type: 'POST',
                    url: 'https://www.welovetaxi.com/app/booking/getcountry_control/getcountry_by_id',
                    data: { 'id': datauser[0].i_country },
                    //contentType: "application/json",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)
                        $('#phonecode').html('+'+data[0].phonecode)
                        if ($.cookie("lng") == 'cn') {
                        $('#select-country').html(data[0].name_cn)
                        
                           
                        } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                        $('#select-country').html(data[0].name_en)
                        
                    
                        } else if ($.cookie("lng") == 'th') {
                        $('#select-country').html(data[0].name_th)
                        
                    
                        } 
                    }
                });
                    // $('#numbercountry').append('<span id="select"><img id="imgcountry" src="' + urlimg + 'files/img/flag/icon/' + img + '.png' + '">' + '<span>(+' + x + ')' + ' ' + name + '</span></span>');
                console.log($('#email').val(datauser[0].s_email))
                getemail = datauser[0].s_email;
                getphone = datauser[0].s_phone;
                $('#s_username').val(datauser[0].s_email);
                $('#email').val(datauser[0].s_username);
                $('#phone').val(' ' + datauser[0].s_phone);
                // $('#phonecode').html(datauser[0].s_phone_code);
                // $('#guestcountry').val(datauser[0].i_country);
                
                $('#name_lastname').val(datauser[0].s_first_name + ' ' + datauser[0].s_last_name);
                $('.label-floating').addClass('is-focused');
                $('#summaryphone').html('+' + datauser[0].s_phone_code + datauser[0].s_phone);
                $('#summaryemail').html(datauser[0].s_email);

            } else {
                ckgetuser = false;
                $('#email').val('');
                $('#s_username').val('');
                $('#phone').val('');
                $('#phonecode').html('').ass;
                $('#guestcountry').val('');
                $('#name_lastname').val('');
                $('.label-floating').removeClass('is-focused');
                $('#phonecode').html('')
                if ($.cookie("lng") == 'cn') {
                    $('#select-country').html('请选择国家')
                    
                       
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                        $('#select-country').html('Please select country')
                    
                
                } else if ($.cookie("lng") == 'th') {
                        $('#select-country').html('โปรดเลือกประเทศ');
                    
                
                } 
                
               
            }
        } else {
            console.log(this.checked)
            if (this.checked == false) {
                //alert('false')
                $('#pleselogin').hide()
            } else {
                // alert('true')
                $('#pleselogin').show()

            }
        }

    })
    // $('#btn-logout-user').click(function() {
    //     //alert("logout");
        
    //         if ($.cookie("lng") == "en") {
    //         var title_logout = "Logout ?";
    //         var text_logout = "Do you want to logout?";
    //         var yes = "Yes";
    //         var cancel = "Cancel"
    //     } else if ($.cookie("lng") == "cn") {
    //         var title_logout = "登出 ?";
    //         var text_logout = "您需要注销 ?";
    //         var yes = "是";
    //         var cancel = "取消";
    //     } else if ($.cookie("lng") == "th") {
    //         var title_logout = "ออกจากระบบ ?";
    //         var text_logout = "คุณต้องการออกจากระบบหรือไม่?";
    //         var yes = "ใช่";
    //         var cancel = "ยกเลิก";
    //     } else if ($.cookie("lng") == undefined) {
    //         var title_logout = "Logout ?";
    //         var text_logout = "Do you want to logout?";
    //         var yes = "Yes";
    //         var cancel = "Cancel";
    //     }
    //         swal({
    //                 title: '' + title_logout + '',
    //                 text: '' + text_logout + '',
    //                 type: "warning",
    //                 showCancelButton: true,
    //                 confirmButtonClass: "btn-danger",
    //                 confirmButtonText: yes,
    //                 cancelButtonText: cancel,
    //                 closeOnConfirm: false
    //             },
    //             function() {
    //                 console.log('logout');
    //                 $.removeCookie("login");
    
    //     window.location.reload(); //href = "https://dotdotdottrip.com/register";
    //     // window.location.href = base_url + "register";
    
    //             });
    //         /* console.log('logout')
    //          $.removeCookie("login");
    //          window.location.href = base_url + "register";*/
        
    //     // $.removeCookie("login");
    // })
    // $('.btn-realtime').click(function() {
    //     $('#loading').css('display', 'block');
    //     setTimeout(function() {
    //         console.log("aaaaa")
    //         $('#loading').css('display', 'none');
    //         window.location.href = base_url + "?section=realtime";
    //     }, 3000);


    // })
    // $('.btn-reservation').click(function() {
    //     $('#loading').css('display', 'block');
    //     setTimeout(function() {
    //         console.log("aaaaa")
    //         $('#loading').css('display', 'none');
    //         window.location.href = base_url + "?section=reservation";
    //     }, 3000);
    // })
    // $('.btn-car-service').click(function() {
    //     $('#loading').css('display', 'block');
    //     setTimeout(function() {
    //         console.log("aaaaa")
    //         $('#loading').css('display', 'none');
    //         window.location.href = base_url + "?section=service";
    //     }, 3000);
    // })
    // $('.btn-management').click(function() {
    //     $('#loading').css('display', 'block');
    //     setTimeout(function() {
    //         console.log("aaaaa")
    //         $('#loading').css('display', 'none');
    //         window.location.href = base_url + "dashboard/view_user";
    //     }, 3000);


    // })

    console.log("readysss!");
    //console.log($.cookie("login"))
    $('#selectcar').html('1')
   

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    // if ($.cookie("lng") == 'cn') {
    //     lang_to_map = 'zh-CN';
    //     // document.getElementById("current").value = "你的位置...";
    // } else if ($.cookie("lng") == 'th') {
    //     lang_to_map = 'th';
    // } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
       
    //     lang_to_map = 'en';
       
    // }
    // console.log(b_data)
    // console.log(b_from)
    // console.log(b_to)
    // console.log(b_lat_f)
    // console.log(b_lng_f)
    // console.log(b_lat_t)
    // console.log(b_lng_t)
    // console.log(b_fashion)
    // var data = b_data;
    // var from = b_from;
    // var to = b_to;
    // url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + b_lat_f + ',' + b_lng_f + '&sensor=true&language=' + lang_to_map;
    
    //             $.post(url, function(data) {
    //                 console.log(data);
    //                 $('#placefrom').html(data.results[0].formatted_address)
    //                 // infowindow.close();
    //                 // infowindow.setContent('<div id="setmap">' + data.results[0].formatted_address + '</div> <input id="changesetname1" name="changesetname1" onchange="changesetname2(changesetname1)" placeholder="'+set_name+'" type="text" style=""  ><input id="changesetphone2" name="changesetphone2" onchange="changesetphone2(changesetphone2)" placeholder="'+phoneplace+'" type="text" style=""  ><div class="btn btn-sm ' + btn_color + ' pull-right btn-part" border-radius: 25px;style="display: inline-block;" onclick="savePlaceOften(' + type_call + ',' + lat_f + ',' + lng_f + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">' + txt_save + '</div>');
    //                 // infowindow.open(map, markerPlaceOfften);
    //                 //$('#often-input2').show(500);
    // //<div class="btn btn-sm Klsetname" onclick="Klsetname();" style="display: inline-block;background: rgb(22, 179, 177);">' + set_name + '</div>
    // url2 = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + b_lat_t + ',' + b_lng_t + '&sensor=true&language=' + lang_to_map;
    
    //             $.post(url2, function(data) {
    //                 console.log(data);
    //                 $('#placeto').html(data.results[0].formatted_address)
    //                 // infowindow.close();
    //                 // infowindow.setContent('<div id="setmap">' + data.results[0].formatted_address + '</div> <input id="changesetname1" name="changesetname1" onchange="changesetname2(changesetname1)" placeholder="'+set_name+'" type="text" style=""  ><input id="changesetphone2" name="changesetphone2" onchange="changesetphone2(changesetphone2)" placeholder="'+phoneplace+'" type="text" style=""  ><div class="btn btn-sm ' + btn_color + ' pull-right btn-part" border-radius: 25px;style="display: inline-block;" onclick="savePlaceOften(' + type_call + ',' + lat_f + ',' + lng_f + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">' + txt_save + '</div>');
    //                 // infowindow.open(map, markerPlaceOfften);
    //                 //$('#often-input2').show(500);
    // //<div class="btn btn-sm Klsetname" onclick="Klsetname();" style="display: inline-block;background: rgb(22, 179, 177);">' + set_name + '</div>
    
    //             });
    //             });
               
    // if(b_fashion == 'Realtime'){
    //     $('#car-show').hide();
    //     $('#select_date').hide();
    //     // $('#select_date').disabled = true;
    //     $('#selece_time').hide()
    //     $('#select_adult_child').hide()
        
    //     $('.box-list-cars ').hide()
    //     $('#Rondatetext ').show()
    //     $('#visa-show ').hide();
    //     $('#box_price ').hide();
    //     $('.btn-realtime').css({ 'background': '#3b5998', 'color': '#ffffff' });
        
        
    //                 $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
    //                 $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
    //                 $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
    //                 $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#333' });
        
        
        
    // }
    // else if(b_fashion == 'Reservation'){
    //     $('.btn-reservation').css({ 'background': '#3b5998', 'color': '#ffffff' });
        
        
    //                 $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
    //                 $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
    //                 $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
    //                 $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#333' });
    //     $('#Rondate').hide()
    //     $('#Rondatetext ').hide()
        
    // }
    // else{
    //     $('.btn-car-service').css({ 'background': '#3b5998', 'color': '#ffffff' });        
    //     // $('.btn-car-service').css('color', '#16B3B1');        
    //     $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
    //     $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
    //     $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
    //     $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
    //     $('#Rondate').hide()
    //     $('#Rondatetext ').hide() 
    // }

    $('.box-login-non').click(function() {



        console.log(data + " " + from + " " + to);
        window.location.href = "https://www.welovetaxi.com/app/booking/register?by=book&data=" + data + "&from=" + from + "&to=" + to + "&lat_f=" + b_lat_f+ "&lng_f=" + b_lng_f+ "&lat_t=" + b_lat_t+ "&lng_t=" + b_lng_t + "&book=" + b_fashion;

    });

    
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://dotdotdottrip.com/getuser_control/process',
    //    // data: {'from': b_from,'to': b_to},
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) { 
    //       console.log(data)




    //     }
    // });
    $('.btn_back_book').click(function() {
        $('#get_html_book').hide()
        $('#box-image').remove()
        
    })
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://www.welovetaxi.com/app/booking/getcountry_control/process',
    //     //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data)
    //             //datacountry = data;
    //             // $('#codecountry').modal('show');
    //         $.each(data, function(i, val) {
    //             $('#guestcountry').append('<option value="' + data[i].name_en + '" label="' + data[i].name_en + '" none=""></option>');
    //             //dataProvince.push(data[i])
    //             //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


    //         });

    //     }
    // });
    // $('#numbercountry').append('<span id="textcountry">' + lng_getcountry + '</span>');
    // $('#code').append('<span id="textcode">code country</span>');

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
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://www.welovetaxi.com/app/booking/service/getDetail.php',
    //     data: { 'id': b_data },
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data)
    //         getcosereltime = data[0].cost_a_sell;
    //         if (data[0].area == "Service") {
    //             $('.box-program').hide();
    //             $('.boxs-to').hide();
    //             $('.boxs-from').hide();
    //         }
    //         console.log(data[0].province_name_en)
    //         if ($.cookie("lng") == 'cn') {
    //             if(data[0].area == 'Service_day' || data[0].area == 'Service'){
    //                 $('#province').html(data[0].province_name_cn);
    //                 $('#province_to').html(data[0].province_name_to_cn);
    //             }
    //             $('#province').html(data[0].province_name_cn);
    //             $('#province_to').html(data[0].province_name_to_cn);

    //             $('#cars_persion').html(data[0].car_topic_cn + data[0].pax_cn)
    //             $('#price').html(data[0].cost_a + ' ' + '฿')
    //             $('#product').html(data[0].topic_cn)
    //             $('#name_product').html(data[0].topic_car)
    //             $('#cars_type').html(data[0].car_topic_cn + data[0].pax_cn)
    //             $('#costsummary').html(data[0].cost_a + ' ' + '฿')
    //             $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
    //         } else if ($.cookie("lng") == 'en') {
    //             if(data[0].area == 'Service_day' || data[0].area == 'Service'){
    //                 $('#province').html(data[0].province_name_en);
    //                 $('#province_to').html(data[0].province_name_to_en);
    //             }
                

    //             $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
    //             $('#price').html(data[0].cost_a + ' ' + '฿')
    //             $('#product').html(data[0].topic_en)
    //             $('#name_product').html(data[0].topic_car)
    //             $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
    //             $('#costsummary').html(data[0].cost_a + ' ' + '฿')
    //             $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
    //         } else if ($.cookie("lng") == 'th') {
    //             if(data[0].area == 'Service_day' || data[0].area == 'Service'){
    //                 $('#province').html(data[0].province_name_th);
    //                 $('#province_to').html(data[0].province_name_to_th);
    //             }
                
    //             $('#cars_persion').html(data[0].car_topic_th + data[0].pax_th)
    //             $('#price').html(data[0].cost_a + ' ' + '฿')
    //             $('#product').html(data[0].topic_th)
    //             $('#name_product').html(data[0].topic_car)
    //             $('#cars_type').html(data[0].car_topic_th + data[0].pax_th)
    //             $('#costsummary').html(data[0].cost_a + ' ' + '฿')
    //             $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
    //         } else if ($.cookie("lng") == undefined) {
    //             if(data[0].area == 'Service_day' || data[0].area == 'Service'){
    //                 $('#province').html(data[0].province_name_en);
    //                 $('#province_to').html(data[0].province_name_to_en);
    //             }
                
    //             $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
    //             $('#price').html(data[0].cost_a + ' ' + '฿')
    //             $('#product').html(data[0].topic_en)
    //             $('#name_product').html(data[0].topic_car)
    //             $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
    //             $('#costsummary').html(data[0].cost_a + ' ' + '฿')
    //             $('#numsumprice').html(data[0].cost_a + ' ' + '฿')

    //         }


    //         costproduct = data[0].cost_a;
    //         type = data[0].type;
    //         cost_a_nett = data[0].cost_a_nett;
    //         if (data[0].area == 'In' || data[0].area == 'Out') {
    //             $('.flight-box').show();

    //         } else {
    //             $('.flight-box').hide();

    //         }
    //         console.log(type)
    //         console.log($.cookie("lng"))
    //         if (data[0].type == 'Private' && data[0].area == 'In') {
    //             if ($.cookie("lng") == 'cn') {
    //                 $('#datetext').html('到达日期:')
    //                 $('#texttime').html('到达时间:')
    //                 $('#date-final').html('到达日期:')
    //                 $('#time-final').html('到达时间:')
    //             } else if ($.cookie("lng") == 'en') {
    //                 $('#datetext').html('Arrival date:')
    //                 $('#texttime').html('Arrival time:')
    //                 $('#date-final').html('Arrival date:')
    //                 $('#time-final').html('Arrival time:')

    //             } else if ($.cookie("lng") == 'th') {
    //                 $('#datetext').html('วันที่มาถึง:')
    //                 $('#texttime').html('เวลาถึง:')
    //                 $('#date-final').html('วันที่มาถึง:')
    //                 $('#time-final').html('เวลาถึง:')
    //             } else if ($.cookie("lng") == undefined) {
    //                 $('#datetext').html('Arrival date:')
    //                 $('#texttime').html('Arrival time:')
    //                 $('#date-final').html('Arrival date:')
    //                 $('#time-final').html('Arrival time:')

    //             }


    //         }
    //         if (data[0].type == 'Join' && data[0].area == 'In') {
    //             if ($.cookie("lng") == 'cn') {
    //                 $('#datetext').html(' 到达日期:')
    //                 $('#texttime').html(' 到达时间:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html(' 到达日期:')
    //                 $('#time-final').html(' 到达时间:')

    //             } else if ($.cookie("lng") == 'en') {
    //                 $('#datetext').html('Arrival date:')
    //                 $('#texttime').html('Arrival time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('Arrival date:')
    //                 $('#time-final').html('Arrival time:')


    //             } else if ($.cookie("lng") == 'th') {
    //                 $('#datetext').html('วันที่มาถึง:')
    //                 $('#texttime').html(' เวลาถึง:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('วันที่มาถึง:')
    //                 $('#time-final').html('เวลาถึง:')

    //             } else if ($.cookie("lng") == undefined) {
    //                 $('#datetext').html('Arrival date:')
    //                 $('#texttime').html('Arrival time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('Arrival date:')
    //                 $('#time-final').html('Arrival time:')


    //             }


    //         }
    //         if (data[0].type == 'Join' && data[0].area == 'Out') {
    //             if ($.cookie("lng") == 'cn') {
    //                 $('#datetext').html(' 出发日期:')
    //                 $('#texttime').html(' 出发时间:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#box-terminal').css('display', 'block')
    //                 $('#date-final').html('出发日期:')
    //                 $('#time-final').html('出发时间:')
    //             } else if ($.cookie("lng") == 'en') {
    //                 $('#datetext').html('Departure date:')
    //                 $('#texttime').html('Departure time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#box-terminal').css('display', 'block')
    //                 $('#date-final').html('Departure date:')
    //                 $('#time-final').html('Departure time:')

    //             } else if ($.cookie("lng") == 'th') {
    //                 $('#datetext').html('วันเดินทาง:')
    //                 $('#texttime').html('เวลาออกเดินทาง:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#box-terminal').css('display', 'block')
    //                 $('#date-final').html('วันเดินทาง:')
    //                 $('#time-final').html('เวลาออกเดินทาง:')
    //             } else if ($.cookie("lng") == undefined) {
    //                 $('#datetext').html('Departure date:')
    //                 $('#texttime').html('Departure time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#box-terminal').css('display', 'block')
    //                 $('#date-final').html('Departure date:')
    //                 $('#time-final').html('Departure time:')

    //             }




    //         }
    //         if (data[0].type == 'Private' && data[0].area == 'Point') {
    //             if ($.cookie("lng") == 'cn') {
    //                 $('#datetext').html('使用日期:')
    //                 $('#texttime').html('使用时间:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('使用日期:')
    //                 $('#time-final').html('使用时间:')

    //             } else if ($.cookie("lng") == 'en') {
    //                 $('#datetext').html('Use date:')
    //                 $('#texttime').html('Use time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('Use date:')
    //                 $('#time-final').html('Use time:')


    //             } else if ($.cookie("lng") == 'th') {
    //                 $('#datetext').html('วันที่ใช้บริการ:')
    //                 $('#texttime').html('เวลาใช้บริการ:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('วันที่ใช้บริการ:')
    //                 $('#time-final').html('เวลาใช้บริการ:')

    //             } else if ($.cookie("lng") == undefined) {
    //                 $('#datetext').html('Use date:')
    //                 $('#texttime').html('Use time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('Use date:')
    //                 $('#time-final').html('Use time:')


    //             }


    //         }
    //         if (data[0].type == 'Private' && data[0].area == 'Service') {
    //             if ($.cookie("lng") == 'cn') {
    //                 $('#datetext').html('使用日期:')
    //                 $('#texttime').html('使用时间:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('使用日期:')
    //                 $('#time-final').html('使用时间:')

    //             } else if ($.cookie("lng") == 'en') {
    //                 $('#datetext').html('Use date:')
    //                 $('#texttime').html('Use time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('Use date:')
    //                 $('#time-final').html('Use time:')


    //             } else if ($.cookie("lng") == 'th') {
    //                 $('#datetext').html('วันที่ใช้บริการ:')
    //                 $('#texttime').html('เวลาใช้บริการ:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('วันที่ใช้บริการ:')
    //                 $('#time-final').html('เวลาใช้บริการ:')

    //             } else if ($.cookie("lng") == undefined) {
    //                 $('#datetext').html('Use date:')
    //                 $('#texttime').html('Use time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#date-final').html('Use date:')
    //                 $('#time-final').html('Use time:')


    //             }




    //         }
    //         if (data[0].type == 'Join' && data[0].area == 'Point') {
    //             if ($.cookie("lng") == 'cn') {
    //                 $('#datetext').html('出发日期:')
    //                 $('#texttime').html('出发时间:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('出发日期:')
    //                 $('#time-final').html(' 出发时间:')
    //             } else if ($.cookie("lng") == 'en') {
    //                 $('#datetext').html('Departure date:')
    //                 $('#texttime').html('Departure time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('Departure date:')
    //                 $('#time-final').html('Departure time:')

    //             } else if ($.cookie("lng") == 'th') {
    //                 $('#datetext').html('วันเดินทาง:')
    //                 $('#texttime').html('เวลาออกเดินทาง:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('วันเดินทาง:')
    //                 $('#time-final').html('เวลาออกเดินทาง:')
    //             } else if ($.cookie("lng") == undefined) {
    //                 $('#datetext').html('Departure date:')
    //                 $('#texttime').html('Departure time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('Departure date:')
    //                 $('#time-final').html('Departure time:')

    //             }



    //         }
    //         if (data[0].type == 'Private' && data[0].area == 'Out') {
    //             if ($.cookie("lng") == 'cn') {
    //                 $('#datetext').html('出发日期:')
    //                 $('#texttime').html('出发时间:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('出发日期:')
    //                 $('#time-final').html('出发时间:')
    //                 $('#box-terminal').css('display', 'block')
    //             } else if ($.cookie("lng") == 'en') {
    //                 $('#datetext').html('Departure date:')
    //                 $('#texttime').html('Departure time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('Departure date:')
    //                 $('#time-final').html('Departure time:')
    //                 $('#box-terminal').css('display', 'block')


    //             } else if ($.cookie("lng") == 'th') {
    //                 $('#datetext').html('วันเดินทาง:')
    //                 $('#texttime').html('เวลาออกเดินทาง:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('วันเดินทาง:')
    //                 $('#time-final').html('เวลาออกเดินทาง:')
    //                 $('#box-terminal').css('display', 'block')

    //             } else if ($.cookie("lng") == undefined) {
    //                 $('#datetext').html('Departure date:')
    //                 $('#texttime').html('Departure time:')
    //                 $('#visa-show').css('display', 'none')
    //                 $('#car-show').css('display', 'none')
    //                 $('#date-final').html('Departure date:')
    //                 $('#time-final').html('Departure time:')
    //                 $('#box-terminal').css('display', 'block')


    //             }




    //         }

    //         pro_id = data[0].transfer_id;
    //         person = data[0].person;
    //         checksumperson = person;
    //         program_name = data[0].topic_en;
    //         area = data[0].area;
    //         car_model = data[0].car_model;
    //         code = data[0].code;
    //         console.log(code)
    //         $('#checksum').html(checksumperson)
    //         console.log(data[0].transfer_icon)
    //         $('#images-icon').append('<img src="http://t-booking.com/pic/carmodelicon/' + data[0].transfer_icon + '.jpg" id="box-image">');




    //     }
    // });


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
            $('#checknumcar').html(selectcar)
            $('#selsect_car_pop').show(500)

        }
        if ((parseInt(s) * parseInt(person)) == sum_adult_child) {
            selectcar = parseInt(s);

        }
       
        console.log(selectcar)
        checksumperson = parseInt(person) * parseInt(selectcar)
        console.log('sumperson-' + checksumperson)

        total_price = parseInt(costproduct) * parseInt(selectcar);
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
            $('#checknumcar').html(selectcar)
            $('#selsect_car_pop').show(500)
        }
        if ((parseInt(s) * parseInt(person)) == sum_adult_child) {
            selectcar = parseInt(s);

        }

       
        checksumperson = parseInt(person) * parseInt(selectcar)
        console.log('sumperson2-' + checksumperson)

        total_price = parseInt(costproduct) * parseInt(selectcar);
        



        if (type == 'Join') {
            total_price = parseInt(costproduct) * parseInt(sum_adult_child);
            costdotcars = parseInt(costproduct) * (parseInt(num_adult) + parseInt(num_child));
            $('#totalprice').html(total_price + ' ' + '฿')
            $('#numsumprice').html(total_price + ' ' + '฿')


        } else {
            $('#sumnum').html(parseInt(sum_adult_child));
            $('#selectcar').html(selectcar)
            $('#checksum').html(checksumperson)
            // $('#numsumprice').html(parseInt(costproduct) * parseInt(selectcar) + ' ' + '฿')
            $('#num_cars').html('')
            $('#num_cars').append('<option value="' + selectcar + '" label="' + selectcar + '" none=""></option>');
            for (var i = 1; i <= 5; i++) {
                console.log(i)
                $('#num_cars').append('<option value="' + i + '" label="' + i + '"></option>');
                //dataProvince.push(data[i])
                //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


            }
            // $('#checksum').html(checksumperson)
            $('#numsumprice').html(total_price + ' ' + '฿')

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
    // $('#addbook').on('click', function() {
    //     console.log(new Date('YYYY-mm-dd'))
       
    // });
    $('.icon-close').on('click', function() {
        $('#acceptance_pin_pop').hide(500)
        $('#selsect_car_pop').hide(500)
        $('#input_data_pop').hide(500)
        
        
    })
}) 
function selecetBook(){    
        $('.loader-wrapper').css('display', 'block')

        //$('#codecountry').modal('show');
        // $.each(datacountry , function(i, val) {
        //    if ($.cookie("phonecode") == datacountry[i].phonecode) {
        //       namecountry = datacountry[i].name_en;
        //    }
        //  });
        var data;
        if (ckgetuser == true) {
            email = getemail;
            phone = getphone;
        }
        
        if(b_fashion == 'Reservation' || b_fashion == 'Service'){
            
            console.log(ontime)
            if(ontime == undefined){
                ontime = '00:00';
                $('#time_h option:selected').focus();
            }
            if(ondate == undefined){
                ondate = $('#on_date').val();
                //$('#time_h option:selected').focus();
            }
        }
        if(b_fashion == 'Realtime'){
            ondate = newDate;
            console.log(newDate)
            var newHours;
            var newMinutes;
            num_cars = 1;
            console.log(getnewdate.getHours().length)
            console.log(getnewdate.getMinutes().length)
            if(getnewdate.getHours()<10){
                newHours = '0'+getnewdate.getHours()
            }
            else{
                newHours = getnewdate.getHours()
            }
            if(getnewdate.getMinutes() <10){
                newMinutes = '0'+getnewdate.getMinutes()
            }
            else{
                newMinutes = getnewdate.getMinutes()
                
            }
               
            ontime =newHours+':'+newMinutes;
            console.log(ontime)
            total_price = getcosereltime;
        }
        if ((area == 'In' || area == 'Out') && flight == undefined ) {
            // && $.cookie("phonecode") == undefined
            $('#flight').focus();
            $('#flight').css('border','1px solid #f44336')
            
            // $('#waning-flight').fadeIn(500);
            //alert("aaaa");


        } else {
            $('#flight').css('border','1px solid #dfdfdf')
        }
        if(name == undefined && $('#flight').val() != '' && ckgetuser == false){
            $('#name_lastname').focus()
            $('#name_lastname').css('border','1px solid #f44336')

        }
        else{
            $('#name_lastname').css('border','1px solid #dfdfdf')
        }
        if(phone == undefined && name != undefined && $('#flight').val() != '' && ckgetuser == false){
            $('#phone').focus()
            $('#phone').css('border','1px solid #f44336')
        }
        else{
            $('#phone').css('border','1px solid #dfdfdf')
        }
        if(ckgetuser == false && ($('#email').val() == ''&& $('#flight').val() != '') && ($('#phone').val() != '' && $('#name_lastname').val() != '') ){
            console.log('in if')
            
            $('#email').focus()
            $('#email').css('border','1px solid #f44336')
        }
        else{
            console.log('in else')
            console.log( $('#phone').val())
            console.log( $('#name_lastname').val())
            $('#email').css('border','1px solid #dfdfdf')
            
        }
        if(Checkacceptance == false){
            $('#acceptance_pin_pop').show(500)
            
        }
        
            console.log(ckgetuser+'*********************************')
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
            console.log(area)
            console.log($.cookie("phonecode"))
            //console.log(flight)
            var o = ondate.split('-');
            var m,d ;
            name = $('#name_lastname').val();
            console.log(o[2].length)
            if(o[2].length == 1  || o[1].length == 1){
                if(o[1].length == 1){
                    m = '0'+o[1];
                }
                else{
                    m = o[1];
                }
                if(o[2].length == 1){
                    d = '0'+o[2];
                }
                else{
                    d = o[2];
                }
                ondate = o[0]+'-'+m+'-'+d;
            }
            
            console.log(ondate)

           
            
                
               
                if(($('#email').val() != '' && Checkacceptance != false) && ($('#phone').val() != '' && $('#name_lastname').val() != '') ){
                    if((area == 'In' || area == 'Out') ) {
                        if(flight != undefined){
                            if(b_fashion == 'Reservation' || b_fashion == 'Service'){
                                
                                console.log(ontime)
                                if(ontime == undefined){
                                    ontime = '00:00';
                                    $('#time_h option:selected').focus();
                                }
                                if(ondate == undefined){
                                    ondate = $('#on_date').val();
                                    //$('#time_h option:selected').focus();
                                }
                                addbooking();
                                //$('#loading').show()
                                
                            }
                            else{
                                addbooking();
                                //$('#loading').show()
                                
                            }  
                        }
                        else{
                            $('#input_data_pop').hide()
                        }
                        
                    }
                    else{
                        if(b_fashion == 'Reservation' || b_fashion == 'Service'){
                            
                            console.log(ontime)
                            if(ontime == undefined){
                                ontime = '00:00';
                                $('#time_h option:selected').focus();
                            }
                            if(ondate == undefined){
                                ondate = $('#on_date').val();
                                //$('#time_h option:selected').focus();
                            }
                            addbooking();
                            //$('#loading').show()
                            
                        }
                        else{
                            addbooking();
                            //$('#loading').show()
                            
                        }
                    }
                   
                    
                    
                }
}
function addbooking(){
    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/savebook_control/process',
        data: {
            'from': b_from,
            'to': b_to,
            'numcar': num_cars,
            'program': b_data,
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
            'cost_a_nett': cost_a_nett,
            'lat_f': b_lat_f,
            'lng_f': b_lng_f,
            'lat_t': b_lat_t,
            'lng_t': b_lng_t,
            'book': b_fashion,

        },
        // contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            agent_ref = data;
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
                url: 'https://www.welovetaxi.com/app/booking/savebook_control/saveapi',
                data: param,
                //contentType: "application/json",
               dataType: 'json',
                success: function(data) {
                    console.log(data);
                    console.log(s_email);
                    if (data.status == 202) {
                        $.ajax({
                            type: 'POST',
                            url: 'https://www.welovetaxi.com/app/booking/sendemail.php',
                            data: { 'mail': s_email, 'voucher': data.invoice },
                            //contentType: "application/json",
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                //console.log(s_email);

                            }
                        });
                        //$('#loading').hide()
                        if($.cookie("login") != undefined){
                        window.location.href = "https://www.welovetaxi.com/app/booking/dashboard/view_user";
                        
                        }
                        else{
                            window.location.href = "https://www.welovetaxi.com/app/booking/dashboard/voucher?order_id="+data.invoice;
                        }

                    } else {
                            $('#input_data_pop').show(500)

                    }


                }
            });

        }
    });
}

function phonecodesend(x) {
        phonecode = x;
        console.log(phonecode)
    }


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
function bookingdetailservice(transfer_id,from,to,topic_from,topic_to,lat_f,lng_f,lat_t,lng_t,book){
    $('#get_html_book').show(500)
    getDetailbookservice(from,to,his_lat_f,his_lng_f,his_lat_t,his_lng_t,book,transfer_id,topic_from,topic_to)

}
function bookingdetail(transfer_id,from,to,lat_f,lng_f,lat_t,lng_t,book){
    console.log(transfer_id+'-'+from+'-'+to+'-'+lat_f+'-'+lng_f+'-'+lat_t+'-'+lng_t+'-'+book)
    var datalocation;
    his_transfer_id = transfer_id;
    his_from = from;
    his_to = to;
    his_lat_f = lat_f;
    his_lng_f = lng_f;
    his_lat_t = lat_t;
    his_lng_t = lng_t
    his_fashion = book;
    his_fashion
    // $('#history_pop').show(500)
    // href="book?data=' + compae1private[i].transfer_id + '&from=' + dataPlacefrom + '&to=' + dataPlaceto + '&lat_f='+lat_f+'&lng_f='+lng_f+'&lat_t='+lat_t+'&lng_t='+lng_t+'&book='+booking+'" >
    if ($.cookie("login") && check_type_book != 'his') {
        $('#history_pop').show(500)
        //getDetailbook(his_from,his_to,his_lat_f,his_lng_f,his_lat_t,his_lng_t,his_fashion,his_transfer_id)


    }
    else{
        // console.log(base_url + 'book?data=' + transfer_id + '&from=' + dataPlacefrom + '&to=' + dataPlaceto + '&lat_f='+lat_f+'&lng_f='+lng_f+'&lat_t='+lat_t+'&lng_t='+lng_t+'&book='+booking)
        console.log($.cookie("login"))
        $('#get_html_book').show(500)
        getDetailbook(his_from,his_to,his_lat_f,his_lng_f,his_lat_t,his_lng_t,his_fashion,his_transfer_id)        
        // window.location.href = base_url + 'book?data=' + transfer_id + '&from=' + dataPlacefrom + '&to=' + dataPlaceto + '&lat_f='+lat_f+'&lng_f='+lng_f+'&lat_t='+lat_t+'&lng_t='+lng_t+'&book='+booking;
    }
}
function getDetailbook(a,b,c,d,e,f,g,h){
    b_from = a;
    b_to = b;
    b_lat_f = c;
    b_lng_f = d;
    b_lat_t = e;
    b_lng_t = f;
    b_fashion = g;
    b_data = h;
    //alert(b_fashion)
    if ($.cookie("lng") == 'cn') {
        lang_to_map = 'zh-CN';
        // document.getElementById("current").value = "你的位置...";
    } else if ($.cookie("lng") == 'th') {
        lang_to_map = 'th';
    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
       
        lang_to_map = 'en';
       
    }
    
    url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + b_lat_f + ',' + b_lng_f + '&sensor=true&language=' + lang_to_map;
    
                $.post(url, function(data) {
                    console.log(data);
                    $('#placefrom').html(data.results[0].formatted_address)
                    // infowindow.close();
                    // infowindow.setContent('<div id="setmap">' + data.results[0].formatted_address + '</div> <input id="changesetname1" name="changesetname1" onchange="changesetname2(changesetname1)" placeholder="'+set_name+'" type="text" style=""  ><input id="changesetphone2" name="changesetphone2" onchange="changesetphone2(changesetphone2)" placeholder="'+phoneplace+'" type="text" style=""  ><div class="btn btn-sm ' + btn_color + ' pull-right btn-part" border-radius: 25px;style="display: inline-block;" onclick="savePlaceOften(' + type_call + ',' + lat_f + ',' + lng_f + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">' + txt_save + '</div>');
                    // infowindow.open(map, markerPlaceOfften);
                    //$('#often-input2').show(500);
    //<div class="btn btn-sm Klsetname" onclick="Klsetname();" style="display: inline-block;background: rgb(22, 179, 177);">' + set_name + '</div>
    url2 = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + b_lat_t + ',' + b_lng_t + '&sensor=true&language=' + lang_to_map;
    
                $.post(url2, function(data) {
                    console.log(data);
                    $('#placeto').html(data.results[0].formatted_address)
                    // infowindow.close();
                    // infowindow.setContent('<div id="setmap">' + data.results[0].formatted_address + '</div> <input id="changesetname1" name="changesetname1" onchange="changesetname2(changesetname1)" placeholder="'+set_name+'" type="text" style=""  ><input id="changesetphone2" name="changesetphone2" onchange="changesetphone2(changesetphone2)" placeholder="'+phoneplace+'" type="text" style=""  ><div class="btn btn-sm ' + btn_color + ' pull-right btn-part" border-radius: 25px;style="display: inline-block;" onclick="savePlaceOften(' + type_call + ',' + lat_f + ',' + lng_f + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">' + txt_save + '</div>');
                    // infowindow.open(map, markerPlaceOfften);
                    //$('#often-input2').show(500);
    //<div class="btn btn-sm Klsetname" onclick="Klsetname();" style="display: inline-block;background: rgb(22, 179, 177);">' + set_name + '</div>
    
                });
                });
               
    if(b_fashion == 'Realtime'){
        $('#car-show').hide();
        $('#select_date').hide();
        // $('#select_date').disabled = true;
        $('#selece_time').hide()
        $('#select_adult_child').hide()
        
        $('.box-list-cars ').hide()
        $('#Rondatetext ').show()
        $('#visa-show ').hide();
        $('#box_price ').hide();
        $('.btn-realtime').css({ 'background': '#3b5998', 'color': '#ffffff' });
        
        
                    $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
                    $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
                    $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
                    $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#333' });
        
        
        
    }
    else if(b_fashion == 'Reservation'){
        $('.btn-reservation').css({ 'background': '#3b5998', 'color': '#ffffff' });
        
        
                    $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
                    $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
                    $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
                    $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#333' });
        $('#Rondate').hide()
        $('#Rondatetext ').hide()
        
    }
    else{
        $('.btn-car-service').css({ 'background': '#3b5998', 'color': '#ffffff' });        
        // $('.btn-car-service').css('color', '#16B3B1');        
        $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
        $('#Rondate').hide()
        $('#Rondatetext ').hide() 
    }
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


    // GET DETAIL


    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/getDetail.php',
        data: { 'id': b_data },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            getcosereltime = data[0].cost_a_sell;
            if (data[0].area == "Service") {
                $('.box-program').hide();
                $('.boxs-to').hide();
                $('.boxs-from').hide();
            }
            console.log(data[0].province_name_en)
            if ($.cookie("lng") == 'cn') {
                $('#name_lastname').attr('placeholder','名 - 姓');
                $('#phone').attr('placeholder','电话');
                $('#email').attr('placeholder','电子邮件');
                $('#flight').attr('placeholder','航班');
                $('#other').attr('placeholder','其他');
                $('.lng-have').html('有');
                
                $('.lng-none-have').html('沒有');
                $('.lng-demestic').html('國內');                       
                $('.lng-international').html('國際');
                
                
                
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_cn);
                    $('#province_to').html(data[0].province_name_to_cn);
                }
                $('#province').html(data[0].province_name_cn);
                $('#province_to').html(data[0].province_name_to_cn);

                $('#cars_persion').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_cn)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'en') {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_en);
                    $('#province_to').html(data[0].province_name_to_en);
                }
                
                $('#name_lastname').attr('placeholder','First Name - Last Name');
                $('#phone').attr('placeholder','Phone');
                $('#email').attr('placeholder','Email');
                $('#flight').attr('placeholder','Flight');
                $('#other').attr('placeholder','Other');
                $('.lng-have').html('Have');
                
                $('.lng-none-have').html('None');
                $('.lng-demestic').html('Domestic');                       
                $('.lng-international').html('International');
                
                $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_en)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'th') {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_th);
                    $('#province_to').html(data[0].province_name_to_th);
                }
                $('#name_lastname').attr('placeholder','ชื่อ - นามสกุล');
                $('#phone').attr('placeholder','โทรศัพท์');
                $('#email').attr('placeholder','อีเมล์');
                $('#flight').attr('placeholder','เที่ยวบิน');
                $('#other').attr('placeholder','อื่น ๆ');
               
                $('.lng-have').html('มี');                       
                $('.lng-none-have').html('ไม่มี');
                $('.lng-demestic').html('ในประเทศ');                       
                $('.lng-international').html('ระหว่างประเทศ');                       
                
                $('#cars_persion').html(data[0].car_topic_th + data[0].pax_th)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_th)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_th + data[0].pax_th)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == undefined) {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_en);
                    $('#province_to').html(data[0].province_name_to_en);
                }
                $('#name_lastname').attr('placeholder','First Name - Last Name');
                $('#phone').attr('placeholder','Phone');
                $('#email').attr('placeholder','Email');
                $('#flight').attr('placeholder','Flight');
                $('#other').attr('placeholder','Other');
                $('.lng-have').html('Have');
                
                $('.lng-none-have').html('None');
                $('.lng-demestic').html('Domestic');                       
                $('.lng-international').html('International');
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
            $('#images-icon').append('<img src="https://www.welovetaxi.com/app/booking/files/images/carmodelicon/' + data[0].transfer_icon + '.jpg" id="box-image">');




        }
    });
    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/getplace.php',
        data: { 'from': b_from, 'to': b_to },
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
            // $('#placefrom').html(data[0].topic);
            // $('#placeto').html(data[1].topic);
            $('#province').html(data[0].name);
            $('#province_to').html(data[1].name);



        }
    });
}
function getDetailbookservice(a,b,c,d,e,f,g,h,x,y){
    b_from = a;
    b_to = b;
    b_lat_f = c;
    b_lng_f = d;
    b_lat_t = e;
    b_lng_t = f;
    b_fashion = g;
    b_data = h;
    
    //alert(b_fashion)
    if ($.cookie("lng") == 'cn') {
        lang_to_map = 'zh-CN';
        // document.getElementById("current").value = "你的位置...";
    } else if ($.cookie("lng") == 'th') {
        lang_to_map = 'th';
    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
       
        lang_to_map = 'en';
       
    }
    
   
        $('#placefrom').html(x)
                   
        $('#placeto').html(y)
                   
              
        $('.btn-car-service').css({ 'background': '#3b5998', 'color': '#ffffff' });        
        // $('.btn-car-service').css('color', '#16B3B1');        
        $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
        $('#Rondate').hide()
        $('#Rondatetext ').hide() 
    
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


    // GET DETAIL


    $.ajax({
        type: 'POST',
        url: 'https://www.welovetaxi.com/app/booking/service/getDetail.php',
        data: { 'id': b_data },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            getcosereltime = data[0].cost_a_sell;
            if (data[0].area == "Service") {
                // $('.box-program').hide();
                $('.boxs-to').hide();
                $('.boxs-from').hide();
            }
            console.log(data[0].province_name_en)
            if ($.cookie("lng") == 'cn') {
                $('#name_lastname').attr('placeholder','名 - 姓');
                $('#phone').attr('placeholder','电话');
                $('#email').attr('placeholder','电子邮件');
                $('#flight').attr('placeholder','航班');
                $('#other').attr('placeholder','其他');
                $('.lng-have').html('有');
                
                $('.lng-none-have').html('沒有');
                $('.lng-demestic').html('國內');                       
                $('.lng-international').html('國際');
                
                
                
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_cn);
                    $('#province_to').html(data[0].province_name_to_cn);
                }
                $('#province').html(data[0].province_name_cn);
                $('#province_to').html(data[0].province_name_to_cn);

                $('#cars_persion').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_cn)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_en);
                    $('#province_to').html(data[0].province_name_to_en);
                }
                
                $('#name_lastname').attr('placeholder','First Name - Last Name');
                $('#phone').attr('placeholder','Phone');
                $('#email').attr('placeholder','Email');
                $('#flight').attr('placeholder','Flight');
                $('#other').attr('placeholder','Other');
                $('.lng-have').html('Have');
                
                $('.lng-none-have').html('None');
                $('.lng-demestic').html('Domestic');                       
                $('.lng-international').html('International');
                
                $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_en)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'th') {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_th);
                    $('#province_to').html(data[0].province_name_to_th);
                }
                $('#name_lastname').attr('placeholder','ชื่อ - นามสกุล');
                $('#phone').attr('placeholder','โทรศัพท์');
                $('#email').attr('placeholder','อีเมล์');
                $('#flight').attr('placeholder','เที่ยวบิน');
                $('#other').attr('placeholder','อื่น ๆ');
               
                $('.lng-have').html('มี');                       
                $('.lng-none-have').html('ไม่มี');
                $('.lng-demestic').html('ในประเทศ');                       
                $('.lng-international').html('ระหว่างประเทศ');                       
                
                $('#cars_persion').html(data[0].car_topic_th + data[0].pax_th)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_th)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_th + data[0].pax_th)
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
            $('#images-icon').append('<img src="https://www.welovetaxi.com/app/booking/files/images/carmodelicon/' + data[0].transfer_icon + '.jpg" id="box-image">');




        }
    });
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://www.welovetaxi.com/app/booking/service/getplace.php',
    //     data: { 'from': b_from, 'to': b_to },
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data[0])
    //         console.log(data[1])
    //         $('#pickup_from').html(data[0].topic + '(' + data[0].name + ')');
    //         $('#pickup_to').html(data[1].topic + '(' + data[1].name + ')');
    //         place = data[0].id;
    //         to_place = data[1].id;
    //         place_name = data[0].topic;
    //         toplace_name = data[1].topic;
    //         adresss = data[0].address;
    //         adress_to = data[1].address;
    //         // $('#placefrom').html(data[0].topic);
    //         // $('#placeto').html(data[1].topic);
    //         $('#province').html(data[0].name);
    //         $('#province_to').html(data[1].name);



    //     }
    // });
}
function closepopup(x){
    if(x == 'country'){
        $('#codecountry').hide(500);
    }
}