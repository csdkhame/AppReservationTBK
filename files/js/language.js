$(document).ready(function() {
    $(".navbar-nav").swipe({
              swipeStatus:function(event, phase, direction, distance, duration, fingers)
                  {
                      if (phase=="move" && direction =="lng-register") {
                        alert("aaaa")
                           $(".navbar-toggle").addClass("toggled");
                           return false;
                      }
                      if (phase=="move" && direction =="right") {
                        $('html').removeClass('nav-open');
             setTimeout(function(){
                       $toggle.removeClass('toggled');
                        alert("aaaa")
                       $('#bodyClick').remove();
                   }, 250);
                           return false;
                      }
                  }
          }); 

    $("#bodyClick").swipe({
              swipeStatus:function(event, phase, direction, distance, duration, fingers)
                  {
                      if (phase=="move" && direction =="lng-register") {
                        alert("aaaa")
                           $(".navbar-toggle").addClass("toggled");
                           return false;
             ;         }
                      if (phase=="move" && direction =="right") {
                        $('html').removeClass('nav-open');
             setTimeout(function(){
                       $toggle.removeClass('toggled');
                       $('#bodyClick').remove();
                   }, 250);
                           return false;
                      }
                  }
          }); 

	console.log($.cookie("lng"));
	if ($.cookie("lng") == 'cn') {
       $('.lng-private').html('专车');
        $('.lng-join').html('拼车');
        //menu
        $('.lng-register').html('登記');
        $('.lng-login').html('登录');
        $('.lng-product').html('产品');
        $('.lng-transports').html('交通用车');
        $('.lng-tours').html('景点玩乐');
        $('.lng-language').html('语言');
        $('.lng-settings-account').html('设置帐户');
        $('.lng-logout').html('登出');
        $('.lng-advance-use').html('提前使用');
        $('.lng-now-use').html('现在使用');
        $('.lng-search').html('搜索');
        $('.lng-dashboard').html('报告与管理');
        $('.lng-car-type').html('车型');
        $('.lng-book').html('預訂');
        $('.lng-capacity-info').html('容量信息');
        $('.lng-facilities').html('设施');
        $('.lng-summary').html('总结');
        $('.lng-contact-infomation').html('联系信息');
        $('.lng-from').html('从');
        $('.lng-to').html('至');
        $('.lng-type').html('类型');
        $('.lng-price').html('价格');
        $('.lng-total-prices').html('总价');
        $('.lng-person').html('人');
        $('.lng-car').html('车');
        $('.lng-you-choose').html('你选择');
        $('.lng-adult').html('成人');
        $('.lng-child').html('儿童');
        $('.lng-visa').html('落地签证');
        $('.lng-departure-terminal').html('出发航站楼');
        $('.lng-get-detail').html('获取注册的详细信息');
        $('.lng-product-name').html('产品');
        $('.lng-pick-up-from').html('接客地点');
        $('.lng-pick-up-to').html('送客地点');
        $('.lng-first-name').html('名');
        $('.lng-phone').html('电话');
        $('.lng-email').html('电子邮件');
        $('.lng-other').html('其他');
        $('.lng-flight').html('航班');
        $('.lng-sum-total').html('总计');
        $('.lng-acceptance-of-terms').html('接受条款');
        $('.lng-booking-infomation').html('预订信息');
        $('.lng-none').html('没有');
        $('.lng-yes').html('是的');
        $('.lng-no').html('不是');
        $('.lng-or').html('或者');
        $('.lng-password').html('密碼');
        $('.lng-not-member').html('非会员？');
        $('.lng-sign-up-now').html('立即注册');
        $('.lng-why-become').html('为什么成为App Booking会员？');
        $('.lng-special-product').html('特价商品');
        $('.lng-exclusive-discount').html('优惠通过电子邮件');
        $('.lng-fast-booking').html('快速预约只需一键即可');
        $('.lng-have-member').html('有会员？');
        $('.lng-registered-customers').html('注册客户');
        $('.lng-sign-create').html('登录或创建帐户');
        $('.lng-what-is-your-email').html('你的电子邮件是什么（手机帐号的手机）？');
         $('.lng-sign-in').html('登入');
        $('.lng-check').html('检查');



    }
    else if($.cookie("lng") == 'en'){
        $('.lng-private').html('Private');
        $('.lng-join').html('Join');
        //menu
        $('.lng-register').html('Register');
        $('.lng-login').html('Login');
        $('.lng-product').html('Product');
        $('.lng-transports').html('Transports');
        $('.lng-tours').html('Transports');
        $('.lng-language').html('Language');
        $('.lng-settings-account').html('Settings Account');
        $('.lng-logout').html('Logout');
        //home
        $('.lng-advance-use').html('Advance use');
        $('.lng-now-use').html('Now use');
        $('.lng-search').html('Search');
        $('.lng-dashboard').html('Report&management');
        $('.lng-car-type').html('Car type');
        $('.lng-book').html('Book');
        $('.lng-capacity-info').html('Capacity info');
        $('.lng-facilities').html('Capacity info');
        $('.lng-summary').html('Summary');
        $('.lng-contact-infomation').html('Contact infomation');
        $('.lng-from').html('From');
        $('.lng-to').html('To');
        $('.lng-type').html('Type');
        $('.lng-price').html('Price');
        $('.lng-total-prices').html('Total price');
        $('.lng-person').html('Person');
        $('.lng-car').html('Car');
        $('.lng-you-choose').html('You choose');
        $('.lng-adult').html('Adult');
        $('.lng-child').html('Child');
        $('.lng-visa').html('Visa on Arrival');
        $('.lng-departure-terminal').html('Departure terminal');
        $('.lng-get-detail').html('Get Detail for register');
        $('.lng-product-name').html('Product name');
        $('.lng-pick-up-from').html('Pick up from');
        $('.lng-pick-up-to').html('Pick up to');
        $('.lng-first-name').html('First Name');
        $('.lng-phone').html('Phone');
        $('.lng-email').html('Email');
        $('.lng-other').html('Other');
        $('.lng-flight').html('Flight');
        $('.lng-sum-total').html('Sum total');
        $('.lng-acceptance-of-terms').html('Acceptance of terms');
        $('.lng-booking-infomation').html('Booking infomation');
        $('.lng-none').html('None');
        $('.lng-yes').html('Yes');
        $('.lng-no').html('No');
        $('.lng-or').html('or');
        $('.lng-password').html('Password');
        $('.lng-not-member').html('Not a member?');
        $('.lng-sign-up-now').html('Sign Up Now');
        $('.lng-why-become').html('Why become a App Booking member?');
        $('.lng-special-product').html('Special Product Price');
        $('.lng-exclusive discount').html('Exclusive Discount via Email');
        $('.lng-fast-booking').html('Fast Booking with Only One-Click');
        $('.lng-have-member').html('Have a member?');
        $('.lng-registered-customers').html('Registered customers');
        $('.lng-sign-create').html('Sign In or Create an Account');
        $('.lng-what-is-your-email').html(' What is your email (phone for mobile accounts)?');
         $('.lng-sign-in').html('Sign in');
        $('.lng-check').html('Check');



    }
    else if($.cookie("lng") == 'th'){
        $('.lng-private').html('รถส่วนตัว');
        $('.lng-join').html('รถร่วมบริการ') ;
        //menu
        $('.lng-register').html('ลงทะเบียน');
        $('.lng-login').html('  เข้าสู่ระบบ');
        $('.lng-product').html('สินค้า') ;
        $('.lng-transports').html(' รถให้บริการ');
        $('.lng-tours').html('ทัวร์');
        $('.lng-language').html('ภาษา');
        $('.lng-settings-account').html('   ตั้งค่าบัญชี');
        $('.lng-logout').html(' ออกจากระบบ');
        $('.lng-advance-use').html('ใช้ล่วงหน้า');
        $('.lng-now-use').html('เรียกรถตอนนี้');
        $('.lng-search').html(' ค้นหา');
        $('.lng-dashboard').html('รายงานและการจัดการ');
        $('.lng-car-type').html('ประเภทรถ');
        $('.lng-book').html('จอง');
        $('.lng-capacity-info').html('ข้อมูลความจุ');
        $('.lng-facilities').html('สิ่งอำนวยความสะดวก ');
        $('.lng-summary').html('สรุป');
        $('.lng-contact-infomation').html('ข้อมูลติดต่อ');
        $('.lng-from').html('จาก');
        $('.lng-to').html('ไปยัง');
        $('.lng-type').html('ประเภท');
        $('.lng-price').html('ราคา');
        $('.lng-total-prices').html('ราคารวม');
        $('.lng-person').html('คน');
        $('.lng-car').html('รถ');
        $('.lng-you-choose').html('คุณเลือก');
        $('.lng-adult').html('ผู้ใหญ่');
        $('.lng-child').html('เด็ก');
        $('.lng-visa').html('วีซ่าเมื่อมาถึง');
        $('.lng-departure-terminal').html('อาคารขาออก');
        $('.lng-get-detail').html('รับรายละเอียดเพื่อลงทะเบียน');
        $('.lng-product-name').html('สินค้า');
        $('.lng-pick-up-from').html('รับจาก');
        $('.lng-pick-up-to').html('สถานที่ส่ง');
        $('.lng-first-name').html('ชื่อ');
        $('.lng-phone').html('โทรศัพท์');
        $('.lng-email').html('อีเมล์');
        $('.lng-other').html('อื่น ๆ');
        $('.lng-flight').html('เที่ยวบิน');
        $('.lng-sum-total').html('ยอดรวม');
        $('.lng-acceptance-of-terms').html('การยอมรับข้อตกลง');
        $('.lng-booking-infomation').html('ข้อมูลการจอง');
        $('.lng-none').html('ไม่มี');
        $('.lng-yes').html('ใช่');
        $('.lng-no').html('ไม่');
        $('.lng-or').html('หรือ');
        $('.lng-password').html('รหัสผ่าน');
        $('.lng-not-member').html('ไม่ใช่สมาชิก?');
        $('.lng-sign-up-now').html('สมัครตอนนี้เลย');
        $('.lng-why-become').html('ทำไมต้องเป็นสมาชิกการจองแอ็พ');
        $('.lng-special-product').html('ราคาสินค้าพิเศษ');
        $('.lng-exclusive discount').html('ส่วนลดพิเศษทางอีเมล');
        $('.lng-fast-booking').html('จองได้อย่างรวดเร็วด้วยการคลิกเพียงครั้งเดียว');
        $('.lng-have-member').html('มีสมาชิกหรือไม่? ');
        $('.lng-registered-customers').html('ลูกค้าที่ลงทะเบียน');
        $('.lng-sign-create').html('เข้าสู่ระบบหรือสร้างบัญชี');
        $('.lng-what-is-your-email').html('อีเมลของคุณคืออะไร (โทรศัพท์สำหรับบัญชีมือถือ)?');
         $('.lng-sign-in').html('ลงชื่อเข้าใช้');
        $('.lng-check').html('ตรวจสอบ');


                	
    }
    else if($.cookie("lng") == undefined){
         $('.lng-private').html('Private');
        $('.lng-join').html('Join');
        //menu
        $('.lng-register').html('Register');
        $('.lng-login').html('Login');
        $('.lng-product').html('Product');
        $('.lng-transports').html('Transports');
        $('.lng-tours').html('Transports');
        $('.lng-language').html('Language');
        $('.lng-settings-account').html('Settings Account');
        $('.lng-logout').html('Logout');
        //home
        $('.lng-advance-use').html('Advance use');
        $('.lng-now-use').html('Now use');
        $('.lng-search').html('Search');
        $('.lng-dashboard').html('Report&management');
        $('.lng-car-type').html('Car type');
        $('.lng-book').html('Book');
        $('.lng-capacity-info').html('Capacity info');
        $('.lng-facilities').html('Capacity info');
        $('.lng-summary').html('Summary');
        $('.lng-contact-infomation').html('Contact infomation');
        $('.lng-from').html('From');
        $('.lng-to').html('To');
        $('.lng-type').html('Type');
        $('.lng-price').html('Price');
        $('.lng-total-prices').html('Total price');
        $('.lng-person').html('Person');
        $('.lng-car').html('Car');
        $('.lng-you-choose').html('You choose');
        $('.lng-adult').html('Adult');
        $('.lng-child').html('Child');
        $('.lng-visa').html('Visa on Arrival');
        $('.lng-departure-terminal').html('Departure terminal');
        $('.lng-get-detail').html('Get Detail for register');
        $('.lng-product-name').html('Product name');
        $('.lng-pick-up-from').html('Pick up from');
        $('.lng-pick-up-to').html('Pick up to');
        $('.lng-first-name').html('First Name');
        $('.lng-phone').html('Phone');
        $('.lng-email').html('Email');
        $('.lng-other').html('Other');
        $('.lng-flight').html('Flight');
        $('.lng-sum-total').html('Sum total');
        $('.lng-acceptance-of-terms').html('Acceptance of terms');
        $('.lng-booking-infomation').html('Booking infomation');
        $('.lng-none').html('None');
        $('.lng-yes').html('Yes');
        $('.lng-no').html('No');
        $('.lng-or').html('or');
        $('.lng-password').html('Password');
        $('.lng-not-member').html('Not a member?');
        $('.lng-sign-up-now').html('Sign Up Now');
        $('.lng-why-become').html('Why become a App Booking member?');
        $('.lng-special-product').html('Special Product Price');
        $('.lng-exclusive discount').html('Exclusive Discount via Email');
        $('.lng-fast-booking').html('Fast Booking with Only One-Click');
        $('.lng-have-member').html('Have a member?');
        $('.lng-registered-customers').html('Registered customers');
        $('.lng-sign-create').html('Sign In or Create an Account');
        $('.lng-what-is-your-email').html(' What is your email (phone for mobile accounts)?');
         $('.lng-sign-in').html('Sign in');

        $('.lng-check').html('Check');





























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
