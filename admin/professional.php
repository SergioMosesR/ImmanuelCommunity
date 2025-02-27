<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Professional</h3>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                <?php
                    // Get the data for 'professional' with ID = 1
                    $professional = getById('professional', 1); 
                ?>
                    <input type="hidden" name="professionalId" value="<?= $professional['data']['id'] ?? '1' ?>" />

                    <!-- Professional Section -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Gambar Professional</label>
                            <input type="file" name="gambar_professional" class="form-control">
                            <?php if (!empty($professional['data']['gambar_professional'])): ?>
                                <img src="uploads/professional/<?= $professional['data']['gambar_professional'] ?>" alt="Gambar Professional" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_professional" value="<?= $professional['data']['gambar_professional'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Professional 1</label>
                            <input type="file" name="gambar_professional1" class="form-control">
                            <?php if (!empty($professional['data']['gambar_professional1'])): ?>
                                <img src="uploads/professional/<?= $professional['data']['gambar_professional1'] ?>" alt="Gambar Professional 1" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_professional1" value="<?= $professional['data']['gambar_professional1'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Professional 2</label>
                            <input type="file" name="gambar_professional2" class="form-control">
                            <?php if (!empty($professional['data']['gambar_professional2'])): ?>
                                <img src="uploads/professional/<?= $professional['data']['gambar_professional2'] ?>" alt="Gambar Professional 2" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_professional2" value="<?= $professional['data']['gambar_professional2'] ?? '' ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Judul Professional</label>
                            <input type="text" name="judul_professional" value="<?= $professional['data']['judul_professional'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Deskripsi Professional</label>
                            <textarea name="deskripsi_professional" class="form-control"><?= $professional['data']['deskripsi_professional'] ?? "" ?></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_professional" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
