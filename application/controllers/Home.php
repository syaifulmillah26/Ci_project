<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
	// method default
	public function index(){
		// memanggil view

		$data['judul'] = 'Home';
		

		$this->load->view('frontend/templates/header', $data);
		$this->load->view('frontend/home/index');
		$this->load->view('frontend/templates/footer');
	}
}
