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
     <title>EDIT</title>
        <style>
         body{
            margin: 0;
            min-height: 100vh;
            diplay: flex;
            justify-content: center;
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
        a {
            color: white;
            text-decoration: none; 
        }
          .ibu{
           width: 300px;
           height: 300px;
           margin: 100px auto;
          margin-top: 50px;
           background: #e3eed4;
           border-bottom: 4px solid #547561;
           padding: 20px;
           border-radius: 20px;     
          }
          .box {
            margin-top: 50px;
          }
        button {
            width: 150px; 
            height: 35px;
            margin-top: 50px;
            border-radius: 5px;
            background-color: #375534;
            border: none;
            border-bottom: 4px solid #547561;
            transition: all 0.3s ease; 
        }
        button:hover {
            background-color: #7da78e;
        }
     </style>
</head>
<body>
        <header>
         <div> <img src="https://www.smkmutucikampek.sch.id/wp-content/uploads/2021/06/logo_mutu_png_transparant-removebg-preview-1.png"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div>
         <div><a class="i" href="tambah-kategori.php">BACK</a></div>
    </header>
    
          <center><h1>EDIT KATEGORI</h1>
      <div class="ibu">
          <form method="POST">
               <div class="box">
                    <label for="">ID KATEGORI</label><br/>
                    <input type="text" name="id_kategori" value="<?php echo $row['id_kategori']; ?>"><br/>
               </div>
               <div class="box">    
                    <label for="">NAMA KATEGORI</label><br/>
                    <input type="text" name="ket_kategori" value="<?php echo $row['ket_kategori']; ?>"><br/>
               </div> 
               <div>
                    <button type="submit" name="submit">Update</button>
               </div>
               </form>
     </div>
     </center>
</body>
</html>