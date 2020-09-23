<?php defined('BASEPATH') or exit('No direct script access allowed');
class Alumni_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	// function getAllMenus(){
	// 	$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
	// 	$result = $this->db->get('menu');
	// 	return $result;
	// }

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
	function check_login($email,$password){
		$sql = "SELECT * FROM `info` WHERE `email` = '" . $email . "' and`password` = '" . $password . "'";
		$result = $this->db->query($sql);

		
		
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
}
