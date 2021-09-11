<?php


class komputer{
    public $nama = "Asep";
    public $merk = "Lenovo";
    public $ukuran = "5inc";

    public function menyala()
    {
        return "Nyalakan Komputer";
    }

    public function matikan()
    {
        return " Matikan Komputer";
    }
}

$komputer1 = new komputer();
echo "Nama Pemilik : " . $komputer1->nama ."<br>";
echo "Merek Komputer : " . $komputer1->merk ."<hr>";

$komputer2 = new komputer();
echo "Nama Pemilik : " . $komputer1->nama ."<br>";
echo " Komputer : " . $komputer1->menyala() ."<hr>";