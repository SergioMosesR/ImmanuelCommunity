<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Eben Haezer</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    // Fetch existing data for Eben Haezer with ID 1 (or 'insert' for new)
                    $eben = getById('eben', 1);  
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $eben['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Eben Haezer -->
                    <h5 class="my-3">Gambar Gereja & Contact Eben Haezer</h5>
                    <div class="row">
                        <!-- Gambar Gereja Eben Haezer -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Eben Haezer</label>
                            <input type="file" name="gambar_eben_haezer" class="form-control">
                            <?php if (!empty($eben['data']['gambar_eben_haezer'])): ?>
                                <img src="uploads/eben/<?= $eben['data']['gambar_eben_haezer'] ?>" alt="Gambar Gereja Eben Haezer" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_eben_haezer" value="<?= $eben['data']['gambar_eben_haezer'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Eben Haezer -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Eben Haezer</label>
                            <input type="text" name="judul_eben_haezer" value="<?= $eben['data']['judul_eben_haezer'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Eben Haezer -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Eben Haezer</label>
                            <textarea name="alamat_eben_haezer" class="form-control"><?= $eben['data']['alamat_eben_haezer'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Eben Haezer -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Eben Haezer</label>
                            <input type="phone" name="phone_eben_haezer" value="<?= $eben['data']['phone_eben_haezer'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_eben_haezer" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
