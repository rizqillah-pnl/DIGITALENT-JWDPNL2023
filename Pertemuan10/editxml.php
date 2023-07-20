<?php
session_start();
if (!isset($_SESSION['user'])) {
  return json_encode(['status' => 400]);
}
require("koneksi.php");
$id = $_POST['id'];
$value = trim($_POST['value']);
$kolom = $_POST['kolom'];

if ($kolom == 1) {
  $sql = $koneksi->query("UPDATE mahasiswa SET nim='$value' WHERE id='$id'");
} elseif ($kolom == 2) {
  $sql = $koneksi->query("UPDATE mahasiswa SET nama='$value' WHERE id='$id'");
} elseif ($kolom == 3) {
  $sql = $koneksi->query("UPDATE mahasiswa SET prodi='$value' WHERE id='$id'");
}

if ($sql) :
  return json_encode(['status' => 200]);
else :
  return json_encode(['status' => 500]);
endif;
