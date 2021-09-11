<?php

if (isset($_POST['proses'])) {
    $saran = $_POST['saran'];
    echo "Kritik/Saran Anda Adalah : <br>";
     echo "<b><font color='red'>$saran</font></b>";
}
?>