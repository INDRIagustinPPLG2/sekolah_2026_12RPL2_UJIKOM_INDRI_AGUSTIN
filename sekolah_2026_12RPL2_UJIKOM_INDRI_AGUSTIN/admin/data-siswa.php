<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>

<?php
if (isset($_POST['username'])) {
     $nama       =$_POST['username'];
     $code  =password_hash($_POST['password'],PASSWORD_DEFAULT); 
     $nomor   =$_POST['nis'];
     $ruangan =$_POST['kelas'];
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_indriagustin");

mysqli_query($koneksi,"INSERT INTO user (id, username, password, role, nis, kelas) VALUES (NULL, '$nama', '$code', 'siswa', '$nomor', '$ruangan')");
}
// echo "<h2>Pengaduan berhasil dikirim</h2>";
// header ("Location: tampil-data-siswa.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data siswa</title>
</head>
<body>
    <center>
    <h1>TAMBAH DATA SISWA</h1>
    <form  method="POST">
          <div>
        <label for="">NIS</label> <br/>
        <input type="text" name="nis"/>
        </div>
        <div>
        <label for="">NAMA</label> <br/>
        <input type="text" name="username" />
        </div>
         <div>
        <label for="">KELAS</label> <br/>
        <input type="text" name="kelas" />
        </div>
         <div>
        <label for="">PASSWORD</label> <br/>
        <input type="text" name="password"/>
        </div>
        <div>
      <button>KIRIM</button>
        </div>
    </form>
    </center>
    <?php
    include "tampil-data-siswa.php";
    ?>
</html>

   