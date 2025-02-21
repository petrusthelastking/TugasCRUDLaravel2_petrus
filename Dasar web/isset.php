<?php 
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
}else {
    echo "Anda belum dewasa atau variable 'umur' tidak ditemukan";
}

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])){
    echo "nama: " . $data["nama"];
}else{
    echo "Variable1 'nama' Tidak ditemukan dalam Array";
}
?>
