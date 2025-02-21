<?php
$a = 10;
$b = 4;

$HasilTambah = $a + $b;
$HasilKurang = $a - $b;
$HasilKali = $a * $b;
$HasilBagi = $a / $b;
$SisaBagi = $a % $b;
$Pangkat = $a ** $b;

$HasilSama = $a == $b;
$HasilTidakSama = $a != $b;
$HasilLebihKecil = $a < $b; 
$HasilLebihBesar = $a > $b; 
$HasilLebihKecilSama = $a <= $b; 
$HasilLebihBesarSama = $a >= $b; 

$HasilAnd = $a && $b;
$HasilOr = $a || $b;
$HasilNotA = !$a;
$HasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$HasilIndentik = $a === $b;
$HasilTidakIdentik = $a !== $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Hasil Penjumlahan (a + b): {$HasilTambah} <br>";
echo "Hasil Pengurangan (a - b): {$HasilKurang} <br>";
echo "Hasil Perkalian (a * b): {$HasilKali} <br>";
echo "Hasil Pembagian (a / b): {$HasilBagi} <br>";
echo "Sisa Bagi (a % b): {$SisaBagi} <br>";
echo "Hasil Pangkat (a ** b): {$Pangkat} <br><br>";

echo "Apakah a sama dengan b? : " . ($HasilSama ? 'True' : 'False') . "<br>";
echo "Apakah a tidak sama dengan b? : " . ($HasilTidakSama ? 'True' : 'False') . "<br>";
echo "Apakah a lebih kecil dari b? : " . ($HasilLebihKecil ? 'True' : 'False') . "<br>";
echo "Apakah a lebih besar dari b? : " . ($HasilLebihBesar ? 'True' : 'False') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? : " . ($HasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? : " . ($HasilLebihBesarSama ? 'True' : 'False') . "<br>";

echo "Hasil Logika AND (a && b): " . ($HasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil Logika OR (a || b): " . ($HasilOr ? 'True' : 'False') . "<br>";
echo "Hasil Logika NOT pada a (!a): " . ($HasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil Logika NOT pada b (!b): " . ($HasilNotB ? 'True' : 'False') . "<br>";

echo "Hasil Penjumlahan (a + b): {$HasilTambah} <br>";
echo "Hasil Pengurangan (a - b): {$HasilKurang} <br>";
echo "Hasil Perkalian (a * b): {$HasilKali} <br>";
echo "Hasil Pembagian (a / b): {$HasilBagi} <br>";
echo "Sisa Bagi (a % b): {$SisaBagi} <br>";
echo "Hasil Pangkat (a ** b): {$Pangkat} <br><br>";

echo "<strong>Hasil Identitas:</strong><br>";
echo "Apakah a identik dengan b? : " . ($HasilIndentik ? 'True' : 'False') . "<br>";
echo "Apakah a tidak identik dengan b? : " . ($HasilTidakIdentik ? 'True' : 'False') . "<br>";
?>
