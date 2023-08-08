<?php
require("koneksi.php")

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
    <?php
    $data = $_GET['search'];
    $query = $koneksi->query("select*from mahasiswa where nim like '%$data%' or nama like '%$data%' or prodi like '%$data%'");
    $no = 0;
    while ($data = $query->fetch_array()) {
        $no++;
    ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['nim'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['prodi'] ?></td>


        </tr>
    <?php } ?>
</table>