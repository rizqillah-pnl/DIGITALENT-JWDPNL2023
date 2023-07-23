<?php $this->extend('layouts/main') ?>

<?php $this->section('content') ?>
<div class="row justify-content-center">
  <div class="card col-6 bg-light mt-3 p-4">
    <h1 class="text-center mb-3">Selamat Datang!</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="col-12">
        <div class="alert alert-success">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      </div>
    <?php elseif (session()->getFlashdata('msg')) : ?>
      <div class="col-12">
        <div class="alert alert-warning">
          <?= session()->getFlashdata('msg'); ?>
        </div>
      </div>
    <?php endif; ?>
    <form action="<?= base_url('/login'); ?>" method="post">
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
      <div class="mb-3 form-check">
        <input type="checkbox" id="show_password" class="form-check-input">
        <label for="show_password" class="form-check-label">Show Password</label>
      </div>

      <button type="submit" class="btn btn-primary">Sign In</button>
      <a href="<?= base_url('/register'); ?>" class="btn btn-link text-muted">Sign Up?</a>
    </form>
  </div>
</div>
<?php $this->endSection() ?>