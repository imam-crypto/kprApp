<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href=" <?= base_url('admin/vendor/tambah_vendor') ?> " class="btn btn-info btn-sm"> <i class="fas fa-plus"></i> Tambah Data vendor</a>

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
                            <th>Nama</th>
                            <th>Support_bagian</t>
                            <th>Alamat</th>
                            <th>Mulai kontrak</th>
                            <th>Selesai kontrak</th>
                            <th>Action</>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($vendor as $vr) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $vr->nama ?></td>
                                <td><?= $vr->support_bagian ?> </td>
                                <td><?= $vr->alamat ?></td>
                                <td><?= $vr->mulai_kontrak ?></td>
                                <td><?= $vr->selesai_kontrak ?></td>

                                <td> <a href=" <?= base_url('admin/vendor/detail_vendor/') . $vr->id_vendor ?> " class="btn btn-info btn-sm "> <i class="fas fa-eye"></i></a>

                                    <a href=" <?= base_url('admin/vendor/update_vendor/') . $vr->id_vendor ?> 
                                    " class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>

                                    <a href=" <?= base_url('admin/vendor/hapus_vendor/') . $vr->id_vendor ?> " class="btn btn-danger btn-sm tombol-hapus" id="tombol-hapus"> <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>