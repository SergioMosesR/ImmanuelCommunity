<?php
include("includes/header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Media</h3>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>

                <form action="code.php" method="POST">

                    <?php
                    // Ambil data Media dengan ID 8
                    $media = getById('media', 8);
                    ?>
                    <input type="hidden" name="mediaId" value="<?= $media['data']['id'] ?? 'insert' ?>" />

                    <!-- Media Section -->
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Instagram Eben Haezer</label>
                            <input type="text" name="eben_haezer_ig" value="<?= $media['data']['eben_haezer_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Eben Haezer</label>
                            <input type="text" name="eben_haezer_youtube" value="<?= $media['data']['eben_haezer_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Efrata</label>
                            <input type="text" name="efrata_ig" value="<?= $media['data']['efrata_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Efrata</label>
                            <input type="text" name="efrata_youtube" value="<?= $media['data']['efrata_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Getsemani</label>
                            <input type="text" name="getsemani_ig" value="<?= $media['data']['getsemani_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Getsemani</label>
                            <input type="text" name="getsemani_youtube" value="<?= $media['data']['getsemani_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Sinai</label>
                            <input type="text" name="sinai_ig" value="<?= $media['data']['sinai_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Sinai</label>
                            <input type="text" name="sinai_youtube" value="<?= $media['data']['sinai_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Petra</label>
                            <input type="text" name="petra_ig" value="<?= $media['data']['petra_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Petra</label>
                            <input type="text" name="petra_youtube" value="<?= $media['data']['petra_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Mahanaim</label>
                            <input type="text" name="mahanim_ig" value="<?= $media['data']['mahanim_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Mahanaim</label>
                            <input type="text" name="mahanim_youtube" value="<?= $media['data']['mahanim_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Hermon</label>
                            <input type="text" name="hermon_ig" value="<?= $media['data']['hermon_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Hermon</label>
                            <input type="text" name="hermon_youtube" value="<?= $media['data']['hermon_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Kana</label>
                            <input type="text" name="kana_ig" value="<?= $media['data']['kana_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Kana</label>
                            <input type="text" name="kana_youtube" value="<?= $media['data']['kana_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Sion</label>
                            <input type="text" name="sion_ig" value="<?= $media['data']['sion_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Sion</label>
                            <input type="text" name="sion_youtube" value="<?= $media['data']['sion_youtube'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Instagram Karmel</label>
                            <input type="text" name="karmel_ig" value="<?= $media['data']['karmel_ig'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Youtube Karmel</label>
                            <input type="text" name="karmel_youtube" value="<?= $media['data']['karmel_youtube'] ?? "" ?>" class="form-control">
                        </div>
                    

                    <div class="col-md-6 mb-3">
                        <label>Instagram Filadelfia</label>
                        <input type="text" name="filadelfia_ig" value="<?= $media['data']['filadelfia_ig'] ?? "" ?>" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Youtube Filadelfia</label>
                        <input type="text" name="filadelfia_youtube" value="<?= $media['data']['filadelfia_youtube'] ?? "" ?>" class="form-control">
                    </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_media" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>