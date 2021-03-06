<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model('calendario_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['jogos'] = $this->calendario_model->getJogos();
		$data['grupos'] = $this->calendario_model->getGrupos();
		$data['tab_equipas'] = false;

		$this->load->view('template/header', $data);
		$this->load->view('calendario');
		$this->load->view('template/footer');
	}

	public function grupos($grupo)
	{
		if(is_numeric($grupo) and ($grupo >= 1 or $grupo <= 3)){
			$data['jogos'] = $this->calendario_model->getJogosbyGroup($grupo);
			$data['equipas'] = $this->calendario_model->getEquipas($grupo);
			$data['grupos'] = $this->calendario_model->getGrupos();
			$data['tab_equipas'] = true;

			$this->load->view('template/header', $data);
			$this->load->view('calendario');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
}
