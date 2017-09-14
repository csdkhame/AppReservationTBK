<?php

class Userview_model_dash extends CI_Model {

  public function __construct() {
    parent::__construct();

  }

  
  public function query_user($num_record,$start) { 
     		    
      	
		
		$this->db->select('i_id,s_username,s_name,s_email,i_rating,s_code');
		if($num_record!="" and $start!=""){
			$this->db->limit($num_record,$start);
		}
		$query = $this->db->from('ap_users')->get();
		
		
		if($query->num_rows > 0) {
        foreach($query->result() as $key=>$item)
        {
        	$s_code = $item->s_code;
        	if($item->s_code==''){
				$s_code = '-';
			}
		
			
            $query1 = $this->db->query("select count(id) as num ,sum(total_price) as total_am from ap_order where s_code_ref= '".$s_code."' order by id  ");
            
            $sql1 = $query1->row();
            $row[$key]['i_id'] = $item->i_id;
            $row[$key]['num_ref'] = $sql1->num;
            $row[$key]['s_username'] = $item->s_username;
            $row[$key]['s_name'] = $item->s_name;
            $row[$key]['s_email'] = $item->s_email;
            $row[$key]['i_rating'] = $item->i_rating;
            $row[$key]['s_code'] = $item->s_code;
            $row[$key]['total_am'] = $sql1->total_am;
			
        }
        
        $this->db->select('i_id');
        $query_num = $this->db->from('ap_users')->get();
        $num_user = $query_num->num_rows ;
        $data['results'] = $row;
        $data['total_user'] = $num_user;
        return $data;
    }else{
		return 0;
	}
		
  }

  public function customerRef_list_cus($level,$id_head,$code,$code_ref){
  	
/*  	$id_head = $user_level = $this->session->userdata('i_id');  
  	$code = $user_level = $this->session->userdata('s_code');  
  	$code_ref = $user_level = $this->session->userdata('s_code_ref');  */
	
  	$this->db->select('*');
	$this->db->where('s_code',$code);
	$this->db->where('s_code !=',"");
	$this->db->or_where('s_code_ref',$code_ref);
	$this->db->where('s_code_ref !=',"");

	$query = $this->db->from('ap_order')->get();
	if($query->num_rows > 0) {
		 foreach($query->result() as $key=>$row){
		 	
		    $curl_post_data = '{"place_from" : "'.$row->place.'","place_to" : "'.$row->to_place.'"}';
			$curl_response = '';
			$headers = array();
//			$url = "http://services.t-booking.com/Product_dashboard/normal";                               
			$url = "http://services.t-booking.com/Service/getplace";                               
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
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
			$curl_response = curl_exec($curl);
			curl_close($curl);
			$aaaa = json_decode($curl_response);
					
			$data_row[$key]['id_order'] = $row->id;
			$data_row[$key]['guest'] = $row->guest_english;
			$data_row[$key]['total_price'] = $row->total_price;
			//$data_row[$key]['topic'] = $aaaa->topic;
			$data_row[$key]['from'] = $aaaa[0]->topic;
			$data_row[$key]['to'] = $aaaa[1]->topic;
			$data_row[$key]['invoice'] = $row->invoice;
			$data_row[$key]['date_time'] = $row->arrival_date;
			$data_row[$key]['status_pay'] = $row->status_pay;
				
		 	//$data[] = $row;
		 }
		$this->db->select('i_id');
        $query_num = $this->db->from('ap_users')->get();
        $num_user = $query_num->num_rows ;
        
        $data['results'] = $data_row;
        $data['total_user'] = $num_user;
        $data['levelme'] = $level;
        
		return $data;
	}

	else{
		return $query;
	}
 
  }

  public function update_profile($data,$file_name){
  	$current = date('Y-m-d h:i:s a');
  
	foreach($data as $key=>$value){
		
			$old_data[$key] = $value;
			
	}
	$data_each['d_last_update'] = $current;
  	$result_backup = $this->db->insert('ap_users_log',$old_data[0]);
	$this->db->where('i_id', $data[0]->i_id)->update('ap_users_log', $data_each);
				  
  	$result_backup = 1;
  	
  	if($result_backup==1){
  	$address = $this->input->post('txt_address');
  	$new_data['s_image'] = $file_name;
	$new_data['i_id'] = $_COOKIE['login'];
  	$new_data['s_first_name'] = $this->input->post('firstname'); 
  	$new_data['s_last_name'] = $this->input->post('lastname');
  	$new_data['s_email'] = $this->input->post('email');
  	$new_data['s_phone'] = $this->input->post('phone');
  	$new_data['s_username'] = $this->input->post('username');
  	$new_data['i_country'] = $this->input->post('country');
  	$new_data['s_phone_code'] = $this->input->post('code_phone');
  	/*if($this->input->post('new_password')==!"" or $this->input->post('new_password')==!NULL){
		$new_data['s_password'] = $this->input->post('new_password');
	}*/
  	$new_data['d_last_update'] = $current;
  	$new_data['s_name'] = $this->input->post('firstname')." ".$this->input->post('lastname');
  	
  	$new_data['t_address'] = $address;
  	$result_insert = $this->db->where('i_id', ''.$_COOKIE['login'].'')->update('ap_users', $new_data);
  	
  		return $result_insert;
	}else{
		return "false";
	}
  }
  
