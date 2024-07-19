<?php
$nama    = $_GET['nama'];
$alamat    = $_GET['alamat'];
?>

<!DOCTYPE html>
<html>

<body>
    <form>
        Nama: <input type="text" name="nama" placeholder="Masukkan Nama">
        Alamat: <input type="text" name="alamat" placeholder="Masukkan Alamat"><br><br>
        <input type="submit" value="Submit">
        <h1>Selamat Datang <?php echo $nama; ?></h1>
        <h2>Alamat Kamu adalah di : <?php echo $alamat; ?></h2>

</html>