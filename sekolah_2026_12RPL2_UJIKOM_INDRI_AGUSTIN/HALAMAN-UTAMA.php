<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .ibu {
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        button {
            width: 250px; 
            height: 100px;
            border-radius: 20px;
            background-color: #375534;
            border: none;
            border-bottom: 4px solid #547561;
            transition: all 0.3s ease; 
        }
        button:hover {
            background-color: #7da78e;
            transform: scale(1.25);
        }
        button:active {
            transform: scale(0.130);
        }
    </style>
</head>
<body>
    <header>
         <div> <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div> 
    </header>
    <br></br>
    <div class="ibu">
        <div class="anak1">
             <h1>SELAMAT DATANG DI WEBSITE PENGAUDAN SARANA</h1> 
             <h1> SEKOLAH SMK TI MUMAMMADIYAH 1 CIKAMPEK</h1>
        </div>
    </div>
<center>
    <div class="ibu2">
        <div>
            <a href="data-siswa.php"><button>TAMBAH DATA SISWA</button></a>
            <a href="tampil-data-siswa.php"><button>DATA SISWA</button></a>
        </div>
     
        <div>
            <a href=""><button>TAMBAH KATEGORI</button></a>
            <a href="data_pengaduan.php"><button>HISTORY PENGADUAN</button></a>
        </div>
    </div>
</center>
</body>
</html>
