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
	
	<?php if(!$_COOKIE['lng']){
        $lng_map = 'en'; 
    }
    else if($_COOKIE['lng'] == 'en'){
         $lng_map = 'en';
    }
    else if($_COOKIE['lng'] == 'th'){
        $lng_map = 'th';
    }
    else if($_COOKIE['lng'] == 'cn'){
       $lng_map = 'zh-CN';
    } ?>
    
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&libraries=places&language=<?=$lng_map;?>" async defer> </script>
    <!-- <script src="https://cdn.rawgit.com/googlemaps/js-rich-marker/gh-pages/src/richmarker.js?v=<?=time();?>"></script> -->
    
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/main-script.js?v=<?=time();?>"></script> 	
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/map-script.js?v=<?=time();?>"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time();?>"></script>
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>files/js/map-script_test.js?v=<?=time();?>"></script> -->	
	<script src="<?php echo base_url(); ?>files/js/list.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/list.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
	
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
<script>
// 		var paramURL = $('#paramUrl').val();
// console.log("::::"+paramURL);
// if(paramURL=="realtime"){
// 	$('.btn-realtime').click();
// 	console.log("::::1");
// }else if(paramURL=="reservation"){
// 	$('.btn-reservation').click();
// 	console.log("::::2");
// }
	</script>
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
    background: #ddd;
    border: 1px solid;
    /* height: 35px; */
    border-radius: 15px 15px 0 0;
    /* height: 35px; */
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
    border-top: none;
}
#table1{
    margin-top: 10px !important;
}
.map-bg {    
    background: url(images/map-bg.jpg) no-repeat;
    background-position: 0px 0px;
    background-size: auto;
    width: 100%;
    height: 440px; /*adjust to the height of your image*/
    position: relative;
}

.marker {
    display:none !im;
    width: 100px;
    height: 100px;
    position: absolute;
    top: -50px; /*positions our marker*/
    left: -50px; /*positions our marker*/
    display: block;  
}

.pin {
/*    width: 20px;
    height: 20px;*/
    width: 17px;
    height: 17px;
    position: relative;
   /* top: 38px;
    left: 38px;*/
    display:none;
    top: 42px;
    left: 42px;
    background: rgba(5, 124, 255, 1);    
    border: 2px solid #FFF;
    border-radius: 50%;
    z-index: 1000;
}

/*.pin-effect {
    width: 100px;
    height: 100px;
    position: absolute;
    top: 0;
    display: block;
    background: rgba(5, 124, 255, 0.6);
    border-radius: 50%;
    opacity: 0;
    animation: pulsate 2400ms ease-out infinite;
}*/
.pin-effect {
    display:none;
       width: 50px;
    height: 50px;
    position: absolute;
    /* top: 9px; */
    display: block;
    background: rgba(5, 124, 255, 0.6);
    border-radius: 50%;
    opacity: 0;
    animation: pulsate 2400ms ease-out infinite;
    /* left: 20px; */
    /* margin: 10px; */
    margin-left: 25.5px;
    /* padding: 13px; */
    /* margin: 20px; */
    top: 26px;
    /* left: 38px; */
}
@keyframes pulsate {
    0% {
    transform: scale(0.1);
    opacity: 0;
    }
    50% {
    opacity: 1;
    }
    100% {
    transform: scale(1.2);
    opacity: 0;
    }
}
</style>

<script>
$( document ).ready(function() {
	
	$('.navbar-collapse .feed').click( function(){
//		alert(123);
		$('#loading').css('display', 'block');
	    $('#content').css('display', 'none');
	    setTimeout(function() {
//	        console.log("aaaaa")
	        $('#loading').css('display', 'none');
	        $('#content').css('display', 'block');
	    }, 3000);
				
	});

/*	var url_string = window.location.href;
	var url = new URL(url_string);
	var c = url.searchParams.get("active");
/*  
  console.log(active);
	setTimeout(function(){ 
	if( active=='realtime'){
		$('.btn-realtime').click();
	}else if( active=='reservation'){
		$('.btn-reservation').click();
	}
	else if( active=='service'){
		$('.btn-car-service').click();
	}
	active = '';
	 }, 4000);*/
// <?php
// session_start();
// ?>
// 	var active = '<?=$_SESSION["active"];?>';
// 	console.log('Session : '+active);
// 	setTimeout(function(){ 
// 	if( active=='realtime'){
// 		$('.btn-realtime').click();
// 	}else if( active=='reservation'){
// 		$('.btn-reservation').click();
// 	}
// 	else if( active=='service'){
// 		$('.btn-car-service').click();
// 	}
	
// 	 }, 4000);
// <?php session_unset(); ?>	
});	
</script>
</html>








