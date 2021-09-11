<?php


class kucing{
    public $warna = "coklat";
    public $jumlahkaki = 4;
    public $jenisBulu = "Panjang";
    public $makananFav = "Ikan Asin";

    public function bersuara()
    {
        return "Meowng ... meowng ... meowng";
    }

    public function berburu()
    {
        return " Berburu Ikan";
    }
}

$kucing1 = new kucing();
echo "Warna kucing : " . $kucing1->warna ."<br>";
echo "sifat kucing : " . $kucing1->bersuara() ."<hr>";

$kucing2 = new kucing();
$kucing2->warna = "oren";
echo "Warna kucing : " . $kucing1->warna ."<br>";
echo "sifat kucing : " . $kucing1->berburu() ."<hr>";