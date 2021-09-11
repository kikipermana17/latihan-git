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
        echo "Nama Pemilik : " . $komputer2->nama ."<br>";
        echo " Komputer : " . $komputer2->menyala() ."<hr>";

        $komputer3 = new komputer();
        $komputer3->merk = "Philips";
        echo "Merk Komputer : " . $komputer3->merk ."<br>";
        echo " Komputer : " . $komputer3->matikan() ."<hr>";

        $komputer4 = new komputer();
        $komputer4->nama = "Agus";
        echo "Nama Komputer : " . $komputer4->nama ."<br>";
        echo "Ukuran Komputer : " . $komputer4->ukuran ."<hr>";

        $komputer5 = new komputer();
        $komputer5->ukuran = "7inc";
        echo "Merek Komputer : " . $komputer5->merk ."<br>";
        echo "Ukuran Komputer : " . $komputer5->ukuran ."<hr>";
?>