<?php
// Konfigurasi database
$host = "localhost:3306";       // Ganti dengan alamat server MySQL jika tidak menggunakan localhost
$username = "root";        // Ganti dengan nama pengguna yang sesuai
$password = "";            // Ganti dengan password jika diperlukan
$database = "dbdaftar"; // Ganti dengan nama database Anda

// Membuat sambungan ke MySQL
$conn = new mysqli($host, $username, $password, $database);

// Cek apakah sambungan berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Berhasil terhubung ke database";
}

// Jangan lupa menutup sambungan setelah selesai
// $conn->close();
?>
