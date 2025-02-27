<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Youth-STAR Generation</h3>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                <?php
                    // Get the data for 'youth_star_generation' with ID = 1
                    $youth = getById('youth_star_generation', 1); 
                ?>
                    <input type="hidden" name="youthId" value="<?= $youth['data']['id'] ?? '1' ?>" />

                    <!-- Youth-STAR Generation Section -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Gambar YOUTH-STAR GENERATION</label>
                            <input type="file" name="gambar_youth" class="form-control">
                            <?php if (!empty($youth['data']['gambar_youth'])): ?>
                                <img src="uploads/youth/<?= $youth['data']['gambar_youth'] ?>" alt="Gambar Youth" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_youth" value="<?= $youth['data']['gambar_youth'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar YOUTH-STAR GENERATION 1</label>
                            <input type="file" name="gambar_youth1" class="form-control">
                            <?php if (!empty($youth['data']['gambar_youth1'])): ?>
                                <img src="uploads/youth/<?= $youth['data']['gambar_youth1'] ?>" alt="Gambar Youth 1" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_youth1" value="<?= $youth['data']['gambar_youth1'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar YOUTH-STAR GENERATION 2</label>
                            <input type="file" name="gambar_youth2" class="form-control">
                            <?php if (!empty($youth['data']['gambar_youth2'])): ?>
                                <img src="uploads/youth/<?= $youth['data']['gambar_youth2'] ?>" alt="Gambar Youth 2" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_youth2" value="<?= $youth['data']['gambar_youth2'] ?? '' ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Judul YOUTH-STAR GENERATION</label>
                            <input type="text" name="judul_youth" value="<?= $youth['data']['judul_youth'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Isi YOUTH-STAR GENERATION</label>
                            <textarea name="deskripsi_youth" class="form-control"><?= $youth['data']['deskripsi_youth'] ?? "" ?></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_youth" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
