<?php

$jm = 0;
for  ($i = 1; $i <= 6; $i++){
    $jm += 1;
    for ($a = 0; $a < 5; $a++){
        echo $a + $jm. " ";
    }
    echo "<br>";
}
    echo "<hr>";


    $jum = 0;
    for  ($i = 1; $i <= 10; $i++){
        $jum += 2;
        for ($a = 1; $a <= $i; $a++){
            echo $a + $jum. " ";
        }
        echo "<br>";
    }
?>