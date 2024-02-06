<?php

function generateNgrams($string, $n) {
    $words = explode(" ", $string);
    $ngrams = [];
    
    // Menghasilkan unigram, bigram, atau trigram tergantung pada nilai $n
    for ($i = 0; $i < count($words) - $n + 1; $i++) {
        $ngram = implode(" ", array_slice($words, $i, $n));
        $ngrams[] = $ngram;
    }
    
    return $ngrams;
}

// Contoh penggunaan fungsi
$input = "Jakarta adalah ibukota negara Republik Indonesia";
$unigram = generateNgrams($input, 1);
$bigram = generateNgrams($input, 2);
$trigram = generateNgrams($input, 3);

// Menampilkan output
echo "Unigram: " . implode(", ", $unigram) . "\n";
echo "Bigram: " . implode(", ", $bigram) . "\n";
echo "Trigram: " . implode(", ", $trigram) . "\n";

?>