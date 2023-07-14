<?php
require('koneksi.php');
session_start();

$id = $_GET['id'];
$koneksi->query("DELETE FROM mahasiswa WHERE id='$id'");
$_SESSION['pesan'] = "Data Berhasil Dihapus!";
header("Location:admin.php");
