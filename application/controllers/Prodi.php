<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->library('form_validation');
    $this->load->helper('form');
    }

    public function index()
    {
        $data['judul'] = "Halaman Prodi Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
        
    }
    public function tambah()
    {  
        $data['judul'] = "Halaman Tambah Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        
        $this->form_validation->set_rules('namaprodi', 'Nama prodi', 'required', [
            'required' => 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
            'required' => 'Ruangan Wajib di isi'
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
            'required' => 'Jurusan Wajib di isi'
        ]);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
            'required' => 'Akreditasi Wajib di isi'
        ]);
        $this->form_validation->set_rules('namakaprodi', 'Nama Kaprodi', 'required', [
            'required' => 'Nama Kaprodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahunberdiri', 'Tahun Berdiri', 'required', [
            'required' => 'Tahun Berdiri Wajib di isi'
        ]);
        $this->form_validation->set_rules('outputlulusan', 'Output Lulusan', 'required', [
            'required' => 'Output Lulusan Wajib di isi'
        ]);
        if (!$this->form_validation->run()) {
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_tambah_prodi", $data);
            $this->load->view("layout/footer");
        } else {
            $upload_image = $_FILES['gambar']['name'];

            $data = [
                'namaprodi' => $this->input->post('namaprodi'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'namakaprodi' => $this->input->post('namakaprodi'),
                'tahunberdiri' => $this->input->post('tahunberdiri'),
                'outputlulusan' => $this->input->post('outputlulusan'),
                'gambar' => $upload_image,
            ];
            
            $upload_image = $_FILES['gambar']['name'];
        if($upload_image){
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/prodi/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')){
                $new_image = $this->upload->data('file_name');
                $data['gambar'] = $new_image;
            } else {
                $error = array('error' => $this->upload->display_errors());
            }
            $this->Prodi_model->insert($data, $upload_image);
            $this->session->set_flashdata('message','<div class="alert-success" role="alert"><i class=
            "icon fas fa-check-circle"></i> Data Mahasiswa Berhasil Ditambah!</div>');
            redirect('Prodi');
            }
        }
    }
  
    public function detail($id)
    {
            $data['judul'] = "Halaman Detail Prodi";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['prodi'] = $this->Prodi_model->getById($id);
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_detail_prodi", $data);
            $this->load->view("layout/footer", $data);
            //print_r($data);
        }
        // function upload()
        // {
        //     $data = [
        //         'namaprodi' => $this->input->post('namaprodi'),
        //         'ruangan' => $this->input->post('ruangan'),
        //         'jurusan' => $this->input->post('jurusan'),
        //         'akreditasi' => $this->input->post('akreditasi'),
        //         'namakaprodi' => $this->input->post('namakaprodi'),
        //         'tahunberdiri' => $this->input->post('tahunberdiri'),
        //         'outputlulusan' => $this->input->post('outputlulusan'),
        //     ];
        //     $this->Mahasiswa_model->insert($data);
        //     redirect('Prodi');
            
        // }
        public function edit($id)
        {
            $data['judul'] = "Halaman Edit Prodi";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['prodi'] = $this->Prodi_model->getById($id);

            $this->form_validation->set_rules('namaprodi', 'Nama prodi', 'required',[
                'required'=>'namaprodi Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('ruangan', 'Ruangan', 'required',[
                'required'=>'ruangan Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'required',[
                'required'=>'jurusan Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required',[
                'required'=>'akreditasi Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('namakaprodi', 'Nama Kaprodi', 'required',[
                'required'=>'namakaprodi Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('tahunberdiri', 'Tahun Berdiri', 'required',[
                'required'=>'tahunberdiri Mahasiswa Wajib di isi'
            ]);
            $this->form_validation->set_rules('outputlulusan','Output Lulusan', 'required',[
                'required'=>'outputlulusan Mahasiswa Wajib di isi'
            ]);

            if ($this->form_validation->run() == false) {
                $this->load->view("layout/header", $data);
                $this->load->view("prodi/vw_ubah_prodi", $data);
                $this->load->view("layout/footer");
            } else {
                $data = [
                'namaprodi' => $this->input->post('namaprodi'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'namakaprodi' => $this->input->post('namakaprodi'),
                'tahunberdiri' => $this->input->post('tahunberdiri'),
                'outputlulusan' => $this->input->post('outputlulusan'),
                
            ];
    
            $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/prodi/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['gambar'];

                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/prodi/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $data['gambar'] = $new_image;
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', '<div class="alert-danger" role="alert">' . $error . '</div>');
                redirect('Prodi/edit/' . $id);
            }

            $this->Prodi_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert"> Data Dosen Berhasil Diubah!</div>');
            redirect('Prodi');
                }
            }
        }

        public function hapus($id)
        {
            $this->Prodi_model->delete($id);
            $error = $this->db->error();
            if($error['code']!=0){
                $this->session->set_flashdata('message','<div class="alert-danger" role="alert"><i class=
                "icon fas fa-info-circle"></i> Data Prodi tidak dapat dihapus(sudah berelasi)!</div>');
            } else {
                $this->session->set_flashdata('message','<div class="alert-success" role="alert"><i class=
                "icon fas fa-check-circle"></i> Data Prodi Berhasil Dihapus!</div>');
            }
            redirect('Prodi');
        }  
}
     // function update()
        // {
        //     $data = [
        //         'namaprodi' => $this->input->post('namaprodi'),
        //         'ruangan' => $this->input->post('ruangan'),
        //         'jurusan' => $this->input->post('jurusan'),
        //         'akreditasi' => $this->input->post('akreditasi'),
        //         'namakaprodi' => $this->input->post('namakaprodi'),
        //         'tahunberdiri' => $this->input->post('tahunberdiri'),
        //         'outputlulusan' => $this->input->post('outputlulusan'),
        //     ];
        //     $id= $this->input->post('id');
        //     $this->Prodi_model->update(['id' => $id], $data);
        //     redirect('Prodi');
               
        // }
    