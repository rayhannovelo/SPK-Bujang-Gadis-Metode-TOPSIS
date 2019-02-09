<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_nilai extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('m_topsis');
	}

	public function index()
	{
		$this->simple_login->cek_login(1);
		redirect('login/logout');
	}

	// Tes Tertulis

	public function tahun_tes_tertulis_bujang() {
		$this->simple_login->cek_login(1);

		$data['id_kriteria'] = 2;
		$data['nama_tes'] = 'Tes Tertulis';
		$data['url'] = 'tes_tertulis_bujang';
		$data['tipe'] = 'Bujang';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
		$this->load->view('admin/tahun_tes_tertulis_bujang', $data);
	}

	public function tahun_tes_tertulis_gadis() {
		$this->simple_login->cek_login(1);

		$data['id_kriteria'] = 2;
		$data['nama_tes'] = 'Tes Tertulis';
		$data['url'] = 'tes_tertulis_bujang';
		$data['tipe'] = 'Bujang';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_gadis();
		$this->load->view('admin/tahun_tes_tertulis_gadis', $data);
	}

	public function tes_tertulis_bujang($tahun) {
		$this->simple_login->cek_login(1);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 2;
		$data['nama_tes'] = 'Tes Tertulis';
		$data['url'] = 'tes_tertulis_bujang';
		$data['tipe'] = 'Bujang';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(2, 'Laki-laki', $tahun);
		$this->load->view('admin/input_nilai', $data);
	}

	public function tes_tertulis_gadis($tahun) {
		$this->simple_login->cek_login(1);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 2;
		$data['nama_tes'] = 'Tes Tertulis';
		$data['url'] = 'tes_tertulis_gadis';
		$data['tipe'] = 'Gadis';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(2, 'Perempuan', $tahun);
		$this->load->view('admin/input_nilai', $data);
	}

	// Pengetahuan Budaya Pariwisata

	public function tahun_pengetahuan_budaya_pariwisata_bujang() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 3;
		$data['nama_tes'] = 'Pengetahuan Budaya Pariwisata';
		$data['url'] = 'pengetahuan_budaya_pariwisata_bujang';
		$data['url2'] = 'pengetahuan_budaya_pariwisata';
		$data['tipe'] = 'Bujang';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
		$this->load->view('juri/tahun_input', $data);
	}

	public function tahun_pengetahuan_budaya_pariwisata_gadis() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 3;
		$data['nama_tes'] = 'Pengetahuan Budaya Pariwisata';
		$data['url'] = 'pengetahuan_budaya_pariwisata_gadis';
		$data['url2'] = 'pengetahuan_budaya_pariwisata';
		$data['tipe'] = 'Gadis';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_gadis();
		$this->load->view('juri/tahun_input', $data);
	}

	public function pengetahuan_budaya_pariwisata_bujang($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 3;
		$data['nama_tes'] = 'Pengetahuan Budaya Pariwisata';
		$data['url'] = 'pengetahuan_budaya_pariwisata_bujang';
		$data['url2'] = 'pengetahuan_budaya_pariwisata';
		$data['tipe'] = 'Bujang';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(3, 'Laki-laki', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	public function pengetahuan_budaya_pariwisata_gadis($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 3;
		$data['nama_tes'] = 'Pengetahuan Budaya Pariwisata';
		$data['url'] = 'pengetahuan_budaya_pariwisata_gadis';
		$data['url2'] = 'pengetahuan_budaya_pariwisata';
		$data['tipe'] = 'Gadis';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(3, 'Perempuan', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	// Bahasa Asing

	public function tahun_bahasa_asing_bujang() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 4;
		$data['nama_tes'] = 'Bahasa Asing';
		$data['url'] = 'bahasa_asing_bujang';
		$data['url2'] = 'bahasa_asing';
		$data['tipe'] = 'Bujang';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
		$this->load->view('juri/tahun_input', $data);
	}

	public function tahun_bahasa_asing_gadis() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 4;
		$data['nama_tes'] = 'Bahasa Asing';
		$data['url'] = 'bahasa_asing_gadis';
		$data['url2'] = 'bahasa_asing';
		$data['tipe'] = 'Gadis';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_gadis();
		$this->load->view('juri/tahun_input', $data);
	}

	public function bahasa_asing_bujang($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 4;
		$data['nama_tes'] = 'Bahasa Asing';
		$data['url'] = 'bahasa_asing_bujang';
		$data['url2'] = 'bahasa_asing';
		$data['tipe'] = 'Bujang';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(4, 'Laki-laki', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	public function bahasa_asing_gadis($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 4;
		$data['nama_tes'] = 'Bahasa Asing';
		$data['url'] = 'bahasa_asing_gadis';
		$data['url2'] = 'bahasa_asing';
		$data['tipe'] = 'Gadis';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(4, 'Perempuan', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	// Bakat

	public function tahun_bakat_bujang() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 5;
		$data['nama_tes'] = 'Bakat';
		$data['url'] = 'bakat_bujang';
		$data['url2'] = 'bakat';
		$data['tipe'] = 'Bujang';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
		$this->load->view('juri/tahun_input', $data);
	}

	public function tahun_bakat_gadis() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 5;
		$data['nama_tes'] = 'Bakat';
		$data['url'] = 'bakat_gadis';
		$data['url2'] = 'bakat';
		$data['tipe'] = 'Gadis';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_gadis();
		$this->load->view('juri/tahun_input', $data);
	}

	public function bakat_bujang($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 5;
		$data['nama_tes'] = 'Bakat';
		$data['url'] = 'bakat_bujang';
		$data['url2'] = 'bakat';
		$data['tipe'] = 'Bujang';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(5, 'Laki-laki', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	public function bakat_gadis($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 5;
		$data['nama_tes'] = 'Bakat';
		$data['url'] = 'bakat_gadis';
		$data['url2'] = 'bakat';
		$data['tipe'] = 'Gadis';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(5, 'Perempuan', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	// Public Speaking

	public function tahun_public_speaking_bujang() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 6;
		$data['nama_tes'] = 'Public Speaking';
		$data['url'] = 'public_speaking_bujang';
		$data['url2'] = 'public_speaking';
		$data['tipe'] = 'Bujang';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
		$this->load->view('juri/tahun_input', $data);
	}

	public function tahun_public_speaking_gadis() {
		$this->simple_login->cek_login(3);

		$data['id_kriteria'] = 6;
		$data['nama_tes'] = 'Public Speaking';
		$data['url'] = 'public_speaking_gadis';
		$data['url2'] = 'public_speaking';
		$data['tipe'] = 'Gadis';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_gadis();
		$this->load->view('juri/tahun_input', $data);
	}

	public function public_speaking_bujang($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 6;
		$data['nama_tes'] = 'Public Speaking';
		$data['url'] = 'public_speaking_bujang';
		$data['url2'] = 'public_speaking';
		$data['tipe'] = 'Bujang';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(6, 'Laki-laki', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	public function public_speaking_gadis($tahun) {
		$this->simple_login->cek_login(3);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 6;
		$data['nama_tes'] = 'Public Speaking';
		$data['url'] = 'public_speaking_gadis';
		$data['url2'] = 'public_speaking';
		$data['tipe'] = 'Gadis';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(6, 'Perempuan', $tahun);
		$this->load->view('juri/input_nilai', $data);
	}

	// Attitude

	public function tahun_attitude_bujang() {
		$this->simple_login->cek_login(1);

		$data['id_kriteria'] = 7;
		$data['nama_tes'] = 'Attitude';
		$data['url'] = 'attitude_bujang';
		$data['tipe'] = 'Bujang';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
		$this->load->view('admin/tahun_attitude_bujang', $data);
	}

	public function tahun_attitude_gadis() {
		$this->simple_login->cek_login(1);

		$data['id_kriteria'] = 7;
		$data['nama_tes'] = 'Attitude';
		$data['url'] = 'attitude_gadis';
		$data['tipe'] = 'Gadis';
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_gadis();
		$this->load->view('admin/tahun_attitude_gadis', $data);
	}

	public function attitude_bujang($tahun) {
		$this->simple_login->cek_login(1);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 7;
		$data['nama_tes'] = 'Attitude';
		$data['url'] = 'attitude_bujang';
		$data['tipe'] = 'Bujang';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(7, 'Laki-laki', $tahun);
		$this->load->view('admin/input_nilai', $data);
	}

	public function attitude_gadis($tahun) {
		$this->simple_login->cek_login(1);

		$data['tahun'] = $tahun;
		$data['id_kriteria'] = 7;
		$data['nama_tes'] = 'Attitude';
		$data['url'] = 'attitude_gadis';
		$data['tipe'] = 'Gadis';
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai(7, 'Perempuan', $tahun);
		$this->load->view('admin/input_nilai', $data);
	}

	public function input_nilai_form($url, $tahun) {
		foreach ($this->input->post('id_nilai_kriteria[]') as $key1 => $id_nilai_kriteria) {
			foreach ($this->input->post('nilai_kriteria[]') as $key2 => $nilai_kriteria) {
				if($key1 == $key2) {
					$this->m_topsis->edit_nilai_kriteria($id_nilai_kriteria, $nilai_kriteria);
					break;
				}
			}
		}
		redirect('input_nilai/'.$url.'/'.$tahun);
	}
}
