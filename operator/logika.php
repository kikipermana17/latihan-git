<?php

    $a = 5;
    $b = 4;

    echo "$a == $b : ". ($a == $b);
    echo "<br> $a != $b : ". ($a != $b);
    echo "<br>$a > $b : ". ($a > $b);
    echo "<br>$a < $b : ". ($a < $b);
    echo "<br>($a == $b) && ($a > $b) : "
              . (($a == $b) && ($a > $b));
               
    echo "<br>($a == $b) !! ($a > $b ) : "
              . (($a != $b) || ($a > $b )); 
    echo "<br><hr>";

        $a = 1;
        $b = 9;
        $c = 10;
        $d = 11;

        echo "<br>$a < $c : ". ($a < $c);
        echo "<br>($b > $c) dan ($c > $b) : "
              . (($b > $c) && ($c > $b));
        echo "<br>($c > $d) dan ($d < $c) : "
              . (($c > $d) && ($d < $c));
        echo "<br><hr>";

            $tono = 10000;
            $tini = 8000;
            $toni = 15000;

            echo "Uang tono = $tono <br>";
            echo "Uang tini = $tini <br>";
            echo "Uang toni = $toni <br>";
            echo "<br>";
            echo "Uang toni lebih besar dari tini dan tono? ";
            echo "<br> $toni > $tini dan $tono : "
              . (($toni > $tini) && ($toni != $tono));
            echo "<br>Uang toni lebih besar dari tini dan lebih kecil dari tono? ";
            echo "<br> $toni > $tini dan $toni < $tono : "
              . (($toni > $tini) && ($toni < $tono));
              echo "<br><hr>";


            $user = "admin";
            $pass = 123;

            echo "Masukan username : $user";
            echo "<br>Masukan password : $pass";
            echo "<br> Login : "
            . (($user == $user) && ($pass == $pass));
              echo "<br><hr>";



?>
