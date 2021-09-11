<?php

    $dataMhs = '[
        {"nama": "Mahmud","domisili": "Bandung"},
        {"nama": "Udin","domisili": "Garut"},
        {"nama": "Ucup","domisili": "Tasik"},
        {"nama": "Amid","domisili": "Majalaya"}
    ]';

    $data = json_decode($dataMhs);
    foreach ($data as $mhs) {
        echo "Nama : " .$mhs->nama ."<br>";
        echo "Domisili : " .$mhs->domisili;
        echo "<hr>";
    }
?>