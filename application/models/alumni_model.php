<?php defined('BASEPATH') or exit('No direct script access allowed');
class Alumni_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}



	function alumni_insert_info($data)
	{

		$this->db->insert('info', $data);
	}

	function alumni_insert_addrHome($data2)
	{
		$this->db->insert('addr_home', $data2);
	}
	function alumni_insert_addrWork($data3)
	{
		$this->db->insert('addr_work', $data3);
	}
	function alumni_insert_year($data4)
	{
		$this->db->insert('year', $data4);
	}
	function check_login($email, $password)
	{
		// $this->db->select('email,password');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$result = $this->db->get('info');
		$message = '';

		if ($result->num_rows() > 0) {
			$message = true;

			// $this->load->view('list');

		} else {
			$message = false;
		}
		$data = array(
			"message"=>$message,"data"=>$result->result()

		);
		return $data;
	}

  function alumni_update_info($data,$a_id){
	$this->db->where('a_id', $a_id);
	$this->db->update('info', $data);
  }


	function showone($a_id)
	{
		$result =	$this->db->select('*')
			->from('info')
			->join('year','year.a_id = info.a_id')
			->where('info.a_id',$a_id)
			->get();
			return $result;

			
		}
	function showlist()
	{
		$query = $this->db->get('info');
		return $query->result();
	}
	function showlist1()
	{
		$query1 = $this->db->get('year');
		return $query1;
	}
	function show1()
	{
		$result =	$this->db->select('*')
			->from('info')
			->join('year','year.a_id = info.a_id')
			->where('info.a_id=year.a_id')
			->get();
			return $result;	
			}



	// if($result->result()){
	// 	$status = true;

	// }else{
	// 	$status = false;

	// }
	// echo $status;
	// $rs = [
	// 	'status' => $status,
	// 	'data' => $result->result(),
	// ];
	// return $rs;

}

	// function menu_delete($id){
	// 	$this->db->where('menu_id', $id);
	// 	$this->db->delete('menu');  
	// }	

	// function menu_edit($mid){
	// 	$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
	// 	$result = $this->db->get_where('menu', array('menu_id' => $mid));
	// 	return $result;
	// }

	// function menu_update($data,$menu_id){
	// 	$this->db->where('menu_id', $menu_id);
	// 	$this->db->update('menu', $data);
	// }	
