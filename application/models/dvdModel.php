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
  public $IDR;
  public $annéeD;
  public $imgD;
  public $backgroudD;
  public $categorieD;
  public $dateAchatD;
  public $nombreD;
  public $IDS;


  public function getDvd($id = FALSE){
    $query = $this->db->get('dvd');
    return $query->result_array();
  }

  public function getDvdById($id){
    $this->db->join('realisateur', 'realisateur.id = dvd.IDR' ,'inner');
    $query = $this->db->get_where('dvd',array('dvd.id' => $id));
    return $query->row_array();
  }
  public function getDvdByIDR($IDR){
    $this->db->join('realisateur', 'realisateur.id = dvd.IDR' ,'inner');
    $query = $this->db->get_where('dvd',array('dvd.IDR' => $IDR));
    return $query->row_array();
  }
}
