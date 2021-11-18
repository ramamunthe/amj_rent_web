<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AMJ RENTCAR-Penyedia Layanan Rental Mobil Medan</title>
    <meta name="description" content="AMJ Rentcar merupakan penyedia layanan transportasi yang berada di Medan, Sumatera Utara. Kami menyediakan beberapa layanan, mulai dari rental mobil lepas kunci, Premium Car, Wedding Car dan paket wisata.">
    <link rel="icon" type="image/png" sizes="1982x2000" href="../assets/img/amj.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdn.tiny.cloud/1/anhkkrvhuukafpw9ih61dbcqvogtvue4lmrv5vr1b9nztadb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <div class="container d-lg-flex d-xxl-flex justify-content-lg-center mt-5">
        <form class="col-md-6" action="/admin-verify" method="POST">



            <img src="../assets/img/brand.png">
            <h3 class="mb-0">Selamat Datang Admin.</h3>
            <p class="text-muted">Silahkan masuk untuk melanjutkan</p>
            <?php if (session()->get('error')) : ?>
                <div class="d-flex justify-content-center">
                    <div class="alert alert-danger alert-dismissible mt-3" role="alert" style="max-width: 500px;width: 100%;">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <span><strong>Gagal Masuk : </strong><?= session()->get('error'); ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <input class="form-control" type="text" placeholder="Username" name="username" required autofocus="">
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" placeholder="Password" name="password" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-warning" type="submit">Masuk</button>
            </div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>