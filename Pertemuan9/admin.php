<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header("location:index.php?message=belum");
}
require("koneksi.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>ADMIN</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-between py-2">
            <?php if (isset($_SESSION['pesan'])) : ?>
                <div class="col-12">
                    <div class="alert alert-primary">
                        <?= $_SESSION['pesan']; ?>
                    </div>
                </div>
                <?php unset($_SESSION['pesan']) ?>
            <?php endif; ?>

            <div class="input-group my-3 col-md-4">
                <input type="text" class="form-control" placeholder="Searching" id="search">
            </div>
            <div class="input-group my-3 col-md-4">
                <a class="btn btn-info btn-sm ml-auto" href="log.php" id="button-addon2">Logout</a>
            </div>
            <div class="col-12">
                <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
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
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['prodi'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data tersebut?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>