<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <legend>Mahasiswa</legend>
        <table>
        <form action=" " method="post">
            <tr>
                <td>Nama Barang</td>
                <td>: <input type="text" name="barang"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>: <input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah Pesanan</td>
                <td>: <input type="text" name="pesanan"></td>
            </tr>
            <tr>
                <td>Sistem Pembayaran</td>
                <td>: <select name="pembayaran">
                        <option value="Cash">Cash</option>
                        <option value="M-Banking">M-Bangkin</option>
                        <option value="Gopay">Gopay</option>
                        <option value="Pickup">Pickup</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="save"><input type="reset" name="reset" value="reset"></td>
            </tr>

        </form>
    </table>

<?php

if (isset($_POST['save'])) {
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $pesanan = $_POST['pesanan'];
    $pembayaran = $_POST['pembayaran'];

    class mahasiswa
    {
        public $barang;
        public $harga;
        public $pesanan;
        public function __construct($barang, $harga, $pesanan)
        {
            $this->barang = $barang;
            $this->harga = $harga;
            $this->pesanan = $pesanan;
        }

        public function dsc()
        {
            if ($this->pesanan >= 150000)
            {
                $psn = $harga - 10%;
            }elseif ($this->pesanan >= 250000)
            {
                $psn = $harga - 15%;
            }
            return $psn;
        }
    }

    class guru extends mahasiswa
    {
        public function sifat()
        {

            if ($this->pembayaran == "Cash") {
                $tugas = "$this->harga";
            } elseif ($this->pembayaran == "M-Bangking") {
                $tugas = "$this->dsc()*0.025";
            } elseif ($this->pembayaran == "Gopay") {
                $tugas = "$this->dsc()*0.1";
            } elseif ($this->pembayaran == "Pickup") {
                $tugas = "$this->dsc()*0.015";
            }
            return $tugas;
        }

    }
    $input = new guru($nilai);
    ?>
<table>
    <tr>
        <td><?php echo "Nama Mahasiswa : " . $nama . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Nim : " . $nim . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Mata Kuliah : " . $matkul . "<br>"; ?> </td>
    </tr>
     <tr>
        <td><?php echo "Nama Dosen : " . $dosen . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Nilai : " . $nilai . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Grade : " . $input->grade() . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Status : " . $input->sifat() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>

</body>
</html>
