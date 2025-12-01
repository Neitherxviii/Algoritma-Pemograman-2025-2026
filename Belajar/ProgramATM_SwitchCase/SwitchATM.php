<?php

while (true) {
    $nama = readline("Masukkan nama anda: ");

    $konfirmasi = "";
    while ($konfirmasi != "true" && $konfirmasi != "false") {
        $konfirmasi = strtolower(readline("Apakah nama sudah benar? (true/false): "));
    }

    if ($konfirmasi == "true") break;
    echo "Silakan masukkan nama kembali.\n";
}

$nimBenar = false;
while (!$nimBenar) {
    $nim = readline("Masukkan NIM: ");

    if ($nim !== "" && ctype_digit($nim)) {
        $nimBenar = true;
    } else {
        echo "NIM harus angka!\n";
    }
}

$saldo = intval($nim);

echo "\nNama: $nama\n";
echo "Saldo Awal: Rp " . number_format($saldo, 0, ',', '.') . "\n\n";

while (true) {
    echo "===== MENU ATM =====\n";
    echo "1. Cek Saldo\n";
    echo "2. Tarik Tunai\n";
    echo "3. Setor Tunai\n";
    echo "4. Transfer\n";
    echo "5. Keluar\n";

    $pilihan = readline("Pilih menu (1-5): ");
    echo "\n";

    switch ($pilihan) {
        case "1":
            echo "Saldo: Rp " . number_format($saldo, 0, ',', '.') . "\n\n";
            break;

        case "2":
            $tarik = readline("Masukkan jumlah tarik tunai: ");
            if (!ctype_digit($tarik) || $tarik <= 0) {
                echo "Input tidak valid!\n\n";
            } elseif ($tarik > $saldo) {
                echo "Saldo tidak cukup!\n\n";
            } else {
                $saldo -= $tarik;
                echo "Saldo baru: Rp " . number_format($saldo, 0, ',', '.') . "\n\n";
            }
            break;

        case "3":
            $setor = readline("Masukkan jumlah setor tunai: ");
            if (ctype_digit($setor) && $setor > 0) {
                $saldo += $setor;
                echo "Saldo baru: Rp " . number_format($saldo, 0, ',', '.') . "\n\n";
            } else {
                echo "Input tidak valid!\n\n";
            }
            break;

        case "4":
            $transfer = readline("Masukkan nominal transfer: ");
            if (!ctype_digit($transfer) || $transfer <= 0) {
                echo "Input tidak valid!\n\n";
            } elseif ($transfer > $saldo) {
                echo "Saldo tidak cukup!\n\n";
            } else {
                $rek = readline("Masukkan nomor rekening tujuan: ");
                $saldo -= $transfer;
                echo "Transfer berhasil ke $rek\n";
                echo "Saldo baru: Rp " . number_format($saldo, 0, ',', '.') . "\n\n";
            }
            break;

        case "5":
            echo "Terima kasih!\n";
            exit;

        default:
            echo "Pilihan tidak valid!\n\n";
    }
}
?>
