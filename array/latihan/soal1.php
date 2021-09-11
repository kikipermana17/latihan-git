<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA</title>
</head>
<body>
    <fieldset>
        <legend>Input Data Array</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>MASUKAN JUMLAH DATA</th>
                    <td>: <input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="simpan">Simpan</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
<?php
    if(isset($_POST['simpan']))
    {
        $row = $_POST['jumlah'];

    ?>

    <fieldset>
        <legend>Input Data Siswa</legend>
        <table>
            <form action="soal1pro.php" method="post">
            <?php
            for($i=1; $i<= $row; $i++)
            {
                ?>
                <tr>
                    <tr>
                        <th colspan=2>Data Ke-<?php echo $i; ?></th>
                        <td>Nama</td>
                        <td><input type="text" name="nama[]"></td>
                    </tr>
                    <tr>
                    <th colspan=2></th>
                        <td>Asal Sekolah</td>
                        <td><input type="text" name="asal[]"></td>
                    </tr>
                    <th colspan=2></th>
                        <td>Nilai Bahasa Indonesia</td>
                        <td><input type="number" name="indo[]" min=1 max=100 require></td>
                    </tr>
                    <th colspan=2></th>
                        <td>Nilai Matematika</td>
                        <td><input type="number" name="mtk[]" min=1 max=100 require></td>
                    </tr>
                    <th colspan=2></th>
                        <td>Nilai Bahasa Inggris</td>
                        <td><input type="number" name="inggris[]" min=1 max=100 require></td>
                    </tr>
                    <th colspan=2></th>
                        <td>Nilai Ipa</td>
                        <td><input type="number" name="ipa[]" min=1 max=100 require></td>
                    </tr>
                </tr>
            <?php
            }
            ?>
            <tr>
                <th></th>
                <td><button type="submit" name="save">Simpan</button></td>
            </tr>
            </form>
        </table>
    </fieldset>
    <?php
    }?>
</body>
</html>