<?= $this->extend('layouts/main') ?>

<?= $this->section('container') ?>
<div class="row justify-content-between py-2">
  <h1 class="text-center mt-2">DAFTAR MAHASISWA</h1>
  <div class="input-group my-3 col-md-4">
    <input type="text" class="form-control" placeholder="Searching" id="search">
  </div>
  <div class="row d-flex flex-reverse">
    <div class="col-9 col-md-10">
      <a href="/mahasiswa/tambah" class="btn btn-primary">+ Tambah Data</a>
    </div>
    <div class="col-3 col-md-2">
      <form action="/logout" method="post" class="d-inline">
        <button type="submit" class="btn btn-danger btn-sm ml-auto" name="logout"><i class="bi bi-box-arrow-left"></i> Logout</button>
      </form>
    </div>
  </div>
</div>
<div id="content">
  <table class="table table-striped">
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
      <?php foreach ($mahasiswa as $index => $row) : ?>
        <tr>
          <td><?= $index + 1; ?></td>
          <td id="nim<?= $row['id']; ?>" ondblclick="editxml('nim', '<?= $row['id']; ?>', 1)" title="Klik 2 kali untuk edit"><?= $row['nim'] ?></td>
          <td id="nama<?= $row['id']; ?>" ondblclick="editxml('nama', '<?= $row['id']; ?>', 2)" title="Klik 2 kali untuk edit"><?= $row['nama'] ?></td>
          <td id="prodi<?= $row['id']; ?>" ondblclick="editxml('prodi', '<?= $row['id']; ?>', 3)" title="Klik 2 kali untuk edit"><?= $row['prodi'] ?></td>
          <td>
            <a href="mahasiswa/edit?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
            <form action="mahasiswa/hapus" method="post" class="d-inline">
              <input type="hidden" name="id" value="<?= $row['id']; ?>">
              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Anda yakin menghapus data tersebut?')">Hapus</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
<?= $this->endSection(); ?>