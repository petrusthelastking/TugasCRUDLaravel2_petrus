<?php
$pattern = '/[a-z]/';  
$text = 'this is a Sample text.';  
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil";
}

$pattern = '/[0-9]+/';  
$text = 'There are 123 apples.';  
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada huruf kecil";
}

$pattern = '/apple/';
$replacement = 'banana';
$teks = 'I like apple pie.';
$new.$text = preg_replace($pattern, $replacement, $text);
echo $new_text;

$pattern = '/go.d/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "cocokkan: " . $matches[0];
}else{
    echo "tidak ada yang cocok!";
}
?>

