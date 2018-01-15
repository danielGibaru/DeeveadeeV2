<?php

class UserController extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('userModel');
			^

	}
	public function index(){
		$this->load->library('form_validation');

		$this->load->view('templates/headerSansCategorie');
		$this->load->view('loginOrCreate.php');
		$this->load->view('templates/footer.php');

	}
	public function addUser(){
		$data['addUser'] = $this->userModel->addUser();

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nomCL','nomCL', 'required');
		$this->form_validation->set_rules('prenomCL', 'prenomCL' , 'required');
		$this->form_validation->set_rules('pseudoCL', 'pseudoCL', 'required');
		$this->form_validation->set_rules('mailCL', 'mailCL', 'required');
		$this->form_validation->set_rules('passwordCL', 'passwordCL', 'required');


		$this->load->view('templates/headerSansCategorie');
		$this->load->view('loginOrCreate.php',$data);
		$this->load->view('templates/footer.php');
	 }
	 public function loginUser(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('mailCL', 'mailCL', 'required');
 		$this->form_validation->set_rules('passwordCL', 'passwordCL', 'required');


	 }
}
