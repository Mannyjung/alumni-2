<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_con extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('search_mo');
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('bt');
        


    }

	public function index()
	{
		$this->load->view('search');
    }
    public function keyword(){
        $key = $this->input->post('search');
        $data['query'] = $this->search_mo->search_m($key);
        $this->load->view('show',$data);
        $this->load->view('footer');
    }
    
}
