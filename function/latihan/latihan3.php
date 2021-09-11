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
        <legend>Biodata</legend>
        <form action=" " method="POST">
            <tr>
                <th>Nama</th>
                <td>: <input type="text" name="nama"></td>
            </tr><br>
            <tr>
                <th>Jenis Kelamin</th>
                <td>: 
                <input type="radio" name="jk" value="Laki Laki">Laki Laki
                <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr><br>
            <tr>
                <th>Tanggal Lahir</th>
                <td>: <input type="date" name="tgl"></td>
            </tr><br>
            <tr>
                <th>Agama</th>
                <td>: <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
            </select>
            </td>
            </tr><br>
            <tr>
                <th>Alamat</th>
                <td>: <textarea name="alamat" cols="30" rows="10"></textarea></td>
            </tr><br>
            <tr>
                <th>Hobi</th>
                <td>: <input type="checkbox" name="hobi[]" value="Berlayar">Berlayar 
                <input type="checkbox" name="hobi[]" value="Mancing">Mancing 
                <input type="checkbox" name="hobi[]" value="Masak">Masak 
                <input type="checkbox" name="hobi[]" value="Game">Game 
                <input type="checkbox" name="hobi[]" value="Menari">Menari 
            </td>
            </tr><br>
            <input type="submit" name="save" value="Proses">
        </form>
    </fieldset>
</body>
</html>

<?php

    if (isset($_POST['save'])){
        $hobi = $_POST['hobi'];
        function biodata($nama, $jk, $tgl, $agama, $alamat, $hobi){
            echo "Nama : $nama<br>";
            echo "Jenis Kelamin : $jk<br>";
            echo "Tanggal Lahir : $tgl<br>";
            echo "Agama : $agama<br>";
            echo "Alamat : $alamat<br>";
            echo "Hobi :";
            foreach ($hobi as $saya){
                echo "<li>".$saya ."</li>";
            }
        }
        echo biodata($_POST['nama'],$_POST['jk'], $_POST['tgl'],$_POST['agama'],
        $_POST['alamat'],$hobi);
    }

?>