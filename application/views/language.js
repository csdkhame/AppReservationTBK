$(document).ready(function() {


	console.log($.cookie("lng"));
	if ($.cookie("lng") == 'cn') {
       $('.lng-private').html('Private')
        $('.lng-join').html('Join')
        //menu
        $('.lng-register').html('登記')
        $('.lng-login').html('登录')
        $('.lng-product').html('产品')
        $('.lng-transports').html('交通用车')
        $('.lng-tours').html('景点玩乐')
        $('.lng-language').html('語')
        $('.lng-settings-account').html('Settings Account')
        $('.lng-logout').html('登出')
        $('.lng-advance-use').html('提前使用')
        $('.lng-now-use').html('现在使用')
        $('.lng-search').html('搜索')


    }
    else if($.cookie("lng") == 'en'){
        $('.lng-private').html('Private')
        $('.lng-join').html('Join')
        //menu
        $('.lng-register').html('Register')
        $('.lng-login').html('Login')
        $('.lng-product').html('Product')
        $('.lng-transports').html('Transports')
        $('.lng-tours').html('Transports')
        $('.lng-language').html('Transports')
        $('.lng-settings-account').html('Settings Account')
        $('.lng-logout').html('Logout')
        //home
        $('.lng-advance-use').html('Advance use')
        $('.lng-now-use').html('Now use')
        $('.lng-search').html('Search')


        

    }
    else if($.cookie("lng") == 'th'){
        $('.lng-private').html('Private')
        $('.lng-join').html('Join') 
        //menu
        $('.lng-register').html('ลงทะเบียน')
        $('.lng-login').html('  เข้าสู่ระบบ')
        $('.lng-product').html('สินค้า') 
        $('.lng-transports').html(' รถให้บริการ')
        $('.lng-tours').html('ทัวร์')
        $('.lng-language').html('ภาษา')
        $('.lng-settings-account').html('Settings Account')
        $('.lng-logout').html(' ออกจากระบบ')
        $('.lng-advance-use').html('ใช้ล่วงหน้า')
        $('.lng-now-use').html('เรียกรถตอนนี้')
        $('.lng-search').html(' ค้นหา')




                	
    }
//     $.ajax({
//             type: 'POST',
//             url: '../service/getLanguage.php',
//             data: { 'id': $.cookie("login") },
//             //contentType: "application/json",
//             dataType: 'json',
//             success: function(data) {
//                 console.log(data)
                

//         }
//     });
// });
function language(lng){
    console.log(lng);
    $.cookie("lng", lng);
    window.location.reload();
    if (lng == 'cn') {
       	$('.lng-private').html('Private')
        $('.lng-join').html('Join')
        //menu
        $('.lng-register').html('Register')
        $('.lng-login').html('登录')
        $('.lng-product').html('产品')
        $('.lng-transports').html('交通用车')
        $('.lng-tours').html('景点玩乐')
        $('.lng-language').html('語')
        $('.lng-settings-account').html('Settings Account')
        $('.lng-logout').html('登出')






    }
    else if(lng == 'en'){
        $('.lng-private').html('Private')
        $('.lng-join').html('Join')
        //menu
        $('.lng-register').html('Register')
        $('.lng-login').html('Login')
        $('.lng-transports').html('Transports')
        $('.lng-tours').html('Transports')
        $('.lng-language').html('Transports')
        $('.lng-settings-account').html('Settings Account')
        $('.lng-logout').html('Logout')





        

    }
    else if(lng == 'th'){
        $('.lng-private').html('Private')
        $('.lng-join').html('Join') 
        //menu
        $('.lng-register').html('ลงทะเบียน')
        $('.lng-login').html('  เข้าสู่ระบบ')
        $('.lng-product').html('สินค้า') 
        $('.lng-transports').html(' รถให้บริการ')
        $('.lng-tours').html('ทัวร์')
        $('.lng-language').html('ภาษา')
        $('.lng-settings-account').html('Settings Account')
        $('.lng-logout').html(' ออกจากระบบ')





    }
}
});