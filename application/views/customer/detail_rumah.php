<div class="section">
    <div class="container mt-2 mb-2 ">
        <div class="card border-info mt-2">
            <div class="card-body">
                <?php foreach ($detail as $dt) : ?>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?= base_url('assets/upload/' . $dt->gambar) ?>" width="400px" height="300px" alt="">
                        </div>
                        <div class="col-md-6">
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
                                                echo " <span class='badge badge-info p-1'> Tersedia </span>";
                                            } else {
                                                echo "<span class='badge badge-danger p-1'> Tidak tersedia </span>";
                                            }
                                            ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php
                                        if ($dt->status == 0) {
                                            echo " <span class='btn btn-danger' disable> Lagi di sewa </span> ";
                                        } else {
                                            echo anchor('customer/sewa/tambah_sewa' . $dt->id_rumah, '<button class="btn btn-info">Sewa rumah</button> ');
                                        }

                                        ?>
                                        <a class="btn btn-warning" href=" <?= base_url('customer/dashboard'); ?>  ">Kembali</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>