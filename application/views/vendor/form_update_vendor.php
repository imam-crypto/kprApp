<div class="container-fluid">
    <div class="content-wrapper">

        <div class="card-title text-center">
            <div class="container ">
                <h4 class="text-center text-primary">Update Data</h4>
                <hr class="divider topbar-divider">
            </div>
        </div>
        <?php foreach ($vendor as $ct) : ?>
            <form action=" <?= base_url('admin/vendor/proses_update_vendor'); ?> " method="POST" enctype="multipart/form-data">
                <div class="row bg-light">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="id_vendor" class="form-control" value="<?= $ct->id_vendor ?>">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value=" <?= $ct->nama ?> " required>
                            <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>

                        </div>

                        <div class="form-group">
                            <label>Support Bagian</label>
                            <input type="text" name="support_bagian" class="form-control" value=" <?= $ct->support_bagian ?> " required>
                            <?= form_error('support_bagian', '<div class="text-small text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" required value=" <?= $ct->alamat ?> ">
                            <?= form_error('alamat', '<div class="text text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Mulai Kontrak</label>
                            <input type="text" name="mulai_kontrak" class="form-control" required value=" <?= $ct->mulai_kontrak ?> ">
                            <?= form_error('mulai_kontrak', '<div class="text text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Selesai Kontrak</label>
                            <input type="text" name="selesai_kontrak" class="form-control" required value=" <?= $ct->selesai_kontrak ?> ">
                            <?= form_error('selesai_kontrak', '<div class="text text-danger">', '</div>'); ?>
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