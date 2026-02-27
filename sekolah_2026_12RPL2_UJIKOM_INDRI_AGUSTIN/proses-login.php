<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    if (password_verify($password, $data['password'])) {

        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['nis']      = $data['nis'];

        if ($data['role'] == "admin") {
            header("Location: admin/halaman-utama.php");
        } else if ($data['role'] == "siswa") {
            header("Location: index.php");
        }

    } else {
        echo "Password salah";
    }
} else {
    echo "Username tidak ditemukan";
}
?>