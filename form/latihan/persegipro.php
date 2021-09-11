<?php

if (isset($_POST['save'])) {
    $sisi = $_POST['sisi'];
    $luas = $sisi * $sisi;
    $keliling = 4 * $sisi;
    echo "Jari jari : $sisi";
    echo "<br>Keliling : $keliling";
    echo "<br>Luas : $luas";
}
?>