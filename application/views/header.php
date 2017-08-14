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
               <div class="" style="font-size:25px; margin-top: 12px;display:inline-block">
                   <a class="box-login-non" href="https://dotdotdottrip.com/register" style="color:#fff">
                        <i class="material-icons btn-login">account_circle  </i>
                        <span style="margin-left:8px;font-size:13px;" class="lng-login"></span>
                    </a>
                    <div class="box-login" style="width: 35px;  height: 35px; border-radius: 50px;  margin-top: -4px;">
                        <!-- <img style="width: 35px;  height: 35px;    border-radius: 50px;" src="https://dotdotdottrip.com/pic/default-avatar.png" alt=""> -->
                    </div>
                </div>
                   
               <button type="button" class="navbar-toggle" data-toggle="collapse" style="background: rgba(255, 255, 255, 0) !important; color:#fff">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar BT" style="color:#fff"></span>
                        <span class="icon-bar BT" style="color:#fff"></span>
                        <span class="icon-bar BT" style="color:#fff"></span>
                    </button>
                    <a class="navbar-brand" href=""><!-- <img src="files/images/logo.png"> --></a>
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
    /* background: rgba(255, 255, 255, 0) !important; */
    margin: auto;
    z-index: 20;
    width: 100%;
    padding-bottom: 0;
    padding-top: 0;
    box-shadow: none;
    background: #07c284;
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
                    </style>
	<!-- <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('<?php echo base_url(); ?>files/images/bg2.jpeg');"> -->
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
	<!-- </div> -->


















