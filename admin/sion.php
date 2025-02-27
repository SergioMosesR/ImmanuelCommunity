<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Sion</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <?php
                    // Retrieve the Sion church data by ID
                    $sion = getById('sion', 1);  // Assuming getById is a function to get data from DB
                    ?>

                    <!-- Hidden input to store the church ID or set it for insertion -->
                    <input type="hidden" name="churchesId" value="<?= $sion['data']['id'] ?? 'insert' ?>" />

                    <!-- Church Image and Contact Section -->
                    <h5 class="my-3">Gambar Gereja & Contact Sion</h5>
                    <div class="row">
                        <!-- Gambar Gereja Sion -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Sion</label>
                            <input type="file" name="gambar_sion" class="form-control">
                            <?php if (!empty($sion['data']['gambar_sion'])): ?>
                                <img src="uploads/gereja/sion/<?= $sion['data']['gambar_sion'] ?>" alt="Gambar Sion" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_sion" value="<?= $sion['data']['gambar_sion'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Sion -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Sion</label>
                            <input type="text" name="judul_sion" value="<?= $sion['data']['judul_sion'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Sion -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Sion</label>
                            <textarea name="alamat_sion" class="form-control"><?= $sion['data']['alamat_sion'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Sion -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Sion</label>
                            <input type="tel" name="phone_sion" value="<?= $sion['data']['phone_sion'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_sion" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
