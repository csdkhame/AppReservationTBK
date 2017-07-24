<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Tour</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- Canonical SEO -->

    <?php echo link_tag('files/css/bootstrap3.min.css'); ?>
    <!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
    
    <?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    
    
    <?php echo link_tag('files/assets/css/material-bootstrap-wizard.css'); ?>
    <?php echo link_tag('files/css/normalize.css'); ?>
    <?php echo link_tag('files/css/load.css'); ?>
     

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php echo link_tag('files/assets/css/demo.css'); ?>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    

    <!--  Social tags      -->
    

</head>

<body class="presentation-page">
<div id="loading" style="    z-index: 9999;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.59);
    display: nones;">
    <div style="height: 115px;
    border-radius: 4px;
    background: #fff;
    min-width: 15rem;
    /* height: auto; */
    left: 50vw;
    top: 50vh;
    transform: translate(-50%,-50%);
    position: fixed;
    z-index: 10000;">
        <div>
            <div style="font-weight: 500;
    color: #000;
    padding: 35px;
    text-align: center;"><div style="font-size: 15px">Loading</div>
    <i class="fa fa-circle-o-notch fa-spin fa-fw" style="
    margin-top: 10px;
    color: #5c5151;
    font-size: 35px"></i></div>
            
        </div>
        
    </div>
</div>
<div id="content">
    <nav class="navbar" id="sectionsNav" style="position: absolute;
    background: rgba(255, 255, 255, 0) !important;
    margin: auto;
    z-index: 20;
    width: 100%;
   
    box-shadow: none;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://dotdotdottrip.com"><!-- <img src="files/images/logo.png"> --></a>
            </div>

            <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right" style="padding-top: 15px;">
                    <li class="dropdown" id="btnuser">
                        <div class="user">
                            <div class="photo">
                                <img src="<?php echo base_url(); ?>/files/img/about-7.jpg">
                            </div>                    
                        </div>
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            <div id="usernamess"></div> 
                            
                            <b class="caret"></b>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="" >
                                <i class="material-icons">contacts</i><span class="lng-settings-account"></span>
                
                                </a>
                            </li>
                            
                            <li id="btn-logout-user">
                                <a>
                                    <i class="material-icons">power_settings_new</i><span class="lng-logout"></span>
                
                                </a>
                            </li>
                    
                        </ul>
                   <style>
                   .navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
    background-color: rgb(255, 255, 255) !important;
}
                    .user {
                        text-align: center;
                        padding-bottom: 20px;
                        margin: 25px auto 0;
                        position: relative;
                    }
                    .user .photo {
                        /*width: 80px;*/
                        /*height: 80px;*/
                        overflow: hidden;
                            border-radius: 4px;
                        /*margin: 0 auto;*/
                        /*box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);*/
                    }
                    .user .photo img {
                        width:140px;
                        
                    }
                    </style>
                    </li>
                    <li id="btnlogin">
                        <a href="https://dotdotdottrip.com/register">
                        <i class="material-icons">account_circle</i>
                          <span class="lng-login"></span><span> / </span><span class="lng-register"></span>
                
                        </a>
                    </li>
                     <li class="dropdown" id="btnusers">
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            <!-- <div style="width: 100%;text-align: center;"> -->
                               <i class="material-icons">shopping_basket</i><span style="text-transform: initial;" class="lng-product"></span>
                            
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="https://dotdotdottrip.com" >
                               <i class="material-icons">directions_car</i><span class="lng-transports"></span>
                
                                </a>
                            </li>
                           
                            <li id="btn-logout-user">
                                <a href="https://dotdotdottrip.com/tour">
                                    <i class="material-icons">style</i><span class="lng-tours"></span>
                
                                </a>
                            </li>
                    
                        </ul>
                    </li>
                     
                     <li>
                        <a href="<?php echo base_url(); ?>dashboard/view_user">
                            <i class="material-icons">dashboard</i><span style="text-transform: initial; " class="lng-dashboard"></span>
                
                        </a>
                    </li>
                     <li class="dropdown" id="btnusers">
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            <!-- <div style="width: 100%;text-align: center;"> -->
                               <i class="material-icons">language</i><span style="text-transform: initial;" class="lng-language"></span>
                            
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a  onclick="language('cn')">
                                    <img src="<?php echo base_url(); ?>/files/img/china.ico" style="width: 30px;margin-right: 15px;">简体中文 
                
                                </a>
                            </li>
                            <li>
                                <a  onclick="language('en')">
                               <img src="<?php echo base_url(); ?>/files/img/usa.ico" style="width: 30px;margin-right: 15px;">"English 
                
                                </a>
                            </li>
                            <li>
                                <a onclick="language('th')">
                               <img src="<?php echo base_url(); ?>/files/img/thai.ico" style="width: 30px;margin-right: 15px;">ภาษาไทย
                
                                </a>
                            </li>
                           
                            
                    
                        </ul>
                    </li>
                   
                    
                   
                    

                    
                </ul>
            </div>
        </div>
    </nav>
