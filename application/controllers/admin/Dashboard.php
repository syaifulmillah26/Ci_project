<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
        // method default


        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                is_admin();
        }

        public function index()
        {

                // mengambil data user yang log in
                $data['judul'] = 'Dashboard';
                $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();


                // memanggil view dashboard
                $this->load->view('backend/templates/header', $data);
                $this->load->view('backend/templates/sidebar', $data);
                $this->load->view('backend/dashboard/index', $data);
                $this->load->view('backend/templates/footer');
        }
}
