<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class MK_model extends CI_Model{
    public function get_all_matakuliah(){
        return $this->db->get('matakuliah')->result_array();
    }
    public function insert_matakuliah($data){
        return $this->db->insert('matakuliah',$data);
    }
    public function delete_matakuliah($idmatakuliah){
        return $this->db->delete('matakuliah', ['idmatakuliah'=>$idmatakuliah]);
    }
    public function get_matakuliah_by_id($idmatakuliah){
        return $this->db->get_where('matakuliah',['idmatakuliah'=>$idmatakuliah])->row_array();
    }
    public function update_matakuliah($id, $data) {
        $this->db->where('idmatakuliah', $id);
        return $this->db->update('matakuliah', $data);
    }
}