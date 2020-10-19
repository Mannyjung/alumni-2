<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->view('header');
        $this->load->view('navbar');
		$this->load->view('bt');
		$this->load->library('session');
		$this->load->model('info_m');
	}

	public function info_list()
	{
        $id = $this->input->post('id');
		$user_id['query'] = $this->info_m->info_list_m($id);
		// $this->session->set_userdata($user_id[0]);
		// print_r($id);
		$this->load->view('info_list',$user_id);
		$this->load->view('footer');
	}

}
