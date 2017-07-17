<?php

class Getlaglng_model extends CI_Model {
    public function __construct() {
      parent::__construct();
    }

  
    public function laglng() { 
        //$arr = array();
        $id = $this->input->post('id');    
        //$id = '193';    
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
                $request_url = "https://maps.googleapis.com/maps/api/geocode/xml?address=".$Address."&Key=AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90&sensor=true";
               // $jsonData   = file_get_contents($request_url);
               // $data = json_decode($jsonData);
                // $ch = curl_init();
                //  curl_setopt($ch, CURLOPT_URL, $details_url);
                //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                //  $geoloc = json_decode(curl_exec($ch), true);

                //  $step1 = $geoloc['results'];
                //  $step2 = $step1['geometry'];
                //  $coords = $step2['location'];

                // $Lat = $coords['lat'];
                // $Lon =  $coords['lng'];
                // $Lat =$data->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
                // $Lon =  $data->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
                // $arr =  $Lat.'--'.$Lon;
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
                else{

                  return $status;
                }
            }
            return  $jsonData.'--'.$data.'--'.$arr;
        }
        else{
            return FALSE;
        }
    
  }


}

?>