<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{



	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Menu_model');
	}
	function index()
	{
		$data['judul'] = "Halaman Menu";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->Menu_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("menu/vw_menu", $data);
		$this->load->view("layout/footer", $data);
	}
	function tambah()
	{
		$data['judul'] = "Halaman Tambah Menu";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->Menu_model->get();
		$this->form_validation->set_rules('nama', 'Menu', 'required', ['required' => 'Nama Menu Wajib diisi']);
		$this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Wajib diisi']);
		$this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib diisi']);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'Kategori Menu Wajib diisi']);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("menu/vw_tambah_menu", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'status' => $this->input->post('status'),
				'kategori' => $this->input->post('kategori'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/assets/img/menu/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Menu_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Menu Berhasil Ditambah!</div>');
			redirect('Menu');
		}
	}
	public function hapus($id)
	{
		$this->Menu_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Menu Berhasil Dihapus!</div>');
		redirect('Menu');
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Menu";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->Menu_model->getById($id);
		$this->form_validation->set_rules('nama', 'Menu', 'required', ['required' => 'Nama Menu Wajib diisi']);
		$this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Wajib diisi']);
		$this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib diisi']);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', ['required' => 'Kategori Menu Wajib diisi']);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("menu/vw_ubah_menu", $data);
			$this->load->view("layout/footer", $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'status' => $this->input->post('status'),
				'kategori' => $this->input->post('kategori'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/assets/img/menu/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Menu_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Menu Berhasil Diubah!</div>');
			redirect('Menu');
		}
	}
}
