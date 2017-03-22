<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
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
	public function getJogos()
	{
		$query = $this->db->get('tr2017_calendario');

		return $query->result_array();
	}

	/*  O PHP nao deixa que se volte a declarar uma função com o mesmo nome
	 *  Esta função serve para retornar os jogos de um determinado grupo $grupo
	*/

	public function getJogosbyGroup($grupo)
	{
		$query = $this->db->select('jornada, dia, hora, equipas, resultado')
		->order_by('jornada','ASC')
		->order_by('dia','ASC')
		->order_by('hora','ASC')
		->get_where('tr2017_calendario', array('grupo' => $grupo));

		return $query->result_array();
	}

	public function getEquipas($grupo){
		$query = $this->db->select('nome, jogos, pontos, gm, gs, (gm - gs) as dif')
		->order_by('pontos', 'DESC')
		->order_by('jogos', 'ASC')
		->order_by('dif', 'DESC')
		->order_by('gm', 'DESC')
		->get_where('tr2017_equipas', array('grupo' => $grupo));

		return $query->result_array();
	}

	public function getGrupos(){
		$query = $this->db->get('tr2017_grupos');

		return $query->result_array();
	}
}
