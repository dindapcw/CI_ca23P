<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Kategori_model extends CI_Model{
    public function get_all_kategoriberita(){
        return $this->db->get('kategoriberita')->result_array();
    }
    public function insert_kategoriberita($data){
        return $this->db->insert('kategoriberita',$data);
    }
    public function delete_kategoriberita($idbkategori){
        return $this->db->delete('kategoriberita', ['idkategori'=>$idbkategori]);
    }
    public function get_kategoriberita_by_id($idkategori){
        return $this->db->get_where('kategoriberita',['idkategori'=>$idkategori])->row_array();
    }
    public function update_kategoriberita($id, $data) {
        $this->db->where('idkategori', $id);
        return $this->db->update('kategoriberita', $data);
    }
}