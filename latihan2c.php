<html>
<head>
    <title>Latihan C</title>
    <style>
        .box {
            border: 1px solid black;
            padding: 10px;
            display: inline-block;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    // Jumlah baris yang ingin ditampilkan (dapat diubah)
    $jumlahBaris = 5;

    // Looping untuk membuat kotak dan menampilkan huruf
    for ($i = 0; $i < $jumlahBaris; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            // Menentukan kelas berdasarkan indeks j (ganjil/genap)
            $kelas = ($j % 2 == 0) ? 'genap' : 'ganjil';

            // Menampilkan kotak dengan kelas yang sesuai
            echo "<div class='box $kelas'>";
            echo $j + 1; // Menampilkan angka mulai dari 1
            echo "</div>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>