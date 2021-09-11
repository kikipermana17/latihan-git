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
        $vertif =$_POST['vertif'];
    
    function rupiah($angka){
	
      $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
      return $hasil_rupiah;
    }

    if ($supir == "Ya") {
      $biayaHarian = 275000;
    }elseif ($supir == "Tidak") {
      $biayaHarian = 150000;
    }

    $tgl1 = date_create("$tanggalPinjam");
    $tgl2 = date_create("$tanggalKembali");
    $lm = $tgl2->diff($tgl1);

    $tgl11 = date_create("$tanggalKembali");
    $tgl22 = date_create("$vertif");
    $lama = $tgl22->diff($tgl11);

    $denda = 240000 * $lama->d;

    $biaya = $biayaHarian * $lm->d;
    $totalDenda = $lama->d * $denda;
    $pembayaran = $biaya + $totalDenda;
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
  <style>
    @media print{
      .noprint {display;none;}
    }
  </style>
    <table border=5 width=100% align="center">
    <tr>
    <td colspan="7" align="center">Data Diri</td>
    </tr>

    <tr>
    <th >Nama</th>
    <th >Nomor Induk Kependudukan</th>
    <th >Jenis Kelamin</th>
    <th >Agama</th>
    <th  colspan="3">Penjamin</th>
  </tr>
  <tr>
    <td><?php echo "$nama";?></td>
    <td><?php echo "$nik";?></td>
    <td><?php echo "$jk";?></td>
    <td><?php echo "$agama";?></td>
    <td colspan="3"><?php echo "$penjamin";?></td>
  </tr>

  <tr>
  <td colspan="7" align="center">Data Rental Mobil</td>
  </tr>
     
  <tr>
    <th >Nama Mobil</th>
    <th >Jenis Mobil</th>
    <th >Merk Mobil</th>
    <th >Plat MObil</th>
    <th >Tanggal Pinjam</th>
    <th >Tanggal Kembali</th>
    <th >Menggunakan Supir</th>
  </tr>

  <tr>
    <td><?php echo "$mobil";?></td>
    <td><?php echo "$jenis";?></td>
    <td><?php echo "$merk";?></td>
    <td><?php echo "$plat";?></td>
    <td><?php echo "$tanggalPinjam";?></td>
    <td><?php echo "$tanggalKembali";?></td>
    <td><?php echo "$supir";?></td>
  </tr>

  <tr>
  <td colspan="7" align="center">Rincian Biaya</td>
  </tr>

  <tr>
      <td colspan="6">Lama Pinjaman</td>
      <td><?php echo "$lm->d Hari";?></td>
  </tr>

  <tr>
      <td colspan="6">Biaya Harian</td>
      <td><?php echo rupiah($biayaHarian); ?></td>
  </tr>

  <tr>
      <td colspan="6">Telat Mengembalikan</td>
      <td><?php echo "$lama->d Hari";?></td>
  </tr>

  <tr>
      <td colspan="6">Denda Harian</td>
      <td><?php echo rupiah($denda); ?></td>
  </tr>

  <tr>
  <td colspan="7" align="center">Total Biaya</td>
  </tr>

  <tr>
      <td colspan="6">Total Biaya (Lama Pinjaman * Harian)</td>
      <td><?php echo rupiah($biaya); ?></td>
  </tr>

  <tr>
      <td colspan="6">Total Denda (Telat Mengembalikan * biaya denda)</td>
      <td><?php echo rupiah($totalDenda); ?></td>
  </tr>

  <tr>
  <td colspan="7" align="center">Pembayaran</td>
  </tr>

  <tr>
      <td colspan="6">Total Pembayaran (Telat Mengembalikan * Total Denda)</td>
      <td><?php echo rupiah($pembayaran); ?></td>
  </tr>
  
    </table>

    <div style=text-align:right>Bandung,<?php echo date('d M y');?>
<br><br><br><br>
<br>Bendahara <br><br>
</div>


    <div class="noprint">
      <button onclick="window.print();">Print</button>
    </div>

    <form action="pro1.php" method="post">
    Masukan Uang Pembayaran : 
    <input type="text" name="uang">
    <input type="submit" name="proses" value="bayar">
    <input type="hidden" name="pembayaran" value=<?php echo "$pembayaran";?>>
    </form>
</body>
</html>