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
          margin-top: 15px;
           background: #e3eed4;
           border-bottom: 4px solid #547561;
           padding: 20px;
           border-radius: 20px;     
          }
          .box {
            margin-top: 25px;
          }
        button {
            width: 150px; 
            height: 35px;
            margin-top: 25px;
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
         <div> <img src="https://lh5.googleusercontent.com/proxy/y2VwwWrgukml2gdV3q9yxUPt9EX_sm2hpvr3VZjO_3hPbUwdhz8yfmDeD19P8WYxNtIDlYg_znTlxNf9MIAC-FzDSh7Innpqb29p0EZMW8uHUKIGAHu_VYoHL8VxEnQb8ePm6aZ_3usk7OxxpldF1HUERb4ds9TFXaoT1VhCFps"></div>
         <div>SMK TI MUHAMMADIYAH 1 CIKAMPEK</div>
         <div><a class="i" href="data-siswa.php">BACK</a></div>
    </header>
<center>
     <h1>Edit data siswa</h1>
     <div class="ibu">
          <form method="POST">
          <div class="box">
               <label for="">Username</label><br/>
               <input type="text" name="username" value="<?php echo $row['username']; ?>"><br/>
          </div>
          <div class="box">
               <label for="">Kelas</label><br/>
               <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"><br/>
          </div >
          <div>
               <button type="submit" name="submit">Update</button>
          </div>
          </form>
     </div>
</center>
</body>
</html>