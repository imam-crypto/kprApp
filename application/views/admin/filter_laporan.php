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

                </div>

            </div>
        </div>

    </div>
</div>