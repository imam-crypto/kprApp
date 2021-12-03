<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center " href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <span class="sidebar-brand-text text-xs text-decoration-none  align-center">Purnama Industries
                    <sup>tbk</sup></span>
            </a>




            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class=" nav-link" href="<?= base_url('admin/dashboard') ?> ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-light">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data All
            </div>

            <li class="nav-item">
                <a class="nav-link " href=" <?= base_url('admin/data_rumah') ?> ">
                    <i class="fas fa-home"></i>
                    <span class="text-light "> Data Rumah</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href=" <?= base_url('admin/data_karyawan') ?> ">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Karyawan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/vendor') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Vendor</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/notaris') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Notaris</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Transaksi

            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href=" <?= base_url('admin/data_customer') ?> ">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Customer</span></a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('admin/transaksi') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin/transaksi') {
                                                                                    echo "active";
                                                                                } ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Transaksi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href=" <?= base_url('admin/laporan') ?> ">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Laporan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-detail">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white  topbar mb-4 static-top ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">



                                </span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>

                                <?php foreach ($getbaca as $gb): ?>
                                <?php foreach ($get as $gt): ?>
                                <?php if($gt->id_berita != $gb->id_berita){ ?>

                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"> <?= $gb->judul ?> </div>
                                        <span class="font-weight-bold"><?= $gb->judul ?> </span>
                                    </div>
                                </a>
                                <?php }else{ ?>



                                <?php } ?>
                                <?php endforeach ?>
                                <?php endforeach ?>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>


                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama') ?></span>
                                <img class="img-profile rounded-circle"
                                    src=" <?= base_url('assets/assets_admin/img/home.png') ?> ">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href=" <?= base_url('auth/ganti_password') ?> ">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti password
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logo
                                    ut
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->->
