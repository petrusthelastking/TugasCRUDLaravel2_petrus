<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // The target directory to save the documents
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    // File size limit (10MB)
    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah."; // Document successfully uploaded
        } else {
            echo "Gagal mengunggah dokumen."; // Failed to upload document
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan."; // Invalid document type or file size exceeded
    }
}
?>
