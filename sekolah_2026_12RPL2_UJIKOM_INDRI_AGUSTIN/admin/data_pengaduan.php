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
    <title>DATA PENGADUAN</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
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
         <div> <img src="https://lh5.googleusercontent.com/proxy/y2VwwWrgukml2gdV3q9yxUPt9EX_sm2hpvr3VZjO_3hPbUwdhz8yfmDeD19P8WYxNtIDlYg_znTlxNf9MIAC-FzDSh7Innpqb29p0EZMW8uHUKIGAHu_VYoHL8VxEnQb8ePm6aZ_3usk7OxxpldF1HUERb4ds9TFXaoT1VhCFps"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div>
         <div><a class="i" href="halaman-utama.php">DASHBOARD</a></div>
    </header>
    <center><h2>DATA PENGADUAN</h2></center>
    <table id="datatable" class="apaaja" border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID PELAPORAN</th> 
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>TANGGAL</th>
                    <!-- <th>ID KATEGORI</th> -->
                    <th>NAMA KATEGORI</th> 
                    <th>LOKASI</th>
                    <th>KETERANGAN</th>
                    <th>STATUS</th>
                    <th>FEEDBACK</th>
                    <th>DETAIL</th>
                
                </tr>
            </thead>
    <tbody>    
    <?php
        include '../koneksi.php';
        $no = 1;

        $query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori, user.username 
    FROM input_aspirasi 
    LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori 
    LEFT JOIN user ON input_aspirasi.nis = user.nis;");

        while ($data = mysqli_fetch_assoc($query)) {
        ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $data['id_pelaporan']?></td>
                    <td><?= $data['nis']?></td>
                    <td><?= $data['username']?></td>
                    <td><?= $data['tanggal']?></td>
                    <!-- <td><?= $data['id_kategori']?></td> -->
                    <td><?= $data['ket_kategori']?></td>
                    <td><?= $data['lokasi']?></td>
                    <td><?= $data['keterangan']?></td>
                    <td><?= $data['status']?></td>
                    <td><?= $data['feedback']?></td>
                    <td>
                        <a href="detail_pengaduanadmin.php?id=<?= $data['id_pelaporan']?>">
                            <button>DETAIL</button></a>
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