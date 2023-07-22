<?php $this->extend('layouts/main') ?>

<?php $this->section('content') ?>
<div class="row justify-content-center">
  <?php if (isset($_SESSION['pesan'])) : ?>
    <div class="col-12">
      <div class="alert alert-primary">
        <?= $_SESSION['pesan']; ?>
      </div>
    </div>
    <?php unset($_SESSION['pesan']) ?>
  <?php endif; ?>
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
    <h1 class="text-center">Selamat Datang!</h1>
    <form action="proses.php" method="post">

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input name="username" value="<?= old('username'); ?>" type="text" class="form-control" id="username" placeholder="Masukkan Username" autofocus>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan Password">
      </div>
      <div class="mb-3 form-check">
        <input name="remember_me" type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
      </div>

      <button type="submit" class="btn btn-primary">Sign In</button>
      <a href="register.php" class="btn btn-link text-muted">Sign Up?</a>
    </form>
  </div>
</div>
<?php $this->endSection() ?>