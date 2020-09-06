<div class="container-fluid">
    <div class="content-wrapper">
        <form action=" <?= base_url('admin/vendor/proses_tambah_vendor'); ?> " method="POST">
            <div class="row bg-light">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required autofocus>
                        <?= form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Support Bagian</label>
                        <input type="text" name="support_bagian" class="form-control" required>
                        <?= form_error('support_bagian', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        <?= form_error('alamat', '<div class="text text-danger">', '</div>'); ?>
                    </div>


                    <div class="form-group">
                        <label>Mulai Kontrak</label>
                        <input type="date" name="mulai_kontrak" class="form-control pb-1" required>
                        <?= form_error('mulai_kontrak', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Selesai Kontrak</label>
                        <input type="date" name="selesai_kontrak" class="form-control pb-1" required>
                        <?= form_error('selesai_kontrak ', '<div class="text text-danger">', '</div>'); ?>
                    </div>

                    <button type="submit" class="btn btn-success mt-1 mb-4">simpan</button>
                    <button type="reset" class="btn btn-info mt-1 mb-4">reset</button>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-lg-5">
                        <div class="container">
                            <img width="500px" src=" <?= base_url('assets/img/form.jpg') ?> ">
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
</div>