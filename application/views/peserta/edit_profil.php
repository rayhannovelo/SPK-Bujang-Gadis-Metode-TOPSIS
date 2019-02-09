<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dinas Pariwisata   | Edit Profil</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/datapicker/datepicker3.css')?>" rel="stylesheet">
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
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('nama_peserta') ?></strong></a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><center><strong><span class="nav-label">Daftar Menu</span></strong></center></a>
                </li>
                <li>
                    <a href="<?php echo site_url('dashboard_peserta')?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('profil')?>"><i class="fa fa-user"></i> <span class="nav-label">Profil</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url('pengumuman')?>"><i class="fa fa-bullhorn"></i> <span class="nav-label">Pengumuman</span></a>
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
                            <span class="m-r-sm text-muted welcome-message">Selamat Datang, <?php echo $this->session->userdata('nama_peserta') ?></span>
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
                                <h5>Edit Profil</h5>
                            </div>
                            <div class="ibox-content" style="background-color: white">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php foreach ($profil as $p) { ?>
                                        <form class="m-t" role="form" action="<?php echo site_url('profil/edit_profil_form'); ?>" method="post">
                                        <div class="row form-horizontal">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Data Akun</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Username :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="username" class="form-control" value="<?php echo $p['username']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Password :</label>
                                                <div class="col-lg-9">
                                                    <input type="password" name="password" class="form-control" value="<?php echo $p['password']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Data Pribadi</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nama Lengkap :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="nama_lengkap"class="form-control" value="<?php echo $p['nama_lengkap']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nama Panggilan :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="nama_panggilan" class="form-control" value="<?php echo $p['nama_panggilan']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Jenis Kelamin :</label>
                                                <div class="col-lg-9">
                                                    <label class="checkbox-inline"> 
                                                        <input name="jenis_kelamin" value="Laki-laki" id="inlineCheckbox1" <?php echo $p['jenis_kelamin'] == 'Laki-laki' ? 'checked' : ''; ?> type="radio"> Laki-laki 
                                                    </label> 
                                                    <label class="checkbox-inline"> 
                                                        <input name="jenis_kelamin" value="Perempuan" id="inlineCheckbox2" <?php echo $p['jenis_kelamin'] == 'Perempuan' ? 'checked' : ''; ?>  type="radio"> Perempuan 
                                                    </label> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Tempat Lahir :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $p['tempat_lahir']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Tanggal Lahir :</label>
                                                <div class="col-lg-9">
                                                    <input id="date_added" type="text" name="tanggal_lahir" class="form-control" value="<?php echo $p['tanggal_lahir']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Usia Tahun :</label>
                                                <div class="col-lg-9">
                                                    <input type="number" name="usia_tahun" class="form-control" value="<?php echo $p['usia_tahun']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Usia Bulan :</label>
                                                <div class="col-lg-9">
                                                    <input type="number" name="usia_bulan" min="1" max="12" class="form-control" value="<?php echo $p['usia_bulan']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Agama :</label>
                                                <div class="col-lg-9">
                                                    <label class="checkbox-inline"> 
                                                        <input name="agama"  value="Islam" id="inlineCheckbox1" <?php echo $p['agama'] == 'Islam' ? 'checked' : ''; ?> type="radio"> Islam 
                                                    </label> 
                                                    <label class="checkbox-inline"> 
                                                        <input name="agama"  value="Kristen Protestan" id="inlineCheckbox2" <?php echo $p['agama'] == 'Kristen Protestan' ? 'checked' : ''; ?> type="radio"> Kristen Protestan 
                                                    </label>
                                                    <label class="checkbox-inline"> 
                                                        <input name="agama"  value="Katolik" id="inlineCheckbox3" <?php echo $p['agama'] == 'Katolik' ? 'checked' : ''; ?> type="radio"> Katolik 
                                                    </label> 
                                                    <label class="checkbox-inline"> 
                                                        <input name="agama"  value="Hindu" id="inlineCheckbox4" <?php echo $p['agama'] == 'Hindu' ? 'checked' : ''; ?> type="radio"> Hindu
                                                    </label>
                                                    <label class="checkbox-inline"> 
                                                        <input name="agama"  value="Buddha" id="inlineCheckbox5" <?php echo $p['agama'] == 'Buddha' ? 'checked' : ''; ?> type="radio"> Buddha 
                                                    </label> 
                                                    <label class="checkbox-inline"> 
                                                        <input name="agama"  value="Perempuan" id="inlineCheckbox6" <?php echo $p['agama'] == 'Kong Hu Cu' ? 'checked' : ''; ?> type="radio"> Kong Hu Cu 
                                                    </label>  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Tinggi Badan :</label>
                                                <div class="col-lg-9">
                                                    <input type="number" name="tinggi_badan" class="form-control" value="<?php echo $p['tinggi_badan']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Berat Badan :</label>
                                                <div class="col-lg-9">
                                                    <input type="number" name="berat_badan" class="form-control" value="<?php echo $p['berat_badan']; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Data Kontak</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Alamat Lengkap :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="alamat_lengkap" class="form-control" value="<?php echo $p['alamat_lengkap']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Email :</label>
                                                <div class="col-lg-9">
                                                    <input type="email" name="email" class="form-control" value="<?php echo $p['email']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">No Handphone :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="no_hp" class="form-control" value="<?php echo $p['no_hp']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Facebook :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="fb" class="form-control" value="<?php echo $p['fb']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Twitter :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="twitter" class="form-control" value="<?php echo $p['twitter']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Instagram :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="instagram" class="form-control" value="<?php echo $p['instagram']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Riwayat Pendidikan</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">SD :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="sd" class="form-control" value="<?php echo $p['sd']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">SMP :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="smp" class="form-control" value="<?php echo $p['smp']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">SMA :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="sma" class="form-control" value="<?php echo $p['sma']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Universitas :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="universitas" class="form-control" value="<?php echo $p['universitas']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">pekerjaan :</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="pekerjaan" class="form-control" value="<?php echo $p['pekerjaan']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Riwayat Sakit</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Riwayat Sakit Berat :</label>
                                                <div class="col-lg-9">
                                                    <select name="riwayat_sakit" class="form-control">
                                                        <option value="0" <?php echo $p['riwayat_sakit'] == 0 ? 'selected' : ''; ?>>Tidak</option>
                                                        <option value="1" <?php echo $p['riwayat_sakit'] == 1 ? 'selected' : ''; ?>>Ya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Keterangan Sakit :</label>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_sakit" class="form-control" value="" style="resize: vertical;" required><?php echo $p['keterangan_sakit']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Bahasa Yang Dikuasai</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                                     <table id="table_bahasa" class="table table-striped table-bordered table-hover dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <td>Nama Bahasa</td>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($bahasa as $key => $b) { ?>
                                                            <tr>
                                                                <input type="hidden" name=id_bahasa[]" value="<?php echo $b['id_bahasa']; ?>">
                                                                <td><input type="text" name=nama_bahasa[]" class="form-control" value="<?php echo $b['nama_bahasa']; ?>" required></td>
                                                                <td><button type="button" class="btn btn-s btn-danger" onclick="if (confirm('Keahlian bahasa akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('profil/hapus_bahasa/'.$b['id_bahasa'])?>'"><i class="fa fa-trash"></i></button></td>
                                                            </tr>
                                                        <?php } ?>
                                                            <span id="id_bahasa"></span>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" id="tambah_bahasa" class="btn btn-s btn-info pull-right"><i class="fa fa-plus"></i> Tambah Bahasa</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Hobi / Minat</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                                     <table id="table_hobi" class="table table-striped table-bordered table-hover dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <td>Nama Hobi</td>
                                                                <td>Kategori Hobi</td>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($hobi as $key => $h) { ?>
                                                            <tr>
                                                                <input type="hidden" name=id_hobi[]" value="<?php echo $h['id_hobi']; ?>">
                                                                <td><input type="text" name=nama_hobi[]" class="form-control" value="<?php echo $h['nama_hobi']; ?>" required></td>
                                                                <td>
                                                                    <select name="id_kategori_hobi[]" class="form-control">
                                                                    <?php foreach($kategori_hobi as $value) { ?>
                                                                        <option value="<?php echo $value['id_kategori_hobi']; ?>" <?php echo $value['id_kategori_hobi'] == $h['id_kategori_hobi'] ? 'selected' : '';?>><?php echo $value['nama_kategori']; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </td>
                                                                <td><button type="button" class="btn btn-s btn-danger" onclick="if (confirm('Hobi akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('profil/hapus_hobi/'.$h['id_hobi'])?>'"><i class="fa fa-trash"></i></button></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <span id="id_hobi"></span>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" id="tambah_hobi" class="btn btn-s btn-info pull-right"><i class="fa fa-plus"></i> Tambah Hobi</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Bakat</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                                     <table id="table_bakat" class="table table-striped table-bordered table-hover dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <td>Nama Bakat</td>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($bakat as $key => $b) { ?>
                                                            <tr>
                                                                <input type="hidden" name=id_bakat[]" value="<?php echo $b['id_bakat']; ?>">
                                                                <td><input type="text" name=nama_bakat[]" class="form-control" value="<?php echo $b['nama_bakat']; ?>" required></td>
                                                                <td><button type="button" class="btn btn-s btn-danger" onclick="if (confirm('Bakat akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('profil/hapus_bakat/'.$b['id_bakat'])?>'"><i class="fa fa-trash"></i></button></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <span id="id_bakat"></span>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" id="tambah_bakat" class="btn btn-s btn-info pull-right"><i class="fa fa-plus"></i> Tambah Bakat</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <h2 class="text-center"><strong>Prestasi Yang Pernah Diraih</strong></h2>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                                     <table id="table_prestasi" class="table table-striped table-bordered table-hover dataTables-example">
                                                        <thead>
                                                            <tr>
                                                                <td>Tahun</td>
                                                                <td>Nama Kegiatan</td>
                                                                <td>Prestasi</td>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($prestasi as $key => $p) { ?>
                                                            <tr>
                                                                <input type="hidden" name=id_prestasi[]" value="<?php echo $p['id_prestasi']; ?>">
                                                                <td><input type="number" name=tahun[]" class="form-control" value="<?php echo $p['tahun']; ?>" required></td>
                                                                <td><input type="text" name=nama_kegiatan[]" class="form-control" value="<?php echo $p['nama_kegiatan']; ?>" required></td>
                                                                <td><input type="text" name=prestasi[]" class="form-control" value="<?php echo $p['prestasi']; ?>" required></td>
                                                                <td><button type="button" class="btn btn-s btn-danger"  onclick="if (confirm('Prestasi akan dihapus, apakah Anda yakin?')) location.href='<?php echo site_url('profil/hapus_prestasi/'.$p['id_prestasi'])?>'"><i class="fa fa-trash"></i></button></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <span id="id_prestasi"></span>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" id="tambah_prestasi" class="btn btn-s btn-info pull-right"><i class="fa fa-plus"></i> Tambah Prestasi</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-offset-8">
                                                <button type="reset" class="btn btn-w-m btn-warning">Reset</button>
                                                <button class="btn btn-w-m btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                        </div>
                                        <?php } ?>
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
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('#date_added').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: 'yyyy-mm-dd'
            });

            // table bahasa
            var bahasa = 1;
            $(document).on("click",'button#tambah_bahasa',function(){
                bahasa += 1;
                $('#table_bahasa').append(
                    '<tr id="bahasa'+bahasa+'">'+
                        '<td>'+
                            '<input type="hidden" name="id_bahasa[]" value="0">'+
                            '<input type="text" name="nama_bahasa[]" placeholder="Nama Bahasa" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<center><button type="button" id="'+bahasa+'" class="btn btn-s btn-danger hapus_bahasa"><i class="fa fa-trash"></i></button></center>'+
                        '</td>'+
                    '</tr>'
                );
            });

            $(document).on('click', '.hapus_bahasa', function(){  
                var button_id = $(this).attr("id");   
                $('#bahasa'+button_id+'').remove();  
            });

            // table hobi
            var hobi = 1;
            $(document).on("click",'button#tambah_hobi',function(){
                hobi += 1;
                $('#table_hobi').append(
                    '<tr id="hobi'+hobi+'">'+
                        '<td>'+
                            '<input type="hidden" name="id_hobi[]" value="0">'+
                            '<input type="text" name="nama_hobi[]" placeholder="Nama Hobi" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<select name="id_kategori_hobi[]" class="form-control">'+
                            '<?php foreach($kategori_hobi as $value) { ?>'+
                                '<option value="<?php echo $value['id_kategori_hobi']; ?>" <?php echo $value['id_kategori_hobi'] == $h['id_kategori_hobi'] ? 'selected' : '';?>><?php echo $value['nama_kategori']; ?></option>'+
                            '<?php } ?>'+
                            '</select>'+
                        '</td>'+
                        '<td>'+
                            '<center><button type="button" id="'+hobi+'" class="btn btn-s btn-danger hapus_hobi"><i class="fa fa-trash"></i></button></center>'+
                        '</td>'+
                    '</tr>'
                );
            });

            $(document).on('click', '.hapus_hobi', function(){  
                var button_id = $(this).attr("id");   
                $('#hobi'+button_id+'').remove();  
            });

            // table bakat
            var bakat = 1;
            $(document).on("click",'button#tambah_bakat',function(){
                bakat += 1;
                $('#table_bakat').append(
                    '<tr id="bakat'+bakat+'">'+
                        '<td>'+
                            '<input type="hidden" name="id_bakat[]" value="0">'+
                            '<input type="text" name="nama_bakat[]" placeholder="Nama Hobi" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<center><button type="button" id="'+bakat+'" class="btn btn-s btn-danger hapus_bakat"><i class="fa fa-trash"></i></button></center>'+
                        '</td>'+
                    '</tr>'
                );
            });

            $(document).on('click', '.hapus_bakat', function(){  
                var button_id = $(this).attr("id");   
                $('#bakat'+button_id+'').remove();  
            });

            // table prestasi
            var prestasi = 1;
            $(document).on("click",'button#tambah_prestasi',function(){
                prestasi += 1;
                $('#table_prestasi').append(
                    '<tr id="prestasi'+prestasi+'">'+
                        '<td>'+
                            '<input type="hidden" name="id_prestasi[]" value="0">'+
                            '<input type="number" name="tahun[]" placeholder="Tahun" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="nama_kegiatan[]" placeholder="Nama Kegiatan" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="prestasi[]" placeholder="Prestasi" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                            '<center><button type="button" id="'+prestasi+'" class="btn btn-s btn-danger hapus_prestasi"><i class="fa fa-trash"></i></button></center>'+
                        '</td>'+
                    '</tr>'
                );
            });

            $(document).on('click', '.hapus_prestasi', function(){  
                var button_id = $(this).attr("id");   
                $('#prestasi'+button_id+'').remove();  
            });
        });

    </script>

</body>

</html>
