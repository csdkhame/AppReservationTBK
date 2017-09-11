<?php
if($results){
	foreach($results as $data){
		$row_data[] = $data;	
		//echo $data->id;
		//echo $data->code;
	}
$json_data = json_encode($row_data);
//	print_r($row_data);
	
}
else{
	echo "Not found";
}

if($lng){
$lng_js = json_encode($lng);
}else{
	$lng_js = json_encode('');
}

//echo $lng;
/*echo  sizeof($row_data);*/
//echo $check." 000";
?>
  

<? if($check == ""){ ?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <?php echo link_tag('files/css/bootstrap3.min.css'); ?>
    <!-- <?php echo link_tag('files/css/material-dashboard'); ?> -->
 <!--    <?php echo link_tag('dasboard/material-dashboard.css'); ?>-->
    
    <?php echo link_tag('files/css/material-kit.min.css?v=1.1.1'); ?>
    
    
    <?php echo link_tag('files/assets/css/material-bootstrap-wizard.css'); ?>
    
    

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <?php //echo link_tag('files/assets/css/demo.css'); ?>
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
  
  <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>files/js/hammer-time.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script> 
    
    
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
<? } ?>
<script>
$( document ).ready(function() {
		var lng = <?=$lng_js;?>;
		if(lng=="" || lng == null){
			
		}else{
			$.cookie("lng", lng);
		}
		
		
	});
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>files/js/language.js?v=<?=time()?>"></script> 
<style>
.navbar-inverse {
    background-color: #009688 !important;
    border-color: #d9edf7;
    height: 85px;
    box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 12px -5px rgba(33, 33, 33, .46);
}
.header{
	color: #ffffff;
    font-size: x-large;
}
#terms-of-use {
	padding: 10px;
    /* border-radius: 4px; */
    font-size: 16px;
    border: 1px solid #81C8D3;
    margin-top: 5px;
    background-color: #fff;
}	
.show-hide-dialog {
     
    min-width: 2rem;

    z-index: 201;
    left: 50vw;
    overflow: hidden;
    transform: translate(-50%, -50%);
    position: fixed;
    display: block;
    bottom: 0;
        color: red;
}
.btn-silver {
    background-color: #777;
    color: #ffffff;
}
.textBox{
	/* background-color: #555;
    border-radius: 4px;
    border: 1px solid transparent;
    box-shadow: 0 4px 18px 0 rgba(0, 0, 0, .14), 0 7px 12px -5px rgba(33, 33, 33, .46); */
    color: white;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
	border: none !important;	
}
.btn-custom-me{
	background-color: rgba(0, 188, 212, 0.98); 
	bottom: 8px; 
	color: #fff;
/*	z-index: -1;*/
    border-radius: 0px;
    text-transform: capitalize;
}
</style>

	<div class="" style="position: fixed;
    background: #16B3B1;
    padding: 13px;
    padding-bottom: 0;
    width: 100%;
    z-index: 1;">
		<div>
			<div class="container">
				
				<div class="header" align="center">
					<strong class="lng-detail-order"></strong>
					<? if($check!=""){ ?>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    margin-right: -20px;
				" id="close_dialog">
							<i class="fa fa-times" aria-hidden="true" ></i></button>
							<? } ?>
							
				</div>
				<div align="center" style="    margin-top: 10px;">
				
						<span class="textBox" style="font-size: 12px;"><b><span id="from"></span></b></span>
							<strong style="font-size: 17px;color: white;"><span id="text" >-</span></strong>
							<span class="textBox" style="font-size: 12px;"><b><span id="to"></span></b></span>
						
					</div>
				
				
							
				<!--<div class="show-hide-dialog"><i class="fa fa-times fa-2x" aria-hidden="true" ></i></div>-->
				
			</div>
		</div>
				 </div>


