<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo 'wewerrwerewrwr1111';
// class Sendmail extends CI_Controller {
// 	public function __construct() {
//     	parent::__construct();
    
//   	}
	// function sendmail()
	// {
         echo "qwqwqwqw";
		require_once('../phpmailer/class.phpmailer.php');
        $mail   = new PHPMailer();
        $body = "";        
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();                           // 启用SMTP
        $mail->SMTPAuth    = true;                  // 启用SMTP认证
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host        = "smtp.gmail.com"; // SMTP server
        $mail->Port        = 465;                 // set the SMTP port for the GMAIL server
        $mail->Username    = "ozaclever@gmail.com";     // SMTP server username
        $mail->Password    = "natthaphat128" ;            // SMTP server password          
        $mail->SetFrom("system@welovetaxi.com", 'We Love Taxi : เพื่อบ้านเรา');         
        $mail->AddReplyTo("system@welovetaxi.com", 'We Love Taxi : เพื่อบ้านเรา');  
        $mail->Subject    = "มีงานใหม่เข้ามา กรุณาตรวจสอบ";
        $mail->AltBody    = "มีงานใหม่เข้ามา กรุณาตรวจสอบ"; // optional, comment out and test
        //$address2 = "chokdee.welovetaxi@gmail.com";
       // $address = "chokdee@welovetaxi.com";
        $mail->AddAddress('ozaclever@gmail.com', "welovetaxi.com");
        $mail->AddAddress('ozaclever@gmail.com', "welovetaxi.com");
        if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
        echo " <center>asasasasasas<center>" ;	
        }
// 	}
// }
?>