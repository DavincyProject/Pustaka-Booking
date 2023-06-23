<!-- ubah_buku.php -->

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <?= form_open_multipart('buku/ubahBuku'); ?>
            <input type="hidden" name="id" value="<?= $buku[0]['id']; ?>">
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $buku[0]['judul_buku']; ?>">
                <?= form_error('judul_buku', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" id="id_kategori" name="id_kategori">
                    <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k['id_kategori']; ?>" <?php if ($k['id_kategori'] == $id) {
                                                                        echo "selected";
                                                                    } ?>><?= $k['kategori']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('id_kategori', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku[0]['pengarang']; ?>">
                <?= form_error('pengarang', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku[0]['penerbit']; ?>">
                <?= form_error('penerbit', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Terbit</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $buku[0]['tahun_terbit']; ?>">
                <?= form_error('tahun', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="isbn">Nomor ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku[0]['isbn']; ?>">
                <?= form_error('isbn', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" value="<?= $buku[0]['stok']; ?>">
                <?= form_error('stok', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <input type="hidden" name="old_pict" value="<?= $buku[0]['image']; ?>">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>