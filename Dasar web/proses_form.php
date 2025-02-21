<?php
if ($_SERVER["REWUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "nama: " . $nama . "<br>";
    echo "email: " . $email; 
}