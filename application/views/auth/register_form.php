<body style="
    background: url('assets/img/cluster1.jpg');
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

                            <div class="container col-md-10 p-5">

                                <div class="text-center">
                                    <h1 class="h4 text-gray-100 mb-4">Registrasi Toko Ilham</h1>
                                </div>
                                <form action="<?= base_url('register/daftar') ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukan nama...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nama" name="username" placeholder="Masukan username">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukan alamat...">
                                    </div>
                                    <div class="form-group">

                                        <select name="jenisKelamin" class="form-control">
                                            <option value="">jenis kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Cewe">Cewe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="no_telepon" name="no_telepon" placeholder="Masukan no_telepon...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="no_ktp" name="no_ktp" placeholder="Masukan no_ktp...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan password...">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register
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