<?php
// Membuat array awal dengan 5 elemen string
$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

// Menambahkan 3 elemen baru ke dalam array
array_push($negara_asean, "Laos", "Filipina", "Myanmar");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN</title>
</head>
<body>

<h3>Daftar Negara ASEAN awal :</h3>
<ul>
    <li>Indonesia</li>
    <li>Singapura</li>
    <li>Malaysia</li>
    <li>Brunei</li>
    <li>Thailand</li>
</ul>

<h3>Daftar Negara ASEAN baru :</h3>
<ul>
    <?php
    // Menampilkan daftar negara ASEAN baru
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    ?>
</ul>

</body>
</html>