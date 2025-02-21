<?php

$poin = 550; 

$totalSkor = $poin;

$hadiahTambahan = ($totalSkor > 500) ? 'YA' : 'TIDAK';

echo "Total skor pemain adalah: " . number_format($totalSkor, 0, ',', '.') . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan . "<br>";
?>
