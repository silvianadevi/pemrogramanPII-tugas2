<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($merk, $harga, $stok, $ukuran)
{
   
    $sql = "INSERT INTO `sepatu`(`merk`, `harga`, `ukuran`, `stok`) VALUES ('$merk', '$harga',
    '$ukuran', '$stok')";
    $this->conn->query($sql);
}

public function tampil_data()
{
$sql = "SELECT * FROM sepatu";

$bind = $this->conn->query($sql);   
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM sepatu WHERE id ='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($id,$merk,$harga,$stok,$ukuran)
    {
    $sql = "UPDATE `sepatu` SET `merk`='$merk',`harga`='$harga',`stok`='$stok',`ukuran`='$ukuran' WHERE id='$id'";
    $this->conn->query($sql);
    }
    public function delete($id)
    {
    $sql = "DELETE FROM sepatu WHERE id='$id'";
    $this->conn->query($sql);
    }
    }