<?php

class Mahasiswa_model extends CI_Model{
    
    public function getMahasiswa($id = null){

        if($id === null){
            return $this->db->get('kontak')->result_array();

        }else{
            return $this->db->get_where('kontak', ['nim' => $id])->result_array();
        }
    }

    public function deleteMahasiswa($id){
        $this->db->delete('kontak', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createMahasiswa($data){
        $this->db->insert('kontak', $data);
        return $this->db->affected_rows();
    }

    public function updateMahasiswa($data, $id){
        $this->db->update('kontak', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

}