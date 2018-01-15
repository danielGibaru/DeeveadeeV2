<?php

/**
 *
 */
class realisateurModel extends CI_Model{

  function __construct(){
    $this->load->database();
  }

  public $id;
  public $nomR;
  public $prenomR;
  public $sexeR;
  public $dateNaisanceR;

  public function getRealisateurByOrder(){
    $this->db->order_by("prenomR", "asc");
    $query = $this->db->get('realisateur');
    return $query->result_array();
  }

}
