<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Aspirasi extends CI_Model {
    public function getAllAspirations() {
        $query = $this->db->get('aspirasi');
        return $query->result();
    }

    // Fungsi untuk menambahkan data aspirasi
    public function addAspiration($data) {
        $this->db->insert('aspirasi', $data);
    }

    // Fungsi untuk memperbarui data aspirasi berdasarkan ID
    public function updateAspiration($data, $id) {
        $this->db->where('id_aspirasi', $id);
        $this->db->update('aspirasi', $data);
    }

    // Fungsi untuk menghapus data aspirasi berdasarkan ID
    public function deleteAspiration($id) {
        $this->db->where('id_aspirasi', $id);
        $this->db->delete('aspirasi');
    }

    
}
?>
