<section style="height: 100vh;background: #fff">
    <div class="container" style="padding: 10px;  overflow-y: scroll;  ">
        <div style="background: #fff;
    margin-top: 52px;    padding-bottom: 100px;">
    <div class="col-md-12">
        <div class="col-md-12" style="text-align: center;padding-top: 25px; padding-bottom: 20px; margin-bottom: 20px; font-size: 18px; font-weight: 400; border-bottom: dashed 1px #16b3b1 ;" >
            <span class="lng-payment"></span>
        </div>
</div>
<div class="col-md-6">
        <table class="table ">
            <tr>
                <td colspan="2" align="center"><div class="status-pay" style="font-weight: 400;
    font-size: 16px;"></div></td>
            </tr>
            <tr>
                <td>
                <span class="lng-product"></span>
                </td>
                <td>
                <span id="pdname"></span>
                </td>
            </tr><tr>
                <td>
                <span class="voucher-lang lng-voucher-no"></span>
                </td>
                <td>
                <span id="voucher"></span>
                </td>
            </tr>
            <tr>
                <td>
                <span class="amount-lang lng-amount"></span>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <span class="adult-lang lng-adult"></span> :	<span id="adult"></span>
                            </td>
                            <td width="10"></td>
                            <td>
                                <span class="child-lang lng-child"></span> :	<span id="child"></span>
                            </td>
                    </tr></table>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="price-lang lng-price"></span>
                </td>
                <td>
                    <span id="price"></span> <span class="currency"></span>
                </td>
            </tr>
            <tr>
                <td>
                <span class="book_by-lang lng-book-by"></span>
                </td>
                <td>
                <span id="book_by"></span>
                </td>
            </tr>
        </table>
       <style>
           .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
               border-top: none;
           }
       </style>       

            <form class="paypal" action="./payments" method="post" id="paypal_form" target="_blank">
               
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="no_note" value="1" />
                <input type="hidden" name="lc" value="UK" />
                <input type="hidden" name="currency_code" value="THB" />
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                <input type="hidden" name="first_name" value="Customer's First Name"  />
                <input type="hidden" name="last_name" value="Customer's Last Name"  />
                <input type="hidden" name="payer_email" value="ozaclever-business@gmail.com"  />
                <input type="hidden" name="item_name" value="Customer's First Name"  id="item_name">
                <input type="hidden" name="item_number" value="988" id="item_number">
               <!-- <input type="hidden" name="return" value="https://dotdotdottrip.com/dashboard/payments/?payment=success" />
                <input type="hidden" name="cancel_return" value="https://dotdotdottrip.com/dashboard/payments/?payment=cancelled" /> -->
                <input type="hidden" name="txn_ids" value="Reference" id="reference" / >
               
                <table width="100%" style="   " id="box-pay">
                    <tr>
                        <td style="padding:0 5px 5px 0;"><span class="lng-amount"></span> (THB.)
                        </td>
                        <td style="padding:0 5px 5px 0;">
                        <input type="number" name="txt_amount" class="textInput" holder="" id="amount"/>
                        </td>
                        
                    </tr>                   
                    <tr>
                        
                        <td colspan="2" style="padding:0 5px 5px 0;" id="btn-pay">                           
                            <input style="background: #ffffff;  border: 0; margin-top: 15px;  " type="image" name="submit" value="Submit Payment" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png"  />                                           
                        </td>
                    </tr>
                </table>
        </div>
            </form>
        </div>
        </div>
    </section>
    <style>
    .textInput {
    border: 1px solid #dfdfdf;
    padding: 8px;
    margin: 8px 0;
    width: 100%;
}
    </style>
    <script>
    var base_url = 'https://dotdotdottrip.com/';
