<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kartu extends CI_Model {
    
    public function getKartuByIdUser($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('kartu');
        return $query->result();
    }

    public function addKartuData($data){
        $this->db->insert('kartu', $data);
    }

    
}
?>
