<?php

function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2.0 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4.0 / 3.0) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $luas_alas = luasLingkaran($jari); 
    $volume = $luas_alas * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $luas_alas = luasLingkaran($jari);
    $volume = (1.0 / 3.0) * $luas_alas * $tinggi;
    return $volume;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}";
