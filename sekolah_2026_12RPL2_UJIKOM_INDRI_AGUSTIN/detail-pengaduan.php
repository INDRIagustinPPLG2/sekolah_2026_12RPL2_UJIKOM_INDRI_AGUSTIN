<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa') {
    header("Location: ../login.php");
    exit;
}

include 'koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID pelaporan tidak ditemukan!";
    exit;
}

$id = (int)$_GET['id'];

$query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
     FROM input_aspirasi 
     LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori
     WHERE input_aspirasi.id_pelaporan = '$id'");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DETAIL PENGADUAN</title>
    <style>
          body{
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(to right, #6b9071,  #e3eed4);
            padding: 20px 40px;
        }
        
          header{
            border-radius: 20px;
            background-color: #375534;
            padding: 5px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white; 
        }
        img{
          width: 50px; 
          height: auto  
        }
        a {
            color: white;
            text-decoration: none; 
        }
        button {
            width: 150px; 
            height: 35px;
            margin-top: 25px;
            border-radius: 5px;
            background-color: #375534;
            border: none;
            border-bottom: 4px solid #547561;
            transition: all 0.3s ease; 
        }
        button:hover {
            background-color: #7da78e;
        }
          table {
            width: 500px;
            margin-top: 30px;
            background: #e3eed4;
            border-radius: 5px;
            border: none;
            border-bottom: 4px solid #547561;
            /* overflow: hidden; */
        }
        td {
            padding: 15px 20px;
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
         <div> <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div>
         <div><a class="i" href="data_pengaduan.php">BACK</a></div>
    </header>
   <h2>Detail Pengaduan</h2>
    <table border="1" cellpadding="10">
        <tr>
            <td>ID Pelaporan</td>
            <td><?= $data['id_pelaporan'] ?></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><?= $data['ket_kategori'] ?></td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td><?= $data['lokasi'] ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><?= $data['keterangan'] ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><?= $data['status'] ?></td>
        </tr>
        <tr>
            <td>Feedback</td>
            <td><?= $data['feedback'] ? $data['feedback'] : '-' ?></td>
        </tr>
    </table>

    <br>
    <a href="data_pengaduan.php"><button>Kembali</button></a>
</body>
</html>