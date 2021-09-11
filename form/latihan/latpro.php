<?php

    if (isset($_POST['save'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $gajiLembur = 0;
        $totalPajak = 0;
        $jamLembur = $jamKerja-173;
            $gajiLembur = $jamLembur*20000;
            function rupiah($angka){
	
                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                return $hasil_rupiah;
             
            }

        if ($golongan == 1){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }elseif($golongan == 2){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }elseif ($golongan == 3){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else{
            $gajiPokok = 3000000;
            $tunjangan = 300000;
        }
        $pajakGajiPokok = 0.05*$gajiPokok;
        $pajakGajiLembur = 0.05*$gajiLembur;
        $totalPajak = $pajakGajiPokok+$pajakGajiLembur;
        $gajiKotor = $gajiPokok+$tunjangan+$gajiLembur;
        $totalGaji = $gajiKotor - $totalPajak;
        
        //echo "Nama : <b>$nama</b> <br>";
        //echo "Jenis Kelamin : <b>$jk</b> <br>";
        //echo "Agama : <b>$agama</b> <br>";
        //echo "Gaji Pokok : <b>$gajiPokok</b> <br>";
        //echo "Gaji Lembur : <b>$gajiLembur</b> <br>";
        //echo "Pajak Gaji Pokok : <b>$pajakGajiPokok</b> <br>";
        //echo "Pajak Gaji Lembur : <b>$pajakGajiLembur</b> <br>";
        //echo "Total Pajak : <b>$totalPajak</b> <br>";
        //echo "Tunjangan Pengabdian : <b>$tunjangan</b> <br>";
        //echo "Gaji Bersih : <b>$totalGaji</b> <br>";
        //echo "Gaji Kotor : <b>$gajiKotor</b> <br>";


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
    <table border=5 width=100% align="center">
    <tr>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Golongan</th>
    <th>Jumlah Jam Kerja</th>
    <th>Jumlah Jam Lembur</th>
  </tr>
  <tr>
    <td><?php echo "$nama";?></td>
    <td><?php echo "$jk";?></td>
    <td><?php echo "$agama";?></td>
    <td><?php echo "$golongan";?></td>
    <td><?php echo "$jamKerja Jam";?></td>
    <td><?php echo "$jamLembur Jam";?></td>
  </tr>

  <tr>
      <td colspan="6" align="center">Keuangan</td>
  </tr>
  <tr>
      <td colspan="5">Gaji Pokok</td>
      <td><?php echo rupiah($totalGaji); ?></td>
  </tr>
  <tr>
      <td colspan="5">Uang Lembur</td>
      <td><?php echo rupiah($gajiLembur); ?></td>
  </tr>
  <tr>
      <td colspan="5">Pajak Pokok</td>
      <td><?php echo rupiah($pajakGajiPokok); ?></td>
  </tr>
  <tr>
      <td colspan="5">Pajak Lembur</td>
      <td><?php echo rupiah($pajakGajiLembur); ?></td>
  </tr>
  <tr>
      <td colspan="6" align="center">Gaji Kotor</td>
  </tr>
  <tr>
      <td colspan="5">(Gaji Pokok + Tunjangan + Uang Lembur)</td>
      <td><?php echo rupiah($gajiKotor); ?></td>
  </tr>
  <tr>
      <td colspan="6" align="center">Total Pajak</td>
  </tr>
  <tr>
      <td colspan="5">(Pajak Gaji Pokok + Pajak Gaji Lembur)</td>
      <td><?php echo rupiah($totalPajak); ?></td>
  </tr>
  <tr>
      <td colspan="6" align="center">Gaji Bersih</td>
  </tr>
  <tr>
      <td colspan="5">(Gaji Kotor + Total Pajak)</td>
      <td><?php echo rupiah($totalGaji); ?></td>
  </tr>
    </table>

    <div style=text-align:right>Bandung,<?php echo date('d M y');?>
<br><br><br><br>
<br>Bendahara <br><br>
</div>
 
</body>
</html>