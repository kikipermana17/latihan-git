<?php

    if (isset($_POST['save'])){
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $mobil = $_POST['mobil'];
        $jenis = $_POST['jenis'];
        $merk = $_POST['merk'];
        $plat = $_POST['plat'];
        $tanggalPinjam = $_POST['tanggalPinjam'];
        $tanggalKembali = $_POST['tanggalKembali'];
        $penjamin = $_POST['penjamin'];
        $supir = $_POST['supir'];


        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lat1pro.php" method="post">
        <fieldset>
            <legend><h2>Vertifikasi Kembali</h2></legend>
            <tr>
            <td><input type="hidden" name="nama" value="<?php echo "$nama";?>">
            <input type="hidden" name="nik" value="<?php echo "$nik";?>">
            <input type="hidden" name="jk" value="<?php echo "$jk";?>">
            <input type="hidden" name="agama" value="<?php echo "$agama";?>">
            <input type="hidden" name="mobil" value="<?php echo "$mobil";?>">
            <input type="hidden" name="jenis" value="<?php echo "$jenis";?>">
            <input type="hidden" name="merk" value="<?php echo "$merk";?>">
            <input type="hidden" name="plat" value="<?php echo "$plat";?>">
            <input type="hidden" name="tanggalPinjam" value="<?php echo "$tanggalPinjam";?>">
            <input type="hidden" name="tanggalKembali" value="<?php echo "$tanggalKembali";?>">
            <input type="hidden" name="penjamin" value="<?php echo "$penjamin";?>">
            <input type="hidden" name="supir" value="<?php echo "$supir";?>"></td>
        </tr>

        <tr>
            <td>Vertifikasi Kembali</td>
            <td>:</td>
            <td><input type="date" name="vertif"></td>
        </tr>
        <input type="submit" name="save" value="save">
        <input type="reset" name="reset" value="clear">
        </fieldset>
    </form>
</body>
</html>