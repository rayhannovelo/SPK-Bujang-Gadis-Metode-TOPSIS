<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_nilai extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_topsis');
		$this->load->model('m_peserta');
	}

    public function index()
    {
        $data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
        $data['tahun_nilai_gadis'] = $this->m_topsis->ambil_tahun_nilai_gadis();

        if($this->simple_login->login_super(1,2) == 1) {
            $this->load->view('admin/tahun_nilai', $data);
        }else {
            $this->load->view('kabid/tahun_nilai', $data);
        }
    }

	public function nilai_peserta($tahun)
	{
		$data['daftar_nilai_bujang'] = $this->m_topsis->ambil_nilai_bujang($tahun);
		$data['daftar_nilai_gadis'] = $this->m_topsis->ambil_nilai_gadis($tahun);

        // bujang

        $data['peserta_bujang'] = $this->m_peserta->ambil_peserta_bujang($tahun); 
        $data['jumlah_peserta_bujang'] = $this->m_peserta->ambil_jumlah_bujang($tahun);
        $data['kriteria'] = $this->m_topsis->ambil_kriteria();
        $data['nilai_kriteria'] = $this->m_topsis->ambil_nilai_bujang($tahun);
        $data['jumlah_kriteria'] = $this->m_topsis->ambil_jumlah_kriteria();

        if($data['jumlah_peserta_bujang'] < 2) {
            $data['v_bujang'] = array(
                0 => 0
            );
        }else {
            $data['v_bujang'] = $this->topsis($data['peserta_bujang'], $data['jumlah_peserta_bujang'], $data['kriteria'], $data['nilai_kriteria'], $data['jumlah_kriteria']);
        }

        // gadis

        $data['peserta_gadis'] = $this->m_peserta->ambil_peserta_gadis($tahun); 
        $data['jumlah_peserta_gadis'] = $this->m_peserta->ambil_jumlah_gadis($tahun);
        $data['kriteria'] = $this->m_topsis->ambil_kriteria();
        $data['nilai_kriteria'] = $this->m_topsis->ambil_nilai_gadis($tahun);
        $data['jumlah_kriteria'] = $this->m_topsis->ambil_jumlah_kriteria();

        if($data['jumlah_peserta_gadis'] < 2) {
            $data['v'] = array(
                0 => 0
            );
        }else {
            $data['v_gadis'] = $this->topsis($data['peserta_gadis'], $data['jumlah_peserta_gadis'], $data['kriteria'], $data['nilai_kriteria'], $data['jumlah_kriteria']);
        }

		if($this->simple_login->login_super(1,2) == 1) {
			$this->load->view('admin/daftar_nilai', $data);
        }else {
			$this->load->view('kabid/daftar_nilai', $data);
        }
	}

	public function peserta()
	{
		$this->simple_login->cek_login(3);
		
		$data['tahun_nilai_bujang'] = $this->m_topsis->ambil_tahun_nilai_bujang();
        $data['tahun_nilai_gadis'] = $this->m_topsis->ambil_tahun_nilai_gadis();
        $data['nama_tes'] = $this->m_topsis->ambil_nama_kriteria($this->session->userdata('id_kriteria'));
        $data['url2'] = str_replace(' ','_', strtolower($this->m_topsis->ambil_nama_kriteria($this->session->userdata('id_kriteria'))));

        $this->load->view('juri/tahun_nilai', $data);
	}

    public function nilai_peserta_2($tahun) {
        $this->simple_login->cek_login(3);
        
        $data['daftar_nilai_bujang'] = $this->m_topsis->ambil_nilai_bujang($tahun);
        $data['daftar_nilai_gadis'] = $this->m_topsis->ambil_nilai_gadis($tahun);
        $data['nama_tes'] = $this->m_topsis->ambil_nama_kriteria($this->session->userdata('id_kriteria'));
        $data['url2'] = str_replace(' ','_', strtolower($this->m_topsis->ambil_nama_kriteria($this->session->userdata('id_kriteria'))));

        $this->load->view('juri/daftar_nilai', $data);
    }

    public function detail_nilai($id_peserta)
    {
        $this->simple_login->cek_login(2);
        
        $data['detail_nilai'] = $this->m_topsis->ambil_nilai_byid($id_peserta);

        $this->load->view('kabid/detail_nilai', $data);
    }

	public function topsis($peserta, $jumlah_peserta, $kriteria, $nilai_kriteria, $jumlah_kriteria) {
		foreach($peserta as $key => $p) { 
        	foreach($nilai_kriteria as $nk) { 
        		if($p['id_peserta'] == $nk['id_peserta']) {
        			$nilai[$key][] = $nk['berat_badan_ideal'];
                    $nilai[$key][] = $nk['tes_tertulis'];
                    $nilai[$key][] = $nk['pengetahuan_budaya_pariwisata'];
                    $nilai[$key][] = $nk['bahasa_asing'];
                    $nilai[$key][] = $nk['bakat'];
                    $nilai[$key][] = $nk['public_speaking'];
                   	$nilai[$key][] = $nk['attitude'];
                }
            }
        }

        $temp = 0;
        for($i = 0; $i < $jumlah_kriteria; $i++) { 
            for ($j = 0; $j < $jumlah_peserta; $j++) { 
                $temp = $temp + pow($nilai[$j][$i], 2);
            }
            $pembagi[] = sqrt($temp);
            $temp = 0;
        }

        foreach($peserta as $key => $p) { 
            foreach($nilai_kriteria as $nk) { 
	            if($p['id_peserta'] == $nk['id_peserta']) {
	        		for($i = 0; $i < $jumlah_kriteria; $i++) { 
	                   $ternomalisasi[$key][] = $nilai[$key][$i] / $pembagi[$i];
	                } 
           		}
           	}
       	}

       	foreach($peserta as $key => $p) { 
            foreach($nilai_kriteria as $nk) { 
	            if($p['id_peserta'] == $nk['id_peserta']) {
	        		for($i = 0; $i < $jumlah_kriteria; $i++) { 
                        $ternomalisasi_terbobot[$key][] = $ternomalisasi[$key][$i] * $kriteria[$i]['bobot'];
                    } 
           		}
           	}
       	}

        $temp_positif = 0;
        $temp_negatif = 99999;
        for($i = 0; $i < $jumlah_kriteria; $i++) { 
            for ($j = 0; $j < $jumlah_peserta; $j++) {
                if($temp_positif < $ternomalisasi_terbobot[$j][$i]){
                    $temp_positif = $ternomalisasi_terbobot[$j][$i];
                }
                if($temp_negatif > $ternomalisasi_terbobot[$j][$i]){
                    $temp_negatif = $ternomalisasi_terbobot[$j][$i];
                }
            }
            $a_positif[] = $temp_positif;
            $a_negatif[] = $temp_negatif;
            $temp_positif = 0;
            $temp_negatif = 99999;
        }

        $temp_positif = 0;
        $temp_negatif = 0;
        for($i = 0; $i < $jumlah_peserta; $i++) { 
            for ($j = 0; $j < $jumlah_kriteria; $j++) { 
                $temp_positif = $temp_positif + (pow(($a_positif[$j] - $ternomalisasi_terbobot[$i][$j]), 2));
                $temp_negatif = $temp_negatif + (pow(($a_negatif[$j] - $ternomalisasi_terbobot[$i][$j]), 2));
            }
            $d_positif[] = sqrt($temp_positif);
            $d_negatif[] = sqrt($temp_negatif);
            $temp_positif = 0;
            $temp_negatif = 0;
        }

        for($i = 0; $i < $jumlah_peserta; $i++) { 
            $v[] = $d_negatif[$i] / ($d_negatif[$i] + $d_positif[$i]);
        }

        return $v;
	}
}
