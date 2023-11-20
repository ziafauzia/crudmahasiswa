<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('beasiswa_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Beasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['beasiswa'] = $this->beasiswa_model->get();
        $this->load->view("layout/header_beasiswa", $data);
        $this->load->view("beasiswa/vw_beasiswa", $data);
        $this->load->view("layout/footer_beasiswa", $data);
        
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Beasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data['beasiswa'] = $this->beasiswa_model->get();
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required',[
            'required'=>'Nama Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required'=>'Jenis Kelamin Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required',[
            'required'=>'NIK Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('temtang_lahir', 'Tempat/Tanggal Lahir', 'required',[
            'required'=>'Tempat/Tanggal Lahir Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required',[
            'required'=>'Agama Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_pertinggi', 'Nama Perguruan Tinggi', 'required',[
            'required'=>'Nama Perguruan Tinggi Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun_masuk', 'Tahun Masuk', 'required',[
            'required'=>'Tahun Masuk Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('fakul_prodi', 'Fakultas/Program Studi', 'required',[
            'required'=>'Fakultas/Program Studi Mahasiswa Wajib di isi'
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required'=>'NIM Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer',[
            'required'=>'NO HP Mahasiswa Wajib di isi',
            'integer'=>'NO HP harus angka'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required',[
            'required'=>'Email Mahasiswa Wajib di isi'
        ]);
        
        $this->form_validation->set_rules('alamat_kos', 'Alamat di tempat Kuliah ', 'required',[
            'required'=>'Alamat di tempat Kuliah  Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat_rumah', 'Alamat di tProv Riau ', 'required',[
            'required'=>'Alamat di Prov Riau  Mahasiswa Wajib di isi'
        ]);
        
        if($this->form_validation->run() == false) {
        $this->load->view("layout/header_beasiswa", $data);
        $this->load->view("beasiswa/vw_tambah_beasiswa", $data);
        $this->load->view("layout/footer_beasiswa");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'nik' => $this->input->post('nik'),
                'temtang_lahir' => $this->input->post('temtang_lahir'),
                'agama' => $this->input->post('agama'),
                'nama_pertinggi' => $this->input->post('nama_pertinggi'),
                'tahun_masuk' => $this->input->post('tahun_masuk'),
                'fakul_prodi' => $this->input->post('fakul_prodi'),
                'nim' => $this->input->post('nim'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'alamat_kos' => $this->input->post('alamat_kos'),
                'alamat_rumah' => $this->input->post('alamat_rumah'),         
            ];
            $this->beasiswa_model->insert($data);
            $this->session->set_flashdata('message','<div class="alert-success" role="alert">
            Data Mahasiswa Beasiswa Berhasil Ditambah!</div>');
            redirect('Beasiswa');
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Mahasiswa Beasiswa";
        $data['user'] = $this->db->get_where('beasiswa', ['email' => $this->session->userdata('email')])->row_array();
        $data['Beasiswa'] = $this->beasiswa_model->detail($id);
        $this->load->view("layout/header_beasiswa", $data);
        $this->load->view('beasiswa/vw_detail_beasiswa', $data);
        $this->load->view("layout/footer_beasiswa", $data);
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Beasiswa Mahasiswa";
        $data['beasiswa'] = $this->beasiswa_model->getById($id);
        $data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required',[
            'required'=>'Nama Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',[
            'required'=>'Jenis Kelamin Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required',[
            'required'=>'NIK Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('temtang_lahir', 'Tempat/Tanggal Lahir', 'required',[
            'required'=>'Tempat/Tanggal Lahir Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required',[
            'required'=>'Agama Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_pertinggi', 'Nama Perguruan Tinggi', 'required',[
            'required'=>'Nama Perguruan Tinggi Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun_masuk', 'Tahun Masuk', 'required',[
            'required'=>'Tahun Masuk Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('fakul_prodi', 'Fakultas/Program Studi', 'required',[
            'required'=>'Fakultas/Program Studi Mahasiswa Wajib di isi'
        ]);

        $this->form_validation->set_rules('nim', 'NIM', 'required',[
            'required'=>'NIM Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric',[
            'required'=>'NO HP Mahasiswa Wajib di isi',
            'numeric'=>'NO HP harus angka'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required',[
            'required'=>'Email Mahasiswa Wajib di isi'
        ]);
        
        $this->form_validation->set_rules('alamat_kos', 'Alamat di tempat Kuliah ', 'required',[
            'required'=>'Alamat di tempat Kuliah  Mahasiswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat_rumah', 'Alamat di tProv Riau ', 'required',[
            'required'=>'Alamat di Prov Riau  Mahasiswa Wajib di isi'
        ]);

        if($this->form_validation->run() == false) {
            $this->load->view("layout/header_beasiswa", $data);
            $this->load->view("beasiswa/vw_ubah_beasiswa", $data);
            $this->load->view("layout/footer_beasiswa");
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'nik' => $this->input->post('nik'),
                    'temtang_lahir' => $this->input->post('temtang_lahir'),
                    'agama' => $this->input->post('agama'),
                    'nama_pertinggi' => $this->input->post('nama_pertinggi'),
                    'tahun_masuk' => $this->input->post('tahun_masuk'),
                    'fakul_prodi' => $this->input->post('fakul_prodi'),
                    'nim' => $this->input->post('nim'),
                    'no_hp' => $this->input->post('no_hp'),
                    'email' => $this->input->post('email'),
                    'alamat_kos' => $this->input->post('alamat_kos'),
                    'alamat_rumah' => $this->input->post('alamat_rumah'),         
                ];
                $id = $this->input->post('id');
        $this->beasiswa_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Mahasiswa Beasiswa Berhasil DiUbah!</div>');
        redirect('Beasiswa');
    }
}
   
    public function hapus($id)
    {
        $this->beasiswa_model->delete($id);
        $error = $this->db->error();

        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Beasiswa tidak dapat dihapus (sudah berhasil)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Beasiswa Berhasil Dihapus!</div>');
        }
        
        
            redirect('Beasiswa');
        }
}