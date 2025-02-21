<?php
$pesan = "Saya  arek malang";
$pesanperkata = explode(" ", $pesan);
$pesanperkata = array_map(fn($pesan) => strrev($pesan), $pesanperkata);
$pesan = implode(" ", $pesanperkata);

echo $pesan . "<br>";
?>