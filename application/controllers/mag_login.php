<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mag_login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('alumni_model','Alumni');
    }
    public function index(){
        $this->load->view('login');
    }
    public function login(){ 
        if($this->input->post('login')){ 
            $email = $this->input->post("email");
            $password =$this->input->post("password");
             $this->Alumni->check_login($email,$password);
        }
    } 
   
}