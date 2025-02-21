<?php
$nilaiNumerik = 92;

$jaraksaatIni = 0;
$jaraktarget = 50;
$peningkatanHarian = 30;
$hari = 0;

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

$nilaiSiswa = [65, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}


echo "Total skor ujian adalah: $totalSkor<br>";


for ($i = 1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}


echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah buah<br>";


while ($jaraksaatIni < $jaraktarget) {
    $jaraksaatIni += $peningkatanHarian;
    $hari++;
}


echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jaraktarget kilometer.<br>";


if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B<br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C<br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D<br>";
}
?>
