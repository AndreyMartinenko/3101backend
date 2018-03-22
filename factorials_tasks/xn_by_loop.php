<?php
        //x^n by WHILE Loop
$y = 1;
$x = rand(3,8);
$n = rand(3,5);
echo "X =  $x <br>" . "n = $n<br>";
    while ($n >= 1) {
        $y = $y * $x;
        $n--;
    }
    echo "X^n = {$y}";
