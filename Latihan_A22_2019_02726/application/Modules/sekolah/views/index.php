<br>
<center>
<h2>Welcome To The Jungle</h2>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
        <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>

    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
        <?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <label for="logo">Logo</label>
        <input type="file" class="form-control" name="logo" id="logo">
    </div>

    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
</form>