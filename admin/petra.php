<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Petra</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    $petra = getById('petra', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $petra['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Petra -->
                    <h5 class="my-3">Gambar Gereja & Contact Petra</h5>
                    <div class="row">
                        <!-- Gambar Gereja Petra -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Petra</label>
                            <input type="file" name="gambar_petra" class="form-control">

                            <!-- Display existing image if available -->
                            <?php if (!empty($petra['data']['gambar_petra'])): ?>
                                <img src="uploads/gereja/petra/<?= $petra['data']['gambar_petra'] ?>" alt="Gambar Petra" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            
                            <!-- Hidden field to store old image name -->
                            <input type="hidden" name="old_gambar_petra" value="<?= $petra['data']['gambar_petra'] ?? '' ?>" />
                        </div>

                        <!-- Judul Churches -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Churches</label>
                            <input type="text" name="judul_petra" value="<?= $petra['data']['judul_petra'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Petra -->
                        <div class="mb-3">
                            <label>Alamat Petra</label>
                            <textarea name="alamat_petra" class="form-control"><?= $petra['data']['alamat_petra'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Petra -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Petra</label>
                            <input type="phone" name="phone_petra" value="<?= $petra['data']['phone_petra'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_petra" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
