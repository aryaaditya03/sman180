<div id="content-wrapper" class="d-flex flex-column">
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
                    if($current_user2->status == 'Lulus')
                    {
                        ?>
                            <div class="text-center">
                                <i class="fas fa-check fa-2x text-dark-300"></i><span class="h3 ml-3">SISWA SUDAH DI VERIFIKASI!</span>
                            </div>
                        <?php
                    }
                    else if($current_user2->status == 'Belum')
                    {
                        ?>
                            <div class="text-center">
                                <i class="fas fa-check fa-2x text-dark-300"></i><span class="h3 ml-3">SISWA SUDAH DI VERIFIKASI!</span>
                            </div>
                        <?php
                    } else if($current_user2->status == 'Pending'){
                        ?>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-light">
                                        <div class="text-center text-dark">
                                            STATUS
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <form action="<?php base_url('admin/siswa/verifikasi') ?>" method="POST"  enctype="multipart/form-data">
                                    <select name="status" id="status" class="form-control <?= form_error('status') ? 'is-invalid':'' ?>" value="<?= set_value('status')?>">
                                        <option value="Pending">Pending</option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                    </div>
                                    <div class="card-footer">
                                        <button value="simpan" class="btn btn-info btn-sm float-right">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-light">
                                        <div class="text-center text-dark">
                                            UJIAN
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check text-center">
                                            <input class="form-check-input  <?= form_error('ujian') ? 'is-invalid':'' ?>" type="radio" name="ujian" id="lk" value="Sudah" value="<?= set_value('ujian')?>">
                                            <label class="form-check-label" for="lk">
                                                Sudah
                                            </label>
                                            </div>
                                            <div class="invalid-feedback">
                                            <?= form_error('ujian') ?>
                                            </div>
                                        </div>
                                    <div class="card-footer">
                                        <button value="simpan" name="save" class="btn btn-info btn-sm float-right">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
