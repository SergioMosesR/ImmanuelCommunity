<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Filadelfia</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    $filadelfia = getById('filadelfia', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $filadelfia['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Filadelfia -->
                    <h5 class="my-3">Gambar Gereja & Contact Filadelfia</h5>
                    <div class="row">
                        <!-- Gambar Gereja Filadelfia -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Filadelfia</label>
                            <input type="file" name="gambar_filadelfia" class="form-control">
                            <?php if (!empty($filadelfia['data']['gambar_filadelfia'])): ?>
                                <img src="uploads/filadelfia/<?= $filadelfia['data']['gambar_filadelfia'] ?>" alt="Gambar Filadelfia" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_filadelfia" value="<?= $filadelfia['data']['gambar_filadelfia'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Filadelfia -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Filadelfia</label>
                            <input type="text" name="judul_filadelfia" value="<?= $filadelfia['data']['judul_filadelfia'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Filadelfia -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Filadelfia</label>
                            <textarea name="alamat_filadelfia" class="form-control"><?= $filadelfia['data']['alamat_filadelfia'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Filadelfia -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Filadelfia</label>
                            <input type="phone" name="phone_filadelfia" value="<?= $filadelfia['data']['phone_filadelfia'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_filadelfia" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
                                