<?php
header('Access-Control-Allow-Origin: *'); 

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<html lang="en" class="perfect-scrollbar-on">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script async="" src="http://cdn.api.twitter.com/1/urls/count.json?url=http%3A%2F%2Fdemos.creative-tim.com%2Flight-bootstrap-dashboard-pro%2Fexamples%2Fdashboard.html&amp;callback=jQuery1113037401200316412275_1495621377923&amp;_=1495621377924"></script>
	
	<link rel="icon" type="image/png" href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Light Bootstrap Dashboard PRO by Creative Tim</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro">

    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard">

    <meta name="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">

    <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <!-- Twitter Card data -->

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">

    <meta name="twitter:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$29">
    <meta name="twitter:label2" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta property="og:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <meta property="og:site_name" content="Creative Tim">

    <!-- Bootstrap core CSS     -->
  <link href="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap.min.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>dasboard/boot/index_files/light-bootstrap-dashboard.css" rel="stylesheet">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>dasboard/boot/index_files/demo.css" rel="stylesheet">


    <!--     Fonts and icons     -->
<!--    <link href="<?php echo base_url(); ?>dasboard/boot/index_files/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dasboard/boot/index_files/css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>dasboard/boot/index_files/pe-icon-7-stroke.css" rel="stylesheet">
-->

<?php echo link_tag('dasboard/boot/index_files/font-awesome.min.css'); ?>
<?php echo link_tag('dasboard/boot/index_files/css'); ?>
<?php echo link_tag('dasboard/boot/index_files/pe-icon-7-stroke.css'); ?>

<script type="text/javascript" charset="UTF-8" src="<?php echo base_url(); ?>dasboard/boot/index_files/common.js"></script>
<script type="text/javascript" charset="UTF-8" src="<?php echo base_url(); ?>dasboard/boot/index_files/util.js"></script>
<script type="text/javascript" charset="UTF-8" src="<?php echo base_url(); ?>dasboard/boot/index_files/stats.js"></script></head>



<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="<?php echo base_url(); ?>dasboard/boot/index_files/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="#" class="logo-text">
                T-Booking                
            </a>
        </div>
		<div class="logo logo-mini">
			<a href="http://www.creative-tim.com/" class="logo-text">
				Ct
			</a>
		</div>

    <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="b1f87c85-cc62-c53a-aa7d-7de7281f7fef">
            <div class="user">
                <div class="photo">
                    <!--<img src="boot/index_files/default-avatar.png">-->
                    <img src="<?php echo base_url(); ?>dasboard/boot/index_files/default-avatar2.png">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                       <?php echo $this->session->userdata('s_username'); ?>
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav" id="menu-list">
                <li class="" id="dashboard">
                    <a href="<?php echo base_url(); ?>dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                   <li class="" id="user_view">
                    <a href="<?php echo base_url(); ?>dashboard/view_user">
                        <i class="pe-7s-note2"></i>
                        <p>Report List</p>
                    </a>
                	</li>
                </li>
    
            </ul>
    	
    	<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    
    
    <div class="sidebar-background" style="background-image: url('<?php echo base_url(); ?>'dasboard/boot/index_files/full-screen-image-3.jpg ) "></div></div>

    <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="29ebf963-5c20-daef-c230-af7a502c7642">
		<nav class="navbar navbar-default">
			<div class="container-fluid" >
				<div class="navbar-minimize" >
					<button id="minimizeSidebar" class="btn btn-info btn-fill btn-round btn-icon">
						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
					</button>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Dashboard</a>
				</div>
				<div class="collapse navbar-collapse">

					<form class="navbar-form navbar-left navbar-search-form" role="search">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" value="" class="form-control" placeholder="Search...">
						</div>
					</form>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/charts.html">
								<i class="fa fa-line-chart"></i>
								<p>Stats</p>
							</a>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-gavel"></i>
								<p class="hidden-md hidden-lg">
									Actions
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Create New Post</a></li>
								<li><a href="#">Manage Something</a></li>
								<li><a href="#">Do Nothing</a></li>
								<li><a href="#">Submit to live</a></li>
								<li class="divider"></li>
								<li><a href="#">Another Action</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="notification">5</span>
								<p class="hidden-md hidden-lg">
									Notifications
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Notification 1</a></li>
								<li><a href="#">Notification 2</a></li>
								<li><a href="#">Notification 3</a></li>
								<li><a href="#">Notification 4</a></li>
								<li><a href="#">Another notification</a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-with-icons">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-list"></i>
								<p class="hidden-md hidden-lg">
									More
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu dropdown-with-icons">
								<li>
									<a href="#">
										<i class="pe-7s-mail"></i> Messages
									</a>
								</li>
								<li>
									<a href="#">
										<i class="pe-7s-help1"></i> Help Center
									</a>
								</li>
								<li>
									<a href="#">
										<i class="pe-7s-tools"></i> Settings
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">
										<i class="pe-7s-lock"></i> Lock Screen
									</a>
								</li>
								<li>
									<!--<a href="#" class="text-danger" onclick="logout();">-->
									<a href="<?php echo base_url(); ?>/login_user/logout" class="text-danger" >
										<i class="pe-7s-close-circle"></i>
										Log out
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
<div class="content">
            <div class="container-fluid">
                <div class="row" >
