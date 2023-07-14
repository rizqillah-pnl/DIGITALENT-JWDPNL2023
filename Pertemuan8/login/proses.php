<?php
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

require("koneksi.php");
//Buat tabel jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nama VARCHAR(50) NOT NULL)";
$koneksi->query($sql);

$query = "SELECT * FROM user";
$data = $koneksi->query($query);

//cek jika user kosong maka tambahkan akun default
$jlh = mysqli_num_rows($data);
if ($jlh < 1) {
    $query = "INSERT INTO user VALUES (NULL, 'admin', MD5('admin'), 'admin')";
    $koneksi->query($query);
}


//uji user dan password yang di input dengan isi daatabase
$query = $koneksi->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = $query->fetch_assoc();
if (isset($data['username'])) {
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];
    if (isset($_POST['remember_me'])) {
        //set cooki 1 jam
        setcookie('username', $username, time() + 3600);
        setcookie('password', $_POST['tpass'], time() + 3600);
    }
    header('location:admin.php');
} else {
    header('location:index.php?message=salah');
}
