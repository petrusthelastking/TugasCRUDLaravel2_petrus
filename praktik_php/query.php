<?php
include_once "koneksi.php";
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
)";

if ((mysqli_query($conn, $sql))) {
    echo "Tabel 'user' berhasil dibuat";
} else {
    echo "Error saat membuat tabel: " . $connect->error;
}
$connect->close();
?>
