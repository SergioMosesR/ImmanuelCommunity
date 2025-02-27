<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Gereja</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <?php
                    $karmel = getById('karmel', 1);
                    $filadelfia = getById('filadelfia', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $karmel['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Karmel -->
                    <h5 class="my-3">Gambar Gereja & Kontak</h5>
                    <div class="row">
                        <!-- Gambar Gereja Karmel -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Karmel</label>
                            <input type="file" name="gambar_karmel" class="form-control">
                            <?php if (!empty($karmel['data']['gambar_karmel'])): ?>
                                <img src="uploads/gereja/karmel/<?= $karmel['data']['gambar_karmel'] ?>" alt="Gambar Karmel" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_karmel" value="<?= $karmel['data']['gambar_karmel'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Karmel -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Karmel</label>
                            <input type="text" name="judul_karmel" value="<?= $karmel['data']['judul_karmel'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Karmel -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Karmel</label>
                            <textarea name="alamat_karmel" class="form-control"><?= $karmel['data']['alamat_karmel'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Karmel -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Karmel</label>
                            <input type="phone" name="phone_karmel" value="<?= $karmel['data']['phone_karmel'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_karmel" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
