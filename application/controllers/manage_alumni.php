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
		$data = array(
			'a_id' => $this->input->post("a_id"),
			'title' => $this->input->post("title"),
			'fname' => $this->input->post("fname"),
			'lname' => $this->input->post("lname"),
			'idcard'=> $this->input->post("idcard"),
			'sex'=> $this->input->post("sex"),
			'date'=> $this->input->post("date"),
			'job'=> $this->input->post("job"),
			'tel'=> $this->input->post("tel"),
			'face'=> $this->input->post("face"),
			'email'=> $this->input->post("email"),
			'password'=> $this->input->post("password")
		
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
		// $config['upload_path'] = './img/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $data1 = $this->input->post('image');
		// $filename = $data1['file_name'];
		$data = array(
			
			'fname' => $this->input->post("fname"),
			'lname' => $this->input->post("lname"),
			'idcard'=> $this->input->post("idcard"),
			'date'=> $this->input->post("date"),
			'job'=> $this->input->post("job"),
			'tel'=> $this->input->post("tel"),
			'face'=> $this->input->post("face"),
			'email'=> $this->input->post("email"),
			'password'=> $this->input->post("password")
			// 'image'=>$filename
		
		
		);
		
	   
		$a_id= $this->input->post("a_id");
		$this->session->set_userdata($data);
		$this->Alumni->alumni_update_info($data,$a_id);
		redirect('Welcome/profile');
	}
	
	// public function edit_menu()
	// {
	// 	$edit_mid = $this->input->get("edit_id");
	// 	$menuselect['menu_select'] = $this->Menu->menu_edit($edit_mid);
	// 	//echo $edit_mid;
	// 	$this->load->view('view_menu_edit',$menuselect);
	// }

	// public function update_menu()
	// {
	// 	$data = array(
	// 		'menu_id' => $this->input->post("menu_id"),
	// 		'menu_name' => $this->input->post("menu_name"),
	// 		'mcategory_id' => $this->input->post("menu_ctype_id"),
	// 		'mshop_id'=> $this->input->post("sh_menu_id"),
	// 	);
	// 	$menu_id = $this->input->post("menu_id");
	// 	//echo $menu_id;
	// 	$this->Menu->menu_update($data,$menu_id);
	// 	echo "<center>";
	// 	echo "อัพเดทเมนู รหัส ".$menu_id." เรียบร้อยแล้ว";
	// 	$this->load->view('view_show_menulink');
	// }
}
