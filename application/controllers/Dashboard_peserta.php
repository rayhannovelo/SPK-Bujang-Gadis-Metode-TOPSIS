<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_peserta extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->simple_login->cek_login(4);
		$this->load->model('m_peserta');
		$this->load->model('m_topsis');
	}

	public function index()
	{
		if($this->session->userdata('jenis_kelamin') == "Laki-laki") {
			$data['peserta'] = $this->m_peserta->ambil_peserta_bujang($this->session->userdata('tahun')); 
			$data['jumlah_peserta'] = $this->m_peserta->ambil_jumlah_bujang($this->session->userdata('tahun'));
			$data['kriteria'] = $this->m_topsis->ambil_kriteria();
			$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai_bujang($this->session->userdata('tahun'));
			$data['jumlah_kriteria'] = $this->m_topsis->ambil_jumlah_kriteria();
		}elseif($this->session->userdata('jenis_kelamin') == "Perempuan") {
			$data['peserta'] = $this->m_peserta->ambil_peserta_gadis($this->session->userdata('tahun')); 
			$data['jumlah_peserta'] = $this->m_peserta->ambil_jumlah_gadis($this->session->userdata('tahun'));
			$data['kriteria'] = $this->m_topsis->ambil_kriteria();
			$data['nilai_kriteria'] = $this->m_topsis->ambil_nilai_gadis($this->session->userdata('tahun'));
			$data['jumlah_kriteria'] = $this->m_topsis->ambil_jumlah_kriteria();
		}

        if($data['jumlah_peserta'] < 2) {
            $data['v'] = array(
                0 => 0
            );
        }else {
            $data['v'] = $this->topsis($data['peserta'], $data['jumlah_peserta'], $data['kriteria'], $data['nilai_kriteria'], $data['jumlah_kriteria']);
        }
		

		$this->load->view('peserta/dashboard', $data);
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
