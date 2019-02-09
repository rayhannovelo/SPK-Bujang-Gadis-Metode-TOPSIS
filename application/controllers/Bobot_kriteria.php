<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bobot_kriteria extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_topsis');	
    }

	public function index()
	{
		$data['kriteria'] = $this->m_topsis->ambil_kriteria();

		$this->load->view('admin/bobot_kriteria', $data);
	}

	public function edit_bobot() {
		$data['kriteria'] = $this->m_topsis->ambil_kriteria();

		$this->load->view('admin/edit_bobot_kriteria', $data);
	}

	public function edit_bobot_form() {
		foreach($this->input->post('id_kriteria[]') as $key1 => $id_kriteria) {
			foreach($this->input->post('bobot[]') as $key2 => $bobot) {
				if($key1 == $key2) {
					$this->m_topsis->edit_kriteria($id_kriteria, $bobot);
					break;
				}
			}
		}

		redirect('bobot_kriteria');
	}
}
