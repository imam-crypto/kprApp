<div class="main-content">

    <div class="section">
        <div class="section-header">
            <h2 class="text-center">Detail notaris</h2>
        </div>
    </div>



    <?php foreach ($detail as $dt) : ?>


        <div class="card m-2 p-2">
            <div class="card-body">
                <div class="row m-2">
                    <div class="col-md-5">
                        <img width="220px" height="170px" src="<?= base_url('assets/img/gbr2.png') ?> ">
                    </div>
                    <div class="row"></div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td> <?= $dt->nama; ?> </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td> <?= $dt->alamat ?> </td>
                            </tr>

                            <tr>
                                <td>Spesialis</td>
                                <td>:</td>
                                <td> <?= $dt->spesialis ?> </td>
                            </tr>

                        </table>
                        <a href=" <?= base_url('admin/notaris') ?> " class="btn btn-primary"> Kembali </a>
                        <a href=" <?= base_url('admin/notaris/update_notaris/' . $dt->id_notaris)  ?> " class="btn btn-warning"> Update </a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach ?>
</div>