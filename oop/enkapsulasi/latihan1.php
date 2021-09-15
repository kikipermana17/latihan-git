<?php
class Admin
{
    public $nama = "Ahmad";
    protected $user = "Admin";
    private $pass = "001122";

    public function login()
    {
        $a = $this->user;
        $b = $this->pass;
        if ($a == "Admin" && $b == "001122") {
            $c = "Login Berhasil";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->user;
        $b = $this->nama;
        $c = "User : " . $user . "Nama : " . $nama;
        return $c;
    }
}

$admin = new Admin();

echo "Nama : " . $admin->nama . "<br>";
echo "Keterangan : " . $admin->login() . "<hr>";
