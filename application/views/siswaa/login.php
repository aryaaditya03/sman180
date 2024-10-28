<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NESI - Login</title>

    <style>

    .body{
        background-color:#2c3e50;
    }

    .logo-login {
        max-height: 160px;
        margin-bottom: 20px;
    }
    </style>


    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://unbk.kemdikbud.go.id/assets/css/front.min.css" rel="stylesheet" />
    <link href="https://unbk.kemdikbud.go.id/vendor/chart/Chart.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />

</head>

<body class="" style="font-family:Poppins,sans-serif;background-color:#126180;">
<div class="home-banner">
  <div class="home-banner-bg home-banner-bg-img"></div>
  <div class="home-content" style="padding:20px;">
  <section style="padding:0 0;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12 col-md-4 align-items-center justify-content-center">
                <div class="card o-hidden shadow-sm my-5">
                <div class="card-header" style="background-color:#367588;">
                    <h4 class="font-weight-bold">Cek Data</h4>
                </div>
                    <div class="card-body p-0">
                        <div class="row">         
                            <div class="col-lg">
                                <div class="p-5">
                                    <?php echo $this->session->flashdata('messageLoginSiswa');?>
                                    <form action="<?php base_url('auth/cekData') ?>" method="post">
                                    <form class="user">
                                        <div class="form-group"> 
                                            <input type="text" name="email"class="form-control form-control-user"
                                                placeholder="Masukkan nisn anda...." value="<?= set_value('email') ?>">
                                            <div class="invalid-feedback">
					                            <?= form_error('email') ?>
				                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Submit
                                        </button>
                                    <hr>
                                    <div class="text-center">
                                        <q>selalu semangat menjalani hari!</q>
                                    </div>
                                    <div class="text-center">
                                        <a class="small text-white">Create an Account!</a>
                                    </div>
                                    </form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!--JAVASCRIPT -->
<?php $this->load->view("admin/_partials/js.php") ?>
<script>
    $(t').alert().delay(3000).slideUp('slow');
</script>


</html>