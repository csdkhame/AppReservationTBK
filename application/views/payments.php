<?php
// Database variables
// $host = "localhost"; //database location
// $user = "testsystem_web"; //database username
// $pass = "testsystembooking!@#$"; //database password
// $db_name = "testsystem_web"; //database name


set_time_limit(30000000000);

//$db = New DB();
//require_once('../phpmail/class.phpmailer.php');
$mail             = new PHPMailer();
$webmail_port        = 465;                    // 端口
$webmail_host        = "223.223.218.85"; // SMTP server
$webmail_username    = "system@t-bookingcn.com";     // SMTP server username
$webmail_password    = "252631@MANbooking!@#$";            // SMTP server password 
date_default_timezone_set("Asia/Bangkok");

$date = date('Y-m-d');
$emailurl = "http://www.t-booking.com/";
// PayPal settings
$paypal_email = $_POST["payer_email"];
$return_url = 'https://dotdotdottrip.com/dashboard/payment?data='.$_POST["item_number"].'&payment=success';
$cancel_url = 'https://dotdotdottrip.com/dashboard/payment?data='.$_POST["item_number"].'&payment=cancelled';
$notify_url = 'https://dotdotdottrip.com/dashboard/payment?data='.$_POST["item_number"];
	

$item_name = $_POST["item_name"];
$item_amount = $_POST["txt_amount"];
$paypal_url = "www.sandbox.paypal.com";
echo $_POST["payer_email"];
 

// Include Functions
// Check if paypal request or response
if (isset($_POST["txn_id"]) ){
	$querystring = '';
	
	// Firstly Append paypal account to querystring
	$querystring .= "?business=".urlencode($paypal_email)."&";
	
	// Append amount& currency (£) to quersytring so it cannot be edited in html
	
	//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
	$querystring .= "item_name=".urlencode($item_name)."&";
	$querystring .= "amount=".urlencode($item_amount)."&";
	
	//loop for posted values and append to querystring
	foreach($_POST as $key => $value){
		$value = urlencode(stripslashes($value));
		$querystring .= "$key=$value&";
	}
	
	// Append paypal return addresses
	$querystring .= "return=".urlencode(stripslashes($return_url))."&";
	$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
	$querystring .= "notify_url=".urlencode($notify_url);
	
	// Append querystring with custom field
	//$querystring .= "&custom=".USERID;
	
	// Redirect to paypal IPN
	header('location:https://'.$paypal_url.'/cgi-bin/webscr'.$querystring);
	exit();
} 
else {
	//Database Connection
	$link = mysql_connect($host, $user, $pass);
	mysql_select_db($db_name);
	
	// Response from Paypal

	// read the post from PayPal system and add 'cmd'
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
		$req .= "&$key=$value";
	}
	
	// assign posted variables to local variables
	$data['item_name']			= $_POST['item_name'];
	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['payment_currency']	= $_POST['mc_currency'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['receiver_email'] 	= $_POST['receiver_email'];
	$data['payer_email'] 		= $_POST['payer_email'];
	$data['custom'] 			= $_POST['custom'];	

}
?>