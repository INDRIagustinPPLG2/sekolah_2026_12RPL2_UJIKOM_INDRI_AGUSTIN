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
    <title>DASHBOARD ADMIN</title>
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
          margin-top: 70px;
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
        a {
            color: white;
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <header>
         <div> <img src="https://lh5.googleusercontent.com/proxy/y2VwwWrgukml2gdV3q9yxUPt9EX_sm2hpvr3VZjO_3hPbUwdhz8yfmDeD19P8WYxNtIDlYg_znTlxNf9MIAC-FzDSh7Innpqb29p0EZMW8uHUKIGAHu_VYoHL8VxEnQb8ePm6aZ_3usk7OxxpldF1HUERb4ds9TFXaoT1VhCFps"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div> 
         <a href="../logout.php">LOGOUT</a>
    </header>
    <br></br>
             <h1>SELAMAT DATANG ADMIN DI WEBSITE PENGAUDAN SARANA</h1> 
             <h1> SEKOLAH SMK TI MUMAMMADIYAH 1 CIKAMPEK</h1>
    <br> </br>

    <div class="tombol">
       
        <a href="data-siswa.php"><button>TAMBAH DATA SISWA</button></a>
        <a href="tambah-kategori.php"><button>TAMBAH KATEGORI</button></a>
        <a href="data_pengaduan.php"><button>DATA PENGADUAN</button></a>
    </div>
   
       

</body>
</html>
