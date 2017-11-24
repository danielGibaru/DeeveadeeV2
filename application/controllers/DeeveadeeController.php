<?php

class DeeveadeeController extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('dvdModel');
			$this->load->model('castingModel');
			$this->load->model('acteurModel');

			$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['Dvd'] = $this->dvdModel->get_dvd();
		$data['acteur'] = $this->acteurModel->getActeur();


		$this->load->view('templates/header');
		$this->load->view('deeveadee.php', $data);
    $this->load->view('templates/footer');
	}
	public function viewDvdBy($id = NULL){
		$data['Dvd'] = $this->dvdModel->getDvdById($id);

		$data['allDvd'] = $this->dvdModel->get_dvd();
		$data['casting'] = $this->castingModel->getCasting();
		$data['acteur'] = $this->acteurModel->getActeur();

		if (empty($data['Dvd'])) {
				show_404();
		}
		$this->load->view('templates/header.php');
		$this->load->view('viewDvd.php', $data);
		$this->load->view('templates/footer.php');
	}
}
