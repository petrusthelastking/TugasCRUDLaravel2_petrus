<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamuaalaikum"){
    echo $salam.",";
    echo "perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya berusia ". hitungUmur(1988, 2023)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Petrus");
?>