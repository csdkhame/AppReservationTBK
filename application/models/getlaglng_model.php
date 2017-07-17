<?php

class Getlaglng_model extends CI_Model {
    public function __construct() {
      parent::__construct();
    }

  
    public function laglng() { 
        //$arr = array();
        $id = $this->input->post('id');    
        $this->db->select('address,id,topic');      
        //$this->db->from('');
        $this->db->where('id',''.$id.'');
        //$query = $this->db->get();
        $query = $this->db->get('ap_transferplace');
        if($query->num_rows() > 0) {
            foreach($query->result() as $row) {
                $Address = $row->topic;
                $getid = $row->id;
                //$data[] = $row->topic;
                //$fAddress = urlencode($Address);
                $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$Address."&sensor=true";
                $xml = simplexml_load_file($request_url) or die("url not loading");
                $status = $xml->status;
                if ($status=="OK") {
                    $Lat = $xml->result->geometry->location->lat;
                    $Lon = $xml->result->geometry->location->lng;
                    //$LatLng = "$Lat,$Lon";
                    //array_push($arr, $Lat.'-'.$Lon);
                     $arr = $Lat.'-'.$Lon;
                    $data['lat'] =$Lat;
                    $data['lng'] =$Lon;
                    $this->db->where('id', $getid);
                    $this->db->update('ap_transferplace', $data);
                    // if ($this->db->affected_rows() > 0) {
                    //     return $arr;
                    // }
                   

                }
            }
            return  $data;
        }
        else{
            return FALSE;
        }
    
  }


}

?>