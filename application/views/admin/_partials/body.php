<div id="wrapper">
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center mt-2" href="index.html">
            <div class="sidebar-brand-icon">
                <?php
                $avatar = $current_user->avatar ?
                    base_url('upload/avatar/' . $current_user->avatar)
                    : get_gravatar($current_user->email)
                ?>
                <img src="<?= $avatar ?>" class="img-profile rounded" alt="<?= htmlentities($current_user->name, TRUE) ?>"
                alt="NESI"
                class=""
                style="max-height: 40px;"
                />
            </div>
            <div class="sidebar-brand-text"><h5 class="small mt-2 ml-3"><span class="font-weight-bold" style="font-size:12px;"><?= htmlentities($current_user->name) ?></span><br><span style="font-size:9px;text-transform:lowercase;"><?= htmlentities($current_user->email) ?></span></h5></div>
        </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="background-color:black;">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/dashboard') ?>">
                    <b><i class="fas fa-fw fa-tachometer-alt"></i></b>
                    <span class="font-weight-bold">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="color:white;">

            <!-- Heading -->
            <div class="sidebar-heading">
                DATA
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/siswa') ?>">
                    <b><i class="fas fa-fw fa-list"></i></b>
                    <span class="font-weight-bold">Data Siswa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/user') ?>">
                    <b><i class="fas fa-fw fa-user"></i></b>
                    <span class="font-weight-bold">Data Admin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/guru') ?>">
                    <b><i class="fas fa-fw fa-users"></i></b>
                    <span class=" font-weight-bold">Data Guru</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                OPSI
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/laporan') ?>">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span class="font-weight-bold">Laporan Pemb.</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/setting') ?>">
                    <i class="fas fa-fw fa-tools"></i>
                    <span class="font-weight-bold">Setting</span></a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('auth/login_siswa') ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span class="font-weight-bold">LOG-OUT</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        
        </ul>
        <!-- End of Sidebar -->
        