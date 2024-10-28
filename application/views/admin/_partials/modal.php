<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('auth/logoutadmin') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">DATA YANG DIHAPUS TIDAK BISA DIKEMBALIKAN.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda sudah yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-confirm" class="btn btn-success" type="submit">Konfirmasi</a>
      </div>
    </div>
  </div>
</div>

<!-- login modal -->
<div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fw fa-key"></i> &nbsp;LOGIN MEMBER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('auth/login'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Log in</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="changepwModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fw fa-key"></i> &nbsp;GANTI PASSWORD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/setting/changePassword') ?>" method="POST"  enctype="multipart/form-data">
						<div class="form-group row">
							<div class="col-md-6">
                                <label for="current_password">Password Saat Ini</label>
					            <input type="password" name="current_password" class="form-control <?= form_error('current_password') ? 'invalid' : '' ?>"
                                value="" required/>
                                <div class="invalid-feedback">
                                <?= form_error('current_password') ?>
                                </div>
							</div>
				            <div class="col-md-6">
                                <label for="password_confirm1">Konfirmasi Password Saat Ini</label>
                                <input type="password" name="password_confirm" class="form-control <?= form_error('password_confirm1') ? 'invalid' : '' ?>"
                                value="" required/>
                                <div class="invalid-feedback">
                                    <?= form_error('password_confirm1') ?>
                                </div>
							</div>
							</div>
							<div class="form-group row">
							<div class="col-md-6">
                                <label for="password">Password Baru</label>
					            <input type="password" name="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>"
                                value="" required/>
                                <div class="invalid-feedback">
                                <?= form_error('password') ?>
                                </div>
							</div>
				            <div class="col-md-6 mb-3">
                                <label for="password_confirm">Konfirmasi Password Baru</label>
                                <input type="password" name="password_confirm" class="form-control <?= form_error('password_confirm') ? 'invalid' : '' ?>"
                                value="" required/>
                                <div class="invalid-feedback">
                                    <?= form_error('password_confirm') ?>
                                </div>
							</div>
							</div>
							<div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
								<button type="submit" name="save" class="btn btn-outline-success">Save Update</button>
              </div>
							</div>
						</form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="changeunModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fw fa-user"></i> &nbsp;GANTI PROFILE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('admin/setting/edit_profile') ?>" method="POST"  enctype="multipart/form-data">
							<div class="form-group">
								<label for="username">Name</label>
								<input type="text" name="username" class="form-control <?= form_error('username') ? 'invalid' : '' ?>"
								value="<?= form_error('username') ? set_value('username') : $current_user->username ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>
							<div class="form-group mb-4">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control <?= form_error('email') ? 'invalid' : '' ?>"
								value="<?= form_error('email') ? set_value('email') : $current_user->email ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('email') ?>
								</div>
							</div>

							<div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
								<button type="submit" name="save" class="btn btn-outline-success">Save Update</button>
              </div>
						</form>
            </div>
        </div>
    </div>
</div>

<!-- login modal -->
<div class="modal fade" tabindex="-1" id="adminModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fw fa-plus"></i> &nbsp;Tambah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?= ('user/tambahData') ?>" method="post" enctype="multipart/form-data" >
                <div class="form-group row">
								<div class="col-md-6">
									<label for="name">Nama User</label>
									<input class="form-control <?= form_error('name') ? 'invalid':'' ?>"
									type="text" name="name" min="0" placeholder="Nama Lengkap" value=""/>
									<div class="invalid-feedback">
										<?= form_error('name') ?>
									</div>
								</div>
							

								<div class="col-md-6">
									<label for="email">Email</label>
									<input class="form-control <?= form_error('email') ? 'is-invalid':'' ?>"
									type="text" name="email" min="0" placeholder="Email" value=""/>
									<div class="invalid-feedback">
										<?= form_error('email') ?>
									</div>
								</div>
							</div>

						<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="username">Username</label>
								<input class="form-control <?= form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" min="0" placeholder="Username" />
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>
							
							<div class="col-md-6">
								<label for="password">Password</label>
								<input class="form-control <?= form_error('password') ? 'is-invalid':'' ?>"
									type="password" name="password" min="0" placeholder="Password" />
								<div class="invalid-feedback">
									<?= form_error('password') ?>
								</div>
							</div>
						</div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline-primary">Submit</button>
              </div>
						</form>
        </div>
    </div>
    </div>
