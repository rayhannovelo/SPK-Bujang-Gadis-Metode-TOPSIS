<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {
	/* 
		Level User :
		1. Kepala Seksi (Admin)
		2. Kepala Bidang (KABID)
		3. Juri
		4. Peserta
	*/

	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}

	// Fungsi login
	public function login($username,$password,$level) {
		$query = $this->CI->db->get_where('users', array('username'=>$username,'password' => md5($password),'level' => $level));
		if($query->num_rows() == 1) {
			$users 	= $this->CI->db->query('SELECT * FROM users where username = "'.$username.'"')->row();
			$this->CI->session->set_userdata('id_users', $users->id_users);
			$this->CI->session->set_userdata('username', $users->username);
			$this->CI->session->set_userdata('level', $users->level);
			$this->CI->session->set_userdata('status', $users->status);
			if($users->status == 1) {
				if($users->level == 1) {
					redirect('dashboard_admin');
				}elseif($users->level == 2) {
					redirect('dashboard_kabid');
				}elseif($users->level == 3) {
					$this->CI->load->model('m_juri');
					$data_session = array(
						'id_juri' => $this->CI->m_juri->ambil_id_juri($users->id_users),
						'id_kriteria' => $this->CI->m_juri->ambil_id_kriteria_juri($users->id_users),
						'nama_juri' => $this->CI->m_juri->ambil_nama_juri($users->id_users),
						'nama_kriteria' => $this->CI->m_juri->ambil_nama_kriteria_juri($users->id_users)			
					);
					$this->CI->session->set_userdata($data_session);
					redirect('dashboard_juri');
				}elseif($users->level == 4) {
					$this->CI->load->model('m_peserta');
					$data_session = array(
						'id_peserta' => $this->CI->m_peserta->ambil_id_peserta($users->id_users),
						'nama_peserta' => $this->CI->m_peserta->ambil_nama_peserta($users->id_users),
						'jenis_kelamin' => $this->CI->m_peserta->ambil_jenis_kelamin_peserta($users->id_users),
						'tahun' => $this->CI->m_peserta->ambil_tahun($users->id_users) 		
					);
					$this->CI->session->set_userdata($data_session);
					redirect('dashboard_peserta');
				}
			}elseif($users->status == 2) {
				$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center">Maaf Anda tidak lolos tahap registrasi!</div>');
				redirect('login');
			}else {
				$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center">Akun sedang dalam antrian aktivasi!</div>');
				redirect('login');
			}
		}else{                
			$this->CI->session->set_flashdata('sukses','<div class="alert alert-danger text-center">Oops... Username/password salah!</div>');
			redirect($this->CI->session->userdata('url'));
		}
	}

	// Proteksi halaman
	public function cek_login($level) {
		if($this->CI->session->userdata('level') != $level) {
			$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center">Anda Belum Log In!</div>');
			redirect($this->CI->session->userdata('url'));
		}
	}

	public function login_super($level1,$level2) {
		if($this->CI->session->userdata('level') != $level1 && $this->CI->session->userdata('level') != $level2){
			$this->CI->session->set_flashdata('sukses','<div class="alert alert-warning text-center" align="center">Anda Belum Log In!</div>');
			redirect($this->CI->session->userdata('url'));
		}else{
			return $this->CI->session->userdata('level');
		}
	}

	// Fungsi logout
	public function logout() {
		$this->CI->session->unset_userdata('id_users');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('level');
		$this->CI->session->unset_userdata('status');
		$this->CI->session->unset_userdata('id_pelanggan');
		$this->CI->session->unset_userdata('nama_pelanggan');
		$this->CI->session->unset_userdata('jenis_kelamin');
		$this->CI->session->set_flashdata('sukses','<div class="alert alert-success text-center">Anda Berhasil Log Out!</div>');
		redirect($this->CI->session->userdata('url'));
	}

	public function logout_peserta() {
		$this->CI->session->unset_userdata('id_users');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('level');
		$this->CI->session->unset_userdata('status');
		$this->CI->session->unset_userdata('id_pelanggan');
		$this->CI->session->unset_userdata('nama_pelanggan');
		$this->CI->session->unset_userdata('jenis_kelamin');
		$this->CI->session->set_flashdata('sukses','<div class="alert alert-success text-center">Anda Berhasil Log Out!</div>');
		redirect('login');
	}
}