<?php
$nim = readline("Masukkan NIM: ");

$digit = [];
for ($i = 0; $i < strlen($nim); $i++) {
    $digit[] = intval($nim[$i]);
}

$total = 0;
foreach ($digit as $d) {
    $total += $d;
}

$max = $digit[0];
foreach ($digit as $d) {
    if ($d > $max) $max = $d;
}

$min = $digit[0];
foreach ($digit as $d) {
    if ($d < $min) $min = $d;
}

$rata = $total / count($digit);

$rev = [];
for ($i = count($digit) - 1; $i >= 0; $i--) {
    $rev[] = $digit[$i];
}

echo "digit     [" . implode(", ", $digit) . "]\n";
echo "total     $total\n";
echo "max       $max\n";
echo "min       $min\n";
echo "rata-rata $rata\n";
echo "reverse   [" . implode(", ", $rev) . "]\n";
