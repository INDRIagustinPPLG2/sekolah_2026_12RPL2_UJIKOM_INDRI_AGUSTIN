<!-- <?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?> -->

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
    <title>DATA SISWA</title>
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
    <h1>TAMBAH DATA SISWA</h1>
    </center>
        <form  method="POST">
            <div class="input">
                <div class="box">
                    <label for="">NIS</label> <br/>
                    <input type="text" name="nis" required/>
                </div>
                <div class="box">
                    <label for="">NAMA</label> <br/>
                    <input type="text" name="username" required/>
                </div>
                <div class="box">
                    <label for="">KELAS</label> <br/>
                    <input type="text" name="kelas" required/>
                </div>
                <div class="box">
                    <label for="">PASSWORD</label> <br/>
                    <input type="text" name="password" required/>
                </div>
                <div class="tombol">
                    <button>KIRIM</button>
                </div>
            </div>
        </form>
    <?php
    include "tampil-data-siswa.php";
    ?>
</html>

   