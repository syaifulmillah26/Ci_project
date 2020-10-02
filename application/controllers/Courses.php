<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Kursus_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }
    // method default
    public function index()
    {
        // memanggil view

        $data['judul'] = 'Courses';

        $data['kursus'] = $this->Kursus_model->getAllKursus();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/course/index', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Detail Kursusku";
        $data['kursus'] = $this->Kursus_model->getKursusById($id);
        $data['section_kursus'] = $this->Kursus_model->getAllSectionKursus();
        $data['konten_video'] = $this->Kursus_model->getAllKontenVideo();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/course/detail', $data);
        $this->load->view('frontend/templates/footer');
    }
}
