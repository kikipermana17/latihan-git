<?php

class laptop
{
    public $pemilik;

    protected function hidupkanLaptop()
    {
        return "Hidupkan Laptop";
    }

    public function paksaHidupkanLaptop()
    {
        return $this->hidupkanLaptop();
    }
}

$laptopAnto = new laptop();
$laptopAnto->pemilik = "Anto <br>";

echo $laptopAnto->pemilik;
//echo $laptopAnto->hidupkanLaptop();
echo $laptopAnto->paksaHidupkanLaptop();
