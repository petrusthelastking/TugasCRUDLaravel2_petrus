<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $file_names = $_FILES['files']['name'];
    $file_sizes = $_FILES['files']['size'];
    $file_tmps = $_FILES['files']['tmp_name'];
    $extensions = array("jpg", "jpeg", "png", "gif");

    // Loop untuk setiap file yang diunggah
    for ($i = 0; $i < count($file_names); $i++) {
        $file_name = basename($file_names[$i]);
        $file_size = $file_sizes[$i];
        $file_tmp = $file_tmps[$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ekstensi file
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF untuk file $file_name.";
        }

        // Validasi ukuran file
        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB untuk file $file_name.";
        }

        // Jika tidak ada error, pindahkan file
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "images/" . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        }
    }

    // Tampilkan error jika ada
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>
