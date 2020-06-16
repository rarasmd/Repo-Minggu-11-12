<br>
<br>
<h3>Data Sekolah</h3>
<table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>FOTO</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($sekolah as $meong) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $meong['nama'] ?></td>
                <td><?= $meong['alamat'] ?></td>
                <td>
                    <img src="<?= base_url('assets/') ?>logo/<?= $meong['logo']; ?>" class="img-circle" width="100"></td>
                <td>
                    <a href="<?= base_url('sekolah/cetak/lihat/') . $meong['id']; ?>" target="_blank" class="btn btn-warning"> PDF </a>
                    <a href="<?= base_url('sekolah/cetak/cetak_pdf/') . $meong['id']; ?>" class="btn btn-warning"> Download </a>
                    <a href="<?= base_url('sekolah/awal/edit/') .  $meong['id']; ?>" class="btn btn-warning"> EDIT </a>
                    <a href="<?= base_url('sekolah/awal/hapus/') .  $meong['id']; ?>" class="btn btn-warning"> HAPUS </a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</div>