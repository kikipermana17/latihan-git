<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Kucing</legend>
        <form action=" " method="post">
            <tr>
                <td>Masukan Kaki Kucing</td>
                <td>: <input type="text" name="kaki"></td>
            </tr>
            <input type="submit" name="save" value="save">
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $kucing = $_POST['kucing'];

    class kucing
    {
    public $warna = "Putih";
    public $kucing
    protected $kucing1 = "3Kaki";
    protected $kucing2 = "4Kaki";
    protected $kucing3 = "5Kaki";

    public function kaki()
    {
        $kucing1 = $this->kucing1;
        $kucing2 = $this->kucing2;
        if ($kucing == $kucing1)
        {
            $a = "Kucing Cingked";
        }elseif ($kucing == $kucing2)
        {
            $b = "Kucing Normal";
        }else{
            return "Kucing Siluman";
        }
    }
}
class kucing1 extends kucing
{
    public function kaki()
    {
        $kucing1 = $this->kucing1;
        $kucing2 = $this->kucing2;
        if ($kucing == $kucing1)
        {
            $a = "Kucing Cingked";
        }elseif ($kucing == $kucing2)
        {
            $b = "Kucing Normal";
        }else{
            return "Kucing Siluman";
        }
    }
}


    }

