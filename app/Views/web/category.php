<?= $this->extend('web/master') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h3 class="mb-0" data-aos="zoom-in"><?= $category['category_name']; ?></h3>
    <p class="text-muted" data-aos="zoom-in">Menampilkan data mobil bedasarkan kategori <?= $category['category_name']; ?></p>

    <div class="row mt-4" data-aos="zoom-in">
        <?php foreach ($cars as $car) : ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center"><img class="img-fluid img-car" src="/images/<?= $car['image']; ?>" /></div>
                        <div>
                            <h4 class="text-center mb-2"><?= $car['car_title']; ?></h4>
                            <?= $car['car_body']; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?= $this->endSection() ?>