<?php

    $uangUcup = 200000;
    $air = 15000;
    $makanSosis = 25000;
    $sedekah = 10;
    $nemuUang = 50;

    echo "Uang Ucup = $uangUcup<br>";
    echo "<hr>";
    
    echo "Jajan minum = $air<br>";
    $sisa = $uangUcup -= $air;
    echo "Sisa uang ucup jajan minum = $sisa";
    echo "<hr>";

    echo "Jajan sosis bakar = $makanSosis<br>";
    $sisaJajan = $sisa -= $makanSosis;
    echo "Sisa uang ucup jajan minum = $sisaJajan";
    echo "<hr>";

    $sisaSedekah = $sedekah / 100 * $sisaJajan;
    echo "sedakah ke musafir ".$sedekah."% dari $sisaJajan
    yaitu sebesar $sisaSedekah<br>";
    $sisaUang = $sisaJajan - $sisaSedekah;
    echo "Sisa uang ucup = $sisaUang";
    echo "<hr>";

    $nemu = $nemuUang / 100 * $sisaUang;
    echo "Nemu uang dijalan sebesar ".$nemuUang."% dari sisa uang ucup
    $sisaUang yaitu sebesar $nemu<br>";
    $total = $nemu + $sisaUang;
    echo "Sisa uang ucup sekarang = $nemu + $sisaUang";
    echo "<hr>";

    echo "Total uang ucup adalah Rp.$total";


?>