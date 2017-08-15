<?php 
   
    if(!$_COOKIE['lng']){

       // echo  $_COOKIE['lng'].'unde';
        $lng_all_type = 'All Type';
    }
    else if($_COOKIE['lng'] == 'en'){
        //echo 'en';
        $lng_all_type = 'All Type';
        
    }
    else if($_COOKIE['lng'] == 'th'){
        //echo 'th';
        $lng_all_type = 'ทุกประเภท';
        
    }
    else if($_COOKIE['lng'] == 'cn'){
       // echo 'cn';
       $lng_all_type = '所有類型';
       
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="">
	<link rel="icon" type="image/png" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<title>App booking</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<script>
		// var base_url = '<?php echo base_url(); ?>';
	</script>
	<?php echo link_tag('files/css/bootstrap3.min.css'); ?>
	<!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->	
	<?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>	
	<?php echo link_tag('files/css/main.css?v='.time().'>'); ?>	
	<?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    <!--<?php //echo link_tag('files/css/load.css'); ?>-->
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
</head>

	

    <body class="presentation-page" >
        <div id="loading">
            <div class="loading-in" >               
                <div class="loading-ld" >
                    <div style="font-size: 15px">Loading</div>
                        <i class="fa fa-circle-o-notch fa-spin fa-fw" style=" margin-top: 10px; color: #5c5151; font-size: 35px"></i></div>
                
                    </div>        
                </div>
            </div>
        </div>
    <div id="content" >
<!-- navbar -->
	    <nav class=" navbar" id="sectionsNav" >
    	    <div class="container" style="margin-bottom: 0 ">        
                <div class="navbar-header">
               <div class="" style="    padding: 9px 10px;
    margin-top: 8px;
    margin-left: 15px;
    margin-bottom: 8px;
    font-size: 25px;
    display: inline-block;">
                        <div class="box-login-non">
                  
                        <i class="material-icons btn-login" style="    position: absolute;">account_circle  </i>
                        <span style="    margin-left: 30px;
    font-size: 14px;" class="lng-login"></span>
</div>
                 
                    <div class="box-login" style="width: 35px;  height: 35px; border-radius: 50px;  margin-top: -4px;">
                        <!-- <img style="width: 35px;  height: 35px;    border-radius: 50px;" src="https://dotdotdottrip.com/pic/default-avatar.png" alt=""> -->
                    </div>
                </div>
                   
               <button type="button" class="navbar-toggle" data-toggle="collapse" style="background: rgba(255, 255, 255, 0) !important; color:#000 !important;;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                        <span class="icon-bar BT"  style="color:#000"></span>
                    </button>
                   
                </div>
        	    <div class="navbar-collapse" style="
    margin-top: 10px;
">            
        		    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" id="btnuser">
                            <div class="user">
                                <div class="photo" id="photo_profile" >
                                    
                                </div> 
                                <div style="padding: 30px;color: #fff;font-size: 16px;">
                                    <span id="getname"> </span>
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
                        </li>
                        <li class="dropdown" id="btnlogin">
                            <div class="user">
                                <div class="photo" id="photo_non-login" >
                                    
                                </div> 
                                <div style="padding: 30px;color: #fff;font-size: 16px;">
                                    <span id="getname"> </span>
                                </div>                   
                            </div>
                           
                            
                        </li>       				
                        <!-- <li id="btnlogin">
                            <a href="<?php echo base_url(); ?>register">
                                <i class="material-icons">account_circle</i>
                                <span class="lng-login"></span><span> / </span><span class="lng-register"></span>                        
                            </a>
                        </li> -->
                        <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <div style="width: 100%;text-align: center;"> -->
                                <i class="material-icons">shopping_basket</i><span style="text-transform: initial;" class="lng-product textmenu"></span>
                                
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                <li>
                                    <a href="<?php echo base_url(); ?>" >
                                        <i class="material-icons">directions_car</i><span class="lng-transports textmenu"></span>                    
                                    </a>
                                </li>                            
                                <!-- <li id="btn-logout-user">
                                    <a href="<?php echo base_url(); ?>tour">
                                        <i class="material-icons">style</i><span class="lng-tours textmenu"></span>                    
                                    </a>
                                </li>                         -->
                            </ul>
                        </li>
                        <li class="box-desboard">
                            <a href="<?php echo base_url(); ?>dashboard/view_user">
                                <i class="material-icons">dashboard</i><span style="text-transform: initial;" class="lng-dashboard textmenu"></span>                    
                            </a>
                        </li>
                        <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <div style="width: 100%;text-align: center;"> -->
                                <i class="material-icons">language</i><span style="text-transform: initial;" class="lng-language textmenu"></span>                                
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
                    
                    <!-- <div  style="position: absolute;
                    bottom: 0;
                    z-index: 2;
                    left: 0;
                    width: 100%;">
                            <div id="btn-logout-user" style="background: #e22526;
    color: #ffffff;
    text-align: center;
    font-size: 16px;
    padding: 10px;">
    <i class="material-icons" style="    position: absolute;
    margin-top: -3px;">power_settings_new</i>
                                <span class="lng-logout" style="margin-left: 34px;"></span>
                            </div>
                        
                        </div> -->
                </div>
                
    	    </div>
        </nav>
<style >
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
#sectionsNav{
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
.loading-in{
    height: 115px;
    border-radius: 4px;
    background: #fff;
    min-width: 15rem;
    /* height: auto; */
    left: 50vw;
    top: 50vh;
    transform: translate(-50%,-50%);
    position: fixed;
    z-index: 10;
}
.loading-ld{
    font-weight: 500;
    color: #000;
    padding: 35px;
    text-align: center;
}
#loading{
    z-index: 9999;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.59);
    display: nones;
}
#usernamess{
    display: inline-block;
    text-transform: initial;
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

