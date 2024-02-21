<?php
// buat function
function luas_segitiga($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    return "Hasil perhitungan luas: $luas";
}

// panggil function
echo luas_segitiga(5,8);