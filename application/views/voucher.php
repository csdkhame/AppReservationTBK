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


<div class="container">
  <h2>View Order</h2>
                                                                        
  <div class="table-responsive">          
  <table class="table">
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
		  					<button class="btn btn-xs btn-info"><span class="adult-lang">Adult</span></button> :	<span id="adult"></span>
		  				</td>
		  				<td width="10"></td>
  						<td>
  						<button class="btn btn-xs btn-success"><span class="child-lang">Child</span></button> :	<span id="child"></span>
  						</td>
  				</tr></table>
  			</td>
  		</tr>
  </table>
  </div>
</div>

<script>
	$( document ).ready(function() {
    	var obj = <?=$json_data?>;
    	var data = obj[0];
    	console.log(obj);
    	$('#voucher').text(data.invoice);
    	$('#adult').text(data.adult);
    	$('#child').text(data.child);
	});
</script>