<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_topsis extends CI_Model{

    //kriteria

    public function ambil_kriteria(){
        return $this->db->get('kriteria')->result_array();
    }

    public function ambil_jumlah_kriteria(){
        return $this->db->get('kriteria')->num_rows();
    }

    public function ambil_nama_kriteria($id_kriteria){
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get('kriteria')->row()->nama_kriteria;
    }

    public function edit_kriteria($id_kriteria, $bobot) {
        $this->db->set('bobot', $bobot);
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->update('kriteria');
    }

    // nilai_kriteria

    public function ambil_tahun_nilai_bujang(){
        return $this->db->query('SELECT `tahun` FROM `nilai_kriteria` JOIN `peserta` ON `peserta`.`id_peserta` = `nilai_kriteria`.`id_peserta` WHERE `jenis_kelamin` = "Laki-laki" GROUP BY `tahun` ORDER BY `tahun` DESC')->result_array();
    }

    public function ambil_tahun_nilai_gadis(){
        return $this->db->query('SELECT `tahun` FROM `nilai_kriteria` JOIN `peserta` ON `peserta`.`id_peserta` = `nilai_kriteria`.`id_peserta` WHERE `jenis_kelamin` = "Perempuan" GROUP BY `tahun` ORDER BY `tahun` DESC')->result_array();
    }

    public function inisiasi_nilai_kriteria($data) {
        $this->db->insert('nilai_kriteria', $data);
    }

    public function ambil_nilai_byid($id_peserta){
        return $this->db->query('SELECT `id_peserta`, `nama_lengkap`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "1" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `berat_badan_ideal`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "2" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `tes_tertulis`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "3" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `pengetahuan_budaya_pariwisata`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "4" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bahasa_asing`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "5" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bakat`,
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "6" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `public_speaking`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "7" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `attitude`  
            FROM `peserta` WHERE `id_peserta` ='.$id_peserta)->result_array();
    }

    public function ambil_nilai_kriteria(){
        return $this->db->query('SELECT `id_peserta`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "1" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `berat_badan_ideal`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "2" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `tes_tertulis`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "3" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `pengetahuan_budaya_pariwisata`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "4" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bahasa_asing`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "5" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bakat`,
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "6" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `public_speaking`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "7" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `attitude`  
            FROM `peserta`')->result_array();
    }

    public function ambil_nilai_bujang($tahun){
        return $this->db->query('SELECT `peserta`.`id_peserta`, `nama_lengkap`,
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "1" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `berat_badan_ideal`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "2" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `tes_tertulis`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "3" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `pengetahuan_budaya_pariwisata`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "4" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bahasa_asing`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "5" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bakat`,
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "6" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `public_speaking`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "7" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `attitude`  
            FROM `peserta` JOIN `users` ON `users`.`id_users` = `peserta`.`id_users` JOIN `nilai_kriteria` ON `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta` WHERE `jenis_kelamin` = "Laki-laki" AND `status` = "1" AND `tahun` = '.$tahun.' GROUP BY `id_peserta` ORDER BY `nama_lengkap` ASC')->result_array();
    }

    public function ambil_nilai_gadis($tahun){
        return $this->db->query('SELECT `peserta`.`id_peserta`, `nama_lengkap`,
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "1" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `berat_badan_ideal`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "2" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `tes_tertulis`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "3" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `pengetahuan_budaya_pariwisata`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "4" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bahasa_asing`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "5" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `bakat`,
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "6" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `public_speaking`, 
            (SELECT `nilai_kriteria` FROM `nilai_kriteria` WHERE `id_kriteria` = "7" AND `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta`) as `attitude`  
            FROM `peserta` JOIN `users` ON `users`.`id_users` = `peserta`.`id_users` JOIN `nilai_kriteria` ON `nilai_kriteria`.`id_peserta` = `peserta`.`id_peserta` WHERE `jenis_kelamin` = "Perempuan" AND `status` = "1" AND `tahun` = '.$tahun.' GROUP BY `id_peserta` ORDER BY `nama_lengkap` ASC')->result_array();
    }

    public function ambil_nilai($id_kriteria, $jenis_kelamin, $tahun) {
        $this->db->select('id_nilai_kriteria, nama_lengkap, nilai_kriteria');
        $this->db->join('peserta', 'peserta.id_peserta = nilai_kriteria.id_peserta');
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->where('jenis_kelamin', $jenis_kelamin);
        $this->db->where('tahun', $tahun);
        $this->db->order_by('nama_lengkap', 'ASC');
        return $this->db->get('nilai_kriteria')->result_array();
    }

    public function edit_nilai_kriteria($id_nilai_kriteria, $nilai_kriteria) {
        $this->db->set('nilai_kriteria', $nilai_kriteria);
        $this->db->where('id_nilai_kriteria', $id_nilai_kriteria);
        $this->db->update('nilai_kriteria');
    }

    public function edit_bbi($id_peserta, $nilai_kriteria) {
        $this->db->set('nilai_kriteria', $nilai_kriteria);
        $this->db->where('id_peserta', $id_peserta);
        $this->db->where('id_kriteria', 1);
        $this->db->update('nilai_kriteria');
    }

    // pengumuman

    public function ambil_status_pengumuman(){
        return $this->db->get('pengumuman')->row()->status;
    }

    public function aktif_pengumuman() {
        $this->db->set('status', 1);
        $this->db->update('pengumuman');
    } 

    public function nonaktif_pengumuman() {
        $this->db->set('status', 0);
        $this->db->update('pengumuman');
    } 
}