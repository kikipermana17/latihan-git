<?php

class Ucapan
{
    public function __construct()
    {
        echo "Selamat Pagi <br>";
    }
    public function siang()
    {
        return "Selamat Siang";
    }
    public function sore()
    {
        return "Selamat Sore";
    }

    
}

$selamat = new Ucapan();
echo $selamat->siang() ."<br>";
echo $selamat->sore();
