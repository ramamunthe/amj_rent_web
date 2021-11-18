<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AMJ RENTCAR-Penyedia Layanan Rental Mobil Medan</title>
    <meta name="description" content="AMJ Rentcar merupakan penyedia layanan transportasi yang berada di Medan, Sumatera Utara. Kami menyediakan beberapa layanan, mulai dari rental mobil lepas kunci, Premium Car, Wedding Car dan paket wisata.">
    <link rel="icon" type="image/png" sizes="1982x2000" href="/assets/img/amj.png">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <script src="/assets/js/jquery.min.js"></script>

</head>

<body>
    <?php $uri = current_url(true); ?>

    <header class="header-top">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center"><img src="/assets/img/brand.png">
                <div class="d-flex">
                    <a class="link-sosmed <?= $user['facebook'] == null ? 'd-none' : ''; ?>" href="<?= $user['facebook']; ?>">
                        <img class="img-sosmed img-fluid" src="/assets/img/fb.png"></a>
                    <a class="link-sosmed <?= $user['instagram'] == null ? 'd-none' : ''; ?>" href="<?= $user['instagram']; ?>">
                        <img class="img-sosmed img-fluid" src="/assets/img/ig.png"></a>
                    <a class="link-sosmed <?= $user['tiktok'] == null ? 'd-none' : ''; ?>" href="<?= $user['tiktok']; ?>">
                        <img class="img-sosmed img-fluid" src="/assets/img/tik.png"></a>
                    <a class="link-sosmed <?= $user['twitter'] == null ? 'd-none' : ''; ?>" href="<?= $user['twitter']; ?>">
                        <img class="img-sosmed img-fluid" src="/assets/img/tw.png"></a>
                    <a class="link-sosmed <?= $user['youtube'] == null ? 'd-none' : ''; ?>" href="<?= $user['youtube']; ?>">
                        <img class="img-sosmed img-fluid" src="/assets/img/yt.png"></a>
                </div>
            </div>
        </div>
    </header>
    <div class="bg-dark">
        <ul class="nav nav-tabs container">
            <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == '' ? 'active' : ''; ?>" href="/">Beranda</a></li>
            <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'tentang-kami' ? 'active' : ''; ?>" href="/tentang-kami">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'armada' ? 'active' : ''; ?>" href="/armada">Armada Kami</a></li>
            <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'pelanggan-kami' ? 'active' : ''; ?>" href="/pelanggan-kami">Pelanggan Kami</a></li>
            <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'paket-wisata' ? 'active' : ''; ?>" href="/paket-wisata">Paket Wisata</a></li>
        </ul>
    </div>

    <?= $this->renderSection('content') ?>

    <footer class="bg-dark py-3 mt-5">
        <div class="container text-white text-center">
            <h4>Layanan Kami</h4>
            <div class="d-lg-flex justify-content-lg-center">
                <p class="me-2">Lepas Kunci</p>
                <p class="me-2">Premium Car</p>
                <p class="me-2">Wedding Car</p>
                <p class="me-2">Bus Pariwisata</p>
                <p>Paket Wisata</p>
            </div>
            <p>© All rights reserved. Made by RMA Project<br></p>
        </div>
    </footer>
    <script src="/assets/js/js.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>