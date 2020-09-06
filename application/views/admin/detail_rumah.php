<div class="main-content">

    <div class="section">
        <div class="section-header">
            <h2 class="text-center">Detail rumah</h2>
        </div>
    </div>

    <?php foreach ($detail as $dt) : ?>


        <div class="card m-2 p-2">
            <div class="card-body">
                <div class="row m-2">
                    <div class="col-md-5">
                        <img width="220px" height="170px" src=" <?= base_url() . 'assets/upload/' . $dt->gambar; ?> ">
                    </div>
                    <div class="row"></div>
                    <div class="col-md-7">
                        <table class="table">
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
                                <td>Status : </td>
                                <td> <?php if ($dt->status == 1) {
                                            echo " <span class='badge badge-primary p-1'> Tersedia </span>";
                                        } else {
                                            echo "<span class='badge badge-danger p-1'> Tidak tersedia </span>";
                                        }
                                        ?>

                                </td>
                            </tr>
                            <tr>
                                <td>Harga Sewa : </td>
                                <td> <?= $dt->harga ?> </td>
                            </tr>
                            <tr>
                                <td>Denda : </td>
                                <td> <?= $dt->denda ?> </td>
                            </tr>
                            <tr>
                                <td>Jumlah Pembangunan </td>
                                <td> <?= $dt->jumlah_pembangunan ?> </td>
                            </tr>
                        </table>
                        <a href=" <?= base_url('admin/data_rumah') ?> " class="btn btn-primary"> Kembali </a>
                        <a href=" <?= base_url('admin/data_rumah/update_rumah/' . $dt->id_rumah)  ?> " class="btn btn-warning"> Update </a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach ?>
</div>