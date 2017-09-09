<section style="    height: 100vh;
    background: #fff;">
            <div class="container">
                <div style="    text-align: center;
                margin-top: 60px;
                padding: 8px;
                margin-bottom: 20px;
                font-size: 18px;
                font-weight: 400;
                border-bottom: dashed 1px #16b3b1 ;" >
              <span class="lng-payment"></span>
            </div>
    <table class="table ">
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
         
    <!-- <div class="form-group form-inline required ">
                                                                           
                                                    <select class="textInput" name="orderid" id="orderid" class="" style="  ">
                                                        <option class="textInput" value="az_AZ" >booking ID</option>
                                                    </select>
                                                </div> -->
            <form class="paypal" action="./payments" method="post" id="paypal_form" target="_blank">
               
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="no_note" value="1" />
                <input type="hidden" name="lc" value="UK" />
                <input type="hidden" name="currency_code" value="THB" />
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                <input type="hidden" name="first_name" value="Customer's First Name"  />
                <input type="hidden" name="last_name" value="Customer's Last Name"  />
                <input type="hidden" name="payer_email" value="ozaclever-business@gmail.com"  />
                <input type="hidden" name="item_number" value="988" id="item_number">
               <!-- <input type="hidden" name="return" value="https://dotdotdottrip.com/dashboard/payments/?payment=success" />
                <input type="hidden" name="cancel_return" value="https://dotdotdottrip.com/dashboard/payments/?payment=cancelled" /> -->
                <input type="hidden" name="txn_id" value="Reference" id="reference" / >
                
                <table width="100%" style="   ">
                    <tr>
                        <td style="padding:0 5px 5px 0;"><span class="lng-amount"></span> (THB.)
                        </td>
                        <td style="padding:0 5px 5px 0;">
                        <input type="number" name="txt_amount" class="textInput" holder="" id="amount"/>
                        </td>
                        
                    </tr>                   
                    <tr>
                        <td>&nbsp;</td>
                        <td style="padding:0 5px 5px 0;">                           
                            <input style="background: #ffffff;  border: 0; position: absolute; right: 21px;" type="image" name="submit" value="Submit Payment" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-medium.png"  />                                           
                        </td>
                    </tr>
                </table>
            </form>
          <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_xclick" />
                                <input type="hidden" name="business" value="ozaclever-facilitator_api1.gmail.com" />
                                <input type="hidden" name="lc" value="AU" />
                                <input type="hidden" name="item_name" value="Payment" />
                                <input type="hidden" name="item_number" value="P1" />
                                <input type="hidden" name="currency_code" value="THB" />
                                <input type="hidden" name="button_subtype" value="services" />
                                <input type="hidden" name="no_note" value="0" />
                                <input type="hidden" name="cn" value="Comments" />
                                <input type="hidden" name="no_shipping" value="1" />
                                <input type="hidden" name="rm" value="1" />
                                <input type="hidden" name="return" value="https://dotdotdottrip.com/dashboard/payment/?payment=success" />
                                <input type="hidden" name="cancel_return" value="https://dotdotdottrip.com/dashboard/payment/?payment=cancelled" />
                                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHostedGuest" />
                                <table width="100%" style="   ">
                                
                                    <tr>
                                        <td style="padding:0 5px 5px 0;">Amount
                                        </td>
                                        <td style="padding:0 5px 5px 0;">
                                            <input class="textInput"  type="text" name="amount" id="amount" maxlength="200" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0 5px 5px 0;">
                                            <input class="textInput" type="hidden" name="on0" value="Reference"/>Reference
                                        </td>
                                        <td style="padding:0 5px 5px 0;"> 
                                            <input class="textInput" type="text" name="os0" maxlength="200" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td style="padding:0 5px 5px 0;">
                                            <input style="    background: #ffffff;
    border: 0;
    position: absolute;
    right: 21px;" type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-medium.png" name="submit" alt="PayPal . The safer, easier way to pay online." />
                                           
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form> -->
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
                    product_name = data[0].product_detail[0].topic_en;
                   
                  
                   
                }else if ($.cookie("lng")=="cn"){
                    product_name = data[0].product_detail[0].topic_cn;
                  
                   
                }else if ($.cookie("lng")=="th"){
                    product_name = data[0].product_detail[0].topic_th;
                    
                   
                }else if($.cookie("lng")==undefined){
                    product_name = data[0].product_detail[0].topic_en;
                   
                    
                }
                
                $('#pdname').html(product_name)
                $('#item_number').val(data[0].invoice)
                $('#reference').val(data[0].s_code)
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