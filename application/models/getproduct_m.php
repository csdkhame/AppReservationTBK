<?php

class Getproduct_m extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  
  public function product() { 
    $this->db->select('id,topic,place_id,latitude,longitude,aum,pro,map');      
    //$this->db->limit(100);
    $this->db->from('web_transferplace_new');
      $this->db->where('aum', '1');
     $query = $this->db->get();



    //   $query = $this->db->get('web_transferplace_new');
    if($query->num_rows() > 0) {
      foreach($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return FALSE;
  }


}

?>