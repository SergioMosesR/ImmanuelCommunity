<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Notifikasi</h3>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="row">
                        <!-- Title Notification -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Title Notifikasi</label>
                                <input type="text" name="title_notification" class="form-control">
                            </div>
                        </div>

                        <!-- Message Notification -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Isi Notifikasi</label>
                                <textarea name="message_notification" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Recipient Selection -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Untuk (Penerima)</label>
                                <select name="recipient_name" class="form-select">
                                    <option value="">Pilih Penerima</option>
                                    <option value="verifikator">Verifikator</option>
                                    <option value="editor">Editor</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                        <!-- Sender Name -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nama Pengirim</label>
                                <input type="text" name="sender_name" class="form-control" placeholder="Masukkan nama pengirim">
                            </div>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3" style="text-align: center;">
                        <button type="submit" name="save_notification" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
