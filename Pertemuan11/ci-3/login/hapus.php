<?php
require("koneksi.php");
$id = $_GET['id'];
$koneksi->query("delete  from mahasiswa where id='$id'");
?>
<meta http-equiv="refresh" content="0;admin.php">