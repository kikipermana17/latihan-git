<?php

    $day = date ("D");
    switch ($day) {
        case 'sun' : $hari = "Minggu"; break;
        case 'mon' : $hari = "Senin"; break;
        case 'tue' : $hari = "Selasa"; break;
        case 'wed' : $hari = "Rabu"; break;
        case 'thu' : $hari = "Kamis"; break;
        case 'fri' : $hari = "Jumat"; break;
        case 'sat' : $hari = "Sabtu"; break;
        default : $hari = "kiamat";
    }
    echo "Hari ini hari <b>$hari</b>";
    echo "<br><hr>";


    echo "<br><hr>";

    $i = 1;
    while ($i <= 10) {
        echo  $i++;
    }
    echo "<br><hr>";

    $i = 1;
    while ($i <= 10) {
        echo  "$i";
        $i++;
    
    endwhile;
    }
?>