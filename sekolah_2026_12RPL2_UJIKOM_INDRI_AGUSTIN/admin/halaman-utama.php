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
        width: 350px; /* Lebar tetap 200 piksel */
        height: 40px;
        border-radius: 25px;
        margin-bottom: 10px;
      }
      .halaman{
        background-color: #fbedd6;
        color : #bf7e46;
        width: 350px; /* Lebar tetap 200 piksel */
        height: 40px;
        border-radius: 25px;
        margin-bottom: 10px;
      }
    .navbar {
      display: flex;
      overflow: hidden;
      padding: 10px 20px;
      font-family: Arial, sans-serif;
    }
    .navbar a {
      float: right;
      color: white;
      text-decoration: none;
      padding: 8px 16px;
      border-radius 4px;
      bacground-color: #dc3545;
      font-weight: bold;
      transition: bacground-color 0.3s;

    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard admin</title>
</head>
<body>
  <div class="navbar">
   <a href="../login.php">LOGOUT</a>
   </div>
  <div>
   <center>
    <h1>SELAMAT DATANG ADMIN DI WEBSITE PENGADUAN MUTU</h1>
  <a href="data-siswa.php"><button class="pengaduan">tambah data siswa</button></a><br/>

 <a href="tampil-data-siswa.php"><button class="halaman">data siswa</button></a><br/>

   <a href=""><button class="pengaduan">tambah kategori</button></a><br/>

 <a href="data_pengaduan.php"><button class="halaman">history pengaduan</button></a><br/>
</center>
</div>
    
</body>
</html>