<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_mo extends CI_Model {

	function search_m($key)
	{
        $this->db->like('fname',$key);
        $this->db->or_like('sex',$key);
        $this->db->or_like('face',$key);
        $this->db->or_like('idstd',$key);
        $this->db->or_like('sec',$key);
        $this->db->or_like('attend',$key);
        $this->db->or_like('Province-work',$key);
        // $this->db->or_like('year'.".".'finish',$key);
        $this->db->join('year', 'year.a_id = info.a_id');
        $this->db->join('addr_work', 'addr_work.a_id = info.a_id');

        $result = $this->db->get('info');
        
        return $result;
 
  
    }
}