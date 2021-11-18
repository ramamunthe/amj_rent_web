<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h3 class="mb-0">Ubah Data Pelanggan</h3>
    <form method="post" enctype="multipart/form-data" action="/admin-customer-update/<?= $customer['id']; ?>">
        <div class="modal-body">
            <div class="d-flex justify-content-center mb-3">
                <img class="img-fluid img-car" id="img_priv" src="/images/<?= $customer['image']; ?>" />
                <input type="hidden" name="gambarLama" value="<?= $customer['image']; ?>">
            </div>
            <div class="mb-3"><label class="form-label">Pilih Gambar</label>
                <input class="form-control" type="file" id="imgInp" name="image" />
            </div>
            <div class="mb-3"><label class="form-label">Deskripsi Pelanggan</label>
                <textarea class="form-control" name="body"><?= $customer['body']; ?></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/admin-customer-delete/<?= $customer['id']; ?>" onclick="return confirm('Anda yakin?')" class="btn btn-danger" type="button">Hapus</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>