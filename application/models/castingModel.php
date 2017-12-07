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

  public function getActeurAndDvdByCasting($IDA){
    $this->db->select('*');
    $this->db->join('acteur', 'acteur.id = casting.IDA', 'inner');
    $this->db->join('dvd', 'dvd.id = casting.IDD', 'inner');
    $query = $this->db->get_where('casting',$casting = array('casting.IDA' => $IDA));
    return $query->result_array();
  }
  public function getActeurAndCastingByDvd($id){
    $this->db->select('acteur.prenomA');
    $this->db->select('acteur.nomA');
    $this->db->select('casting.roleC');
    $this->db->select('IDA');
    $this->db->join('casting', 'dvd.id = casting.IDD', 'inner');
    $this->db->join('acteur', 'acteur.id = casting.IDA', 'inner');
    $query = $this->db->get_where('dvd',$casting = array('dvd.id' => $id));
    return $query->result_array();
  }
}
