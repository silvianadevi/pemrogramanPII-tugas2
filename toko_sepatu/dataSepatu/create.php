<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Sepatu</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>merk</label>
        <br>
        <input type="text" name="merk">
        <br>
        
        <label>ukuran</label>
        <br>
        <input type="text" name="ukuran">
        <br>
        <label>stok</label>
        <br>
        <input type="number" name="stok">
        <br>
        <label>harga</label>
        <br>
        <input type="number" name="harga">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>




