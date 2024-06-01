<?php
// Set header untuk menetapkan Content-Type sebagai text/css
header("Content-Type: text/css");

// Lokasi file CSS dan JavaScript yang ingin dimuat
$cssFile = __DIR__ . '/../resources/css/tailwind.output.css';
$alpin = __DIR__ . '/../resources/js/init-alpine.js';

// Inisialisasi variabel untuk menyimpan isi file
$combinedContent = '';

// Cek apakah file CSS ada
if (file_exists($cssFile)) {
    // Baca isi file CSS dan tambahkan ke variabel $combinedContent
    $combinedContent .= file_get_contents($cssFile);
} else {
    // Jika file tidak ditemukan, tambahkan pesan error ke variabel $combinedContent
    $combinedContent .= "/* File CSS not found */";
}

// Cek apakah file JavaScript ada
if (file_exists($alpin)) {
    // Baca isi file JavaScript dan tambahkan ke variabel $combinedContent
    $combinedContent .= file_get_contents($alpin);
} else {
    // Jika file tidak ditemukan, tambahkan pesan error ke variabel $combinedContent
    $combinedContent .= "/* File JavaScript not found */";
}

// Tampilkan isi gabungan dari kedua file
echo $combinedContent;
?>
