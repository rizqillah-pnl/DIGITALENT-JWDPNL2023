<?php
$title = "Edit Data";
require_once('layouts/header.php');

$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM mahasiswa WHERE id='$id'");
$data = $data->fetch_assoc();
?>
<h1 class="mt-3 mb-3 text-center">Edit Data Mahasiswa</h1>
<form action="" method="post">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required value="<?= $data['nim']; ?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required value="<?= $data['nama']; ?>">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi</label>
    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Prodi" required value="<?= $data['prodi']; ?>">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

<?php
if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $prodi = $_POST['prodi'];

  $update = $koneksi->query("UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id='$id'");
  if ($update) {
    $_SESSION['pesan'] = 'Data Berhasil Diubah!';
  } else {
    $_SESSION['pesan'] = 'Data Gagal Diubah!';
  }

  header('Location: admin.php');
}
?>

<?php require_once('layouts/footer.php'); ?>