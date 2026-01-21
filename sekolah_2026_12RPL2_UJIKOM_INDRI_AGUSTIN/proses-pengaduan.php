<?php
   echo $nis        =$_POST['nis'];
    echo $lokasi     =$_POST['lokasi'];
    echo $kategori   =$_POST['kategori'];
    echo $keterangan =$_POST['keterangan'];

// echo "<h2>Pengaduan berhasil dikirim</h2>";
// echo "NIS: $nis <br>";
// echo "Lokasi: $lokasi <br>";
// echo "Keterangan: $keterangan <br>";



$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_indriagustin");

mysqli_query($koneksi,"INSERT INTO input_aspirasi (id_pelaporan, nis, id_kategori, lokasi, keterangan, status, feedback) 
VALUES (NULL, '$nis','$kategori','$lokasi', '$keterangan', 'menunggu', NULL)");
?>
