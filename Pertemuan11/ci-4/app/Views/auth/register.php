<?php $this->extend('layouts/main') ?>

<?php $this->section('content') ?>
<div class="row justify-content-center">
  <div class="card col-6 bg-light mt-3 p-4">
    <h1 class="text-center mb-3">Daftarkan Akun Anda!</h1>
    <?php if (session()->getFlashdata('msg')) : ?>
      <div class="col-12">
        <div class="alert alert-danger">
          <?= session()->getFlashdata('msg'); ?>
        </div>
      </div>
    <?php endif; ?>
    <form action="<?= base_url('/register'); ?>" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input name="nama" type="text" class="form-control <?= ($validation) ? ($validation->hasError('nama')) ? 'is-invalid' : '' : ''; ?>" value="<?= old('nama'); ?>" id="nama" placeholder="Masukkan Nama" required autofocus>
        <?php if ($validation) : ?>
          <?php if ($validation->hasError('nama')) : ?>
            <div class="invalid-feedback">
              <?= $validation->getError('nama'); ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input name="username" type="text" class="form-control <?= ($validation) ? ($validation->hasError('username')) ? 'is-invalid' : '' : ''; ?>" value="<?= old('username'); ?>" id="username" placeholder="Masukkan Username" minlength="4" required>
        <?php if ($validation) : ?>
          <?php if ($validation->hasError('username')) : ?>
            <div class="invalid-feedback">
              <?= $validation->getError('username'); ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control <?= ($validation) ? ($validation->hasError('password')) ? 'is-invalid' : '' : ''; ?>" id="password" placeholder="Masukkan Password" minlength="4" required>
        <?php if ($validation) : ?>
          <?php if ($validation->hasError('password')) : ?>
            <div class="invalid-feedback">
              <?= $validation->getError('password'); ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Konfirmasi Password</label>
        <input name="confirmation_password" type="password" class="form-control <?= ($validation) ? ($validation->hasError('confirmation_password')) ? 'is-invalid' : '' : ''; ?>" id="confirmation_password" placeholder="Masukkan Password" minlength="4" required>
        <?php if ($validation) : ?>
          <?php if ($validation->hasError('confirmation_password')) : ?>
            <div class="invalid-feedback">
              <?= $validation->getError('confirmation_password'); ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" id="show_password" class="form-check-input">
        <label for="show_password" class="form-check-label" style="opacity: .8;">Show Password</label>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
      <a href="<?= base_url('/login'); ?>" class="btn btn-link text-muted">Sign In?</a>
    </form>
  </div>
</div>
<?php $this->endSection() ?>