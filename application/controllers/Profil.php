<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->simple_login->cek_login(4);
		$this->load->model('m_peserta');	
    }

	public function index()
	{
		$data['profil'] = $this->m_peserta->ambil_profil($this->session->userdata('id_users'));
        $data['bahasa'] = $this->m_peserta->ambil_bahasa($this->session->userdata('id_peserta'));
        $data['hobi'] = $this->m_peserta->ambil_hobi($this->session->userdata('id_peserta'));
        $data['bakat'] = $this->m_peserta->ambil_bakat($this->session->userdata('id_peserta'));
        $data['prestasi'] = $this->m_peserta->ambil_prestasi($this->session->userdata('id_peserta'));

		$this->load->view('peserta/profil', $data);
	}

	public function edit_profil() {
		$data['profil'] = $this->m_peserta->ambil_profil($this->session->userdata('id_users'));
        $data['bahasa'] = $this->m_peserta->ambil_bahasa($this->session->userdata('id_peserta'));
        $data['hobi'] = $this->m_peserta->ambil_hobi($this->session->userdata('id_peserta'));
        $data['bakat'] = $this->m_peserta->ambil_bakat($this->session->userdata('id_peserta'));
        $data['prestasi'] = $this->m_peserta->ambil_prestasi($this->session->userdata('id_peserta'));
        $data['kategori_hobi'] = $this->m_peserta->ambil_kategori_hobi();

		$this->load->view('peserta/edit_profil', $data);
	}

	public function edit_profil_form() {

		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->cek_password($this->input->post('password'))
		);

		$this->m_peserta->edit_users($this->session->userdata('id_users'), $data);

		$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_panggilan' => $this->input->post('nama_panggilan'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'usia_tahun' => $this->input->post('usia_tahun'),
			'usia_bulan' => $this->input->post('usia_bulan'),
			'agama' =>  $this->input->post('agama'),
			'tinggi_badan' => $this->input->post('tinggi_badan'),
			'berat_badan' => $this->input->post('berat_badan'),
			'alamat_lengkap' => $this->input->post('alamat_lengkap'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp'),
			'fb' =>  $this->input->post('fb'),
			'twitter' => $this->input->post('twitter'),
			'instagram' => $this->input->post('instagram'),
			'sd' => $this->input->post('sd'),
			'smp' => $this->input->post('smp'),
			'sma' => $this->input->post('sma'),
			'universitas' => $this->input->post('universitas'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'riwayat_sakit' => $this->input->post('riwayat_sakit'),
			'keterangan_sakit' => $this->input->post('keterangan_sakit')
		);

		$this->m_peserta->edit_peserta($this->session->userdata('id_peserta'), $data);

		// bahasa

		foreach($this->input->post('id_bahasa[]') as $key1 => $id_bahasa) {
			foreach($this->input->post('nama_bahasa[]') as $key2 => $nama_bahasa) {
				if($key1 == $key2) {
					if($this->m_peserta->cek_id_bahasa($id_bahasa) == 1) {
						$data = array(
							'nama_bahasa' => $nama_bahasa
						);
						$this->m_peserta->edit_bahasa($id_bahasa, $data);
						break;
					}else {
						$data = array(
							'id_peserta' =>  $this->session->userdata('id_peserta'),
							'nama_bahasa' => $nama_bahasa
						);
						$this->m_peserta->tambah_bahasa($data);
						break;
					}
				}
			}
		}

		// hobi

		foreach($this->input->post('id_hobi[]') as $key1 => $id_hobi) {
			foreach($this->input->post('nama_hobi[]') as $key2 => $nama_hobi) {
				foreach ($this->input->post('id_kategori_hobi[]') as $key3 => $id_kategori_hobi) {
					if($key1 == $key2 && $key2 == $key3) {
						if($this->m_peserta->cek_id_hobi($id_hobi) == 1) {
							$data = array(
								'id_kategori_hobi' => $id_kategori_hobi,
								'nama_hobi' => $nama_hobi
							);
							$this->m_peserta->edit_hobi($id_hobi, $data);
							break 2;
						}else {
							$data = array(
								'id_peserta' => $this->session->userdata('id_peserta'),
								'id_kategori_hobi' => $id_kategori_hobi,
								'nama_hobi' => $nama_hobi
							);
							$this->m_peserta->tambah_hobi($data);
							break 2;
						}
					}
				}
			}
		}

		// bakat

		foreach($this->input->post('id_bakat[]') as $key1 => $id_bakat) {
			foreach($this->input->post('nama_bakat[]') as $key2 => $nama_bakat) {
				if($key1 == $key2) {
					if($this->m_peserta->cek_id_bakat($id_bakat) == 1) {
						$data = array(
							'nama_bakat' => $nama_bakat
						);
						$this->m_peserta->edit_bakat($id_bakat, $data);
						break;
					}else {
						$data = array(
							'id_peserta' =>  $this->session->userdata('id_peserta'),
							'nama_bakat' => $nama_bakat
						);
						$this->m_peserta->tambah_bakat($data);
						break;
					}
				}
			}
		}

		// prestasi
		
		foreach($this->input->post('tahun[]') as $key1 => $tahun) {
			foreach($this->input->post('nama_kegiatan[]') as $key2 => $nama_kegiatan) {
				foreach($this->input->post('prestasi[]') as $key3 => $prestasi) {
					foreach($this->input->post('id_bakat[]') as $key4 => $id_prestasi) {
						if($key1 == $key2 && $key2 == $key3 && $key3 == $key4) {
							if($this->m_peserta->cek_id_prestasi($id_prestasi) == 1) {
								$data = array(
									'tahun' => $tahun,
									'nama_kegiatan' => $nama_kegiatan,
									'prestasi' => $prestasi
								);
								$this->m_peserta->edit_prestasi($id_prestasi, $data);
								break 3;
							}else {
								$data = array(
									'id_peserta' =>  $this->session->userdata('id_peserta'),
									'tahun' => $tahun,
									'nama_kegiatan' => $nama_kegiatan,
									'prestasi' => $prestasi
								);
								$this->m_peserta->tambah_prestasi($data);
								break 3;
							}
						}
					}
				}
			}
		}

		/* 
			$this->load->model('m_topsis');
			$bbi = $this->berat_badan_ideal($this->input->post('tinggi_badan'), $this->input->post('berat_badan'));
			$this->m_topsis->edit_bbi($this->session->userdata('id_peserta'), $bbi); 
		*/

		redirect('profil/edit_profil');
	}

	public function hapus_bahasa($id_bahasa) {
		$this->m_peserta->hapus_bahasa($id_bahasa);
		redirect('profil/edit_profil');
	}

	public function hapus_hobi($id_hobi) {
		$this->m_peserta->hapus_hobi($id_hobi);
		redirect('profil/edit_profil');
	}

	public function hapus_bakat($id_bakat) {
		$this->m_peserta->hapus_bakat($id_bakat);
		redirect('profil/edit_profil');
	}

	public function hapus_prestasi($id_prestasi) {
		$this->m_peserta->hapus_prestasi($id_prestasi);
		redirect('profil/edit_profil');
	}

	public function cek_password($password) {
		if($this->m_peserta->ambil_password($this->session->userdata('id_users')) == $password) {
			return $password;
		}else {
			return md5($password);
		}
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
