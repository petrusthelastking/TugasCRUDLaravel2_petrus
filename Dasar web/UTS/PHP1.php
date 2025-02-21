<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $colors = $_POST['color'];
    
    echo "Nama: " . htmlspecialchars($name) . "<br>";
    echo "Warna Pilihan: " . implode(", ", array_map('htmlspecialchars', $colors));
}
?>
