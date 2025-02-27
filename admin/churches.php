<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Churches</h3>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <?php
                    $churches = getById('churches', 1);
                    ?>
                    <input type="hidden" name="churchesId" value="<?= $churches['data']['id'] ?? 'insert' ?>" />

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Title Churches</label>
                            <input type="text" name="title_gereja" value="<?= $churches['data']['title_gereja'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Judul Churches</label>
                            <input type="text" name="judul_gereja" value="<?= $churches['data']['judul_gereja'] ?? "" ?>" class="form-control">
                        </div>
                    </div>

                    <h5 class="my-3">Gambar Gereja Yang Awal</h5>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Gambar Awal 1 Gereja</label>
                            <input type="file" name="gambar1" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Gambar Awal 2 Gereja</label>
                            <input type="file" name="gambar2" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Gambar Awal 3 Gereja</label>
                            <input type="file" name="gambar3" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_gereja" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>