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
        <p>Judul : Data Guru - PPDB Online 2024</p>
        <br>
        <div class="table-responsive-md">
        <table width="100%" border="0" class="table text-dark" cellspacing="0" cellpadding="5">
            <thead class="thead">
                <tr>
                    <th width="" class="">No</th>
                    <th class="">Kode Guru</th>
                    <th class="">Nama Guru</th>
                    <th class="">Mapel</th>
                    <th class="">Email</th>
                    <th class="">No. Telpon</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no=1;
                ?>
                <?php foreach ($guru as $product): ?>
                <tr>
                    <td class=""><?php echo $no++ ?></td>
                    <td width="" height="" class="">
                        <?php echo $product->kode_guru ?>
                    </td>
                    <td width="" height="" class="">
                        <?php echo $product->nama_guru ?>
                    </td>
                    <td width="" height="" class="">
                        <?php echo $product->mapel ?>
                    </td>
                    <td width="" height="" class="">
                        <?php echo $product->email ?>
                    </td>
                    <td width="" height="" class="">
                        <?php echo $product->no_telp ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>