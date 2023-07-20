<?php
require("koneksi.php");
$id = $_GET['id'];
echo $isi = $_GET['isi'];
$klm = $_GET['klm'];
if ($klm == 1) {
    $koneksi->query("update mahasiswa set nim='$isi' where id='$id'");
} elseif ($klm == 2) {
    $koneksi->query("update mahasiswa set nama='$isi' where id='$id'");
} elseif ($klm == 3) {
    $koneksi->query("update mahasiswa set prodi='$isi' where id='$id'");
}
