<div class="main-content">

    <div class="section">
        <div class="section-header">
            <h2 class="text-center">Detail customer</h2>
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
                                <td>Nama :</td>
                                <td> <?= $dt->nama; ?> </td>
                            </tr>
                            <tr>
                                <td>Username : </td>
                                <td> <?= $dt->username ?> </td>
                            </tr>
                            <tr>
                                <td>Alamat : </td>
                                <td> <?= $dt->alamat ?> </td>
                            </tr>
                            <tr>
                                <td>jenis_kelamin : </td>
                                <td> <?= $dt->jenis_kelamin ?> </td>
                            </tr>
                            <tr>
                                <td>No Telp : </td>
                                <td> <?= $dt->no_telepon ?> </td>

                            </tr>
                            <tr>
                                <td>No KTP : </td>
                                <td> <?= $dt->no_ktp ?> </td>
                            </tr>
                            <tr>
                                <td>Password : </td>
                                <td> <?= $dt->password ?> </td>

                            </tr>
                        </table>
                        <a href=" <?= base_url('admin/data_customer') ?> " class="btn btn-primary"> Kembali </a>
                        <a href=" <?= base_url('admin/data_customer/update_customer/' . $dt->id_customer)  ?> " class="btn btn-warning"> Update </a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach ?>
</div>
