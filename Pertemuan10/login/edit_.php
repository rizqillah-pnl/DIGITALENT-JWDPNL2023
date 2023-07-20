<?php
require("koneksi.php");
$nim = $_POST['tnim'];
$nama = $_POST['tnama'];
$prodi = $_POST['tprodi'];
echo $id = $_POST['tid'];

$koneksi->query("update mahasiswa set nim='$nim',nama='$nama', prodi='$prodi' where id='$id'");
?>
<meta http-equiv="refresh" content="0;admin.php">