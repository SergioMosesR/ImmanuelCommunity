<?php
include("includes/header.php");
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Buat Pengguna</h4>
                <a href="users.php" class="btn btn-secondary float-end">Kembali</a>
            </div>
            <div class="card-body">

            <?= alertMessage(); ?>

                <form action="code.php" method="post">
                <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>No. Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Pilih Role</label>
                                <select name="role" class="form-select" required>
                                    <option value="">Pilih Role</option>
                                    <option value="verifikator">Verifikator</option>
                                    <option value="editor">Editor</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Aktivitas</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_ban" id="is_ban" style="width: 50px; height: 25px;">
                                    <label class="form-check-label" for="is_ban">Aktifkan jika ingin Membanned</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md" style="text-align: center;">
                            <div class="mb-3">
                                <button type="submit" name="saveUser" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
