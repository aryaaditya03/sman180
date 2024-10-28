
<!-- Main Content -->
<div id="content-wrapper">
    <div class="container-fluid">
            
            <?php echo $this->session->flashdata('messageLogin');?>
            <?php echo $this->session->flashdata('messageEmail');?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="mb-2">
                            <h2 class="font-weight-bold">PENGUMUMAN</h2>
                            <p class="text-muted">HARAP PERHATIKAN INFORMASI DIBAWAH!</p>
                            <hr>
                        </div>
                        <div class="row">
                        <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card shadow-sm py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            STATUS PEMBAYARAN</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        <?php 
                                            if($current_user->statuspembayaran == 'Lunas')
                                            {
                                                ?>
                                                    <span class="badge badge-success">PEMBAYARAN SUDAH LUNAS!!</span>
                                                <?php
                                            }
                                            else if($current_user->statuspembayaran == 'Belum')
                                            {
                                                ?>
                                                    <a href="<?php echo site_url('students/pembayaran') ?>"><span class="badge badge-danger">HARAP MELAKUKAN PEMBAYARAN (KLIK DISINI)</span></a>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card shadow-sm py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            STATUS VERIFIKASI ANDA (HARAP LAKUKAN UJIAN TERLEBIH DAHULU)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        <?php 
                                            if($current_user->status == 'Lulus')
                                            {
                                                ?>
                                                    <span class="badge badge-success">ANDA LULUS</span>
                                                <?php
                                            }
                                            else if($current_user->status == 'Lulus')
                                            {
                                                ?>
                                                    <span class="badge badge-danger">ANDA TIDAK LULUS</span>
                                                <?php
                                            }
                                            else
                                            {
                                                echo '<span class="badge badge-warning">PENDING</span>';
                                            }
                                        ?>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card shadow-sm py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <?php 
                                            if($current_user->ujian == 'Belum')
                                            {
                                                ?>
                                                    <div class="h5 text-uppercase mb-1">
                                                        Test Ujian >></div>
                                                    <div class=" mb-0 font-weight-bold text-gray-800"></div>
                                                    </div>
                                                        <a href="<?= site_url('students/dashboard/sendEmail') ?>" class="btn btn-success shadow-sm btn-small">KLIK UNTUK TEST UJIAN</a>
                                                    </div>
                                                <?php
                                            }
                                            else if($current_user->ujian == 'Sudah')
                                            {
                                                ?>
                                                    <div class="text-center">
                                                        <i class="fas fa-check fa-1x text-dark-300"></i><span class="h5 ml-3">ANDA SUDAH MELAKUKAN UJIAN</span>
                                                    </div>
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
</div>
                                        </div>
</div>
</div>
    









