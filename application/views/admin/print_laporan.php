<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>

<style>
    h3,
    h4 {
        color: navy;
    }

    .table1 {
        margin: auto;
        font-family: sans-serif;
        color: #232323;
        border-collapse: collapse;
    }

    .table1,
    th,
    td {
        border: 1px solid #999;
        padding: 8px 20px;
        text-align: center;
    }

    h3,
    h4 {
        text-align: center;
        font-family: sans-serif;

    }
</style>

<body>



    <h3> Laporan data transaksi</h3>
    <h4>Purnama industries </h4>
    <hr>
    <table class="table1">
        <thead>
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Denda</th>
                <th>Total Denda</th>
                <th>Tanggal sewa</th>
                <th>Tanggal selesai</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            <?php
            $no = 1;
            foreach ($laporan as $tr) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $tr->nama ?></td>

                    <td><?= $tr->ukuran ?></td>
                    <td>Rp. <?= number_format($tr->harga, 0, ',', '.') ?></td>
                    <td>Rp. <?= number_format($tr->denda, 0, ',', '.') ?></td>
                    <td>Rp. <?= number_format($tr->total_denda, 0, ',', '.') ?></td>
                    <td><?= $tr->tgl_sewa ?> </td>
                    <td><?= $tr->tanggal_selesai ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
        </tbody>
    </table>
</body>

</html>
<script type="text/javascript">
    window.print();
</script>