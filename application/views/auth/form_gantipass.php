<body style="
    background: url('../assets/img/cluster1.jpg');
    background-size: cover;">
    <div class="container">


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-8 col-md-8 mt-4 ">
                <div class="container">

                    <div class="card  my-4 mt-4 p-3" style="
            background: rgba(255, 255, 255, .2);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .4);
            ">


                        <div class="card-body p-0">

                            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');  ?>">
                            </div>


                            <div class="container col-md-10 p-5">

                                <div class="text-center">
                                    <h1 class="h4 text-gray-100 mb-4">Ganti Password</h1>
                                </div>

                                <form action="<?= base_url('auth/ganti_password_aksi') ?>" method="post">

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="pass_baru" placeholder="Masukan Password baru">
                                        <?= form_error('pass_baru', '<div class="text-danger text-small" >', '</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="ulang_pass" placeholder="Ulangi Password...">
                                        <?= form_error('ulang_pass', '<div class="text-danger text-small" >', '</div') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Ganti Password
                                    </button>
                                    <hr>

                                </form>


                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

    </div>