<?php
include_once "koneksi.php";

$username = "admin1";
$password = "admin123";

$hashed_password = md5($password);

$sql = " INSERT INTO `user` (`id`, `username`, `password`) VALUES (2, '$username', '$hashed_password')";

if (mysqli_query($connect, $sql)) {
echo "Data berhasil ditambahkan pada tabel 'user'!";
} else {
echo "Error saat memasukkan data: " . $connect->error;
}
$connect->close();
?>
?>