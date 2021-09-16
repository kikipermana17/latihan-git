<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend></legend>
            <table>
                <tr>
                    <td>Jumlah Kaki Kucing </td>
                    <td>:</td>
                    <td><input type="number" name="Kaki"></td>
                </tr>
                <tr>
                    <td>Warna Kucing </td>
                    <td>:</td>
                    <td><input type="text" name="warna"></td>
                </tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $jumlahKaki = $_POST['Kaki'];
    $warna = $_POST['warna'];

    class Kucing
    {
        public function __construct($jumlahKaki)
        {
            $this->jumlahKaki = $jumlahKaki;

        }
        public function info()
        {
            if ($this->jumlahKaki > 4) {
                $outpu = "Siluman Kucing";
            } elseif ($this->jumlahKaki < 4) {
                $outpu = "Kucing Cingked";
            } elseif ($this->jumlahKaki = 4) {
                $outpu = "Kucing Normal";
            }
            return $outpu;
        }

    }
    $kucing1 = new Kucing($jumlahKaki);
    ?>
<table>
    <tr>
        <td><?php echo "Warna Kucing : " . $warna . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Jumlah Kaki : " . $kucing1->jumlahKaki . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Info : Kucing " . $warna . " " . $kucing1->info() . "<br>";"<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>