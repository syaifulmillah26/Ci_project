<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	// method default
	public function index()
	{
		// memanggil view
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'My Profile';


		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/templates/sidebar', $data);
		$this->load->view('backend/profile/index', $data);
		$this->load->view('backend/templates/footer', $data);
	}

	public function ubah_profile($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'My Profile';
		$this->load->library('form_validation');
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[6]|matches[password2]',
			[
				'matches' => 'Password do not match!',
				'min_length' => 'Password is too short!'
			]
		);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('backend/templates/header', $data);
			$this->load->view('backend/templates/sidebar', $data);
			$this->load->view('backend/profile/index', $data);
			$this->load->view('backend/templates/footer', $data);
		} else {
			$data = [
				"password"		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];
			$this->db->where('id', $id);
			$this->db->update('users', $data);
			$this->session->set_flashdata(
				'message',
				'<div class="pull-left alert alert-success no-margin alert-dismissable">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
					Password <strong>Berhasil</strong> di ubah!!
				</div>'
			);
			redirect('profile');
		}
	}


	public function ubah_gambar($id)
	{

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'My Profile';

		$config['upload_path']          = './assets/images/avatars/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {

			$image = $this->upload->data();
			$data = [
				"image"		=> $image['file_name']
			];
			$this->db->where('id', $id);
			$this->db->update('users', $data);
			$this->session->set_flashdata(
				'message',
				'<div class="pull-left alert alert-success no-margin alert-dismissable">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
					Gambar Berhasil di ubah!!
				</div>'
			);
			redirect('profile');
		} else {
			$this->load->view('backend/templates/header', $data);
			$this->load->view('backend/templates/sidebar', $data);
			$this->load->view('backend/profile/index', $data);
			$this->load->view('backend/templates/footer', $data);
		}
	}
}
