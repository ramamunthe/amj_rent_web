<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <form class="col-md-6" action="/admin-armada-update/<?= $car['car_id']; ?>" method="post" enctype="multipart/form-data">
        <h3>Form Tambah Armada</h3>
        <div class="d-flex justify-content-center mb-3">
            <img id="img_priv" class="img-fluid img-car" src="/images/<?= $car['image']; ?>" />
            <input type="hidden" name="gambarLama" value="<?= $car['image']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar Armada</label>
            <input id="imgInp" class="form-control" type="file" accept="image/*" name="image" />
            <span class="form-text">Gambar tidak boleh lebih dari 1Mb</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Armada</label>
            <input class="form-control" type="text" required name="car_title" value="<?= $car['car_title']; ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select class="form-select" required name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option <?= $car['category_id'] == $category['category_id'] ? 'selected' : ''; ?> value="<?= $category['category_id']; ?>"><?= $category['category_name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <textarea class="form-control" name="car_body"><?= $car['car_body']; ?></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>