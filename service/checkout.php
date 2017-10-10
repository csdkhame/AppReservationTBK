<?php
require_once('omise-php/lib/Omise.php');
//require_once dirname(__FILE__).'./omise-php/lib/Omise.php';
$webmail_cc = "gbtour.op@gmail.com"; 
//$emailurl = "http://tour - thailand.tk / demo / ";
$emailurl = "http://t-booking.com";
require_once('../phpmailer/class.phpmailer.php');
$mail = new PHPMailer();


////////////////////// Config
$webmail_host = "mail.welovetaxi.com";
$webmail_port = 465;
$webmail_username = "system@welovetaxi.com";
$webmail_password = "system2017";


$sendby = "Golden Beach Tour Co.,Ltd.";
  $mail->CharSet = "utf-8";
  $mail->IsSMTP();                           // 启用SMTP
  $mail->SMTPAuth = true;                  // 启用SMTP认证
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host = $webmail_host; // SMTP server
  $mail->Port = $webmail_port;                 // set the SMTP port for the GMAIL server
  $mail->Username = $webmail_username;     // SMTP server username
  $mail->Password = $webmail_password ; 
define('OMISE_API_VERSION', '2015-11-17');
// define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
// define('OMISE_SECRET_KEY', 'SECRET_KEY');
define('OMISE_PUBLIC_KEY', 'pkey_test_59iaxcc7zsr77n4nbkb');
define('OMISE_SECRET_KEY', 'skey_test_59iaxcc8idh2bqub4ia');
$x = $_POST["amount"];
$totalamount = $x*100;
//echo $totalamount.'=='.$_POST["omise_token"].$_POST["data"];
//echo $totalamount;
$charge = OmiseCharge::create(array(
  'amount' => $totalamount,
  'currency' => 'thb',
  'card' => $_POST["omise_token"]
));

if ($charge['status'] == 'successful') {
  
		$idupdate                 = $_POST['data'];
		$data['item_name']			  = $_POST['creditname'];
		$data['item_number'] 		  = $_POST['data'];
		$data['payment_status']   = 'Completed';
		$data['payment_amount'] 	= $_POST['amount'];
		$data['payment_currency']	= $charge['currency'];
		$data['txn_id']				    = $charge['id'];
		//$data['receiver_email'] = $_POST['receiver_email'];
	  //$data['payer_email'] 		= $_POST['payer_email'];
		$data['custom'] 			    = $_POST['custom'];
		
		
		
		$this->db->select('invoice,total_price,email');      
		//$this->db->limit(100);
		$this->db->from('ap_order');
		$this->db->where('invoice', $_POST['data']);
		$query = $this->db->get();	
	 
			// if ($query->num_rows() > 0 )
			// {			 
			//   	foreach($query->result() as $row)
			//   	{
      //     $data['receiver_email'] 	= $row->email;
      //     $data['payer_email'] 		= $row->email;
			// 		$find_fee = ( $data['amount'] * 4 ) / 100  ;
			// 		$find_fee = $find_fee + $row->total_price ;
			// 		$balane = $data['amount'] - $find_fee;
			// 		$debit = $balane ;
			// 		$detail = "Total Topup ".$data['amount']." THB <br /> Fee Rate 4%  ".$debit." <br /> Total Balance ".$balane." THB";
				
						
			// 		$body = "
					
			// 		Date : ".date('Y-m-d')." <br/>
			// 		Amount : ".$debit." THB. <br/><br/>
					
			// 		<p>Payment With PayPal</p> <br/>
					
			// 		-----------------------------------------------------------------------------------<br />
			// 		".$detail."
			// 		";
					// $mail->SetFrom("reservation@goldenbeachtour.com", ''.$sendby.'');
					// $mail->AddReplyTo("reservation@goldenbeachtour.com",''.$sendby.'');
					// $mail->Subject    = "TEST V4 !!!!!! ( Thailand ) You have new cash from Amount $debit  THB. Please Check Now.";					
					// $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
					// $mail->MsgHTML($body);
					// $address = $row->total_price;
					// $address2 = "ozaclever@gmail.com"; 					
					// $mail->AddAddress($address2, "Golden Beach Tour"); 
					// 	$data['status_pay'] = 1;
					// 	$data2['status_pay'] = 1;
					// 	$result = $this->db->insert('ap_credit_paypal',$data );
					// 	$this->db->where('invoice', $idupdate);
					// 	$this->db->update('ap_order', $data2);
					// 	if(!$mail->Send()) {
							
					// 		  echo "Mailer Error: " . $mail->ErrorInfo;
							
					// 		} else {
							
					// 		echo "";
							 
							
					// 		}
			  //  }
			//}
		
		//$data = $this->Pay_model->updatepay($idupdate);
	
} else {
  echo 'Fail';
}

print('<pre>');
print_r($charge);
print('</pre>');
?>