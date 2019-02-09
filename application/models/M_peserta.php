<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta extends CI_Model{

    // users

    public function ambil_password($id_users) {
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('users.id_users', $id_users);
        return $this->db->get('peserta')->result_array();
    }

    public function tambah_users($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function terima_registrasi($id_users) {
        $this->db->set('status', 1);
        $this->db->where('id_users', $id_users);
        $this->db->update('users');
    }

    public function tolak_registrasi($id_users) {
        $this->db->set('status', 2);
        $this->db->where('id_users', $id_users);
        $this->db->update('users');
    }

    public function edit_users($id_users, $data) {
        $this->db->where('id_users', $id_users);
        $this->db->update('users', $data);
    }

    public function hapus_users($id_users) {
        $this->db->where('id_users', $id_users);
        $this->db->delete('users');
    }   

    // peserta

    public function ambil_profil($id_users) {
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('users.id_users', $id_users);
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_registrasi() {
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 0);
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_registrasi_ditolak() {
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 2);
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_peserta() {
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_bujang() {
        $this->db->join('nilai_kriteria', 'nilai_kriteria.id_peserta = peserta.id_peserta');
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        $this->db->where('jenis_kelamin', 'Laki-laki');
        $this->db->group_by('peserta.id_peserta');
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_peserta_bujang($tahun) {
        $this->db->join('nilai_kriteria', 'nilai_kriteria.id_peserta = peserta.id_peserta');
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        $this->db->where('jenis_kelamin', 'Laki-laki');
        $this->db->where('tahun', $tahun);
        $this->db->group_by('peserta.id_peserta');
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_peserta_gadis($tahun) {
        $this->db->join('nilai_kriteria', 'nilai_kriteria.id_peserta = peserta.id_peserta');
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->where('tahun', $tahun);
        $this->db->group_by('peserta.id_peserta');
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_gadis() {
        $this->db->join('nilai_kriteria', 'nilai_kriteria.id_peserta = peserta.id_peserta');
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->group_by('peserta.id_peserta');
        return $this->db->get('peserta')->result_array();
    }

    public function ambil_id_peserta($id_users) {
        $this->db->where('id_users', $id_users);
        return $this->db->get('peserta')->row()->id_peserta;
    }

    public function ambil_tahun($id_users) {
        $this->db->select('tahun');
        $this->db->join('nilai_kriteria', 'nilai_kriteria.id_peserta = peserta.id_peserta');
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('users.id_users', $id_users);
        return $this->db->get('peserta')->row()->tahun;
    }

    public function ambil_nama_peserta($id_users) {
    	$this->db->where('id_users', $id_users);
        return $this->db->get('peserta')->row()->nama_lengkap;
    }

    public function ambil_jenis_kelamin_peserta($id_users) {
        $this->db->where('id_users', $id_users);
        return $this->db->get('peserta')->row()->jenis_kelamin;
    }

    public function ambil_jumlah_peserta() {
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        return $this->db->get('peserta')->num_rows();
    }

    public function ambil_jumlah_bujang($tahun) {
        $this->db->join('nilai_kriteria', 'nilai_kriteria.id_peserta = peserta.id_peserta');
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        $this->db->where('jenis_kelamin', 'Laki-laki');
        $this->db->where('tahun', $tahun);
        $this->db->group_by('peserta.id_peserta');
        return $this->db->get('peserta')->num_rows();
    }

    public function ambil_jumlah_gadis($tahun) {
        $this->db->join('nilai_kriteria', 'nilai_kriteria.id_peserta = peserta.id_peserta');
        $this->db->join('users', 'users.id_users = peserta.id_users');
        $this->db->where('status', 1);
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->where('tahun', $tahun);
        $this->db->group_by('peserta.id_peserta');
        return $this->db->get('peserta')->num_rows();
    }

    public function tambah_peserta($data) {
        $this->db->insert('peserta', $data);
        return $this->db->insert_id();
    }

    public function edit_peserta($id_peserta, $data) {
        $this->db->where('id_peserta', $id_peserta);
        $this->db->update('peserta', $data);
    }

    // bahasa

    public function tambah_bahasa($data) {
        $this->db->insert('bahasa_peserta', $data);
    }

    public function ambil_bahasa($id_peserta) {
        $this->db->where('id_peserta', $id_peserta);
        return $this->db->get('bahasa_peserta')->result_array();
    }

    public function edit_bahasa($id_bahasa, $data) {
        $this->db->where('id_bahasa', $id_bahasa);
        $this->db->update('bahasa_peserta', $data);
    }

    public function hapus_bahasa($id_bahasa) {
        $this->db->where('id_bahasa', $id_bahasa);
        $this->db->delete('bahasa_peserta');
    }

    public function cek_id_bahasa($id_bahasa) {
        $this->db->where('id_bahasa', $id_bahasa);
        return $this->db->get('bahasa_peserta')->num_rows();
    }

    // hobi

    public function tambah_hobi($data) {
        $this->db->insert('hobi_peserta', $data);
    }

    public function ambil_hobi($id_peserta) {
        $this->db->join('kategori_hobi', 'kategori_hobi.id_kategori_hobi = hobi_peserta.id_kategori_hobi');
        $this->db->where('id_peserta', $id_peserta);
        return $this->db->get('hobi_peserta')->result_array();
    }

    public function edit_hobi($id_hobi, $data) {
        $this->db->where('id_hobi', $id_hobi);
        $this->db->update('hobi_peserta', $data);
    }

    public function hapus_hobi($id_hobi) {
        $this->db->where('id_hobi', $id_hobi);
        $this->db->delete('hobi_peserta');
    }

    public function cek_id_hobi($id_hobi) {
        $this->db->where('id_hobi', $id_hobi);
        return $this->db->get('hobi_peserta')->num_rows();
    }

    public function ambil_kategori_hobi() {
        return $this->db->get('kategori_hobi')->result_array();
    }

    // bakat

    public function tambah_bakat($data) {
        $this->db->insert('bakat_peserta', $data);
    }

    public function ambil_bakat($id_peserta) {
        $this->db->where('id_peserta', $id_peserta);
        return $this->db->get('bakat_peserta')->result_array();
    }

    public function edit_bakat($id_bakat, $data) {
        $this->db->where('id_bakat', $id_bakat);
        $this->db->update('bakat_peserta', $data);
    }

    public function hapus_bakat($id_bakat) {
        $this->db->where('id_bakat', $id_bakat);
        $this->db->delete('bakat_peserta');
    }

    public function cek_id_bakat($id_bakat) {
        $this->db->where('id_bakat', $id_bakat);
        return $this->db->get('bakat_peserta')->num_rows();
    }

    // prestasi

    public function tambah_prestasi($data) {
        $this->db->insert('prestasi_peserta', $data);
    }

    public function ambil_prestasi($id_peserta) {
        $this->db->where('id_peserta', $id_peserta);
        return $this->db->get('prestasi_peserta')->result_array();
    }

    public function edit_prestasi($id_prestasi, $data) {
        $this->db->where('id_prestasi', $id_prestasi);
        $this->db->update('prestasi_peserta', $data);
    }

    public function hapus_prestasi($id_prestasi) {
        $this->db->where('id_prestasi', $id_prestasi);
        $this->db->delete('prestasi_peserta');
    }

    public function cek_id_prestasi($id_prestasi) {
        $this->db->where('id_prestasi', $id_prestasi);
        return $this->db->get('prestasi_peserta')->num_rows();
    }
}