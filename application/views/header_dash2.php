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
 <!--    <?php echo link_tag('dasboard/material-dashboard.css'); ?>-->
    
    <?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    
    
    <?php echo link_tag('files/assets/css/material-bootstrap-wizard.css'); ?>
    
    

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php echo link_tag('files/assets/css/demo.css'); ?>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    

  
    <!--   Core JS Files   -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>

 <!-- Sweet Alert 2 plugin -->
	<script src="<?php echo base_url(); ?>dasboard/sweetalert-master/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>dasboard/sweetalert-master/dist/sweetalert.css">

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
<style>
	.li_active {
	z-index: 2;
    color: #000000;
    background-color: #00bcd4;
	}
</style>
  <!-- navbar-transparent-->
   <nav class="navbar navbar-default  navbar-transparent navbar-fixed-top navbar-color-on-scroll" id="sectionsNav">
    	<div class="container" >
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="material-icons center md-36" align="center">person_pin</i></a>
        	</div>
<script>

$( document ).ready(function() {
   var pathname = window.location.pathname; // Returns path only
	var url      = window.location.href;     // Returns full URL
	$('ul li[class="li_active"]').removeClass();
	
	var id ;
	
	if(pathname=="/dashboard/account_settings"){
		id = "#account";
	}else if(pathname=="/dashboard/view_user") {
		id = "#view_user";
	}else if(pathname=="/dashboard/playment") {
		id = "#playment";
	}
	$(id).addClass('li_active');
});
</script>
        	<div class="navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
        		
    				 <li class="li_active" id="view_user">
                        <a href="<?php echo base_url(); ?>dashboard/view_user">
                            <i class="material-icons">content_paste</i><span style="text-transform: initial;" class="lng-customer_d"> Customer</span>
                
                        </a>
                    </li>
                    <li id="account">
                        <a href="<?php echo base_url(); ?>dashboard/account_settings">
                         <i class="material-icons">build</i><span style="text-transform: initial;" class="lng-sa_d">Settings Account</span>
                
                        </a>
                    </li>

					 <li id="playment">
                        <a href="<?php echo base_url(); ?>dashboard/playment">
                            <i class="material-icons">payment</i><span style="text-transform: initial;" class="lng-payment_d">Payment</span>
                
                        </a>
                    </li>
                     <li class="dropdown" id="btnusers">
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <div style="width: 100%;text-align: center;"> -->
                                <i class="material-icons">language</i><span style="text-transform: initial;" class="lng-language">Language</span>                                
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
                   <li class="dropdown" id="btnuser" style="cursor: pointer;">
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            
                                <i class="material-icons center" align="center" >person_pin</i><span style="text-transform: initial;" id="name"></span> 
                          
                            <b class="caret"></b>
                        </a>
                      <ul class="dropdown-menu dropdown-with-icons">
<!--                            <li>
                                <a href="" >
                                <i class="material-icons">build</i>Settings Account
                
                                </a>
                            </li>-->

                            <li id="btn-logout-user">
                                <a>
                                    <i class="material-icons">power_settings_new</i><span >Logout</span>
                
                                </a>
                            </li>
                            </ul>
<style >
li>a:hover {
    /*padding: 12px 20px 12px 12px;*/
    background: #f2f2f2 !important;
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
							
					</li>
					

					
        		</ul>
        	</div>
    	</div>
    </nav>
   
   
    <section >
        <div class="container">
           
			<br/>
			<br/>
			<br/>
			<br/>			
		