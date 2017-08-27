$(document).ready(function() {
    $(".navbar-nav").swipe({
        swipeStatus: function(event, phase, direction, distance, duration, fingers) {
            if (phase == "move" && direction == "lng-register") {
                alert("aaaa")
                $(".navbar-toggle").addClass("toggled");
                return false;
            }
            if (phase == "move" && direction == "right") {
                $('html').removeClass('nav-open');
                setTimeout(function() {
                    $toggle.removeClass('toggled');
                    $('#bodyClick').remove();
                    $('.navbar-toggle').css('display', 'block');
                }, 250);
                return false;
            }
        }
    });
    var x = false;
    $('.navbar-toggle').click(function() {

        if (x == false) {
            // $('.BT').css('display', 'none');

        }
        // else {
        //     $('.BT').css('display', 'block');
        // }


    });
    $("#bodyClick").click(function() {

        // $('.BT').show()
        x = true;


    });
    $("#bodyClick").swipe({
        swipeStatus: function(event, phase, direction, distance, duration, fingers) {
            if (phase == "move" && direction == "lng-register") {
                alert("aaaa")
                $(".navbar-toggle").addClass("toggled");
                return false;;
            }
            if (phase == "move" && direction == "right") {
                $('html').removeClass('nav-open');
                setTimeout(function() {
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
        $('.lng-facilitiy').html('设施');
        $('.lng-conditioner').html('空調');
        $('.lng-audio-player').html('音頻播放器');
        $('.lng-cancel').html('取消');
        $('.lng-seating').html('座位数');
        $('.lng-terms-of-use').html('服务条款');
        $('.lng-close').html('密切');
        $('.lng-home').html('主頁');
        $('.lng-management').html('管理');
        $('.lng-new-password').html('新密码');
        $('.lng-confirm-password').html('确认密码');
        $('.lng-foget-pass').html('忘记密码');
        $('.lng-please-input-email').html('	请输入您的电子邮件');
        $('.lng-send').html('发送');
        $('.lng-change-password').html('更改密碼');
        $('.lng-change').html('更改');
        $('.lng-not-same').html('密码不一样');







        /////////////// Dash ///////////////////////////////////////
        $('#terms-of-use').html('<span>' +
            '<B>一. </B> 请注意，黄色或者绿色车牌为合法运营车辆。如看到其他颜色牌照可拒绝上车，并请联系我们热线。<br /><br />' +
            '<B>二. </B> 上⻋车请系好安全带，不然如遇警察检查需自己付罚款，如有意外保险⽆无法赔偿。<br /><br />' +
            '<B>三. </B> 上下车请保管好自己的物品。如有遗失，概不负责。<br /><br />' +
            '<B>四. </B> 如发生司机由于不可抗力因素未接到，在约定时间后5-15分钟内，请客人及时联系我们的24小时中文热线，如等待超过30分钟，请客人需及时自行打车离开！<br /><br />' +
            '我们会退还订单费用，如客人有打车凭证提供，我们将补偿打车费用，但是其他费用一律不负责赔偿，请知晓！</span>');
        $('.lng-name_d').html('名字');
        $('.lng-username_d').html('用户名');
        $('.lng-email_d').html('电子邮件');
        $('.lng-cr_d').html('客户参考');
        $('.lng-code_d').html('代码');
        $('.lng-amount_d').html('代码');
        $('.lng-search_d').html('<input type="text" value="" class="form-control" placeholder="搜索 名字..." onkeyup="myFunction()" id="myInput"  style="margin-left: -6px;" />');

        $('.lng-sa_d').html('设置帐户');
        $('.lng-customer_d').html('顾客');
        $('.lng-payment_d').html('付款');
        $('.lng-bag-big').html('袋大');
        $('.lng-plan').html('计划');
        $('.lng-bag-small').html('袋小');
        $('.lng-arrival-date').html('到达日期');
        $('.lng-arrival-time').html('到达时间');
        $('.lng-detail-order').html('订单详细');
        $('.lng-amount').html('人民 ');
        $('.lng-book-by').html('预订人');
        $('.lng-voucher-no').html('凭证编号');
        $('.lng-date').html('日期');
        $('.lng-order').html('訂購');

        $('.lng-last-name').html('姓');
        $('.lng-address').html('地址');
        $('.lng-country').html('国家');
        $('.lng-old-password').html('舊密碼');
















    } else if ($.cookie("lng") == 'en') {
        $('.lng-private').html('Private');
        $('.lng-join').html('Join');
        //menu
        $('.lng-register').html('Register');
        $('.lng-login').html('Login');
        $('.lng-product').html('Product');
        $('.lng-transports').html('Transports');
        $('.lng-tours').html('Tours');
        $('.lng-language').html('Language');
        $('.lng-settings-account').html('Settings Account');
        $('.lng-logout').html('Logout');
        //home
        $('.lng-advance-use').html('Find transfer');
        $('.lng-now-use').html('Pick Up Here');
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
        $('.lng-facilitiy').html('Facilitiy');
        $('.lng-conditioner').html('Air Conditioner');
        $('.lng-audio-player').html('Audio Player');
        $('.lng-cancel').html('Cancel');
        $('.lng-seating').html('Seating');
        $('.lng-terms-of-use').html('Terms of Use');
        $('.lng-close').html('Close');
        $('.lng-home').html('Home');
        $('.lng-management').html('Management');
        $('.lng-new-password').html('New Password');
        $('.lng-confirm-password').html('Confirm Password');
        $('.lng-foget-pass').html('Forgot your password');
        $('.lng-please-input-email').html('Please input your email');
        $('.lng-send').html('Send');
        $('.lng-change-password').html('Change password');
        $('.lng-change').html('Change');
        $('.lng-not-same').html('Password not same');









        /////////////// Dash ///////////////////////////////////////
        $('#terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');
        $('.lng-name_d').html('Name');
        $('.lng-username_d').html('Username');
        $('.lng-email_d').html('Email');
        $('.lng-cr_d').html('Cutomer Reference');
        $('.lng-code_d').html('Code');
        $('.lng-amount_d').html('Amount');
        $('.lng-search_d').html('<input type="text" value="" class="form-control" placeholder="Search name..." onkeyup="myFunction()" id="myInput"  style="margin-left: -6px;" />');
        $('.lng-sa_d').html('Settings Account');
        $('.lng-customer_d').html('Customer');
        $('.lng-payment_d').html('Payment');
        $('.lng-bag-big').html('Bag big');
        $('.lng-plan').html('Plan');
        $('.lng-bag-small').html('Bag small');
        $('.lng-arrival-date').html('Arrival date');
        $('.lng-arrival-time').html('Arrival time');
        $('.lng-detail-order').html('Detail Order');
        $('.lng-amount').html('Amount ');
        $('.lng-book-by').html('Book by');
        $('.lng-voucher-no').html('Voucher No.');
        $('.lng-date').html('Date');
        $('.lng-order').html('Order');

        $('.lng-last-name').html('Last Name');
        $('.lng-address').html('Address');
        $('.lng-country').html('Country');
        $('.lng-old-password').html('Old Password');







    } else if ($.cookie("lng") == 'th') {
        $('.lng-private').html('รถส่วนตัว');
        $('.lng-join').html('รถร่วมบริการ');
        //menu
        $('.lng-register').html('ลงทะเบียน');
        $('.lng-login').html('  เข้าสู่ระบบ');
        $('.lng-product').html('สินค้า');
        $('.lng-transports').html(' รถให้บริการ');
        $('.lng-tours').html('ทัวร์');
        $('.lng-language').html('ภาษา');
        $('.lng-settings-account').html('ตั้งค่าบัญชี');
        $('.lng-logout').html(' ออกจากระบบ');
        $('.lng-advance-use').html('ค้นหาสถานที่รับส่ง');
        $('.lng-now-use').html('รับที่นี่');
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
        $('.lng-facilitiy').html('ความสะดวก');
        $('.lng-conditioner').html('เครื่องปรับอากาศ');
        $('.lng-audio-player').html('เครื่องเสียง');
        $('.lng-cancel').html('ยกเลิก')
        $('.lng-seating').html('ที่นั่ง');
        $('.lng-terms-of-use').html('ข้อกำหนดการใช้งาน');
        $('.lng-close').html('ปิด');
        $('.lng-home').html('หน้าหลัก');
        $('.lng-management').html('การจัดการ');
        $('.lng-new-password').html('รหัสผ่านใหม่');
        $('.lng-confirm-password').html('ยืนยันรหัสผ่าน');
        $('.lng-bag-big').html('กระเป๋าใหญ่');
        $('.lng-plan').html('แผน');
        $('.lng-bag-small').html('กระเป๋าเล็ก');
        $('.lng-foget-pass').html('ลืมรหัสผ่าน');
        $('.lng-please-input-email').html('โปรดใส่อีเมลของคุณ');
        $('.lng-send').html('ส่ง');
        $('.lng-change-password').html('เปลี่ยนรหัสผ่าน');
        $('.lng-change').html('เปลี่ยน');
        $('.lng-not-same').html('รหัสผ่านไม่เหมือนกัน');
        $('.lng-detail-order').html('รายละเอียดสั่งซื้อ');
        $('.lng-voucher-no').html('เลขที่วอเชอร์');









        /////////////// Dash ///////////////////////////////////////
        $('#terms-of-use').html('<span >' +
            '<B>1.</B> โปรดทราบว่ามีเพียงแผ่นป้ายทะเบียนรถสีเขียวหรือสีเหลืองเท่านั้นที่ใช้เป็นยานพาหนะขนส่งสาธารณะที่ถูกต้องตามกฎหมาย หากคุณเห็นป้ายทะเบียนรถเป็นสีอื่น คุณสามารถปฏิเสธการโดยสารได้ และโปรดติดต่อสายด่วนของเรา<br /><br />' +
            '<B >2.</B> กรุณาคาดเข็มขัดนิรภัย มิฉะนั้นในกรณีที่มีการเรียกตรวจสอบจากตำรวจ คุณต้องต้องจ่ายค่าปรับเอง และในกรณีที่เกิดอุบัติเหตุ คุณจะไม่สามารถได้รับค่าชดเชยจากบริษัทประกันภัย<br /><br />' +
            '<B>3.</B> โปรดตรวจสอบทรัพย์สินของคุณก่อนที่รถจะออกเดินทางหรือรถถึงที่หมาย เราจะไม่รับผิดชอบต่อความสูญเสียในกรณีใดๆ ทั้งสิ้น<br /><br />' +
            '<B>4.</B> ในกรณีที่มีเหตุสุดวิสัยคนขับไม่ได้รับรอเกิน 5-15 นาทีจากเวลาที่ตกลงกัน โปรดติดต่อศูนย์บริการตลอด 24 ชั่วโมงสายด่วนทันที ถ้ารอคอยมากกว่า 30 นาที กรุณาเรียกรถเอง! เราจะคืนเงินให้ท่าน100%ในการจอง และจะคืนเงินที่ท่านเรียกรถ (แต่ต้องมีหลักฐานใบเสร็จหรือรูปยืนยัน) แต่จะไม่รับผิดชอบค่าเสียหายอื่น  โปรดทราบ!</span> ');
        $('.lng-name_d').html('ชื่อ');
        $('.lng-username_d').html('ชื่อผู้ใช้');
        $('.lng-email_d').html('อีเมล์');
        $('.lng-cr_d').html('การอ้างอิงของลูกค้า');
        $('.lng-code_d').html('รหัส');
        $('.lng-amount_d').html('จำนวน');
        $('.lng-search_d').html('<input type="text" value="" class="form-control" placeholder="ค้นหา ชื่อ..." onkeyup="myFunction()" id="myInput"  style="margin-left: -6px;" />');
        $('.lng-sa_d').html('ตั้งค่าบัญชี');
        $('.lng-customer_d').html('ลูกค้า');
        $('.lng-payment_d').html('ชำระเงิน');
        $('.lng-arrival-date').html('วันที่มาถึง');
        $('.lng-arrival-time').html('เวลาถึง');
        $('.lng-amount').html('จำนวน');
        $('.lng-book-by').html('คนจอง');
        $('.lng-date').html('วันที่');
        $('.lng-order').html('ใบสั่ง');

        $('.lng-last-name').html('นามสกุล');
        $('.lng-address').html('ที่อยู่');
        $('.lng-country').html('ประเทศ');
        $('.lng-old-password').html('รหัสผ่านเก่า');


    } else if ($.cookie("lng") == undefined) {
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
        $('.lng-advance-use').html('Find transfer');
        $('.lng-now-use').html('Pick Up Here');
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
        $('.lng-facilitiy').html('Facilitiy')
        $('.lng-conditioner').html('Air Conditioner');
        $('.lng-audio-player').html('Audio Player');
        $('.lng-cancel').html('Cancel')
        $('.lng-seating').html('Seating');
        $('.lng-terms-of-use').html('Terms of Use');
        $('.lng-close').html('Close');
        $('.lng-home').html('Home');
        $('.lng-management').html('Management');
        $('.lng-new-password').html('New Password');
        $('.lng-confirm-password').html('Confirm Password');
        $('.lng-arrival-date').html('Arrival date');
        $('.lng-arrival-time').html('Arrival time');
        $('.lng-foget-pass').html('Forgot your password');
        $('.lng-please-input-email').html('Please input your email');
        $('.lng-send').html('Send');
        $('.lng-change-password').html('Change password');
        $('.lng-change').html('Change');
        $('.lng-not-same').html('Password not same');
        $('.lng-date').html('date');












        /////////////// Dash ///////////////////////////////////////
        $('#terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');
        $('.lng-name_d').html('Name');
        $('.lng-username_d').html('Username');
        $('.lng-email_d').html('Email');
        $('.lng-cr_d').html('Cutomer Reference');
        $('.lng-code_d').html('Code');
        $('.lng-amount_d').html('Amount');
        $('.lng-search_d').html('<input type="text" value="" class="form-control" placeholder="Search name..." onkeyup="myFunction()" id="myInput"  style="margin-left: -6px;" />');

        $('.lng-sa_d').html('Settings Account');
        $('.lng-customer_d').html('Customer');
        $('.lng-payment_d').html('Payment');
        $('.lng-bag-big').html('Bag big');
        $('.lng-plan').html('Plan');
        $('.lng-bag-small').html('Bag small');
        $('.lng-detail-order').html('Detail Order');
        $('.lng-amount').html('Amount ');
        $('.lng-book-by').html('Book by');
        $('.lng-voucher-no').html('Voucher No.');
        $('.lng-order').html('Order');

        $('.lng-last-name').html('Last Name');
        $('.lng-address').html('Address');
        $('.lng-country').html('Country');
        $('.lng-old-password').html('Old Password');
























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

function language(lng) {
    console.log(lng);
    $.cookie("lng", lng);
    window.location.reload();

}