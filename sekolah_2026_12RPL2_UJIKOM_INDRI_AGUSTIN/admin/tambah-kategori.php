<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>
<?php

if (isset($_POST['id_kategori'])) {
    $id_kategori =$_POST['id_kategori'];
    $ket_kategori   =$_POST['ket_kategori'];
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_indriagustin");

mysqli_query($koneksi,"INSERT INTO kategori (id_kategori, ket_kategori) VALUES ('$id_kategori', '$ket_kategori')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TAMBAH DATA SISWA</title>
</head>
<body>
    <center>
    <h1>TAMBAH KATEGORI</h1>
    <form  method="POST">
        <div>
            <label for="">id kategori</label> <br/>
            <input type="text" name="id_kategori"/>
        </div>
        <div>
            <label for="">Nama Kategori</label> <br/>
            <input type="text" name="ket_kategori"/>
        </div>
      <button>KIRIM</button>
        </div>
    </form>
    </center>
</body>
<?php
    include "tampil-kategori.php";
    ?>
</html>