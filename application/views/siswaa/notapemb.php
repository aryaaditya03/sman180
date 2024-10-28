<div id="content-wrapper">
    <div class="container-fluid">
    <?php echo $this->session->flashdata('message');?>
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h2 class="mb-1 font-weight-bold text-dark">NOTA PEMBAYARAN</h2>
                </div>
                <hr class="mb-2">
                <?php 
                if($current_user->bukti == null)
                {
                    ?>
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
                        </table>
                        <hr>
                        <form action="<?php base_url('students/pembayaran/uploadbukti') ?>" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="bukti" class=" form-control-label">UPLOAD BUKTI (PNG/JPG/JPEG) (MAX 3MB)</label>
                                        <input type="file" id="bukti" name="bukti" class="form-control-file" required>
                                    </div>
                                </div>
                            </div>
                        <button onlick="submitConfirm" name="btn_registrasi" value="simpan" class="btn btn-outline-success btn-user btn-block">
                            Submit
                        </button>
                        </form>
                    <?php
                }
                else
                {
                    ?>
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
                    <?php
                }
            ?>
                
</div>
</div>
</div>
</div>
</div>