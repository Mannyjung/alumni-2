<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mag_login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('alumni_model', 'Alumni');
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        if ($this->input->post('login')) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $check = $this->Alumni->check_login($email, $password);
            // print_r($check);
            // echo $check['message'];
            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                $data['query'] = $this->Alumni->showlist();
                $this->load->view('list',$data);
                // print_r($array[0]);
               
      
            } else {
                $this->load->view('login');
            }
        }
    }
}
