<?php

class Getlaglng_model extends CI_Model {
    public function __construct() {
      parent::__construct();
    }
    public function laglng(){
        $arr = array();
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');
        $request_url = "https://maps.googleapis.com/maps/api/geocode/xml?latlng=".$lat.",".$lng."&sensor=false";
        $xml = simplexml_load_file($request_url) or die("url not loading");
            $status = $xml->status;
                if ($status=="OK") {
                    $len = sizeof($xml->result);
                    $pro = $xml->result[$len-2]->address_component[0]->long_name;                    
                    // array_push($arr, $xml->result[$len-2]->address_component[0]->long_name);
                    $this->db->select('id,topic,aum,pro,map');      
                    //$this->db->limit(100);
                    $this->db->from('web_transferplace_new');
                    $this->db->where('province', $pro);
                    $query = $this->db->get();
                    //   $query = $this->db->get('web_transferplace_new');
                    if($query->num_rows() > 0) {
                        foreach($query->result() as $row) {
                            $data[] = $row;
                        }
                    return $data;
                    }
                }
                // else{
                //     return FALSE;
                // }
            } 
}
?>