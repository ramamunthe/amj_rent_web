<?= $this->extend('web/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center" data-aos="zoom-in"><img class="img-fluid img-logo" src="/images/<?= $user['image']; ?>" /></div>
        </div>
        <div class="col-md-6" data-aos="zoom-in">
            <h1><strong><?= $user['name']; ?></strong><br /></h1>
            <p><strong>AMJ Rentcar merupakan Perusahaan penyedia layanan transportasi yang berada di Medan, Sumatera Utara. Kami menyediakan beberapa layanan, Mulai dari Rental Mobil Lepas Kunci, Premium Car, Wedding Car, Paket Wisata dan Layanan Darurat (Ambulance).</strong><br /></p>
            <div>
                <?= $user['deskripsi']; ?>
            </div>
        </div>
        <div class="col-md-12 mt-3 mb-4" data-aos="zoom-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15928.186778477937!2d98.706596!3d3.5767413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x613787f27a2621c0!2sAMJ%20Rentcar%20Medan%20Warehouse!5e0!3m2!1sid!2sid!4v1636825948749!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>

<?= $this->endSection() ?>