<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_alumni extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		$this->load->model('alumni_model','Alumni');
	}

	public function index()
	{
		$this->load->view('form_menu');
	}


	public function reg_alumni(){
		// $config['upload_path'] = './img/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $data1 = $this->input->post('image');
		// $filename = $data1['file_name'];
		$config['upload_path']   = './upload/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
		$config['allowed_types'] = 'gif|jpg|png'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
		//$config['max_size']      = 100; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		//$config['max_width']     = 1024; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		//$config['max_height']    = 768;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
		$config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
		$this->load->library('upload', $config);
		$this->upload->do_upload('upload');
		$data = array(
			'a_id' => $this->input->post("a_id"),
			'title' => $this->input->post("title"),
			'fname' => $this->input->post("fname"),
			'lname' => $this->input->post("lname"),
			'idcard'=> $this->input->post("idcard"),
			'idstd'=> $this->input->post("idstd"),
			'sec'=> $this->input->post("sec"),
			'sex'=> $this->input->post("sex"),
			'date'=> $this->input->post("date"),
			'job'=> $this->input->post("job"),
			'tel'=> $this->input->post("tel"),
			'face'=> $this->input->post("face"),
			'email'=> $this->input->post("email"),
			'password'=> $this->input->post("password"),
			'upload' => $this->upload->data("file_name")
		
		);
		$data2 = array(
			'House-No' => $this->input->post("House-No"),
			'Moo-home' => $this->input->post("Moo-home"),
			'road-home' => $this->input->post("road-home"),
			'Province-home' => $this->input->post("Province-home"),
			'Area-home' => $this->input->post("Area-home"),
			'Sub-area-home' => $this->input->post("Sub-area-home"),
			'Postal-Code-home' => $this->input->post("Postal-Code-home"),
			'Tel-home' => $this->input->post("Tel-home")
		);
		$data3 = array(
			'Work-No' => $this->input->post("Work-No"),
			'Moo-work' => $this->input->post("Moo-work"),
			'road-work' => $this->input->post("road-work"),
			'Province-work' => $this->input->post("Province-work"),
			'Area-work' => $this->input->post("Area-work"),
			'Sub-area-work' => $this->input->post("Sub-area-work"),
			'Postal-Code-work' => $this->input->post("Postal-Code-work"),
			'Tel-work' => $this->input->post("Tel-work")
		);
		$data4 = array(
			'attend' => $this->input->post("attend"),
			'finish' => $this->input->post("finish")
		);
		
		
		
		// if($this->input->post("a_id")!= "" && $this->input->post("fname")!== ""){
			$this->Alumni->alumni_insert_info($data);
			$this->Alumni->alumni_insert_addrHome($data2);
			$this->Alumni->alumni_insert_addrWork($data3);
			$this->Alumni->alumni_insert_year($data4);
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('bt');
			$this->load->view('login');
			$this->load->view('footer');
			// $this->load->view('view_insert_successwithmenulink');
		// }else {
		// 	echo "ไม่สามารถลงทะเบียนได้";
		
		// }
	}


	public function edit_alumni(){
		
		$data = array(
			'title' => $this->input->post("title"),
			'fname' => $this->input->post("fname"),
			'lname' => $this->input->post("lname"),
			'idcard'=> $this->input->post("idcard"),
			'idstd'=> $this->input->post("idstd"),
			'sec'=> $this->input->post("sec"),
			'sex'=> $this->input->post("sex"),
			'date'=> $this->input->post("date"),
			'job'=> $this->input->post("job"),
			'tel'=> $this->input->post("tel"),
			'face'=> $this->input->post("face"),
			'email'=> $this->input->post("email"),
			'password'=> $this->input->post("password"),
		
		);
		$data2 = array(
			'House-No' => $this->input->post("House-No"),
			'Moo-home' => $this->input->post("Moo-home"),
			'road-home' => $this->input->post("road-home"),
			'Province-home' => $this->input->post("Province-home"),
			'Area-home' => $this->input->post("Area-home"),
			'Sub-area-home' => $this->input->post("Sub-area-home"),
			'Postal-Code-home' => $this->input->post("Postal-Code-home"),
			'Tel-home' => $this->input->post("Tel-home")
		);
		$data3 = array(
			'Work-No' => $this->input->post("Work-No"),
			'Moo-work' => $this->input->post("Moo-work"),
			'road-work' => $this->input->post("road-work"),
			'Province-work' => $this->input->post("Province-work"),
			'Area-work' => $this->input->post("Area-work"),
			'Sub-area-work' => $this->input->post("Sub-area-work"),
			'Postal-Code-work' => $this->input->post("Postal-Code-work"),
			'Tel-work' => $this->input->post("Tel-work")
		);
		$data4 = array(
			'attend' => $this->input->post("attend"),
			'finish' => $this->input->post("finish")
		);
		
	   
		$a_id= $this->input->post("a_id");
		$this->session->set_userdata($data,$data2,$data3,$data4);
		$this->Alumni->alumni_update_info($data,$a_id);
		$this->Alumni->alumni_update_home($data2,$a_id);
		$this->Alumni->alumni_update_work($data3,$a_id);
		$this->Alumni->alumni_update_year($data4,$a_id);
		redirect('Welcome/profile');
	}

	
	public function listbef()
    {
		$data['query'] = $this->Alumni->showlist();
		$this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('bt');
        $this->load->view('listbef',$data);
        $this->load->view('footer');
       
    }

}
