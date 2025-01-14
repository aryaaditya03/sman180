
<!-- Main Content -->
<div class="content-wrapper">
    <div class="container-fluid">

    <?php echo $this->session->flashdata('login');?>
        <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card shadow-sm border-left-primary py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            TOTAL SISWA MENDAFTAR</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_siswa; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card shadow-sm border-left-info py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            SISWA JURUSAN IPA</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_ipa; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card shadow-sm border-left-primary  py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            SISWA JURUSAN IPS</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_ips; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card shadow-sm border-left-info py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
    </div>
</div>

<script>
	function addConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#addModal').modal();
	}
</script>



