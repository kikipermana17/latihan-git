<?php

$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// Menambahkan isi indeks pada indeks ke 3

$hobi[1] .= "Coding";

// Menghapus isi array
unset($hobi[1]);

//Menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

//Cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}

?>
   