</div>

<!-- login modal -->
<div class="modal fade" tabindex="-1" id="guruModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fw fa-plus"></i> &nbsp;Tambah Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('guru/add') ?>" method="POST"  enctype="multipart/form-data">
							<div class="form-group row">
                            <div class="col-md-6">
								<label for="kode_guru">Kode Guru</label>
								<input type="text" name="kode_guru" class="form-control <?= form_error('kode_guru') ? 'invalid' : '' ?>"
								value="<?= set_value('kode_guru')?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('kode_guru') ?>
								</div>
                            </div>
							<div class="col-md-6">
								<label for="nama_guru">Nama Guru</label>
								<input type="text" name="nama_guru" class="form-control <?= form_error('nama_guru') ? 'invalid' : '' ?>"
								value="<?= set_value('nama_guru')?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('nama_guru') ?>
								</div>
							</div>
                </div>
                <div class="form-group row mb-4">
                <div class="col">
								<label for="mapel">Mapel</label>
								<input type="text" name="mapel" class="form-control <?= form_error('mapel') ? 'invalid' : '' ?>"
								value="<?= set_value('mapel')?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('mapel') ?>
								</div>
                            </div>
							<div class="col">
								<label for="email">Email Guru</label>
								<input type="text" name="email" class="form-control <?= form_error('email') ? 'invalid' : '' ?>"
								value="<?= set_value('email')?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('email') ?>
								</div>
							</div>
                            <div class="col">
								<label for="no_telp">No Telp Guru</label>
								<input type="tel" name="no_telp" class="form-control <?= form_error('no_telp') ? 'invalid' : '' ?>"
								value="<?= set_value('no_telp')?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('no_telp') ?>
								</div>
							</div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline-primary">Log in</button>
              </div>          
              </div>
						</form>
        </div>
    </div>
    </div>
</div>

<!-- login modal -->
<div class="modal fade" tabindex="-1" id="guruEditModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fw fa-plus"></i> &nbsp;Edit Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="<?= ('guru/edit_data') ?>" method="POST"  enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="kode_guru">Kode Guru</label>
                    <input type="text" name="kode_guru" class="form-control <?= form_error('kode_guru') ? 'invalid' : '' ?>"
                    value="<?= form_error('kode_guru') ? set_value('kode_guru') : $current_user->name ?>" 
                    />
                  <div class="invalid-feedback">
                    <?= form_error('kode_guru') ?>
                  </div>
                  </div>
                  <div class="col-md-6">
                    <label for="nama_guru">Nama Guru</label>
                    <input type="text" name="nama_guru" class="form-control <?= form_error('nama_guru') ? 'invalid' : '' ?>"
                    value="<?= form_error('nama_guru') ? set_value('nama_guru') : $current_user2->nama_guru ?>" 
                    />
                  <div class="invalid-feedback">
                    <?= form_error('nama_guru') ?>
                  </div>
                </div>
                  </div>
                  <div class="form-group row mb-4">
                    <div class="col">
                      <label for="mapel">Mapel</label>
                      <input type="text" name="mapel" class="form-control <?= form_error('mapel') ? 'invalid' : '' ?>"
                      value="<?= form_error('mapel') ? set_value('mapel') : $current_user2->mapel ?>" 
                      />
                    <div class="invalid-feedback">
                      <?= form_error('mapel') ?>
                    </div>
                    </div>
                    <div class="col">
                      <label for="email">Email Guru</label>
                      <input type="text" name="email" class="form-control <?= form_error('email') ? 'invalid' : '' ?>"
                      value="<?= form_error('email') ? set_value('email') : $current_user2->email ?>" 
                      />
                    <div class="invalid-feedback">
                      <?= form_error('email') ?>
                    </div>
                  </div>
                    <div class="col">
                      <label for="no_telp">No Telp Guru</label>
                      <input type="tel" name="no_telp" class="form-control <?= form_error('no_telp') ? 'invalid' : '' ?>"
                      value="<?= form_error('no_telp') ? set_value('no_telp') : $current_user2->no_telp ?>" 
                      />
                      <div class="invalid-feedback">
                        <?= form_error('no_telp') ?>
                      </div>
							      </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline-primary">Log in</button>
              </div>
              </div
							</div>
              </div>
						</form>
        </div>
    </div>
    </div>
</div>