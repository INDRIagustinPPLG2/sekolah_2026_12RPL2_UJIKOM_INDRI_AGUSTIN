<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa') {
    header("Location: ../login.php");
    exit;
}
?>
<?php
include 'koneksi.php';
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROM PENGADUAN</title>
    <style>
         body{
            margin: 0;
            min-height: 100vh;
            diplay: flex;
            justify-content: center;
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
          .ibu{
           width: 300px;
           height: 300px;
           margin: 100px auto;
            margin-top: 15px;
           background: #e3eed4;
           border-bottom: 4px solid #547561;
           padding: 20px;
           border-radius: 20px;     
          }
          .box {
            margin-top: 15px;
          }
        button {
            width: 150px; 
            height: 35px;
            margin-top: 10px;
            border-radius: 5px;
            background-color: #375534;
            border: none;
            border-bottom: 4px solid #547561;
            transition: all 0.3s ease; 
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
         <div><a class="i" href="index.php">DASHBOARD</a></div>
    </header>
    <center>
    <h1>halaman pengaduan</h1>
   <form action="proses-pengaduan.php" method="POST">
    <div class="ibu">   
        <!-- <div class="box">
                <label for="">NIS</label> <br/>
                <input type="text" name="nis" required/>
        </div> -->
        <div class="box">
            <label for="">Kategori</label> <br/>
                <select name="kategori" required>
    <option value="">-- pilih kategori --</option>
    
    <?php while($k = mysqli_fetch_assoc($kategori)){ ?>
        <option value="<?= $k['id_kategori']; ?>">
            <?= $k['ket_kategori']; ?>
        </option>
    <?php } ?>
    
</select>
        </div>
        <div class="box">
            <label for="">lokasi</label> <br/>
            <input type="text" name="lokasi" required/>
        </div>
        <div class="box">
            <label for="">keterangan</label> <br/>
            <textarea name="keterangan" required></textarea>
        </div>
        <div>
            <button>kirim</button>
        </div>
    </div>  
    </form>
    </center>
</body>
</html>