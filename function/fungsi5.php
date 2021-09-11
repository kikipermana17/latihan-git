<?php
//Membuat fungsi
function hitungUmur($thn_lahir, $thn_Sekarang){
    $umur = $thn_Sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam .", ";
    echo "Perkenalkan Nama Saya ". $nama . "<br>";
    //Memanggil Fungsi Lain
    echo "Saya Berusia ". hitungUmur(2004, 2021) .
    "Tahun.</br>";
    echo "Senang Berkenalan Dengan Anda<br/>";

}
echo perkenalan("Kiki Permana");
?>