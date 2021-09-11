<?php

    $nilai = 80;
    if ($nilai >=60) {
        echo "Nilai anda $nilai, Anda Lulus";
    } else {
        echo "Nilai anda $nilai, Anda GAGAL";
    }
    echo "<br><hr>";

    $user = " ";
    if (!isset($user)) {
        echo "Variable tidak ada/bwlum terbentuk";
    } else {
        echo "Variable ada";
    }
    echo "<br><hr>";

    $user = "admin";
    $pass = 123;
    if ($user == "admin" && $pass == "123") {
        echo "Login Berhasil";
    } else {
        echo "Login Gagal";
    }


?>