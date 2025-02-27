<?php
include("includes/header.php");
?>
<style>
    /* Styling for the password field and icon */
    .input-group {
        display: flex;
        align-items: center;
    }

    #passwordField {
        flex-grow: 1;
    }

    #togglePassword {
        cursor: pointer;
        background: none;
        border: none;
        padding: 0;
        margin-left: 5px;
        /* Small margin to keep the icon inside the input group */
    }

    #togglePassword i {
        font-size: 20px;
    }

    /* Styling for the form layout */
    .row>.col-md-6 {
        margin-bottom: 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .form-group {
        display: flex;
        align-items: center;
    }

    .form-group label {
        flex-shrink: 0;
        margin-right: 10px;
    }

    .form-group input,
    .form-group select {
        flex-grow: 1;
    }

    /* Styling for the checkbox to align it nicely */
    .checkbox-container {
        display: flex;
        align-items: center;
    }

    .checkbox-container input {
        width: 30px;
        height: 30px;
        margin-left: 10px;
    }

    .col-md-6 {
        margin-bottom: 15px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Pengguna
                    <a href="users.php" class="btn btn-outline-success float-end">Kembali</a>
                </h4>
            </div>
            <div class="card-body">

            <?= alertMessage(); ?>

                <form action="code.php" method="POST">
                    <?php
                    $paramResult = checkParamId('id');
                    if (!is_numeric($paramResult)) {
                        echo '<h5>Invalid ID parameter.</h5>';
                        return;
                    }
                    $user = getById('users', $paramResult);
                    if ($user['status'] == 200 && isset($user['data'])) {
                        $userData = $user['data'];
                    } else {
                        echo '<h5>' . ($user['message'] ?? 'Data tidak ditemukan.') . '</h5>';
                        return;
                    }
                    ?>
                    <input type="hidden" name="userId" value="<?= $user['data']['id'] ?>" required>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" name="name" value="<?= $user['data']['name'] ?>" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>No. Phone</label>
                                <input type="text" name="phone" value="<?= $user['data']['phone'] ?>" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $user['data']['email'] ?>" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="passwordField" value="<?= $user['data']['password'] ?>" required class="form-control">
                                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                        <i class="fas fa-eye" id="passwordIcon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Pilih Role</label>
                                <select name="role" required class="form-select">
                                    <option value="">Pilih Role</option>
                                    <option value="verifikator" <?= $user['data']['role'] == 'verifikator' ? 'selected' : '' ?>>Verifikator</option>
                                    <option value="editor" <?= $user['data']['role'] == 'editor' ? 'selected' : '' ?>>Editor</option>
                                    <option value="admin" <?= $user['data']['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="is_ban" class="form-label">Aktivitas</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="is_ban" id="is_ban" style="width: 50px; height: 25px;" <?= $user['data']['is_ban'] ? 'checked' : '' ?>>
                                <label class="form-check-label" for="is_ban">Aktifkan jika ingin Membanned</label>
                            </div>
                        </div>
                        <div class="col-md" style="text-align: center;">
                            <div class="mb-3">
                                <button type="submit" name="updateUser" <?= $user['data']['is_ban'] == true ? 'checked' : '' ?> class="btn btn-primary">Edit</button>
                                <input type="hidden" name="id" value="<?= $paramResult ?>">
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    // Dapatkan elemen-elemen yang diperlukan
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('passwordField');
    const passwordIcon = document.getElementById('passwordIcon');

    // Tambahkan event listener pada tombol untuk toggle password
    togglePassword.addEventListener('click', function() {
        // Toggle tipe input antara 'password' dan 'text'
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Ubah ikon mata berdasarkan tipe input
        if (type === 'password') {
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        } else {
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        }
    });
</script>]
<?php
include("includes/footer.php");
?>