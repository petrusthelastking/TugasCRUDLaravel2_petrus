<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $colors = $_POST['colors'] ?? [];

    if (!empty($name) && !empty($colors)) {
        echo "<p>Nama: <strong>$name</strong></p>";
        echo "<p>Warna yang dipilih:</p><ul>";
        foreach ($colors as $color) {
            echo "<li>" . htmlspecialchars($color) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Mohon masukkan nama dan pilih minimal satu warna.</p>";
    }
}
?>
