<?php

if (isset($_POST['save'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $luas = $panjang * $lebar;
    $keliling = 2* ($panjang + $lebar);
    echo "Panjang : $panjang<br>";
    echo "Lebar : $lebar";
    echo "<br>Keliling : $keliling";
    echo "<br>Luas : $luas";
}
?>