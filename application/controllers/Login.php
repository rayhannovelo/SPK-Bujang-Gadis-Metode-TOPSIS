<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$valid->set_rules('username','Username','trim|required|xss_clean');
		$valid->set_rules('password','Password','trim|required|xss_clean');
		$valid->set_rules('level','Level','trim|required|xss_clean');
		if($valid->run()) {
			$this->session->set_userdata('url', 'login');
			$this->simple_login->login($username,$password,$level);
		}
		$this->load->view('login/login_peserta');
	}

	public function user() {
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$valid->set_rules('username','Username','trim|required|xss_clean');
		$valid->set_rules('password','Password','trim|required|xss_clean');
		$valid->set_rules('level','Level','trim|required|xss_clean');

		if($valid->run()) {
			$this->session->set_userdata('url', 'login/user');
			$this->simple_login->login($username,$password,$level);
		}
		$this->load->view('login/login');
	}
	
	public function logout() {
		$this->simple_login->logout();	
	}

	public function registrasi() {
		$this->load->model('m_peserta');
		$data['kategori_hobi'] = $this->m_peserta->ambil_kategori_hobi();
		$this->load->view('login/registrasi', $data);
	}

	public function registrasi_form() {
		$this->load->model('m_peserta');

		$data = array(
			'username' =>  $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => 4,
			'status' => 0
		);

		$id_users = $this->m_peserta->tambah_users($data);

		$data = array(
			'id_users' => $id_users,
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

		$id_peserta = $this->m_peserta->tambah_peserta($data);

		// bahasa

		foreach ($this->input->post('nama_bahasa[]') as $nama_bahasa) {
			$data = array(
				'id_peserta' =>  $id_peserta,
				'nama_bahasa' => $nama_bahasa
			);
			$this->m_peserta->tambah_bahasa($data);
		}

		// hobi

		foreach ($this->input->post('nama_hobi[]') as $key1 => $nama_hobi) {
			foreach ($this->input->post('id_kategori_hobi[]') as $key2 => $id_kategori_hobi) {
				if($key1 == $key2) {
					$data = array(
						'id_peserta' =>  $id_peserta,
						'id_kategori_hobi' => $id_kategori_hobi,
						'nama_hobi' => $nama_hobi
					);
					$this->m_peserta->tambah_hobi($data);
					break;
				}
			}
		}

		// bakat

		foreach ($this->input->post('nama_bakat[]') as $nama_bakat) {
			$data = array(
				'id_peserta' =>  $id_peserta,
				'nama_bakat' => $nama_bakat
			);
			$this->m_peserta->tambah_bakat($data);
		}

		// prestasi

		foreach ($this->input->post('tahun[]') as $key1 => $tahun) {
			foreach ($this->input->post('nama_kegiatan[]') as $key2 => $nama_kegiatan) {
				foreach ($this->input->post('prestasi[]') as $key3 => $prestasi) {
					if($key1 == $key2 && $key2 == $key3) {
						$data = array(
							'id_peserta' =>  $id_peserta,
							'tahun' => $tahun,
							'nama_kegiatan' => $nama_kegiatan,
							'prestasi' => $prestasi
						);
						$this->m_peserta->tambah_prestasi($data);
						break 2;
					}
				}
			}
		}

		$this->session->set_flashdata('sukses','<div class="alert alert-success alert-dismissable text-center">Selamat, Anda berhasil melakukan registrasi! <br> Akun Anda sedang dalam antrian aktivasi!</div>');
		redirect('login');
	}
}	