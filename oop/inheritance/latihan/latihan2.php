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
            <legend>Pembayaran</legend>
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="namabarang"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td><input type="number" name="jumlahpesanan"></td>
                </tr>

                    <tr>
            <td>Sistem Pembayaran </td>
            <td> : </td>
            <td><select type="text" name="sistempembayaran" >
            <option value= "Cash" > Cash</option>
            <option value= "M-Banking" > M-Banking</option>
            <option value= "Gopay" > Gopay</option>
            <option value= "Pikup" > Pikup</option>
            </select></td>
            </tr>
            <tr>
                 <td></td><td></td>
                 <td><input type="submit" name="Input" value="Input"><hr></td>
                </tr>



    </form>
    <?php
if (isset($_POST['Input'])) {
    $namabarang = $_POST['namabarang'];
    $jumlahpesanan = $_POST['jumlahpesanan'];
    $harga = $_POST['harga'];
    $sistempembayaran = $_POST['sistempembayaran'];
    $harganormal = $harga * $jumlahpesanan;

    function rupiah($angka)
    {

        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;

    }

    class pembayaran
    {
        public function __construct($namabarang, $jumlahpesanan, $harga, $sistempembayaran, $harganormal)
        {
            $this->namabarang = $namabarang;
            $this->jumlahpesanan = $jumlahpesanan;
            $this->harga = $harga;
            $this->sistempembayaran = $sistempembayaran;
            $this->harganormal = $harganormal;
        }
        public function discount()
        {
            if ($this->harganormal >= 250000) {
                $hargadiscount = $this->harganormal * 0.15;
            } elseif ($this->harganormal >= 150000) {
                $hargadiscount = $this->harganormal * 0.1;
            } else {
                $hargadiscount = 0;
            }
            return $hargadiscount;
        }

    }
// turunkan class Malaikat ke chromebook
    class systemPembayaran extends pembayaran
    {
        public function discountTambahan()
        {
            if ("Cash" == $this->sistempembayaran) {
                $a = $this->discount();

            } elseif ("M-Banking" == $this->sistempembayaran) {
                $a = ($this->harganormal * 0.025) + $this->discount();

            } elseif ("Gopay" == $this->sistempembayaran) {
                $a = ($this->harganormal * 0.1) + $this->discount();

            } elseif ("Pikup" == $this->sistempembayaran) {
                $a = ($this->harganormal * 0.015) + $this->discount();

            }
            return $a;
        }
        public function status()
        {
            if ("Cash" == $this->sistempembayaran) {
                $a = $this->harganormal - $this->discount();

            } elseif ("M-Banking" == $this->sistempembayaran) {
                $a = $this->harganormal - $this->discountTambahan();

            } elseif ("Gopay" == $this->sistempembayaran) {
                $a = $this->harganormal - $this->discountTambahan();

            } elseif ("Pikup" == $this->sistempembayaran) {
                $a = $this->harganormal - $this->discountTambahan();

            }
            return $a;
        }

        public function csb()
        {
            if ("Cash" == $this->sistempembayaran) {
                $a = "Anda Tidak Mendapatkan Cashback";

            } elseif ("M-Banking" == $this->sistempembayaran) {
                $a = "Anda Mendapatkan Cashback sebesar  " . $this->harganormal * 0.025;

            } elseif ("Gopay" == $this->sistempembayaran) {
                $a = "Anda Mendapatkan Cashback sebesar  " . $this->harganormal * 0.1;

            } elseif ("Pikup" == $this->sistempembayaran) {
                $a = "Anda Mendapatkan Cashback sebesar  " . $this->harganormal * 0.015;

            }
            return $a;
        }
    }
    $output = new systemPembayaran($namabarang, $jumlahpesanan, $harga, $sistempembayaran, $harganormal);

    echo "<tr><td>Nama Barang </td> <td>:</td>  <td>" . $output->namabarang . "</td><tr>";
    echo "<tr><td>Harga Barang </td> <td>:</td>  <td>" . $output->harga . "</td><tr>";
    echo "<tr><td>Jumlah Pesanan </td> <td>:</td>  <td>" . $output->jumlahpesanan . "</td><tr>";
    echo "<tr><td>Harga Normal </td> <td>:</td>  <td>" . $output->harganormal . "</td><tr>";
    echo "<tr><td>Jenis Pembayaran </td> <td>:</td>  <td>" . $output->sistempembayaran . "</td><tr>";
    echo "<tr><td>Cashback</td> <td>:</td>  <td>" . $output->csb() . "</td><tr>";
    echo "<tr><td>Discount</td> <td>:</td>  <td>" . $output->discount() . "</td><tr>";
    echo "<tr><td>Total Discount</td> <td>:</td>  <td>" . $output->discountTambahan() . "</td><tr>";
    echo "<tr><td>Total Harga</td> <td>:</td>  <td>" . $output->status() . "</td><tr>";

}

?>
      </table>
        </fieldset>
</body>
</html>