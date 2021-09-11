<?php

  if (isset($_POST['proses'])) {
    $uang = $_POST['uang'];
    $pembayaran = $_POST['pembayaran'];

  }
  echo "Keterangan : ";
  function rupiah($angka){
	
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
  }

  if ($uang <= $pembayaran){
    echo "Nama Anda Kami Blacklist Dari Rental Kami,";
    $kurang = $uang - $pembayaran;
    echo "Uang Anda Kurang";
    echo rupiah($kurang);
  }elseif ($uang >= $pembayaran){
    $kembali = $uang - $pembayaran;

    echo "Uang Kembalian Anda";
    echo rupiah($kembali);
    echo ",Terimakasih Telah Menggunakan Rental Kami";
  }

?>