<style>
    * {
        font-style: normal;
        text-align: center;
        margin: 10;
    }

    tr-td {
        text-align: center;

        justify-content: center;


    }

    table {
        text-align: center;
        justify-content: center;
    }
</style>
<table>
    <?php foreach ($transaksi as $dt) : ?>

        <p style="text-align: center; margin-top: 5px; "> Invoice Pembayaran</p>
        <p style="text-align: center; color: royalblue;"> Purnama Industries</p>
        <hr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <?= $dt->nama ?> </td>
        </tr>
        <tr>
            <td>Type rumah</td>
            <td>:</td>
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
            <td>Ukuran</td>
            <td>:</td>
            <td> <?= $dt->ukuran ?> </td>
        </tr>
        <tr>
            <td>No rumah</td>
            <td>:</td>
            <td> <?= $dt->no_rumah ?> </td>
        </tr>
        <tr>
            <td>Warna</td>
            <td>:</td>
            <td> <?= $dt->warna ?> </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>Rp. <?= number_format($dt->harga, 0, ',', '.') ?> </td>
        </tr>
        <tr>
            <td>Denda/bulan</td>
            <td>:</td>
            <td>Rp. <?= number_format($dt->denda, 0, ',', '.') ?> </td>
        </tr>
        <tr>
            <td>Tanggal mulai sewa</td>
            <td>:</td>
            <td> <?= $dt->tgl_sewa ?> </td>
        </tr>
        <tr>
            <td>tgl selesai </td>
            <td>:</td>
            <td> <?= $dt->tanggal_selesai ?> </td>
        </tr>
        <tr>
            <?php
            $mulai = strtotime($dt->tgl_sewa);
            $selesai = strtotime($dt->tanggal_selesai);
            $jmlh = abs(($mulai - $selesai) / (60 * 60 * 24 * 365));
            // $mulai      = date_create($dt->tgl_sewa);
            // $selesai    =  date_create($dt->tanggal_selesai);
            // $jmlh       = date_diff($mulai, $selesai);
            // $jmlh->y;
            // $jmlh->m:
            ?>

            <td>Lama Sewa </td>
            <td>:</td>
            <td> <?php if (abs(($mulai - $selesai) / (60 * 60 * 24 * 365)) == !',') {
                        echo  $jmlh .   ' Tahun' ?>
                <?php } else {
                        $mulai = strtotime($dt->tgl_sewa);
                        $selesai = strtotime($dt->tanggal_selesai);
                        $jmlh = abs(($mulai - $selesai) / (60 * 60 * 24 * 30));

                        echo $jmlh . ' bulan'

                ?>

                <?php } ?>
            </td>

        </tr>
        <tr>
            <td>Jumlah Pembayaran </td>
            <td>:</td>
            <td>
                <?php if ($jmlh == 'tahun') {
                ?>
                    <button style="color: royalblue;"> Rp. <?= number_format($dt->harga * $jmlh, 0, ',', '.')  ?> </button></td>
        <?php } else { ?>
            <button style="color: royalblue;"> Rp. <?= number_format(($dt->harga / 12) * $jmlh, 0, ',', '.')  ?> </button></td>
        <?php } ?>

    <?php endforeach ?>
</table>
<script type="text/javascript">
    window.print();
</script>