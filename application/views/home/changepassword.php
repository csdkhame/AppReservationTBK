<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>App booking</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- Canonical SEO -->

    <?php echo link_tag('files/css/bootstrapre.min.css'); ?>
    <!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
    
    <?php echo link_tag('files/css/materialre-kit.min.css?v=1.1.1'); ?>
    
    
    <?php echo link_tag('files/assets/css/materialre-bootstrap-wizard.css'); ?>
    
    

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php echo link_tag('files/assets/css/demo.css'); ?>
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    

    <!--  Social tags      -->
    

</head>

<body style="background-color: #fff ">

    <style>
        .page-header .container {
    padding-top:0;
    color: #000;
    background-color: #fff;
    border-bottom: 1px solid #C8E1F5;
}
.navbar.navbar-transparent{
    background-color: #fff;
    color: #000;
    border-bottom: 1px solid #C8E1F5;
}
.navbar {
    box-shadow: none;
}

    </style>
 <section style="position: relative; min-height: 100vh;">    
    
   
    <div id="change-password">
            <div class="box-in-foget" >
                <div style="padding: 12px;">
                   <div class="col-md-12" id="forget"> 
                       <h4 style="    text-align: center;">เปลียนรหัสผ่าน</h4>
                        <div style="margin-top: 50px; font-size: 15px; color: #333333;margin-bottom: 10px;">
                            <!-- <span>change your new pass word </span> -->
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                            </span>   
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"><span class="lng-new-password"</span></label>
                                <input required="True" type="password" class="form-control" id="new-password" size="80">
                                <!-- <label class="control-label"><span class="lng-confirm-password">Confirm new password</span></label> -->
                                
                                <!-- <input required="True" type="email" class="form-control" id="email-foget" size="80"> -->
                                <span class="material-input"></span>
                                
                                
                            </div>  
                            <!-- <div  class="btn-send lng-send" style="padding: 12px 20px;" >Change</div>    -->
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                            </span>   
                            <div class="form-group label-floating is-empty">
                                <!-- <label class="control-label"><span class="lng-new-password">New password</span></label> -->
                                <!-- <input required="True" type="email" class="form-control" id="email-foget" size="80"> -->
                                <label class="control-label"><span class="lng-confirm-password"></span></label>
                                
                                <input required="True" type="password" class="form-control" id="confirm-password" size="80">
                                <span class="material-input"></span>
                                
                                
                            </div>  
                            <!-- <div  class="btn-send lng-send" style="padding: 12px 20px;" >Change</div>    -->
                        </div>
                        <div class="not-same" style="color:red;text-align:center;font-size:15px;display:none;">password not same</div>
                    </div>
                   
                    <!-- <div type="button" class="btn-close" >Close</div> -->
                    <!-- <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i> -->
                </div>
                <div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;"> 
                
                    <div class="btn-change lng-change" >Change</div>
                </div>
            </div>
        </div>
</section>

    
<style>
.btn-send{
    padding: 12px 20px;
    background: #16B3B1;
    color: #fff;
    width: 140px;
    position: absolute;
    text-align: center;
    right: 0px;
    margin-top: 15px;   
}
.btn-login-forget{
    text-transform: uppercase;
    text-align: center;
    color: #ffffff;
    border: 1px solid #4BB1C1;
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
    background: #16B3B1;
    display: none;
}
    #sectionsNav {
    position: absolute;
    background: rgba(255, 255, 255, 0) !important;
    margin: auto;
    z-index: 20;
    width: 100%;
    padding-bottom: 0;
    padding-top: 0;
    box-shadow: none;
    /* background: #07c284; */
}
#foget-password{
    z-index: 20; 
    position: fixed; 
    /* width: 100vw; 
    height: 100vh;  */
    left: 0px; top: 0px; 
    /* background: rgba(0, 0, 0, 0.59); */
    display:none;
}
.box-in-foget{
    height: 100vh;
        /* border-radius: 4px; */
        background: #fff;
        min-width: 100%;
        /* height: auto; */
        left: 50vw;
        top: 50vh;
        
        transform: translate(-50%,-50%);
        position: fixed;
        z-index: 3;
}
.btn-change {
    /*width: 200px; */
    background: #16B3B1;
    /* text-transform: uppercase; */
    text-align: center;
    color: #ffffff;
    border: 1px solid #4BB1C1;
    /* position: absolute; */
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
}

.btn-login{
    /* color: #3b5998; */
    font-weight: 700;
    display: block;
    /* line-height: 36px; */
    padding: 10px;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    /* border-radius: 4px; */
    text-align: center;
    color: #ffffff;
    /* border: 1px solid #16B3B1; */
    background-color: #16B3B1;


}
#checkmail{
    background-color: #FF5722;
}
/* .btn-login:hover{
     border: 1px solid #3b5998;
     background-color: #3b5998;
     color: #ffffff;
} */
.btn-signup{
    color: #3b5998;
    border: 1px solid #16B3B1;
    background-color: #16B3B1;
    font-weight: 700;
    display: block;
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    /* border-radius: 4px; */
    text-align: center;
     color: #ffffff;

}

 @media screen and (max-width: 767px){
    #title-regis{
        color: #E47911;
        margin-top: 0;

} 
#title-info{
        margin-top: 30px;
    font-size: 18px;
} 
#box-left{
    border-right: none;
} 


                

}

           
        </style>
        <!--   Big container   -->



    
                    
                </div>
                 
                <style>
                    #getcapa{
                        background-color: #ddd;
                        height: 35px;
                    }
                    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                        border-top: none;
                    }
                    #table1{
                        margin-top: 10px !important;
                    }
                    .footer a{
                        color: #000;
                        font-weight:normal;
                    }

                </style>
             
   

    <!--     *********    END PRICING 5      *********      -->
