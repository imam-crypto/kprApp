<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href=" <?= base_url('admin/data_rumah/tambahDataRumah') ?> " class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i> Tambah Data Rumah</a>

        </div>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');  ?>">
        </div>



        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Customer</th>

                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Denda</th>
                            <th>Total Denda</th>
                            <th>Cek Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($transaksi as $tr) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $tr->nama ?></td>

                                <td><?= $tr->ukuran ?></td>
                                <td>Rp. <?= number_format($tr->harga, 0, ',', '.') ?></td>
                                <td>Rp. <?= number_format($tr->denda, 0, ',', '.') ?></td>
                                <td>Rp. <?= number_format($tr->total_denda, 0, ',', '.') ?></td>

                                <td> <?php if (empty($tr->bukti_pembayaran)) { ?>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                                    <?php } else { ?>
                                        <a href="<?= base_url('admin/transaksi/cek_pembayaran/' . $tr->id_booking) ?>" class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></a>
                                    <?php } ?>
                                </td>
                                <td> <?php
                                        if ($tr->status == "1") {
                                            echo "-";
                                        } else { ?>

                                        <a href=" <?= base_url('admin/transaksi/detail_customer/') . $tr->id_booking ?>  " class="btn btn-warning btn-sm "> <i class="fas fa-eye"> </i></a>
                                        <a href=" <?= base_url('admin/transaksi/transaksi_selesai/') . $tr->id_booking ?>  " class="btn btn-primary btn-sm "> <i class="fas fa-check"> </i></a>
                                        <a href=" <?= base_url('admin/transaksi/batal_transaksi/') . $tr->id_booking ?>  " class="btn btn-danger btn-sm "> <i class="fas fa-times"> </i></a>
                                    <?php } ?>
                                </td>


                            </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>