<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//echo 'wewerrwerewrwr1111';
// class Sendmail extends CI_Controller {
// 	public function __construct() {
//     	parent::__construct();
    
//   	}
	// function sendmail()
	// {

       
       include("../phpmailer/class.phpmailer.php");
       echo 'sasas';
       $mail = new PHPMailer();
        
        $body = "ทดสอบการส่งอีเมล์ภาษาไทย UTF-8 ผ่าน SMTP Server ด้วย PHPMailer.";
        
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com"; // SMTP server
        $mail->Port = 25; // พอร์ท
        $mail->Username = "semiclevers@gmail.com"; // account SMTP
        $mail->Password = "natthaphat128"; // รหัสผ่าน SMTP
        
        $mail->SetFrom("ozaclever@gmail.com", "yourname");
        $mail->AddReplyTo("ozaclever@gmail.com", "yourname");
        $mail->Subject = "ทดสอบ PHPMailer.";
        $mail->MsgHTML($body);
        
        $mail->AddAddress("ozaclever@gmail.com", "recipient1"); // ผู้รับคนที่หนึ่ง
        $mail->AddAddress("ozaclever@gmail.com", "recipient2"); // ผู้รับคนที่สอง
        
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }



        
// 	}
// }
?>