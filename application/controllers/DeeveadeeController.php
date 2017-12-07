<?php

class DeeveadeeController extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('dvdModel');
			$this->load->model('castingModel');
			$this->load->model('acteurModel');
			$this->load->model('realisateurModel');

			$this->load->helper('url_helper');
	}

	public function index(){
		$data['Dvd'] = $this->dvdModel->getDvd();

		$data['acteurByOrder'] = $this->acteurModel->getActeurByOrder();
		$data['realisateurByOrder'] = $this->realisateurModel->getRealisateurByOrder();

		$this->load->view('templates/header', $data);
		$this->load->view('deeveadee.php', $data);
    $this->load->view('templates/footer');
	}

	public function viewDvdBy($id = NULL){

		$data['acteurByOrder'] = $this->acteurModel->getActeurByOrder();
		$data['realisateurByOrder'] = $this->realisateurModel->getRealisateurByOrder();

		$data['Dvd'] = $this->dvdModel->getDvdById($id);
		$data['castingActeurbyDvd'] = $this->castingModel->getActeurAndCastingByDvd($id);



		if (empty($data['Dvd'])) {
				show_404();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('viewDvd.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function viewActeurBy($IDA = NULL){
		$data['Dvd'] = $this->dvdModel->getDvd();

		$data['acteurByOrder'] = $this->acteurModel->getActeurByOrder();
		$data['realisateurByOrder'] = $this->realisateurModel->getRealisateurByOrder();

		$data['castingActeur'] = $this->castingModel->getActeurAndDvdByCasting($IDA);
		$data['acteur'] = $this->acteurModel->getActeur();

		if (empty($data['acteur'])) {
				show_404();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('viewByActeur.php', $data);
		$this->load->view('templates/footer.php');
	}
	public function viewRealisateurBy($IDR = NULL){

		$data['acteurByOrder'] = $this->acteurModel->getActeurByOrder();
		$data['realisateurByOrder'] = $this->realisateurModel->getRealisateurByOrder();

		$data['Dvd'] = $this->dvdModel->getDvdByIDR($IDR);

		if (empty($data['acteur'])) {
				show_404();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('viewByRealisateur.php', $data);
		$this->load->view('templates/footer.php');
	}

}
