<?php

    echo "<h1>Gaji Karyawan</h1>";
    if (isset($_POST['jam'])) {
        $jam = $_POST ['jam'];
        echo "Jam kerja anda : $jam Jam<br>";
        $golongan=$_POST['golongan'];
        echo "Golongan kerja anda : $golongan<br>";
        $a = 4000;
        $b = 5000;
        $c = 6000;
        $d = 7000;
    }

    switch ($golongan) {
        case 'a':
            $gaji=$jam * $a;
            echo "Gaji anda adalah Rp. $gaji";
            break;
        case 'b':
            $gaji=$jam * $b;
            echo "Gaji anda adalah Rp. $gaji";
            break;
        case 'c':
            $gaji=$jam * $c;
            echo "Gaji anda adalah Rp. $gaji";
            break;
        case 'd':
            $gaji=$jam * $d;
            echo "Gaji anda adalah Rp. $gaji";
            break;
    }
?>