<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.18
 * Time: 10:56
 */
$a = 1000;
$num = 0;
while($a >= 50) {
    $a = $a / 2;
    $num++;
}
echo "new number is: $a; <br> count of iteration: $num";