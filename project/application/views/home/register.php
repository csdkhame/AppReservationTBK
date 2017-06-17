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

    <?php echo link_tag('files/css/bootstrap3.min.css'); ?>
    <!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
    
    <?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    
    
    <?php echo link_tag('files/assets/css/material-bootstrap-wizard.css'); ?>
    
    

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php echo link_tag('files/assets/css/demo.css'); ?>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    

    <!--  Social tags      -->
    

</head>

<body class="presentation-page" style="background-color: #fff ">

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

    <div class="header " data-parallax="true" >
        <nav class="navbar  navbar-color-on-scroll" id="sectionsNav">
        <div class="container" style="border-bottom: 1px solid #C8E1F5;padding-bottom: 12px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://dotdotdottrip.com">app booking<!-- <img src="files/images/logo.png"> --></a>
            </div>

            <!-- <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">person_pin</i> Login
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="" >
                                <i class="material-icons">build</i>Settings Account
                
                                </a>
                            </li>
                           
                            <li data-toggle="modal" data-target="#login">
                                <a  >
                                    <i class="material-icons">power_settings_new</i>Login
                
                                </a>
                            </li>
                             <li>
                                <a href="" >
                                    <i class="material-icons">power_settings_new</i>Logout
                
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div> -->
        </div>
    </nav>
    </div>
    <section style="position: relative;
    min-height: 65vh;
">
        <div class="container">
            <div class="col-md-6" id="box-left" style="">
            <!-- <button class="btn btn-info btn-sm">Sign In or Create an Account</button> -->
            
            <div class="box-signup" style="display: none;">
                <div id="section_title" class="section_title">
                    <h3 id="title-regis" style="">Sign In or Create an Account</h3>
                
                    <h4 style="font-size: 14px;">What is your email (phone for mobile accounts)?</h4>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" style="padding:0;    margin-top: 20px;">
                    <!-- <form> -->
                        <div class="col-md-12">
                        <div class="input-group">
                             <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>
                             <button class="btn btn-warning btn-sm" id="checkmail" style="    position: absolute;
    right: 0;
    z-index: 100;
    margin-top: 2px;
    padding: 5px 10px;">check</button>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label"> E-mail or mobile number
                                    <!-- <small>(required)</small> -->
                                </label>
                                <input name="firstname" type="text" class="form-control" id="username-signup">
                            <span class="material-input"></span></div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="padding-top: 0">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Password
                                    <!-- <small>(required)</small> -->
                                </label>
                                <input name="lastname" type="text" class="form-control" id="password-signup">
                             <span class="material-input"></span></div>
                        </div>
                        <div id="messagecheck" style="text-align: center;"></div>

                        </div>
                         <div class="col-md-12">
                            <div class="btn-signup" style="" id="registered">Sign in</div>
                        </div>
                        <div class="col2">
                        <div class="col-sign">
                                        <div class="text-sign" >
                                            <span>Have a member?</span>
                                        <a class="mtm sign-up" id="sign-in" style="cursor: pointer;">Registered customers</a>
                                        </div>
                                        <div id="status"></div>
                        </div>
                        </div>
                       <!--  </form> -->
                    </div>
                </div>
            </div>
             <div class="box-signin">
                    <div class="card-header text-center" data-background-color="green">
                        <h4 class="card-title" style="margin-bottom: 20px;" >Login</h4>                                       
                    </div>
                        <form>
                            
                            <!-- <div align="text-center">
                                <p id="message" style="text-align: center;"></p>
                            </div> -->
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2" style="padding: 0" >
                                    <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                       
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email or Phone</label>
                                            <input type="text" class="form-control" id="username" size="80">
                                        </div>
                                        
                                    </div>                                       
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" id="password" >
                                        </div>
                                    </div>
                                    <div id="message" style="text-align: center;"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div  type="submit" class=" btn-login " id="login" style="">Login</div>
                                    </div>
                                        
                                        <div class="col2">
                                        <div class="text-sign" >
                                            <span>Not a member?</span>
                                        <a class="sign-up" id="sign-up" style="cursor: pointer;" >Sign Up Now</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                             </div>       
                                
                            </form>
                        </div>
           
                
               
        <div class="loginReg__or">Or</div>
            </div>

            <div class="col-md-6">
                    <div class="box-regispro" style="display: none;">
                                          <h3 id="title-info">Why become a App Booking member?</h3>

                                          <div class="special">
                                              <div class="box-icon"><i class="fa fa-tags" style="font-size: 30px;"></i><!-- <i class="fa fa-gavel" aria-hidden="true" id="special" style="font-size: 30px;"> </i>--></div><!-- <img src="<?php echo base_url(); ?>files/images/special.png" id="special"> -->
                                                <h4>Special Product Price</h4>
                                                <p>You'll get lower price for every Product booking, as a member.</p>
                                          </div>
                                            <div class="exclusive">
                                            <div class="box-icon"><i class="fa fa-user-md" aria-hidden="true" style="font-size: 30px;"></i></div>
                                              <!-- <img src="<?php echo base_url(); ?>files/images/exclusive.png" id="exclusive"> -->
                                                <h4>Exclusive Discount via Email</h4>
                                                <p>You'll get the latest promo info and special member discount.</p>
                                            </div>
                                            <div class="fast">
                                            <div class="box-icon"><i class="fa fa-gavel" aria-hidden="true" id="special" style="font-size: 30px;"></i></div>
                                              <!-- <img src="<?php echo base_url(); ?>files/images/fast.png" id="fast"> -->
                                                <h4>Fast Booking with Only One-Click</h4>
                                                <p>As a member using Go HolidayQuick, your booking is our priority.</p>
                                        </div>
                    </div>
                    <div class="log-social box-signin">
                        <div class="unit social-column">
                    <div class="social-inner">
                                    <div class="fb-wrapper">
            <a id="facebook-login-button"  class="fb-auth inner facebook-login-auth" scope="public_profile,email" onclick="login();" return false;">
                <i class="fa fa-facebook-official " style="font-size: 36px;"></i>
                <span>Facebook</span>
            </a>
        </div>
                    <div class="google-wrapper">
            <div>
                <a id="google-login-button" href="javascript:;" onclick=""; return false;" class="google-auth inner google-login-auth">
                    <i class="fa fa-google-plus-square" style="font-size: 36px;"></i>
                    <span>Google</span>
                </a>
            </div>
        </div>
                        </div>
                </div>
                    </div>
                    
                </div>
        </div>
    </section>
