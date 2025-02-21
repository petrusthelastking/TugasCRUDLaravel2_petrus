<?php
$targetDirectory = "images/"; // Folder khusus untuk menyimpan gambar

// Membuat direktori tujuan jika belum ada
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Memeriksa apakah ada file yang diunggah
if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    // Loop melalui setiap file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]);
        $targetFile = $targetDirectory . $fileName;
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validasi ekstensi file
        if (in_array($fileExtension, $allowedExtensions)) {
            // Memindahkan file ke direktori tujuan jika valid
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan gambar yang valid.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
