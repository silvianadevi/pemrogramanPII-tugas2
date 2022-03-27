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
<th>Merk</th>
<th>Ukuran</th>
<th>Stok</th>
<th>Harga</th>
<th>aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data(); if (!empty($result)) {
foreach ($result as $data) : ?>
<tr>
<td><?= $index++ ?></td>
<td><?= $data->merk ?></td>
<td><?= $data->ukuran ?></td>
<td><?= $data->stok ?></td>
<td>Rp. <?= $data->harga ?></td>
<td>
<a name="edit" id="edit" href="edit.php?id=<?= $data->id ?>">Edit</a>
<a name="hapus" id="hapus" href="proces.php?id=<?= $data->id ?>">Delete</a>
</td>
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
        