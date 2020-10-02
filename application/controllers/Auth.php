<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Login";
            $this->load->view('frontend/auth/header_auth', $data);
            $this->load->view('frontend/auth/login');
            $this->load->view('frontend/auth/footer_auth');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {

                    // simpan role untuk menampilkan user data di admin
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success  role="alert">
                        Selamat Datang kembali <strong>' . ucwords($user['name']) .  ' !</strong> Lihat apa yang terjadi disini.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
                        redirect('admin/dashboard');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-success  role="alert">
                        Selamat Datang kembali <strong>' . ucwords($user['name']) .  ' !</strong> sudah siap membuat kursus baru ?
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>');
                        redirect('kursusku');
                    }
                } else {
                    // cek jika password nya salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="ace-icon fa fa-umbrella bigger-120 blue"></i> Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                // cek jika emailnya belum di aktivasi
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="ace-icon fa fa-umbrella bigger-120 blue"></i> This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            // cek jika email nya belum ter registrasi
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="ace-icon fa fa-umbrella bigger-120 blue"></i> Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="ace-icon fa fa-umbrella bigger-120 blue"></i> You have been logged out!</div>');
        redirect('auth');
    }

    public function registration()
    {

        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password do not match!',
            'min_length' => 'Password is too short!'
        ]);

        $this->form_validation->set_rules('password2', 'repeat password', 'required|trim|min_length[6]|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = "Registration";
            $this->load->view('frontend/auth/header_auth', $data);
            $this->load->view('frontend/auth/registration');
            $this->load->view('frontend/auth/footer_auth');
        } else {

            $data = [
                "name"     => htmlspecialchars($this->input->post('name', true)),
                "email"     => htmlspecialchars($this->input->post('email', true)),
                "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                "image" => 'default.png',
                "role_id" => 2,
                "is_active" => 1,
                "date_created" => date("Y-m-d")

            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="ace-icon fa fa-umbrella bigger-120 blue"></i> Congratulation! Your account has been created. Please Login</div>');
            redirect('auth');
        }
    }


    public function blocked()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Access Blocked";
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/blocked/index');
        $this->load->view('backend/templates/footer');
    }
}
