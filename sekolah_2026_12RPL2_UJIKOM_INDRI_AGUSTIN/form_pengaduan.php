<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pengaduan</title>
</head>
<body>
    <center>
    <h1>halaman pengaduan</h1>
   <form action="proses-pengaduan.php" method="POST">
        <div>
        <label for="">NIS</label> <br/>
        <input type="text" name="nis"/>
        </div>
        <div>
        <label for="">Kategori</label> <br/>
        <select name="kategori">
            <option value="">-- pilih kategori --</option>
            <option value="1">Fasilitas</option>
            <option value="2">Lingkungan</option>
        </select>
        </div>
        <div>
        <label for="">lokasi</label> <br/>
        <input type="text" name="lokasi"/>
        </div>
        <div>
        <label for="">keterangan</label> <br/>
        <textarea name="keterangan"></textarea>
        </div>
        <div>
        <button>kirim</button>
        </div>
    </form>
    </center>
</body>
</html>
<!-- <?php
//  mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
// VALUES (NULL, '006', '1', 'kalau', 'nanti', 'menunggu', NULL)");
// ?> -->