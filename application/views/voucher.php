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
?>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.navbar-inverse {
    background-color: rgba(0, 150, 136, 0.89);
    border-color: #d9edf7;
    height: 70px;
    
}
.header{
	color: #ffffff;
    font-size: x-large;
}
	
</style>

  
	<nav class="navbar navbar-inverse navbar-fixed-top animate">
		<div style="margin: 15px;margin-top: 4px;">
			<div class="container">
				
				<div class="header" align="center">
					<strong>Detail Order</strong>
					
				</div>
				
				<div align="center">
				<table width="100%">
				<tr>
					<td align="center"><button class="btn btn-xs btn-silver"><b><span id="from"></span></b></button></td>
					<td align="center"><strong style="font-size: 17px;color: white;"><span id="text" >To</span></strong></td>
					<td align="center"><button class="btn btn-xs btn-silver"><b><span id="to"></span></b></button></td>
				</tr>
				</table>
				</div>
			</div>
		</div>
	</nav>


<div class="container">
  <!--<h3>View Order</h3>-->
   <div style="    margin-top: 80px;">                                                                                                 
  <div class="table-responsive">          
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
  </table>
  </div>
	</div> 
</div>

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
	});
</script>