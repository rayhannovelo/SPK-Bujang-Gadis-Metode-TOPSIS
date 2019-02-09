<?php 
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

    <title>Dinas Pariwisata   | Daftar Rangking Bujang</title>

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
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nama_juri') ?></strong></a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li>
                    <a href="<?php echo site_url('dashboard_juri'); ?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('daftar_nilai/peserta')?>"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Daftar Nilai</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Input Nilai <?php echo $nama_tes; ?></span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo site_url('input_nilai/tahun_'.$url2.'_bujang'); ?>">Bujang</a></li>
                        <li><a href="<?php echo site_url('input_nilai/tahun_'.$url2.'_gadis'); ?>">Gadis</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Daftar Rangking</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li <?php echo $this->uri->segment(2) == 'bujang' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('daftar_rangking/tahun_bujang'); ?>">Bujang</a></li>
                        <li <?php echo $this->uri->segment(2) == 'gadis' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('daftar_rangking/tahun_gadis'); ?>">Gadis</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> <span class="nav-label">Log out</span></a>
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
                            <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('nama_juri') ?></span>
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
                                <h5>Daftar Rangking Bujang</h5>
                            </div>
                            <div class="ibox-content" style="background-color: white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover rangking">
                                            <thead>
                                                <tr>
                                                    <td>Nama Peserta</td>
                                                    <td>V</td>
                                                    <td>Rangking</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($peserta as $key => $p) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $p['nama_lengkap']; ?></td>
                                                    <td><?php echo number_format($v[$key], 3, '.', ','); ?></td>
                                                    <td>
                                                        <?php 
                                                            $rangking = rangking($v, $v[$key], $jumlah_peserta);

                                                            if($rangking <= 10) {
                                                                echo '<strong>'.$rangking.'</strong>';
                                                            }else {
                                                                echo $rangking;
                                                            }
                                                        ?>
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
            $('.rangking').DataTable({
                "order": [2, "asc"],
                "iDisplayLength": 25,
                "paging":   false,
                "searching": false,
                "info":     false,
                "columnDefs": [ {
                    "targets"  : [0,1,2]
                    // "orderable": false,
                }]
            });
        });
    </script>

</body>

</html>
