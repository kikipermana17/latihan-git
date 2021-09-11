<?php

$json = '{
    "nama": "Nurul Huda",
    "domisili": "Surabaya",
    "usia": 23,
    "wni": true,
    "hobi": [
      "futsal", "Main Game", "Gundu"
    ]
  }';
  
  $mahasiswa = json_decode($json);
  
  echo "Nama: {$mahasiswa->nama} <br>";
  echo "Domisili: {$mahasiswa->domisili} <br>";
  echo "Usia: {$mahasiswa->usia} <br>";
  echo "Hobi: " . implode(", ", $mahasiswa->hobi);
  
  echo "<hr>";
  
  $mahasiswa = [
    'nama' => 'Nurul Huda',
    'domisili' => 'Surabaya'
  ];
  
  echo json_encode($mahasiswa);

?>