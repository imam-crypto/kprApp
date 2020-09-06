<div class="container-fluid">
    <div class="content-wrapper">
        <form action=" <?= base_url('admin/data_rumah/proses_tambah_rumah'); ?> " method="POST" enctype="multipart/form-data">
            <div class="row bg-light">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control">
                        <label>Kode type</label>
                        <select name="kode_type" class="form-control">
                            <option value="">pilih type rumah</option>
                            <?php foreach ($type as $tp) : ?>
                                <option value="<?= $tp->kode_type ?>"><?= $tp->nama_type ?></option>
                            <?php endforeach; ?>
                            <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ukuran</label>
                        <input type="text" name="ukuran" class="form-control" required>
                        <?= form_error('ukuran', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" name="warna" class="form-control" required>
                        <?= form_error('kode_type', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>No Rumah</label>
                        <input type="text" name="no_rumah" class="form-control" required>
                        <?= form_error('no_rumah', '<div class="text text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label>status</label>
                        <select class="form-control" name="status">
                            <option value="">-- Pilih Status</option>
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                        <?= form_error('status', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control pb-1" required>
                        <?= form_error('harga', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Denda</label>
                        <input type="text" name="denda" class="form-control pb-1" required>
                        <?= form_error('denda', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Pembangunan</label>
                        <input type="text" name="jumlah_pembangunan" class="form-control pb-1" required>
                        <?= form_error('jumlah_pembangunan', '<div class="text text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control pb-1" required>
                        <?= form_error('gambar', '<div class="text text-danger">', '</div>'); ?>
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