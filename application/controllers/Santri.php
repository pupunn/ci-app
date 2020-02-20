<?php

class Santri extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Santri_model');
        $this->load->library('form_validation');
        $this->load->helper('tgl_indo');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Santri';

        $data['santri'] = $this->Santri_model->getAllSantri();
        if($this->input->post('keyword')) {
            $data['santri'] = $this->Santri_model->cariDataSantri();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('santri/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Santri';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('noid', 'Nomor Induk', 'required|numeric');
        $this->form_validation->set_rules('tpl', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('santri/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Santri_model->tambahDataSantri();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('santri');
        }
        
    }

    public function hapus ($id)
    {
        $this->Santri_model->hapusDataSantri($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('santri');
    }

    public function detail ($id)
    {
        $data['judul'] = 'Detail Data Santri';
        $data['santri'] = $this->Santri_model->getSantriById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('santri/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Tambah Data Santri';
        $data['santri'] = $this->Santri_model->getSantriById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('noid', 'Nomor Induk', 'required|numeric');
        $this->form_validation->set_rules('tpl', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('ttl', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('santri/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Santri_model->ubahDataSantri();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('santri');
        }
        
    }
}