<?php
//sesuaikan dengan identitas server dan database
$servername = "localhost";
$usrname = "root";
$pwd = "";
$dbname = "db_jwd2023";


//buat database jika belum tersedia
$conn = new mysqli($servername, $usrname, $pwd);
$sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;
$conn->query($sql);
$conn->close();

//koneksi databse
$koneksi = mysqli_connect($servername, $usrname, $pwd, $dbname) or die("gagal");
