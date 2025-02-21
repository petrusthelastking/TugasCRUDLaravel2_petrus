<?php
define('HOST', 'localhost');
define('USER', 'root'); // Ganti jika username MySQL Anda berbeda
define('PASS', '');
define('DB1', 'prakwebdb'); // Ganti dengan nama database Anda

// Membuat koneksi ke database
$dbl = new mysqli(HOST, USER, PASS, DB1);
if ($dbl->connect_error) {
    die("Koneksi gagal: " . $dbl->connect_error);
}

// Validasi parameter 'id'
$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
    die("ID tidak ditemukan");
}

// Query untuk mengambil data anggota berdasarkan ID
$query = $dbl->query("SELECT * FROM anggota WHERE id = '$id'");
if ($query) {
    $data = $query->fetch_assoc();
    echo "Nama: " . $data['nama'] . "<br>";
    echo "Alamat: " . $data['alamat'] . "<br>";
    // Tampilkan data lainnya
} else {
    echo "Error: " . $dbl->error;
}
?>
