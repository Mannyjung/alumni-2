<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_m extends CI_Model
{

    function info_list_m($id)
    {
        $result = $this->db->get_where('info', array('a_id' => $id));
        return $result->result();

        // $result = $this->db->get('info',$id);
        // return $result;
    }
}
