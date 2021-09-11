<?php

if (isset($_POST['save'])) {
    $jari = $_POST['jari'];
    $luas = 3.14 * $jari * $jari;
    $keliling = 2 * 3.14 * $jari;
    echo "Jari Jari : $jari";
    echo "<br>Keliling : $keliling";
    echo "<br>Alas : $luas";
}
?>