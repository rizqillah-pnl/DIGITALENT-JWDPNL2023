<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header("location:index.php?message=belum");
}
require("koneksi.php");
require("header.php");
?>



<div class="container">
    <div class="row justify-content-between py-2">

        <div class="input-group my-3 col-md-4">
            <input type="text" class="form-control" placeholder="Searching" id="search">
            <button class="btn btn-outline-secondary" type="button" id="btnsearch">search</button>
        </div>
        <div class="input-group my-3 col-md-4">
            <button class="btn btn-info btn-sm ml-auto" type="button" id="button-addon2">Logout</button>
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
                    <th></th>
                </tr>
            </thead>
            <?php
            $query = $koneksi->query("select*from mahasiswa");
            $no = 0;
            while ($data = $query->fetch_array()) {
                $no++;
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nim'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['prodi'] ?></td>
                    <td>
                        <a href="hapus.php?id=<?php echo $data['id'] ?>">
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </a>
                        <a href="edit.php?id=<?php echo $data['id'] ?>">
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </a>
                    </td>

                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php
require("footer.php") ?>