<?php
session_start();

$user = $_POST['tuser'];
$pass = md5($_POST['tpass']);

require("koneksi.php");
//Buat tabel jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    nama VARCHAR(50) NOT NULL)";
$koneksi->query($sql);

$query = "select*from user";
$data = $koneksi->query($query);

//cek jika user kosong maka tambahkan akun default
$jlh = mysqli_num_rows($data);
if ($jlh < 1) {
    $query = "INSERT INTO user VALUES (NULL, 'budi@gmail.com', MD5('12345'), 'budi')";
    $koneksi->query($query);
}



//uji user dan password yang di input dengan isi daatabase
$query = $koneksi->query("select * from user where user='$user' and pass='$pass'");
$data = $query->fetch_assoc();
if (isset($data['user'])) {
    $_SESSION['user'] = $user;
    $_SESSION['nama'] = $data['nama'];
    //jika ingat saya di chek
    if (isset($_POST['tingat'])) {
        //set cooki 1 jam
        setcookie('user1', $user, time() + 3600);
        setcookie('pass1', $_POST['tpass'], time() + 3600);
    }
    header('location:admin.php');
} else {
    header('location:index.php?message=salah');
}
