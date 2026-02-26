<?php
include '../koneksi.php';

$id = $_GET['id_kategori'];
$data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
     $id_kategori = $_POST['id_kategori'];
     $ket_kategori = $_POST['ket_kategori'];

     mysqli_query($koneksi, "UPDATE kategori SET id_kategori='$id_kategori',
          ket_kategori='$ket_kategori' WHERE id_kategori='$id_kategori'");
     header("Location: tambah-kategori.php");
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
          <h1>EDIT KATEGORI</h1>
          <form method="POST">

               <label for="">ID KATEGORI</label><br/>
               <input type="text" name="id_kategori" value="<?php echo $row['id_kategori']; ?>"><br/>

               <label for="">NAMA KATEGORI</label><br/>
               <input type="text" name="ket_kategori" value="<?php echo $row['ket_kategori']; ?>"><br/>

               <button type="submit" name="submit">Update</button>
          </form>
     </div>
</body>
</html>