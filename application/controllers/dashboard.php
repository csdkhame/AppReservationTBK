<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //$this->load->model('Test_model');
   $this->load->model('Userview_model_dash');
	$this->load->model('Getuser_model');
	$this->load->model('Pay_model');
 
  }


public function index()
	{
		/*$this->load->view('header_dash');
		$this->load->view('index_dash');
		$this->load->view('footer_dash');*/
//		redirect('https://dotdotdottrip.com/dashboard/view_user', 'refresh');
		redirect('https://www.welovetaxi.com/app/booking//view_user', 'refresh');
/*		$this->load->view('header');
		$this->load->view('index_dash');
		$this->load->view('footer');*/
	}
	
public function view_user()
	{	

		 $num_record =  $this->input->get('num',TRUE);
		 $start =  $this->input->get('start',TRUE);
		/*if($num_record=="" and $start==""){
			$num = 5;
			header('Location: view_user?num='.$num.'&start=0&page=1');
		}*/
	
		if($_COOKIE['login']) {
			$id = $_COOKIE['login'];
			$user_level = $this->Getuser_model->getuser_pass_id($id);

			/*$this->session->set_userdata(array('i_id' => $user_level[0]->i_id,'i_rating'=> $user_level[0]->i_rating,'s_code'=>$user_level[0]->s_code,'s_code_ref'=>$user_level[0]->s_code_ref)); */

			$level = $user_level[0]->i_rating; 
			if($level==2){
				$data = $this->Userview_model_dash->customerRef_list_cus($level,$user_level[0]->i_id,$user_level[0]->s_code,$user_level[0]->s_code_ref);
				
			}
//			echo json_encode($data);
    		$this->load->view('header_dash2');
			$this->load->view('userview_dash',$data);
			$this->load->view('footer_dash2');
//						echo $num_record." ".$start;
		}
		else{
			
//			redirect('https://dotdotdottrip.com/Register?to=dasboard', 'refresh');
			redirect('https://www.welovetaxi.com/app/booking/register?by=dasboard', 'refresh');
//			header("Location: http://www.yourwebsite.com/user.php");
//		echo 55555555;

		}

	}

public function get_user(){
			$id = $_COOKIE['login'];
			$user_level = $this->Getuser_model->getuser_pass_id($id);
			echo json_encode($user_level);
}

public function update_profile(){
	/* $this->input->post('code_phone');*/
		$id = $_COOKIE['login'];
		$data = $this->Getuser_model->getuser_pass_id($id);
		
	$target_dir = "pic/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	

	    if (copy($_FILES["file"]["tmp_name"], $target_file)) {
	    	$file_name = $_FILES["file"]["name"];
//	        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
	    } else {
//	        echo "Sorry, there was an error uploading your file.";
			$file_name = $this->input->post('txt_avatar');
	    }	
			$result = $this->Userview_model_dash->update_profile($data,$file_name);
			echo $result;
		
	
}
	/********** ************/
public function update_password(){
	$new_pass = $this->input->post('new_pass');
	$old_pass = $this->input->post('old_pass');
	
	$id = $_COOKIE['login'];
	$data = $this->Getuser_model->getuser_pass_id($id);
	if($old_pass == $data[0]->s_password){
		$result = $this->Userview_model_dash->update_pass($data,$new_pass);
	}else{
		$result = 2; //old password invalid
	}
	
	echo $result;
	
	
//	echo $new_pass." : ".$data[0]->s_password;
	
}	
	
public function account_settings(){
		
		$this->load->view('header_dash2');
		$this->load->view('setting_acc_dash');
		$this->load->view('footer_dash2');
		
}

public function payment(){
		
		$this->load->view('header_dash2');
		$this->load->view('payment');
		/*$this->load->view('setting_acc_dash');*/
		// echo "<h2 style='    margin: 79px;'>Coming Soon</h2>";
		$this->load->view('footer_dash2');
		
}	

