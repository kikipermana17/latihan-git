<?php
    $member = "tidak";
    $totalBelanja = 50000;
    $disc = 0;
    $totalHarga = 0;

    if ($member == "ya") {
        $disc = 0.1 * $totalBelanja;
    } else if ($totalBelanja >= 100000) {
        $disc = 0.05 * $totalBelanja;
    }else {
        if ($totalBelanja >= 100000){
            $disc = 0.025 * $totalBelanja;
        }
    }
    $totalHarga = $totalBelanja - $disc;
    echo "Kartu member : $member<br>";
    echo "Total belanja : $totalBelanja<br>";
    echo "Diskon : $disc<br>";
    echo "Total yang harus dibayar : $totalHarga";

?>