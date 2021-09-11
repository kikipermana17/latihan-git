<?php

    $books = [
        "Panduan belajar php untuk pemula",
        "Membangun aplikasi web dengan php",
        "Tutorial php dan mysql",
        "Membuat chat bot dengan php",
    ];

    echo "<h5>Judul buku PHP :</5>";
    echo "<ul>";
    foreach ($books as $buku) {
        echo "<li>$buku</li>";
    }
    echo "</ul>";


?>