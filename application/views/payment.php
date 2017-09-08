<section style="    height: 100vh;
    background: #fff;">
            <div class="container">
                <div style="    text-align: center;
    margin-top: 60px;
    font-size: 18px;
    font-weight: 400;">Playment</div>
    <!-- <div class="form-group form-inline required ">
                                                                           
                                                    <select class="textInput" name="orderid" id="orderid" class="" style="  ">
                                                        <option class="textInput" value="az_AZ" >booking ID</option>
                                                    </select>
                                                </div> -->
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
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
                                <table width="100%" style="    margin-top: 161px;">
                                
                                    <tr>
                                        <td style="padding:0 5px 5px 0;">Amount
                                        </td>
                                        <td style="padding:0 5px 5px 0;">
                                            <input class="textInput"  type="text" name="amount" maxlength="200" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0 5px 5px 0;">
                                            <input class="textInput" type="hidden" name="on0" value="Reference" />Reference
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
                                            <!-- <img alt="" style="border:0;" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1" /> -->
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
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
            }
        });

	});


</script>