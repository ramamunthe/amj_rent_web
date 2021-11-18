<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h3 class="mb-0">Data Slider</h3>
    <p class="text-muted">Tambah,ubah dan hapus data Slider disini.</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal-create">Tambah Slider</button>

    <?php if (session()->get('success')) : ?>
        <div class="d-flex justify-content-center">
            <div class="alert alert-success alert-dismissible mt-3" role="alert" style="max-width: 500px;width: 100%;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <span><strong>Success:</strong><?= session()->get('success'); ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <?php foreach ($sliders as $slider) : ?>
            <div class="col-md-4 mb-3">
                <div class="card"><img class="card-img-top w-100 d-block img-fluid" src="/images/<?= $slider['image']; ?>" />
                    <div class="card-body">
                        <div>
                            <?= $slider['body']; ?>
                        </div>
                        <a href="/admin-slider-edit/<?= $slider['id']; ?>" class="btn btn-primary" type="button">
                            <i class="far fa-edit"></i> Ubah Data</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal Create -->
<div id="modal-create" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="/admin-slider-store">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pelanggan</h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center mb-3">
                        <img class="img-fluid img-car" id="img_priv" src="../assets/img/img_priv.png" />
                    </div>
                    <div class="mb-3"><label class="form-label">Pilih Gambar</label>
                        <input class="form-control" type="file" id="imgInp" name="image" required />
                    </div>
                    <div class="mb-3"><label class="form-label">Deskripsi Pelanggan</label>
                        <textarea class="form-control" name="body"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>