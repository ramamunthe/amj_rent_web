<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h3 class="mb-0">Ubah Data Slider</h3>
    <form method="post" enctype="multipart/form-data" action="/admin-slider-update/<?= $slider['id']; ?>">
        <div class="modal-header">
        </div>
        <div class="modal-body">
            <div class="d-flex justify-content-center mb-3">
                <img class="img-fluid img-car" id="img_priv" src="/images/<?= $slider['image']; ?>" />
                <input type="hidden" name="gambarLama" value="<?= $slider['image']; ?>">
            </div>
            <div class="mb-3"><label class="form-label">Pilih Gambar</label>
                <input class="form-control" type="file" id="imgInp" name="image" />
            </div>
            <div class="mb-3"><label class="form-label">Deskripsi Pelanggan</label>
                <textarea class="form-control" name="body"><?= $slider['body']; ?></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/admin-slider-delete/<?= $slider['id']; ?>" onclick="return confirm('Anda yakin?')" class="btn btn-danger" type="button">Hapus</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>