<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Posisi extends CI_Model {
    public function getAllPositions() {
        $query = $this->db->get('posisi');
        return $query->result();
    }

    // Fungsi untuk menambahkan data posisi
    public function addPosition($data) {
        $this->db->insert('posisi', $data);
    }

    // Fungsi untuk memperbarui data posisi berdasarkan ID
    public function updatePosition($data, $id) {
        $this->db->where('id_posisi', $id);
        $this->db->update('posisi', $data);
    }

    // Fungsi untuk menghapus data posisi berdasarkan ID
    public function deletePosition($id) {
        $this->db->where('id_posisi', $id);
        $this->db->delete('posisi');
    }

    
}
?>
