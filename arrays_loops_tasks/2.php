<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.18
 * Time: 22:51
 */
$result = 0;
$a = [1, 20, 15, 17, 24, 35];
foreach ($a as $value)
    $result+= $value;
unset($value);
echo "Result = $result with foreach loop  <br>";
echo "Result =" .  array_sum($a) . " using function array_sum";