<style >
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
                    </style>
    <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>files/images/bg0.jpg');">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>Material Kit
                            <div class="pro-badge">
                                Pro
                            </div>
                        </h1>

                        <h3 class="title">Start Your Development With A Badass Bootstrap UI Kit inspired by Material Design.</h3>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <style>
        .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
   
    color: #FFF;
    box-shadow: none;
}
.wizard-card{
    margin-bottom: 0;
   
}
#numsumprice {
    color: #fb833f;
    font-weight: 600;
}
.sumprice {
    position: relative !important;
    position: relative;
    color: #333;
    font-weight: 600;
    text-align: center;
    font-size: 18px;
    /* border: 1px dashed #45c3da; */
    display: inline-block;
    padding: 12px 0;
    border-radius: 3px;
}
.box-list-cars {
    display: block;
    padding-bottom: 23px;
    /* background: #fff; */
    /* top: 0; */
    /* right: 0; */
    /* bottom: 0; */
    /* left: 0; */
    text-align: center;
    color: #000;
    font-size: 16px;
}
#title-around {
    display: inline-block;
}
/*#num2 {
    border: 1px solid #9E9E9E;
    padding: 0 5px !important;
}*/
#title-car {
    margin-left: 6%;
    display: inline-block;
}
#cars {
    float: right;
    background: #fff;
    border: 1px solid #9E9E9E !important;
    border-radius: 3px;
    padding: 7px 9px;
    font-weight: 500;
}
 .form-group {
    padding-bottom: 0;
    margin: 0;
 }
#calen{
    position: absolute;
    color: #9E9E9E;
    right: 0;
    margin-top: -30px;
    margin-right: 20px;
                                   
}
.wizard-card{
    box-shadow: none;
}
.box-program{
    text-align: center;
    background: #ff9800;
    padding: 12px 2px;
    font-weight: 400;
    border-radius: 4px;
    margin-bottom: 20px;
}
 </style>

<!-- <a class="made-with-mk">
            <div class="brand"><i class="material-icons">home</i></div>
            <div class="made-with">App <strong>booking</strong></div>
        </a> -->
        <style>
           
        </style>
        <!--   Big container   -->
        <div class="main main-raised">
        <!-- <div class="section"> -->
            
                <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                   <div align="center">
                       
                       <h1 style="    color: #F44336;
    margin: auto;
    padding: 15px;
    font-weight: 400;">Coming soon</h1>
                   </div>
                </div>
                <!-- <div class="col-sm-4">
                   <div class="wizard-container">
                        
                        </div>
                </div> -->
            </div><!-- end row -->
      
      <!--   </div> -->
        </div>
















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
                        <div class="modal-content" style="    max-height: 640px;
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

                </style>
                <div class="modal fade" id="login">
                    <div class="modal-dialog col-md-8">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <!-- <h4 class="modal-title" >Logout</h4> -->
                            </div>
                            <div class="modal-body">
                               <div class="row">
                        <div class="">
                            <form >
                                
                                    <div class="card-header text-center" data-background-color="green">
                                        <h4 class="card-title">Login</h4>
                                        <!-- <div class="social-line">
                                            <a href="#btn" class="btn btn-just-icon btn-simple" style="">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#eugen" class="btn btn-just-icon btn-simple">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                    
                                    <div align="text-center">
                                        <p id="message" style="text-align: center;"></p>
                                    </div>
                                    <div class="card-content col-sm-8 col-sm-offset-2" >
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email or Phone</label>
                                                <input type="text" class="form-control" ng-model="username" style="">
                                            </div>
                                        </div>
                                        <!-- <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" ng-model="password" style="    ">
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                        <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg" ng-click="login()">Login</button>
                                    </div>
                                    </div>
                                    
                                
                            </form>
                        </div>
                    </div>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="logout()">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div> -->
                        </div>
                    </div>
                </div>
    <!-- <footer class="footer footer-white" >
        <div class="container">
            

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
    </footer> -->
    </div>

    <!--     *********    END PRICING 5      *********      -->
</body>
    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>files/js/book-script.js?v=<?=time()?>"></script>  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time()?>"></script> 
   
    <!-- <script src="<?php echo base_url(); ?>files/js/modernizr-2.6.2.min.js"></script> -->
  
    
    <style>
       
