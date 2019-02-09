<?php 
    function berat_badan_ideal($bmi) {
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

    function rangking($v, $hasil, $jumlah_peserta) {
        rsort($v);

        for ($i = 0; $i < count($v); $i++) {
            if($v[$i] == $hasil) {
                return $i + 1;
            }
        }
    }
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dinas Pariwisata   | Kalkulasi TOPSIS</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">

</head>

<body class="skin-2">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="48" height="48" src="<?php echo base_url('assets/img/avatar.png')?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username') ?></strong></a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li>
                    <a href="<?php echo site_url('dashboard_admin')?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Data Peserta</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo site_url('peserta')?>">Daftar Peserta</a></li>
                        <li><a href="<?php echo site_url('peserta/daftar_registrasi')?>">Daftar Registrasi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_juri')?>"><i class="fa fa-users"></i> <span class="nav-label">Daftar Juri</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_nilai')?>"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Daftar Nilai</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit (alias)"></i> <span class="nav-label">Input Nilai</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Tes Tertulis<span class="fa arrow"></span></a></a>
                            <ul class="nav nav-third-level">
                                <li class="active"><a href="<?php echo site_url('input_nilai/tahun_tes_tertulis_bujang')?>">Bujang</a></li>
                                <li class="active"><a href="<?php echo site_url('input_nilai/tahun_tes_tertulis_gadis')?>">Gadis</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Attitude<span class="fa arrow"></span></a></a>
                            <ul class="nav nav-third-level">
                                <li class="active"><a href="<?php echo site_url('input_nilai/tahun_attitude_bujang')?>">Bujang</a></li>
                                <li class="active"><a href="<?php echo site_url('input_nilai/tahun_attitude_gadis')?>">Gadis</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-university"></i> <span class="nav-label">Kalkulasi TOPSIS</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo site_url('kalkulasi_topsis/tahun_bujang')?>">Bujang</a></li>
                        <li><a href="<?php echo site_url('kalkulasi_topsis/tahun_gadis')?>">Gadis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('pengumuman/setting')?>"><i class="fa fa-bullhorn"></i> <span class="nav-label">Pengumuman</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('bobot_kriteria')?>"><i class="fa fa-tasks"></i> <span class="nav-label">Bobot Kriteria</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out"></i> <span class="nav-label">Log out</span></a>
                </li>
            </ul>

        </div>
    </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('username') ?></span>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout')?>">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Kalkulasi TOPSIS</h5>
                            </div>
                            <div class="ibox-content" style="background-color: white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 align="center">Analisis Tingkat Kepentingan Kriteria BB Ideal</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <tbody>
                                                <tr>
                                                    <td>BMI < 18.5</td>
                                                    <td>Berat Badan Kurang</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>BMI 18.6 - 24.9</td>
                                                    <td>Berat Badan Normal</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>BMI 25 - 29.9</td>
                                                    <td>Berat Badan Lebih</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>BMI > 30</td>
                                                    <td>Obesitas</td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>
                                                <tr>
                                                    <td>Kode Alternatif</td>
                                                    <td>Alternatif</td>
                                                    <td>Tinggi Badan</td>
                                                    <td>Tinggi Badan (m)</td>
                                                    <td>Tinggi Badan (m<sup>2</sup>)</td>
                                                    <td>Berat Badan</td>
                                                    <td><i>Body Mass Index</i> (BMI)</td>
                                                    <td>Berat Badan Ideal</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($peserta as $key => $p) { ?>
                                                <tr>
                                                    <td><?php echo 'AP'.($key + 1) ?></td>
                                                    <td><?php echo $p['nama_lengkap']; ?></td>
                                                    <td><?php echo $p['tinggi_badan']; ?></td>
                                                    <td><?php echo $p['tinggi_badan'] / 100; ?></td>
                                                    <td><?php echo pow($p['tinggi_badan'] / 100, 2); ?></td>
                                                    <td><?php echo $p['berat_badan']; ?></td>
                                                    <td><?php echo $bmi = $p['berat_badan'] / pow($p['tinggi_badan'] / 100, 2); ?></td>
                                                    <td><?php echo $bbi[$key] = berat_badan_ideal($bmi); ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 align="center">Tabel Nilai Alternatif di Setiap Kriteria</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>
                                                <tr>
                                                    <td colspan="2">Kepentingan</td>
                                                    <?php 
                                                        foreach($kriteria as $key => $k) { 
                                                            echo '<td>'.$k['bobot'].'</td>';
                                                        } 
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <td>Kode Alternatif</td>
                                                    <td>Alternatif</td>
                                                    <?php 
                                                        foreach($kriteria as $key => $k) {
                                                            echo '<td>'.$k['nama_kriteria'].'</td>';
                                                        } 
                                                    ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($peserta as $key => $p) { 
                                                    foreach($nilai_kriteria as $nk) { 
                                                    if($p['id_peserta'] == $nk['id_peserta']) {
                                                ?>
                                                <tr>
                                                    <td><?php echo 'AP'.($key + 1) ?></td>
                                                    <td><?php echo $p['nama_lengkap']; ?></td>
                                                    <td><?php echo $nilai[$key][] = $nk['berat_badan_ideal']; ?></td>
                                                    <td><?php echo $nilai[$key][] = $nk['tes_tertulis']; ?></td>
                                                    <td><?php echo $nilai[$key][] = $nk['pengetahuan_budaya_pariwisata']; ?></td>
                                                    <td><?php echo $nilai[$key][] = $nk['bahasa_asing']; ?></td>
                                                    <td><?php echo $nilai[$key][] = $nk['bakat']; ?></td>
                                                    <td><?php echo $nilai[$key][] = $nk['public_speaking']; ?></td>
                                                    <td><?php echo $nilai[$key][] = $nk['attitude']; ?></td>
                                                </tr>
                                                <?php }}} ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <?php 
                                    $temp = 0;

                                    for($i = 0; $i < $jumlah_kriteria; $i++) { 
                                        for ($j = 0; $j < $jumlah_peserta; $j++) { 
                                            $temp = $temp + pow($nilai[$j][$i], 2);
                                        }
                                        $pembagi[] = sqrt($temp);
                                    }
                                ?>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 align="center">Tabel Matriks Ternomalisasi</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>
                                                <tr>
                                                    <td>Pembagi</td>
                                                    <?php if($kriteria != NULL) foreach($kriteria as $key => $k) {
                                                        echo '<td>'.$pembagi[$key].'</td>';
                                                    } ?>
                                                </tr>
                                                <tr>
                                                    <td>Alternatif</td>
                                                    <?php if($kriteria != NULL) foreach($kriteria as $key => $k) {
                                                        echo '<td>C'.($key + 1).'</td>';
                                                    } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($peserta as $key => $p) { 
                                                    foreach($nilai_kriteria as $nk) { 
                                                    if($p['id_peserta'] == $nk['id_peserta']) {
                                                ?>
                                                <tr>
                                                    <td><?php echo 'AP'.($key + 1) ?></td>
                                                    <?php 
                                                        for($i = 0; $i < $jumlah_kriteria; $i++) { 
                                                            echo '<td>'.$ternomalisasi[$key][] = $nilai[$key][$i] / $pembagi[$i].'</td>';
                                                        } 
                                                    ?>
                                                </tr>
                                                <?php }}} ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 align="center">Tabel Matriks Ternomalisasi Terbobot</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>
                                                <tr>
                                                    <td>Alternatif</td>
                                                    <?php 
                                                        foreach($kriteria as $key => $k) {
                                                            echo '<td>C'.($key + 1).'</td>';
                                                        } 
                                                    ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($peserta as $key => $p) { 
                                                    foreach($nilai_kriteria as $nk) { 
                                                    if($p['id_peserta'] == $nk['id_peserta'] ) {
                                                ?>
                                                <tr>
                                                    <td><?php echo 'AP'.($key + 1) ?></td>
                                                    <?php 
                                                        for($i = 0; $i < $jumlah_kriteria; $i++) { 
                                                            echo '<td>'.$ternomalisasi_terbobot[$key][] = $ternomalisasi[$key][$i] * $kriteria[$i]['bobot'].'</td>';
                                                        } 
                                                    ?>
                                                </tr>
                                                <?php }}} ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <?php 
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
                                ?>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 align="center">Tabel Solusi Ideal Positif (A<sup>+</sup>) dan Solusi Ideal Negatif(A<sup>-</sup>)</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <tbody>
                                                <?php for ($i = 1; $i <= 2; $i++) { ?>
                                                <tr>
                                                    <td><?php echo $i == 1 ? 'Solusi Ideal Positif (A<sup>+</sup>)' : 'Solusi Ideal Negatif(A<sup>-</sup>' ?></td>
                                                    <?php 
                                                        for ($j = 0; $j < $jumlah_kriteria; $j++) { 
                                                            echo $i == 1 ? '<td>'.$a_positif[$j].'</td>' : '<td>'.$a_negatif[$j].'</td>'; 
                                                        }
                                                    ?>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <?php 
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
                                ?>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 align="center">Hasil Perangkingan TOPSIS</h2>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover rangking">
                                            <thead>
                                                <tr>
                                                    <td>Alternatif</td>
                                                    <td>Nama Peserta</td>
                                                    <td>(D<sup>+</sup>)</td>
                                                    <td>(D<sup>-</sup>)</td>
                                                    <td>V</td>
                                                    <td>Rangking</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($peserta as $key => $p) {
                                                ?>
                                                <tr>
                                                    <td><?php echo 'AP'.($key + 1); ?></td>
                                                    <td><?php echo $p['nama_lengkap']; ?></td>
                                                    <td><?php echo $d_positif[$key]; ?></td>
                                                    <td><?php echo $d_negatif[$key]; ?></td>
                                                    <td><?php echo $v[$key]; ?></td>
                                                    <td><strong><?php echo rangking($v, $v[$key], $jumlah_peserta); ?></strong></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    <strong>{elapsed_time} detik</strong>
                </div>
                <div>
                    <strong>Copyright</strong> Dinas Pariwisata   &copy; 2017
                </div>
            </div>

        </div>
        </div>



     <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js')?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.rangking').DataTable({
                "order": [5, "asc"],
                "iDisplayLength": 25,
                "paging":   false,
                "searching": false,
                "info":     false,
                "columnDefs": [ {
                    "targets"  : [0,1,2,3,4,5]
                    // "orderable": false,
                }]
            });
        });
    </script>

</body>

</html>
