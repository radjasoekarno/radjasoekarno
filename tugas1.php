<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "Angka $i adalah bilangan genap";
    } else {
        echo "Angka $i adalah bilangan ganjil";
    }

    if (isPrime($i)) {
        echo " sekaligus bilangan prima";
    }
    echo "<br>";
}
?>