  public function update_pass($data,$new_pass){
  	$current = date('Y-m-d h:i:s a');
  	foreach($data[0] as $key=>$value){
		
				
					$old_data[$key] = $value;


	}
	$data_each['d_last_update'] = $current;
//  	$result_backup = $this->db->insert('ap_users_log',$old_data);
//	$this->db->where('i_id', $data[0]->i_id)->update('ap_users_log', $data_each);
//				  return json_encode($old_data);
  	$result_backup = 1;
  	
  	if($result_backup==1){
		$new_data['s_password'] = $new_pass;
		$new_data['d_last_update'] = $current;
		$result_insert = $this->db->where('i_id', ''.$_COOKIE['login'].'')->update('ap_users', $new_data);
		return $result_insert;
	}else{
		return 0;
	}
  	
  }
  
  public function order_detail($id){
	  	$this->db->select('*');
		$this->db->where('invoice',$id);
		$query = $this->db->from('ap_order')->get();
		if($query->num_rows > 0) {
		 foreach($query->result() as $key=>$row){
			 	
			$curl_post_data = '{"place_from" : "'.$row->place.'","place_to" : "'.$row->to_place.'"}';
			$curl_response = '';
			$headers = array();
//			$url = "http://services.t-booking.com/Product_dashboard/normal";                               
			$url = "http://services.t-booking.com/Service/getplace";                               
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
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
			$curl_response = curl_exec($curl);
			curl_close($curl);
			$aaaa = json_decode($curl_response);
			
			 	$data[$key]['id'] = $row->id;
			 	
//			 	$data[$key]['arrival_date'] = $row->arrival_date;
			 	$data[$key]['adult'] = $row->adult;
			 	$data[$key]['child'] = $row->child;
			 	$data[$key]['invoice'] = $row->invoice;
			 	$data[$key]['numcar'] = $row->numcar;
			 	$data[$key]['from'] = $aaaa[0]->topic;
				$data[$key]['to'] = $aaaa[1]->topic;
				$data[$key]['guest_english'] = $row->guest_english;
				$data[$key]['total_price'] = number_format($row->total_price);
				$data[$key]['booking_date'] = $row->booking_date;
				$data[$key]['product'] = $row->product;
				$data[$key]['agent_ref'] = $row->agent_ref;
				$data[$key]['guest_other'] = $row->guest_other;
				$data[$key]['phone'] = $row->phone;
				$data[$key]['phonecode'] = $row->phonecode;
				$data[$key]['email'] = $row->email;
				$data[$key]['other'] = $row->other;
				$data[$key]['arrival_date'] = $row->arrival_date;
				$data[$key]['arrival_time'] = $row->arrival_time;
				$data[$key]['arrival_flight'] = $row->arrival_flight;
				$data[$key]['total_pax'] = $row->total_pax;
				$data[$key]['baggage'] = $row->baggage;
				$data[$key]['to_place_address'] = $row->to_place_address;
				$data[$key]['remark'] = $row->remark;
				$data[$key]['s_code_ref'] = $row->s_code_ref;
				$data[$key]['s_code'] = $row->s_code;
				$data[$key]['voucher_url'] = $row->voucher_url;
				$data[$key]['other'] = $row->other;
				$data[$key]['cost_a_nett'] = $row->cost_a_nett;
				$data[$key]['status_pay'] = $row->status_pay;
				$data[$key]['status_confirm'] = $row->status_confirm;
				$data[$key]['status_pay_driver'] = $row->status_pay_driver;
				
				
		$this->db->select('s_name');
		$this->db->where('s_code',$row->s_code);
		$query_user = $this->db->from('ap_users')->get();
		$user = $query_user->row();		
				$data[$key]['book_by'] = $user->s_name;
				
			$curl_post_data = '{"product_id" : "'.$row->product.'"}';
			$curl_response = '';
			$headers = array();
//			$url = "http://services.t-booking.com/Product_dashboard/normal";                               
			$url = "http://services.t-booking.com/Product_dashboard/normal";                               
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
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
			$curl_response = curl_exec($curl);
			curl_close($curl);
			$json_product = json_decode($curl_response);
				
			$data[$key]['product_detail'] = $json_product;
			
			
			$curl_post_data = '{
	"request": {	"car_model":"'.$json_product[0]->car_model.'"},
	"field" :{"0":"bag_big","1":"bag_small","2":"adult","3":"child","4":"plan","5":"car_model"},
	"from": "web_car_capacity"
}';
			$curl_response = '';
			$headers = array();
//			$url = "http://services.t-booking.com/Product_dashboard/normal";                               
			$url = "http://services.t-booking.com/service";                               
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
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
			$curl_response = curl_exec($curl);
			curl_close($curl);
			$json_car_model = json_decode($curl_response);
			
			$data[$key]['car_model'] = $json_car_model;
				
			 }
		 return $data;
		 }
		else
		{
			return ; 	
		}
  }

}

?>