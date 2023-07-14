<?php
require('koneksi.php');
session_start();
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM mahasiswa WHERE id='$id'");
$data = $data->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Edit Data</title>
</head>

<body>
  <div class="container">
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>