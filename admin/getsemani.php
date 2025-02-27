<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Getsemani</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <?php
                    $getsemani = getById('getsemani', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $getsemani['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Getsemani -->
                    <h5 class="my-3">Gambar Gereja & Contact Getsemani</h5>
                    <div class="row">
                        <!-- Gambar Gereja Getsemani -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Getsemani</label>
                            <input type="file" name="gambar_getsemani" class="form-control">
                            <?php if (!empty($getsemani['data']['gambar_getsemani'])): ?>
                                <img src="uploads/gereja/getsemani/<?= $getsemani['data']['gambar_getsemani'] ?>" alt="Gambar Getsemani" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_getsemani" value="<?= $getsemani['data']['gambar_getsemani'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Getsemani -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Getsemani</label>
                            <input type="text" name="judul_getsemani" value="<?= $getsemani['data']['judul_getsemani'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Getsemani -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Getsemani</label>
                            <textarea name="alamat_getsemani" class="form-control"><?= $getsemani['data']['alamat_getsemani'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Getsemani -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Getsemani</label>
                            <input type="tel" name="phone_getsemani" value="<?= $getsemani['data']['phone_getsemani'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_getsemani" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
