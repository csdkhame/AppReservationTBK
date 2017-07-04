<html lang="en">
    <head> 
    <style>
    	/*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

.body{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

    </style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dasboard/assets/css/bootstrap.css">

		
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		
		<!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap.min.css" rel="stylesheet">
    
    <script async="" src="<?php echo base_url(); ?>dasboard/boot/index_files/analytics.js"></script>
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>dasboard/boot/index_files/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>dasboard/boot/index_files/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- Sweet Alert 2 plugin -->
	<script src="<?php echo base_url(); ?>dasboard/sweetalert-master/dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>dasboard/sweetalert-master/dist/sweetalert.css">
	
	<link href="<?php echo base_url(); ?>dasboard/bootstrap-social-gh-pages/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dasboard/bootstrap-social-gh-pages/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>dasboard/bootstrap-social-gh-pages/assets/css/docs.css" rel="stylesheet" >

    <link href="<?php echo base_url(); ?>dasboard/bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet" >
		<title>Admin</title>

	</head>
	

	<body class="body">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '346523515766364',
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
     
   
</script> 

<script>
function checkLoginState() {
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
   // console.log(response.authResponse.accessToken);
    //
	FB.api('/me?fields=name,email', function(response) {
    	
    	//console.log(response);
    	$.post( "<?php echo base_url(); ?>Register/savefacebook",response, function( data ) {
    		if(data==1){
				swal("Success", "welcom to dasboard !", "success");
			}
			window.location.href = 'http://dotdotdottrip.com/';  
    	});
    	
	});
  }
});

}
</script>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Register Member</h1>
	               		<hr />
	               	</div>
	            </div>
			<div class="main-login main-center">
				<div class="text-center">
            <!--<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>-->
<div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true" onlogin="checkLoginState();"></div>
          </div>
					<form class="form-horizontal" method="post" action="#" id="regis">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>
						</form>
						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button" id="submit">Register</button>
						</div>
						<div class="login-register">
				            <a href="index.php">Login</a>
				         </div>
					
				</div>
			</div>
		</div>

<script>
$(document).ready(function(){

	
    	$('#submit').click(function(){
    		swal({
  title: "Confirm your register",
  text: "Are you sure to submit form?",
  type: "info",
  showCancelButton: true,
  closeOnConfirm: false,
  showLoaderOnConfirm: true
}, function () {
  $.post( "<?php echo base_url(); ?>Register/save_member",$( "#regis" ).serialize(), function( data ) {
		 	if(data==1){
				swal("Save complete!", "You clicked the button!", "success");
				location.reload();
			}else{
				 swal("Not complete", "Your imaginary file is safe :)", "error");
			}
		});
});
    	
    		
    	});
});
</script>		
<script src="<?php echo base_url(); ?>dasboard/bootstrap-social-gh-pages/assets/js/docs.js"></script>
    <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
    </script>
	</body>
</html>