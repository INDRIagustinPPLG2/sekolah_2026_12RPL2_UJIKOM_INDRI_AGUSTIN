<?php
include '../koneksi.php';
$query ="SELECT * FROM kategori";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA KATEGORI</title>
</head>
<body>
    <center>
        <h2>DATA KATEGORI</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID KATEGORI</th>
                <th>NAMA KATEGORI</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id_kategori']; ?></td>
                <td><?php echo $row['ket_kategori']; ?></td>
                <td>
                    <a href="edit-kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>">Edit</a>
                     <a href="delete-kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Delete
                      </a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </center>
</body>
</html>