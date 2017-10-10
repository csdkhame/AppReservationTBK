<?php

class Pay_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  

  public function pays() { 
    $id = $this->input->post('invoice');
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
            $data[$key]['status_pay'] = $row->status_pay;
            $data[$key]['total_price'] = number_format($row->total_price);
            $data[$key]['totalpay'] = $row->total_price;
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
        return FALSE; 	
    }
    //return $data;
    // $pro = $this->input->post('invoice');
    //   $this->db->select('*');      
    //   $this->db->where('invoice',$pro);
    //   $query = $this->db->get('ap_order');
    // if($query->num_rows() > 0) {
    //   foreach($query->result() as $row) {
    //     $data[] = $row;
    //   }
    //   return $data;
    // }
    // return FALSE;
  }
  public function paydriverm(){
        $id = $this->input->post('data');
    $data['status_pay_driver'] = '1';
    $this->db->where('invoice',  $id);
    $this->db->update('ap_order', $data);
    if ($this->db->affected_rows() > 0) {
      return  $id;
    }
  }
}

?>