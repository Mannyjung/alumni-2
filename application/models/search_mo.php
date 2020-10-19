<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_mo extends CI_Model {

	function search_m($key)
	{
        $this->db->like('info'.".".'fname',$key);
        $this->db->or_like('info'.".".'sex',$key);
        $this->db->or_like('info'.".".'face',$key);
        // $this->db->or_like('year'.".".'attend',$key);
        // $this->db->or_like('year'.".".'finish',$key);
        $result = $this->db->get('info');
		return $result->result();
    }
}