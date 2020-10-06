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
	public function index()
	{

		$this->load->view('home'); //home
		$this->load->view('footer');
	}

	public function regis()
	{
		
		$this->load->view('form_regis');
		$this->load->view('footer');
	}
	public function login()
	{
		
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function profile()
	{
		$a_id = $this->session->userdata('a_id');
		$data['query'] =$this->Alumni->showone($a_id);
		
		$this->load->view('profile',$data);	
		$this->load->view('footer');
}



	// public function show()
	// {
	// 	$this->load->view('header');
	// 	$this->load->view('navbarlist');
	// 	$data['query'] = $this->Alumni->showlist();
	// 	$this->load->view('list', $data);
	// }

}
