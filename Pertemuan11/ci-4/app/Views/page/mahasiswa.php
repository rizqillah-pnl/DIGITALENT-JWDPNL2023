<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?php $search = ''; ?>
<?php if (isset($_GET['search'])) : ?>
  <?php $search = $_GET['search']; ?>
<?php endif; ?>
<div class="row justify-content-between py-2">
  <h1 class="text-center mt-2">DAFTAR MAHASISWA</h1>
  <div class="mb-4">
    <span class="text-muted">Selamat Datang,</span> @<?= session()->get('user')['nama']; ?>
  </div>
  <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success">
      <?= session()->getFlashdata('success'); ?>
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-12 col-md-5">
      <form action="<?= base_url('/mahasiswa'); ?>" method="get" class="d-inline">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Searching..." aria-label="Searching..." aria-describedby="basic-addon2" id="search" name="search" value="<?= $search; ?>">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-9 col-md-10">
    <a href="<?= base_url('/mahasiswa/create'); ?>" class="btn btn-primary">+ Tambah Data</a>
  </div>
  <div class="col-3 col-md-2 d-flex flex-row-reverse">
    <form action="<?= base_url('/logout'); ?>" method="post" class="d-inline">
      <button type="submit" class="btn btn-danger btn-sm" name="logout"><i class="bi bi-box-arrow-left"></i> Logout</button>
    </form>
  </div>
</div>
<div class="col">
  <?php if ($search) : ?>
    <a href="<?= base_url('/mahasiswa'); ?>" class="btn btn-link"><i class="bi bi-arrow-left"></i> Kembali</a>
  <?php endif; ?>
</div>
<div id="content">
  <table class="table table-striped" id="data_mahasiswa">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1 + (10 * ($currentPage - 1));
      foreach ($mahasiswa as $index => $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td id="nim<?= $row['id']; ?>" ondblclick="editxml('nim', '<?= $row['id']; ?>', 1)" title="Klik 2 kali untuk edit"><?= $row['nim'] ?></td>
          <td id="nama<?= $row['id']; ?>" ondblclick="editxml('nama', '<?= $row['id']; ?>', 2)" title="Klik 2 kali untuk edit"><?= $row['nama'] ?></td>
          <td id="prodi<?= $row['id']; ?>" ondblclick="editxml('prodi', '<?= $row['id']; ?>', 3)" title="Klik 2 kali untuk edit"><?= $row['prodi'] ?></td>
          <td>
            <form action="<?= base_url('mahasiswa/hapus'); ?>/<?= $row['id']; ?>" method="post" class="d-inline">
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= base_url('mahasiswa/edit'); ?>/<?= $row['id']; ?>" class="btn btn-warning text-white btn-sm"><i class="bi bi-pencil-square"></i> <span class="d-none d-lg-inline">Edit</span></a>
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Anda yakin menghapus data tersebut?')"><i class="bi bi-trash"></i> <span class="d-none d-lg-inline">Hapus</span></button>
              </div>
            </form>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
  <p colspan="5">Showing <?= (1 + (10 * ($currentPage - 1))) . ' to ' . ((1 + (10 * ($currentPage - 1))) + count($mahasiswa)) - 1 . ' of ' . $pager->getDetails('mahasiswa')['total'] . ' entries'; ?> </p>
  <?= $pager->links('mahasiswa', 'my_pager'); ?>
</div>
<?= $this->endSection(); ?>