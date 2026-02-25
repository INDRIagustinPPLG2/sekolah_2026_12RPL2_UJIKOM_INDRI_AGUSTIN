<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>

<?php
include '../koneksi.php' ;

$nis = $_GET['nis'];
mysqli_query($koneksi, "DELETE FROM user WHERE nis=$nis");

header("location: data-siswa.php");