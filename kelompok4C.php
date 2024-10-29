<?php
// Array multidimensi untuk menyimpan data produk
$produk = [
    ["id" => 1, "nama" => "Minyak Telon", "stok" => 20, "harga" => 31790],
    ["id" => 2, "nama" => "Diapers", "stok" => 25, "harga" => 51880],
    ["id" => 3, "nama" => "Baby Oil", "stok" => 15, "harga" => 16780],
    ["id" => 4, "nama" => "Shampoo Baby", "stok" => 20, "harga" => 20760],
    ["id" => 5, "nama" => "Bedak", "stok" => 25, "harga" => 15890],
    ["id" => 6, "nama" => "Baju Bayi", "stok" => 20, "harga" => 35500]
];

// Menghitung total harga setiap produk
$totalJumlah = 0;

// Menampilkan tabel data produk
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>ID</th><th>Product</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

foreach ($produk as $item) {
    $jumlah = $item["stok"] * $item["harga"];
    $totalJumlah += $jumlah;
    echo "<tr>";
    echo "<td>{$item["id"]}</td>";
    echo "<td>{$item["nama"]}</td>";
    echo "<td>{$item["stok"]}</td>";
    echo "<td>Rp " . number_format($item["harga"], 0, ',', '.') . "</td>";
    echo "<td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>";
    echo "</tr>";
} 

// Menentukan diskon jika total lebih dari Rp 4.000.000
$diskon = 0;
if ($totalJumlah > 4000000) {
    $diskon = 0.2; // Diskon 20%
}
$totalDiskon = $totalJumlah * $diskon;
$totalSetelahDiskon = $totalJumlah - $totalDiskon;

// Menampilkan total jumlah dan total setelah diskon
echo "<tr><td colspan='4'><strong>Total Jumlah</strong></td><td><strong>Rp " . number_format($totalJumlah, 0, ',', '.') . "</strong></td></tr>";
echo "<tr><td colspan='4'><strong>Total setelah diskon</strong></td><td><strong>Rp " . number_format($totalSetelahDiskon, 0, ',', '.') . "</strong></td></tr>";

echo "</table>";
?>
