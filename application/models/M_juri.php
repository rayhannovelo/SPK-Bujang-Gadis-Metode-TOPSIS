<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_juri extends CI_Model{

    public function ambil_juri() {
        $this->db->join('users', 'users.id_users = juri.id_users');
    	$this->db->join('kriteria', 'kriteria.id_kriteria = juri.id_kriteria');
        return $this->db->get('juri')->result_array();
    }

    public function ambil_nama_juri($id_users) {
    	$this->db->where('id_users', $id_users);
        return $this->db->get('juri')->row()->nama_juri;
    }

    public function ambil_id_juri($id_users) {
    	$this->db->where('id_users', $id_users);
        return $this->db->get('juri')->row()->id_juri;
    }

    public function ambil_id_kriteria_juri($id_users) {
    	$this->db->where('id_users', $id_users);
        return $this->db->get('juri')->row()->id_kriteria;
    }

    public function ambil_nama_kriteria_juri($id_users) {
    	$this->db->join('kriteria', 'kriteria.id_kriteria = juri.id_kriteria');
    	$this->db->where('id_users', $id_users);
        return $this->db->get('juri')->row()->nama_kriteria;
    }

    public function ambil_jumlah_juri() {
        return $this->db->get('juri')->num_rows();
    }

    public function ambil_profil_juri($id_users) {
        $this->db->join('users', 'users.id_users = juri.id_users');
        $this->db->join('kriteria', 'kriteria.id_kriteria = juri.id_kriteria');
        $this->db->where('users.id_users', $id_users);
        return $this->db->get('juri')->result_array();
    }

    public function edit_juri($id_juri, $data) {
        $this->db->where('id_juri', $id_juri);
        $this->db->update('juri', $data);
    }
}