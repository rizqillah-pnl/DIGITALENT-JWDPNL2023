<form class="col col-md-5 mx-auto bg-light mt-4 p-4" method="post" action="">
    <div class="form-group">
        <label>Nim</label>
        <!-- <input type="text" class="form-control" name="tnim"> -->
        <input type="text" class="form-control" name="tnim" value="<?php echo $dbMhs['nim'] ?>" readonly>
        <?php echo form_error('tnim', '<small class="form-text text-danger">', '</small>') ?>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="tnama" value="<?php echo $dbMhs['nama']  ?>">
        <?php echo form_error('tnama', '<small class="form-text text-danger">', '</small>') ?>

    </div>
    <div class="form-group">
        <label>Program Studi</label>
        <select class="form-control" name="tprodi">
            <option value="">--Pilih Prodi--</option>
            <option value="TRKJ" <?php if ($dbMhs['prodi'] == 'TRKJ') {
                                        echo 'selected';
                                    } ?>>TRKJ</option>
            <option value="TI" <?php if ($dbMhs['prodi'] == 'TI') {
                                    echo 'selected';
                                } ?>>TI</option>
            <option value="TRMM" <?php if ($dbMhs['prodi'] == 'TRMM') {
                                        echo 'selected';
                                    } ?>>TRMM</option>
        </select>
        <?php echo form_error('tprodi', '<small class="form-text text-danger">', '</small>') ?>

    </div>

    <div class="row p-4">

        <button type="submit" class="btn btn-primary ml-auto">Save</button>
    </div>
</form>