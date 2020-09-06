<div class="main-content">
    <div class="section">
        <div class="section-header">
            <div class="card m-3">
                <div class="card-header">
                    <h4 class="text text-center text-primary">Konfirmasi Pembayaran</h4>
                </div>

                <div class="card-body my-3">

                    <form action="<?= base_url('admin/transaksi/dl_pembayaran') ?>" method="POST">

                        <?php foreach ($pembayaran as $pmb) : ?>

                            <a href="<?= base_url('admin/transaksi/download_pembayaran/' . $pmb->id_booking); ?>" class="btn btn-primary"><i class="fas fa-download"> Download bukti pembayaran</i> </a>


                            <div class="custom-control custom-switch m-2">
                                <input type="hidden" name="id_booking" value="<?= $pmb->id_booking ?>">

                                <input type="checkbox" value="1" name="status_pembayaran" class="custom-control-input" id="customSwitch1">
                                <label for="customSwitch1" class="custom-control-label">Konfirmasi</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        <?php endforeach ?>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>