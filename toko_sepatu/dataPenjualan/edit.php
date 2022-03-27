<?php
$id = $_GET [ 'id'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="eng">

<head>
    <title>Edit Data Sepatu</title>
</head>

<body>
    <h1>Edit Data Sepatu</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proces.php"method="post">
    <!-- <label>ID </label> -->
        <!-- <br> -->
        <input type="hidden" name="id" value="<?php echo $data->id ?>">
        <!-- <br>     -->
    <label>nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label>Jumlah</label>
        <br>
        <input type="text" name="jumlah" value="<?php echo $data->jumlah ?>">
        <br>
        <label>Total</label>
        <br>
        <input type="text" name="total" value="<?php echo $data->total?>">
        <br>
        <label>Sepatu</label>
        <br>
        <input type="text" name="sepatu" value="<?php echo $data->sepatu ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>

</html>
