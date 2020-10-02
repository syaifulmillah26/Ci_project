<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kursus extends CI_Controller
{


	public function __construct()
	{

		parent::__construct();
		$this->load->model('Kursus_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		is_admin();
	}


	// method default
	public function index()
	{

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = "Semua Kursus";
		$data['kursus'] = $this->Kursus_model->getAllKursus();
		$data['section_kursus'] = $this->Kursus_model->getAllSectionKursus();
		$data['konten_video'] = $this->Kursus_model->getAllKontenVideo();

		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/templates/sidebar', $data);
		$this->load->view('backend/kursus/index', $data);
		$this->load->view('backend/templates/footer');
	}

	public function detail($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = "Detail Kursus";
		$data['kursus'] = $this->Kursus_model->getKursusById($id);

		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/templates/sidebar', $data);
		$this->load->view('backend/kursus/detail', $data);
		$this->load->view('backend/templates/footer');
	}



	// menambahkan 
	public function tambah_kursus()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = "Kursus";
		$data['kursus'] = $this->Kursus_model->getAllKursus();
		$data['section_kursus'] = $this->Kursus_model->getAllSectionKursus();
		$data['konten_video'] = $this->Kursus_model->getAllKontenVideo();

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required|numeric');


		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);


		if ($this->form_validation->run() == TRUE && $this->upload->do_upload('image')) {

			$this->Kursus_model->tambahKursus();
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success no-margin alert-dismissable">
			<button type="button" class="close" data-dismiss="alert">
				<i class="ace-icon fa fa-times"></i>
			</button>
			<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
			Kursus <strong>Berhasil</strong> ditambahkan!
			</div>
			<div class="hr hr-18 dotted hr-single"></div>'
			);
			redirect('admin/kursus');
		} else {
			$this->load->view('backend/templates/header', $data);
			$this->load->view('backend/kursus/index', $data);
			$this->load->view('backend/templates/footer');
		}
	}



	public function ubah_kursus($id)
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = "Detail Kursus";



		$this->Kursus_model->publish($id);
		if ($this->input->post('publish') == 'On') {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success no-margin alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
				Kursus <strong>Berhasil</strong> dipublishkan!
				</div>'
			);
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger no-margin alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
				Kursus di <strong> non-aktifkan</strong> !
				</div>'
			);
		}
		redirect('admin/kursus/detail/' . $id);
	}


	public function tambah_section()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->Kursus_model->tambahSectionKursus();
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success no-margin alert-dismissable">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
		Section kursus <strong>Berhasil</strong> ditambahkan!
		</div>
		<div class="hr hr-18 dotted hr-single"></div>'
		);
		redirect('admin/kursus');
	}

	public function tambah_video()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->Kursus_model->tambahVideo();
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success no-margin alert-dismissable">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
		Konten video <strong>Berhasil</strong> ditambahkan!
		</div>
		<div class="hr hr-18 dotted hr-single"></div>'
		);
		redirect('admin/kursus');
	}

	// end menambahkan

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
		Kursus <strong>Berhasil</strong> dihapus!
		</div>
		<div class="hr hr-18 dotted hr-single"></div>'
		);
		redirect('admin/kursus');
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
		Section kursus <strong>Berhasil</strong> dihapus!
		</div>
		<div class="hr hr-18 dotted hr-single"></div>'
		);
		redirect('admin/kursus');
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
		Konten video <strong>Berhasil</strong> dihapus!
		</div>
		<div class="hr hr-18 dotted hr-single"></div>'
		);
		redirect('admin/kursus');
	}



	// end  hapus




}
