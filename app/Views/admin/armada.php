<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h1 class="mb-0">Armada</h1>
    <p class="text-muted">Tambah,hapus dan ubah data armada disini.</p>
    <a href="/admin-armada-create" class="btn btn-primary" type="button">Tambah Armada</a>

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
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cars as $car) : ?>
                            <tr>
                                <td><img class="img-fluid img-table" src="/images/<?= $car['image']; ?>"></td>
                                <td><?= $car['car_title']; ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="/admin-armada-delete/<?= $car['car_id']; ?>" onclick="return confirm('Anda yakin?')" class="btn link-danger" type="button">Hapus</a>
                                        <a href="/admin-armada-edit/<?= $car['car_id']; ?>" class="btn link-primary" type="button">Ubah</a>
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
</div>
<?= $this->endSection() ?>