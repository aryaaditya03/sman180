
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <div class="container-fluid">

            <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3 shadow-sm mb-4 p-3" style="background-color:white;">
                    <li class="breadcrumb-item font-weight-bold" aria-current="page">Data Admin</li>
                </ol>
            </nav>
            </div>
            <div>
                <?= $this->session->flashdata('pesanUser') ?>
            </div>
        </div>

<div id="content-wrapper">
    <div class="container-fluid">
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-light">
                <div class="mr-5">
                    <button type="button" class="btn btn-info shadow-sm" data-toggle="modal" data-target="#adminModal">
                        <i class='fas fa-plus'></i> <span>Tambah Admin</span>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead">
                            <tr>
                                <th class="">No</th>
                                <th class="">Nama Lengkap</th>
                                <th class="">Email</th>
                                <th class="">Username</th>
                                <th class="">Last Login</th>
                                <th class="">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            ?>
                            <?php foreach ($user as $product): ?>
                            <tr>
                                <td width="" class=""><?php echo $no++ ?></td>
                                <td width="" class="">
                                    <?php echo $product->name ?>
                                </td>
                                <td width="" class="">
                                    <?php echo $product->email ?>
                                </td>
                                <td width="" class="">
                                    <?php echo $product->username ?>
                                </td>

                                <td width="" class="">
                                    <?php echo $product->last_login ?>
                                </td>
                                <td width="50">
                                    <a href="#" 
                                        data-delete-url="<?= site_url('admin/user/delete/'.$product->id_user) ?>" 
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





