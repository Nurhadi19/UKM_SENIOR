<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model {

    public function insert($data){
        return $this->db->insert('art_1', $data);
    }

}