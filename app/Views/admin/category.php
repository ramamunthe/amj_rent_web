<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h3 class="mb-0">Data Kategori Armada</h3>
    <p class="text-muted">Tambah,ubah dan hapus data kategori disini.</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal-create">Tambah Slider</button>

    <?php if (session()->get('success')) : ?>
        <div class="d-flex justify-content-center">
            <div class="alert alert-success alert-dismissible mt-3" role="alert" style="max-width: 500px;width: 100%;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <span><strong>Success:</strong><?= session()->get('success'); ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="card mt-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-borderless align-middle">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?= $category['category_name']; ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="/admin-category-delete/<?= $category['category_id']; ?>" onclick="return confirm('Anda yakin?')" class="btn link-danger" type="button">Hapus</a>
                                        <button class="btn link-primary" data-bs-toggle="modal" data-bs-target="#modal-edit<?= $category['category_id']; ?>" type="button">Ubah</button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <form action="/admin-category-store" method="POST">
        <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-createLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-createLabel">Tambah Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3"><label class="form-label">Nama Kategori</label>
                            <input class="form-control" type="text" name="category_name" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php foreach ($categories as $category) : ?>
        <form action="/admin-category-update/<?= $category['category_id']; ?>" method="POST">
            <div class="modal fade" id="modal-edit<?= $category['category_id']; ?>" tabindex="-1" aria-labelledby="modal-createLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-createLabel">Ubah Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3"><label class="form-label">Nama Kategori</label>
                                <input class="form-control" type="text" name="category_name" value="<?= $category['category_name']; ?>" required />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach; ?>

</div>

<?= $this->endSection() ?>