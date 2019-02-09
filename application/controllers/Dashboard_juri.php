<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_juri extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(3);
		$this->load->model('m_topsis');
	}

	public function index()
	{
		$data['url2'] = str_replace(' ','_', strtolower($this->m_topsis->ambil_nama_kriteria($this->session->userdata('id_kriteria'))));
		$data['nama_tes'] = $this->m_topsis->ambil_nama_kriteria($this->session->userdata('id_kriteria'));
		$this->load->view('juri/dashboard', $data);
	}
}
