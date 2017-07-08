$(document).ready(function() {
    var bodyClick = document.getElementById("bodyClick")
    var collapse = $(".navbar-collapse")
       Hammer('#bodyClick').on("swipeleft",function(){
        $('html').removeClass('nav-open');
             setTimeout(function(){
                       $toggle.removeClass('toggled');
                       $('#bodyClick').remove();
                   }, 550);
            
       })
    // });
    
    //hammer.js
    
    //Swipe
    // });
    
    // });
    
    
    // $("#bodyClick").swipe({
    //           swipeStatus:function(event, phase, direction, distance, duration, fingers)
    //               {
    //                   if (phase=="move" && direction =="lng-register") {
    //                     alert("aaaa")
    //                        $(".navbar-toggle").addClass("toggled");
    //                        return false;
    //                   }
    //                   if (phase=="move" && direction =="right") {
    //                     alert('bbbb')
    //                        $(".navbar-toggle").removeClass("toggled");
    //                        return false;
    //                   }
    //               }
    //       }); 

	console.log($.cookie("lng"));
	if ($.cookie("lng") == 'cn') {
       $('.lng-private').html('专车')
        $('.lng-join').html('拼车')
        //menu
        $('.lng-register').html('登記')
        $('.lng-login').html('登录')
        $('.lng-product').html('产品')
        $('.lng-transports').html('交通用车')
        $('.lng-tours').html('景点玩乐')
        $('.lng-language').html('语言')
        $('.lng-settings-account').html('设置帐户')
        $('.lng-logout').html('登出')
        $('.lng-advance-use').html('提前使用')
        $('.lng-now-use').html('现在使用')
        $('.lng-search').html('搜索')
        $('.lng-dashboard').html('报告与管理')
        $('.lng-lng-car-type').html('车型')
        $('.lng-book').html('預訂')
        $('.lng-capacity-info').html('容量信息')
        $('.lng-facilities').html('设施')






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
        $('.lng-language').html('Language')
        $('.lng-settings-account').html('Settings Account')
        $('.lng-logout').html('Logout')
        //home
        $('.lng-advance-use').html('Advance use')
        $('.lng-now-use').html('Now use')
        $('.lng-search').html('Search')
        $('.lng-dashboard').html('Report&management')
        $('.lng-lng-car-type').html('Car type')
        $('.lng-book').html('Book')
        $('.lng-capacity-info').html('Capacity info')
        $('.lng-facilities').html('Capacity info')




        

    }
    else if($.cookie("lng") == 'th'){
        $('.lng-private').html('รถส่วนตัว')
        $('.lng-join').html('รถร่วมบริการ') 
        //menu
        $('.lng-register').html('ลงทะเบียน')
        $('.lng-login').html('  เข้าสู่ระบบ')
        $('.lng-product').html('สินค้า') 
        $('.lng-transports').html(' รถให้บริการ')
        $('.lng-tours').html('ทัวร์')
        $('.lng-language').html('ภาษา')
        $('.lng-settings-account').html('   ตั้งค่าบัญชี')
        $('.lng-logout').html(' ออกจากระบบ')
        $('.lng-advance-use').html('ใช้ล่วงหน้า')
        $('.lng-now-use').html('เรียกรถตอนนี้')
        $('.lng-search').html(' ค้นหา')
        $('.lng-dashboard').html('รายงานและการจัดการ')
        $('.lng-lng-car-type').html('ประเภทรถ')
        $('.lng-book').html('จอง')
        $('.lng-capacity-info').html('ข้อมูลความจุ')
        $('.lng-facilities').html('สิ่งอำนวยความสะดวก ')





                	
    }
    else{
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
        $('.lng-dashboard').html('Report&management')
        $('.lng-lng-car-type').html('Car type')
        $('.lng-book').html('Book')
        $('.lng-capacity-info').html('Capacity info')
        $('.lng-facilities').html('Facilities')




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
});
function language(lng){
    console.log(lng);
    $.cookie("lng", lng);
    window.location.reload();
    
}
