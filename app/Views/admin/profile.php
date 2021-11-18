<?= $this->extend('admin/master') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-7">
            <form method="post" action="/admin-profil/update/<?= $user['id']; ?>" enctype="multipart/form-data">
                <h3 class="mb-0">Data Profil AMJ</h3>
                <p class="text-muted">Ubah data profil anda disini.</p>
                <div class="d-flex justify-content-center mb-3 mt-3">
                    <img class="img-fluid img-car" id="img_priv" src="/images/<?= $user['image']; ?>" />
                    <input type="hidden" name="gambarLama" value="<?= $user['image']; ?>">
                </div>
                <div class="mb-3"><label class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="imgInp" name="image" accept="image/*" />
                </div>
                <div class="mb-3"><label class="form-label">Nama Perusahaan</label>
                    <input class="form-control" type="text" name="name" value="<?= $user['name']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Nomor WhatsApp</label>
                    <input class="form-control" type="text" name="whatsapp" value="<?= $user['whatsapp']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" value="<?= $user['email']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Link Facebook</label>
                    <input class="form-control" type="text" name="facebook" value="<?= $user['facebook']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Link Instagram</label>
                    <input class="form-control" type="text" name="instagram" value="<?= $user['instagram']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Link TikTok</label>
                    <input class="form-control" type="text" name="tiktok" value="<?= $user['tiktok']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Link Twitter</label>
                    <input class="form-control" type="text" name="twitter" value="<?= $user['twitter']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Link Youtube</label>
                    <input class="form-control" type="text" name="youtube" value="<?= $user['youtube']; ?>" />
                </div>
                <div class="mb-3"><label class="form-label">Deskripsi Perusahaan</label>
                    <textarea class="form-control" name="deskripsi"><?= $user['deskripsi']; ?></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>