<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($nama, $jumlah, $total, $sepatu)
{
   
    $sql = "INSERT INTO `penjualan`(`nama`, `jumlah`, `total`, `sepatu`) VALUES ('$nama', '$jumlah',
    '$total', '$sepatu')";
    $this->conn->query($sql);
}

public function tampil_data()
{
$sql = "SELECT * FROM penjualan";

$bind = $this->conn->query($sql);   
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM penjualan WHERE id ='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($id, $nama, $jumlah, $total, $sepatu)
    {
    $sql = "UPDATE `penjualan` SET `nama`='$nama',`jumlah`='$jumlah',`total`='$total',`sepatu`='$sepatu' WHERE id='$id'";
    $this->conn->query($sql);
    }
    public function delete($id)
    {
    $sql = "DELETE FROM penjualan WHERE id='$id'";
    $this->conn->query($sql);
    }
    }