<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data</title>
<style>
h1 {
text-align: center;
}

table, td,
th {
border: 1px solid #ddd; text-align: left;
}

table {
border-collapse: collapse; width: 100%;
}

th,
td {
padding: 15px;
}
</style>
</head>

<body>
<h1>Laporan Data Penjualan Sepatu</h1>
<table>
<thead>
<tr>
<th>id</th>
<th>Nama</th>
<th>Sepatu</th>
<th>Jumlah</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data(); if (!empty($result)) {
foreach ($result as $data) : ?>
<tr>
<td><?= $index++ ?></td>
<td><?= $data->nama ?></td>
<td><?= $data->sepatu ?></td>
<td><?= $data->jumlah ?></td>
<td>Rp. <?= $data->total ?></td>
</tr>
<?php endforeach;
} else { ?>
<tr>
<td colspan="9">Belum ada data sepatu.</td>
</tr>
 
<?php } ?>
    </tbody>
    </table>
    <script>
    window.print();
    </script>
    </body>
    
    </html>
        