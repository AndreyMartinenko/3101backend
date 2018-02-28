<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.18
 * Time: 10:56
 */
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $item) {
    echo " $item ";
    if ($item % 3 === 0)
    echo "<br>";
}