<?php

/**
 *
 */
class dvdModel extends CI_Model{

  function __construct(){
      $this->load->database();
  }

  public $id;
  public $titreD;
  public $synopsisD;
  public $realisateurD;
  public $annéeD;
  public $imgD;
  public $backgroudD;
  public $categorieD;
  public $dateAchatD;
  public $nombreD;
  public $IDS;


  public function get_dvd(){
    $query = $this->db->get('dvd');
    return $query->result_array();
  }
  public function getDvdById($id){
    $query = $this->db->get_where('dvd',array('id' => $id));
    return $query->row_array();
  }
}
