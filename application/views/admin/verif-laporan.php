
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<div class="container-fluid">

<div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-3 shadow-sm mb-4 p-3" style="background-color:white;">
        <li class="breadcrumb-item font-weight-bold" aria-current="page">Verifikasi</li>
    </ol>
    
</nav>

</div>
</div>

<div id="content-wrapper">
    <div class="container-fluid">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="">
                <?php 
                    if($current_user2->statuspembayaran == 'Lunas')
                    {
                        ?>
                            <div class="text-center">
                                <i class="fas fa-check fa-2x text-dark-300"></i><span class="h3 ml-3">SISWA SUDAH DI VERIFIKASI</span>
                            </div>
                        <?php
                    }
                    else if($current_user2->statuspembayaran == 'Belum')
                    {
                        ?>
                            <form action="<?php base_url('admin/laporan/verifikasi') ?>" method="POST"  enctype="multipart/form-data">
                            <div class="col-xl-8 col-md-6">
                            <div class="card shadow-sm mb-3">
                            <div class="card-header bg-light">
                                <div class="text-center text-dark">
                                    STATUS PEMBAYARAN
                                </div>
                            </div>
                            <div class="card-body">     
                                <div class="form-check text-center">
                                    <input class="form-check-input  <?= form_error('statuspembayaran') ? 'is-invalid':'' ?>" type="radio" name="statuspembayaran" id="lk" value="Lunas" value="<?= set_value('statuspembayaran')?>">
                                    <label class="form-check-label" for="lk">
                                        Lunas
                                    </label>
                                </div>
                                <div class="invalid-feedback">
                                <?= form_error('statuspembayaran') ?>
                                
                            </div>
                            <hr>
                            <button value="simpan" class="btn btn-info btn-block btn-small rounded">
                                Submit
                            </button>
                            </div>
                            </div>

    
                        <?php
                    }
                ?>
                    
                    </div>
                    </div>
</form>
                
                    
                </div>
            </div>
            </div>
            </div>
</div>
</div>
</div>
</div>
</div>