$( document ).ready(function() {
    var product_name;
    $.post( "<?php echo base_url(); ?>dashboard/get_user", function( data ) {
		var obj = JSON.parse(data);
		$.each(obj, function (index, value) {
			$('#name').html(obj[index].s_name);
		});
	});
	$('#btn-logout-user').on('click', function() {
        console.log('logout')
        $.removeCookie("login");
        window.location.href = base_url + "register";
    })
	
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
                console.log(data[0].s_code)
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

    } 

	else {
        $('#photo_non-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');
        $('.box-login').hide();
        $('.box-desboard').hide();

        $('.box-login-non').show();
        //$('#usernamess').html("Login")
        // $('#textlogout').html("Login/Register")
        $('#btnlogin').css('display', 'block')
        $('#btnuser').css('display', 'none')
        $('.caret').css('display', 'none')
	
	
}

function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    console.log(getParameterByName('data')+"data")
    if($.cookie("lng")=="en"){
			//product_name = data.product_detail[0].topic_en;
			//cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
			$('.lng-flight').text('Flight');
			$('.lng-car_type').text('Car type');
			$('.lng-transfer_date').text('Date/Time');
			$('.lng-num_of_car').text('Number of car');
			$('.currency').text("baht.");
		}else if ($.cookie("lng")=="cn"){
			//product_name = data.product_detail[0].topic_cn;
			//cartype = data.product_detail[0].car_topic_cn+" "+data.product_detail[0].pax_cn;
			$('.lng-flight').text('	航班');
			$('.lng-car_type').text('车型');
			$('.lng-transfer_date').text('日期/时间');
			$('.lng-num_of_car').text('车数');
			$('.currency').text('铢');
		}else if ($.cookie("lng")=="th"){
			//product_name = data.product_detail[0].topic_th;
			//cartype = data.product_detail[0].car_topic_th+" "+data.product_detail[0].pax_th;
			$('.lng-flight').text('เที่ยวบิน');
			$('.lng-car_type').text('ประเภทรถ');
			$('.lng-transfer_date').text('วัน/เวลา');
			$('.lng-num_of_car').text('จำนวนรถ');
			$('.currency').text('บาท');
		}else if($.cookie("lng")==undefined){
			//product_name = data.product_detail[0].topic_en;
			//cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
			$('.lng-flight').text('Flight');
			$('.lng-car_type').text('Car type');
			$('.lng-transfer_date').text('Date/Time');
			$('.lng-num_of_car').text('Number of car');
			$('.currency').text("baht");
		}
    $.ajax({
            type: 'POST',
            url: '../dashboard/pay',
            data: { 'invoice': getParameterByName('data') },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                console.log(data[0].product_detail[0])
                if($.cookie("lng")=="en"){
                    if(data[0].status_pay == 0){
                        $('.status-pay').text('(wait for pay)');
                        $('.status-pay').css('color','red');
                        $('#box-pay').show()
                        
                    }
                    else{
                        $('.status-pay').text('(Already paid)');
                        $('.status-pay').css('color','#4CAF50');
                        $('#box-pay').hide()
                          
                    }
                    product_name = data[0].product_detail[0].topic_en;
                   
                  
                   
                }else if ($.cookie("lng")=="cn"){
                    if(data[0].status_pay == 0){
                        $('.status-pay').text('(等待付款)');
                        $('.status-pay').css('color','red');
                        $('#box-pay').show()
                        
                        
                    }
                    else{
                        $('.status-pay').text('(已經支付)'); 
                        $('.status-pay').css('color','#4CAF50'); 
                        $('#box-pay').hide()
                    }
                    product_name = data[0].product_detail[0].topic_cn;
                  
                   
                }else if ($.cookie("lng")=="th"){
                    if(data[0].status_pay == 0){
                        $('.status-pay').text('(รอจ่าย)');
                        $('.status-pay').css('color','red');
                        $('#box-pay').show()
                        
                       
                        
                    }
                    else{
                        $('.status-pay').text('(ชำระแล้ว)');  
                        $('.status-pay').css('color','#4CAF50');
                        $('#box-pay').hide()
                    }
                    product_name = data[0].product_detail[0].topic_th;
                    
                   
                }else if($.cookie("lng")==undefined){
                    if(data[0].status_pay == 0){
                        $('.status-pay').text('(wait for pay)');
                        $('.status-pay').css('color','red');
                        $('#box-pay').show()
                        
                        
                    }
                    else{
                        $('.status-pay').text('(Already paid)');  
                        $('.status-pay').css('color','#4CAF50');
                        $('#box-pay').hide()
                        
                    }
                    product_name = data[0].product_detail[0].topic_en;
                   
                    
                }
                
                $('#pdname').html(product_name)
                $('#item_number').val(data[0].invoice)
                $('#reference').val(data[0].s_code)
                $('#item_name').val(data[0].book_by)
                $('#amount').val(data[0].total_price)
                $('#voucher').html('<a href="'+data[0].voucher_url+'" target="_blank">'+data[0].invoice+'<a>');
                $('#adult').text(data[0].adult);
                $('#child').text(data[0].child);
                $('#num_of_car').text(data[0].numcar);
                $('#arrival_date').text(data[0].arrival_date);
                $('#arrival_time').text(data[0].arrival_time);
                $('#from').text(data[0].from);
                $('#to').text(data[0].to);
                $('#arrival_flight').text(data[0].arrival_flight);
                var book_date_f = data[0].booking_date;
                var res = data[0].booking_date.replace(" ", "/"); 
                $('#transfer_date').text(res);
                $('#book_by').text(data[0].book_by);
                $('#price').text(data[0].total_price);
               
            }
        });

	});


</script>