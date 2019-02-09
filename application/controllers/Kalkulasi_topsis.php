<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulasi_topsis extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_topsis');
		$this->load->model('m_peserta');
	}

	public function tahun_bujang()
	{
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();

		$this->load->view('admin/tahun_bujang', $data);
	}

	public function tahun_gadis()
	{
		$data['tahun_nilai_gadis'] = $this->m_topsis->ambil_tahun_nilai_gadis();

		$this->load->view('admin/tahun_gadis', $data);
	}

	public function bujang($tahun)
	{
		$data['peserta'] = $this->m_peserta->ambil_peserta_bujang($tahun);
		$data['jumlah_peserta'] = $this->m_peserta->ambil_jumlah_bujang($tahun);
		$data['kriteria'] = $this->m_topsis->ambil_kriteria();
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai_bujang($tahun);
		$data['jumlah_kriteria'] = $this->m_topsis->ambil_jumlah_kriteria();
		$this->load->view('admin/kalkulasi_topsis_bujang', $data);
	}

	public function gadis($tahun)
	{
		$data['peserta'] = $this->m_peserta->ambil_peserta_gadis($tahun);
		$data['jumlah_peserta'] = $this->m_peserta->ambil_jumlah_gadis($tahun);
		$data['kriteria'] = $this->m_topsis->ambil_kriteria();
		$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai_gadis($tahun);
		$data['jumlah_kriteria'] = $this->m_topsis->ambil_jumlah_kriteria();
		$this->load->view('admin/kalkulasi_topsis_gadis', $data);
	}
}
