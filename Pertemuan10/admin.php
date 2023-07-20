<?php
$title = "Dashboard";
require_once('layouts/header.php');
?>
<div class="row justify-content-between py-2">
    <?php if (isset($_SESSION['pesan'])) : ?>
        <div class="col-12">
            <div class="alert alert-primary">
                <?= $_SESSION['pesan']; ?>
            </div>
        </div>
        <?php unset($_SESSION['pesan']) ?>
    <?php endif; ?>

    <h1 class="text-center mt-2">DAFTAR MAHASISWA</h1>
    <div class="input-group my-3 col-md-4">
        <input type="text" class="form-control" placeholder="Searching" id="search">
    </div>
    <div class="row d-flex flex-reverse">
        <div class="col-9 col-md-10">
            <a href="tambah.php" class="btn btn-primary">+ Tambah Data</a>
        </div>
        <div class="col-3 col-md-2">
            <form action="logout.php" method="post" class="d-inline">
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
        <?php
        $query = $koneksi->query("SELECT * FROM mahasiswa");
        $no = 1;
        while ($data = $query->fetch_array()) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td id="nim<?= $data['id']; ?>" ondblclick="editxml('nim', '<?= $data['id']; ?>', 1)" title="Klik 2 kali untuk edit"><?= $data['nim'] ?></td>
                <td id="nama<?= $data['id']; ?>" ondblclick="editxml('nama', '<?= $data['id']; ?>', 2)" title="Klik 2 kali untuk edit"><?= $data['nama'] ?></td>
                <td id="prodi<?= $data['id']; ?>" ondblclick="editxml('prodi', '<?= $data['id']; ?>', 3)" title="Klik 2 kali untuk edit"><?= $data['prodi'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data tersebut?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</div>

<?php require_once('layouts/footer.php'); ?>