<?php
  
    $mahasiswa = [
      ['nama' => 'Mahmud','Udin','Encep','Entis'],
      ['domisili' => 'Surabaya','Tasik','Majalaya','Ciamis']

    ];

    $data = json_encode($mahasiswa);
    foreach ($data as $a) {
        echo "Nama : " .$a->nama ."<br>";
        echo "Domisili : " .$a->domisili;
        echo "<hr>";
    }
  

?>