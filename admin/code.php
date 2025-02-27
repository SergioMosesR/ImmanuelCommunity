<?php
require '../config/fungsi.php';

if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = validate($_POST['is_ban']) == true ? 1 : 0;

    if ($name != '' || $phone != '' || $email != '' || $password != '') {
        $query = "INSERT INTO users (name,phone,email,password,is_ban,role)
             VALUE ('$name','$phone','$email','$password','$is_ban','$role')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            redirect('users.php', 'Sukses Menambah Pengguna');
        } else {
            redirect('users-create.php', 'Terjadi Sesuatu');
        }
    } else {
        redirect('users-create.php', 'Silakan isi semua kolom');
    }
}

if (isset($_POST['updateUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = isset($_POST['is_ban']) ? 1 : 0;

    $userId = validate($_POST['userId']);
    if (!is_numeric($userId)) {
        redirect('users-edit.php?id=' . $userId, 'ID Pengguna tidak valid');
    }

    $query = "UPDATE users SET 
              name='$name',
              phone='$phone',
              email='$email',
              password='$password',
              is_ban='$is_ban',
              role='$role'
              WHERE id='$userId'";
    error_log($query); // Log the query for debugging

    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('users-edit.php?id=' . $userId, 'Sukses Mengedit Pengguna');
    } else {
        error_log("SQL Error: " . mysqli_error($conn));
        redirect('users-create.php', 'Terjadi Sesuatu');
    }
}

if (isset($_POST['save_home'])) {
    // Validasi input
    $title = validate($_POST['title']);
    $judul = validate($_POST['judul']);
    $deskripsi = validate($_POST['deskripsi']);

    // Path folder upload
    $targetDir = __DIR__ . '/uploads/home/'; // Tambahkan slash untuk path yang benar
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); // Buat folder jika belum ada
    }

    // Gunakan fungsi uploadFile dari fungsi.php
    $gambar = uploadFile($_FILES['gambar'], $targetDir);
    $gambar1 = uploadFile($_FILES['gambar1'], $targetDir);
    $gambar2 = uploadFile($_FILES['gambar2'], $targetDir);

    // Simpan data ke database
    $homeId = validate($_POST['homeId']);

    if ($homeId === 'insert') {
        // Tambahkan data baru
        $query = "INSERT INTO homes (title, judul, deskripsi, gambar, gambar1, gambar2) 
                  VALUES ('$title', '$judul', '$deskripsi', '$gambar', '$gambar1', '$gambar2')";
    } else {
        // Perbarui data berdasarkan ID
        $updateFields = [];
        if (!empty($gambar)) {
            $updateFields[] = "gambar = '$gambar'";
        }
        if (!empty($gambar1)) {
            $updateFields[] = "gambar1 = '$gambar1'";
        }
        if (!empty($gambar2)) {
            $updateFields[] = "gambar2 = '$gambar2'";
        }
        
        // Always update other fields even if no new file was uploaded
        $updateFields[] = "title = '$title'";
        $updateFields[] = "judul = '$judul'";
        $updateFields[] = "deskripsi = '$deskripsi'";

        $query = "UPDATE homes SET " . implode(", ", $updateFields) . " WHERE id = '$homeId'";
    }

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('home.php', 'Home berhasil disimpan.');
    } else {
        redirect('home.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}



if (isset($_POST['save_gereja'])) {
    // Get data from the form
    $title_gereja = isset($_POST['title_gereja']) ? validate($_POST['title_gereja']) : '';
    $judul_gereja = isset($_POST['judul_gereja']) ? validate($_POST['judul_gereja']) : '';

    // Ensure that each image field exists and is not empty
    $gambar1 = isset($_POST['gambar1']) ? $_POST['gambar1'] : '';
    $gambar2 = isset($_POST['gambar2']) ? $_POST['gambar2'] : '';
    $gambar3 = isset($_POST['gambar3']) ? $_POST['gambar3'] : '';

    $gambar_petra = isset($_POST['gambar_petra']) ? $_POST['gambar_petra'] : '';
    $gambar_efrata = isset($_POST['gambar_efrata']) ? $_POST['gambar_efrata'] : '';
    $gambar_hermon = isset($_POST['gambar_hermon']) ? $_POST['gambar_hermon'] : '';
    $gambar_eben_haezer = isset($_POST['gambar_eben_haezer']) ? $_POST['gambar_eben_haezer'] : '';
    $gambar_mahanaim = isset($_POST['gambar_mahanaim']) ? $_POST['gambar_mahanaim'] : '';
    $gambar_filadelfia = isset($_POST['gambar_filadelfia']) ? $_POST['gambar_filadelfia'] : '';
    $gambar_karmel = isset($_POST['gambar_karmel']) ? $_POST['gambar_karmel'] : '';
    $gambar_sinai = isset($_POST['gambar_sinai']) ? $_POST['gambar_sinai'] : '';
    $gambar_kana = isset($_POST['gambar_kana']) ? $_POST['gambar_kana'] : '';
    $gambar_getsemani = isset($_POST['gambar_getsemani']) ? $_POST['gambar_getsemani'] : '';
    $gambar_sion = isset($_POST['gambar_sion']) ? $_POST['gambar_sion'] : '';

    $judul_petra = isset($_POST['judul_petra']) ? validate($_POST['judul_petra']) : '';
    $judul_efrata = isset($_POST['judul_efrata']) ? validate($_POST['judul_efrata']) : '';
    $judul_hermon = isset($_POST['judul_hermon']) ? validate($_POST['judul_hermon']) : '';
    $judul_eben_haezer = isset($_POST['judul_eben_haezer']) ? validate($_POST['judul_eben_haezer']) : '';
    $judul_mahanaim = isset($_POST['judul_mahanaim']) ? validate($_POST['judul_mahanaim']) : '';
    $judul_filadelfia = isset($_POST['judul_filadelfia']) ? validate($_POST['judul_filadelfia']) : '';
    $judul_karmel = isset($_POST['judul_karmel']) ? validate($_POST['judul_karmel']) : '';
    $judul_sinai = isset($_POST['judul_sinai']) ? validate($_POST['judul_sinai']) : '';
    $judul_kana = isset($_POST['judul_kana']) ? validate($_POST['judul_kana']) : '';
    $judul_getsemani = isset($_POST['judul_getsemani']) ? validate($_POST['judul_getsemani']) : '';
    $judul_sion = isset($_POST['judul_sion']) ? validate($_POST['judul_sion']) : '';

    $alamat_petra = isset($_POST['alamat_petra']) ? validate($_POST['alamat_petra']) : '';
    $alamat_efrata = isset($_POST['alamat_efrata']) ? validate($_POST['alamat_efrata']) : '';
    $alamat_hermon = isset($_POST['alamat_hermon']) ? validate($_POST['alamat_hermon']) : '';
    $alamat_eben_haezer = isset($_POST['alamat_eben_haezer']) ? validate($_POST['alamat_eben_haezer']) : '';
    $alamat_mahanaim = isset($_POST['alamat_mahanaim']) ? validate($_POST['alamat_mahanaim']) : '';
    $alamat_filadelfia = isset($_POST['alamat_filadelfia']) ? validate($_POST['alamat_filadelfia']) : '';
    $alamat_karmel = isset($_POST['alamat_karmel']) ? validate($_POST['alamat_karmel']) : '';
    $alamat_sinai = isset($_POST['alamat_sinai']) ? validate($_POST['alamat_sinai']) : '';
    $alamat_kana = isset($_POST['alamat_kana']) ? validate($_POST['alamat_kana']) : '';
    $alamat_getsemani = isset($_POST['alamat_getsemani']) ? validate($_POST['alamat_getsemani']) : '';
    $alamat_sion = isset($_POST['alamat_sion']) ? validate($_POST['alamat_sion']) : '';

    $phone_petra = isset($_POST['phone_petra']) ? validate($_POST['phone_petra']) : '';
    $phone_efrata = isset($_POST['phone_efrata']) ? validate($_POST['phone_efrata']) : '';
    $phone_hermon = isset($_POST['phone_hermon']) ? validate($_POST['phone_hermon']) : '';
    $phone_eben_haezer = isset($_POST['phone_eben_haezer']) ? validate($_POST['phone_eben_haezer']) : '';
    $phone_mahanaim = isset($_POST['phone_mahanaim']) ? validate($_POST['phone_mahanaim']) : '';
    $phone_filadelfia = isset($_POST['phone_filadelfia']) ? validate($_POST['phone_filadelfia']) : '';
    $phone_karmel = isset($_POST['phone_karmel']) ? validate($_POST['phone_karmel']) : '';
    $phone_sinai = isset($_POST['phone_sinai']) ? validate($_POST['phone_sinai']) : '';
    $phone_kana = isset($_POST['phone_kana']) ? validate($_POST['phone_kana']) : '';
    $phone_getsemani = isset($_POST['phone_getsemani']) ? validate($_POST['phone_getsemani']) : '';
    $phone_sion = isset($_POST['phone_sion']) ? validate($_POST['phone_sion']) : '';

    $churchesId = isset($_POST['churchesId']) ? validate($_POST['churchesId']) : '';

    if ($churchesId == 'insert') {
        $query = "INSERT INTO churches (
                title_gereja, judul_gereja, gambar1, gambar2, gambar3, 
                gambar_petra, gambar_efrata, gambar_hermon, gambar_eben_haezer, 
                gambar_mahanaim, gambar_filadelfia, gambar_karmel, gambar_sinai, 
                gambar_kana, gambar_getsemani, gambar_sion, 
                judul_petra, judul_efrata, judul_hermon, judul_eben_haezer, 
                judul_mahanaim, judul_filadelfia, judul_karmel, judul_sinai, 
                judul_kana, judul_getsemani, judul_sion, 
                alamat_petra, alamat_efrata, alamat_hermon, alamat_eben_haezer, 
                alamat_mahanaim, alamat_filadelfia, alamat_karmel, alamat_sinai, 
                alamat_kana, alamat_getsemani, alamat_sion, 
                phone_petra, phone_efrata, phone_hermon, phone_eben_haezer, 
                phone_mahanaim, phone_filadelfia, phone_karmel, phone_sinai, 
                phone_kana, phone_getsemani, phone_sion
            ) 
            VALUES (
                '$title_gereja', '$judul_gereja', '$gambar1', '$gambar2', '$gambar3',
                '$gambar_petra', '$gambar_efrata', '$gambar_hermon', '$gambar_eben_haezer',
                '$gambar_mahanaim', '$gambar_filadelfia', '$gambar_karmel', '$gambar_sinai',
                '$gambar_kana', '$gambar_getsemani', '$gambar_sion',
                '$judul_petra', '$judul_efrata', '$judul_hermon', '$judul_eben_haezer',
                '$judul_mahanaim', '$judul_filadelfia', '$judul_karmel', '$judul_sinai',
                '$judul_kana', '$judul_getsemani', '$judul_sion',
                '$alamat_petra', '$alamat_efrata', '$alamat_hermon', '$alamat_eben_haezer',
                '$alamat_mahanaim', '$alamat_filadelfia', '$alamat_karmel', '$alamat_sinai',
                '$alamat_kana', '$alamat_getsemani', '$alamat_sion',
                '$phone_petra', '$phone_efrata', '$phone_hermon', '$phone_eben_haezer',
                '$phone_mahanaim', '$phone_filadelfia', '$phone_karmel', '$phone_sinai',
                '$phone_kana', '$phone_getsemani', '$phone_sion'
            )";
        $result = mysqli_query($conn, $query);
    }

    if ($result) {
        redirect('churches.php', 'Sukses Menyimpan Data churches');
    } else {
        redirect('churches.php', 'Terjadi Sesuatu');
    }
}

//petra
if (isset($_POST['save_petra'])) {
    // Ambil data dari form
    $judul_petra = $_POST['judul_petra'];
    $alamat_petra = $_POST['alamat_petra'];
    $phone_petra = $_POST['phone_petra'];
    $churchesId = $_POST['churchesId'];  // ID untuk update

    // Cek apakah gambar diupload
    if ($_FILES['gambar_petra']['name']) {
        // Jika ada gambar baru
        $gambar_petra = $_FILES['gambar_petra']['name'];
        $target_dir = "/uploads/gereja/petra/"; // Tentukan direktori upload
        $target_file = $target_dir . basename($_FILES['gambar_petra']['name']);
        
        // Pindahkan gambar ke direktori uploads
        if (move_uploaded_file($_FILES['gambar_petra']['tmp_name'], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES['gambar_petra']['name'])). " telah diunggah.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        // Jika tidak ada gambar baru yang diupload, tetap menggunakan gambar lama
        $gambar_petra = null;
    }

    // Jika churchesId adalah 'insert', lakukan insert data baru
    if ($churchesId == 'insert') {
        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO petra (judul_petra, alamat_petra, phone_petra, gambar_petra)
                VALUES ('$judul_petra', '$alamat_petra', '$phone_petra', '$gambar_petra')";
    } else {
        // Jika churchesId bukan 'insert', lakukan update data
        if ($gambar_petra !== null) {
            // Jika gambar baru di-upload, update gambar
            $sql = "UPDATE petra 
                    SET judul_petra = '$judul_petra', alamat_petra = '$alamat_petra', phone_petra = '$phone_petra', gambar_petra = '$gambar_petra' 
                    WHERE id = '$churchesId'";
        } else {
            // Jika tidak ada gambar baru, update tanpa gambar
            $sql = "UPDATE petra 
                    SET judul_petra = '$judul_petra', alamat_petra = '$alamat_petra', phone_petra = '$phone_petra' 
                    WHERE id = '$churchesId'";
        }
    }

    // Jalankan query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        redirect('petra.php', 'Data Petra berhasil disimpan.');
    } else {
        redirect('petra.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }

    // Tutup koneksi database
    mysqli_close($conn);
}

//efrata
if (isset($_POST['save_efrata'])) {
    // Ambil data dari form
    $judul_efrata = $_POST['judul_efrata'];
    $alamat_efrata = $_POST['alamat_efrata'];
    $phone_efrata = $_POST['phone_efrata'];
    $churchesId = $_POST['churchesId'];  // ID untuk update

    // Cek apakah gambar diupload
    if ($_FILES['gambar_efrata']['name']) {
        // Jika ada gambar baru
        $gambar_efrata = $_FILES['gambar_efrata']['name'];
        $target_dir = "/gereja/efrata/"; // Tentukan direktori upload
        $target_file = $target_dir . basename($_FILES['gambar_efrata']['name']);
        
        // Pindahkan gambar ke direktori uploads
        if (move_uploaded_file($_FILES['gambar_efrata']['tmp_name'], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES['gambar_efrata']['name'])). " telah diunggah.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        // Jika tidak ada gambar baru yang diupload, tetap menggunakan gambar lama
        $gambar_efrata = null;
    }

    // Jika churchesId adalah 'insert', lakukan insert data baru
    if ($churchesId == 'insert') {
        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO efrata (judul_efrata, alamat_efrata, phone_efrata, gambar_efrata)
                VALUES ('$judul_efrata', '$alamat_efrata', '$phone_efrata', '$gambar_efrata')";
    } else {
        // Jika churchesId bukan 'insert', lakukan update data
        if ($gambar_efrata !== null) {
            // Jika gambar baru di-upload, update gambar
            $sql = "UPDATE efrata 
                    SET judul_efrata = '$judul_efrata', alamat_efrata = '$alamat_efrata', phone_efrata = '$phone_efrata', gambar_efrata = '$gambar_efrata' 
                    WHERE id = '$churchesId'";
        } else {
            // Jika tidak ada gambar baru, update tanpa gambar
            $sql = "UPDATE efrata 
                    SET judul_efrata = '$judul_efrata', alamat_efrata = '$alamat_efrata', phone_efrata = '$phone_efrata' 
                    WHERE id = '$churchesId'";
        }
    }

    // Jalankan query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        redirect('efrata.php', 'Data Efrata berhasil disimpan.');
    } else {
        redirect('efrata.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }

    // Tutup koneksi database
    mysqli_close($conn);
}

//hermon
if (isset($_POST['save_hermon'])) {
    // Get the data from the form
    $judul_hermon = $_POST['judul_hermon'];
    $alamat_hermon = $_POST['alamat_hermon'];
    $phone_hermon = $_POST['phone_hermon'];
    $churchesId = $_POST['churchesId']; // ID for update

    // Check if a new image is uploaded
    if ($_FILES['gambar_hermon']['name']) {
        // If there is a new image, get the file name and upload
        $gambar_hermon = $_FILES['gambar_hermon']['name'];
        $target_dir = "/uploads/hermon/";  // Specify the upload directory
        $target_file = $target_dir . basename($_FILES['gambar_hermon']['name']);

        // Move the uploaded file to the server directory
        if (move_uploaded_file($_FILES['gambar_hermon']['tmp_name'], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES['gambar_hermon']['name'])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            $gambar_hermon = null;
        }
    } else {
        // If no new image, use the old image (from hidden input)
        $gambar_hermon = $_POST['old_gambar_hermon'];
    }

    // Insert or update the data based on churchesId
    if ($churchesId == 'insert') {
        // Insert new data
        $sql = "INSERT INTO hermon (judul_hermon, alamat_hermon, phone_hermon, gambar_hermon)
                VALUES ('$judul_hermon', '$alamat_hermon', '$phone_hermon', '$gambar_hermon')";
    } else {
        // Update existing data
        if ($gambar_hermon !== null) {
            // If new image uploaded, update the image
            $sql = "UPDATE hermon
                    SET judul_hermon = '$judul_hermon', alamat_hermon = '$alamat_hermon', phone_hermon = '$phone_hermon', gambar_hermon = '$gambar_hermon'
                    WHERE id = '$churchesId'";
        } else {
            // Update without changing the image
            $sql = "UPDATE hermon
                    SET judul_hermon = '$judul_hermon', alamat_hermon = '$alamat_hermon', phone_hermon = '$phone_hermon'
                    WHERE id = '$churchesId'";
        }
    }

    // Run the query and check for success
    $result = mysqli_query($conn, $sql);

    if ($result) {
        redirect('hermon.php', 'Data Hermon berhasil disimpan.');
    } else {
        redirect('hermon.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }

    // Close the database connection
    mysqli_close($conn);
}

//eben
if (isset($_POST['save_eben_haezer'])) {
    // Get the data from the form
    $judul_eben_haezer = $_POST['judul_eben_haezer'];
    $alamat_eben_haezer = $_POST['alamat_eben_haezer'];
    $phone_eben_haezer = $_POST['phone_eben_haezer'];
    $churchesId = $_POST['churchesId']; // ID for update

    // Check if a new image is uploaded
    if ($_FILES['gambar_eben_haezer']['name']) {
        // If there is a new image, get the file name and upload
        $gambar_eben_haezer = $_FILES['gambar_eben_haezer']['name'];
        $target_dir = "uploads/eben/";  // Specify the upload directory
        $target_file = $target_dir . basename($_FILES['gambar_eben_haezer']['name']);

        // Move the uploaded file to the server directory
        if (move_uploaded_file($_FILES['gambar_eben_haezer']['tmp_name'], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES['gambar_eben_haezer']['name'])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            $gambar_eben_haezer = null;
        }
    } else {
        // If no new image, use the old image (from hidden input)
        $gambar_eben_haezer = $_POST['old_gambar_eben_haezer'];
    }

    // Insert or update the data based on churchesId
    if ($churchesId == 'insert') {
        // Insert new data
        $sql = "INSERT INTO eben (judul_eben_haezer, alamat_eben_haezer, phone_eben_haezer, gambar_eben_haezer)
                VALUES ('$judul_eben_haezer', '$alamat_eben_haezer', '$phone_eben_haezer', '$gambar_eben_haezer')";
    } else {
        // Update existing data
        if ($gambar_eben_haezer !== null) {
            // If new image uploaded, update the image
            $sql = "UPDATE eben
                    SET judul_eben_haezer = '$judul_eben_haezer', alamat_eben_haezer = '$alamat_eben_haezer', phone_eben_haezer = '$phone_eben_haezer', gambar_eben_haezer = '$gambar_eben_haezer'
                    WHERE id = '$churchesId'";
        } else {
            // Update without changing the image
            $sql = "UPDATE eben
                    SET judul_eben_haezer = '$judul_eben_haezer', alamat_eben_haezer = '$alamat_eben_haezer', phone_eben_haezer = '$phone_eben_haezer'
                    WHERE id = '$churchesId'";
        }
    }

    // Run the query and check for success
    $result = mysqli_query($conn, $sql);

    if ($result) {
        redirect('eben.php', 'Data Eben berhasil disimpan.');
    } else {
        redirect('eben.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }


    // Close the database connection
    mysqli_close($conn);
}

//mahaniam
if (isset($_POST['save_mahanaim'])) {
    $churchesId = $_POST['churchesId'];
    $judul_mahanaim = $_POST['judul_mahanaim'];
    $alamat_mahanaim = $_POST['alamat_mahanaim'];
    $phone_mahanaim = $_POST['phone_mahanaim'];

    // Handle file upload
    if (!empty($_FILES['gambar_mahanaim']['name'])) {
        $gambar_mahanaim = $_FILES['gambar_mahanaim']['name'];
        $target_dir = "/uploads/mahanaim/";
        $target_file = $target_dir . basename($gambar_mahanaim);
        move_uploaded_file($_FILES['gambar_mahanaim']['tmp_name'], $target_file);
    } else {
        $gambar_mahanaim = $_POST['old_gambar_mahanaim'];
    }

    // Update or insert into database
    if ($churchesId == 'insert') {
        // Insert new data
        $query = "INSERT INTO `mahanaim` (`judul_mahanaim`, `alamat_mahanaim`, `phone_mahanaim`, `gambar_mahanaim`) 
                  VALUES ('$judul_mahanaim', '$alamat_mahanaim', '$phone_mahanaim', '$gambar_mahanaim')";
    } else {
        // Update existing data
        $query = "UPDATE `mahanaim` SET `judul_mahanaim` = '$judul_mahanaim', `alamat_mahanaim` = '$alamat_mahanaim', 
                  `phone_mahanaim` = '$phone_mahanaim', `gambar_mahanaim` = '$gambar_mahanaim' WHERE `id` = '$churchesId'";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('mahanaim.php', 'Data Mahanaim berhasil disimpan.');
    } else {
        redirect('mahanaim.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//filadelfia
if (isset($_POST['save_filadelfia'])) {
    $churchesId = $_POST['churchesId'];
    $judul_filadelfia = $_POST['judul_filadelfia'];
    $alamat_filadelfia = $_POST['alamat_filadelfia'];
    $phone_filadelfia = $_POST['phone_filadelfia'];

    // Handle file upload
    if (!empty($_FILES['gambar_filadelfia']['name'])) {
        $gambar_filadelfia = $_FILES['gambar_filadelfia']['name'];
        $target_dir = "uploads/filadelfia/";
        $target_file = $target_dir . basename($gambar_filadelfia);
        move_uploaded_file($_FILES['gambar_filadelfia']['tmp_name'], $target_file);
    } else {
        $gambar_filadelfia = $_POST['old_gambar_filadelfia'];
    }

    // Update or insert into database
    if ($churchesId == 'insert') {
        // Insert new data
        $query = "INSERT INTO `filadelfia` (`judul_filadelfia`, `alamat_filadelfia`, `phone_filadelfia`, `gambar_filadelfia`) 
                  VALUES ('$judul_filadelfia', '$alamat_filadelfia', '$phone_filadelfia', '$gambar_filadelfia')";
    } else {
        // Update existing data
        $query = "UPDATE `filadelfia` SET `judul_filadelfia` = '$judul_filadelfia', `alamat_filadelfia` = '$alamat_filadelfia', 
                  `phone_filadelfia` = '$phone_filadelfia', `gambar_filadelfia` = '$gambar_filadelfia' WHERE `id` = '$churchesId'";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('filadelfia.php', 'Data Filadelfia berhasil disimpan.');
    } else {
        redirect('filadelfia.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//karmel
if (isset($_POST['save_karmel'])) {
    // Ambil data dari form
    $churchesId = $_POST['churchesId'];
    $judul_karmel = $_POST['judul_karmel'];
    $alamat_karmel = $_POST['alamat_karmel'];
    $phone_karmel = $_POST['phone_karmel'];

    // Upload Gambar
    if (!empty($_FILES['gambar_karmel']['name'])) {
        $gambar_karmel = $_FILES['gambar_karmel']['name'];
        $target_dir = "uploads/gereja/karmel/";
        $target_file = $target_dir . basename($gambar_karmel);

        // Validasi file gambar
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            move_uploaded_file($_FILES['gambar_karmel']['tmp_name'], $target_file);
        } else {
            $_SESSION['error'] = "Format file tidak didukung!";
            header("Location: pengaturan_karmel.php");
            exit;
        }
    } else {
        $gambar_karmel = $_POST['existing_image'] ?? null; // Gunakan gambar lama jika tidak ada yang baru
    }

    // Simpan atau perbarui data ke database
    if ($churchesId == 'insert') {
        // Insert data baru
        $query = "INSERT INTO karmel (judul_karmel, alamat_karmel, phone_karmel, gambar_karmel) 
                  VALUES ('$judul_karmel', '$alamat_karmel', '$phone_karmel', '$gambar_karmel')";
    } else {
        // Update data yang sudah ada
        $query = "UPDATE karmel 
                  SET judul_karmel='$judul_karmel', alamat_karmel='$alamat_karmel', phone_karmel='$phone_karmel', gambar_karmel='$gambar_karmel' 
                  WHERE id='$churchesId'";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('karmel.php', 'Data Karmel berhasil disimpan.');
    } else {
        redirect('karmel.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//sinai
if (isset($_POST['save_sinai'])) {
    $churchesId = $_POST['churchesId'];
    $judul_sinai = $_POST['judul_sinai'];
    $alamat_sinai = $_POST['alamat_sinai'];
    $phone_sinai = $_POST['phone_sinai'];
    $phone_sinai2 = $_POST['phone_sinai2'];

    // Handle upload gambar
    $gambar_sinai = $_FILES['gambar_sinai']['name'];
    $gambar_temp = $_FILES['gambar_sinai']['tmp_name'];

    if (!empty($gambar_sinai)) {
        $gambar_path = "uploads/gereja/sinai/" . $gambar_sinai;
        move_uploaded_file($gambar_temp, $gambar_path);
    } else {
        $gambar_path = getById('sinai1', $churchesId)['data']['gambar_sinai'] ?? '';
    }

    // Insert or Update
    if ($churchesId == 'insert') {
        $query = "INSERT INTO sinai1 (judul_sinai, alamat_sinai, phone_sinai, phone_sinai2, gambar_sinai) 
                  VALUES ('$judul_sinai', '$alamat_sinai', '$phone_sinai', '$phone_sinai2', '$gambar_path')";
    } else {
        $query = "UPDATE sinai1 SET 
                  judul_sinai = '$judul_sinai',
                  alamat_sinai = '$alamat_sinai',
                  phone_sinai = '$phone_sinai',
                  phone_sinai2 = '$phone_sinai2',
                  gambar_sinai = '$gambar_path'
                  WHERE id = $churchesId";
    }

    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('sinai.php', 'Data Sinai berhasil disimpan.');
    } else {
        redirect('sinai.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//kana
if (isset($_POST['save_kana'])) {
    $churchesId = $_POST['churchesId'];
    $judul_kana = $_POST['judul_kana'];
    $alamat_kana = $_POST['alamat_kana'];
    $phone_kana = $_POST['phone_kana'];

    // Handle image upload
    $gambar_kana = $_FILES['gambar_kana']['name'];
    $gambar_temp = $_FILES['gambar_kana']['tmp_name'];

    if (!empty($gambar_kana)) {
        $gambar_path = "uploads/gereja/kana/" . $gambar_kana;
        move_uploaded_file($gambar_temp, $gambar_path);
    } else {
        // Get existing image path if not uploading a new one
        $gambar_path = getById('kana', $churchesId)['data']['gambar_kana'] ?? '';
    }

    // Insert or Update based on churchesId
    if ($churchesId == 'insert') {
        $query = "INSERT INTO kana (judul_kana, alamat_kana, phone_kana, gambar_kana) 
                  VALUES ('$judul_kana', '$alamat_kana', '$phone_kana', '$gambar_path')";
    } else {
        $query = "UPDATE kana SET 
                  judul_kana = '$judul_kana',
                  alamat_kana = '$alamat_kana',
                  phone_kana = '$phone_kana',
                  gambar_kana = '$gambar_path'
                  WHERE id = $churchesId";
    }

    // Execute query and redirect
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('kana.php', 'Data Gereja Kana berhasil disimpan.');
    } else {
        redirect('kana.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//getsemani
if (isset($_POST['save_getsemani'])) {
    $churchesId = $_POST['churchesId'];
    $judul_getsemani = $_POST['judul_getsemani'];
    $alamat_getsemani = $_POST['alamat_getsemani'];
    $phone_getsemani = $_POST['phone_getsemani'];

    // Handle image upload
    $gambar_getsemani = $_FILES['gambar_getsemani']['name'];
    $gambar_temp = $_FILES['gambar_getsemani']['tmp_name'];

    if (!empty($gambar_getsemani)) {
        $gambar_path = "uploads/gereja/getsemani/" . $gambar_getsemani;
        move_uploaded_file($gambar_temp, $gambar_path);
    } else {
        // If no new image, use the old image from the database
        $gambar_path = $_POST['old_gambar_getsemani'] ?? '';
    }

    // Insert or Update based on churchesId
    if ($churchesId == 'insert') {
        $query = "INSERT INTO getsemani (judul_getsemani, alamat_getsemani, phone_getsemani, gambar_getsemani) 
                  VALUES ('$judul_getsemani', '$alamat_getsemani', '$phone_getsemani', '$gambar_path')";
    } else {
        $query = "UPDATE getsemani SET 
                  judul_getsemani = '$judul_getsemani',
                  alamat_getsemani = '$alamat_getsemani',
                  phone_getsemani = '$phone_getsemani',
                  gambar_getsemani = '$gambar_path'
                  WHERE id = $churchesId";
    }

    // Execute query and redirect
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('getsemani.php', 'Data Gereja Getsemani berhasil disimpan.');
    } else {
        redirect('getsemani.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//sion
if (isset($_POST['save_sion'])) {
    $churchesId = $_POST['churchesId'];
    $judul_sion = $_POST['judul_sion'];
    $alamat_sion = $_POST['alamat_sion'];
    $phone_sion = $_POST['phone_sion'];

    // Handle image upload
    $gambar_sion = $_FILES['gambar_sion']['name'];
    $gambar_temp = $_FILES['gambar_sion']['tmp_name'];

    // Check if an image was uploaded
    if (!empty($gambar_sion)) {
        // Set the target path for the image
        $gambar_path = "uploads/gereja/sion/" . $gambar_sion;
        move_uploaded_file($gambar_temp, $gambar_path);
    } else {
        // If no image uploaded, use the old image from the database (if exists)
        $gambar_path = $_POST['old_gambar_sion'] ?? '';
    }

    // Insert or update the data based on churchesId
    if ($churchesId == 'insert') {
        // Insert new data
        $query = "INSERT INTO sion (judul_sion, alamat_sion, phone_sion, gambar_sion) 
                  VALUES ('$judul_sion', '$alamat_sion', '$phone_sion', '$gambar_path')";
    } else {
        // Update existing data
        $query = "UPDATE sion SET 
                  judul_sion = '$judul_sion',
                  alamat_sion = '$alamat_sion',
                  phone_sion = '$phone_sion',
                  gambar_sion = '$gambar_path'
                  WHERE id = $churchesId";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('sion.php', 'Data Gereja Sion berhasil disimpan.');
    } else {
        redirect('sion.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//kids
if (isset($_POST['save_kids'])) {
    // Validasi input
    $judul_kids = validate($_POST['judul_kids']);
    $deskripsi_kids = validate($_POST['deskripsi_kids']);

    // Path folder upload
    $uploadDir = __DIR__ . '/uploads/kids/'; // Folder to store images
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create the folder if it doesn't exist
    }

    // Upload images (if provided)
    $gambar_kids = !empty($_FILES['gambar_kids']['name']) ? uploadFile($_FILES['gambar_kids'], $uploadDir) : '';
    $gambar_kids1 = !empty($_FILES['gambar_kids1']['name']) ? uploadFile($_FILES['gambar_kids1'], $uploadDir) : '';
    $gambar_kids2 = !empty($_FILES['gambar_kids2']['name']) ? uploadFile($_FILES['gambar_kids2'], $uploadDir) : '';

    // Get the kidsId (either 'insert' or existing id for update)
    $kidsId = validate($_POST['kidsId']);

    if ($kidsId === 'insert') {
        // Insert new data if no existing record
        $query = "INSERT INTO kids (gambar_kids, gambar_kids1, gambar_kids2, judul_kids, deskripsi_kids) 
                  VALUES ('$gambar_kids', '$gambar_kids1', '$gambar_kids2', '$judul_kids', '$deskripsi_kids')";
    } else {
        // Update existing record (ID 1)
        $query = "UPDATE kids SET 
                  judul_kids = '$judul_kids', 
                  deskripsi_kids = '$deskripsi_kids', 
                  gambar_kids = IF('$gambar_kids' != '', '$gambar_kids', gambar_kids), 
                  gambar_kids1 = IF('$gambar_kids1' != '', '$gambar_kids1', gambar_kids1), 
                  gambar_kids2 = IF('$gambar_kids2' != '', '$gambar_kids2', gambar_kids2) 
                  WHERE id = 1"; // Assuming ID is always 1
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('kids.php', 'Data Kids berhasil disimpan.');
    } else {
        redirect('kids.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//youth
if (isset($_POST['save_youth'])) {
    // Validasi input
    $judul_youth = validate($_POST['judul_youth']);
    $deskripsi_youth = validate($_POST['deskripsi_youth']);

    // Path folder upload
    $uploadDir = __DIR__ . '/uploads/youth/'; // Folder to store images
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create the folder if it doesn't exist
    }

    // Upload images (if provided)
    $gambar_youth = !empty($_FILES['gambar_youth']['name']) ? uploadFile($_FILES['gambar_youth'], $uploadDir) : $_POST['old_gambar_youth'];
    $gambar_youth1 = !empty($_FILES['gambar_youth1']['name']) ? uploadFile($_FILES['gambar_youth1'], $uploadDir) : $_POST['old_gambar_youth1'];
    $gambar_youth2 = !empty($_FILES['gambar_youth2']['name']) ? uploadFile($_FILES['gambar_youth2'], $uploadDir) : $_POST['old_gambar_youth2'];

    // Get the youthId (either 'insert' or existing id for update)
    $youthId = validate($_POST['youthId']);

    if ($youthId === 'insert') {
        // Insert new data if no existing record
        $query = "INSERT INTO youth_star_generation (gambar_youth, gambar_youth1, gambar_youth2, judul_youth, deskripsi_youth) 
                  VALUES ('$gambar_youth', '$gambar_youth1', '$gambar_youth2', '$judul_youth', '$deskripsi_youth')";
    } else {
        // Update existing record (ID 1)
        $query = "UPDATE youth_star_generation SET 
                  judul_youth = '$judul_youth', 
                  deskripsi_youth = '$deskripsi_youth', 
                  gambar_youth = IF('$gambar_youth' != '', '$gambar_youth', gambar_youth), 
                  gambar_youth1 = IF('$gambar_youth1' != '', '$gambar_youth1', gambar_youth1), 
                  gambar_youth2 = IF('$gambar_youth2' != '', '$gambar_youth2', gambar_youth2) 
                  WHERE id = 1"; // Assuming ID is always 1
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('youth.php', 'Data Youth berhasil disimpan.');
    } else {
        redirect('youth.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//propesional massku
if (isset($_POST['save_professional'])) {
    // Validasi input
    $judul_professional = validate($_POST['judul_professional']);
    $deskripsi_professional = validate($_POST['deskripsi_professional']);

    // Path folder upload
    $uploadDir = __DIR__ . '/uploads/professional/'; // Folder to store images
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create the folder if it doesn't exist
    }

    // Upload images (if provided)
    $gambar_professional = !empty($_FILES['gambar_professional']['name']) ? uploadFile($_FILES['gambar_professional'], $uploadDir) : $_POST['old_gambar_professional'];
    $gambar_professional1 = !empty($_FILES['gambar_professional1']['name']) ? uploadFile($_FILES['gambar_professional1'], $uploadDir) : $_POST['old_gambar_professional1'];
    $gambar_professional2 = !empty($_FILES['gambar_professional2']['name']) ? uploadFile($_FILES['gambar_professional2'], $uploadDir) : $_POST['old_gambar_professional2'];

    // Get the professionalId (either 'insert' or existing id for update)
    $professionalId = validate($_POST['professionalId']);

    if ($professionalId === 'insert') {
        // Insert new data if no existing record
        $query = "INSERT INTO professional (gambar_professional, gambar_professional1, gambar_professional2, judul_professional, deskripsi_professional) 
                  VALUES ('$gambar_professional', '$gambar_professional1', '$gambar_professional2', '$judul_professional', '$deskripsi_professional')";
    } else {
        // Update existing record (ID 1)
        $query = "UPDATE professional SET 
                  judul_professional = '$judul_professional', 
                  deskripsi_professional = '$deskripsi_professional', 
                  gambar_professional = IF('$gambar_professional' != '', '$gambar_professional', gambar_professional), 
                  gambar_professional1 = IF('$gambar_professional1' != '', '$gambar_professional1', gambar_professional1), 
                  gambar_professional2 = IF('$gambar_professional2' != '', '$gambar_professional2', gambar_professional2) 
                  WHERE id = 1"; // Assuming ID is always 1
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('professional.php', 'Data Professional berhasil disimpan.');
    } else {
        redirect('professional.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

if (isset($_POST['save_sunday'])) {
    // Validasi input
    $judul_sunday = validate($_POST['judul_sunday']);
    $deskripsi_sunday = validate($_POST['deskripsi_sunday']);

    // Path folder upload
    $uploadDir = __DIR__ . '/uploads/sunday/'; // Folder to store images
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create the folder if it doesn't exist
    }

    // Upload images (if provided)
    $gambar_sunday = !empty($_FILES['gambar_sunday']['name']) ? uploadFile($_FILES['gambar_sunday'], $uploadDir) : '';
    $gambar_sunday1 = !empty($_FILES['gambar_sunday1']['name']) ? uploadFile($_FILES['gambar_sunday1'], $uploadDir) : '';
    $gambar_sunday2 = !empty($_FILES['gambar_sunday2']['name']) ? uploadFile($_FILES['gambar_sunday2'], $uploadDir) : '';

    // Get the sundayId (either 'insert' or existing id for update)
    $sundayId = validate($_POST['sundayId']);

    if ($sundayId === 'insert') {
        // Insert new data if no existing record
        $query = "INSERT INTO sunday_service (gambar_sunday, gambar_sunday1, gambar_sunday2, judul_sunday, deskripsi_sunday) 
                  VALUES ('$gambar_sunday', '$gambar_sunday1', '$gambar_sunday2', '$judul_sunday', '$deskripsi_sunday')";
    } else {
        // Update existing record (ID 1)
        $query = "UPDATE sunday_service SET 
                  judul_sunday = '$judul_sunday', 
                  deskripsi_sunday = '$deskripsi_sunday', 
                  gambar_sunday = IF('$gambar_sunday' != '', '$gambar_sunday', gambar_sunday), 
                  gambar_sunday1 = IF('$gambar_sunday1' != '', '$gambar_sunday1', gambar_sunday1), 
                  gambar_sunday2 = IF('$gambar_sunday2' != '', '$gambar_sunday2', gambar_sunday2) 
                  WHERE id = 1"; // Assuming ID is always 1
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('sunday.php', 'Data Sunday berhasil disimpan.');
    } else {
        redirect('sunday.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//elder
if (isset($_POST['save_elder'])) {
    // Validate input
    $judul_elder = validate($_POST['judul_elder']);
    $deskripsi_elder = validate($_POST['deskripsi_elder']);

    // Path for the upload folder
    $uploadDir = __DIR__ . '/uploads/elder/'; // Folder to store images
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create the folder if it doesn't exist
    }

    // Handle image uploads (if provided)
    $gambar_elder = !empty($_FILES['gambar_elder']['name']) ? uploadFile($_FILES['gambar_elder'], $uploadDir) : $_POST['old_gambar_elder'];
    $gambar_elder1 = !empty($_FILES['gambar_elder1']['name']) ? uploadFile($_FILES['gambar_elder1'], $uploadDir) : $_POST['old_gambar_elder1'];
    $gambar_elder2 = !empty($_FILES['gambar_elder2']['name']) ? uploadFile($_FILES['gambar_elder2'], $uploadDir) : $_POST['old_gambar_elder2'];

    // Get elderId (either 'insert' for a new record or existing ID for update)
    $elderId = validate($_POST['elderId']);

    if ($elderId === 'insert') {
        // Insert new data if no existing record
        $query = "INSERT INTO elder_service (gambar_elder, gambar_elder1, gambar_elder2, judul_elder, deskripsi_elder) 
                  VALUES ('$gambar_elder', '$gambar_elder1', '$gambar_elder2', '$judul_elder', '$deskripsi_elder')";
    } else {
        // Update existing record (ID 1)
        $query = "UPDATE elder_service SET 
                  judul_elder = '$judul_elder', 
                  deskripsi_elder = '$deskripsi_elder', 
                  gambar_elder = IF('$gambar_elder' != '', '$gambar_elder', gambar_elder), 
                  gambar_elder1 = IF('$gambar_elder1' != '', '$gambar_elder1', gambar_elder1), 
                  gambar_elder2 = IF('$gambar_elder2' != '', '$gambar_elder2', gambar_elder2) 
                  WHERE id = 1"; // Assuming ID is always 1
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('elder.php', 'Data Elder berhasil disimpan.');
    } else {
        redirect('elder.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}

//media 
if (isset($_POST['save_media'])) {
    // Validasi input
    $title = validate($_POST['title']);
    $eben_haezer_ig = validate($_POST['eben_haezer_ig']);
    $eben_haezer_youtube = validate($_POST['eben_haezer_youtube']);
    $efrata_ig = validate($_POST['efrata_ig']);
    $efrata_youtube = validate($_POST['efrata_youtube']);
    $getsemani_ig = validate($_POST['getsemani_ig']);
    $getsemani_youtube = validate($_POST['getsemani_youtube']);
    $sinai_ig = validate($_POST['sinai_ig']);
    $sinai_youtube = validate($_POST['sinai_youtube']);
    $petra_ig = validate($_POST['petra_ig']);
    $petra_youtube = validate($_POST['petra_youtube']);
    $mahanim_ig = validate($_POST['mahanim_ig']);
    $mahanim_youtube = validate($_POST['mahanim_youtube']);
    $hermon_ig = validate($_POST['hermon_ig']);
    $hermon_youtube = validate($_POST['hermon_youtube']);
    $kana_ig = validate($_POST['kana_ig']);
    $kana_youtube = validate($_POST['kana_youtube']);
    $sion_ig = validate($_POST['sion_ig']);
    $sion_youtube = validate($_POST['sion_youtube']);
    $karmel_ig = validate($_POST['karmel_ig']);
    $karmel_youtube = validate($_POST['karmel_youtube']);

    // Dapatkan ID (untuk membedakan insert atau update)
    $mediaId = validate($_POST['mediaId']);

    if ($mediaId === 'insert') {
        // Jika data baru, lakukan insert
        $query = "INSERT INTO media (title, eben_haezer_ig, eben_haezer_youtube, 
                                      efrata_ig, efrata_youtube, getsemani_ig, getsemani_youtube,
                                      sinai_ig, sinai_youtube, petra_ig, petra_youtube, 
                                      mahanim_ig, mahanim_youtube, hermon_ig, hermon_youtube, 
                                      kana_ig, kana_youtube, sion_ig, sion_youtube, 
                                      karmel_ig, karmel_youtube)
                  VALUES ('$title', '$eben_haezer_ig', '$eben_haezer_youtube', 
                          '$efrata_ig', '$efrata_youtube', '$getsemani_ig', '$getsemani_youtube',
                          '$sinai_ig', '$sinai_youtube', '$petra_ig', '$petra_youtube',
                          '$mahanim_ig', '$mahanim_youtube', '$hermon_ig', '$hermon_youtube',
                          '$kana_ig', '$kana_youtube', '$sion_ig', '$sion_youtube', 
                          '$karmel_ig', '$karmel_youtube')";
    } else {
        // Update data yang sudah ada 
        $query = "UPDATE media SET 
                  title = '$title', 
                  eben_haezer_ig = '$eben_haezer_ig', 
                  eben_haezer_youtube = '$eben_haezer_youtube', 
                  efrata_ig = '$efrata_ig', 
                  efrata_youtube = '$efrata_youtube', 
                  getsemani_ig = '$getsemani_ig', 
                  getsemani_youtube = '$getsemani_youtube', 
                  sinai_ig = '$sinai_ig', 
                  sinai_youtube = '$sinai_youtube', 
                  petra_ig = '$petra_ig', 
                  petra_youtube = '$petra_youtube', 
                  mahanim_ig = '$mahanim_ig', 
                  mahanim_youtube = '$mahanim_youtube', 
                  hermon_ig = '$hermon_ig', 
                  hermon_youtube = '$hermon_youtube', 
                  kana_ig = '$kana_ig', 
                  kana_youtube = '$kana_youtube', 
                  sion_ig = '$sion_ig', 
                  sion_youtube = '$sion_youtube', 
                  karmel_ig = '$karmel_ig', 
                  karmel_youtube = '$karmel_youtube'
                  WHERE id = 8"; // Asumsi ID selalu 8
    }

    // Jalankan query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('media.php', 'Data Media berhasil disimpan.');
    } else {
        redirect('media.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}


//contact
if (isset($_POST['save_contact'])) {
    // Validasi input
    $title = validate($_POST['title']);
    $isi = validate($_POST['isi']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);

    // Dapatkan ID (untuk membedakan insert atau update)
    $contactId = validate($_POST['contactId']);

    if ($contactId === 'insert') {
        // Jika data baru, lakukan insert
        $query = "INSERT INTO contact_us (title, isi, email, phone) 
                  VALUES ('$title', '$isi', '$email', '$phone')";
    } else {
        // Update data yang sudah ada (ID 1)
        $query = "UPDATE contact_us SET 
                  title = '$title', 
                  isi = '$isi', 
                  email = '$email', 
                  phone = '$phone' 
                  WHERE id = 1"; // Asumsi ID selalu 1
    }

    // Jalankan query
    $result = mysqli_query($conn, $query);

    if ($result) {
        redirect('contact.php', 'Data Contact Us berhasil disimpan.');
    } else {
        redirect('contact.php', 'Terjadi kesalahan: ' . mysqli_error($conn));
    }
}


?>
