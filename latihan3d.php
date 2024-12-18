<?php
function faktorial($angka) {
    // Kasus dasar: faktorial 0 adalah 1
    if ($angka == 0) {
        return 1;
    } else {
        // Rekursif: faktorial(n) = n * faktorial(n-1)
        return $angka * faktorial($angka - 1);
    }
}

// Contoh penggunaan
$bilangan = 5;
$hasilFaktorial = faktorial($bilangan);
echo "Faktorial dari $bilangan = $hasilFaktorial";
?>