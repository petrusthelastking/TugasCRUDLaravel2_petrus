<?php

$jumlahKursi = 45;

$kursiDitempati = 28;

$kursiKosong = $jumlahKursi - $kursiDitempati;

$persentaseKursiKosong = ($kursiKosong / $jumlahKursi) * 100;

echo "Jumlah kursi yang tersedia di restoran: {$jumlahKursi} <br>";
echo "Jumlah kursi yang telah ditempati: {$kursiDitempati} <br>";
echo "Jumlah kursi yang kosong: {$kursiKosong} <br>";
echo "Persentase kursi yang kosong: " . number_format($persentaseKursiKosong, 2) . "%<br>";
?>
