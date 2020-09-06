<div class="container-fluid">
    <div class="content-wrapper">
        <form action=" <?= base_url('admin/data_customer/proses_tambah_customer'); ?> " method="POST" enctype="multipart/form-data">
            <div class="row bg-light">
                <div class="col-md-6">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                        <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="username" class="form-control" required>
                        <?= form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        <?= form_error('kode_type', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="">----</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<div class="text text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label>No telepon</label>
                        <input type="text" name="no_telepon" class="form-control" required>
                        <?= form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>No ktp</label>
                        <input type="text" name="no_ktp" class="form-control" required>
                        <?= form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        <?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <button type="submit" class="btn btn-success mt-1 mb-4">simpan</button>
                    <button type="reset" class="btn btn-info mt-1 mb-4">reset</button>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-lg-5">
                        <div class="container">
                            <img width="500px" src=" <?= base_url('assets/img/gbr1.png') ?> ">
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
</div>