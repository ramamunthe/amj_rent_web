<?= $this->extend('web/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4" data-aos="zoom-in">
    <h3 class="mb-0">Pelanggan Kami</h3>
    <p class="text-muted">Berikut potret momen keseruan pelanggan bersama kru AMJ Rentcar di lokasi wisata yang kedatangannya dari berbagai daerah domestik & internasional.</p>
    <div class="row mt-4">
        <?php foreach ($customers as $customer) : ?>
            <div class="col-md-4 mb-3">
                <div class="card"><img class="card-img-top w-100 d-block img-fluid" src="/images/<?= $customer['image']; ?>" />
                    <div class="card-body">
                        <?= $customer['body']; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?= $this->endSection() ?>