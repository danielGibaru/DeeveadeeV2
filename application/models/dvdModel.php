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
  public $IDG1;
  public $IDG2;
  public $IDG3;


  public function getDvd($id = FALSE){
    $this->db->select('*');
    $this->db->join('genre1', 'genre1.id = dvd.IDG1', 'inner');
    $this->db->join('genre2', 'genre2.id = dvd.IDG2', 'inner');
    $this->db->join('genre3', 'genre3.id = dvd.IDG3', 'inner');
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
