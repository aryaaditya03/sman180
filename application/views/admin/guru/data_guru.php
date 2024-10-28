
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <div class="container-fluid">
    <div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-3 shadow-sm mb-4 p-3" style="background-color:white;">
            <li class="breadcrumb-item font-weight-bold" aria-current="page">Data Guru</li>
        </ol>
    </nav>
    </div>
    <div>
        <?= $this->session->flashdata('pesanGuru') ?>
    </div>
</div>

<div id="content-wrapper">
    <div class="container-fluid">
        <?php echo $this->session->flashdata('messageGuru');?>
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-light">
                <div class="mr-5">
                    <button type="button" class="btn btn-info shadow-sm" data-toggle="modal" data-target="#guruModal">
                        <i class='fas fa-plus'></i> <span>Tambah Guru</span>
                    </button>
                    <a href="<?= site_url('admin/guru/cetakpdf') ?>" type="button" class="btn btn-warning shadow-sm">
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
                                <th class="">Kode Guru</th>
                                <th class="">Nama guru</th>
                                <th width="" class="">Mapel</th>
                                <th width="" class="">Email</th>
                                <th width="" class="">No. Telp</th>
                                <th class="">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            ?>
                            <?php foreach ($guru as $product): ?>
                            <tr>
                                <td class=""><?php echo $no++ ?></td>
                                <td height="" class="">
                                    <?php echo $product->kode_guru ?>
                                </td>
                                <td class="">
                                    <?php echo $product->nama_guru ?>
                                </td>
                                <td class="">
                                    <?php echo $product->mapel ?>
                                </td>
                                <td class="">
                                    <?php echo $product->email ?>
                                </td>
                                <td class="">
                                    <?php echo $product->no_telp ?>
                                </td>
                                <td width="140">
                                <a href="<?php echo site_url('admin/guru/edit/'.$product->id_guru) ?>"
                                    class="btn btn-small btn-outline-info">Edit</a>
                                <a href="#" 
                                    data-delete-url="<?= site_url('admin/guru/delete/'.$product->id_guru) ?>" 
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






        