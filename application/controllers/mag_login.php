<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mag_login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('bt');

        $this->load->library('session');
        $this->load->model('alumni_model', 'Alumni');
    }
    public function index()
    {
        $this->load->view('login');
        $this->load->view('footer');
    }
    public function login()
    {
        if ($this->input->post('login')) {
            $idstd = $this->input->post('idstd');
            $password = $this->input->post('password');
            $check = $this->Alumni->check_login($idstd, $password);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                $data['query'] = $this->Alumni->showlist();
                redirect('mag_login/list',$data);
                // $this->load->view('list', $data);
                // print_r($this->session);
            } else {
                redirect('mag_login/index');
                
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata($data);
        // $this->load->view('login');
        redirect('mag_login/index');
      
    }
    public function list()
    {
        $data['query'] = $this->Alumni->show1();
        $this->load->view('list',$data);
        $this->load->view('footer');
       
    }
}
