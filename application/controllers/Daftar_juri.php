<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_juri extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_juri');
		$this->load->model('m_peserta');
	}

	public function index()
	{
		$data['daftar_juri'] = $this->m_juri->ambil_juri();
		$this->load->view('admin/daftar_juri', $data);
	}

	public function edit_juri($id_users) {
		$data['profil'] = $this->m_juri->ambil_profil_juri($id_users);

		$this->load->view('admin/edit_juri', $data);
	}

	public function edit_juri_form() {

		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->cek_password($this->input->post('password'))
		);

		$this->m_peserta->edit_users($this->input->post('id_users'), $data);

		$data = array(
			'nama_juri' => $this->input->post('nama_juri'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin')
		);

		$this->m_juri->edit_juri($this->input->post('id_juri'), $data);

		redirect('daftar_juri/edit_juri/'.$this->input->post('id_users'));
	}

	public function cek_password($password) {
		if($this->m_peserta->ambil_password($this->session->userdata('id_users')) == $password) {
			return $password;
		}else {
			return md5($password);
		}
	}
}
