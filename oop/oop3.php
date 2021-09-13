<?php


class kucing{

    public $warna;

    public function __construct($warna)
    {
        $this->warna = $warna;
    }

    public function bersuara()
    {
        return "Meowng ... meowng ... meowng";
    }

    public function berburu()
    {
        return " Berburu Ikan";
    }
}

$kucing1 = new kucing("Hitam");
echo "Warna kucing1 : " . $kucing1->warna ."<br>";

$kucing2 = new kucing("Oren");
echo "Warna kucing1 : " . $kucing2->warna ."<br>";

