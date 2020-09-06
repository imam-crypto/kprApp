<!DOCTYPE html>
<html lang="en">

<head>
    <title>PurnamaIndustries</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href=" <?= base_url('assets/assets_admin/img/home.png') ?> ">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/jquery.fancybox.min.css">




    <link href="<?= base_url('assets/assets_admin') ?>/js/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">


        <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">




                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 "><a href="index.html" class="text-black mb-0">DevSec<span class="text-info"></span> </a></h1>
                    </div>
                    <!-- <h3 class="text text-info">Purnama Industries.</h3> -->
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="<?= base_url('customer'); ?>" class="nav-link">Home</a></li>
                                <li><a href="<?= base_url('customer/dashboard/produk') ?>" class="nav-link">product brilian</a></li>
                                <li><a href="<?= base_url('customer/transaksi ') ?>" class="nav-link">Transaksi</a></li>

                                <li class="nav-item">
                                    <?php if ($this->session->userdata('nama')) { ?>
                                        <a href="<?= base_url('auth/logout') ?>" class="nav-link">Welcome <?= $this->session->userdata('nama') ?> <span class="badge badge-danger">Logout</span> </a>
                                    <?php } else { ?>
                                        <a href=" <?= base_url('auth/login') ?> " class="nav-link"> <span class="badge badge-danger">Login</span> </a>
                                    <?php } ?>
                                </li>

                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata('nama') ?></span>

                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                        <a class="dropdown-item" href="<?= base_url('auth/ganti_password') ?>">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Ganti password
                                        </a>


                                    </div>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
    </div>

    </header>