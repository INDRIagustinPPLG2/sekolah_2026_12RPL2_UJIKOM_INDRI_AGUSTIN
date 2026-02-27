<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>

<?php 
include '../koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID pelaporan tidak ditemukan!";
    exit;
}

$id = $_GET['id'];

if (isset($_POST['simpan'])){
     $status = $_POST['status'];
     $feedback = $_POST['feedback'];

     mysqli_query($koneksi, "UPDATE input_aspirasi
          SET status = '$status', feedback = '$feedback'
          WHERE id_pelaporan = '$id'");

     header("Location: data_pengaduan.php");
     exit;
}

$query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
     FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori
     WHERE input_aspirasi.id_pelaporan = '$id'");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data pengaduan tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin-top: 25px;
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
     <form method="POST">
          <table border="1" cellpadding="10" cellspacing="0">
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
                    <td>
                         <select name="status">
                              <option value="menunggu" <?= $data['status'] == 'menunggu' ? 'selected' : '' ?>>Menunggu</option>
                              <option value="proses" <?= $data['status'] == 'proses' ? 'selected' : '' ?>>Proses</option>
                              <option value="selesai" <?= $data['status'] == 'selesai' ? 'selected' : '' ?>>Selesai</option>
                         </select>
                    </td>
               </tr>

               <tr>
                    <td>Feedback</td>
                    <td>
                         <textarea name="feedback" rows="4" cols="40"><?= $data['feedback'] ?></textarea>
                    </td>
               </tr>
          </table>
          <br/>
          <button type="submit" name="simpan">Simpan</button>
          <a class="i" href="data_pengaduan.php">Kembali</a>
     </form>
</body>
</html>