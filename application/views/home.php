<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB ONLINE</title>
  
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    

    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />
    <!-- Custom styles for this template-->
    
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('js/sb-admin-2.min.js') ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/1.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/2.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/3.css') ?>">
      
    <link rel="stylesheet" href="<?php echo base_url('assets/css/components2.css') ?>">

    <link href="https://unbk.kemdikbud.go.id/vendor/chart/Chart.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
        
    <link href="https://unbk.kemdikbud.go.id/assets/css/front.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/fontawesome/css/all.min.css">
    <!--WAKTU JALAN-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/animate/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/vendor/countdowntime/flipclock.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/main.css')?>">


  </head>
  <body>
    <header>
      <nav
        class="navbar navbar-expand-lg navbar-light bg-white pt-3 shadow pb-3" style="position:fixed;width:100%;z-index:1;right:0;top:0;display:flex;margin:auto;">
        <div class="container">
          <a class="navbar-brand" href="#"></a>
          <img src="<?php echo base_url() ?>img/sman180.png" height="50" />
                            <div class="d-none d-sm-block mt-1 font-weight-bold">
                                <h6>SMAN 180 Jakarta - PPDB</h6>
                            </div>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto text-dark">
              <a class="nav-item nav-link mr-3" href="#syaratModal" data-toggle="modal" data-target="#syaratModal">Informasi</a>
              <a class="nav-item nav-link mr-3" data-target="#tentang" href="#tentang">Tentang</a>
              <a class="nav-item nav-link mr-3" href="#data" data-target="#data">Statistik</a>
              <a class="btn btn-info rounded" href="#register" data-target="#register">Why?</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section style="padding-top:40px;">
    <div class="home-banner" >
        <div class="home-banner-bg home-banner-bg-color" style="background:linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(54,117,136,1) 35%, rgba(143,212,226,1) 100%);"></div>
        <div class="home-banner-bg home-banner-bg-img" ></div>
      <div class="container mt-5">
        <div class="row pb-1">
          <div class="col-md-6">
            <h5 class="text-main pt-4 text-white">#NESI</h5>
            <h2 class="text-main h1 mb-3 font-weight-bold text-white">
              APLIKASI PPDB ONLINE <br />
              SMAN 180 JAKARTA
            </h2>

            <p class="text-main mb-5 text-white">
              Untuk calon pendaftar tahun ajaran 2023/2024 bisa mendaftar
              <br>melalui website ini atau langsung datang ke tempat pendaftaran
            </p>

            <a href="<?php echo site_url('students/registrasi/regis') ?>" class="btn-reg btn btn-outline-light btn-lg shadow rounded-pill font-weight-bold mt-4"
              >DAFTAR SEKARANG</a
            >
          </div>
          

          <div class="col-lg-6 d-none d-sm-block">
            <div class="card o-hidden shadow border-info">
                    <div class="card-body" style="background-color:#fdfff5;">
                        <div class="row">         
                            <div class="col-lg">
                                <div class="p-4">
                                      <div class="text-center">
                                        <h1 class="h4 text-gray-1200 font-weight-bold"><i class="fas fa-users"></i> &nbsp;HALAMAN LOGIN SISWA</h1>
                                        <p class="text-sm text-gray">-- HI NEW STUDENT! --</p>
                                      </div>
                                    <form action="<?= base_url('auth/login_siswa') ?>" method="post">
                                    <form class="user">
                                        <div class="form-group"> 
                                            <input type="email" name="email"class="form-control form-control-user"
                                                placeholder="Enter email" value="<?= set_value('email') ?>">
                                            <div class="invalid-feedback">
					                            <?= form_error('email') ?>
				                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                 placeholder="Password" value="<?= set_value('password') ?>" required >
                                            <div class="invalid-feedback">
					                            <?= form_error('password') ?>
				                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-dark" href="<?= site_url('auth/sendEmail') ?>">Lupa Password? Click here!</a>
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
    </section>

    <div class="home-content" style="padding-top:60px;">
      <section id="register">
        <div class="container">  
          <div class="row">
            <div class="col-sm-13 d-flex align-items-center">
							<div class="col-md-12">
              <div class="text-center mb-5">
          <h3 class="font-weight-bold badge badge-info shadow" style="font-size:30px;">
            KENAPA PILIH
            <span style="color:#003153;">SMAN 180 Jakarta ?</span>
          </h3>
          <p class="badge badge-info shadow text-gray"  style="font-size:15px;background-color:#367588;">Alasan kenapa harus masuk sekolah ini!!!</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="fasilitas">
              <div class="description">
                <h5>Guru Friendly Dan Ramah</h5>
                <p>
                  Guru yang ramah akan membuat KBM menjadi lebih seru,
                  berkualitas dan murid akan menjadi lebih enjoy.
                </p>
              </div>
              <div class="icon-des">
                <i class="fas fa-users text-dark mt-3 ml-2" style="font-size:50px;"></i>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="fasilitas active">
              <div class="description icon-left">
                <h5>Fasilitas Lengkap</h5>
                <p>
                  Fasilitas penunjang KBM yang lengkap dan berkualitas premium
                  akan memudahkan kalian dalam belajar.
                </p>
              </div>
              <div class="icon-des">
                <img
                  src="assets/img/icons/book.svg"
                  alt="buku"
                  class="img-fluid d-block mx-auto"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="fasilitas">
              <div class="description">
                <h5>Fasilitas Lengkap</h5>
                <p>
                  Fasilitas penunjang KBM yang lengkap dan berkualitas premium
                  akan memudahkan kalian dalam belajar.
                </p>
              </div>
              <div class="icon-des">
                <img
                  src="assets/img/icons/building.svg"
                  alt="bangunan"
                  class="img-fluid d-block mx-auto"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="fasilitas">
              <div class="description icon-left">
                <h5>Fasilitas Lengkap</h5>
                <p>
                  Fasilitas penunjang KBM yang lengkap dan berkualitas premium
                  akan memudahkan kalian dalam belajar.
                </p>
              </div>
              <div class="icon-des">
                <img
                  src="assets/img/icons/proyektor.svg"
                  alt="proyektor"
                  class="img-fluid d-block mx-auto"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="fasilitas">
              <div class="description">
                <h5>Fasilitas Lengkap</h5>
                <p>
                  Fasilitas penunjang KBM yang lengkap dan berkualitas premium
                  akan memudahkan kalian dalam belajar.
                </p>
              </div>
              <div class="icon-des">
                <img
                  src="assets/img/icons/check.svg"
                  alt="check"
                  class="img-fluid d-block mx-auto"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="fasilitas">
              <div class="description icon-left">
                <h5>Fasilitas Lengkap</h5>
                <p>
                  Fasilitas penunjang KBM yang lengkap dan berkualitas premium
                  akan memudahkan kalian dalam belajar.
                </p>
              </div>
              <div class="icon-des">
                <img
                  src="assets/img/icons/people.svg"
                  alt="orang"
                  class="img-fluid d-block mx-auto"
                />
              </div>
            </div>
          </div>
                  
									
								</div>
							</div>
              </div>
              
              </div>
              </div>
          </div>
      </div>
  </section>

