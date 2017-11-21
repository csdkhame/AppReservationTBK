<?php

class Savebook_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function savebook() { 
     
      $data['product'] = $this->input->post('program');
      $data['guest_english'] = $this->input->post('name');
      $data['numcar'] = $this->input->post('numcar');
      $data['phone'] = $this->input->post('phone');
      $data['phonecode'] = $this->input->post('phonecode');
      $data['email'] = $this->input->post('email');
      $data['arrival_date'] = $this->input->post('onndate');
      $data['arrival_time'] = $this->input->post('ontime');
      $data['adult'] = $this->input->post('adult');
      $data['child'] = $this->input->post('child');
      $data['place'] = $this->input->post('from');
      $data['to_place'] = $this->input->post('to');
      $data['total_price'] = $this->input->post('cost');
      $data['booking_date'] = date('Y-m-d H:i:s');
      $data['post_date'] = time();
      $data['other'] = $this->input->post('other');
      $data['arrival_flight'] = $this->input->post('arrival_flight');
      $data['guest_other'] = $this->input->post('guest_other');
      $data['s_code'] = $this->input->post('code');
      $data['s_code_ref'] = $this->input->post('code_ref');
      $data['cost_a_nett'] = $this->input->post('cost_a_nett');
      $data['lat_from'] = $this->input->post('lat_f');
      $data['lng_from'] = $this->input->post('lng_f');
      $data['lat_to'] = $this->input->post('lat_t');
      $data['lng_to'] = $this->input->post('lng_t');
      $data['fashion'] = $this->input->post('book');
      //return $times;
     
      
     
    
      $this->db->insert('ap_order',$data);      
      //$this->db->limit(100);
      $getid = $this->db->insert_id();
      
      if ($getid) {
       
                          $date3 = date('dmy');
                          $agent_ref = $date3.$getid;

                          $data2['agent_ref'] =$agent_ref;
                          $this->db->where('id', $getid);
                          $this->db->update('ap_order', $data2);
                          if ($this->db->affected_rows() > 0) {
                            return $agent_ref;
                          }
                          
                         
        }
        else{

          
                            //echo $finalcode;
        }

  }
   public function saveapi($x) { 
        $x = json_decode($x);
        // foreach ($x as $row ) {
        $invoice = $x->invoice;
        $link = $x->voucher_url;
        $agent_ref = $x->agent_ref;
        $email= $x->email;
        $res_no = $x->code_ref;
        // }
        //return  $invoice.'-'.$agent_ref;
        //return $x->invoice;
        $data2['invoice'] = $invoice;
        $data2['voucher_url'] = $link;
        $this->db->where('agent_ref', $agent_ref);      
        $this->db->update('ap_order', $data2);
        if ($this->db->affected_rows() > 0) {
          //return $invoice;
          // $webmail_cc = "gbtour.op@gmail.com"; 
          // //$emailurl = "http://tour - thailand.tk / demo / ";
          // $emailurl = "http://t-booking.com";
          // require_once('phpmailer/class.phpmailer.php');
          // $mail = new PHPMailer();
          
          
          // ////////////////////// Config
          // $webmail_host = "mail.welovetaxi.com";
          // $webmail_port = 465;
          // $webmail_username = "system@welovetaxi.com";
          // $webmail_password = "system2017";
          
          
          // $sendby = "Golden Beach Tour Co.,Ltd.";
          //   $mail->CharSet = "utf-8";
          //   $mail->IsSMTP();                           // 启用SMTP
          //   $mail->SMTPAuth = true;                  // 启用SMTP认证
          //   $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
          //   $mail->Host = $webmail_host; // SMTP server
          //   $mail->Port = $webmail_port;                 // set the SMTP port for the GMAIL server
          //   $mail->Username = $webmail_username;     // SMTP server username
          //   $mail->Password = $webmail_password ;            // SMTP server password 
          //   $mail->SetFrom("reservation@goldenbeachtour.com", ''.$sendby.'');
          //   $mail->AddReplyTo("reservation@goldenbeachtour.com",''.$sendby.'');
          //   $mail->Subject = "Reservation : $res_no ";
          //   $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
          //   $mail->MsgHTML("test");
          //   //$to =  $_POST[phone]
          //   $address =  $email;
          //   $mail->AddAddress($address, "");
          //     if(!$mail->Send()) {
          //     echo "Mailer Error: " . $mail->ErrorInfo;
          //   } 
          //   else {
          //     echo "send";
              
          //   }    //e
        }
        else{
                            
        }
  }
  
  
  
}
?>