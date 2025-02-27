<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Elder</h3>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                <?php
                    // Get the data for 'elder' with ID = 1
                    $elder = getById('elder_service', 1); 
                ?>
                    <input type="hidden" name="elderId" value="<?= $elder['data']['id'] ?? '1' ?>" />

                    <!-- Elder Service Section -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Elder</label>
                            <input type="file" name="gambar_elder" class="form-control">
                            <?php if (!empty($elder['data']['gambar_elder'])): ?>
                                <img src="uploads/elder/<?= $elder['data']['gambar_elder'] ?>" alt="Gambar Elder" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_elder" value="<?= $elder['data']['gambar_elder'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Elder 1</label>
                            <input type="file" name="gambar_elder1" class="form-control">
                            <?php if (!empty($elder['data']['gambar_elder1'])): ?>
                                <img src="uploads/elder/<?= $elder['data']['gambar_elder1'] ?>" alt="Gambar Elder 1" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_elder1" value="<?= $elder['data']['gambar_elder1'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Elder 2</label>
                            <input type="file" name="gambar_elder2" class="form-control">
                            <?php if (!empty($elder['data']['gambar_elder2'])): ?>
                                <img src="uploads/elder/<?= $elder['data']['gambar_elder2'] ?>" alt="Gambar Elder 2" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_elder2" value="<?= $elder['data']['gambar_elder2'] ?? '' ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Judul Services Elder</label>
                            <input type="text" name="judul_elder" value="<?= $elder['data']['judul_elder'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Isi Services Elder</label>
                            <textarea name="deskripsi_elder" class="form-control"><?= $elder['data']['deskripsi_elder'] ?? "" ?></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_elder" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
