<?php

    $tahun = date('Y');
    $kabisat = $tahun % 4 == 0;
    $jawab = $kabisat ? "iya": "bukan tahun kabisat";
    echo $tahun."<br>";
    echo "tahun kabisat : ".$jawab;
    echo "<br><hr>";


    $user = 85;
    $pass = 80;

    echo "Nilai akademik : <b>$user</b>";
    echo "<br>Nilai atletik : <b>$pass</b>";
    $kelulusan = ($user >= 85 && $pass >= 83)
        ? "lulus " : "Tidak Lulus";
    echo "<br> dinyatakan : <b>$kelulusan</b>";

?>