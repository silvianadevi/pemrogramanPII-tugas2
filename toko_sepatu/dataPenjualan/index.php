<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
<title>Penjualan Toko Sepatu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <h1>Data Penjualan Sepatu</h1>
    <a href="../dataSepatu" class="btn btn-success">Go To Data Sepatu</a>
    <br>
<div class="text-end">

    <a href="create.php" class="btn btn-primary">Tambah Data</a>
    <br>
    <br>
    <a href="print.php" target="_blank" class="btn btn-warning text-white">Cetak Data</a>
</div>
<br>
<table class="table">
<thead>
<tr>
<th>id</th>
<th>Nama</th>
<th>Sepatu</th>
<th>Jumlah</th>
<th>Total</th>
<th>aksi</th>
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
<td>
<a name="edit" id="edit" href="edit.php?id=<?= $data->id ?>">Edit</a>
<a name="hapus" id="hapus" href="proces.php?id=<?= $data->id ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else { ?>
<tr>
<td colspan="9">Belum ada data sepatu.</td>
</tr>
 
<?php } ?>
</tbody>
</table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>