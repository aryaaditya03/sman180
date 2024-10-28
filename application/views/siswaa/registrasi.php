<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi pendaftaran Siswa SMKN DARUL ULUM MUNCAR.">
  <meta name="author" content="e-development.tech">

  <title>NESI - Registrasi Siswa</title>


  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>css/sb-admin-2.min.css" rel="stylesheet">

  <link href="https://unbk.kemdikbud.go.id/assets/css/front.min.css" rel="stylesheet" />
  <link href="https://unbk.kemdikbud.go.id/vendor/chart/Chart.min.css" rel="stylesheet" />
  <!-- css datepicker -->
  <link href="<?= base_url() ?>assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />

  <style>

  .card{
    background-color: white;
  }
  .logo-login {
      max-height: 160px;
      margin-bottom: 20px;
  }
  </style>

</head>


<body class="" style="font-family:Poppins,sans-serif;background-color:#126180;">
<div class="home-banner">
  <div class="home-banner-bg home-banner-bg-img"></div>
  <div class="home-content" style="padding:20px;">
  <section style="padding:0 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card o-hidden shadow" style="background-color:#fdfff5;">
        <div class="card-header" style="background-color:#367588;">
            <h4 class="font-weight-bold">Formulir Pendaftaran</h4>
          </div>
          <div class="card-body p-0">
            <div class="row">
              <div class="col-md-12">
                <div class="p-5">
                  <form action="<?php base_url('students/registrasi') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-md-6">
                          <label for="nisn">Nisn</label>
                          <input type="text" class="form-control <?= form_error('nisn') ? 'is-invalid':'' ?>" placeholder="" name="nisn" value="<?= set_value('nisn')?>">
                        </div>
                          <div class="invalid-feedback">
                            <?= form_error('nisn') ?>
                          </div>
                        
                          <div class="col-md-6">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid':'' ?>" id="nik" placeholder="" name="nik" value="<?= set_value('nik')?>">
                          </div>
                          <div class="invalid-feedback">
                              <?= form_error('nik') ?>
                          </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" class="form-control <?= form_error('nama_siswa') ? 'is-invalid':'' ?>" id="nama_siswa" placeholder="" name="nama_siswa" value="<?= set_value('nama_siswa')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('nama_siswa') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email Anda</label>
                            <input type="email" class="form-control <?= form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="" name="email" value="<?= set_value('email')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('email') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="kota_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control  <?= form_error('kota_lahir') ? 'is-invalid':'' ?>" id="kota_lahir" placeholder="" name="kota_lahir" value="<?= set_value('kota_lahir')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('kota_lahir') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker <?= form_error('tanggal_lahir') ? 'is-invalid':'' ?>" id="tanggal_lahir" placeholder=""  name="tanggal_lahir" value="<?= set_value('tanggal_lahir')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('tanggal_lahir') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input  <?= form_error('jenis_kelamin') ? 'is-invalid':'' ?>" type="radio" name="jenis_kelamin" id="lk" value="Laki-Laki" value="<?= set_value('jenis_kelamin')?>">
                                <label class="form-check-label" for="lk">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="invalid-feedback">
                              <?= form_error('jenis_kelamin') ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input <?= form_error('jenis_kelamin') ? 'is-invalid':'' ?>" type="radio" name="jenis_kelamin" id="pr" value="Perempuan">
                                <label class="form-check-label" for="pr">
                                    Perempuan
                                </label>
                            </div>
                            <div class="invalid-feedback">
                              <?= form_error('jenis_kelamin') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control <?= form_error('agama') ? 'is-invalid':'' ?>" value="<?= set_value('agama')?>">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Budha</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('agama') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control  <?= form_error('asal_sekolah') ? 'is-invalid':'' ?>" id="asal_sekolah" placeholder="" name="asal_sekolah" value="<?= set_value('asal_sekolah')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('asal_sekolah') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control <?= form_error('jurusan') ? 'is-invalid':'' ?>" value="<?= set_value('jurusan')?>">
                                <option value="">Pilih Jurusan</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('jurusan') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control <?= form_error('alamat') ? 'is-invalid':'' ?>" value="<?= set_value('alamat')?>"></textarea>
                    </div>
                    <div class="invalid-feedback">
                      <?= form_error('alamat')?>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="no_handphone">NO HP</label>
                            <input name="no_handphone" type="text" class="form-control <?= form_error('no_handphone') ? 'is-invalid':'' ?>" id="no_handphone" placeholder="" value="<?= set_value('no_handphone')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('no_handphone') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_wali">Nama Wali</label>
                            <input type="text" class="form-control  <?= form_error('nama_wali') ? 'is-invalid':'' ?>" id="nama_wali" placeholder="" name="nama_wali" value="<?= set_value('nama_wali')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('nama_wali') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="nama_ayah" >Nama Ayah</label>
                            <input name="nama_ayah" type="text" class="form-control <?= form_error('nama_ayah') ? 'is-invalid':'' ?>" id="nama_ayah" placeholder="" value="<?= set_value('nama_ayah')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('nama_ayah') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control  <?= form_error('nama_ibu') ? 'is-invalid':'' ?>" id="nama_ibu" placeholder="" name="nama_ibu" value="<?= set_value('nama_ibu')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('nama_ibu') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control <?= form_error('password') ? 'is-invalid':'' ?>" id="password" placeholder="" value="<?= set_value('password')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('password') ?>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="ulangi_password">Ulangi Password</label>
                            <input name="ulangi_password" type="password" class="form-control <?= form_error('ulangi_password') ? 'is-invalid':'' ?>" id="ulangi_password" placeholder="" value="<?= set_value('ulangi_password')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('ulangi_password') ?>
                        </div>
                    </div>
                    <hr>
                    <div>
                      <button onlick="submitConfirm" name="btn_registrasi" value="simpan" class="btn btn-outline-success btn-user btn-block">
                        Submit
                      </button>
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
  </section>

  

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- js datepicker -->
  <script src="<?= base_url() ?>assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function(){
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: false,
        }).on('change.datepicker', function (ev) {
            console.log('tes');
        });
    });
  </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<?php if($this->session->flashdata('RegGagal')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'error',
				title: '<?= $this->session->flashdata('RegGagal') ?>'
			})
		</script>
	<?php endif ?>

  <?php if($this->session->flashdata('RegSukses')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('RegSukses') ?>'
			})
		</script>
	<?php endif ?>
</body>



</html>
