<?php
require("koneksi.php");
$search = $_GET['search'];
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
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
                </tr>
            <?php endwhile;
        else :
            ?>
            <tr>
                <td colspan='4' class="text-center">DATA TIDAK ADA!</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>