<table class="table table-striped" id="data_mahasiswa">
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
    <?php if ($data) :
      $i = 1 + (10 * ($currentPage - 1));
      foreach ($data as $index => $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td id="nim<?= $row['id']; ?>" ondblclick="editxml('nim', '<?= $row['id']; ?>', 1)" title="Klik 2 kali untuk edit"><?= $row['nim'] ?></td>
          <td id="nama<?= $row['id']; ?>" ondblclick="editxml('nama', '<?= $row['id']; ?>', 2)" title="Klik 2 kali untuk edit"><?= $row['nama'] ?></td>
          <td id="prodi<?= $row['id']; ?>" ondblclick="editxml('prodi', '<?= $row['id']; ?>', 3)" title="Klik 2 kali untuk edit"><?= $row['prodi'] ?></td>
          <td>
            <a href="<?= base_url('mahasiswa/edit'); ?>/<?= $row['id']; ?>" class="btn btn-warning text-white btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="<?= base_url('mahasiswa/hapus'); ?>/<?= $row['id']; ?>" method="post" class="d-inline">
              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Anda yakin menghapus data tersebut?')"><i class="bi bi-trash"></i> Hapus</button>
            </form>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach;
    else :  ?>
      <tr>
        <td colspan='5' class="text-center">DATA KOSONG!</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
<p colspan="5">Showing <?= (1 + (10 * ($currentPage - 1))) . ' to ' . ((1 + (10 * ($currentPage - 1))) + count($mahasiswa)) . ' of ' . $count . ' entries'; ?> </p>
<?= $pager->links('mahasiswa', 'my_pager'); ?>