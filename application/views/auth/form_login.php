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

                        <div class="div">
                            <?= $this->session->flashdata('flashhh');  ?>
                        </div>
                        <div class="card-body p-0">

                            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');  ?>">
                            </div>


                            <div class="container col-md-10 p-5">

                                <div class="text-center">
                                    <h1 class="h4 text-gray-100 mb-4">Login</h1>
                                </div>

                                <form action="<?= base_url('auth/login') ?>" method="post">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" placeholder="Masukan username">
                                        <?= form_error('username', '<div class="text-danger text-small" >', '</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan password...">
                                        <?= form_error('password', '<div class="text-danger text-small" >', '</div') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="<?= base_url('register'); ?>" class="btn btn-info"> Register</a>
                                </form>


                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

    </div>