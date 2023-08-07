<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Pegawai_model');
	}
	function index()
	{
		$data['judul'] = "Halaman Pegawai";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pegawai'] = $this->Pegawai_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("pegawai/vw_pegawai", $data);
		$this->load->view("layout/footer", $data);
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Pegawai";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pegawai'] = $this->Pegawai_model->get();
		$this->form_validation->set_rules('nama', 'Pegawai', 'required', ['required' => 'Nama Pegawai Wajib diisi']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Pegawai Wajib diisi']);
		$this->form_validation->set_rules('no_hp', 'No.HP', 'required', ['required' => 'No.HP Pegawai Wajib diisi']);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("pegawai/vw_tambah_pegawai", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'BAKSO-BINTANG' => 'baksobintang',
			];

			$this->Pegawai_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pegawai Berhasil Ditambah!</div>');
			redirect('Pegawai');
		}
	}
	public function hapus($id)
	{
		$this->Pegawai_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pegawai Berhasil Dihapus!</div>');
		redirect('Pegawai');
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Pegawai";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pegawai'] = $this->Pegawai_model->getById($id);
		$this->form_validation->set_rules('nama', 'Pegawai', 'required', ['required' => 'Nama Pegawai Wajib diisi']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Pegawai Wajib diisi']);
		$this->form_validation->set_rules('no_hp', 'No.HP', 'required', ['required' => 'No.HP Pegawai Wajib diisi']);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("pegawai/vw_ubah_pegawai", $data);
			$this->load->view("layout/footer", $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'BAKSO-BINTANG' => 'baksobintang',
				'id' => $this->input->post('id'),
			];

			$this->Pegawai_model->update($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pegawai Berhasil Diubah!</div>');
			redirect('Pegawai');
		}
	}
}
