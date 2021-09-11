<?php

    if (isset($_POST['save'])){
        $nama = $_POST['nama'];
        $asal = $_POST['asal'];
        $indo = $_POST['indo'];
        $mtk = $_POST['mtk'];
        $inggris = $_POST['inggris'];
        $ipa = $_POST['ipa'];
        $totalNilai = 0;
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
    <fieldset>
        <legend>Data Siswa</legend>
        <table border=1>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Nilai Bahasa Indonesia</th>
                <th>Nilai Matematika</th>
                <th>Nilai Bahasa Inggris</th>
                <th>Nilai Ipa</th>
                <th>Jumlah Nilai</th>
                <th>Keterangan</th>
    
            </tr>
        <?php
        
        $no = 1;
        for($i=0; $i < count($nama); $i++) {?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama[$i]; ?></td>
            <td><?php echo $asal[$i]; ?></td>
            <td><?php echo $indo[$i]; ?></td>
            <td><?php echo $mtk[$i]; ?></td>
            <td><?php echo $inggris[$i]; ?></td>
            <td><?php echo $ipa[$i]; ?></td>
           <?php $totalNilai = $indo[$i]+$mtk[$i]+$inggris[$i]+$ipa[$i];?>
            
            <?php if ($totalNilai >= 320){
            $keterangan = "Diterima";
        }else{
            $keterangan = "tidak di Terima";
        }?>
        </td>
            <td><?php echo $totalNilai;?></td>
            <td><?php echo $keterangan;?></td>
        </tr>
        <?php
        
        }?> 
        </table>
    </fieldset>
</body>
</html>