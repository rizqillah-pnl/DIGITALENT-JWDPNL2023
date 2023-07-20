<?php
if (isset($_SESSION['user'])) {
  header("location:admin.php");
}

$url = 'register';
$title = "Register Akun";
require_once('layouts/header.php');
?>
<div class="row justify-content-center">
  <div class="card col-6 bg-light mt-3 p-4">
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
        <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required autofocus>
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

<?php require_once('layouts/footer.php'); ?>