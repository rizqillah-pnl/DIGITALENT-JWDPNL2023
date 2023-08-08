<div class="container">
    <div class="row justify-content-between py-2">


        <form class="input-group my-3 col-md-4" action="<?php echo base_url() ?>DTS/search" method="post">
            <input name="tsearch" type="text" class="form-control" placeholder="Searching" id="search">
            <button class="btn btn-outline-secondary" type="submit" id="btnsearch">search</button>
        </form>

        <div class="input-group my-3 col-md-4">
            <a href="DTS/adduser" class="ml-auto">
                <button class="btn btn-info btn-sm" type="button" id="button-addon2">Add Data</button>

            </a>
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
            $no = 0;
            if ($dbsearch) {
                foreach ($dbsearch as $m) {
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
            <?php }
            } else {
                echo "<tr><td colspan=5>data ditemukan</td></tr>";
            } ?>
        </table>
    </div>
</div>