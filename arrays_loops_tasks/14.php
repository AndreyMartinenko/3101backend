<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.18
 * Time: 10:56
 */


$e = [2,3,4];
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $item) {
    foreach ($e as $value) {
        if ($item == $value)
            echo "Есть!<br>";
       else
           echo "НЕТ!<br>";
    }
}