<style>
.btn-login{
    color: #3b5998;
    border: 1px solid #3b5998;
    background-color: #3b5998;
    font-weight: 700;
    display: block;
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    border-radius: 4px;
    text-align: center;
     color: #ffffff;


}
.btn-login:hover{
     border: 1px solid #3b5998;
     background-color: #3b5998;
     color: #ffffff;
}
.btn-signup{
    color: #3b5998;
    border: 1px solid #3b5998;
     background-color: #3b5998;
    font-weight: 700;
    display: block;
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    border-radius: 4px;
    text-align: center;
     color: #ffffff;

}
.btn-signup:hover{
     border: 1px solid #3b5998;
     background-color: #3b5998;
     color: #ffffff;
}
.col-sign{
    /*margin-top: 20px;*/
    font-size: 13px;

}
.social-column .fb-wrapper .inner {
    color: #3b5998;
    border: 1px solid #3b5998;
    font-weight: 700;
    display: block;
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 120px;
    border-radius: 4px;
}
.social-column .google-wrapper .inner {
    color: #ea4335;
    border: 1px solid #ea4335;
    font-weight: 700;
    display: block;
    line-height: 36px;
    padding: 0 10px 0 0;
    text-decoration: none;
    cursor: pointer;
    min-width: 200px;
    border-radius: 4px;
}
.social-column .fb-wrapper {
    text-align: center;
}
 .notification {
    position: absolute;
    top: 2px;
    border: 1px solid #FFF;
        left: 22px;
    font-size: 9px;
    background: #f44336;
    color: #FFFFFF;
    min-width: 20px;
    padding: 0px 5px;
    height: 20px;
    border-radius: 10px;
    text-align: center;
    line-height: 19px;
    vertical-align: middle;
    display: block;
}
.social-column .fa-google-plus-square, .social-column .fa-facebook-official {
    display: inline-block;
    vertical-align: text-top;
    padding: 0;
    /*background-image: url(/images/2014/sprites/icons-header-336d99fe71.png);*/
    width: 37px;
    height: 38px;
    padding-left: 0;
    float: left;
}
.social-column .google-wrapper {
    text-align: center;
    margin-top: 20px;
}
.social-column .social-inner {
    display: table-cell;
    vertical-align: middle;
}
.social-column{
    padding: 100px 120px;
}
.dropdown-menu.dropdown-with-icons li>a:hover {
    /*padding: 12px 20px 12px 12px;*/
    background: #F44336 !important;
}
.dropdown-menu:after, .dropdown-menu-container:after {
    border-bottom: 11px solid #FFFFFF;
    border-left: 11px solid rgba(0,0,0,0);
    border-right: 11px solid rgba(0,0,0,0);
    content: "";
    display: inline-block;
    position: absolute;
    right: 30px;
    top: -10px;
}
.index-page .page-header, .presentation-page .page-header {
    height: 12vh !important;
    overflow: hidden;
}
.box-regispro {
    /*letter-spacing: 1px;*/
    color: #555555;
    padding: 2px 10px;
}
#special {
    display: inline-block;
    position: absolute;
}
#exclusive {
    display: inline-block;
    position: absolute;
}
#fast {
    display: inline-block;
    position: absolute;
}
.special {
    font-size: 14px;
    /*margin-left: 5%;*/
    margin-bottom: 20px;
}
.exclusive {
    font-size: 14px;
    /*margin-left: 5%;*/
    margin-bottom: 20px;
}
.fast {
    font-size: 14px;
    /*margin-left: 5%;*/
}
.section_title{
     /*font-size: 20px;*/

        position: relative;
    /*font-size: 170%;*/
    font-weight: normal;
    /*margin-left: 0px;*/
    
}
.special p {
    display: inline-block;
    margin-left: 70px;
        font-size: 13px;


}
.special h4 {
    display: inline-block;
    margin-left: 70px;
        font-size: 16px;
}
.exclusive p {
    display: inline-block;
    margin-left: 70px;
        font-size: 13px;

}
.exclusive h4 {
    display: inline-block;
    margin-left: 70px;
        font-size: 16px;
}
.fast p {
    display: inline-block;
    margin-left: 70px;
        font-size: 13px;
}
.fast h4 {
    display: inline-block;
    margin-left: 70px;
        font-size: 16px;
}
#box-left{
    border-right: 1px solid #ccc;
}
.box-icon{
    width: 50px;
    border-radius: 50%;
    padding: 10px;
    height: 50px;
    border: 1px solid #555;
    position: absolute;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    
   
    color: #FFF;
    box-shadow: none;
}
.wizard-card{
    margin-bottom: 0;
   
}

