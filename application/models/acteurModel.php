<?php

/**
 *
 */
class acteurModel extends CI_Model{

  function __construct(){
    $this->load->database();
  }

  public $id;
  public $nomA;
  public $prenomA;
  public $ageA;
  public $sexeA;


  public function getActeur($id = FALSE){
    $query = $this->db->get('acteur');
    return $query->result_array();
  }

  public function getActeurById($id){

    $query = $this->db->get_where('acteur',array('id' => $id));
    return $query->row_array();
  }
  public function getActeurByOrder(){
    $this->db->order_by("prenomA", "asc");
    $query = $this->db->get('acteur');
    return $query->result_array();
  }
}
