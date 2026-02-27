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
  <title>DASHBOARD SISWA</title>
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
          /* justify-content: space-between; */
          gap: 25px;
          margin-top: 100px;
          /* flex-wrap: wrap; */
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
        a {
            color: white;
            text-decoration: none; 
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard siswa</title>
</head>
<body>
  <header>
         <div> <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div> 
         <a href="logout.php">LOGOUT</a>
    </header>
    <center>
    <h1 style="margin-top: 100px;">SELAMAT DATANG DI WEBSITE PENGAUDAN SARANA</h1> 
             <h1> SEKOLAH SMK TI MUMAMMADIYAH 1 CIKAMPEK</h1>
    </center>
  <div class="tombol">
      <a href="form_pengaduan.php"><button class="pengaduan">BUAT PENGADUAN</button></a>
      <a href="data_pengaduan.php"><button class="halaman">HISTORY PENGADUAN</button></a> 
  </div>
    
</body>
</html>