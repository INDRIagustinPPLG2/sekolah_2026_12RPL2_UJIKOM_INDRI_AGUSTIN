<!-- <?php
     // $nis        =$_POST['nis'];
     // $lokasi     =$_POST['lokasi'];
     // $kategori   =$_POST['kategori'];
     // $keterangan =$_POST['keterangan'];
         




// $koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_indriagustin");

// mysqli_query($koneksi,"INSERT INTO input_aspirasi (id_pelaporan, nis, id_kategori, lokasi, keterangan, status, feedback) 
// VALUES (NULL, '$nis','$kategori','$lokasi', '$keterangan', 'menunggu', NULL)");

//   echo "<script>
//             alert('pengaduan berhasil terkirim!');
//             window.location='form_pengaduan.php';
//         </script>";


?> -->



<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['nis'])) {
    die("Silakan login terlebih dahulu.");
}

$nis        = $_SESSION['nis'];   // ← otomatis dari login
$kategori   = $_POST['kategori'];
$lokasi     = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi,"INSERT INTO input_aspirasi 
(id_pelaporan, nis, id_kategori, lokasi, keterangan, status, feedback) 
VALUES (NULL, '$nis','$kategori','$lokasi', '$keterangan', 'menunggu', NULL)");

echo "<script>
alert('Pengaduan berhasil terkirim!');
window.location='form_pengaduan.php';
</script>";
?>

