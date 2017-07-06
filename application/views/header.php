<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="">
	<link rel="icon" type="image/png" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<title>App booking</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!-- Canonical SEO -->

	<?php echo link_tag('files/css/bootstrap3.min.css'); ?>
	<!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
	
	<?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
	
	<?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    <!--<?php //echo link_tag('files/css/load.css'); ?>-->

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    

	<!--  Social tags      -->
    

</head>

<body class="presentation-page" >

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
    z-index: 10;">
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







<div id="content" >

	<nav class="navbar " id="sectionsNav" style="margin: auto;z-index: 20">
    	<div class="container" style="margin-bottom: 0 ">
        <!-- navbar-default navbar-transparent navbar-fixed-top -->
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="">app<!-- <img src="files/images/logo.png"> --></a>
        	</div>

        	<div class="navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
    				
                    <li id="btnlogin">
                        <a href="http://dotdotdottrip.com/register">
                          <span> Login / Register</span>
                
                        </a>
                    </li>
                     <li class="dropdown" id="btnusers">
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            <!-- <div style="width: 100%;text-align: center;"> -->
                               <i class="material-icons">shopping_basket</i><span style="text-transform: initial;">Product</span>
                            
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="" >
                               <i class="material-icons">directions_car</i>Transports
                
                                </a>
                            </li>
                           
                            <li id="btn-logout-user">
                                <a>
                                    <i class="material-icons">style</i><span >Tours</span>
                
                                </a>
                            </li>
                    
                        </ul>
                    </li>
					 <li>
                        <a href="<?php echo base_url(); ?>dashboard/view_user">
                            <i class="material-icons">dashboard</i><span style="text-transform: initial;">Dashboard</span>
                
                        </a>
                    </li>
                   
                    
                   <li class="dropdown" id="btnuser">
                        <a  class="dropdown-toggle" data-toggle="dropdown">
                            <!-- <div style="width: 100%;text-align: center;">
                                <i class="material-icons center" align="center" >person_pin</i>
                            </div> -->
                            
                            <div id="usernamess"></div> 
                            <!-- <div class="user">
                                <div class="photo">
                                    <img src="./Material Dashboard PRO by Creative Tim _ Premium Bootstrap Admin Template_files/avatar.jpg">
                                </div>
                                <div class="info">
                                    <a data-toggle="collapse" href="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html#collapseExample" class="collapsed" aria-expanded="false">
                                        USERS ADMIN
                                        <b class="caret"></b>
                                    </a>
                                </div>
                            </div> -->
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="" >
                                <i class="material-icons">build</i>Settings Account
                
                                </a>
                            </li>
                            <!-- <li>
                                <a href="" >
                                    <i class="material-icons">power_settings_new</i>Logout
                
                                </a>
                            </li> -->
                            <li id="btn-logout-user">
                                <a>
                                    <i class="material-icons">power_settings_new</i><span >Logout</span>
                
                                </a>
                            </li>
					
		</ul>
					</li>
					

					
        		</ul>
        	</div>
    	</div>
    </nav>
<style >
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


















