<?php

$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_indriagustin");

mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
VALUES (NULL, '006', '1', 'kalau', 'nanti', 'menunggu', NULL)");

?>
