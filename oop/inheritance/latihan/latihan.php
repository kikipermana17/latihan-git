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
        <legend>Makhluk</legend>
        <form action=" " method="post">
            <tr>
                <td>Jenis Hamba</td>
                <td>: <select name="hamba">
                        <option value="Manusia">Manusia</option>
                        <option value="Malaikat">Malaikat</option>
                        <option value="Jin">Jin</option>
                        <option value="Setan">Setan</option>
                </select></td>
            </tr>
            <input type="submit" name="save" value="save">
        </form>
    </fieldset>
</body>
</html>

<?php

if (isset($_POST['save'])) {
    $hamba = $_POST['hamba'];

    class makhluk
    {
        public function __construct($hamba)
        {
            $this->hamba = $hamba;
        }
        //public function manusia()
        //{
        //  return "Beribadah";
        //}
    }

    class jin extends makhluk
    {
        public function sifat()
        {
            parent::__construct($this->hamba);
            if ($this->hamba == "Malaikat") {
                $outpu = "Beribadah kepada tuhan";
            } elseif ($this->hamba == "Manusia") {
                $outpu = "Beribadah kepada tuhan";
            } elseif ($this->hamba == "Jin") {
                $outpu = "Ada yg beribadah dan ada yg jahat";
            } elseif ($this->hamba == "Setan") {
                $outpu = "Mengganggu Manusia";
            } else {
                return "Hamba Tidak terdekteksi";
            }
            return $outpu;

        }
    }
    $input = new jin($hamba);
    ?>
<table>
    <tr>
        <td><?php echo "Jenis Makhluk : " . $hamba . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Tugasnya : " . $input->sifat() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>