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
        .tombol {
          display: flex;
          justify-content: center;
          justify-content: space-between;
          gap: 25px;
          margin-top: 50px;
          flex-wrap: wrap;
        }
        button {
            width: 250px; 
            height: 100px;
            border-radius: 20px;
            background-color: #375534;
            border: none;
            border-bottom: 4px solid #547561;
            transition: all 0.3s ease;
            color: #e3eed4;
            
        }
        button:hover {
            background-color: #7da78e;
        }
    </style>
</head>
<body>
    <header>
         <div> <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div> 
    </header>
    <br></br>
    <div class="ibu2">
        <div class="anak1">
             <h1>SELAMAT DATANG ADMIN DI WEBSITE PENGAUDAN SARANA</h1> 
             <h1> SEKOLAH SMK TI MUMAMMADIYAH 1 CIKAMPEK</h1>
        </div>
    </div>
    <br> </br>
    <div class="tombol">
       
        <a href="data-siswa.php"><button>TAMBAH DATA SISWA</button></a>
        <a href="tambah-kategori.php"><button>TAMBAH KATEGORI</button></a>
        <a href="data_pengaduan.php"><button>HISTORY PENGADUAN</button></a>
    </div>
   
       

</body>
</html>
