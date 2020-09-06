<div class="main-content">
    <div class="section">
        <div class="section-header">
            <div class="card m-3">
                <div class="card-header">
                    <h4 class="text text-center text-primary">Transaksi Selesai</h4>
                </div>

                <div class="card-body my-3">


                    <form action="<?= base_url('admin/transaksi/transaksi_selesai_aksi') ?>" method="POST">


                        <?php foreach ($transaksi as $tr) : ?>
                            <input type="hidden" name="id_booking" value="<?= $tr->id_booking ?>">

                            <div class="form-group">
                                <label> Tanggal Selesai</label>
                                <input type="date" name="tangal_selesai " class="form-control" value="<?= $tr->tanggal_selesai ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label> Tanggal Pengembalian</label>
                                <input type="date" name="tgl_pengembalian" class="form-control">
                                <input type="hidden" name="denda" class="form-control" value="<?= $tr->denda ?>">
                            </div>
                            <div class="form-group">
                                <label>Status Pengembalian</label>
                                <select name="status_pengembalian" class="form-control">
                                    <option value="<?= $tr->status_pengembalian ?>"><?= $tr->status_pengembalian ?></option>
                                    <option value="kembali">kembali</option>
                                    <option value="belum_kembali">belum_kembali</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Status sewa</label>
                                <select name="status_sewa" class="form-control">
                                    <option value="<?= $tr->status_sewa ?>"><?= $tr->status_sewa ?></option>
                                    <option value="selesai">Selesai</option>
                                    <option value="belum_selesai">Belum_selesai</option>
                                </select>

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        <?php endforeach ?>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>