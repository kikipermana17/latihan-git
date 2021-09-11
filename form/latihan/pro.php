<?php

if (isset($_POST['save'])) {
    $bayar = $_POST['bayar'];
    
    

    if ($bayar <= $bayar1) {
        echo "Maaf Uang Anda Kurang, anda kami blacklist dari rental kami";
    }elseif ($bayar >= $bayar1){
        echo "Terimakasih Telah Menggunakan Rental kami, Kembalian anda";
    }
    
    $bayar1 = $bayar - $pembayaran;
}

?>

<html>
<tr>
      <td >Uang Pembayaran </td>
      <td><?php echo rupiah($bayar); ?></td>
  </tr>
</html>