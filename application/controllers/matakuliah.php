<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class matakuliah extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('MK_model');
        $this->load->library('session');
    }
    Public function index(){
        $data['matakuliah']= $this->MK_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['matakuliah']=$this->MK_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/form_matakuliah', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $this->form_validation->set_rules('kodemk','kodemk','required');
        $this->form_validation->set_rules('namamk','namamk','required');
        $this->form_validation->set_rules('sks','sks','required');
        $this->form_validation->set_rules('semester','semester','required');
        $this->form_validation->set_rules('jenis','jenis','required');
        $this->form_validation->set_rules('prodi','prodi','required');
        

        if ($this->form_validation->run() === FALSE) {
            $this->index($id);
        }else {
            $data = [
                'kodemk' => $this->input->post('kodemk'),
                'namamk' => $this->input->post('namamk'),
                'sks' => $this->input->post('sks'),
                'semester' => $this->input->post('semester'),
                'jenis' => $this->input->post('jenis'),
                'prodi' => $this->input->post('prodi')
                
            ];
            $this->MK_model->update_matakuliah($id, $data);
            redirect('matakuliah');
        }
    }
    
    public function insert(){
        $kodemk = $this->input->post('kodemk');
        $namamk = $this->input->post('namamk');
        $sks = $this->input->post('sks');
        $semester = $this->input->post('semester');
        $jenis = $this->input->post('jenis');
        $prodi = $this->input->post('prodi');

        $data=array(
            'kodemk'=> $kodemk,
            'namamk' => $namamk,
            'sks'=> $sks,
            'semester' => $semester,
            'jenis' => $jenis,
            'prodi' => $prodi
            
        );
        $result = $this->MK_model->insert_matakuliah($data);

        if($result){
            $this->session->set_flashdata('success','Mata Kuliah berhasil disimpan');
            redirect('matakuliah');
        }else{
            $this->session->set_flashdata('error','Gagal menyimpan Mata Kuliah');
            redirect('matakuliah');
        }
    }
    public function hapus($idmatakuliah){
        $this->MK_model->delete_matakuliah($idmatakuliah);
        redirect('matakuliah');
    }
    public function edit($idmatakuliah){
        $data['matakuliah']=$this->MK_model->get_matakuliah_by_id($idmatakuliah);
        $this->load->view('templates/header');
        $this->load->view('matakuliah/edit_matakuliah',$data);
        $this->load->view('templates/footer');
    }
}