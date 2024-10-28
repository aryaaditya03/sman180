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

                <?php echo $this->session->flashdata('messageVerif');?>
                <div class="card shadow-sm mb-5">
                    <div class="card-header bg-light">
                        <div class="mr-5">
                        <a href="<?= site_url('admin/siswa/cetakpdf') ?>" type="button" class="btn btn-warning shadow-sm">
                            <i class='fas fa-print'></i> <span>Cetak</span>
                        </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead">
                                    <tr>
                                        <th width="" class="">No</th>
                                        <th class="">NISN</th>
                                        <th class="">NIK</th>
                                        <th class="">Nama</th>
                                        <th class="">Alamat</th>
                                        <th class="">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    ?>
                                    <?php foreach ($siswa as $product): ?>
                                    <tr>
                                        <td class=""><?php echo $no++ ?></td>
                                        <td width="" height="" class="">
                                            <?php echo $product->nisn ?>
                                        </td>
                                        <td width="" height="" class="">
                                            <?php echo $product->nik ?>
                                        </td>
                                        <td width="" height="" class="">
                                            <?php echo $product->nama_siswa ?>
                                        </td>
                                        <td width="" class="">
                                            <?php echo $product->alamat ?>
                                        </td>
                                        <td width="210">
                                        <a href="<?php echo site_url('admin/siswa/approval/'.$product->id_siswa) ?>"
                                            class="btn btn-small btn-outline-info  ml-1">View</a>
                                        <a href="<?php echo site_url('admin/siswa/verifikasi/'.$product->id_siswa) ?>"
                                            class="btn btn-small btn-outline-success">Verif</a>
                                            <a href="#" 
                                                data-delete-url="<?= site_url('admin/siswa/delete/'.$product->id_siswa) ?>" 
                                                class="btn btn-outline-danger button-small" 
                                                role="button"
                                                onclick="deleteConfirm(this)">Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>







