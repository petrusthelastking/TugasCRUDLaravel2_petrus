<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat (array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);

?>

function tampilAngka (int $jumlah, int $index = 1){
    echo "Perulangan ke-{$index} <br>";
    if ($index < $jumlah) {
        tampilAngka($jumlah, $index + 1);
    }
}

tampilAngka(20);
?>

for ($i=1; $i <=25; $i++){
    echo "Perulangan ke-{$i} <br>";
}

?>
function tampilkanHaloDunia(){
    echo "Hallo dunia! <br/>";

    tampilkanHaloDunia();
}

tampilkanHaloDunia();
?>