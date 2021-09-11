<?php

if (isset($_POST['save'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $luas = 0.5 * $alas * $tinggi;
    $keliling = $alas * $alas * $alas;
    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi";
    echo "<br>Keliling : $keliling";
    echo "<br>Alas : $luas";
}
?>