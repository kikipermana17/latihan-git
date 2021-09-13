<?php

class Ucapan
{
    public function siang()
    {
        return "Selamat Siang";
    }
    public function sore()
    {
        return "Selamat Sore";
    }

    public function _construct()
    {
        echo "Selamat Pagi <br>";
    }
}

$selamat = new Ucapan();
echo $selamat->siang() ."<br>";
echo $selamat->sore();