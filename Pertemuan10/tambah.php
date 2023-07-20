<?php
$title = "Tambah Data";
require_once('layouts/header.php');
?>
<h1 class="mt-3 mb-3 text-center">Tambah Data Mahasiswa</h1>
<form action="" method="post">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi</label>
    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Prodi" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
</form>
</div>

<?php
if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];

  $insert = $koneksi->query("INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')");
  if ($insert) {
    $_SESSION['pesan'] = 'Data Berhasil Ditambahkan!';
  } else {
    $_SESSION['pesan'] = 'Data Gagal Ditambahkan!';
  }

  header('Location: admin.php');
}
?>

<?php require_once('layouts/footer.php'); ?>