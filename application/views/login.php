<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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


<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../dashboard.html">Light Bootstrap Dashboard PRO</a>
        </div>
        <div class="collapse navbar-collapse">       
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="register.html">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="azure" data-image="<?php echo base_url(); ?>dasboard/boot/index_files/full-screen-image-1.jpg">   
        
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                       
                            
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                        <form method="post"  id="form_login">
                            <div class="card card-hidden">
                                <div class="header text-center">Login</div>
                                 
                                <div class="content">
                                    <div class="form-group">
                                        <label>Email or Phone</label>
                                        <input type="text" placeholder="Enter email,phone" class="form-control" name="username" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" placeholder="Password" class="form-control" name="password" required />
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="checkbox">
                                            <input type="checkbox" data-toggle="checkbox" value="">
                                            Subscribe to newsletter
                                        </label>    
                                    </div>
                                </div>
                                
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-info btn-wd" id="login">Login</button>
                                </div>
                            </div>
                            </form>    
                        
                                
                    </div>                    
                </div>
            </div>
        </div>
    	
    	<footer class="footer footer-transparent">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>                             
       
</div>


	 <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
    <script async="" src="<?php echo base_url(); ?>dasboard/boot/index_files/analytics.js"></script>
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap.min.js" type="text/javascript"></script>


	<!--  Forms Validations Plugin -->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap-checkbox-radio-switch-tags.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/js"></script>

	<!-- Wizard Plugin    -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery.datatables.js"></script>


    <!--  Full Calendar Plugin    -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/fullcalendar.min.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/light-bootstrap-dashboard.js"></script>

	<!--   Sharrre Library    -->
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery.sharrre.js"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/demo.js"></script>    
    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();
            
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-46172202-1', 'auto');
      ga('send', 'pageview');
    
    </script>

	<script>
		$( "#form_login" ).submit(function( event ) {
			
			$.post( "<?php echo base_url(); ?>login_user/check_user",$( '#form_login' ).serialize(), function( data ) {
				if(data>=1){
					swal("Good job!", "You clicked the button!", "success");
					window.location.href = "<?php echo base_url(); ?>/dashboard/view_user";
				}else{
					swal("Cancelled", "Your imaginary file is safe :)", "error");
				}
			});
			event.preventDefault();
		});
	</script>
    
