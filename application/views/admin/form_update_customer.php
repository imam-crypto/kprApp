<div class="container-fluid">
    <div class="content-wrapper">

        <div class="card-title text-center">
            <div class="container ">
                <h4 class="text-center text-primary">Update Data</h4>
                <hr class="divider topbar-divider">
            </div>
        </div>
        <?php foreach ($customer as $ct) : ?>
            <form action=" <?= base_url('admin/data_customer/proses_update_customer'); ?> " method="POST" enctype="multipart/form-data">
                <div class="row bg-light">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="id_customer" class="form-control" value="<?= $ct->id_customer ?>">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value=" <?= $ct->nama ?> " required>
                            <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>

                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value=" <?= $ct->username ?> " required>
                            <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" required value=" <?= $ct->alamat ?> ">
                            <?= form_error('alamat', '<div class="text text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required value=" <?= $ct->no_telepon ?> ">
                            <?= form_error('jenis_kelamin', '<div class="text text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" name="no_telepon" class="form-control" required value=" <?= $ct->no_telepon ?> ">
                            <?= form_error('kode_type', '<div class="text text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>No KTP</label>
                            <input type="text" name="no_ktp" class="form-control" value="<?= $ct->no_ktp ?>" required>
                            <?= form_error('no_ktp', '<div class="text text-danger">', '</div>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control pb-1" value="<?= $ct->password ?>" required>
                            <?= form_error('password', '<div class="text text-danger">', '</div>'); ?>
                        </div>
                        <button type="submit" class="btn btn-success mt-1 mb-4">simpan</button>
                        <button type="reset" class="btn btn-info mt-1 mb-4">reset</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-lg-5">
                            <div class="container">
                                <img width="500px" src=" <?= base_url('assets/img/gbr3.png') ?> ">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        <?php endforeach; ?>

    </div>
</div>