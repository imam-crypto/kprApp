<div class="section my-5 p-5 ">
    <div class="container mt-5 mb-2 ">
        <div class="card border-info my-4 mt-4">
            <div class="card-body">


                <div class="div">
                    <?= $this->session->flashdata('flashh');  ?>
                </div>
                <div class="div">
                    <?= $this->session->flashdata('flashhh');  ?>
                </div>
                <div class="div">
                    <?= $this->session->flashdata('flash');  ?>
                </div>

                <?php foreach ($transaksi as $dt) : ?>
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <img src="<?= base_url('assets/upload/' . $dt->gambar) ?>" width="400px" height="300px" alt="">
                        </div>
                        <hr>
                        <div class="col-md-6 my-2">
                            <table class="table">
                                <tr>
                                    <td>Nama : </td>
                                    <td> <?= $dt->nama ?> </td>
                                </tr>
                                <tr>
                                    <td>Type rumah :</td>
                                    <td> <?php if ($dt->kode_type == "CLS") {
                                                echo "Cluster";
                                            } elseif ($dt->kode_type == "SCLS") {
                                                echo "Spesial Cluster";
                                            } elseif ($dt->kode_type == "NCLS") {
                                                echo "Non Cluster";
                                            }
                                            ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ukuran : </td>
                                    <td> <?= $dt->ukuran ?> </td>
                                </tr>
                                <tr>
                                    <td>No rumah : </td>
                                    <td> <?= $dt->no_rumah ?> </td>
                                </tr>
                                <tr>
                                    <td>Warna : </td>
                                    <td> <?= $dt->warna ?> </td>
                                </tr>
                                <tr>
                                    <td>Harga : </td>
                                    <td> <?= $dt->harga ?> </td>
                                </tr>
                                <tr>
                                    <td>Denda : </td>
                                    <td> <?= $dt->denda ?> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php if ($dt->status_pembayaran == 1) { ?>
                                            <button class="btn btn-success">Succes</button>
                                        <?php } else { ?>
                                            <a href="<?= base_url('customer/transaksi/pembayaran/') . $dt->id_booking ?>" class="btn btn-warning">Cek Pembayaran</a></td>
                                <?php } ?>


                                <?php if ($dt->status_sewa == 'belum_selesai') { ?>
                                    <td><a href="<?= base_url('customer/transaksi/batal_transaksi/' . $dt->id_booking) ?>" id="batal" class="btn btn-danger batal">Batal</a></td>
                                    <td><a href="<?= base_url('customer/dashboard') ?>" class="btn btn-info">Kembali</a></td>
                                <?php } else { ?>
                                    <td> <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"> Batal Transaksi </button> </td>
                                <?php } ?>


                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="#exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Informasi Batal Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('customer/transaksi/pembayaran_aksi') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    Maaf Transaksi tidak bisa di batalkan :)
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-warning text text-light">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>