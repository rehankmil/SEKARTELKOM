<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Konsultasi extends CI_Model {
    public function getAllConsultations() {
        $query = $this->db->get('konsultasi');
        return $query->result();
    }

    // Fungsi untuk menambahkan data konsultasi
    public function addConsultation($data) {
        $this->db->insert('konsultasi', $data);
    }

    // Fungsi untuk memperbarui data konsultasi berdasarkan ID
    public function updateConsultation($data, $id) {
        $this->db->where('id_konsultasi', $id);
        $this->db->update('konsultasi', $data);
    }

    // Fungsi untuk menghapus data konsultasi berdasarkan ID
    public function deleteConsultation($id) {
        $this->db->where('id_konsultasi', $id);
        $this->db->delete('konsultasi');
    }

    
}
?>
