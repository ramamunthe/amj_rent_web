<?= $this->extend('web/master') ?>

<?= $this->section('content') ?>
<div class="position-relative bg-dark">
    <img class="bg-image" src="/assets/img/bg1.jpg">
    <div class="container position-relative py-3">
        <form data-aos="fade-down" class="bg-form mb-3">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <select class="form-select" id="armada">
                        <?php foreach ($cars as $car) : ?>
                            <option value="<?= $car['car_title']; ?>"><?= $car['car_title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-4 mb-2">
                    <input class="form-control" type="date" id="tanggal">
                </div>
                <div class="col-md-4 mb-2">
                    <textarea class="form-control" placeholder="Alamat" id="alamat"></textarea>
                </div>
                <div class="col-md-4 mb-2">
                    <button class="btn btn-warning" type="button" id="pesan">Pesan Sekarang</button>
                </div>
            </div>
        </form>
        <div class="carousel slide" data-bs-ride="carousel" data-aos="zoom-in" id="carousel-1">
            <div class="carousel-inner">

                <?php foreach ($sliders as $slider) : ?>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid img-slide" src="/images/<?= $slider['image']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 text-white">
                                <?= $slider['body']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        </div>
    </div>
</div>
<div class="position-relative bg-dark"><img class="bg-image" src="assets/img/bg2.jpg">
    <div class="container position-relative py-3">
        <div class="row">
            <div class="col-md-6 mb-3 text-white text-center" data-aos="fade-up">
                <h1 class="text-warning">AMJ&nbsp;<span class="text-white">RENTCAR</span></h1>
                <p>AMJ Rentcar merupakan penyedia layanan transportasi yang berada di Medan, Sumatera Utara. Kami menyediakan beberapa layanan, mulai dari rental mobil lepas kunci, Premium Car, Wedding Car dan paket wisata.<br></p>
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <div class="d-flex">
                    <img class="img-fluid img-mobile" src="assets/img/mobile.png">
                    <div class="text-white ms-3">
                        <span class="d-none" id="nomor"><?= $user['whatsapp']; ?></span>
                        <p>Download Aplikasi AMJ Rentcar yang akan mempermudah anda dalam pemesanan armada yang anda ingunkan, Download Sekarang.<br></p>
                        <a href="https://play.google.com/store">
                            <img src="assets/img/play.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#pesan").click(function(e) {
        var armada = $("#armada").val();
        var tanggal = $("#tanggal").val();
        var alamat = $("#alamat").val();
        var nomor = $("#nomor").text();

        if (tanggal == '' || alamat == '') {
            alert('Data tidak boleh kosong!')
        } else {
            window.open('https://wa.me/' + nomor + '/?text=' +
                'Jenis Armada : ' + armada +
                '%0aTangga Pemakaian : ' + tanggal +
                '%0aAlamat : ' + alamat +
                '');
        };
    });
</script>


<?= $this->endSection() ?>