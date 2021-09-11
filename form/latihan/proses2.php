<?php

if (isset($_POST['save'])) {
    $pilih = $_POST['pilih'];
    if ($pilih == 1) {
        header ("location:segitiga.php");
    }elseif ($pilih == 2) {
        header ("location:lingkaran.php");
    }elseif ($pilih == 3) {
        header ("location:persegi.php");
    }elseif ($pilih == 4) {
        header ("location:persegipanjang.php");
    }
}
?>