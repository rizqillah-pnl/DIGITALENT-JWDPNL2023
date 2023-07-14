<?php
session_start();
if (isset($_SESSION['user'])) {
  header("location:admin.php");
}

require('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Register Akun</title>
</head>

<body>
  <div class="row justify-content-center">
    <div class="card col-4 bg-light mt-3 p-4">
      <?php if (isset($_GET['message']) && $_GET['message'] == 'salah') {
      ?>
        <div class="alert alert-danger mb-4" role="alert">
          Email/Password salah!
        </div>
      <?php } ?>
      <?php if (isset($_GET['message']) && $_GET['message'] == 'belum') {
      ?>
        <div class="alert alert-danger mb-4" role="alert">
          Login terlebih dahulu!
        </div>
      <?php } ?>

      <h1 class="text-center mb-3">Daftarkan Akun Anda!</h1>
      <form action="" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input name="username" type="text" class="form-control" id="username" placeholder="Masukkan Username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan Password" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
        <a href="index.php" class="btn btn-link text-muted">Sign In?</a>
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $insert = $koneksi->query("INSERT INTO user (username, password, nama) VALUES ('$username', '$password', '$nama')");
    if ($insert) {
      $_SESSION['pesan'] = "Akun Berhasil Dibuat!";
    } else {
      $_SESSION['pesan'] = "Akun Gagal Dibuat!";
    }

    header("Location: index.php");
  }

  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>