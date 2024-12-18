<?php
// Contoh variabel
$var1 = "Hello, World!";
$var2 = "";
$var3 = null;
$var4 = 0;

// Penjelasan isset()
echo "<h3>Hasil isset()</h3>";
echo "Apakah \$var1 diatur? " . (isset($var1) ? "Ya" : "Tidak") . "<br>";
echo "Apakah \$var2 diatur? " . (isset($var2) ? "Ya" : "Tidak") . "<br>";
echo "Apakah \$var3 diatur? " . (isset($var3) ? "Ya" : "Tidak") . "<br>";

// Penjelasan empty()
echo "<h3>Hasil empty()</h3>";
echo "Apakah \$var1 kosong? " . (empty($var1) ? "Ya" : "Tidak") . "<br>";
echo "Apakah \$var2 kosong? " . (empty($var2) ? "Ya" : "Tidak") . "<br>";
echo "Apakah \$var3 kosong? " . (empty($var3) ? "Ya" : "Tidak") . "<br>";
echo "Apakah \$var4 kosong? " . (empty($var4) ? "Ya" : "Tidak") . "<br>";
?>