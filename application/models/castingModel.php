<?php

/**
 *
 */
class castingModel extends CI_Model{

  function __construct(){
    $this->load->database();
  }

  public $id;
  public $IDD;
  public $IDA;
  public $roleC;

  public function getCasting($id = FALSE){
    $query = $this->db->get('casting');
    return $query->result_array();
  }

  public function getCastingById($IDD){

    $query = $this->db->get_where('casting',array('IDD' => $IDD));
    return $query->row_array();
  }
}
