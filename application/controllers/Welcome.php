<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('alumni_model','Alumni');
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

		$this->load->view('home');//home

	}
	
	public function regis()
	{
		$this->load->view('form_regis');
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	public function show(){

		$data['query']=$this->Alumni->showlist();
		$this->load->view('list',$data);
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		// exit;
		
		// $this->load->database();
		// $query['data'] = $this->db->get('info');
		// $query = $this->db->get('info')->result();
		// print_r($query);
	}

}