<div class="container" style="padding:10px;">
  <!--<h3>View Order</h3>-->
   <div style="    margin-top: 70px;
   "> 
  
   <div style="width: 100%">
   <table width="100%"><tr><td>
   <h4 style="margin: 8px;"><span class="lng-detail-order"></span></h4></td>     
   <td align="right" > 
   <a class="btn btn-xs btn-custom-me"  href="" id="to_pay" >
   	<span style="font-size: medium;/*font-weight: 700;*/" class="lng-paynow">Pay Now</span>
   </a></td> 
   </tr>
   </table>
   </div>                                                                                        
  <div class="" style="padding: 8px;
    background-color: #fff;">         
  <table class="table ">
  		<tr>
  			<td>
  			<span class="lng-product"></span>
  			</td>
  			<td>
  			<span id="pdname"></span>
  			</td>
  		</tr><tr>
  			<td>
  			<span class="voucher-lang lng-voucher-no"></span>
  			</td>
  			<td>
  			<span id="voucher"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="amount-lang lng-amount"></span>
  			</td>
  			<td>
  				<table>
  					<tr>
  						<td>
		  					<span class="adult-lang lng-adult"></span> :	<span id="adult"></span>
		  				</td>
		  				<td width="10"></td>
  						<td>
  							<span class="child-lang lng-child"></span> :	<span id="child"></span>
  						</td>
  				</tr></table>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="lng-num_of_car">Number of car</span>
  			</td>
  			<td>
  			<span id="num_of_car"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="lng-typet_transfer">Arrival date</span>
  			</td>
  			<td>
  			<span id="arrival_date"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="lng-typet_transfer_time">Arrival time</span>
  			</td>
  			<td>
  			<span id="arrival_time"></span>
  			</td>
  		</tr>
  		
  		<tr>
  			<td>
  			<span class="lng-flight">Flight</span>
  			</td>
  			<td>
  			<span id="arrival_flight"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="lng-car_type">Car Type</span>
  			</td>
  			<td>
  			<span id="car_type"></span>
  			</td>
  		</tr>
  		
  		<tr>
  			<td>
  			<span class="book_by-lang lng-book-by"></span>
  			</td>
  			<td>
  			<span id="book_by"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="lng-transfer_date">Date/Time</span>
  			</td>
  			<td>
  			<span id="transfer_date"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="price-lang lng-price"></span>
  			</td>
  			<td>
  			<span id="price"></span> <span class="currency"></span>
  			</td>
  		</tr>
  </table>
  </div>
  
  
  <h4 style="margin: 8px;"><span class="lng-seating"></span></h4>
  <div class="" style="    background: #fff; ">
  		<table class="table " id="show_carmodel">
  			<tr class="head-table-dialog" align="center" style="background-color: #ddd;">
  				<td ><span class="lng-plan"></span></td>
  				<td><span class="lng-adult" ></span></td>
  				<td><span class="lng-child"></span></td>
  				<td align="center"><span  class="lng-bag-big"></span></td>
  				<td align="center" ><span class="lng-bag-small"></span></td>
  			</tr>
  			<tbody id="append_carmodel">
  				
  			</tbody>
  		</table>
  </div>
  
  <h4 style="margin: 8px;"><span class="lng-facilitiy"></span></h4>  
  				  <div style="padding: 3px 3px;  background: #fff;">
  					<div style="margin-left: 3%; padding-top: 9px;">
			                <b>1.</b> 
                            <img src="https://dotdotdottrip.com/files/img/air.png" style="margin: 8px;"> 
			                <span class="lng-conditioner"></span>			                            
			            </div>
			            <div style="margin-left: 3%;padding-bottom: 9px;">
			                <b>2.</b> 
                            <i class="fa fa-music" aria-hidden="true" style="margin: 8px;"></i> 
			                <span class="lng-audio-player"></span>
			            </div>
			        </div>
  
  <h4 style="margin: 8px;"><span class="lng-terms-of-use"></span></h4>  
  <div id="terms-of-use">
  </div>
  	
	</div> 
