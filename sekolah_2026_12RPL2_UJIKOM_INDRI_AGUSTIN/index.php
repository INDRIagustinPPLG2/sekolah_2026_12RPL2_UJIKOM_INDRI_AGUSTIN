<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa') {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      body{
            background-color: #B1C9EF;
      }
      div{
       margin: 100px;
 
      }
      h1 {
            text-align: center;
      }
      .pengaduan {
        background-color: #fbe290;
        color:#bf7e46;
      }
      .halaman{
        background-color: #fbedd6;
        color : #bf7e46;
      }
         button {
         width: 350px; /* Lebar tetap 200 piksel */
         height: 40px;
         border-radius: 25px;
         margin-bottom: 10px;
      }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard siswa</title>
</head>
<body>
  <div>
    <center>
    <h1>SELAMAT DATANG DI WEBSITE PENGADUAN MUTU</h1>
      <a href="form_pengaduan.php"><button class="pengaduan">buat pengaduan</button></a>
      <a href="data_pengaduan.php"><button class="halaman">history pengaduan</button></a>
      <a href=""><button class="pengaduan">ganti password</button></a><br/>
      </center>
</div>
    
</body>
</html>
<!-- <?php
//      $nama       =$_POST['username'];
//      $code  =$_POST['password'];
//      $peran  =$_POST['role'];
//      $nomor   =$_POST['nis'];
//      $ruangan =$_POST['kelas'];


// $koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_indriagustin");

// mysqli_query($koneksi,"INSERT INTO user (id, username, password, role, nis, kelas) VALUES (NULL, '$nama', '$code', '$peran', '$nomor', '$ruangan')");
?> -->