<?php

class laptop
{
    public $pemilik;

    public function hidupkanLaptop()
    {
        return "Hidupkan Laptop";
    }
}

$laptopAnto = new laptop();
$laptopAnto->pemilik = "Anto";

echo $laptopAnto->pemilik;
echo $laptopAnto->hidupkanLaptop();
