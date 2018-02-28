<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.18
 * Time: 22:51
 */
$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $value) {
    if ($value > 3 && $value < 10)
        echo "$value <br>";
}