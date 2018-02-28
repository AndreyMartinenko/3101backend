<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.18
 * Time: 14:50
 */
function isBoolType($a = -20)
{
    $b = (bool)$a;

    echo "число $a при переводе в булев тип изменится на $b <br/>
      так как при переводе значение boolean будет = true не смотря на знак '-'(по правилам приведения типов )";
    echo "<br>";
    var_dump($a, $b);
}
isBoolType();