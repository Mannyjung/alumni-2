<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('bt');
		$this->load->library('session', 'database');
		$this->load->model('alumni_model', 'Alumni');
	}
	public function editprofile(){
		// $get_id = $this->input->get("user_id");
		// $select_user['user_select'] = $this->crud->data_users($get_id);
	
		// $this->load->view('edit', $select_user);
		$this->load->view('editprofile');
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

		$this->load->view('home'); //home

	}

	public function regis()
	{
		
		$this->load->view('form_regis');
	}
	public function login()
	{
		
		$this->load->view('login');
	}
	public function profile()
	{
		
		$this->load->view('profile');
		
	}



	// public function show()
	// {
	// 	$this->load->view('header');
	// 	$this->load->view('navbarlist');
	// 	$data['query'] = $this->Alumni->showlist();
	// 	$this->load->view('list', $data);
	// }

}
