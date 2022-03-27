<?php
include 'model.php';
if (isset($_POST['submit_simpan'])){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];
    $sepatu = $_POST['sepatu'];

    
    $model = new Model();
    $model->insert( $nama, $jumlah, $total, $sepatu);
    header('location:index.php');
}
if (isset($_POST['submit_edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];
    $sepatu = $_POST['sepatu'];
    $model = new Model () ;
    $model->update($id,$nama,$jumlah,$total,$sepatu);
    header('location:index.php');
}
if (isset($_GET['id'])){
    $id = $_GET ['id'];
    $model = new Model ();
    $model->delete($id);
    header('location:index.php');
}
