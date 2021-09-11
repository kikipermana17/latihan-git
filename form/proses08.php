<?php

if (isset($_POST['pilih'])) {
    $film = $_POST['kartun'];
    echo "Film Kartun FAvorite Anda Adalah : 
    <b><font color='red'>$film</font></b>";
}
?>