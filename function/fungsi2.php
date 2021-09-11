<?php

function sapaPengunjung () {
  $alas = 10;
  $tinggi = 5;
  $luas = ($alas * $tinggi)/2;
  return $luas;
}

//pemanggilan function
echo "Luas Segitiga : " .sapaPengunjung();
?>