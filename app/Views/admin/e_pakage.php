<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h3 class="mb-0">Ubah Data Paket Wisata</h3>
    <form method="post" enctype="multipart/form-data" action="/admin-pakage-update/<?= $pakage['id']; ?>">
        <div class="modal-header">
        </div>
        <div class="modal-body">
            <div class="d-flex justify-content-center mb-3">
                <img class="img-fluid img-car" id="img_priv" src="/images/<?= $pakage['image']; ?>" />
                <input type="hidden" name="gambarLama" value="<?= $pakage['image']; ?>">
            </div>
            <div class="mb-3"><label class="form-label">Pilih Gambar</label>
                <input class="form-control" type="file" id="imgInp" name="image" />
            </div>
            <div class="mb-3"><label class="form-label">Deskripsi Pelanggan</label>
                <textarea class="form-control" name="body"><?= $pakage['body']; ?></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/admin-pakage-delete/<?= $pakage['id']; ?>" onclick="return confirm('Anda yakin?')" class="btn btn-danger" type="button">Hapus</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>