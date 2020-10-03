<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Markets extends CI_Controller
{
    // method default

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {

        // mengambil data user yang log in
        $data['judul'] = 'Markets ';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['markets'] = $this->db->get('markets')->result_array();

        // memanggil view dashboard
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/markets/index', $data);
        $this->load->view('backend/templates/footer');
    }

    public function tambah_market()
    {

        $this->form_validation->set_rules('title', 'title', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                "title" => $this->input->post('title', true),
                "deskripsi" => $this->input->post('deskripsi', true)

            ];
            $this->db->insert('markets', $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success no-margin alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
                Market data <strong> berhasil </strong> di tambahkan!
                </div>'
            );
            redirect('markets');
        } else {
            // mengambil data user yang log in
            $data['judul'] = 'Markets ';
            $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            // memanggil view dashboard
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/markets/index', $data);
            $this->load->view('backend/templates/footer');
        }
    }

    // hapus market
    public function hapus_market($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('markets');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Markets <strong> berhasil </strong> di hapus!
            </div>'
        );
        redirect('markets');
    }

    public function edit_market($id)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Detail Kursus";
        $data['markets'] = $this->db->get_where('markets', ['id' => $id])->row_array();

        $this->form_validation->set_rules('title', 'title', 'required');


        if ($this->form_validation->run() == TRUE) {

            $data = [
                "title"     => $this->input->post('title', true),
                "deskripsi" => $this->input->post('deskripsi', true)
            ];
            $this->db->where('id', $id);
            $this->db->update('markets', $data);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success no-margin alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
            Market <strong> berhasil </strong> di ubah!
            </div>'
            );
            redirect('markets/edit_market/' . $id);
        } else {

            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/markets/edit_market', $data);
            $this->load->view('backend/templates/footer');
        }
    }
}
