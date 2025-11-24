<?php

$nama = readline("Masukkan nama barang: ");
$harga = (float)readline("Masukkan harga barang: ");
$jumlah = (int)readline("Masukkan jumlah barang: ");

$total = $harga * $jumlah;

$minimal_diskon = 40800;
$diskon_persen = 8;

if ($total > $minimal_diskon) {
    $diskon = $total * ($diskon_persen / 100);
} else {
    $diskon = 0;
}

$total_bayar = $total - $diskon;

echo "\n==== Struk Pembelian ====\n";
echo "Nama Barang   : " . $nama . "\n";
echo "Harga Satuan  : Rp " . intval($harga) . "\n";
echo "Jumlah        : " . $jumlah . "\n";
echo "Total         : Rp " . intval($total) . "\n";
echo "Minimal Diskon: Rp " . $minimal_diskon . "\n";
echo "Diskon (%)    : " . $diskon_persen . "%\n";
echo "Diskon        : Rp " . intval($diskon) . "\n";
echo "Total Bayar   : Rp " . intval($total_bayar) . "\n";
echo "=========================\n";
