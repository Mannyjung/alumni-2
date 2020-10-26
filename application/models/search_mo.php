<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_mo extends CI_Model {

	function search_m($key)
	{
        $this->db->like('info'.".".'fname',$key);
        $this->db->or_like('info'.".".'sex',$key);
        $this->db->or_like('info'.".".'face',$key);
        $this->db->or_like('info'.".".'idstd',$key);
        $this->db->or_like('info'.".".'sec',$key);
        $this->db->or_like('year'.".".'attend',$key);
        $this->db->or_like('addr_work'.".".'Province-work',$key);
        // $this->db->or_like('year'.".".'finish',$key);
        $this->db->join('year', 'year.a_id = info.a_id');
        $this->db->join('addr_work', 'addr_work.a_id = info.a_id');

        $result = $this->db->get('info');
        
        return $result;
 
  
    }
}