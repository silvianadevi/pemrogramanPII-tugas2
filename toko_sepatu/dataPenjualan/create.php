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
        <label>nama</label>
        <br>
        <input type="text" name="nama">
        <br>
        
        <label>Jumlah</label>
        <br>
        <input type="number" name="jumlah">
        <br>
        <label>Total</label>
        <br>
        <input type="number" name="total">
        <br>
        <label>Sepatu</label>
        <br>
        <input type="text" name="sepatu">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>




