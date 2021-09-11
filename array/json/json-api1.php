<?php

$url = "https://api.kawalcorona.com/indonesia/";
//persiapkan curl/init curl
$cn = curl_init();
//set url
curl_setopt($cn, CURLOPT_URL, $url);
//return the transfer as a string
curl_setopt($cn, CURLOPT_RETURNTRANSFER, 1);
//output contains the output string
$covid = curl_exec($cn);
//tutup curl
curl_close($cn);
//menampilkan hasil curl
//echo $covid;
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
    <nav>
        <center>
        <nav>
        |<a href="json-api.php">Data Covid</a>|
            |<a href="json-api1.php">Data Indonesia</a>|
            |<a href="json-api2.php">Data Covid Provinsi</a>|
            |<a href="glob-pos.php">Global Positif</a>|
            |<a href="glob-men.php">Global Meninggal</a>|
        </nav>
    </center>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1> 
            
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                <th>Dirawat</th>
            </tr>
           <?php 
            $no = 1;
            $data = json_decode($covid);
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data[0]->name; ?></td>
                <td><?php echo $data[0]->positif; ?></td>
                <td><?php echo $data[0]->sembuh; ?></td>
                <td><?php echo $data[0]->meninggal; ?></td>
                <td><?php echo $data[0]->dirawat; ?></td>
            </tr>
        </table>
    </fieldset>
    </nav>
</body>
</html>