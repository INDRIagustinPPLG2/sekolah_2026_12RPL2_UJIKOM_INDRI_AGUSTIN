<?php
include '../koneksi.php';

$nis = $_GET['nis'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE nis='$nis'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
     $nama = $_POST['username'];
     $kelas = $_POST['kelas'];

     mysqli_query($koneksi, "UPDATE user SET username='$nama',
          kelas='$kelas' WHERE nis='$nis'");
     header("Location: data-siswa.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
         
     </style>
</head>
<body>
     <div>
          <h1>Edit data siswa</h1>
          <form method="POST">

               <label for="">Username</label><br/>
               <input type="text" name="username" value="<?php echo $row['username']; ?>"><br/>

               <label for="">Kelas</label><br/>
               <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"><br/>

               <button type="submit" name="submit">Update</button>
          </form>
     </div>
</body>
</html>