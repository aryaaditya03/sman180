        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <div class="container-fluid">

            <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3 shadow-sm mb-4 p-3" style="background-color:white;">
                    <li class="breadcrumb-item font-weight-bold" aria-current="page">Data Siswa</li>
                </ol>
                
            </nav>
            
            </div>
        </div>


<div id="content-wrapper">
<div class="container-fluid">
		<div class="row">
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                        <div class="card-header" style="display:flex;background-color:#126180;">
                            <div class="text-center">
                                <h5 class="mt-2 text-white font-weight-bold">Detail Data & Verifikasi</h5>
                            </div>
                        </div>
                            <div class="card-body">
                        <table border="0" bgcolor="white" >
                        <tr>
                            <td>NISN</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->nisn)?></b></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->nik)?></b></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->nama_siswa)?></b></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->asal_sekolah)?></b></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->jurusan)?></b></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->tanggal_lahir)?></b></td>
                        </tr>
                        <tr>
                            <td>Kota Kelahiran</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->kota_lahir)?></b></td>
                        </tr>
                        <tr>
                            <td>No. Handphone</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->no_handphone)?></b></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->alamat)?></b></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->agama)?></b></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->nama_ibu)?></b></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->nama_ayah)?></b></td>
                        </tr>
                        <tr>
                            <td>Nama Wali</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td><b><?= htmlentities($current_user2->nama_wali)?></b></td>
                        </tr>
                        
                    </table>
								
                            </div>
                            <div class="card-footer">
                                <div>
                                    <a href="<?= site_url('admin/siswa/cetak/' .$current_user2->id_siswa) ?>" class="btn btn-outline-danger float-right font-weight-bold"><i class="fas fa-file-pdf"></i> Cetak Pdf</a>
                                </div>
                                <div>
                                    <a href="<?= site_url('admin/siswa/verifikasi/' .$current_user2->id_siswa)?>" class="btn mr-2 btn-outline-info float-right font-weight-bold"><i class="fas fa-user-edit"></i> Verifikasi</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card shadow-sm">
                        <div class="card-header text-white" style="display:flex;background-color:#0093af;">
                            <div class="mr-5">
                                <h5 class="mt-2 mr-5 font-weight-bold">Data Dokumen</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ml-3">
                                <div class="mr-5 ml-3">
                                    <p><b> IJAZAH : </b><?php 
                                                        if($current_user2->ijazah == null)
                                                        {
                                                            ?>
                                                                <br><span class="text-dark text-small">belum upload</span>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?><br><img src="<?php echo base_url(); ?>./img/uploads/ijazah/<?php echo $current_user2->ijazah; ?>" width="100" height="140"/><?php
                                                        }
                                                    ?></p>
                                </div>
                                <div class="mr-5">
                                <p><b> Nilai : </b><?php 
                                                        if($current_user2->nilai_siswa == null)
                                                        {
                                                            ?>
                                                                 <br><span class="text-dark text-small">belum upload</span>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?><br><img src="<?php echo base_url(); ?>./img/uploads/nilai/<?php echo $current_user2->nilai_siswa; ?>" width="100" height="140"/><?php
                                                        }
                                                    ?></p>
                                </div>
                                <div class="">
                                <p><b> SKHUN : </b><?php 
                                                        if($current_user2->skhun == null)
                                                        {
                                                            ?>
                                                                 <br><span class="text-dark text-small">belum upload</span>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?><br><img src="<?php echo base_url(); ?>./img/uploads/skhun/<?php echo $current_user2->skhun; ?>" width="100" height="140"/><?php
                                                        }
                                                    ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
		</div>
		</div>
</div>