<!-- login modal -->
<div class="modal fade" tabindex="-1" id="syaratModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: green; font-weight:bold;">Alur Dan Syarat Pendaftaran PPDB</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <img src="img/sekolah/alur.jpeg" align="center" width="600" style="max-width: 100%" />
              <hr>
                    <h4>&nbsp;Alur Pendaftaran</h4>
                    <p><ol style="font-size: 10px">
                        <li>Registrasi di halaman home.</li>
                        <li>Login Menggunakan Email & Password.</li>
                        <li>Lengkapi data-data.</li>
                        <li>Upload Ijazah, SKHUN, Dan Nilai.</li>
                        <li>Melakukan Pembayaran LKS.</li>
                        <li>Melakukan Tes Ujian.</li>
                        <li>Menunggu Hasil.</li>
                      </ol>
                    </p>
                    <hr>
                    <h4>&nbsp;Syarat Pendaftaran</h4>
                    <p><ul style="font-size: 10px">
                        <li>Data Pribadi</li>
                        <li>Data Orang Tua</li>
                        <li>Ijazah, SKHUN, & Hasil Nilai. (Berbentuk Digital)</li>
                      </ul>
                    </p>
            </div>
        </div>
    </div>
</div>

<section class="statistik" id="data" style="background:linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(54,117,136,1) 35%, rgba(143,212,226,1) 100%);">
  <div class="container">
      <h5 class="text-center text-white">Data Pendaftar </h5>
      <h6 class="text-center text-white pb-4">Peserta Didik Baru Tahun 2024</h6>
      <div class="row">
        <div class="col-md-4 text-center">
          <h3 class="text-white font-weight-bold h1"><?php echo $total_siswa; ?></h3>
          <p class="text-white">TOTAL PENDAFTAR</p>
        </div>
        <div class="col-md-4 text-center">
          <h3 class="text-white font-weight-bold h1"><?php echo $total_ipa; ?></h3>
          <p class="text-white">IPA</p>
        </div>
        <div class="col-md-4 text-center">
          <h3 class="text-white font-weight-bold h1"><?php echo $total_ips; ?></h3>
          <p class="text-white">IPS</p>
        </div>
      </div>
    </div>    
