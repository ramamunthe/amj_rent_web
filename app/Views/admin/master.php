<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AMJ RENTCAR-ADMIN</title>
    <meta name="description" content="AMJ Rentcar merupakan penyedia layanan transportasi yang berada di Medan, Sumatera Utara. Kami menyediakan beberapa layanan, mulai dari rental mobil lepas kunci, Premium Car, Wedding Car dan paket wisata.">
    <link rel="icon" type="image/png" sizes="1982x2000" href="../assets/img/amj.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.tiny.cloud/1/anhkkrvhuukafpw9ih61dbcqvogtvue4lmrv5vr1b9nztadb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <?php $uri = current_url(true); ?>

    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container"><a class="navbar-brand" href="/admin">AMJ Admin</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'admin' ? 'active' : ''; ?>" href="/admin">Armada</a></li>
                    <li class="nav-item"><a class="nav-link  <?= $uri->getSegment(1) == 'admin-category' ? 'active' : ''; ?>" href="/admin-category">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'admin-customer' ? 'active' : ''; ?>" href="/admin-customer">Pelanggan Kami</a></li>
                    <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'admin-slider' ? 'active' : ''; ?>" href="/admin-slider">Slider</a></li>
                    <li class="nav-item"><a class="nav-link <?= $uri->getSegment(1) == 'admin-pakage' ? 'active' : ''; ?>" href="/admin-pakage">Paket Wisata</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-user-edit"></i>&nbsp;Admin</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/admin-profil">Ubah Profil</a>
                            <a class="dropdown-item" href="/admin-logout">Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('content') ?>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>