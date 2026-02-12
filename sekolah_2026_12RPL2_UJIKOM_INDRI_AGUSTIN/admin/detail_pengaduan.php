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
     <title>Document</title>
</head>
<body>
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
          <a href="data_pengaduan.php">Kembali</a>
     </form>
</body>
</html>
