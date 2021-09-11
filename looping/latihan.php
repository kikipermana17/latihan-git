<?php

    $i=2;
    echo "1. ";
    do{
        echo "$i ";
        $i *= 2;
    }
    while ($i <= 128);
    echo "<br><br>";
    

    $i=3125;
    echo "2. ";
    do{
        echo "$i ";
        $i /= 5;
    }
    while ($i >= 5);
    echo "<br><br>";
    echo "<hr>";

    $books= [
        18, 45, 29, 61, 47, 34,
    ];
    foreach ($books as $buku) {
        $sisabagi = $buku % 3;
        echo "$buku % 3 = $sisabagi<br>";
    }
    echo "<hr>";

    $jum = 1;
    for ($a=1; $a <= 5; $a++){
        for ($j=1; $j <= $a; $j++){
            echo "*";
        }
        echo "</br>";
    }
    echo "<hr>";

    for ($i=0; $i <5; $i++) {
        for ($a=5; $a > $i; $a--){
            echo "_";
        }
        for ($b=0; $b <= $i; $b++) {
            echo "*";
        }
        echo "<br>";
    }

?>