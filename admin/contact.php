<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Contact Us</h3>
            </div>
            <div class="card-body">
            <?= alertMessage(); ?>

                <form action="code.php" method="POST">

                <?php
                    // Ambil data Contact Us dengan ID 1
                    $contact = getById('contact_us', 1); 
                ?>
                    <input type="hidden" name="contactId" value="<?= $contact['data']['id'] ?? '1' ?>" />

                    <!-- Contact Us Section -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Judul Contact Us</label>
                            <input type="text" name="title" value="<?= $contact['data']['title'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Isi Contact Us</label>
                            <textarea name="isi" class="form-control"><?= $contact['data']['isi'] ?? "" ?></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email Contact Us</label>
                            <input type="email" name="email" value="<?= $contact['data']['email'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>No Telepon Contact Us</label>
                            <input type="text" name="phone" value="<?= $contact['data']['phone'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_contact" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
