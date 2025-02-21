<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>"; 
echo "Variable d: {$d} <br>"; 
echo "Variable e: {$e} <br>"; 

var_dump($e);
$nilaimatematika = 5.1;
$nilaiIPA = 6.7;
$nilaibahasaindonesia = 9.3;

$rataRata = ($nilaimatematika + $nilaiIPA + $nilaibahasaindonesia) /3;

echo "Matematika: {$nilaimatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indoensia: {$nilaibahasaindonesia} <br>";
echo "Rata-Rata: {$rataRata} <br>";

var_dump($rataRata);

$apakahSiswaLulus = true;
$apakahSiswaSudahUjuan = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjuan);

$namaDepan = "Ibnu";
$namaBelakang = 'Jakarta';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Ledis Fabri"];

echo $listMahasiswa[0];
?>