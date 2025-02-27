<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Efrata</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    $efrata = getById('efrata', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $efrata['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Efrata -->
                    <h5 class="my-3">Gambar Gereja & Contact Efrata</h5>
                    <div class="row">
                        <!-- Gambar Gereja Efrata -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Efrata</label>
                            <input type="file" name="gambar_efrata" class="form-control">

                            <!-- Display existing image if available -->
                            <?php if (!empty($efrata['data']['gambar_efrata'])): ?>
                                <img src="gereja/efrata/<?= $efrata['data']['gambar_efrata'] ?>" alt="Gambar Efrata" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            
                            <!-- Hidden field to store old image name -->
                            <input type="hidden" name="old_gambar_efrata" value="<?= $efrata['data']['gambar_efrata'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Efrata -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Efrata</label>
                            <input type="text" name="judul_efrata" value="<?= $efrata['data']['judul_efrata'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Efrata -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Efrata</label>
                            <textarea name="alamat_efrata" class="form-control"><?= $efrata['data']['alamat_efrata'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Efrata -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Efrata</label>
                            <input type="phone" name="phone_efrata" value="<?= $efrata['data']['phone_efrata'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_efrata" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
