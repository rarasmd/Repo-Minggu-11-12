<br>
<br>

<?= form_open_multipart('sekolah/awal/edit_upload') ?>

<div class="col-md-6">
    <?php foreach ($sekolah as $sekolas) : ?>
        <div class="form-group">
            <label for="nama">Nama </label>
            <input type="hidden" name="id" value="<?= $sekolas['id'] ?>">
            <input type=" text" class="form-control" id="nama" name="nama" value="<?= $sekolas['nama'] ?>">
            <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>

        </div>
        <div class=" form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $sekolas['alamat'] ?>">
            <?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class=" form-group">
            <label for="logo">Logo</label>
            <img src="<?= base_url('assets/') ?>logo/<?= $sekolas['logo'] ?>" class="img-thumbnail" style="width:30%;">
            <input type="file" class="form-control" name="logo" id="logo" value="<?= $sekolas['logo'] ?>">
        </div>
        <td><input type="submit" name="submit" class="btn btn-outline-success" value="Simpan"></td>
    <?php endforeach ?>
</div>

</form>