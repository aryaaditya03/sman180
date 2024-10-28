
<!-- Main Content -->
<div id="content-wrapper">
    <div class="container-fluid">
            <?php echo $this->session->flashdata('message');?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card shadow-sm py-2">
                            <div class="card-body">
                            <?php 
                                if($current_user->bukti == null)
                                {
                                    ?>
                                        <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            BUKTI PEMBAYARAN</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        <form action="<?php base_url('students/pembayaran/bukti') ?>" method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="bukti" class=" form-control-label">UPLOAD BUKTI (PNG/JPG/JPEG) (MAX 3MB)</label>
                                                    <input type="file" id="bukti" name="bukti" class="form-control-file" required>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-4">
                                        <button name="btn_registrasi" value="simpan" class="btn btn-outline-primary btn-block">
                                            <span class="font-weight-bold">UPLOAD</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                                    <?php
                                }
                                else 
                                {
                                    ?>
                                        <div class="d-sm-flex justify-content-between align-items-center">
                                            <h5 class=" font-weight-bold">JIKA SALAH UPLOAD FILE SILAHKAN PENCET REMOVE</h5>
                                        </div>
                                        <hr>
                                            <img src="<?php echo base_url(); ?>./img/uploads/bukti/<?php echo $current_user->bukti; ?>" width="100" height="140" class="mb-4"/>
                                        <br>
                                        <a href="<?= site_url('students/upload/removeBukti') ?>" class="btn btn-danger btn-block font-weight-bold">REMOVE</a>

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
    









