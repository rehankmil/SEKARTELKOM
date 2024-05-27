<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Topik_Aspirasi extends CI_Model {
    public function getAllAspirationTopics() {
        $query = $this->db->get('topik_aspirasi');
        return $query->result();
    }

    // Fungsi untuk menambahkan topik aspirasi
    public function addAspirationTopic($data) {
        $this->db->insert('topik_aspirasi', $data);
    }

    // Fungsi untuk memperbarui topik aspirasi berdasarkan ID
    public function updateAspirationTopic($data, $id) {
        $this->db->where('id_topik_aspirasi', $id);
        $this->db->update('topik_aspirasi', $data);
    }

    // Fungsi untuk menghapus topik aspirasi berdasarkan ID
    public function deleteAspirationTopic($id) {
        $this->db->where('id_topik_aspirasi', $id);
        $this->db->delete('topik_aspirasi');
    }

   
}
?>
