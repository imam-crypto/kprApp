<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href=" <?= base_url('admin/data_rumah/tambahDataRumah') ?> " class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i> Tambah Data Rumah</a>

        </div>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');  ?>">
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <!-- <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-primary alert-dismissible fade show m-2" role="alert">
                        <strong> Data Berhasil </strong> <?= $this->session->flashdata('flash');  ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div> -->
        <?php endif; ?>

        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>kode type</th>
                            <th>ukuran</th>
                            <th>no rumah</th>
                            <th>warna</th>
                            <th>status</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($rumah as $rm) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $rm->kode_type ?></td>
                                <td><?= $rm->ukuran ?></td>
                                <td><?= $rm->no_rumah ?></td>
                                <td><?= $rm->warna ?></td>
                                <td><?php
                                    if ($rm->status == "0") {
                                        echo "<span class= 'badge badge-danger'> tidak tersedia</span>";
                                    } else {
                                        echo "<span class= 'badge badge-primary'>tersedia</span>";
                                    } ?></td>



                                <td> <a href=" <?= base_url('admin/data_rumah/detail_rumah/') . $rm->id_rumah ?> " class="btn btn-info btn-sm "> <i class="fas fa-eye"></i></a>

                                    <a href=" <?= base_url('admin/data_rumah/update_rumah/') . $rm->id_rumah ?> 
                                    " class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>

                                    <a href=" <?= base_url('admin/data_rumah/hapus_rumah/') . $rm->id_rumah ?> " class="btn btn-danger btn-sm tombol-hapus" id="tombol-hapus"> <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>