
<!-- Main Content -->
<div id="content-wrapper">
    <div class="container-fluid">

            <?php echo $this->session->flashdata('message');?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                    <?php 
                        if($current_user->id_pembayaran == null)
                        {
                            ?>
                                <div class="mb-2">
                                <h2 class="font-weight-bold">MEMBUAT TRANSAKSI</h2>
                                <p class="text-muted">SILAHKAN PENCET TOMBOL DIBAWAH || AUTO DIRECT KE DASHBOARD DAN UPLOAD BUKTI</p>
                                <hr>
                                </div>
                                <a href="<?php echo site_url('students/pembayaran/nota') ?>"><span class="btn btn-outline-info">BUAT TRANSAKSI</span></a>
                            <?php
                        }
                        else 
                        {
                            ?>
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h5 class=" font-weight-bold">ANDA SUDAH MEMBUAT TRANSAKSI, SILAHKAN CETAK!</h5>
                                </div>
                                <hr>
                                <table width="100%" border="0" class="table text-dark bg-light" cellspacing="0" cellpadding="5">
                                <tr bgcolor="#5f9ea0">
                                    <th>DATA</th>
                                    <th>KETERANGAN</th>
                                </tr>
                                <tr>
                                    <td>Nama Siswa</td>
                                    <td><?= htmlentities($current_user->nama_siswa)?></td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td><?= htmlentities($current_user->nisn)?></td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td><?= htmlentities($current_user->nik)?></td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td><?= htmlentities($current_user->jurusan)?></td>
                                </tr>
                                <tr>
                                    <td>Nominal</td>
                                    <td>Rp. 350.000</td>
                                </tr>
                                <tr>
                                    <td>Id Pembayaran</td>
                                    <td><?= htmlentities($current_user->id_pembayaran)?></td>
                                </tr>  
                                <tr>
                                    <td>Bukti Pembayaran</td>
                                    <td><img src="<?php echo base_url(); ?>./img/uploads/bukti/<?php echo $current_user->bukti; ?>" width="100" height="140" class="mb-4"/></td>
                                </tr>  
                                </table>
                                <a href="<?= site_url('students/pembayaran/cetakPdf') ?>" type="button" class="btn btn-outline-info float-right shadow-sm">
                                    <i class='fas fa-print'></i> <span>Cetak</span>
                                </a>
                                <br>
                                

                            <?php
                        }
                    ?>   

                </div>
</div>
</div>
</div>
                                        </div>
</div>
</div>
    









