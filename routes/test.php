<?php
// Membaca jenis bensin yang dibeli (1 untuk pertamax, 2 untuk premium)
$jenis_bensin = intval(readline());

// Membaca jumlah liter bensin yang dibeli
$jumlah_liter = floatval(readline());

// Harga bensin per liter
$harga_pertamax = 9000;
$harga_premium = 7600;

// Menghitung total uang yang harus dibayar
if ($jenis_bensin == 1) {
    $total_pembayaran = $harga_pertamax * $jumlah_liter;
} else {
    $total_pembayaran = $harga_premium * $jumlah_liter;
}

// Menampilkan hasil dengan dua angka dibelakang koma
echo number_format($total_pembayaran, 2, '.', '').PHP_EOL;
?>