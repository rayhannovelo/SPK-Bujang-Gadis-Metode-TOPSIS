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

    <title>Dinas Pariwisata   | Daftar Nilai</title>

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
                    <a href="<?php echo site_url('dashboard_kabid')?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('daftar_nilai')?>"><i class="fa fa-folder-open-o"></i> <span class="nav-label">Daftar Rangking</span></a>
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
                                <h5>Daftar Nilai Peserta Bujang</h5>
                            </div>
                            <div class="ibox-content" style="background-color: white;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover bujang">
                                            <thead>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>V</td>
                                                    <td>Rangking</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($daftar_nilai_bujang != NULL) foreach ($daftar_nilai_bujang as $key => $dnb) { ?>
                                                <tr>
                                                    <td><?php echo $dnb['nama_lengkap']; ?></td>
                                                    <td><?php echo number_format($v_bujang[$key], 3, '.', ','); ?></td>
                                                    <td>
                                                        <?php 
                                                            $rangking = rangking($v_bujang, $v_bujang[$key], $jumlah_peserta_bujang);

                                                            if($rangking <= 10) {
                                                                echo '<strong>'.$rangking.'</strong>';
                                                            }else {
                                                                echo $rangking;
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success dim" onclick="location.href='<?php echo site_url('daftar_nilai/detail_nilai/'.$dnb['id_peserta'])?>'" type="button"><i class="fa fa-eye"></i> Detail Nilai</button>
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
                                <h5>Daftar Nilai Peserta Gadis</h5>
                            </div>
                            <div class="ibox-content" style="background-color: white;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover gadis">
                                            <thead>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>V</td>
                                                    <td>Rangking</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($daftar_nilai_gadis != NULL) foreach ($daftar_nilai_gadis as $key => $dng) { ?>
                                                <tr>
                                                    <td><?php echo $dng['nama_lengkap']; ?></td>
                                                    <td><?php echo number_format($v_gadis[$key], 3, '.', ','); ?></td>
                                                    <td>
                                                        <?php 
                                                            $rangking = rangking($v_gadis, $v_gadis[$key], $jumlah_peserta_gadis);

                                                            if($rangking <= 10) {
                                                                echo '<strong>'.$rangking.'</strong>';
                                                            }else {
                                                                echo $rangking;
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success dim" onclick="location.href='<?php echo site_url('daftar_nilai/detail_nilai/'.$dng['id_peserta'])?>'" type="button"><i class="fa fa-eye"></i> Detail Nilai</button>
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
            $('.bujang').DataTable({
                "pageLength": 50,
                "order": [2, "asc"],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                        {
                          extend: 'excel', 
                          title: 'Daftar Nilai Peserta Bujang',
                          exportOptions: {
                            columns: [0,1,2]
                          }
                        },
                        {
                          extend: 'pdf', 
                          title: 'Daftar Nilai Peserta Bujang',
                          exportOptions: {
                            columns: [0,1,2]
                          }
                        },
                        {
                          extend: 'print',
                          title: '<center>Daftar Nilai Peserta Bujang</center>',
                          exportOptions: {
                            columns: [0,1,2]
                          },
                          customize: function (win){
                            $(win.document.body)
                                .css( 'font-size', '10pt' )
                                .css( 'background-color', 'white')
         
                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                          }
                        }
                    ]

            });

            $('.gadis').DataTable({
                "pageLength": 50,
                "order": [2, "asc"],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                        {
                          extend: 'excel', 
                          title: 'Daftar Nilai Peserta Gadis',
                          exportOptions: {
                            columns: [0,1,2]
                          }
                        },
                        {
                          extend: 'pdf', 
                          title: 'Daftar Nilai Peserta Gadis',
                          exportOptions: {
                            columns: [0,1,2]
                          }
                        },
                        {
                          extend: 'print',
                          title: '<center>Daftar Nilai Peserta Gadis</center>',
                          exportOptions: {
                            columns: [0,1,2]
                          },
                          customize: function (win){
                            $(win.document.body)
                                .css( 'font-size', '10pt' )
                                .css( 'background-color', 'white')
         
                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                          }
                        }
                    ]

            });
        });
    </script>

</body>

</html>
