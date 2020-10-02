<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kursusku extends CI_Controller
{
    // method default

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Kursus_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['judul'] = "Kursusku";
        $data['kursus'] = $this->Kursus_model->getAllKursus();
        $data['section_kursus'] = $this->Kursus_model->getAllSectionKursus();
        $data['konten_video'] = $this->Kursus_model->getAllKontenVideo();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/kursusku/index', $data);
        $this->load->view('backend/templates/footer');
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Detail Kursusku";
        $data['kursus'] = $this->Kursus_model->getKursusById($id);

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/kursusku/detail', $data);
        $this->load->view('backend/templates/footer');
    }



    // menambahkan 
    public function tambah_kursus()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Kursusku";
        $data['kursus'] = $this->Kursus_model->getAllKursus();
        $data['section_kursus'] = $this->Kursus_model->getAllSectionKursus();
        $data['konten_video'] = $this->Kursus_model->getAllKontenVideo();

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');

        if ($this->form_validation->run() == TRUE) {



            $this->Kursus_model->tambahKursus();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success no-margin alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
                Kursus <strong> berhasil </strong> di tambahkan!
                </div>'
            );
            redirect('kursusku');
        } else {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/kursusku/index', $data);
            $this->load->view('backend/templates/footer');
        }
    }


    // MENGUBAH KURSUS
    public function ubah_kursus($id)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Detail Kursus";
        $data['kursus'] = $this->Kursus_model->getKursusById($id);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|numeric');

        // $config['upload_path']          = './uploads/';
        //       $config['allowed_types']        = 'gif|jpg|png';
        //       $this->load->library('upload', $config);


        if ($this->form_validation->run() == TRUE) {

            $this->Kursus_model->ubahKursusku($id);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Kursus <strong> berhasil </strong> di ubah!
            </div>'
            );
            redirect('kursusku/detail/' . $id);
        } else {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/kursusku/index', $data);
            $this->load->view('backend/templates/footer');
        }
    }

    public function ubah_gambar($id)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Detail Kursus";
        $data['kursus'] = $this->Kursus_model->getKursusById($id);

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('image')) {

            $image = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/' . $image['file_name'];
            // $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            $config['width']          = 1200;
            $config['height']         = 800;
            $config['new_image'] = './uploads/thumbnails/' . $image['file_name'];

            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $data = [
                "image" => $image['file_name']
            ];
            $this->db->where('id', $id);
            $this->db->update('kursus', $data);
        } else {

            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/kursusku/index', $data);
            $this->load->view('backend/templates/footer');
        }

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Gambar <strong> berhasil </strong> di ubah!
            </div>'
        );

        redirect('kursusku/detail/' . $id);
    }




    public function tambah_section()
    {

        $this->Kursus_model->tambahSectionKursus();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Section <strong> berhasil </strong> di tambahkan!
            </div>'
        );
        redirect('kursusku');
    }

    public function tambah_video()
    {



        $this->Kursus_model->tambahVideo();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Video <strong> berhasil </strong> di tambahkan!
            </div>'
        );
        redirect('kursusku');
    }

    // MENGUBAH KURSUS
    public function ubah_video()
    {
        echo json_encode($this->kursus_model->getAllKontenVideo($_POST['id']));
    }


    // hapus
    public function hapus_kursus($id)
    {
        $this->Kursus_model->hapusKursus($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Kursus <strong> berhasil </strong> di hapus!
            </div>'
        );
        redirect('kursusku');
    }

    public function hapus_section_kursus($id)
    {
        $this->Kursus_model->hapusSectionKursus($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Section <strong> berhasil </strong> di hapus!
            </div>'
        );
        redirect('kursusku');
    }

    public function hapus_video($id)
    {
        $this->Kursus_model->hapusVideo($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Video <strong> berhasil </strong> di hapus!
            </div>'
        );
        redirect('kursusku');
    }



    // end  hapus




}
