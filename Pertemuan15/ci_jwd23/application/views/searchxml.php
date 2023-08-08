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
    $no = 0;
    foreach ($dbmhs as $m) {
        $no++; ?>
        <tr>
            <td><?php echo $no ?>
            <td><?php echo $m['nim'] ?></td>
            <td><?php echo $m['nama'] ?></td>
            <td>
                <?php echo $m['prodi'] ?>
            </td>
            <td>
                <a href="<?php echo base_url() ?>DTS/delete_mhs/<?php echo $m['id'] * 12345 * 12345 ?>">
                    <button class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                </a>
                <a href="<?php echo base_url() ?>DTS/update_mhs/<?php echo $m['id'] * 12345 * 12345 ?>">

                    <button class="btn btn-flat btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                </a>
            </td>

        </tr>
    <?php } ?>
</table>