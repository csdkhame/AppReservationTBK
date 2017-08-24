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
/*echo  sizeof($row_data);*/
echo $check." 000";
?>

<? if($check == ""){ ?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<? } ?>

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
    border-radius: 4px;
    font-size: 16px;
    border: 1px solid rgb(59, 89, 152);
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
	background-color: #555;
    border-radius: 4px;
    border: 1px solid transparent;
    box-shadow: 0 4px 18px 0 rgba(0, 0, 0, .14), 0 7px 12px -5px rgba(33, 33, 33, .46);
    color: white;
}
</style>

	<nav class="navbar navbar-inverse navbar-fixed-top animate">
		<div style="margin: 15px;margin-top: 6px;">
			<div class="container">
				
				<div class="header" align="center">
					<strong>Detail Order</strong>
					
				</div>
				
				<div align="center" style="    margin-top: 10px;">
				<table width="100%">
				<tr>
					<td align="center"><div class="textBox" style="font-size: 12px;"><b><span id="from"></span></b></div></td>
					<td align="center"><strong style="font-size: 17px;color: white;"><span id="text" >To</span></strong></td>
					<td align="center"><div class="textBox" style="font-size: 12px;"><b><span id="to"></span></b></div></td>
				</tr>
				</table>
				 <? if($check!=""){ ?>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    margin-right: -20px;
    margin-top: -60px;" id="close_dialog">
				<i class="fa fa-times" aria-hidden="true" ></i></button>
				<? } ?>
				<!--<div class="show-hide-dialog"><i class="fa fa-times fa-2x" aria-hidden="true" ></i></div>-->
				</div>
			</div>
		</div>
	</nav>


<div class="container">
  <!--<h3>View Order</h3>-->
   <div style="    margin-top: 75px;"> 
   <div>
   <h4 style="margin: 8px;"><Strong>Order</Strong></h4>         
   </div>                                                                                        
  <div class="table-responsive" style="background-color: #fff;">         
  <table class="table ">
  		<tr>
  			<td>
  			<span class="voucher-lang">Voucher No.</span>
  			</td>
  			<td>
  			<span id="voucher"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="amount-lang">Amount</span>
  			</td>
  			<td>
  				<table>
  					<tr>
  						<td>
		  					<span class="adult-lang">Adult</span> :	<span id="adult"></span>
		  				</td>
		  				<td width="10"></td>
  						<td>
  							<span class="child-lang">Child</span> :	<span id="child"></span>
  						</td>
  				</tr></table>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="carno-lang">Number of car</span>
  			</td>
  			<td>
  			<span id="carno"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="arrivied_date-lang">Arrived date</span>
  			</td>
  			<td>
  			<span id="arrivied"></span>
  			</td>
  		</tr>
  		
  		<tr>
  			<td>
  			<span class="arrival_flight-lang">Arrival flight</span>
  			</td>
  			<td>
  			<span id="arrival_flight"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="car_type-lang">Car Type</span>
  			</td>
  			<td>
  			<span id="car_type"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="transfer_date-lang">Transfer date</span>
  			</td>
  			<td>
  			<span id="transfer_date"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="book_by-lang">Book by</span>
  			</td>
  			<td>
  			<span id="book_by"></span>
  			</td>
  		</tr>
  		<tr>
  			<td>
  			<span class="price-lang">Price</span>
  			</td>
  			<td>
  			<span id="price"></span> <span class="currency"></span>
  			</td>
  		</tr>
  </table>
  </div>
  
  
  <h4 style="margin: 8px;"><Strong>Seating</Strong></h4>
  <div class="table-responsive" style="    border-top-left-radius: 10px;    border-top-right-radius: 10px;">
  		<table class="table table-striped table-hover" id="show_carmodel">
  			<tr class="head-table-dialog" align="center" style="background-color: #ddd;">
  				<td style="border-radius: 8px 0 0 0;"><span class="ng-scope">Plan</span></td>
  				<td><span class="ng-scope">Adult</span></td>
  				<td><span  class="ng-scope">Child</span></td>
  				<td align="center"><span  class="ng-scope">Bag big</span></td>
  				<td align="center" style="border-radius: 0 8px 0 0;"><span class="ng-scope">Bag small</span></td>
  			</tr>
  			<tbody id="append_carmodel">
  				
  			</tbody>
  		</table>
  </div>
  
  <h4 style="margin: 8px;"><Strong>Facilitiy</Strong></h4>  
  				  <div style="padding: 3px 3px;  border-radius: 8px; background: #fff;">
  					<div style="margin-left: 3%; padding-top: 9px;">
			                <b>1.</b> 
                            <img src="https://dotdotdottrip.com/files/img/air.png" style="margin: 8px;"> 
			                <span class="lng-conditioner">Air Conditioner</span>			                            
			            </div>
			            <div style="margin-left: 3%;padding-bottom: 9px;">
			                <b>2.</b> 
                            <i class="fa fa-music" aria-hidden="true" style="margin: 8px;"></i> 
			                <span class="lng-audio-player">Audio Player</span>
			            </div>
			        </div>
  
  <h4 style="margin: 8px;"><Strong>Terms of Use</Strong></h4>  
  <div id="terms-of-use">
  <span><b>1.</b>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br><br><b>2.</b> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br><br><b>3.</b> Please check your belongings before leaving. We are not responsible for any loss.<br><br><b>4.</b> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span></div>
  	
	</div> 
</div>
<!--<i class="fa fa-male fa-lg" aria-hidden="true"></i>
<i class="fa fa-male fa-lg" aria-hidden="true"></i>-->
<script>
	$( document ).ready(function() {
		
    	var obj = <?=$json_data?>;
    	var data = obj[0];
    	console.log(obj);
    	$('#voucher').html('<a href="'+data.voucher_url+'" target="_blank">'+data.invoice+'<a>');
    	$('#adult').text(data.adult);
    	$('#child').text(data.child);
    	$('#carno').text(data.numcar);
    	$('#arrivied').text(data.arrival_date);
    	$('#from').text(data.from);
    	$('#to').text(data.to);
    	$('#arrival_flight').text(data.arrival_flight);
    	var cartype = data.product_detail[0].car_topic_en+" "+data.product_detail[0].pax_en;
    	$('#car_type').text(cartype);
    	$('#transfer_date').text(data.booking_date);
    	$('#book_by').text(data.book_by);
    	$('#price').text(data.total_price);
    	$('.currency').text("baht");
    	
    	
    	
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
    		
		  	console.log(i+" : "+l.adult);
//		  	console.log(adult);
		});
    $('#close_dialog').click(function(){
			$('.dialog').hide();
			$('#sectionsNav').show();
//			alert(123);
	});


	});
</script>