.wizard-card{
    box-shadow: none;
}
#title-regis{
    color: #E47911;
     font-size: 20px;

    /*margin-top: 50px;*/

}
#title-info{
     font-size: 20px;

     margin-top: 20px;
}
.loginReg__or{
    right: 0;
    margin: 10px 0;
    position: absolute;
    font-size: 10px;
    width: 2em;
    height: 2em;
    text-align: center;
    /* line-height: 2.2; */
    background: #dcdcdc;
    border-radius: 50%;
    color: #666;
    margin-right: -10px;
    margin-top: -172px;
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
<!-- <a class="made-with-mk">
            <div class="brand"><i class="material-icons">home</i></div>
            <div class="made-with">App <strong>booking</strong></div>
        </a> -->
        <style>
           
        </style>
        <!--   Big container   -->



    <div class="modal fade" id="capacityss" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!-- <h4 class="modal-title">Gallery</h4> -->
                            </div>
                            
                            <div class="modal-body">                                    
                                <div id="getcapa"></div>
                                <div id="getcapa2"></div>

                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="modal fade" id="codecountry" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="    max-height: 700px;
    overflow: hidden;
    overflow-y: scroll;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!-- <h4 class="modal-title">Gallery</h4> -->
                            </div>
                            
                            <div class="modal-body" style="padding: 0">                                    
                                <div class="box-country">
                                    <ul id="select-name">                                                                     
                                    </ul>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button> -->
                            </div>
                        </div>
                    </div>
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
               <!--  <div class="modal fade" id="login">
                    <div class="modal-dialog col-md-8">
                       
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                
                            </div>
                            <div class="modal-body">
                               <div class="row">
                       
                    </div>
                            </div>
                           
                        </div>
                    </div>
                </div> -->
    <footer class="footer footer-white">
        <div class="container" style="border-top: 1px solid #C8E1F5;">
            <!-- <a class="footer-brand" href="http://www.creative-tim.com">Material Kit PRO</a> -->

            <ul class="pull-left">
                <li>
                    <a href="http://www.creative-tim.com/" target="_blank">
                        Contacts
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com/" target="_blank">
                       About Us
                    </a>
                </li>
               
            </ul>

            <ul class="social-buttons pull-right">
                <li>
                    <a href="https://twitter.com/" target="_blank" class="btn btn-just-icon btn-simple btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank" class="btn btn-just-icon btn-simple btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank" class="btn btn-just-icon btn-simple btn-instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>

        </div>
    </footer>

    <!--     *********    END PRICING 5      *********      -->
</body>
    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
<script>
$(document).ready(function(){
    var username, password , username_signup ,password_signup,text_check;
$.ajax({
        type: 'POST',
        url: 'http://dotdotdottrip.com/getuserlog_control/process',
       // data: {'from': getParameterByName('from'),'to': getParameterByName('to')},
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) { 
          console.log(data)
          
        
           
          
        }
    });
    $('#username').on('change', function() {
        username = this.value ;
        console.log(username)
        
    //alert( this.value );
    })
    $('#password').on('change', function() {
        password = this.value ;
        console.log(password)

        
    //alert( this.value );
    })
    $('#login').on('click', function() {
       console.log(password+username)
        $.ajax({
        type: 'POST',
        url: 'http://dotdotdottrip.com/login_control/process',
        data: {'username': username,'password':password},
        //contentType: "application/json",
        dataType: 'json',
        success: function(res) { 
          console.log(res)
          if(res.status == 0)
              {
                 console.log('login status 0');
                 $.cookie("login",res.username);
                 window.location.href = "http://dotdotdottrip.com";
                
               
              }
              else if(res.status==1)
              {
                console.log('status==1')
               $('#message').html('Username is Invalid').css('color', 'red');
              }
              else if(res.status==2)
              {
                  console.log('status==2')
                $('#message').html('Password is Invalid').css('color', 'red');
              }
          
        
           
          
        }
    });
       
    //alert( this.value );
    })
    
    $('#username-signup').on('change', function() {
        username_signup = this.value ;
        console.log(username_signup)
        
    //alert( this.value );
    })
    $('#password-signup').on('change', function() {
        password_signup = this.value ;
        console.log(password_signup)

        
    //alert( this.value );
    })
    $('#checkmail').on('click', function() {
        console.log('in case')
        $.ajax({
        type: 'POST',
        url: 'http://dotdotdottrip.com/login_control/checkmail',
        data: {'username': username_signup,'password':password_signup},
        //contentType: "application/json",
        dataType: 'json',
        success: function(res) { 
          console.log(res)
          if(res.status == 0)
              { //have mail
                text_check = 0; 
               $('#messagecheck').html('Have this mail in system').css('color', 'red');
                
               
              }
              else if(res.status==1)
              {
                text_check = 1; 
                $('#messagecheck').html('This mail is available.').css('color', '#2c9930');
                console.log('status==1')
              }
              
              
          
        
           
          
        }
    });
    });
     $('#registered').on('click', function() {
        console.log('in case signup')
        if (text_check == 1) {
            $.ajax({
            type: 'POST',
            url: 'http://dotdotdottrip.com/login_control/signup',
            data: {'username': username_signup,'password':password_signup},
            //contentType: "application/json",
            dataType: 'json',
            success: function(res) { 
                console.log(res)
                if(res.status == 0){
                    $.cookie("login",res.username);
                    window.location.href = "http://dotdotdottrip.com";
                    
                   
                }
                else{
                    console.log("incomplete insert")
                }
                
                  
                  
              
            
               
              
            }
        });
    }
    else{
        console.log("incomplete")
    }
        
    });
    


});//END
window.fbAsyncInit = function() {
    FB.init({
      appId      : '1865903040340223',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };
   

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    function login(){
        
   FB.login(function (response) { statusChangeCallback(response); }, { scope: 'email,public_profile', return_scopes: true });
// FB.getLoginStatus(function(response) 
//     {statusChangeCallback(response)},{ scope: 'email,user_likes' 
// });
// function checkLoginState() {
//   FB.getLoginStatus(function(response) {
//     statusChangeCallback(response);
//   });
// }
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      checkLoginState();
    } else {
      // The person is not logged into your app or we are unable to tell.
    //   document.getElementById('status').innerHTML = 'Please log ' +
    //     'into this app.';
    }
  }
  function checkLoginState() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=name,email', function(response) {
        console.log(response)
        // $.cookie("idface", response.id);
        $.ajax({
        type: 'POST',
        url: 'http://dotdotdottrip.com/login_control/processsocial',
        data: {'username': response.email,'name':response.name,'password':response.id},
        //contentType: "application/json",
        dataType: 'json',
        success: function(res) { 
          console.log(res)
          if(res.status == 0)
              {
                 $.cookie("login",res.username);
                    window.location.href = "http://dotdotdottrip.com";
                
               
              }
              else 
              {
                
               $('#message').html('Login not complete').css('color', 'red');
              }
              
          
        
           
          
        }
    });
       
      //console.log('Successful login for: ' + response.name);
      
    });
  }
    }


  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  

  

  // Load the SDK asynchronously
  
  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  
    $('#sign-up').click(function() {
       $('.box-signup').css('display','block');
       $('.box-regispro').css('display','block');

       $('.box-signin').css('display','none');
       $('.loginReg__or').css('display','none');

    })
    $('#sign-in').click(function() {
       $('.box-signup').css('display','none');
       $('.box-regispro').css('display','none');
       $('.loginReg__or').css('display','block');

       $('.box-signin').css('display','block');
    })
</script>
<script>
  
</script>
</html>





























