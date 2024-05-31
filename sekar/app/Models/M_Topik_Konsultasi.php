<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Topik_Konsultasi extends CI_Model {
    public function getAllConsultationTopics() {
        $query = $this->db->get('topik_konsultasi');
        return $query->result();
    }

    // Fungsi untuk menambahkan topik konsultasi
    public function addConsultationTopic($data) {
        $this->db->insert('topik_konsultasi', $data);
    }

    // Fungsi untuk memperbarui topik konsultasi berdasarkan ID
    public function updateConsultationTopic($data, $id) {
        $this->db->where('id_topik_konsultasi', $id);
        $this->db->update('topik_konsultasi', $data);
    }

    // Fungsi untuk menghapus topik konsultasi berdasarkan ID
    public function deleteConsultationTopic($id) {
        $this->db->where('id_topik_konsultasi', $id);
        $this->db->delete('topik_konsultasi');
    }

    
}
?>
