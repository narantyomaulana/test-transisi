<?php

// String berisi nilai-nilai ujian
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

// Mengubah string menjadi array dengan nilai-nilai
$nilai_array = explode(" ", $nilai);

// Mengubah nilai-nilai dari string menjadi angka bulat (integer)
foreach ($nilai_array as &$nilai_individu) {
    $nilai_individu = intval($nilai_individu);
}

// Menghitung rata-rata dari nilai-nilai
$rata_rata = array_sum($nilai_array) / count($nilai_array);
echo "Nilai rata-rata: " . $rata_rata . "\n";

// Mengurutkan array dari yang tertinggi ke terendah untuk mendapatkan nilai-nilai tertinggi
rsort($nilai_array);
$nilai_tertinggi = array_slice($nilai_array, 0, 7);
echo "7 Nilai Tertinggi: " . implode(", ", $nilai_tertinggi) . "\n";

// Mengurutkan array dari yang terendah ke tertinggi untuk mendapatkan nilai-nilai terendah
sort($nilai_array);
$nilai_terendah = array_slice($nilai_array, 0, 7);
echo "7 Nilai Terendah: " . implode(", ", $nilai_terendah) . "\n";

?>