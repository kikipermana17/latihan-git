<?php

$url = "https://api.kawalcorona.com/indonesia/provinsi/";
//persiapkan curl/init curl
$ca = curl_init();
//set url
curl_setopt($ca, CURLOPT_URL, $url);
//return the transfer as a string
curl_setopt($ca, CURLOPT_RETURNTRANSFER, 1);
//output contains the output string
$dataCovid = curl_exec($ca);
//tutup curl
curl_close($ca);
//menampilkan hasil curl
//echo $dataCovid;
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
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
            <?php 
            $no = 1;
            $data = json_decode($dataCovid);
            foreach ($data as $corona){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $corona->attributes->Provinsi; ?></td>
                <td><?php echo $corona->attributes->Kasus_Posi; ?></td>
                <td><?php echo $corona->attributes->Kasus_Semb; ?></td>
                <td><?php echo $corona->attributes->Kasus_Meni; ?></td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>
    </nav>
</body>
</html>
