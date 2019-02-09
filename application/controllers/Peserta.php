<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(1);
		$this->load->model('m_peserta');
	}

	public function index()
	{
		$data['daftar_peserta_bujang'] = $this->m_peserta->ambil_bujang();
		$data['daftar_peserta_gadis'] = $this->m_peserta->ambil_gadis();
		$this->load->view('admin/daftar_peserta', $data);
	}

	public function daftar_registrasi() {
		$data['daftar_registrasi'] = $this->m_peserta->ambil_registrasi();
		$data['daftar_registrasi_ditolak'] = $this->m_peserta->ambil_registrasi_ditolak();
		$this->load->view('admin/daftar_registrasi', $data);
	}

	public function terima_registrasi($id_users, $id_peserta, $tinggi_badan, $berat_badan) {
		$this->load->model('m_topsis');

		$this->m_peserta->terima_registrasi($id_users);

		$jumlah_kriteria = $this->m_topsis->ambil_jumlah_kriteria();
		for($i = 1; $i <= $jumlah_kriteria; $i++) { 
			if($i == 1){ // berat badan ideal
				$data = array(
					'id_peserta' =>  $id_peserta,
					'id_kriteria' => $i,
					'tahun' => date("Y"),
					'nilai_kriteria' => $this->berat_badan_ideal($tinggi_badan, $berat_badan)
				);
			}else {
				$data = array(
					'id_peserta' =>  $id_peserta,
					'id_kriteria' => $i,
					'tahun' => date("Y"),
					'nilai_kriteria' => 0
				);
			}
			$this->m_topsis->inisiasi_nilai_kriteria($data);
		}

		redirect('peserta/daftar_registrasi');
	}

	public function tolak_registrasi($id_users) {
		$this->m_peserta->tolak_registrasi($id_users);
		redirect('peserta/daftar_registrasi');
	}

	public function hapus_peserta($id_users) {
		$this->m_peserta->hapus_users($id_users);
		redirect('peserta/daftar_registrasi');
	}

	public function detail_peserta($id_users, $id_peserta, $tinggi_badan, $berat_badan, $status)
	{
		$data['status'] = $status;
		$data['id_users'] = $id_users;
		$data['id_peserta'] = $id_peserta;
		$data['tinggi_badan'] = $tinggi_badan;
		$data['berat_badan'] = $berat_badan;
		$data['profil'] = $this->m_peserta->ambil_profil($id_users);
		$data['bahasa'] = $this->m_peserta->ambil_bahasa($id_peserta);
        $data['hobi'] = $this->m_peserta->ambil_hobi($id_peserta);
        $data['bakat'] = $this->m_peserta->ambil_bakat($id_peserta);
        $data['prestasi'] = $this->m_peserta->ambil_prestasi($id_peserta);

		$this->load->view('admin/detail_peserta', $data);
	}

	public function berat_badan_ideal($tinggi_badan, $berat_badan) {
		$bmi = $berat_badan / pow(($tinggi_badan / 100), 2);

		if($bmi < 18.5) {
			return 2;
		}elseif ($bmi >= 18.6 && $bmi <= 24.9) {
			return 3;
		}elseif ($bmi >= 25 && $bmi <= 29.9) {
			return 2;
		}elseif ($bmi > 30) {
			return 1;
		}
	}
}
