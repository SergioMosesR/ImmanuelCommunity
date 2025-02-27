<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Services</h3>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <!-- Title Services -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label>Title Services</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                    </div>

                    <?php include('kids.php'); ?>
                    <?php include('youth.php'); ?>
                    <?php include('professional.php'); ?>
                    <?php include('sunday.php'); ?>
                    <?php include('elder.php'); ?>

                    <!-- Submit Button -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="save_services" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
