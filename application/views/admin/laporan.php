        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <div class="container-fluid">

            <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3 shadow-sm mb-4 p-3" style="background-color:white;">
                    <li class="breadcrumb-item font-weight-bold" aria-current="page">Laporan</li>
                </ol>
                
            </nav>
            
            </div>
        </div>

<div id="content-wrapper">

    <div class="container-fluid">

    <?php echo $this->session->flashdata('messageLaporan');?>
                <div class="card shadow-sm mb-5">
                    <div class="card-header bg-gray">
                        <div class="mr-5">
                        <a href="<?= site_url('admin/laporan/cetakpdf') ?>" type="button" class="btn btn-warning shadow-sm">
                            <i class='fas fa-print'></i> <span>Cetak</span>
                        </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table bg-light table-bordered" id="dataTable" width="100%">
                                <thead class="thead">
                                    <tr>
                                        <th width="" class="">No</th>
                                        <th class="">Nama</th>
                                        <th class="">NISN</th>
                                        <th class="">ID PEMB</th>
                                        <th class="">Bukti</th>
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
                                            <?php echo $product->nama_siswa ?>
                                        </td>
                                        <td width="" height="" class="">
                                            <?php echo $product->nisn ?>
                                        </td>
                                        <td width="" height="" class="">
                                            <?php echo $product->id_pembayaran ?>
                                        </td>
                                        <td width="" class="text-center">
                                            <img src="<?php echo base_url(); ?>./img/uploads/bukti/<?php echo $product->bukti; ?>" width="80" height="120"/>
                                        </td>
                                        <td width="150">
                                        <a href="<?php echo site_url('admin/laporan/verifikasi/'.$product->id_siswa) ?>"
                                            class="btn btn-small btn-outline-success btn-block ml-1 mr-1">Verif</a>
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







