<?php

function enkripsi($input) {
    $output = '';

    // Loop melalui setiap karakter input
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        // Jika karakter merupakan huruf kapital, geser satu langkah ke depan dalam alfabet
        if (ctype_upper($char)) {
            $char = chr(((ord($char) - 65 + 1) % 26) + 65);
        }

        $output .= $char; // Tambahkan karakter ke output
    }

    return $output;
}

// Contoh penggunaan fungsi
$input = "DFHKNQ";
$output = enkripsi($input);
echo $output; // Output: "EGILOP"

?>