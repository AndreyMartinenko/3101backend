
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.02.18
 * Time: 13:27
 */

function isBoolType($a = 20)
{
        $b = (boolean)$a;

    echo "число $a при переводе в булев тип изменится на $b <br/>
      так как при переводе значение boolean будет = true(по правилам приведения типов)";
    echo "<br>";
    var_dump($a, $b);
}
isBoolType();