<?php
require("koneksi.php");
session_start();
if (!isset($_SESSION['user'])) :
    echo "<h1 class='text-center text-danger'>Page Not Found!</h1>";
else :
    $search = $_POST['search'];
?>
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
            <?php
            $query = $koneksi->query("SELECT * FROM mahasiswa WHERE nim LIKE '%$search%' or nama LIKE '%$search%' or prodi LIKE '%$search%'");
            $no = 1;
            if (mysqli_num_rows($query) > 0) :
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
                <?php endwhile;
            else :
                ?>
                <tr>
                    <td colspan='5' class="text-center">DATA KOSONG!</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>