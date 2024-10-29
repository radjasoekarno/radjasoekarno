<?php
// Data tabel barang
$items = [
    ["id" => 1, "product" => "Minyak Telon", "stock" => 20, "price" => 31790],

    ["id" => 2, "product" => "Diapers", "stock" => 25, "price" => 51880],

    ["id" => 3, "product" => "Baby Oil", "stock" => 15, "price" => 16780],
    
    ["id" => 4, "product" => "Shampo Baby", "stock" => 20, "price" => 20670],
    ["id" => 5, "product" => "Bedak", "stock" => 15, "price" => 15860],
    ["id" => 6, "product" => "Baju Bayi", "stock" => 20, "price" => 35500],
    ["id" => 7, "product" => "Jumper", "stock" => 25, "price" => 50999]
];

// Menambahkan kolom "Jumlah" untuk setiap item
$totalJumlah = 0;
foreach ($items as &$item) {
    $item['total'] = $item['stock'] * $item['price'];
    $totalJumlah += $item['total'];
}

// Fungsi untuk menghitung diskon
function applyDiscount($total) {
    if ($total >= 300000) {
        $discount = 0.20; // 20%
    } elseif ($total >= 200000) {
        $discount = 0.10; // 10%
    } else {
        $discount = 0; // Tidak ada diskon
    }
    return $total - ($total * $discount);
}

// Total setelah diskon
$totalAfterDiscount = applyDiscount($totalJumlah);

// Menampilkan hasil dalam tabel HTML
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='0'>";
echo "<tr><th>ID</th><th>Product</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($items as $item) {
    echo "<tr>
        <td>{$item['id']}</td>
        <td>{$item['product']}</td>
        <td>{$item['stock']}</td>
        <td>Rp " . number_format($item['price'], 0, ',', '.') . "</td>
        <td>Rp " . number_format($item['total'], 0, ',', '.') . "</td>
    </tr>";
}
echo "</table>";

echo "<p>Total Jumlah: Rp " . number_format($totalJumlah, 0, ',', '.') . "</p>";
echo "<p>Total setelah diskon: Rp " . number_format($totalAfterDiscount, 0, ',', '.') . "</p>";
?>