.index-page .page-header, .presentation-page .page-header {
    height:30vh;
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
    margin-top: 10px !important;
}
#box-image{
    width: 100%;
    border-radius: 4px;
}
#images-icon{
    width: 200px;
    margin-bottom: 20px;
    
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
                              padding: 5px 8px;
                       /* margin-top: 20px;*/
                    }
                    #calen{

                        z-index: 5;
                        margin-top: 1px;
                        margin-right: 15px;
                        position: absolute;
                        font-size: 20px;
                        color: #9E9E9E;
                    }
                    #usernamess{
                        display: inline-block;
                            text-transform: initial;
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
                    #images-icon{
                        width: 100%;
                        margin-bottom: 20px;
                        /*margin: auto;*/
                    }
                    #media-email{
                        margin-top: 20px;
                    }
                    #box-detail-price{
                        margin: 0;
                    }

                }

</style>
<script>
$(document).ready(function(){
  $('#loading').css('display', 'block');
    $('#content').css('display', 'none');
    setTimeout(function() {
        console.log("aaaaa")
        $('#loading').css('display', 'none');
        $('#content').css('display', 'block');
    }, 3000);
     
 

  if ($.cookie("login")) {
        console.log($.cookie("login"))
        $.ajax({
        type: 'POST',
        url: 'https://dotdotdottrip.com/getuser_control/mainpage',
        data: {'id': $.cookie("login")},
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) { 
          console.log(data)
          datauser = data;
          $('#usernamess').html(data[0].s_username)
          //$('#textlogout').html("Logout")
          $('#btnlogin').css('display','none')
          $('#btnuser').css('display','block')
          $('.caret').css('display','inline-block')
          $('#acceptancecheck').css('display','block')

      
        
           
          
        }
    });
    
    }
    else{
      //$('#usernamess').html("Login")
     // $('#textlogout').html("Login/Register")
      $('#btnlogin').css('display','block')
          $('#btnuser').css('display','none')
          $('.caret').css('display','none')
          $('#acceptancecheck').css('display','none')



     // $('.dropdown-menu').css('display','none')



    }
    
    $('#btn-logout-user').click(function(){
        alert("logout");
        $.removeCookie("login");
        window.location.reload();//href = "https://dotdotdottrip.com/register";
    })
    console.log( "readysss!" );
    //console.log($.cookie("login"))
    $('#selectcar').html('1')
    var costproduct ,costdotcars,type,costdotcars,pro_id,place,to_place;
    function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
    console.log(getParameterByName('data'))
    console.log(getParameterByName('from'))
    console.log(getParameterByName('to'))
    // $.ajax({
    //     type: 'POST',
    //     url: '../service/getplace.php',
    //     data: {'from': getParameterByName('from'),'to': getParameterByName('to')},
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) { 
    //       console.log(data[0])
    //       console.log(data[1])
    //       $('#pickup_from').html(data[0].topic+'('+data[0].name+')');
    //       $('#pickup_to').html(data[1].topic+'('+data[1].name+')');
    //        place = data[0].id;
    //         to_place = data[1].id;
    //         place_name = data[0].topic;
    //         toplace_name = data[1].topic;
    //         adresss = data[0].address;
    //         adress_to = data[1].address;
    //         $('#placefrom').html(data[0].topic);
    //         $('#placeto').html(data[1].topic);
    //         $('#province').html(data[0].name);
    //     $('#province_to').html(data[1].name);
        
           
          
    //     }
    // });
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://dotdotdottrip.com/getuser_control/process',
    //    // data: {'from': getParameterByName('from'),'to': getParameterByName('to')},
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) { 
    //       console.log(data)
          
        
           
          
    //     }
    // });
    
   $('#numbercountry').append('<span id="textcountry">-Please select country-</span>');
   $('#code').append('<span id="textcode">code country</span>');
     
            $('#datetimepicker11').datetimepicker({
               format: 'YYYY-MM-DD'
              
                // daysOfWeekDisabled: [0, 6]
            });
       
    //$('#numbercountry').html('');
   //$('#code').html('code country')
    $('#select-country').click(function(){
      var url ='https://dotdotdottrip.com/';
        $.ajax({
        type: 'POST',
        url: 'https://dotdotdottrip.com/getcountry_control/process',
        //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) { 
          console.log(data)
          datacountry = data;
          $('#codecountry').modal('show');
           $.each(data , function(i, val) { 
                
                  //alert('aaa')
                  //dataProvince.push(data[i])
                 $('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');
            
                
            });
          
        }
    });
        
    });
    });
     
 
  // function selectcars(x){
  //     console.log(x)
  //    }




</script>

</html>





























