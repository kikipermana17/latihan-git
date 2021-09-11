<?php

    function tampilkanAngka(int $jumlah, int $indeks = 1){
       
     if ($indeks < $jumlah) {
            tampilkanAngka($jumlah, $indeks + 1);
        }
        echo "Perulangan ke-{$indeks} <br>";
    }

    tampilkanAngka(20);
?>