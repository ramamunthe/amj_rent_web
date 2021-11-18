<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <form class="col-md-6" action="/admin-armada-store" method="post" enctype="multipart/form-data">
        <h3>Form Tambah Armada</h3>
        <div class="d-flex justify-content-center mb-3">
            <img id="img_priv" class="img-fluid img-car" src="../assets/img/img_priv.png" />
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar Armada</label>
            <input id="imgInp" class="form-control" type="file" accept="image/*" required name="image" />
            <span class="form-text">Gambar tidak boleh lebih dari 1Mb</span>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Armada</label>
            <input class="form-control" type="text" required name="car_title" />
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select class="form-select" required name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category['category_id']; ?>"><?= $category['category_name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi Armada</label>
            <textarea class="form-control" name="car_body"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>