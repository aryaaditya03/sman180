<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?>/</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />

    <link href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('js/sb-admin-2.min.js') ?>" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
</head>
<body class="text-dark">


    <div class="container-fluid">

        <h3 class="text-center font-weight-bold" style="padding:0px;margin:0px;">PEMERINTAH PROVINSI DKI JAKARTA</h>
        <h3 class="text-center font-weight-bold" style="padding:0px;margin:0px;">DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA</h3>
        <h3 class="text-center font-weight-bold" style="padding:0px;margin:0px;">SMAN 180 JAKARTA BARAT</h3>
        <h4 class="text-center font-weight-bold" style="padding:0px;margin:0px;">JL. Anggrek Neli Murni Kec.Kemanggisan Kab.DKI Jakarta</h4>
        <hr style="border:2px solid black;padding:1px;margin:5px 0;">
        <p class="text-right" ><?php echo date('Y-m-d H:i:s')?></p>
        <br>
        <p>Judul : Detail Data Siswa - PPDB Online 2024</p>
        <br>
        <table width="100%" border="0" class="table text-dark" cellspacing="0" cellpadding="5">
            <tr bgcolor="#0abab5">
                <th>DATA DIRI</th>
                <th>KETERANGAN</th>
            </tr>
            <tr>
                <td>NISN</td>
                <td><?= htmlentities($current_user2->nisn)?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><?= htmlentities($current_user2->nik)?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?= htmlentities($current_user2->nama_siswa)?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td><?= htmlentities($current_user2->asal_sekolah)?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><?= htmlentities($current_user2->jurusan)?></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td><?= htmlentities($current_user2->kota_lahir)?> , <?= htmlentities($current_user2->tanggal_lahir)?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?= htmlentities($current_user2->agama)?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= htmlentities($current_user2->alamat)?></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td><?= htmlentities($current_user2->no_handphone)?></td>
            </tr>
            <tr>
                <td>Nama Wali</td>
                <td><?= htmlentities($current_user2->nama_wali)?></td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td><?= htmlentities($current_user2->nama_ayah)?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php 
                        if($current_user2->status == 'Lulus')
                        {
                            ?>
                                <span class="badge badge-success">LULUS</span>
                            <?php
                        }
                        else if($current_user2->status == 'Tidak')
                        {
                            ?>
                                <span class="badge badge-danger">TIDAK LULUS</span>
                            <?php
                        }
                        else
                        {
                            echo '<span class="badge badge-warning">PENDING</span>';
                        }
                    ?></td>
            </tr>
            <tr>
                <td>Status Pembayaran</td>
                <td><?php 
                        if($current_user2->statuspembayaran == 'Belum')
                        {
                            ?>
                                <div class="">
                                    <span class="badge badge-danger">BELUM MELAKUKAN PEMBAYARAN</span>
                                </div>
                            <?php
                        }
                        else if($current_user2->statuspembayaran == 'Lunas')
                        {
                            ?>
                                <div class="">
                                    <span class="badge badge-success">SUDAH LUNAS</span>
                                </div>
                            <?php
                        }
                    ?></td>
            </tr>
            <tr>
                <td>Ujian</td>
                <td><?php 
                        if($current_user2->ujian == 'Belum')
                        {
                            ?>
                                <div class="">
                                    <span class="badge badge-warning">BELUM MELAKUKAN UJIAN</span>
                                </div>
                            <?php
                        }
                        else if($current_user2->ujian == 'Sudah')
                        {
                            ?>
                                <div class="">
                                    <span class="badge badge-success">SUDAH MELAKUKAN UJIAN</span>
                                </div>
                            <?php
                        }
                    ?></td>
            </tr>
        </table>
    </div>
</body>
</html>