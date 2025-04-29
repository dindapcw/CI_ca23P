<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class kategori extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('session');
    }
    Public function index(){
        $data['kategoriberita']= $this->Kategori_model->get_all_kategoriberita();
        $this->load->view('templates/header');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['kategoriberita']=$this->Kategori_model->get_all_kategoriberita();
        $this->load->view('templates/header');
        $this->load->view('kategori/form_kategori', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        
        $this->form_validation->set_rules('kategori','kategori','required');
        

        if ($this->form_validation->run() === FALSE) {
            $this->index($id);
        }else {
            $data = [
                
                'kategori' => $this->input->post('kategori')
                
            ];
            $this->Kategori_model->update_kategoriberita($id, $data); // sesuaiin lagi sama yg ada di model
            redirect('kategori'); // halaman awal
        }
    }
    
    public function insert(){
        
        $kategori = $this->input->post('kategori');
        

        $data=array(
            
            'kategori' => $kategori
            
        );
        $result = $this->Kategori_model->insert_kategoriberita($data);

        if($result){
            $this->session->set_flashdata('success','Kategori berhasil disimpan');
            redirect('kategori');
        }else{
            $this->session->set_flashdata('error','Gagal menyimpan berita');
            redirect('kategori');
        }
    }
    public function hapus($idkategori){
        $this->Kategori_model->delete_kategoriberita($idkategori);
        redirect('kategori'); // ke halaman awal
    }
    public function edit($idkategori){
        $data['kategoriberita']=$this->Kategori_model->get_kategoriberita_by_id($idkategori);
        $this->load->view('templates/header');
        $this->load->view('kategori/edit_kategori',$data);
        $this->load->view('templates/footer');
    }
}