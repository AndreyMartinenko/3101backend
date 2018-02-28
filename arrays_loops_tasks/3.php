<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.18
 * Time: 22:51
 */

$result = 0;
$a = [26, 17, 136, 12, 79, 15];
foreach ($a as $value)
     $result+= $value * $value;
echo "Result is : $result";

