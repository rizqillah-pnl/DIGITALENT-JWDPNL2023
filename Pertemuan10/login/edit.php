<?php
require("header.php");
require("koneksi.php");
$id = $_GET['id'];
$query = $koneksi->query("select*from mahasiswa where id='$id'");
$data = $query->fetch_array();
?>
<div class="row justify-content-center">
    <div class="col col-md-4 p-3">


        <form action="edit_.php" method="post">
            <fieldset>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">NIM</label>
                    <input name="tnim" type="text" class="form-control" value="<?php echo $data['nim'] ?>" placeholder="Nomor Induk Mahasiswa">
                    <input name="tid" value="<?php echo $data['id'] ?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nama</label>
                    <input name="tnama" type="text" class="form-control" placeholder="Nama ..." value="<?php echo $data['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Prodi</label>
                    <input name="tprodi" type="text" class="form-control" placeholder="Program Studi" value="<?php echo $data['prodi'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </fieldset>
        </form>
    </div>
</div>
<?php
require("footer.php") ?>