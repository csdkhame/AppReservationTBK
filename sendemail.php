<?php
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

$voucher = $_POST[voucher];
$sendby = "Golden Beach Tour Co.,Ltd.";
  $mail->CharSet = "utf-8";
  $mail->IsSMTP();                           // 启用SMTP
  $mail->SMTPAuth = true;                  // 启用SMTP认证
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host = $webmail_host; // SMTP server
  $mail->Port = $webmail_port;                 // set the SMTP port for the GMAIL server
  $mail->Username = $webmail_username;     // SMTP server username
  $mail->Password = $webmail_password ;            // SMTP server password 
  $mail->SetFrom("reservation@goldenbeachtour.com", ''.$sendby.'');
  $mail->AddReplyTo("reservation@goldenbeachtour.com",''.$sendby.'');
  $mail->Subject = "Reservation : $res_no ";
  $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
  $mail->MsgHTML("https://dotdotdottrip.com/dashboard/query_transfer_byuser?order_id=".$_POST[voucher]);
  //$to =  $_POST[phone]
  $address = $_POST[mail];
  
  
  $mail->AddAddress($address, "");
    if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  } 
  else {
  	echo "send";
  	
  }    //event
?>