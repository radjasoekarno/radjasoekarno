<?php
function ganti_style($tulisan, $kelas) {
    // Tentukan style yang diinginkan berdasarkan kelas
    switch ($kelas) {
        case 'ganti-style':
            $style = "font-size: 28px; font-family: Arial; color: #1A0547; font-style: italic; font-weight: bold;";
            break;
        // Tambahkan case lain untuk kelas-kelas yang berbeda jika diperlukan
        default:
            $style = "";
    }

    // Kembalikan tulisan dengan tag span dan atribut style
    return "<span style='$style'>$tulisan</span>";
}

// Contoh penggunaan
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>