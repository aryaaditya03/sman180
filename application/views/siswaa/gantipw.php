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
            <h4 class="font-weight-bold">Ubah Password</h4>
          </div>
          <div class="card-body p-0">
            <div class="row">
              <div class="col-md-12">
                <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-800 font-weight-bold"><i class="fas fa-users"></i>HI! <?= htmlentities($current_user->nama_siswa)?></h1>
                    <p class="text-sm text-gray">Masukkan Password Baru!</p>
                </div>
                <hr class="mb-4">
                    <?php echo $this->session->flashdata('messageResPw');?>
                    <form action="<?php base_url('auth/ubah_password') ?>" method="POST"  enctype="multipart/form-data">
                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Password Baru</label>
                            <input type="password" name="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>"
                            value="<?= set_value("password") ?>" required/>
                            <div class="invalid-feedback">
                            <?= form_error('password') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirm">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirm" class="form-control <?= form_error('password_confirm') ? 'invalid' : '' ?>"
                            value="<?= set_value("password_confirm") ?>" required/>
                            <div class="invalid-feedback">
                                <?= form_error('password_confirm') ?>
                            </div>
                        </div>
                        </div>
                        <div>
                            <button id='btnsimpan' type="submit" class="btn btn-outline-info btn-block mb-2">SIMPAN DATA</button>
                        </div>
                        <div>
                            <a class="btn btn-outline-success btn-block" href="<?php echo site_url('auth/logout') ?>">Back to home!</a>
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

</body>



</html>
