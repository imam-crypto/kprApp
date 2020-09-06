<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href=" <?= base_url('admin/data_karyawan/tambah_customer') ?> " class="btn btn-info btn-sm"> <i class="fas fa-plus"></i> Tambah Data karyawan</a>

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
                            <th>Alamat</th>
                            <th>Umur</t>
                            <th>Mulai bekerja</th>
                            <th>Action</>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($karyawan as $kr) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kr->nama ?></td>
                                <td><?= $kr->alamat ?></td>
                                <td><?= $kr->umur ?> Tahun</td>
                                <td><?= $kr->mulai_bekerja ?></td>

                                <td> <a href=" <?= base_url('admin/data_karyawan/detail_karyawan/') . $kr->id_karyawan ?> " class="btn btn-info btn-sm "> <i class="fas fa-eye"></i></a>

                                    <a href=" <?= base_url('admin/data_karyawan/update_karyawan/') . $kr->id_karyawan ?> 
                                    " class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>

                                    <a href=" <?= base_url('admin/data_karyawan/hapus_karyawan/') . $kr->id_karyawan ?> " class="btn btn-danger btn-sm tombol-hapus" id="tombol-hapus"> <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>