<?php
if (isset($_POST['username'])) {
     $nama       =$_POST['username'];
     $code  =password_hash($_POST['password'],PASSWORD_DEFAULT); 
     $peran  =$_POST['role'];
     $nomor   =$_POST['nis'];
     $ruangan =$_POST['kelas'];
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_indriagustin");

mysqli_query($koneksi,"INSERT INTO user (id, username, password, role, nis, kelas) VALUES (NULL, '$nama', '$code', '$peran', '$nomor', '$ruangan')");
}
echo "<h2>Pengaduan berhasil dikirim</h2>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>TAMBAH DATA SISWA</h1>
    <form action="" method="POST">
        <div>
        <label for="">NAMA</label> <br/>
        <input type="text" name="username" />
        </div>
         <div>
        <label for="">password</label> <br/>
        <input type="text" name="password"/>
        </div>
        <div>
        <label for="">role</label> <br/>
        <select name="role">
            <option VALUES="siswa" >siswa</option>
            <option VALUES="admin" >admin</option>
        </select>
        </div>
         <div>
        <label for="">NIS</label> <br/>
        <input type="text" name="nis"/>
        </div>
         <div>
        <label for="">KELAS</label> <br/>
        <input type="text" name="kelas" />
        </div>
        <div>
        <button>submit</button>
        </div>
    </form>
    </center>
</body>
</html>

   
