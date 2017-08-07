<?php
class Getlaglng_model extends CI_Model {
    public function __construct() {
      parent::__construct();
    }
    public function laglng(){
        $arr = array();
        $lat = $this->input->post('lat_t');
        $lng = $this->input->post('lng_t');
        $distance = $this->input->post('distance');
        //  $dist = sin(deg2rad($lat)) * sin(deg2rad($row->latitude)) +  cos(deg2rad($lat)) * cos(deg2rad($row->latitude)) * cos(deg2rad($theta));
        //                         $dist = acos($dist);
        //                         $dist = rad2deg($dist);
        //                         $miles = $dist * 60 * 1.1515;
        //                         $unit = strtoupper($unit);
        
        $request_url = "https://maps.googleapis.com/maps/api/geocode/xml?latlng=".$lat.",".$lng."&sensor=false";
        $xml = simplexml_load_file($request_url) or die("url not loading");
            $status = $xml->status;
                if ($status=="OK") {
                    $len = sizeof($xml->result);
                    $pro = $xml->result[$len-2]->address_component[0]->long_name;                    
                    // array_push($arr, $xml->result[$len-2]->address_component[0]->long_name);
                    $this->db->select('id,topic,aum,pro,map,latitude,longitude,amphur');      
                    //$this->db->limit(100);
                    $this->db->from('web_transferplace_new');
                    $this->db->where('province', ''.$pro.'');
                    $query = $this->db->get();
                    //$query = $this->db->get('web_transferplace_new');
                    if($query->num_rows() > 0) {
                        foreach($query->result() as $row) {
                            $data[] = $row;
                            // $dlon = $row->longitude - $lng; 
                            //$dlat = $row->latitude -  $lng
                            $theta = $lng - $row->longitude;
                            $dist = sin(deg2rad($lat)) * sin(deg2rad($row->latitude)) +  cos(deg2rad($lat)) * cos(deg2rad($row->latitude)) * cos(deg2rad($theta));
                                $dist = acos($dist);
                                $dist = rad2deg($dist);
                                $miles = $dist * 60 * 1.609344;
                                $unit = strtoupper($unit);
                                // if ($unit == "K") {
                                //     return ($miles * 1.609344);
                                // } else if ($unit == "N") {
                                //     return ($miles * 0.8684);
                                // } else {                            
                                //        return $miles;
                                // // }
                                // $x = $miles-$distance;
                                if ($miles<0.5) {
                                   array_push($arr,$miles.'-'.$row->id.'--'.$row->topic.'===='.$row->aum.'--'.$row->amphur);
                                }
                                //if($miles<$distance+0.020 && $miles>$distance-0.020){
                                //    $x = $miles-$distance;
                                // if($miles<$distance+0.020 && $miles>$distance-0.020){
                                //     array_push($arr,$miles.'-'.$row->id.'--'.$row->topic.'--'.$x.'===='.$row->aum.'--'.$row->amphur);
                                // } 
                           // }                               
                        }
                    return $arr;
                    }
                }
            } 
}
?>