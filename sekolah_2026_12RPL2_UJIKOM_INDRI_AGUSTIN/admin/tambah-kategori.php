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
    <title>KATEGORI</title>
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
        .input {
            height: 65px;
            width: 100%;
            margin-bottom: 70px;
            display: flex;
            justify-content: center;
            background: #e3eed4;
            gap: 20px;
            align-item: flex-end;
            border-radius: 20px;
            padding: 10px;
        }
        .box {
            display: flex;
            flex-direction: column;
            margin-bottom: 50px;
        }
        .tombol {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        button {
            width: 60px; 
            height: 30px;
            border-radius: 5px;
            background-color: #375534;
            border: none;
            border-bottom: 4px solid #547561;
            transition: all 0.3s ease;
            color: #e3eed4;
            
        }
        button:hover {
            background-color: #7da78e;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background: #e3eed4;
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 15px 20px;
            text-align: center;
            font-size: 16px;
        }
        th {
            background-color: #375534;
            color: white;
        }
        .i {
            color: white;
            text-decoration: none; 
        }
        a {
            color: black;
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <header>
         <div> <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div>
         <div><a class="i" href="halaman-utama.php">DASHBOARD</a></div>
    </header>
    <center>
    <h1>TAMBAH KATEGORI</h1>
    </center>
    <form  method="POST">
        <div class="input"> 
            <div class="box">
                <label for="">id kategori</label> <br/>
                <input type="text" name="id_kategori" required/>
            </div>
            <div class="box">
                <label for="">Nama Kategori</label> <br/>
                <input type="text" name="ket_kategori" required/>
            </div>
            <div class="tombol">
                <button>KIRIM</button>
            </div>
        </div>
    </form>
   
</body>
<?php
    include "tampil-kategori.php";
    ?>
</html>