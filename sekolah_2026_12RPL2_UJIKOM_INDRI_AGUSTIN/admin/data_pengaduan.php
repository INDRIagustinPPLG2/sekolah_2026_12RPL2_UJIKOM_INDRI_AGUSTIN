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
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
</head>
<body>
    

<h2>DATA PENGADUAN</h2>
<table id="datatable" class="apaaja" border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>NO</th> 
            <th>tanggal</th>
            <th>ID kategoro</th>
            <th>Nama Kategori</th> 
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>status</th>
            <th>feedback</th>
            <th>Detail pengaduan</th>
        
        </tr>
    </thead>
    <tbody>    
    <?php
    include '../koneksi.php';
    $no = 1;

    $query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
                                    FROM input_aspirasi
                                    LEFT JOIN kategori
                                    ON input_aspirasi.id_kategori = kategori.id_kategori");

    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $data['tanggal']?></td>
            <td><?= $data['id_kategori']?></td>
            <td><?= $data['ket_kategori']?></td>
            <td><?= $data['lokasi']?></td>
            <td><?= $data['keterangan']?></td>
            <td><?= $data['status']?></td>
             <td><?= $data['feedback']?></td>
            <td>
                <a href="detail_pengaduanadmin.php?id=<?= $data['id_pelaporan'] ?>">
                    <button>Lihat</button>
                </a>
            </td>
        </tr>
   <?php } ?>
  </tbody> 
</table>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

  <script>
     $(document).ready(function() {
         $('#datatable').DataTable({
             "language": {
                 "search": "Cari:",
                 "lengthMenu": "Tampilkan MENU data",
                 "info": "Menampilkan START sampai END dari TOTAL data",
                 "paginate": {
                     "next": "Selanjutnya",
                     "previous": "Sebelumnya"
                 }
             }
         });
     });
 </script>
 
</body>
</html>