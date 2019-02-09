<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dinas Pariwisata   | Daftar Registrasi</title>

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
                <li class="active">
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Data Peserta</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo site_url('peserta')?>">Daftar Peserta</a></li>
                        <li class="active"><a href="<?php echo site_url('peserta/daftar_registrasi')?>">Daftar Registrasi</a></li>
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
                <li>
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
                                <h5>Daftar Registrasi Peserta</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Usia</th>
                                                    <th>Agama</th>
                                                    <th>Tinggi Badan</th>
                                                    <th>Berat Badan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($daftar_registrasi != NULL) foreach ($daftar_registrasi as $dpb) { ?>
                                                <tr>
                                                    <td><?php echo $dpb['nama_lengkap']; ?></td>
                                                    <td><?php echo $dpb['jenis_kelamin']; ?></td>
                                                    <td><?php echo $dpb['usia_tahun']; ?></td>
                                                    <td><?php echo $dpb['agama']; ?></td>
                                                    <td><?php echo $dpb['tinggi_badan'].' cm'; ?></td>
                                                    <td><?php echo $dpb['berat_badan'].' kg'; ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                        <button class="btn btn-success dim" onclick="location.href='<?php echo site_url('peserta/detail_peserta/'.$dpb['id_users'].'/'.$dpb['id_peserta'].'/'.$dpb['tinggi_badan'].'/'.$dpb['berat_badan'].'/'.$dpb['status'])?>'" type="button"><i class="fa fa-eye"></i></button>
                                                        <button class="btn btn-info dim" onclick="if (confirm('Data registrasi peserta akan DITERIMA, apakah Anda yakin?')) location.href='<?php echo site_url('peserta/terima_registrasi/'.$dpb['id_users'].'/'.$dpb['id_peserta'].'/'.$dpb['tinggi_badan'].'/'.$dpb['berat_badan'])?>'" type="button"><i class="fa fa-check"></i> </button>
                                                        <button class="btn btn-warning dim" onclick="if (confirm('Data registrasi peserta akan DITOLAK, apakah Anda yakin?')) location.href='<?php echo site_url('peserta/tolak_registrasi/'.$dpb['id_users'])?>'" type="button"><i class="fa fa-times"></i> </button>
                                                        <button class="btn btn-danger dim" onclick="if (confirm('Data peserta akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('peserta/hapus_peserta/'.$dpb['id_users'])?>'" type="button"><i class="fa fa-trash"></i> </button>
                                                        </div>
                                                    </td>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Daftar Registrasi Peserta Ditolak</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Usia</th>
                                                    <th>Agama</th>
                                                    <th>Tinggi Badan</th>
                                                    <th>Berat Badan</th>
                                                    <th width="150px">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($daftar_registrasi_ditolak != NULL) foreach ($daftar_registrasi_ditolak as $dpg) { ?>
                                                <tr>
                                                    <td><?php echo $dpg['nama_lengkap']; ?></td>
                                                    <td><?php echo $dpg['jenis_kelamin']; ?></td>
                                                    <td><?php echo $dpg['usia_tahun']; ?></td>
                                                    <td><?php echo $dpg['agama']; ?></td>
                                                    <td><?php echo $dpg['tinggi_badan'].' cm'; ?></td>
                                                    <td><?php echo $dpg['berat_badan'].' kg'; ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                        <button class="btn btn-success dim" onclick="location.href='<?php echo site_url('peserta/detail_peserta/'.$dpg['id_users'].'/'.$dpg['id_peserta'].'/'.$dpg['tinggi_badan'].'/'.$dpg['berat_badan'].'/'.$dpg['status'])?>'" type="button"><i class="fa fa-eye"></i></button>
                                                        <button class="btn btn-danger dim" onclick="if (confirm('Data peserta akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('peserta/hapus_peserta/'.$dpg['id_users'])?>'" type="button"><i class="fa fa-trash"></i> </button>
                                                        </div>
                                                    </td>
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
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });
        });
    </script>

</body>

</html>
