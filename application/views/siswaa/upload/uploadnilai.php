<div id="content-wrapper">
    <div class="container-fluid">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
            <?php 
                if($current_user->nilai_siswa == null)
                {
                    ?>
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2 class="mb-1 font-weight-bold">UPLOAD NILAI*</h2>
                        </div>
                        <hr class="mb-4">
                        <?php echo $this->session->flashdata('messagenilai_Siswa');?>
                        <form action="<?php base_url('students/upload/nilai_siswa') ?>" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nilai_siswa" class=" form-control-label">UPLOAD NILAI (PNG/JPG/JPEG) (MAX 3MB)</label>
                                    <input type="file" id="nilai_siswa" name="nilai_siswa" class="form-control-file" required>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button name="btn_registrasi" value="simpan" class="btn btn-primary btn-block">
                            <span class="font-weight-bold">UPLOAD</span>
                        </button>
                    <?php
                }
                else 
                {
                    ?>
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h5 class=" font-weight-bold">JIKA SALAH UPLOAD FILE SILAHKAN PENCET REMOVE</h5>
                        </div>
                        <hr>
                            <img src="<?php echo base_url(); ?>./img/uploads/nilai/<?php echo $current_user->nilai_siswa; ?>" width="100" height="140" class="mb-4"/>
                        <br>
                        <a href="<?= site_url('students/upload/removeNilai') ?>" class="btn btn-danger btn-block font-weight-bold">REMOVE</a>

                    <?php
                }
            ?>
                
</div>
</div>
</div>
</div>
</div>