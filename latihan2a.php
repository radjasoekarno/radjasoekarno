<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1k</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>

        </tr>
        <?php

        // Tentukan jumlah baris dan kolom
        $Baris = 15;
        $Kolom = 5;

        // Looping untuk membuat baris dan kolom
        for ($i = 1; $i <= $Baris; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $Kolom; $j++) {
                echo "<td>Baris $i, Kolom $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>