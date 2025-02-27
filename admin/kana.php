<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Kana</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <?php
                    $kana = getById('kana', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $kana['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Kana -->
                    <h5 class="my-3">Gambar Gereja & Contact Kana</h5>
                    <div class="row">
                        <!-- Gambar Gereja Kana -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Kana</label>
                            <input type="file" name="gambar_kana" class="form-control">
                            <?php if (!empty($kana['data']['gambar_kana'])): ?>
                                <img src="uploads/gereja/kana/<?= $kana['data']['gambar_kana'] ?>" alt="Gambar Kana" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_kana" value="<?= $kana['data']['gambar_kana'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Kana -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Kana</label>
                            <input type="text" name="judul_kana" value="<?= $kana['data']['judul_kana'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Kana -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Kana</label>
                            <textarea name="alamat_kana" class="form-control"><?= $kana['data']['alamat_kana'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Kana -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Kana</label>
                            <input type="phone" name="phone_kana" value="<?= $kana['data']['phone_kana'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_kana" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
