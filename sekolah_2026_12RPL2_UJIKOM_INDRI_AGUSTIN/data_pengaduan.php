<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'siswa') {
    header("Location: ../login.php");
    exit;
}
?>

<h1>DATA PENGADUAN</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO</th><th>tanggal</th><th>kategori </th>
         <th>Nama Kategori</th>
          <th>Lokasi</th>
        <th>Keterangan</th>
         <th>status</th>
         <th>Detail pengaduan</th>
    </tr> 
<?php include 'koneksi.php'; $no =1;
$query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori
                          FROM input_aspirasi
                          LEFT JOIN kategori ON
                          input_aspirasi.id_kategori = kategori.id_kategori");
while($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$data['tanggal']?></td>
            <td><?=$data['id_kategori']?></td>
            <td><?=$data['ket_kategori']?></td>
            <td><?=$data['lokasi']?></td>
            <td><?=$data['keterangan']?></td>
            <td><?=$data['status']?></td>

            <td>
                <a href="proses-pengaduan.php?id=<?=$data['id_pelaporan'] ?>">
                    <button>Lihat</button>
            </td>

        </tr>
    <?php } ?>
</table>