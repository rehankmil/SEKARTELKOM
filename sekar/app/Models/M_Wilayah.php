<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Wilayah extends CI_Model {
    public function getAllRegions() {
        $query = $this->db->get('wilayah');
        return $query->result();
    }

    // Fungsi untuk menambahkan data wilayah
    public function addRegion($data) {
        $this->db->insert('wilayah', $data);
    }

    // Fungsi untuk memperbarui data wilayah berdasarkan ID
    public function updateRegion($data, $id) {
        $this->db->where('id_wilayah', $id);
        $this->db->update('wilayah', $data);
    }

    // Fungsi untuk menghapus data wilayah berdasarkan ID
    public function deleteRegion($id) {
        $this->db->where('id_wilayah', $id);
        $this->db->delete('wilayah');
    }

    
}
?>
