<?php
include '../koneksi.php';
$query ="SELECT * FROM user WHERE role ='siswa'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan data siswa</title>
</head>
<body>
    <center>
        <h2>Data Siswa</h2>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['nis']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <td>
                    <a href="edit.php?nis=<?php echo $row['nis']; ?>">Edit</a>
                      <a href="delete.php?nis=<?php echo $row['nis']; ?>"
                            onclick="retrun confrim('Yakin ingin menghapus data ini?')">
                            Delete
                      </a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </center>
</body>
</html>