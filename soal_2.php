<?php

function hitungHurufKecil($string) {
    // Menghitung jumlah huruf kecil dalam string
    $jumlah_huruf_kecil = preg_match_all('/[a-z]/', $string, $matches);
    
    // Mengembalikan hasil
    return "$string mengandung $jumlah_huruf_kecil buah huruf kecil.";
}

// Contoh penggunaan fungsi
$input = "TranSISI";
$output = hitungHurufKecil($input);
echo $output; // Output: "TranSISI mengandung 3 buah huruf kecil."

?>