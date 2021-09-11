<?php
//optional parameter/default parameter
function tentangSaya ($bil1 = 1, $bil2 = 2) {
  return $bil1 + $bil2;
}

//pemanggilan function
echo tentangSaya(10, 10) ."<br>";
echo tentangSaya(10) ."<br>";
echo tentangSaya(8) ."<br>";
echo tentangSaya();
