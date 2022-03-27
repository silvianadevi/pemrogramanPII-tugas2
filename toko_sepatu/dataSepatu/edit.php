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
    <label>merk</label>
        <br>
        <input type="text" name="merk" value="<?php echo $data->merk ?>">
        <br>
        <label>ukuran</label>
        <br>
        <input type="text" name="ukuran" value="<?php echo $data->ukuran ?>">
        <br>
        <label>stok</label>
        <br>
        <input type="text" name="stok" value="<?php echo $data->stok?>">
        <br>
        <label>harga</label>
        <br>
        <input type="text" name="harga" value="<?php echo $data->harga ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
</body>

</html>
