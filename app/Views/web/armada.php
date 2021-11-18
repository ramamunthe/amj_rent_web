<?= $this->extend('web/master') ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h3 class="mb-0" data-aos="zoom-in">Armada Kami</h3>
    <p class="text-muted" data-aos="zoom-in">Armada yang lengkap, bersih, aman dan harga yang bersahabat.</p>


    <div class="d-flex justify-content-center my-3" data-aos="zoom-in">
        <div class="nav">
            <?php foreach ($categories as $category) : ?>
                <a class="nav-link text-muted" href="/armada-category/<?= $category['category_id']; ?>"><?= $category['category_name']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>

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