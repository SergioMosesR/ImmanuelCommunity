<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Sunday</h3>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                <?php
                    // Get the data for 'sunday' with ID = 1
                    $sunday = getById('sunday_service', 1); 
                ?>
                    <input type="hidden" name="sundayId" value="<?= $sunday['data']['id'] ?? '1' ?>" />

                    <!-- Sunday Service Section -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Gambar Sunday Service</label>
                            <input type="file" name="gambar_sunday" class="form-control">
                            <?php if (!empty($sunday['data']['gambar_sunday'])): ?>
                                <img src="uploads/sunday/<?= $sunday['data']['gambar_sunday'] ?>" alt="Gambar Sunday" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_sunday" value="<?= $sunday['data']['gambar_sunday'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Sunday Service 1</label>
                            <input type="file" name="gambar_sunday1" class="form-control">
                            <?php if (!empty($sunday['data']['gambar_sunday1'])): ?>
                                <img src="uploads/sunday/<?= $sunday['data']['gambar_sunday1'] ?>" alt="Gambar Sunday 1" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_sunday1" value="<?= $sunday['data']['gambar_sunday1'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Sunday Service 2</label>
                            <input type="file" name="gambar_sunday2" class="form-control">
                            <?php if (!empty($sunday['data']['gambar_sunday2'])): ?>
                                <img src="uploads/sunday/<?= $sunday['data']['gambar_sunday2'] ?>" alt="Gambar Sunday 2" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_sunday2" value="<?= $sunday['data']['gambar_sunday2'] ?? '' ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Judul Sunday Service</label>
                            <input type="text" name="judul_sunday" value="<?= $sunday['data']['judul_sunday'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Isi Sunday Service</label>
                            <textarea name="deskripsi_sunday" class="form-control"><?= $sunday['data']['deskripsi_sunday'] ?? "" ?></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_sunday" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