@media screen and (max-width: 767px){
    .user {
        
        display:block;
    }
}
                    </style>

  </div>
  </div>
</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script> 
    <script src="<?php echo base_url(); ?>files/js/hammer.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer-time.min.js" type="text/javascript"></script>
	<script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.12.0.js"></script>
	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<!-- <script src="<?php echo base_url(); ?>files/js/moment.min.js"></script> -->
	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script src="<?php echo base_url(); ?>files/js/nouislider.min.js" type="text/javascript"></script>	
	<script src="<?php echo base_url(); ?>files/sweetalert-master/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/sweetalert-master/dist/sweetalert.css">
	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<!-- <script src="<?php echo base_url(); ?>files/js/bootstrap-datetimepicker.js" type="text/javascript"></script> -->

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="<?php echo base_url(); ?>files/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="<?php echo base_url(); ?>files/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script src="<?php echo base_url(); ?>files/js/jasny-bootstrap.min.js"></script>

	<!--    Plugin For Google Maps   -->
	<!-- <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> -->

	<!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
	<script src="<?php echo base_url(); ?>files/js/atv-img-animation.js" type="text/javascript"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="<?php echo base_url(); ?>files/js/material-kit.min.js?v=<?=time();?>" type="text/javascript"></script>

	<!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>files/js/jquery.sharrre.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&libraries=places"async defer> </script>
	<script type="text/javascript" src="<?php echo base_url(); ?>files/js/book-script.js?v=<?=time();?>"></script> 
	 
	<script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time();?>"></script>
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>files/js/map-script_test.js?v=<?=time();?>"></script> -->	
	<script src="<?php echo base_url(); ?>files/js/list.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/list.js" type="text/javascript"></script>
	<!-- <script async defer src="https://maps.googleapis.cn/maps/api/js?key=AIzaSyAxwxcRc1lPkGj_XN_gYa0gKRv9rywrePU"></script> -->
	<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxwxcRc1lPkGj_XN_gYa0gKRv9rywrePU&callback=initMap">
    </script>-->
	<script type="text/javascript">
		var $section_features = '';
		$().ready(function(){
			materialKitDemo.initSharrre();
		});

	</script>
	<script src="https://cdn.klokantech.com/maptilerlayer/v1/index.js"></script>
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
    height: 30vh;
    overflow: hidden;
}
.main-raised {
    margin: 45px 60px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
    margin-bottom: 50px;
}
.bottom-300{
	bottom: 300px !important;
}
.floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
}
#getcapa{
    background-color: #ddd;
    /* height: 35px; */
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
    border-top: none;
}
#table1{
    margin-top: 10px !important;
                	}
</style>

</html>











