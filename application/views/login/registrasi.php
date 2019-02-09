<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dinas Pariwisata   | Registrasi Peserta</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/datapicker/datepicker3.css')?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown" style="padding-top: 100px; width: 600px;">
        <p style="font-size: 40px">Registrasi Peserta</p>
        <div class="ibox-content">
            <?php
                if($this->session->flashdata('sukses')) {
                  echo $this->session->flashdata('sukses');
                }
            ?>
            <a href="<?php echo site_url('login'); ?>" class="pull-left"><h4><i class="fa fa-arrow-circle-o-left text-info"></i> Log In</h4></a><br>
            <form class="m-t" role="form" action="<?php echo site_url('login/registrasi_form'); ?>" method="post" onsubmit="return confirm('Data registrasi akan dikirim. Apakah Anda yakin?');">
                <h3>Data Akun</h3>
                <hr/>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <h3>Data Pribadi</h3>
                <hr/>
                <div class="form-group">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan" required="">
                </div>
                <div class="form-group">
                    <label class="checkbox-inline"> 
                        <input name="jenis_kelamin" value="Laki-laki" id="inlineCheckbox1" type="radio" checked=""> Laki-laki 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="jenis_kelamin" value="Perempuan" id="inlineCheckbox2" type="radio"> Perempuan 
                    </label> 
                </div>
                <div class="form-group">
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required="">
                </div>
                <div class="form-group">
                    <div class="input-group date">
                        <input id="date_added" name="tanggal_lahir" placeholder="YYYY-MM-DD" type="text" class="form-control" value="<?php echo date('Y-m-d')?>"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                    <span class="help-block m-b-none">Tanggal Lahir (YYYY-MM-DD)</span>
                </div>
                <div class="form-group">
                    <input type="number" name="usia_tahun" class="form-control" placeholder="Usia Tahun" required="">
                </div>
                <div class="form-group">
                    <input type="number" name="usia_bulan" min="1" max="12" class="form-control" placeholder="Usia Bulan" required="">
                </div>
                <div class="form-group">
                    <!-- <select name="agama" class="form-control">
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                    </select> -->
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Islam" id="inlineCheckbox1" type="radio" checked=""> Islam 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Kristen Protestan" id="inlineCheckbox2" type="radio"> Kristen Protestan 
                    </label>
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Katolik" id="inlineCheckbox3" type="radio"> Katolik 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Hindu" id="inlineCheckbox4" type="radio"> Hindu
                    </label><br>
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Buddha" id="inlineCheckbox5" type="radio"> Buddha 
                    </label> 
                    <label class="checkbox-inline"> 
                        <input name="agama"  value="Perempuan" id="inlineCheckbox6" type="radio"> Kong Hu Cu 
                    </label>  
                </div>
                <div class="form-group">
                    <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan" required="">
                </div>
                <div class="form-group">
                    <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan" required="">
                </div>
                <h3>Kontak</h3>
                <hr/>
                <div class="form-group">
                    <input type="text" name="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap" required="">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Alamat e-mail aktif" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="fb" class="form-control" placeholder="Facebook">
                </div>
                <div class="form-group">
                    <input type="text" name="twitter" class="form-control" placeholder="Twitter">
                </div>
                <div class="form-group">
                    <input type="text" name="instagram" class="form-control" placeholder="Instagram">
                </div>
                <h3>Riwayat Pendidikan</h3>
                <hr/>
                <div class="form-group">
                    <input type="text" name="sd" class="form-control" placeholder="SD / MIN" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="smp" class="form-control" placeholder="SMP / MTS" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="sma" class="form-control" placeholder="SMA / SMK / MAN" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="universitas" class="form-control" placeholder="Universitas">
                </div>
                <div class="form-group">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                </div>
                <h3>Bahasa Yang Dikuasai</h3>
                <hr/>
                <div class="form-group">
                    <table id="table_bahasa" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th style="text-align: center;">Nama Bahasa</th>
                                <th style="text-align: center;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="nama_bahasa[]" placeholder="Nama Bahasa" class="form-control" required>
                                </td>
                                <td>
                                    <center><button type="button" class="btn btn-s btn-danger"  disabled><i class="fa fa-trash"></i></button></center>
                                </td>
                            </tr>
                            <span id="id_bahasa"></span>
                        </tbody>
                    </table>
                    <button type="button" id="tambah_bahasa" class="btn btn-s btn-info"><i class="fa fa-plus"></i> Tambah Bahasa</button>
                    <br>
                </div>
                <h3>Minat / Hobi</h3>
                <hr/>
                <div class="form-group">
                    <table id="table_hobi" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th style="text-align: center;">Nama Hobi</th>
                                <th style="text-align: center;">Kategori Hobi</th>
                                <th style="text-align: center;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="nama_hobi[]" placeholder="Nama Hobi" class="form-control" required>
                                </td>
                                <td>
                                    <select name="id_kategori_hobi[]" class="form-control">
                                    <?php foreach($kategori_hobi as $value) { ?>
                                        <option value="<?php echo $value['id_kategori_hobi']; ?>"><?php echo $value['nama_kategori']; ?></option>
                                    <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <center><button type="button" class="btn btn-s btn-danger"  disabled><i class="fa fa-trash"></i></button></center>
                                </td>
                            </tr>
                            <span id="id_hobi"></span>
                        </tbody>
                    </table>
                    <button type="button" id="tambah_hobi" class="btn btn-s btn-info"><i class="fa fa-plus"></i> Tambah Hobi</button>
                </div>
                <h3>Bakat</h3>
                <hr/>
                <div class="form-group">
                    <table id="table_bakat" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th style="text-align: center;">Nama Bakat</th>
                                <th style="text-align: center;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="nama_bakat[]" placeholder="Nama Bakat" class="form-control" required>
                                </td>
                                <td>
                                    <center><button type="button" class="btn btn-s btn-danger"  disabled><i class="fa fa-trash"></i></button></center>
                                </td>
                            </tr>
                            <span id="id_bakat"></span>
                        </tbody>
                    </table>
                    <button type="button" id="tambah_bakat" class="btn btn-s btn-info"><i class="fa fa-plus"></i> Tambah Bakat</button>
                </div>
                <h3>Prestasi Yang Pernah Diraih</h3>
                <hr/>
                <div class="form-group">
                    <table id="table_prestasi" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th style="text-align: center;">Tahun</th>
                                <th style="text-align: center;">Nama Kegiatan</th>
                                <th style="text-align: center;">Prestasi</th>
                                <th style="text-align: center;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" name="tahun[]" min="1" max="9999" placeholder="Tahun" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="nama_kegiatan[]" placeholder="Nama Kegiatan" class="form-control" required>
                                </td>
                                <td>
                                    <input type="text" name="prestasi[]" placeholder="Prestasi" class="form-control" required>
                                </td>
                                <td>
                                    <center><button type="button" class="btn btn-s btn-danger"  disabled><i class="fa fa-trash"></i></button></center>
                                </td>
                            </tr>
                            <span id="id_prestasi"></span>
                        </tbody>
                    </table>
                    <button type="button" id="tambah_prestasi" class="btn btn-s btn-info"><i class="fa fa-plus"></i> Tambah Prestasi</button>
                </div>
                <h3>Riwayat Sakit</h3>
                <hr/>
                <div class="form-group">
                    <p>Apakah Anda pernah mengalami sakit parah / dirawat dirumah sakit / dioperasi?</p>
                    <select name="riwayat_sakit" class="form-control">
                        <option value="0">Tidak</option>
                        <option value="1">Ya</option>
                    </select>
                </div>
                <div class="form-group">
                    <p><strong>Jika Ya,</strong> Jelaskan: </p>
                    <textarea name="keterangan_sakit" class="form-control" placeholder="Keterangan Sakit" style="resize: vertical;"></textarea> 
                </div>
                <hr/>
                <h3><strong>-------------- PERNYATAAN --------------</strong></h3>
                <hr/>
                <p>Dengan mengisi formulir ini, saya menyatakan bahwa: </p>
                <ol style="text-align: left">
                    <li> Segala data dan keterangan di atas adalah benar dan dapat dipertanggungjawababkan</li>
                    <li> Keikutsertaan saya dalam Pemilihan Bujang Gadis  Tahun 2017 ini diketahui dan diijinkan oleh orang tua atau wali.</li>
                    <li> Bersedia mengikuti peraturan dan tata tertib penyelenggara Pemilihan Bujang Gadis  Tahun 2017.</li>
                </ol>
                <hr/>
                <button type="submit" class="btn btn-primary block full-width m-b">Submit</button>
            </form>
            <hr/>
            <strong>Copyright</strong> Dispar   <small>© 2017</small>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
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
                            '<input type="text" name="nama_hobi[]" placeholder="Nama Hobi" class="form-control" required>'+
                        '</td>'+
                        '<td>'+
                        '<select name="id_kategori_hobi[]" class="form-control">'+
                        '<?php foreach($kategori_hobi as $value) { ?>'+
                            '<option value="<?php echo $value['id_kategori_hobi']; ?>"><?php echo $value['nama_kategori']; ?></option>'+
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
