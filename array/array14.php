<?php
// membuat array 2 dimensi yang berisi array assosiatif
$artikel = [
    [
        "judul" => "Belajar PHP Dan My SQL Untuk Pemula",
        "penulis" => "Petanikode"
    ],
    [
        "judul" => "Tutorial PHP Dan My SQL Untuk Pemula",
        "penulis" => "Petanikode"
    ],
    [
        "judul" => "Membuat Aplikasi PHP Dan My SQL Untuk Pemula",
        "penulis" => "Petanikode"
    ]

    ];


    //menampilkan array
    foreach ($artikel as $post){
        echo "<h2>".$post["judul"]."</h2>";
        echo "<p>".$post["penulis"]."</p>";
        echo "<hr";
    }
?>