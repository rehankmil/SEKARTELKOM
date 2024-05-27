<?php
define ('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
    public function getAllUsers() {
        $query =    $this->db->query("SELECT * FROM users");
        return $query->result();
    }

    public function adddataUsers($data){
        $this-> db -> insert('users', $data);
    }

    public function UpdateUsers($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->update('users', $data );
    }

    public function getDataUsers($id)
    {
        $this->db->where('id_user', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

    public  function DeleteDataUsers($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('users');
    }
}