public function payments(){
	
	$webmail_cc = "gbtour.op@gmail.com"; 
	//$emailurl = "http://tour - thailand.tk / demo / ";
	$emailurl = "http://t-booking.com";
	require_once('phpmailer/class.phpmailer.php');
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
	  $mail->Password = $webmail_password ;            // SMTP server password 
	 
	//date_default_timezone_set("Asia/Bangkok");
	$paypal_email = $_POST["payer_email"];
	$return_url = 'https://dotdotdottrip.com/dashboard/payment?data='.$_POST["item_number"].'&payment=success';
	$cancel_url = 'https://dotdotdottrip.com/dashboard/payment?data='.$_POST["item_number"].'&payment=cancelled';
	//$notify_url = 'https://dotdotdottrip.com/dashboard/payments';

	$item_name = $_POST["item_name"];
	$item_amount = $_POST["txt_amount"];
	$paypal_url = "www.sandbox.paypal.com";
	//echo $_POST["payer_email"].'</Br>'.$_POST["txt_amount"].'</Br>'.$_POST["txn_id"].'</Br>';
	

	// Include Functions
	// Check if paypal request or response
	if ($_POST["txn_ids"] != ''  ){
		$querystring = '';
		//echo 'in if';
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
		
		
		header('location:https://'.$paypal_url.'/cgi-bin/webscr'.$querystring);
		exit();
	} 
	else {
		
		// Response from Paypal

		// read the post from PayPal system and add 'cmd'
		$req = 'cmd=_notify-validate';
		foreach ($_POST as $key => $value) {
			$value = urlencode(stripslashes($value));
			$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
			$req .= "&$key=$value";
		}
		
		$idupdate = $_POST['item_number'];
		$data['item_name']			= $_POST['item_name'];
		$data['item_number'] 		= $_POST['item_number'];
		$data['payment_status'] 	= $_POST['payment_status'];
		$data['payment_amount'] 	= $_POST['mc_gross'];
		$data['payment_currency']	= $_POST['mc_currency'];
		$data['txn_id']				= $_POST['txn_id'];
		$data['receiver_email'] 	= $_POST['receiver_email'];
		$data['payer_email'] 		= $_POST['payer_email'];
		$data['custom'] 			= $_POST['custom'];
		
		//$result = $this->db->insert('ap_credit_paypal',$data );
		
		$this->db->select('invoice,total_price,email');      
		//$this->db->limit(100);
		$this->db->from('ap_order');
		$this->db->where('invoice', ''.$_POST['item_number'].'');
		$query = $this->db->get();	
	 
			if ($query->num_rows() > 0 )
			{			 
			  	foreach($query->result() as $row)
			  	{
					$find_fee = ( $data['payment_amount'] * 4.4 ) / 100  ;
					$find_fee = $find_fee + $row->total_price ;
					$balane = $data['payment_amount'] - $find_fee;
					
					
					$debit = $balane ;
					
					
					$detail = "Total Topup ".$data['payment_amount']." THB <br /> Fee Rate 4.4%  ".$debit." <br /> Total Balance ".$balane." THB";
				
						
					$body = "
					
					Date : ".date('Y-m-d')." <br/>
					Amount : ".$debit." THB. <br/><br/>
					
					<p>Payment With PayPal</p> <br/>
					
					-----------------------------------------------------------------------------------<br />
					".$detail."
					
					
					";
				
					
					
				
					 
					//$mail->MsgHTML(file_get_contents("".$emailurl."/send_from.php?name=admin/pay/agent/invoice/&file=transfer&invoice=".$member_in."&code=".$rand_se.""));
					
					



					$mail->SetFrom("reservation@goldenbeachtour.com", ''.$sendby.'');
					$mail->AddReplyTo("reservation@goldenbeachtour.com",''.$sendby.'');
					$mail->Subject    = "TEST V4 !!!!!! ( Thailand ) You have new cash from Amount $debit  THB. Please Check Now.";
					
					$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
					$mail->MsgHTML($body);
					$address = $row->total_price;
					$address2 = "ozaclever@gmail.com"; 
					
					$mail->AddAddress($address2, "Golden Beach Tour"); 
					 
					
					if ($_POST['mc_gross'] == $row->total_price) {
						$data['status_pay'] = 1;
						$data2['status_pay'] = 1;
						$result = $this->db->insert('ap_credit_paypal',$data );
						$this->db->where('invoice', $idupdate);
						$this->db->update('ap_order', $data2);
						if(!$mail->Send()) {
							
							  echo "Mailer Error: " . $mail->ErrorInfo;
							
							} else {
							
							echo "";
							 
							
							}
						 
					}
					else{
						$data['status_pay'] = 2;
						$data2['status_pay'] = 2;
						$result = $this->db->insert('ap_credit_paypal',$data );
						$this->db->where('invoice', $idupdate);
						$this->db->update('ap_order', $data2);
						if(!$mail->Send()) {
							
							  echo "Mailer Error: " . $mail->ErrorInfo;
							
							} else {
							
							echo "";
							 
							
							}
					}
			   }
			}
		
		//$data = $this->Pay_model->updatepay($idupdate);
	}
}
public function paycredit(){
	
	
	require_once('omise-php/lib/Omise.php');
	//require_once dirname(__FILE__).'./omise-php/lib/Omise.php';
	$webmail_cc = "gbtour.op@gmail.com"; 
	//$emailurl = "http://tour - thailand.tk / demo / ";
	$emailurl = "http://t-booking.com";
	require_once('phpmailer/class.phpmailer.php');
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
	$x = $_POST[amount];
	$totalamount = $x*100;
	//echo $totalamount.'=='.$_POST["omise_token"].$_POST["data"];
	//echo $_POST[amount] .'==='.$x;
	$charge = OmiseCharge::create(array(
	  'amount' => $totalamount,
	  'currency' => 'THB',
	  'card' => $_POST["omise_token"]
	));
	
	if ($charge['status'] == 'successful') {
	  
			$idupdate                 = $_POST[data];
			$data['item_name']			  = $_POST[creditname];
			$data['item_number'] 		  = $_POST[data];
			$data['payment_status']   = 'Completed';
			$data['payment_amount'] 	= $_POST[amount];
			$data['payment_currency']	= 'THB';
			$data['txn_id']				    = $charge['id'];
			//$data['receiver_email'] = $_POST['receiver_email'];
		  //$data['payer_email'] 		= $_POST['payer_email'];
			// $data['custom'] 			    = $_POST[custom];
			
			
		// 	//echo $data."===".$_POST[data];
			$this->db->select('invoice,total_price,email');      
			//$this->db->limit(100);
			$this->db->from('ap_order');
			$this->db->where('invoice', $_POST[data]);
			$query = $this->db->get();
				if ($query->num_rows() > 0 )
				{			 
				  	foreach($query->result() as $row)
				  	{
						$ddd = $row->email;
		     			$data['receiver_email'] 	= $ddd;
			  			$data['payer_email'] 		= $ddd;
			//   echo  $row;
						$find_fee = ( $_POST[amount] * 4 ) / 100  ;
						$find_fee = $find_fee + $row->total_price ;
						$balane = $_POST[amount] - $find_fee;
						$debit = $balane ;
						$detail = "Total Topup ".$_POST[amount]." THB <br /> Fee Rate 4%  ".$debit." <br /> Total Balance ".$balane." THB";
					
							
						$body = "
						
						Date : ".date('Y-m-d')." <br/>
						Amount : ".$debit." THB. <br/><br/>
						
						<p>Payment With PayPal</p> <br/>
						
						-----------------------------------------------------------------------------------<br />
						".$detail."
						";
						$mail->SetFrom("reservation@goldenbeachtour.com", ''.$sendby.'');
						$mail->AddReplyTo("reservation@goldenbeachtour.com",''.$sendby.'');
						$mail->Subject    = "TEST V4 !!!!!! ( Thailand ) You have new cash from Amount $debit  THB. Please Check Now.";					
						$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						$mail->MsgHTML($body);
						$address = $row->total_price;
						$address2 = "ozaclever@gmail.com"; 					
						$mail->AddAddress($address2, "Golden Beach Tour"); 
						$data['status_pay'] = 1;
						$data2['status_pay'] = 1;
						//print_r($data) ;
						$this->db->insert('ap_credit_paypal', $data );
						$this->db->where('invoice', $idupdate);
						$this->db->update('ap_order', $data2);
							if(!$mail->Send()) {
								
								  echo "Mailer Error: " . $mail->ErrorInfo;
								
								} else {
								
								echo "1";
								 
								
								}
				   }
				}
			
			//$data = $this->Pay_model->updatepay($idupdate);
		
	} else {
	  echo 'Fail';
	}	
	// print('<pre>');
	// print_r($charge);
	// print('</pre>');	
}
public function checkout() {
	// define('OMISE_PUBLIC_KEY', 'pkey_test_59iaxcc7zsr77n4nbkb');
	define('OMISE_SECRET_KEY', 'skey_test_59iaxcc8idh2bqub4ia');
	//$curl_post_data = '{"offsite":"internet_banking_scb","currency":"thb","amount":"100000","return_uri":"https://www.welovetaxi.com/app/booking/dashboard/payment?data=7000624"}';
	//	"api":"pkey_test_59iaxcc7zsr77n4nbkb",	
	$postdata = array(
		'offsite' => 'internet_banking_scb',
		'amount' => "100000",
		'currency' => 'thb',
		'return_uri' => "https://www.welovetaxi.com/app/booking/dashboard/payment?data=7000624"
		
	)
;			
$curl_response = '';


$headers = array();
$url = "https://api.omise.co/charges";		
$curl = curl_init();
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
curl_setopt($curl, CURLOPT_HTTPHEADER , array(
'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.6 (KHTML, like Gecko) Chrome/16.0.897.0 Safari/535.6");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_URL, $url);  

curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "chrg_test_59m3qzhgff6o77vln9h");//-u
curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
$curl_response = curl_exec($curl);

curl_close($curl);

$message = iconv("incoming-charset", "utf-8", $curl_response);
$aaaa = json_decode($curl_response);
echo json_encode($aaaa);
	// require_once('omise-php/lib/Omise.php');
	// define('OMISE_PUBLIC_KEY', 'pkey_test_59iaxcc7zsr77n4nbkb');
	// define('OMISE_SECRET_KEY', 'skey_test_59iaxcc8idh2bqub4ia');
	// $charge = OmiseCharge::create(array(
	// 	"amount"      => '10000',
	// 	"currency"    => 'THB',
	// 	"description" => 'TEST',
	// 	"return_uri"  => 'https://www.welovetaxi.com/app/booking/dashboard/payment?data=7000624',
	// 	//$this->url->link('payment/omise/checkoutcallback&order_id='.$order_id, '', 'SSL'),
	// 	"offsite"     => 'internet_banking_scb'
	//   ));
	 // echo $omise_charge;
	// $omise_charge = OmiseCharge::create(array(
	// 							"amount"      => '10000',
	// 							"currency"    => 'THB',
	// 							"description" => 'TEST',
	// 							"return_uri"  => 'https://www.welovetaxi.com/app/booking/dashboard/payment?data=7000624',
	// 							//$this->url->link('payment/omise/checkoutcallback&order_id='.$order_id, '', 'SSL'),
	// 							"offsite"     => 'internet_banking_scb'
	// 						));
						
}
// public function checkout() {
// 	if (!empty($this->request->post['offsite_provider'])) {
// 		$this->load->library('omise');
// 		$this->load->library('omise-php/lib/Omise');
// 		$this->load->model('payment/omise');
// 		$this->load->model('checkout/order');
// 		// Get Omise configuration.
// 		$omise = array();
// 		if ($this->config->get('omise_test_mode')) {
// 			$omise['pkey'] = $this->config->get('omise_pkey_test');
// 			$omise['skey'] = $this->config->get('omise_skey_test');
// 		} else {
// 			$omise['pkey'] = $this->config->get('omise_pkey');
// 			$omise['skey'] = $this->config->get('omise_skey');
// 		}
// 		// Create a order history with `Processing` status
// 		$order_id    = $this->session->data['order_id'];
// 		$order_info  = $this->model_checkout_order->getOrder($order_id);
// 		$order_total = $this->currency->format($order_info['total'], $order_info['currency_code'], '', false);
// 		if ($order_info) {
// 			try {
// 				// Try to create an offsite charge.
// 				$omise_charge = OmiseCharge::create(
// 					array(
// 						"amount"      => OmisePluginHelperCharge::amount($order_info['currency_code'], $order_total),
// 						"currency"    => $this->currency->getCode(),
// 						"description" => $this->request->post['description'],
// 						"return_uri"  => $this->url->link('payment/omise/checkoutcallback&order_id='.$order_id, '', 'SSL'),
// 						"offsite"     => $this->request->post['offsite_provider']
// 					),
// 					$omise['pkey'],
// 					$omise['skey']
// 				);
// 				// Status: failed.
// 				if ($omise_charge['failure_code'] || $omise_charge['failure_code']) {
// 					throw new Exception($omise_charge['failure_code'].': '.$omise_charge['failure_code'], 1);
// 				}
// 				$this->model_payment_omise->addChargeTransaction($order_id, $omise_charge['id']);
// 				// Status: processing.
// 				$this->model_checkout_order->addOrderHistory($order_id, 2);
// 				echo json_encode(array(
// 					'omise'    => $omise_charge,
// 					'captured' => $omise_charge['captured'],
// 					'redirect' => $omise_charge['authorize_uri']
// 				));
// 			} catch (Exception $e) {
// 				// Status: failed.
// 				$error_message = $this->searchErrorTranslation('Payment ' . $e->getMessage());
// 				$this->model_checkout_order->addOrderHistory($order_id, 10, $error_message);
// 				echo json_encode(array(
// 					'error' => $error_message
// 				));
// 			}
// 		} else {
// 			echo json_encode(array('error' => 'Cannot find your order, please try again.'));
// 		}
// 	} else {
// 		echo json_encode(array('error' => 'Please select a bank from the list.'));
// 	}
// }

public function query_transfer_byuser(){
	
  		$id = $this->input->get('order_id');
  		$lng = $this->input->get('lng');
  		/*$cookie = array(
        'name'   => 'lng',
        'value'  => ''.$lng.'',
        'expire' => time()+86500,
        'domain' => '.localhost',
        'path'   => '/',
        'prefix' => 'arjun_',
        );*/
 
  		if($lng!=""){
			$data['lng'] = $lng;
		}
  		$check = $this->input->post('check');
  		
		if($check != ""){
				$data['check'] = $check;
			}else{
				$data['check'] = "";
			}
			
		if($id=="" or $id==null){
			echo '<h1>Please check your value set</h1><br/>';
			echo '<h2>Ex. URL : dashboard/query_transfer_byuser?order_id=voucher_number</h2>';
			
		}else{
			$data['results'] = $this->Userview_model_dash->order_detail($id);
			$this->load->view('voucher',$data);
		}	
		
			
			

		

	
	
}

public function pay()
{
	$data = $this->Pay_model->pays();
	//$array = array($age);
	echo json_encode($data);
}
public function paydriver()
{
	$data = $this->Pay_model->paydriverm();
	//$array = array($age);
	echo json_encode($data);
}


	
	}
?>