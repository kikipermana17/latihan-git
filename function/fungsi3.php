<?php

function sapaPengunjung ($a, $b) {
  $alas = $a;
  $tinggi = $b;
  $luas = ($alas * $tinggi)/2;
  return $luas;
}

//pemanggilan function
echo "Luas Segitiga : " .sapaPengunjung(10, 8);
?>