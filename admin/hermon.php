<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Hermon</h3>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                        // Fetch data if it's for editing
                        $hermon = getById('hermon', 1);  // Assuming you want to edit the record with ID 1
                    ?>

                    <input type="hidden" name="churchesId" value="<?= $hermon['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Hermon -->
                    <h5 class="my-3">Gambar Gereja & Contact Hermon</h5>
                    <div class="row">
                        <!-- Gambar Gereja Hermon -->
                        <div class="col-md-6 mb-3">
                            <label>Gambar Gereja Hermon</label>
                            <input type="file" name="gambar_hermon" class="form-control">
                            <?php if (!empty($hermon['data']['gambar_hermon'])): ?>
                                <img src="uploads/hermon/<?= $hermon['data']['gambar_hermon'] ?>" alt="Gambar Gereja Hermon" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_hermon" value="<?= $hermon['data']['gambar_hermon'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Hermon -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Hermon</label>
                            <input type="text" name="judul_hermon" value="<?= $hermon['data']['judul_hermon'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Hermon -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Hermon</label>
                            <textarea name="alamat_hermon" class="form-control"><?= $hermon['data']['alamat_hermon'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Hermon -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Hermon</label>
                            <input type="phone" name="phone_hermon" value="<?= $hermon['data']['phone_hermon'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_hermon" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
