<div class="main-content">
    <div class="section">
        <div class="section-header">
            <div class="card m-3">
                <div class="card-header">
                    <h4 class="text text-center text-primary">Laporan</h4>
                </div>

                <div class="card-body my-3">

                    <form action="<?= base_url('admin/laporan/') ?>" method="POST">

                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="date" name="dari" class="form-control" required autofocus>
                        </div>

                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="date" name="sampai" class="form-control" required>
                        </div>

                        <button class="btn btn-outline-primary">Submit</button>
                    </form>
                    <div class="btn-group mt-3">
                        <a href="<?= base_url() . 'admin/laporan/print_laporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>" class="btn btn-success"><i class="fas fa-print"></i> print </a>
                    </div>
                </div>
            </div>

            <div class="card m-3">
                <div class="card-body m-3">
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
                                    <th>Tanggal sewa</th>
                                    <th>Tanggal selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($laporan as $tr) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $tr->nama ?></td>

                                        <td><?= $tr->ukuran ?></td>
                                        <td>Rp. <?= number_format($tr->harga, 0, ',', '.') ?></td>
                                        <td>Rp. <?= number_format($tr->denda, 0, ',', '.') ?></td>
                                        <td>Rp. <?= number_format($tr->total_denda, 0, ',', '.') ?></td>
                                        <td><?= $tr->tgl_sewa ?> </td>
                                        <td><?= $tr->tanggal_selesai ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>