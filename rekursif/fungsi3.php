<?php

    function tampilkanAngka(int $jumlah, int $indeks = 1){
        echo "<strong style='color : green'>
        Sebelum Memanggil Diri Sendiri[{$indeks}]</strong><br>";

        if ($indeks < $jumlah){
            tampilkanAngka($jumlah, $indeks + 1);
        }else{
            echo "<strong style='color : red'>
            Proses Terakhir.</strong><br>";
        }

        echo "<strong style='color : blue'>
        Sebelum Memanggil Diri Sendiri[{$indeks}]</strong><br>";
    }

    tampilkanAngka(5);