</div>
<!--<i class="fa fa-male fa-lg" aria-hidden="true"></i>
<i class="fa fa-male fa-lg" aria-hidden="true"></i>-->
<script>
	$( document ).ready(function() {
		
    	var obj = <?=$json_data?>;
    	var data = obj[0];
    	console.log(obj);
    	$('#to_pay').attr('href','https://dotdotdottrip.com/dashboard/payment?data='+data.invoice);
    	$('#voucher').html('<a href="'+data.voucher_url+'" target="_blank">'+data.invoice+'<a>');
    	$('#adult').text(data.adult);
    	$('#child').text(data.child);
    	$('#num_of_car').text(data.numcar);
    	$('#arrival_date').text(data.arrival_date);
    	$('#arrival_time').text(data.arrival_time);
    	$('#from').text(data.from);
    	$('#to').text(data.to);
    	$('#arrival_flight').text(data.arrival_flight);
    	var book_date_f = data.booking_date;
    	var res = data.booking_date.replace(" ", "/"); 
    	$('#transfer_date').text(res);
    	$('#book_by').text(data.book_by);
    	$('#price').text(data.total_price);
    	
    	
    	var product_name = "";
    	var cartype = "";
    	var paysuccess , payowe, paynow;
    	
    	if($.cookie("lng")=="en"){
			product_name = data.product_detail[0].topic_en;
			cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
			$('.lng-flight').text('Flight');
			$('.lng-car_type').text('Car type');
			$('.lng-transfer_date').text('Date/Time');
			$('.lng-num_of_car').text('Number of car');
			$('.currency').text("baht.");
			paysuccess = 'Already paid';
			payowe = 'Outstanding Balance';
			paynow = 'Pay Now';
		}else if ($.cookie("lng")=="cn"){
			product_name = data.product_detail[0].topic_cn;
			cartype = data.product_detail[0].car_topic_cn+" "+data.product_detail[0].pax_cn;
			$('.lng-flight').text('	航班');
			$('.lng-car_type').text('车型');
			$('.lng-transfer_date').text('日期/时间');
			$('.lng-num_of_car').text('车数');
			$('.currency').text('铢');
			paysuccess = '等待付款';
			payowe = '未结余额';
			paynow = '现在付款';
		}else if ($.cookie("lng")=="th"){
			product_name = data.product_detail[0].topic_th;
			cartype = data.product_detail[0].car_topic_th+" "+data.product_detail[0].pax_th;
			$('.lng-flight').text('เที่ยวบิน');
			$('.lng-car_type').text('ประเภทรถ');
			$('.lng-transfer_date').text('วัน/เวลา');
			$('.lng-num_of_car').text('จำนวนรถ');
			$('.currency').text('บาท');
			paysuccess = 'ชำระแล้ว';
			payowe = 'มียอดค้างชำระ';
			paynow = 'ชำระตอนนี้';
		}else if($.cookie("lng")==undefined){
			product_name = data.product_detail[0].topic_en;
			cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
			$('.lng-flight').text('Flight');
			$('.lng-car_type').text('Car type');
			$('.lng-transfer_date').text('Date/Time');
			$('.lng-num_of_car').text('Number of car');
			$('.currency').text("baht");
			paysuccess = 'Already paid';
			payowe = 'Outstanding Balance';
			paynow = 'Pay Now';
		}
		
		var check_pay = data.status_pay;
		if(check_pay==0){
			$('lng-paynow').text(paynow);
		}else if (check_pay==1){
			$('lng-paynow').text(paysuccess);
		}else if (check_pay==2){
			$('lng-paynow').text(payowe);
		}
		$('#pdname').text(product_name);
		$('#car_type').text(cartype);
    	var area = data.product_detail[0].area;
    	
    	if(area=='In'){
    		if($.cookie("lng")=="en"){
				$('.lng-typet_transfer').text('Arrival date');
				$('.lng-typet_transfer_time').text('Arrival time');
				
			}else if ($.cookie("lng")=="cn"){
				$('.lng-typet_transfer').text('到达日期');
				$('.lng-typet_transfer_time').text('到达时间');


			}else if ($.cookie("lng")=="th"){
				$('.lng-typet_transfer').text('วันที่มาถึง');
				$('.lng-typet_transfer_time').text('เวลาที่มาถึง');

			}else if($.cookie("lng")==undefined){
				$('.lng-typet_transfer').text('Arrival date');
				$('.lng-typet_transfer_time').text('Arrival time');
				
			}
		}
		else if(area=='Out'){
			if($.cookie("lng")=="en"){
				$('.lng-typet_transfer').text('Departure date');
				$('.lng-typet_transfer_time').text('Departure time');

			}else if ($.cookie("lng")=="cn"){
				$('.lng-typet_transfer').text('出发日期');
				$('.lng-typet_transfer_time').text('出發時間');

			}else if ($.cookie("lng")=="th"){
				$('.lng-typet_transfer').text('วันเดินทาง');
				$('.lng-typet_transfer_time').text('เวลาเดินทาง');

			}else if ($.cookie("lng")==undefined){
				$('.lng-typet_transfer').text('Departure date');
				$('.lng-typet_transfer_time').text('Departure time');

			}
//			console.log($.cookie("lng"));
			
		}
		else if(area=='Point'){
			if($.cookie("lng")=="en"){
				$('.lng-typet_transfer').text('Use date');
				$('.lng-typet_transfer_time').text('Use time');
	
			}else if ($.cookie("lng")=="cn"){
				$('.lng-typet_transfer').text('使用日期');
				$('.lng-typet_transfer_time').text('使用時間');
			
			}else if ($.cookie("lng")=="th"){
				$('.lng-typet_transfer').text('วันที่ใช้บริการ');
				$('.lng-typet_transfer_time').text('เวลาที่ใช้บริการ');
				
			}else if($.cookie("lng")==undefined){
				$('.lng-typet_transfer').text('Use date');
				$('.lng-typet_transfer_time').text('Use time');
	
			}
			
			
		}
    	
    	$.each( data.car_model, function( i, l ){
    		
    		 var no = 1+parseInt(i);
    		 var adult = '';
    		
    		$('#append_carmodel').append('<tr id="tr_cart_'+i+'"><td>'+no+'</td><td id="adult_'+i+'"></td><td id="child_'+i+'"></td><td id="bag_lg_'+i+'"></td><td id="bag_sm_'+i+'"></td><tr>');
    		for (var a=0;a<l.adult;a++){
				$('#adult_'+i).append('<i class="fa fa-male fa-lg" aria-hidden="true"></i>');
			}
			for (var a=0;a<l.bag_big;a++){
				$('#bag_lg_'+i).append('<i class="fa fa-suitcase fa-2x" aria-hidden="true"></i>');
			}
			for (var a=0;a<l.bag_small;a++){
				$('#bag_sm_'+i).append('<i class="fa fa-suitcase" aria-hidden="true"></i>');
			}
			for (var a=0;a<l.bag_small;a++){
				$('#child_'+i).append('<i class="fa fa-child fa-lg" aria-hidden="true"></i>');
			}
    		
//		  	console.log(i+" : "+l.adult);
//		  	console.log(adult);
		});
		
    	$('#close_dialog').click(function(){
			$('.dialog').hide();
			$('#sectionsNav').show();
			$('body').css('overflow','auto');
//			alert(123);
	});


	});
</script>