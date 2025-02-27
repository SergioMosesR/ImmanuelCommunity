<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Kids</h3>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                <?php
                    // Get the data for 'kids' with ID = 1
                    $kids = getById('kids', 1); 
                ?>
                    <input type="hidden" name="kidsId" value="<?= $kids['data']['id'] ?? '1' ?>" />

                    <!-- Kids Service Section -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Kids</label>
                            <input type="file" name="gambar_kids" class="form-control">
                            <?php if (!empty($kids['data']['gambar_kids'])): ?>
                                <img src="uploads/kids/<?= $kids['data']['gambar_kids'] ?>" alt="Gambar Kids" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_kids" value="<?= $kids['data']['gambar_kids'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Kids 1</label>
                            <input type="file" name="gambar_kids1" class="form-control">
                            <?php if (!empty($kids['data']['gambar_kids1'])): ?>
                                <img src="uploads/kids/<?= $kids['data']['gambar_kids1'] ?>" alt="Gambar Kids 1" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_kids1" value="<?= $kids['data']['gambar_kids1'] ?? '' ?>" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar Services Kids 2</label>
                            <input type="file" name="gambar_kids2" class="form-control">
                            <?php if (!empty($kids['data']['gambar_kids2'])): ?>
                                <img src="uploads/kids/<?= $kids['data']['gambar_kids2'] ?>" alt="Gambar Kids 2" class="img-fluid mt-2" width="100">
                            <?php endif; ?>
                            <input type="hidden" name="old_gambar_kids2" value="<?= $kids['data']['gambar_kids2'] ?? '' ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Judul Services Kids</label>
                            <input type="text" name="judul_kids" value="<?= $kids['data']['judul_kids'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Isi Services Kids</label>
                            <textarea name="deskripsi_kids" class="form-control"><?= $kids['data']['deskripsi_kids'] ?? "" ?></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_kids" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?> 
