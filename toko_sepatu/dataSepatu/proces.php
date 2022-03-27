<?php
include 'model.php';
if (isset($_POST['submit_simpan'])){
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $ukuran = $_POST['ukuran'];

    
    $model = new Model();
    $model->insert($merk, $harga, $stok, $ukuran);
    header('location:index.php');
}
if (isset($_POST['submit_edit'])){
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $ukuran = $_POST['ukuran'];
    $model = new Model () ;
    $model->update($id,$merk,$harga,$stok,$ukuran);
    header('location:index.php');
}
if (isset($_GET['id'])){
    $id = $_GET ['id'];
    $model = new Model ();
    $model->delete($id);
    header('location:index.php');
}
