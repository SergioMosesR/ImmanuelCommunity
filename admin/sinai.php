<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Sinai</h3>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    // Retrieve church data by ID
                    $sinai = getById('sinai1', 1);
                    ?>

                    <!-- Hidden input to store the church ID or set it for insertion -->
                    <input type="hidden" name="churchesId" value="<?= $sinai['data']['id'] ?? 'insert' ?>" />

                    <!-- Church Image and Contact Section -->
                    <h5 class="my-3">Gambar Gereja & Contact Sinai</h5>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Sinai</label>
                            <input type="file" name="gambar_sinai" class="form-control">
                            <?php if (!empty($sinai['data']['gambar_sinai'])): ?>
                                <img src="uploads/gereja/sinai/<?= $sinai['data']['gambar_sinai'] ?>" alt="Gambar Sinai" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_sinai" value="<?= $sinai['data']['gambar_sinai'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Sinai</label>
                            <input type="text" name="judul_sinai" value="<?= $sinai['data']['judul_sinai'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Sinai</label>
                            <textarea name="alamat_sinai" class="form-control"><?= $sinai['data']['alamat_sinai'] ?? "" ?></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Sinai</label>
                            <input type="tel" name="phone_sinai" value="<?= $sinai['data']['phone_sinai'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>No Phone Gereja Sinai 2</label>
                            <input type="tel" name="phone_sinai2" value="<?= $sinai['data']['phone_sinai2'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_sinai" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>