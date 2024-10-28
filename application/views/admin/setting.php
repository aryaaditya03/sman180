
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<div class="container-fluid">

<div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-3 shadow-sm mb-4 p-3" style="background-color:white;">
        <li class="breadcrumb-item font-weight-bold" aria-current="page">Setting</li>
    </ol>
    
</nav>

</div>
</div>

<div id="content-wrapper">
<div class="container-fluid">

<?php echo $this->session->flashdata('messagePw');?>
<?php echo $this->session->flashdata('messageUn');?>

		<div class="row">
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card shadow-sm py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
										<h5 class="card-title text-dark">*******</h5>
                        					<p class="card-text"><small class="text-muted">Terakhir Diubah: <br><b><?= html_escape($current_user->password_updated_at) ?></b></small></p>
                                    </div>
                                    <div class="">
                                        <i class="fas fa-key pt-5 mr-5 fa-6x"  style="color:#126180;opacity:0.4;"></i>
                                    </div>
                                </div>
								<div class="my-3">
									<a href="#" data-toggle="modal" data-target="#changepwModal" class="btn btn-outline-info font-weight-bold"><i class="fas fa-user-edit"></i> Ubah Password</a>
								</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card shadow-sm py-2 border-top-primary">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
										<h5 class="card-title text-dark"><?= html_escape($current_user->username) ?></h5>
											<p class="card-text text-dark"><?= html_escape($current_user->email) ?></p>
                        						<p class="card-text"><small class="text-muted">Tanggal Akun Dibuat: <br><b><?= html_escape($current_user->created_at) ?></b></small></p>
                                    </div>
                                    <div class="">
                                        <i class="fas fa-user-alt pt-5 mr-5 fa-6x" style="color:#2e8b57;opacity:0.4;"></i>
                                    </div>
                                </div>
								<div class="my-3">
									<a href="#" data-toggle="modal" data-target="#changeunModal" class="btn btn-outline-success font-weight-bold"><i class="fas fa-user-edit"></i> Ubah Profil</a>
								</div>
                            </div>
                        </div>
                    </div>
        </div>
		</div>
        </div>
		</div>