<?php
date_default_timezone_set("UTC");
// functions.php
function check_txnid($tnxid){
	global $link;
	return true;
	$valid_txnid = true;
	//get result set
	$sql = mysql_query("SELECT * FROM `web_credit_paypal` WHERE txnid = '$tnxid'", $link);
	if ($row = mysql_fetch_array($sql)) {
		$valid_txnid = false;
	}
	return $valid_txnid;
}

function check_price($price, $id){
	$valid_price = false;
	//you could use the below to check whether the correct price has been paid for the product
	
	/*
	$sql = mysql_query("SELECT amount FROM `products` WHERE id = '$id'");
	if (mysql_num_rows($sql) != 0) {
		while ($row = mysql_fetch_array($sql)) {
			$num = (float)$row['amount'];
			if($num == $price){
				$valid_price = true;
			}
		}
	}
	return $valid_price;
	*/
	return true;
}

function updatePayments($data){
date_default_timezone_set("UTC");
	global $link;
	
	if (is_array($data)) {
		$sql = mysql_query("INSERT INTO `web_credit_paypal` (txnid, payment_amount, payment_status, itemid, item_name,payment_currency,receiver_email,payer_email,custom, createdtime) VALUES (
				'".$data['txn_id']."' ,
				'".$data['payment_amount']."' ,
				'".$data['payment_status']."' ,
				'".$data['item_number']."' ,
				'".$data['item_name']."' ,
				'".$data['payment_currency']."' ,
				'".$data['receiver_email']."' ,
				'".$data['payer_email']."' ,
				'".$data['custom']."' ,
				'".date("Y-m-d H:i:s")."'
				)", $link);
		$id_paypal =    mysql_insert_id($link);
///////////////////// Agent
$agent_u = mysql_fetch_array(mysql_query("select * from web_admin where id='".$data['item_number']."' ", $link));


		
//////////// Create code
$sql = mysql_query("INSERT INTO `web_credit_transfer` (update_date) VALUES (
				'".time()."'
				)", $link);
$member_dbpay = mysql_insert_id($link);
if($member_dbpay>=10000) {
$member_in = "0$member_dbpay" ;
}
elseif($member_dbpay >=1000) {
$member_in = "00$member_dbpay" ;
}
elseif($member_dbpay >=100) {
$member_in = "000$member_dbpay" ;
}
elseif($member_dbpay >=10) {
$member_in = "0000$member_dbpay" ;
}
else {
$member_in = "00000$member_dbpay" ;
}

$sql = mysql_query("UPDATE  web_credit_transfer SET  
invoice='".$member_in."' WHERE id = '".$member_dbpay."'
)", $link);

$rand = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),0,6);
$rand_se = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'),0,30);		
//////////// Transfer	
////////// update transfer
$sql = mysql_query("UPDATE  web_credit_transfer SET  
invoice='".$member_in."',
code='".$rand."',
code_se='".$rand_se."',
type='3',
agent='".$data['item_number']."',
 
ondate='".date('Y-m-d')."',
 
 
cur='THB',
currency='THB',
 
total='".$data['payment_amount']."',
debit='".$data['payment_amount']."',
 
status='CONFIRM',
posted='".$agent_u['username']."',
post_date='".time()."'
WHERE id = '".$member_dbpay."'
)", $link);

	
 
//////////////////////////// Topup
$sql = mysql_query("INSERT INTO `web_credit_pay` (update_date) VALUES (
				'".time()."'
				)", $link);
$member_db = mysql_insert_id($sql);
if($member_db>=10000) {
$member_inpay = "0$member_db" ;
}
elseif($member_db >=1000) {
$member_inpay = "00$member_db" ;
}
elseif($member_db >=100) {
$member_inpay = "000$member_db" ;
}
elseif($member_db >=10) {
$member_inpay = "0000$member_db" ;
}
else {
$member_inpay = "00000$member_db" ;
}

////////// update PAY
$sql = mysql_query("UPDATE  `web_credit_pay` SET  
invoice='".$member_inpay."',
code='".$rand."',
code_se='".$rand_se."',
type='3',
agent='".$data['item_number']."',
agent_user='".$agent_u['username']."',
agent_type='2',
ondate='".date('Y-m-d')."',
from_transfer='".$member_in."',
auto_paid='1',
currency='THB',
rate='1.00',
cost='".$data['payment_amount']."',
debit='".$data['payment_amount']."',
credit='0',
status='CONFIRM',
posted='admin_admin',
post_date='".time()."'
where id = '".$member_db."'
)", $link);

		
return $id_paypal; 
		
	}
}
