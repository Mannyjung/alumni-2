<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_mo extends CI_Model {

	function search_m($key)
	{
        $this->db->like('fname',$key);
        $result = $this->db->get('info');
		return $result->result();
    }
}
