<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Home</h3>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                <?php
                    // Get the data for 'home' with ID = 1
                    $home = getById('homes', 1); 
                ?>
                    <input type="hidden" name="homeId" value="<?= $home['data']['id'] ?? '1' ?>" />

                    <!-- Home Service Section -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Home</label>
                            <input type="file" name="gambar" class="form-control">
                            <?php if (!empty($home['data']['gambar'])): ?>
                                <img src="uploads/home/<?= $home['data']['gambar'] ?>" alt="Gambar Home" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar" value="<?= $home['data']['gambar'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Home 1</label>
                            <input type="file" name="gambar1" class="form-control">
                            <?php if (!empty($home['data']['gambar1'])): ?>
                                <img src="uploads/home/<?= $home['data']['gambar1'] ?>" alt="Gambar Home 1" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar1" value="<?= $home['data']['gambar1'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Home 2</label>
                            <input type="file" name="gambar2" class="form-control">
                            <?php if (!empty($home['data']['gambar2'])): ?>
                                <img src="uploads/home/<?= $home['data']['gambar2'] ?>" alt="Gambar 2" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar2" value="<?= $home['data']['gambar2'] ?? '' ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Judul Services Home</label>
                            <input type="text" name="judul" value="<?= $home['data']['judul'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Isi Services Home</label>
                            <textarea name="deskripsi" class="form-control"><?= $home['data']['deskripsi'] ?? "" ?></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_home" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>  