</section>

    

<section class="tentang" id="tentang">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img
          src="<?php echo base_url() ?>assets/img/undraw_edu.svg"
          alt="tentang sekolah"
          class="img-fluid mx-auto d-block"
          height="25"
        />
      </div>
      <div class="col-md-6">
        <h3 class="font-weight-bold mb-3 mt-5">TENTANG SMAN 180 JAKARTA</h3>
        <p class="deskripsi">
          SMAN 180 Jakarta Adalah Sekolah menengah atas negeri yang berdiri sejak
          2003. SMAN-180 Adalah Sekolah menengah kejuruan negeri yang berdiri
          sejak 2003. SMAN-180 Adalah Sekolah menengah kejuruan negeri yang
          berdiri sejak 2003. SMKNDU Adalah Sekolah menengah kejuruan negeri
          yang berdiri sejak 2003.
        </p>

        <p class="font-weight-bold mt-4">Kontak Kami</p>
        <ul class="social">
          <li>
            <a href="tel:082302002407">
              <img src="assets/img/icons/telephone.svg" alt="telephone" />
            </a>
          </li>
          <li>
            <a href="mailto:est23.edi@gmail.com">
              <img src="assets/img/icons/email.svg" alt="email" />
            </a>
          </li>
          <li>
            <a href="https://facebook.com/est23.edi">
              <img src="assets/img/icons/facebook.svg" alt="facebook" />
            </a>
          </li>
          <li>
            <a href="https://smkndu.sch.id">
              <img src="assets/img/icons/internet.svg" alt="website" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
    </div>
    <footer>
      <div class="text-center py-3 bg-light">
        <div class="container">
          <span class="text-muted">Copyright @2023 NewStudentInformation</span>
        </div>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- js datepicker -->
    <script src="<?= base_url() ?>assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if($this->session->flashdata('pesan')): ?>
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

			Swal.fire({
				icon: 'error',
				title: '<?= $this->session->flashdata('pesan') ?>',
        text:'Silahkan coba lagi!'
			})
		</script>
	<?php endif ?>
  <?php if($this->session->flashdata('pesan')): ?>
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

			Swal.toast({
				icon: 'success',
				title: '<?= $this->session->flashdata('pesanlog') ?>',
			})
		</script>
	<?php endif ?>
    
  </body>
  <script>
    $('.alert').alert().delay(3000).slideUp('slow');
  </script>
</html>
