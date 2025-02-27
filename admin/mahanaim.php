<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Mahanaim</h3>
            </div>
            <div class="card-body">

                <!-- Alert Message -->
                <?= alertMessage(); ?>

                <!-- Form Start -->
                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    $mahanaim = getById('mahanaim', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $mahanaim['data']['id'] ?? 'insert' ?>" />

                    <!-- Section: Gereja Mahanaim -->
                    <h5 class="my-3">Gambar Gereja & Contact Mahanaim</h5>
                    <div class="row">
                        <!-- Gambar Gereja Mahanaim -->
                        <div class="col-md-4 mb-3">
                            <label>Gambar Gereja Mahanaim</label>
                            <input type="file" name="gambar_mahanaim" class="form-control">
                            <?php if (!empty($mahanaim['data']['gambar_mahanaim'])): ?>
                                <img src="uploads/mahanaim/<?= $mahanaim['data']['gambar_mahanaim'] ?>" alt="Gambar Mahanaim" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_mahanaim" value="<?= $mahanaim['data']['gambar_mahanaim'] ?? '' ?>" />
                        </div>

                        <!-- Judul Gereja Mahanaim -->
                        <div class="col-md-6 mb-3">
                            <label>Judul Gereja Mahanaim</label>
                            <input type="text" name="judul_mahanaim" value="<?= $mahanaim['data']['judul_mahanaim'] ?? "" ?>" class="form-control">
                        </div>

                        <!-- Alamat Gereja Mahanaim -->
                        <div class="col-md-6 mb-3">
                            <label>Alamat Gereja Mahanaim</label>
                            <textarea name="alamat_mahanaim" class="form-control"><?= $mahanaim['data']['alamat_mahanaim'] ?? "" ?></textarea>
                        </div>

                        <!-- No Phone Gereja Mahanaim -->
                        <div class="col-md-6 mb-3">
                            <label>No Phone Gereja Mahanaim</label>
                            <input type="phone" name="phone_mahanaim" value="<?= $mahanaim['data']['phone_mahanaim'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" name="save_mahanaim" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
