<?php

if (isset($_POST['input'])) {
    $bil1 = $_POST['angka1'];
    $bil2 = $_POST['angka2']; 
    $jum = $bil1 + $bil2;
    echo "Bilangan 1 + Bilangan 2 : $jum<br>";
    $jum = $bil1 - $bil2;
    echo "Bilangan 1 - Bilangan 2 : $jum<br>";
    $jum = $bil1 * $bil2;
    echo "Bilangan 1 * Bilangan 2 : $jum<br>";
    $jum = $bil1 / $bil2;
    echo "Bilangan 1 / Bilangan 2 : $jum<br>";
}
?>