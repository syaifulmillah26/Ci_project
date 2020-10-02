<?php

class Kursus_model extends CI_Model
{

	// menampilan semua data
	public function getAllKursus()
	{
		return $this->db->get('kursus')->result_array();
	}

	public function getAllSectionKursus()
	{
		return $this->db->get('section_kursus')->result_array();
	}

	public function getAllKontenVideo()
	{
		return $this->db->get('konten_video')->result_array();
	}


	// menambahkan semua data
	public function tambahKursus()
	{


		$data = [
			"title" 		=> $this->input->post('title', true),
			"harga" 		=> $this->input->post('harga', true),
			"author_id" 	=> $this->input->post('author_id', true),
			"author" 		=> $this->input->post('author', true),
			"author_image" 	=> $this->input->post('author_image', true),
			"deskripsi" 	=> $this->input->post('deskripsi', true),
			"publish"   	=> "No",
			"date_created"  => date("Y-m-d"),
			"image"  		=> "default.png"

		];


		$this->db->insert('kursus', $data);
	}


	public function tambahSectionKursus()
	{
		$data = [
			"kursus_id" => $this->input->post('kursus_id', true),
			"title" => $this->input->post('title', true)

		];
		$this->db->insert('section_kursus', $data);
	}

	public function tambahVideo()
	{


		if ($this->input->post('role') == 'preview') {
			$data = [
				"section_id" => $this->input->post('section_id', true),
				"nama_video" => $this->input->post('nama_video', true),
				"link_video" => $this->input->post('link_video', true),
				"durasi" => $this->input->post('durasi', true),
				"role" => $this->input->post('role', true),
				"visibility" => 'auto'

			];
		} else {
			$data = [
				"section_id" => $this->input->post('section_id', true),
				"nama_video" => $this->input->post('nama_video', true),
				"link_video" => $this->input->post('link_video', true),
				"durasi" => $this->input->post('durasi', true),
				"role" => $this->input->post('role', true),
				"visibility" => 'none'

			];
		}
		$this->db->insert('konten_video', $data);
	}


	// hapus kursus
	public function hapusKursus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kursus');
	}

	public function hapusSectionKursus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('section_kursus');
	}

	public function hapusVideo($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('konten_video');
	}

	// edit kursus

	// untuk user bisa ubah semua konten kursusnya
	public function ubahKursusku($id)
	{

		$data = [
			"title" 	=> $this->input->post('title', true),
			"harga" 	=> $this->input->post('harga', true),
			"deskripsi" => $this->input->post('deskripsi', true)
		];
		$this->db->where('id', $id);
		$this->db->update('kursus', $data);
	}

	// untuk admin menentukan di publish atau tidak nya
	public function publish($id)
	{

		if ($this->input->post('publish', true) == 'On') {
			$data = [
				"publish" 	=> $this->input->post('publish', true)
			];
		} else {
			$data = [
				"publish" 	=> "Off"
			];
		}


		$this->db->where('id', $id);
		$this->db->update('kursus', $data);
	}

	public function getKursusById($id)
	{
		return $this->db->get_where('kursus', ['id' => $id])->row_array();
	}
}
