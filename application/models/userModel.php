<?php

/**
 *
 */
class userModel extends CI_Model{

  function __construct(){
    $this->load->database();
  }
  public $id;
  public $nomCL;
  public $prenomCL;
  public $IDAD;
  public $pseudoCL;
  public $mailCL;
  public $passwordCL;
  public $droitCL;

  public function addUser(){

    $this->load->helper('security');
    $this->load->helper('url');
    $data = array(

        'nomCL' => $this->input->post('nomCL'),
        'prenomCL' => $this->input->post('prenomCL'),
        'pseudoCL' => $this->input->post('pseudoCL'),
        'mailCL' => $this->input->post('mailCL'),
        'passwordCL' => do_hash($this->input->post('passwordCL'), 'md5'),
        //'passwordCL' => $this->hashpassword($this->input->post('passwordCL')),

    );
    return $this->db->insert('client',$data);
  }

  public function login(){
    $this->load->helper('security');
    $this->load->helper('url');

    $data = array(

    'pseudoCL' => $this->input->post('pseudoCL'),
    'passwordCL' => do_hash($this->input->post('passwordCL'), 'md5'),

    );
    if( $this->db->where('pseudoCL' ,$data['pseudoCL'])){

        echo "pjfoezhgouhezuh";

    }
  }
}
