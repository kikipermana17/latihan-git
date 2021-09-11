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
        <legend>Perhitungsn</legend>
        <form action=" " method="post">
            <tr>
                <th>Masukan Bilangan</th>
                <td>: <input type="text" name="bil"></td>
            </tr>
            <tr>
                <th>Masukan Pangkat</th>
                <td>: <input type="text" name="pangkat"></td>
            </tr><br>
            <input type="submit" name="save">
        </form>
    </fieldset>
</body>
</html>

<?php

    if (isset($_POST['save'])){
        $a = $_POST['bil'];
        $b = $_POST['pangkat'];
    }
    function faktorial(){
        if ($a > 2) {
            return $a * faktorial($a - 1);
        }else{
            return $a;
        }
    }

    $hasil = faktorial(5);
    echo $hasil;
?>