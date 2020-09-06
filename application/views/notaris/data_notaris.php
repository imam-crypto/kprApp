<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href=" <?= base_url('admin/notaris/tambah_notaris') ?> " class="btn btn-info btn-sm"> <i class="fas fa-plus"></i> Tambah Data notaris</a>

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
                            <th>Alamat</t>
                            <th>Spesialis</th>
                            <th>Action</>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($notaris as $nt) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $nt->nama ?></td>
                                <td><?= $nt->alamat ?> </td>
                                <td><?= $nt->spesialis ?></td>


                                <td> <a href=" <?= base_url('admin/notaris/detail_notaris/') . $nt->id_notaris ?> " class="btn btn-info btn-sm "> <i class="fas fa-eye"></i></a>

                                    <a href=" <?= base_url('admin/notaris/update_notaris/') . $nt->id_notaris ?> 
                                    " class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>

                                    <a href=" <?= base_url('admin/notaris/hapus_notaris/') . $nt->id_notaris ?> " class="btn btn-danger btn-sm tombol-hapus" id="tombol-hapus"> <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>