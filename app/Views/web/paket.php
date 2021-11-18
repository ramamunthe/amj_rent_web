<?= $this->extend('web/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4" data-aos="zoom-in">
    <h3 class="mb-0">Paket Wisata</h3>
    <p class="text-muted">Paket wisata yang kami sediakan untuk anda yang ingin berlibur bersama keluarga.</p>
    <div class="row mt-4">
        <?php foreach ($pakages as $pakage) : ?>
            <div class="col-md-4 mb-3">
                <div class="card"><img class="card-img-top w-100 d-block img-fluid" src="/images/<?= $pakage['image']; ?>" />
                    <div class="card-body">
                        <?= $pakage['body']; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?= $this->endSection() ?>