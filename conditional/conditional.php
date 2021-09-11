<?php

$nilai = 60;
    if ($nilai >=90) {
        $grade = 'A';
    } else if ($nilai >=80) {
        $grade = 'B';
    } else if ($nilai >=70) {
        $grade = 'C';
    } else if ($nilai >=60) {
        $grade = 'D';
    } else if ($nilai <=60) {
        $grade = 'E';
    }
    switch ($grade) {
        case 'A' : $komen = "Pertahankan"; break;
        case 'B' : $komen = "Harus lebih baik lagi"; break;
        case 'C' : $komen = "Perbanyak belajar"; break;
        case 'D' : $komen = "Jangan keseringan main"; break;
        case 'E' : $komen = "Kebanyakan bolos"; break;
        default : $komen = "format tidak sesuai";
    }
    echo "Nilai : <b>$nilai</b><br>";
    echo "Grade : <b>$grade</b><br>";
    echo "Keterangan : <b>$komen</b>";
?>