</body>
    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script> 
     <script src="<?php echo base_url(); ?>files/js/hammer.js" type="text/javascript"></script>
     <script src="<?php echo base_url(); ?>files/js/hammer.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>files/js/hammer-time.min.js" type="text/javascript"></script>
     <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
      



    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
  <script src="<?php echo base_url(); ?>files/js/moment.min.js"></script>

    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
    <script src="<?php echo base_url(); ?>files/js/nouislider.min.js" type="text/javascript"></script>

    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-selectpicker.js" type="text/javascript"></script>

    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="<?php echo base_url(); ?>files/js/bootstrap-tagsinput.js"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
    <script src="<?php echo base_url(); ?>files/js/jasny-bootstrap.min.js"></script>
     <!--  Plugin for the Wizard -->
     <script src="<?php echo base_url(); ?>files/assets/js/jquery.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="<?php echo base_url(); ?>files/assets/js/jquery.validate.min.js"></script>
    <!--    Plugin For Google Maps   -->
    <!-- <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> -->

    <!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
    <script src="<?php echo base_url(); ?>files/js/atv-img-animation.js" type="text/javascript"></script>

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script src="<?php echo base_url(); ?>files/js/material-kit.min.js?v=1.1.1" type="text/javascript"></script>

    <!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/jquery.sharrre.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>files/js/book-script.js"></script>  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time()?>"></script> 
  
    
    <style>
        .index-page .header-filter:after, .presentation-page .header-filter:after {
    background: rgba(132,13,121,.88);
    background: linear-gradient(45deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%);
    background: -moz-linear-gradient(135deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%);
    /* background: -webkit-linear-gradient(135deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%); */
    /* background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgb(16, 15, 204)); */
    background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
}
.index-page .page-header, .presentation-page .page-header {
    height: 50vh;
    overflow: hidden;
}
.main-raised {
    margin: -60px 30px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
    margin-bottom: 50px;
}
#imgcountry{
    width: 25px;
    margin-right: 15px;
}
.modal .modal-dialog {
    margin-top: 20px !important;
}
.box-country ul{
                        padding-left: 0;

                    }
                    .box-country ul li{
                            list-style: none;
    padding: 8px 20px;
                    }
                    #span-phonecode{
                        padding-right: 10px;
                    }
                    .box-country ul li:hover{
                        background-color: #ffd000;
                        color: #000;
                    }
                    #textcountry{
                        text-align: center;
                    }
                    #code{
                        text-align: center;
                    }
                    label.form-control
                    {
                        margin-top: 20px;
                    }
                    #calen{
                       margin-top: -15px;
                        margin-right: 2px;
                        position: absolute;
                        font-size: 20px;
                        color: #9E9E9E; 
                    }
.btn-login{
   margin-left: 40px;
    margin-top: 30px;
}
.btn-signup{
        margin-left: 40px;
    margin-top: 30px;
}
.text-sign{
    margin-left: 55px;
}

                     @media screen and (max-width: 767px){
                    


                #textcountry{
                        text-align: left;
                    }
                     #code{
                        text-align: left;
                    }
                    #tphone{
                        padding: 0;
                    }
                    .btn-login{
    margin-left:0;
    margin-top: 30px;
}

.text-sign{
        margin-left: 0;
    text-align: center;
}
.loginReg__or{
    display: none !important;
}
.social-column .social-inner{
    display: block;
}
.social-column {
    padding: 30px 0;
}
.btn-signup {
    margin-left: 0;
    margin-top: 30px;
}

                }

</style>
<style>
    .navbar-right{
    /* background: #000; */
}
.textmenu{
    margin-left: 10px;
}
.imgmem-log{
    
}
.imgmemu{
    width: 35px;  
    height: 35px; 
    border-radius: 50px;  
}
.user {
    background: #07c284;
    text-align: center;
    padding-bottom: 20px;
    /* margin: 25px auto 0; */
    position: relative;
    height: 160px;
    display:none;
}
.user .photo {
    width: 100%;
    /* height: 110px; */
    overflow: hidden;
    border-radius: 4px;
    /* margin: 0 auto; */
    /* margin-top: 50px; */
    /* box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); */
}
.user .photo img {
    width: 50px;
    height: 50px;
    margin-top: 30px;
    border-radius: 50px;                       
}

#usernamess{
    display: inline-block;
    text-transform: initial;
}

.box-menu-select{
    position: fixed;
    width: 100%;
    bottom: 0;
    z-index: 1;
    background: #fff;
}

@media screen and (max-width: 767px){
    .user {
        
        display:block;
    }
}
                    </style>
<script>
$(document).ready(function(){
    var base_url = 'https://dotdotdottrip.com/';
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    console.log(getParameterByName('user')+'aaaaaa')
    $('.btn-change').click(function() {
        var newpass = $('#new-password').val();
        var confirmpass = $('#confirm-password').val();
        console.log(newpass)
        console.log(confirmpass)
        if(newpass == confirmpass){
            //alert("aaaaaa")
            $('.not-same').hide();
            $.ajax({
                type: 'POST',
                url: '../getuser_control/changepass',
                data: { 'user': getParameterByName('user'),'pass':confirmpass },
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    if(data == true){
                        window.location.href = base_url + "register";
                    }
                   //
                
                
                }
            });

        }

        else{
            $('.not-same').show();
            
        }
    });
    
    
    
    
    
   
    


});//END
</script>


</html>





























